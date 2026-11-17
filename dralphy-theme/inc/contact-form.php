<?php
/**
 * Short, privacy-compliant enquiry form. Sends an email; nothing is stored in the database.
 * Protection: nonce, honeypot, minimum fill time, per-visitor rate limit, explicit consent.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function dralphy_enquiry_form() {
	$status = isset( $_GET['enquiry'] ) ? sanitize_key( $_GET['enquiry'] ) : '';
	?>
	<div id="book">
		<?php if ( 'sent' === $status ) : ?>
			<p class="form-msg form-msg--ok" role="status">Thank you. Your enquiry has been sent and the team will contact you during working hours.</p>
		<?php elseif ( $status ) : ?>
			<p class="form-msg form-msg--err" role="alert">Sorry, your enquiry could not be sent. Please check the form and try again, or call <?php echo esc_html( dralphy_phone_display() ); ?>.</p>
		<?php endif; ?>
		<form class="form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
			<input type="hidden" name="action" value="dralphy_enquiry">
			<input type="hidden" name="ts" value="<?php echo esc_attr( time() ); ?>">
			<?php wp_nonce_field( 'dralphy_enquiry', 'dralphy_nonce' ); ?>
			<p class="hp" aria-hidden="true"><label>Leave this field empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label></p>
			<div class="row">
				<p style="margin:0"><label for="enq-name">Full name</label><input id="enq-name" type="text" name="name" required autocomplete="name" maxlength="100"></p>
				<p style="margin:0"><label for="enq-phone">Phone number</label><input id="enq-phone" type="tel" name="phone" required autocomplete="tel" maxlength="30"></p>
			</div>
			<div class="row">
				<p style="margin:0"><label for="enq-email">Email (optional)</label><input id="enq-email" type="email" name="email" autocomplete="email" maxlength="120"></p>
				<p style="margin:0"><label for="enq-loc">Preferred location</label>
					<select id="enq-loc" name="location">
						<option value="No preference">No preference</option>
						<?php foreach ( dralphy_locations() as $loc ) : ?>
							<option><?php echo esc_html( $loc['name'] ); ?></option>
						<?php endforeach; ?>
					</select>
				</p>
			</div>
			<p style="margin:0"><label for="enq-msg">How can we help? (optional)</label><textarea id="enq-msg" name="message" maxlength="1500" aria-describedby="enq-hint"></textarea><small id="enq-hint" style="color:var(--muted)">Please keep this brief and do not include detailed medical history.</small></p>
			<label class="check"><input type="checkbox" name="consent" value="1" required> <span>I agree that my details may be used to contact me about my enquiry, as described in the <a href="<?php echo esc_url( dralphy_url( 'privacy' ) ); ?>">Privacy Notice</a>.</span></label>
			<p class="callout" style="margin:0">This form is not for emergencies. For severe pain, heavy bleeding or fainting, go to the nearest emergency department.</p>
			<div><button class="btn btn--primary" type="submit">Send enquiry</button></div>
		</form>
	</div>
	<?php
}

function dralphy_handle_enquiry() {
	$back = wp_get_referer() ? remove_query_arg( 'enquiry', wp_get_referer() ) : dralphy_url( 'contact' );
	$fail = function ( $code ) use ( $back ) {
		wp_safe_redirect( add_query_arg( 'enquiry', $code, $back ) . '#book' );
		exit;
	};

	if ( ! isset( $_POST['dralphy_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['dralphy_nonce'] ), 'dralphy_enquiry' ) ) { $fail( 'error' ); }

	// Bots: filled honeypot or a form submitted faster than a person can type. Pretend success.
	$ts = isset( $_POST['ts'] ) ? absint( $_POST['ts'] ) : 0;
	if ( ! empty( $_POST['website'] ) || ( time() - $ts ) < 3 ) {
		wp_safe_redirect( add_query_arg( 'enquiry', 'sent', $back ) . '#book' );
		exit;
	}

	$ip  = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';
	$key = 'dralphy_enq_' . md5( $ip . wp_salt() );
	$n   = (int) get_transient( $key );
	if ( $n >= 5 ) { $fail( 'limit' ); }
	set_transient( $key, $n + 1, HOUR_IN_SECONDS );

	$name     = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$phone    = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$email    = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$location = isset( $_POST['location'] ) ? sanitize_text_field( wp_unslash( $_POST['location'] ) ) : '';
	$message  = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( '' === $name || '' === $phone || empty( $_POST['consent'] ) ) { $fail( 'error' ); }

	$to      = is_email( dralphy_opt( 'email' ) ) ? dralphy_opt( 'email' ) : get_option( 'admin_email' );
	$subject = 'Website enquiry — ' . mb_substr( $name, 0, 60 );
	$body    = "New enquiry from the website\n\n"
		. "Name: {$name}\nPhone: {$phone}\nEmail: " . ( $email ? $email : '—' ) . "\nPreferred location: {$location}\n\n"
		. "Message:\n" . ( $message ? mb_substr( $message, 0, 1500 ) : '—' ) . "\n\n"
		. "Consent to be contacted: yes\nSent: " . wp_date( 'j M Y, H:i' ) . "\n";
	$headers = array();
	if ( $email ) { $headers[] = 'Reply-To: ' . $email; }

	$fail( wp_mail( $to, $subject, $body, $headers ) ? 'sent' : 'error' );
}
add_action( 'admin_post_nopriv_dralphy_enquiry', 'dralphy_handle_enquiry' );
add_action( 'admin_post_dralphy_enquiry', 'dralphy_handle_enquiry' );
