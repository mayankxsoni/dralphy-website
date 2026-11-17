<?php
/**
 * Appearance → Customize → Dr. Alphy.
 * Everything that must be verified before launch (contact channels, portraits, testimonials) lives here.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'customize_register', function ( $wp ) {
	$wp->add_panel( 'dralphy', array( 'title' => 'Dr. Alphy — site details', 'priority' => 20 ) );

	$text = function ( $section, $id, $label, $desc = '', $type = 'text', $default = '' ) use ( $wp ) {
		$sanitize = 'textarea' === $type ? 'sanitize_textarea_field' : ( 'url' === $type ? 'esc_url_raw' : 'sanitize_text_field' );
		$wp->add_setting( 'dralphy_' . $id, array( 'default' => $default, 'sanitize_callback' => $sanitize ) );
		$wp->add_control( 'dralphy_' . $id, array( 'section' => $section, 'label' => $label, 'description' => $desc, 'type' => $type ) );
	};

	// Contact & booking.
	$wp->add_section( 'dralphy_contact', array( 'title' => 'Contact & booking', 'panel' => 'dralphy' ) );
	$text( 'dralphy_contact', 'phone', 'Appointment phone number', 'International format, e.g. +97142827788. Verify before launch.', 'text', '+97142827788' );
	$text( 'dralphy_contact', 'whatsapp', 'WhatsApp number', 'Digits with country code. Leave empty to hide every WhatsApp button until the number is verified.' );
	$text( 'dralphy_contact', 'email', 'Enquiry email (receives the contact form)', '', 'text', 'info@doctoralphy.com' );
	$text( 'dralphy_contact', 'booking', 'Online booking link', 'Optional. If empty, "Book a Consultation" buttons go to the Contact page.', 'url' );
	$text( 'dralphy_contact', 'loc1_address', 'Mediclinic Welcare Hospital — address', '', 'text', 'Al Garhoud, Dubai, United Arab Emirates' );
	$text( 'dralphy_contact', 'loc2_address', 'Mediclinic Parkview Hospital — address', '', 'text', 'Umm Suqeim Road, Dubai, United Arab Emirates' );

	// Images.
	$wp->add_section( 'dralphy_images', array( 'title' => 'Portraits', 'panel' => 'dralphy', 'description' => 'Use current, authentic professional portraits. No stock images.' ) );
	foreach ( array( 'portrait_hero' => 'Homepage hero portrait', 'portrait_about' => 'Meet Dr. Alphy / About portrait' ) as $id => $label ) {
		$wp->add_setting( 'dralphy_' . $id, array( 'default' => 0, 'sanitize_callback' => 'absint' ) );
		$wp->add_control( new WP_Customize_Media_Control( $wp, 'dralphy_' . $id, array( 'section' => 'dralphy_images', 'label' => $label, 'mime_type' => 'image' ) ) );
	}

	// Trust strip.
	$wp->add_section( 'dralphy_trust', array( 'title' => 'Trust strip', 'panel' => 'dralphy', 'description' => 'Use the exact verified credential titles. Procedure counts only after documentary confirmation.' ) );
	$text( 'dralphy_trust', 'src_text', 'Verified SRC credential title', 'Enter the exact official title only after it has been verified. The item stays hidden while this is empty.', 'text', '' );

	// Testimonials.
	$wp->add_section( 'dralphy_testimonials', array( 'title' => 'Homepage testimonials', 'panel' => 'dralphy', 'description' => 'Up to three short, authentic excerpts published with written consent. Leave empty to show only the link to Reviews.' ) );
	for ( $i = 1; $i <= 3; $i++ ) {
		$text( 'dralphy_testimonials', "t{$i}_quote", "Testimonial {$i} — excerpt", '', 'textarea' );
		$text( 'dralphy_testimonials', "t{$i}_name", "Testimonial {$i} — attribution", 'e.g. "Patient, endometriosis surgery" — initials or first name only.' );
	}
} );
