<?php
/**
 * Dr. Alphy theme.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'DRALPHY_VER', '1.5.0' );

require get_template_directory() . '/inc/config.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/contact-form.php';

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-logo', array( 'height' => 104, 'flex-width' => true, 'flex-height' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array( 'primary' => 'Primary menu (optional — the approved menu is used when empty)' ) );
	set_post_thumbnail_size( 800, 500, true );
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'dralphy-fonts', 'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Inter:wght@400;500;600&display=swap', array(), null );
	wp_enqueue_style( 'dralphy', get_stylesheet_uri(), array(), DRALPHY_VER );
	wp_enqueue_script( 'dralphy', get_template_directory_uri() . '/assets/main.js', array(), DRALPHY_VER, true );
} );

add_filter( 'wp_resource_hints', function ( $urls, $type ) {
	if ( 'preconnect' === $type ) {
		$urls[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' );
	}
	return $urls;
}, 10, 2 );

/* ---------- Options ---------- */

function dralphy_opt( $key ) {
	$defaults = array(
		'phone'    => '+97142827788',
		'email'    => 'info@doctoralphy.com',
		'whatsapp' => '',
		'booking'  => '',
		'src_text' => '',
	);
	$v = get_theme_mod( 'dralphy_' . $key, isset( $defaults[ $key ] ) ? $defaults[ $key ] : '' );
	return is_string( $v ) ? trim( $v ) : $v;
}

function dralphy_phone_display() {
	$p = preg_replace( '/[^\d+]/', '', dralphy_opt( 'phone' ) );
	if ( preg_match( '/^\+971(\d)(\d{3})(\d{4})$/', $p, $m ) ) { return "+971 {$m[1]} {$m[2]} {$m[3]}"; }
	return dralphy_opt( 'phone' );
}

function dralphy_phone_href() {
	return 'tel:' . preg_replace( '/[^\d+]/', '', dralphy_opt( 'phone' ) );
}

function dralphy_whatsapp_href() {
	$n = preg_replace( '/\D/', '', dralphy_opt( 'whatsapp' ) );
	return $n ? 'https://wa.me/' . $n : '';
}

function dralphy_booking_url() {
	$b = dralphy_opt( 'booking' );
	return $b ? $b : dralphy_url( 'contact' ) . '#book';
}

/* ---------- Icons ---------- */

function dralphy_icon( $name ) {
	$paths = array(
		'phone'    => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/>',
		'chat'     => '<path d="M21 11.5a8.5 8.5 0 0 1-12.6 7.4L3 20l1.2-5A8.5 8.5 0 1 1 21 11.5z"/>',
		'calendar' => '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M8 3v4M16 3v4M3 10h18"/>',
		'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
		'pin'      => '<path d="M12 21s7-6.2 7-11a7 7 0 1 0-14 0c0 4.800 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/>',
		'menu'     => '<path d="M4 7h16M4 12h16M4 17h16"/>',
		'chevron'  => '<path d="M6 9l6 6 6-6"/>',
		'pulse'    => '<path d="M3 12h4l2-6 4 12 2-6h6"/>',
		'layers'   => '<path d="M12 3l9 5-9 5-9-5 9-5z"/><path d="M3 13l9 5 9-5"/>',
		'drop'     => '<path d="M12 3s6 6.500 6 11a6 6 0 0 1-12 0c0-4.500 6-11 6-11z"/>',
		'shield'   => '<path d="M12 3l8 3v6c0 4.500-3.400 8-8 9-4.600-1-8-4.500-8-9V6l8-3z"/>',
	);
	$p = isset( $paths[ $name ] ) ? $paths[ $name ] : '';
	return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $p . '</svg>';
}

/* ---------- Navigation (approved order) ---------- */

function dralphy_nav_fallback() {
	$current = is_front_page() ? 'home' : dralphy_current_key();
	if ( is_home() || is_singular( 'post' ) || is_archive() || in_array( $current, dralphy_resource_keys(), true ) ) { $current = 'resources'; }
	echo '<ul>';
	foreach ( dralphy_nav_tree() as $item ) {
		$kids   = isset( $item['children'] ) ? $item['children'] : array();
		$active = ( $current === $item['key'] || in_array( $current, $kids, true ) );
		$cls    = trim( ( $kids ? 'has-sub ' : '' ) . ( $active ? 'is-current' : '' ) );
		printf( '<li%s><a href="%s"%s>%s</a>', $cls ? ' class="' . esc_attr( $cls ) . '"' : '', esc_url( dralphy_url( $item['key'] ) ), $current === $item['key'] ? ' aria-current="page"' : '', esc_html( $item['label'] ) );
		if ( $kids ) {
			printf( '<button class="sub-toggle" aria-expanded="false" aria-label="%s">%s</button><ul class="sub">', esc_attr( 'Show ' . $item['label'] . ' menu' ), dralphy_icon( 'chevron' ) );
			foreach ( $kids as $k ) {
				printf( '<li><a href="%s"%s>%s</a></li>', esc_url( dralphy_url( $k ) ), $current === $k ? ' aria-current="page"' : '', esc_html( dralphy_label( $k ) ) );
			}
			echo '</ul>';
		}
		echo '</li>';
	}
	echo '</ul>';
}

