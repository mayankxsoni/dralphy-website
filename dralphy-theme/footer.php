<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
</main>

<footer class="site-footer">
	<div class="wrap">
		<div class="footer-grid">
			<div>
				<p class="footer-brand">Dr. Alphy S. Puthiyidom</p>
				<p>Advanced gynaecological care and minimally invasive surgery in Dubai.</p>
				<p>Program Director, Centre of Excellence in Minimally Invasive Gynaecology and Centre of Excellence in Multidisciplinary Endometriosis Care, Mediclinic Welcare Hospital.</p>
				<ul>
					<li><a href="<?php echo esc_url( dralphy_phone_href() ); ?>"><?php echo esc_html( dralphy_phone_display() ); ?></a></li>
					<?php if ( dralphy_whatsapp_href() ) : ?><li><a href="<?php echo esc_url( dralphy_whatsapp_href() ); ?>" rel="noopener">WhatsApp</a></li><?php endif; ?>
					<?php if ( is_email( dralphy_opt( 'email' ) ) ) : ?><li><a href="mailto:<?php echo esc_attr( antispambot( dralphy_opt( 'email' ) ) ); ?>"><?php echo esc_html( antispambot( dralphy_opt( 'email' ) ) ); ?></a></li><?php endif; ?>
				</ul>
			</div>
			<nav aria-label="Conditions">
				<h2>Conditions</h2>
				<ul>
					<?php foreach ( dralphy_condition_keys() as $k ) : ?>
						<li><a href="<?php echo esc_url( dralphy_url( $k ) ); ?>"><?php echo esc_html( dralphy_label( $k ) ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
			<nav aria-label="Treatments">
				<h2>Treatments</h2>
				<ul>
					<?php foreach ( dralphy_treatment_keys() as $k ) : ?>
						<li><a href="<?php echo esc_url( dralphy_url( $k ) ); ?>"><?php echo esc_html( dralphy_label( $k ) ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
			<div>
				<nav aria-label="Practice">
					<h2>Practice</h2>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<li><a href="<?php echo esc_url( dralphy_url( 'about' ) ); ?>">About Dr. Alphy</a></li>
						<li><a href="<?php echo esc_url( dralphy_url( 'conditions' ) ); ?>">Conditions</a></li>
						<li><a href="<?php echo esc_url( dralphy_url( 'treatments' ) ); ?>">Treatments</a></li>
						<li><a href="<?php echo esc_url( dralphy_url( 'resources' ) ); ?>">Patient Resources</a></li>
						<?php foreach ( dralphy_resource_keys() as $k ) : ?>
							<li><a href="<?php echo esc_url( dralphy_url( $k ) ); ?>"><?php echo esc_html( dralphy_label( $k ) ); ?></a></li>
						<?php endforeach; ?>
						<li><a href="<?php echo esc_url( dralphy_url( 'contact' ) ); ?>">Contact &amp; Booking</a></li>
					</ul>
				</nav>
				<h2 style="margin-top:28px">Locations</h2>
				<ul>
					<?php foreach ( dralphy_locations() as $loc ) : ?>
						<li><a href="<?php echo esc_url( $loc['map'] ); ?>" rel="noopener"><?php echo esc_html( $loc['name'] ); ?></a><br><?php echo esc_html( $loc['address'] ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>


		<div class="footer-bottom">
			<span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Dr. Alphy S. Puthiyidom. All rights reserved.</span>
			<ul>
				<li><a href="<?php echo esc_url( dralphy_url( 'privacy' ) ); ?>">Privacy Notice</a></li>
				<li><a href="<?php echo esc_url( dralphy_url( 'disclaimer' ) ); ?>">Medical Disclaimer</a></li>
			</ul>
		</div>
	</div>
</footer>

<div class="action-bar" role="navigation" aria-label="Quick contact">
	<a href="<?php echo esc_url( dralphy_phone_href() ); ?>"><?php echo dralphy_icon( 'phone' ); // phpcs:ignore ?>Call</a>
	<?php if ( dralphy_whatsapp_href() ) : ?>
		<a href="<?php echo esc_url( dralphy_whatsapp_href() ); ?>" rel="noopener"><?php echo dralphy_icon( 'chat' ); // phpcs:ignore ?>WhatsApp</a>
	<?php endif; ?>
	<a class="is-primary" href="<?php echo esc_url( dralphy_booking_url() ); ?>"><?php echo dralphy_icon( 'calendar' ); // phpcs:ignore ?>Book</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
