<?php
/**
 * Site structure. Order here IS the order in the menu, footer and hub pages,
 * and follows the approved plan (sections 02, 04 and 05) exactly.
 *
 * Slugs: existing live URLs are kept wherever a page already exists.
 * New slugs are provisional until the Search Console audit — change them here only.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/** Conditions, in plan order (section 04). */
function dralphy_condition_keys() {
	return array( 'endometriosis', 'fibroids', 'adenomyosis', 'ovarian-cysts', 'pelvic-pain', 'menstrual', 'incontinence', 'prolapse', 'urogynecology' );
}

/** Treatments, in plan order (section 05). */
function dralphy_treatment_keys() {
	return array( 'laparoscopy', 'endo-surgery', 'fibroid-surgery', 'hysteroscopy', 'cerclage', 'reconstructive', 'ultrasound', 'emergency' );
}

/** Patient Resources children. */
function dralphy_resource_keys() {
	return array( 'blog', 'videos', 'reviews' );
}

/** All page definitions, keyed. */
function dralphy_pages() {
	static $pages = null;
	if ( null === $pages ) {
		$pages = array_merge(
			require get_template_directory() . '/inc/content-pages.php',
			require get_template_directory() . '/inc/content-conditions.php',
			require get_template_directory() . '/inc/content-treatments.php'
		);
	}
	return $pages;
}

function dralphy_page( $key ) {
	$pages = dralphy_pages();
	return isset( $pages[ $key ] ) ? $pages[ $key ] : null;
}

/** Permalink for a page key (falls back to the planned URL if the page is not created yet). */
function dralphy_url( $key ) {
	static $cache = array();
	if ( 'home' === $key ) { return home_url( '/' ); }
	if ( isset( $cache[ $key ] ) ) { return $cache[ $key ]; }
	$def = dralphy_page( $key );
	if ( ! $def ) { return home_url( '/' ); }
	foreach ( (array) $def['slug'] as $slug ) {
		$p = get_page_by_path( $slug );
		if ( $p && 'publish' === $p->post_status ) {
			$cache[ $key ] = get_permalink( $p );
			return $cache[ $key ];
		}
	}
	// Not cached: the page may be created later in the same request (setup import).
	$slugs = (array) $def['slug'];
	return home_url( '/' . end( $slugs ) . '/' );
}

/** Which page key is the current page? */
function dralphy_current_key( $post = null ) {
	$post = get_post( $post );
	if ( ! $post || 'page' !== $post->post_type ) { return ''; }
	foreach ( dralphy_pages() as $key => $def ) {
		if ( in_array( $post->post_name, (array) $def['slug'], true ) ) { return $key; }
	}
	return '';
}

/** Short menu label. */
function dralphy_label( $key ) {
	$def = dralphy_page( $key );
	return $def ? ( isset( $def['nav'] ) ? $def['nav'] : $def['title'] ) : '';
}

/** Six top-level items, in plan order (section 02). */
function dralphy_nav_tree() {
	return array(
		array( 'key' => 'home', 'label' => 'Home' ),
		array( 'key' => 'about', 'label' => 'About Dr. Alphy' ),
		array( 'key' => 'conditions', 'label' => 'Conditions', 'children' => dralphy_condition_keys() ),
		array( 'key' => 'treatments', 'label' => 'Treatments', 'children' => dralphy_treatment_keys() ),
		array( 'key' => 'resources', 'label' => 'Patient Resources' ),
		array( 'key' => 'contact', 'label' => 'Contact' ),
	);
}

/** Hospital locations — verify consulting locations and addresses before launch. */
function dralphy_locations() {
	return array(
		array(
			'name'    => 'Mediclinic Welcare Hospital',
			'address' => get_theme_mod( 'dralphy_loc1_address', 'Al Garhoud, Dubai, United Arab Emirates' ),
			'note'    => 'Centre of Excellence in Minimally Invasive Gynaecology · Centre of Excellence in Multidisciplinary Endometriosis Care',
			'map'     => 'https://www.google.com/maps/search/?api=1&query=Mediclinic+Welcare+Hospital+Dubai',
		),
		array(
			'name'    => 'Mediclinic Parkview Hospital',
			'address' => get_theme_mod( 'dralphy_loc2_address', 'Umm Suqeim Road, Dubai, United Arab Emirates' ),
			'note'    => 'Consultations and day-case procedures',
			'map'     => 'https://www.google.com/maps/search/?api=1&query=Mediclinic+Parkview+Hospital+Dubai',
		),
	);
}

/**
 * Legacy redirects (plan section 07). OFF until switched on in Appearance → Dr. Alphy Setup,
 * because every merge/redirect needs Search Console evidence and written approval first.
 * old path => page key
 */
function dralphy_redirect_map() {
	return array(
		'about-doctor-alphy'                       => 'about',
		'about-doctor-alphy-2'                     => 'about',
		'urogynaecology'                           => 'urogynecology',
		'laparoscopy'                              => 'laparoscopy',
		'laparoscopy-hysteroscopy'                 => 'laparoscopy',
		'minimally-invasive-fibroid-surgery'       => 'fibroid-surgery',
		'endometriosis-excision-surgery-dubai-uae' => 'endometriosis',
		'best-fibroid-surgeon-dubai'               => 'fibroids',
		'3d-4d-pelvic-floor-ultrasound'            => 'ultrasound',
		'testimonials'                             => 'reviews',
		'schedule-an-appoinment'                   => 'contact',
		'problems-we-solve'                        => 'conditions',
		'doctor-tips'                              => 'resources',
		'quick-health-tips'                        => 'resources',
	);
}

/** Homepage FAQs (section 10): booking, ultrasound, treatment choices, insurance, recovery. */
function dralphy_home_faqs() {
	return array(
		array( 'How do I book a consultation?', 'You can book by phone, through the hospital appointment desk, or by sending the enquiry form on the Contact page. Please tell us briefly what you would like to discuss so the right appointment length can be arranged.' ),
		array( 'What should I bring to my first appointment?', 'Bring your ID and insurance card, previous scan and MRI reports (with images if you have them), operation notes, blood results and a list of current medicines. A short symptom diary is often helpful.' ),
		array( 'Will I have an ultrasound at my first visit?', 'A detailed pelvic ultrasound is often part of the assessment when it is clinically relevant, and may be done at the same visit or scheduled separately. Dr. Alphy will explain what the scan can and cannot show.' ),
		array( 'Will I need surgery?', 'Not necessarily. Many conditions can be managed with observation, medication, physiotherapy or other non-surgical care. Surgery is discussed when it is likely to help, and the decision is always made together with you.' ),
		array( 'Is treatment covered by insurance?', 'Cover depends on your individual policy and insurer. The hospital insurance team can check eligibility and request pre-approval for investigations or procedures where this is required.' ),
		array( 'How long is recovery after minimally invasive surgery?', 'Recovery varies with the procedure and the individual. Many patients go home the same day or after one night, but returning to normal activity can take from a few days to several weeks. You will receive advice specific to your operation.' ),
	);
}