/* ---------- Template helpers ---------- */

/** URL of a bundled image (assets/img/<name>.jpg). */
function dralphy_asset( $name ) {
	return get_template_directory_uri() . '/assets/img/' . $name . '.jpg';
}

/** Image for a page key: the page's featured image when set, otherwise the bundled image, otherwise ''. */
function dralphy_img( $key ) {
	$def = dralphy_page( $key );
	if ( $def && function_exists( 'dralphy_find_page' ) ) {
		$page = dralphy_find_page( $def );
		if ( $page && has_post_thumbnail( $page ) ) {
			return get_the_post_thumbnail_url( $page, 'large' );
		}
	}
	return file_exists( get_template_directory() . '/assets/img/' . $key . '.jpg' ) ? dralphy_asset( $key ) : '';
}

function dralphy_img_alt( $key ) {
	$alts = array(
		'about'          => 'Dr. Alphy S. Puthiyidom',
		'endo-surgery'   => 'Surgeons performing a laparoscopic operation',
		'fibroid-surgery' => 'Surgeon operating under theatre lights',
		'laparoscopy'    => 'Laparoscopic instruments in use during keyhole surgery',
		'reconstructive' => 'Surgical team in the operating theatre',
		'ultrasound'     => 'Clinician performing an ultrasound scan',
		'prolapse'       => 'A patient in consultation with a doctor',
		'urogynecology'  => 'Doctor holding an illustration of the bladder and pelvic organs',
		'cerclage'       => 'Illustration of an open cervix and a cervical cerclage stitch',
	);
	if ( isset( $alts[ $key ] ) ) { return $alts[ $key ]; }
	$def = dralphy_page( $key );
	return $def ? $def['title'] . ' — illustration' : '';
}

/** Portrait <img>: the Customizer image when set, otherwise the photo bundled from the current website. */
function dralphy_portrait_img( $mod, $eager = false ) {
	$id = absint( get_theme_mod( $mod ) );
	if ( $id ) {
		echo wp_get_attachment_image( $id, 'large', false, array( 'alt' => 'Dr. Alphy S. Puthiyidom', 'loading' => $eager ? 'eager' : 'lazy' ) );
		return;
	}
	printf(
		'<img src="%s" alt="Dr. Alphy S. Puthiyidom" width="900" height="711" loading="%s"%s>',
		esc_url( dralphy_asset( 'dr-alphy' ) ),
		$eager ? 'eager' : 'lazy',
		$eager ? ' fetchpriority="high"' : ''
	);
}

function dralphy_card( $key, $large = false ) {
	$def = dralphy_page( $key );
	if ( ! $def ) { return; }
	$title = isset( $def['nav'] ) && 'urogynecology' !== $key ? $def['nav'] : $def['title'];
	$text  = isset( $def['card'] ) ? $def['card'] : ( isset( $def['intro'] ) ? $def['intro'] : '' );
	$img   = dralphy_img( $key );
	if ( $img ) {
		printf(
			'<a class="card card--img%s" href="%s"><span class="card__media"><img src="%s" alt="" loading="lazy"></span><span class="card__body"><h3>%s</h3><p>%s</p><span class="link-arrow">Learn more</span></span></a>',
			$large ? ' card--lg' : '',
			esc_url( dralphy_url( $key ) ),
			esc_url( $img ),
			esc_html( $title ),
			esc_html( $text )
		);
		return;
	}
	printf(
		'<a class="card%s" href="%s"><h3>%s</h3><p>%s</p><span class="link-arrow">Learn more</span></a>',
		$large ? ' card--lg' : '',
		esc_url( dralphy_url( $key ) ),
		esc_html( $title ),
		esc_html( $text )
	);
}

