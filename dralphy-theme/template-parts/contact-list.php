<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<ul class="contact-list">
	<li><?php echo dralphy_icon( 'phone' ); // phpcs:ignore ?><div><a href="<?php echo esc_url( dralphy_phone_href() ); ?>"><?php echo esc_html( dralphy_phone_display() ); ?></a><small>Appointments</small></div></li>
	<?php if ( dralphy_whatsapp_href() ) : ?>
		<li><?php echo dralphy_icon( 'chat' ); // phpcs:ignore ?><div><a href="<?php echo esc_url( dralphy_whatsapp_href() ); ?>" rel="noopener">WhatsApp</a><small>Message the team</small></div></li>
	<?php endif; ?>
	<?php if ( is_email( dralphy_opt( 'email' ) ) ) : ?>
		<li><?php echo dralphy_icon( 'mail' ); // phpcs:ignore ?><div><a href="mailto:<?php echo esc_attr( antispambot( dralphy_opt( 'email' ) ) ); ?>"><?php echo esc_html( antispambot( dralphy_opt( 'email' ) ) ); ?></a><small>General enquiries</small></div></li>
	<?php endif; ?>
</ul>