function dralphy_breadcrumbs() {
	if ( is_front_page() ) { return; }
	$items = array( array( 'Home', home_url( '/' ) ) );
	$key   = dralphy_current_key();
	if ( in_array( $key, dralphy_condition_keys(), true ) ) { $items[] = array( 'Conditions', dralphy_url( 'conditions' ) ); }
	if ( in_array( $key, dralphy_treatment_keys(), true ) ) { $items[] = array( 'Treatments', dralphy_url( 'treatments' ) ); }
	if ( in_array( $key, dralphy_resource_keys(), true ) || is_singular( 'post' ) ) { $items[] = array( 'Patient Resources', dralphy_url( 'resources' ) ); }
	if ( is_singular( 'post' ) ) { $items[] = array( 'Blog', dralphy_url( 'blog' ) ); }
	echo '<nav class="crumbs" aria-label="Breadcrumb">';
	foreach ( $items as $i ) {
		printf( '<a href="%s">%s</a><span aria-hidden="true">/</span>', esc_url( $i[1] ), esc_html( $i[0] ) );
	}
	echo '<span class="screen-reader-text">Current page: </span>' . esc_html( is_home() ? 'Blog' : wp_strip_all_tags( get_the_title() ) ) . '</nav>';
}

/** "Reviewed by / last updated" line. The reviewer is shown only once a review date has been recorded. */
function dralphy_review_line() {
	$reviewed = get_post_meta( get_the_ID(), '_dralphy_reviewed', true );
	echo '<p class="review-line">';
	if ( $reviewed ) {
		printf( 'Medically reviewed by Dr. Alphy S. Puthiyidom on %s · ', esc_html( date_i18n( 'j F Y', strtotime( $reviewed ) ) ) );
	}
	printf( 'Last updated <time datetime="%s">%s</time></p>', esc_attr( get_the_modified_date( 'c' ) ), esc_html( get_the_modified_date( 'j F Y' ) ) );
}

function dralphy_cta_band( $title = 'Book a consultation', $text = 'Discuss your symptoms, your scan results and the options that may be appropriate for you.' ) {
	?>
	<section class="cta-band" aria-label="Book a consultation">
		<div class="wrap">
			<div><h2><?php echo esc_html( $title ); ?></h2><p><?php echo esc_html( $text ); ?></p></div>
			<div class="btn-row">
				<a class="btn btn--light" href="<?php echo esc_url( dralphy_booking_url() ); ?>">Book a Consultation</a>
				<a class="btn btn--ghost" style="border-color:#fff;color:#fff" href="<?php echo esc_url( dralphy_phone_href() ); ?>">Call <?php echo esc_html( dralphy_phone_display() ); ?></a>
			</div>
		</div>
	</section>
	<?php
}

function dralphy_aside() {
	?>
	<aside class="aside" aria-label="Booking and page contents">
		<div class="box toc" hidden><h2>On this page</h2><ol></ol></div>
		<div class="box box--cta">
			<h2>Book a consultation</h2>
			<p>Mediclinic Welcare Hospital and Mediclinic Parkview Hospital, Dubai.</p>
			<a class="btn btn--light" href="<?php echo esc_url( dralphy_booking_url() ); ?>">Book a Consultation</a>
			<p style="margin:0">or call <a href="<?php echo esc_url( dralphy_phone_href() ); ?>"><?php echo esc_html( dralphy_phone_display() ); ?></a></p>
		</div>
		<div class="box"><p style="margin:0"><strong>Urgent symptoms?</strong> For severe pain, heavy bleeding or fainting, go to the nearest emergency department.</p></div>
	</aside>
	<?php
}

/* ---------- Content safety nets ---------- */

// Old Divi shortcodes would print as raw text once Divi is switched off — strip the tags, keep the text.
add_filter( 'the_content', function ( $content ) {
	if ( false !== strpos( $content, '[et_pb_' ) && ! shortcode_exists( 'et_pb_section' ) ) {
		$content = preg_replace( '/\[\/?et_pb_[^\]]*\]/', '', $content );
	}
	return $content;
}, 5 );

add_filter( 'excerpt_length', function () { return 24; } );
add_filter( 'excerpt_more', function () { return '…'; } );

/* ---------- SEO basics (Yoast, when active, takes over titles and descriptions) ---------- */

function dralphy_has_seo_plugin() {
	return defined( 'WPSEO_VERSION' ) || defined( 'RANK_MATH_VERSION' ) || class_exists( 'AIOSEO\\Plugin\\AIOSEO' );
}

add_filter( 'pre_get_document_title', function ( $title ) {
	if ( dralphy_has_seo_plugin() ) { return $title; }
	if ( is_front_page() ) {
		$home = dralphy_page( 'home' );
		return $home['seo_title'];
	}
	return $title;
} );

add_action( 'wp_head', function () {
	if ( dralphy_has_seo_plugin() ) { return; }
	$desc = '';
	if ( is_front_page() ) {
		$home = dralphy_page( 'home' );
		$desc = $home['desc'];
	} elseif ( is_page() ) {
		$def  = dralphy_page( dralphy_current_key() );
		$desc = $def ? $def['desc'] : '';
	} elseif ( is_singular() ) {
		$desc = wp_strip_all_tags( get_the_excerpt() );
	}
	if ( $desc ) { echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n"; }
}, 2 );

// Physician structured data — factual fields only; add credentials here once verified.
add_action( 'wp_head', function () {
	if ( ! is_front_page() && 'about' !== dralphy_current_key() ) { return; }
	$data = array(
		'@context'         => 'https://schema.org',
		'@type'            => 'Physician',
		'name'             => 'Dr. Alphy S. Puthiyidom',
		'url'              => home_url( '/' ),
		'telephone'        => preg_replace( '/[^\d+]/', '', dralphy_opt( 'phone' ) ),
		'medicalSpecialty' => 'https://schema.org/Gynecologic',
		'address'          => array( '@type' => 'PostalAddress', 'addressLocality' => 'Dubai', 'addressCountry' => 'AE' ),
		'hospitalAffiliation' => array(
			array( '@type' => 'Hospital', 'name' => 'Mediclinic Welcare Hospital' ),
			array( '@type' => 'Hospital', 'name' => 'Mediclinic Parkview Hospital' ),
		),
	);
	$img = absint( get_theme_mod( 'dralphy_portrait_hero' ) );
	if ( $img ) { $data['image'] = wp_get_attachment_image_url( $img, 'large' ); }
	echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}, 20 );

/* ---------- "Clinically reviewed on" field for pages and posts ---------- */

add_action( 'add_meta_boxes', function () {
	add_meta_box( 'dralphy_reviewed', 'Clinical review', function ( $post ) {
		wp_nonce_field( 'dralphy_reviewed', 'dralphy_reviewed_nonce' );
		printf(
			'<p><label for="dralphy_reviewed_f">Date reviewed by Dr. Alphy</label><br><input type="date" id="dralphy_reviewed_f" name="dralphy_reviewed" value="%s" style="width:100%%"></p><p class="description">Leave empty until the page has been clinically reviewed. The "Medically reviewed" line appears only when a date is set.</p>',
			esc_attr( get_post_meta( $post->ID, '_dralphy_reviewed', true ) )
		);
	}, array( 'page', 'post' ), 'side' );
} );

add_action( 'save_post', function ( $post_id ) {
	if ( ! isset( $_POST['dralphy_reviewed_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['dralphy_reviewed_nonce'] ), 'dralphy_reviewed' ) ) { return; }
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return; }
	if ( ! current_user_can( 'edit_post', $post_id ) ) { return; }
	$date = isset( $_POST['dralphy_reviewed'] ) ? sanitize_text_field( wp_unslash( $_POST['dralphy_reviewed'] ) ) : '';
	if ( $date && preg_match( '/^\d{4}-\d{2}-\d{2}$/', $date ) ) {
		update_post_meta( $post_id, '_dralphy_reviewed', $date );
	} else {
		delete_post_meta( $post_id, '_dralphy_reviewed' );
	}
} );

/* ---------- Legacy redirects (off until approved) ---------- */

add_action( 'template_redirect', function () {
	if ( ! get_option( 'dralphy_redirects_on' ) || is_admin() ) { return; }
	$path = trim( (string) wp_parse_url( isset( $_SERVER['REQUEST_URI'] ) ? esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '', PHP_URL_PATH ), '/' );
	$base = trim( (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH ), '/' );
	if ( $base && 0 === strpos( $path, $base ) ) { $path = trim( substr( $path, strlen( $base ) ), '/' ); }
	$map = dralphy_redirect_map();
	if ( isset( $map[ $path ] ) ) {
		$target = dralphy_url( $map[ $path ] );
		if ( trim( (string) wp_parse_url( $target, PHP_URL_PATH ), '/' ) !== trim( $base . '/' . $path, '/' ) ) {
			wp_safe_redirect( $target, 301 );
			exit;
		}
	}
}, 1 );
