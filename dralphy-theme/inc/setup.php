<?php
/**
 * Appearance → Dr. Alphy Setup: creates the approved page structure and controls legacy redirects.
 * Nothing runs automatically on activation — existing live content is never changed without a click.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ---------- Draft copy → block markup ---------- */

function dralphy_link_tokens( $html ) {
	return preg_replace_callback( '/\{url:([a-z0-9-]+)\}/', function ( $m ) {
		return esc_url( dralphy_url( $m[1] ) );
	}, $html );
}

function dralphy_blocks( $def ) {
	$allowed = array( 'a' => array( 'href' => array() ), 'strong' => array(), 'em' => array() );
	$out     = '';
	$para    = function ( $t, $class = '' ) use ( $allowed ) {
		$t = wp_kses( $t, $allowed );
		return $class
			? "<!-- wp:paragraph {\"className\":\"{$class}\"} -->\n<p class=\"{$class}\">{$t}</p>\n<!-- /wp:paragraph -->\n\n"
			: "<!-- wp:paragraph -->\n<p>{$t}</p>\n<!-- /wp:paragraph -->\n\n";
	};
	$sections = isset( $def['sections'] ) ? $def['sections'] : array();
	foreach ( $sections as $s ) {
		$anchor = isset( $s[2] ) ? $s[2] : sanitize_title( $s[0] );
		$out   .= sprintf( "<!-- wp:heading {\"anchor\":\"%1\$s\"} -->\n<h2 class=\"wp-block-heading\" id=\"%1\$s\">%2\$s</h2>\n<!-- /wp:heading -->\n\n", esc_attr( $anchor ), esc_html( $s[0] ) );
		foreach ( $s[1] as $item ) {
			if ( is_array( $item ) ) {
				$out .= "<!-- wp:list -->\n<ul class=\"wp-block-list\">";
				foreach ( $item as $li ) {
					$out .= "<!-- wp:list-item -->\n<li>" . wp_kses( $li, $allowed ) . "</li>\n<!-- /wp:list-item -->\n";
				}
				$out .= "</ul>\n<!-- /wp:list -->\n\n";
			} elseif ( 0 === strpos( $item, '### ' ) ) {
				$out .= "<!-- wp:heading {\"level\":3} -->\n<h3 class=\"wp-block-heading\">" . esc_html( substr( $item, 4 ) ) . "</h3>\n<!-- /wp:heading -->\n\n";
			} elseif ( 0 === strpos( $item, '!! ' ) ) {
				$out .= $para( substr( $item, 3 ), 'callout' );
			} else {
				$out .= $para( $item );
			}
		}
	}
	if ( ! empty( $def['faqs'] ) ) {
		$out .= "<!-- wp:heading {\"anchor\":\"faqs\"} -->\n<h2 class=\"wp-block-heading\" id=\"faqs\">Frequently asked questions</h2>\n<!-- /wp:heading -->\n\n";
		foreach ( $def['faqs'] as $f ) {
			$out .= "<!-- wp:details -->\n<details class=\"wp-block-details\"><summary>" . esc_html( $f[0] ) . "</summary>" . trim( $para( $f[1] ) ) . "</details>\n<!-- /wp:details -->\n\n";
		}
	}
	return dralphy_link_tokens( $out );
}

/* ---------- Importer ---------- */

function dralphy_find_page( $def ) {
	foreach ( (array) $def['slug'] as $slug ) {
		$p = get_page_by_path( $slug );
		if ( $p && 'trash' !== $p->post_status ) { return $p; }
	}
	return null;
}

function dralphy_run_import( $overwrite ) {
	$log = array();
	// Pass 1: make sure every page exists so that internal links resolve in pass 2.
	foreach ( dralphy_pages() as $key => $def ) {
		if ( dralphy_find_page( $def ) ) { continue; }
		// A static front page is already set (existing site): do not add a second "Home".
		if ( 'home' === $key && 'page' === get_option( 'show_on_front' ) && get_option( 'page_on_front' ) ) { continue; }
		$slugs = (array) $def['slug'];
		$id    = wp_insert_post( array(
			'post_type'    => 'page',
			'post_status'  => 'publish',
			'post_title'   => $def['title'],
			'post_name'    => end( $slugs ),
			'post_content' => '',
		), true );
		$log[ $key ] = is_wp_error( $id ) ? 'error: ' . $id->get_error_message() : 'created';
	}
	// Pass 2: content.
	foreach ( dralphy_pages() as $key => $def ) {
		$page = dralphy_find_page( $def );
		if ( ! $page ) { continue; }
		$is_new = isset( $log[ $key ] ) && 'created' === $log[ $key ];
		if ( ! empty( $def['desc'] ) && ( $is_new || ! get_post_meta( $page->ID, '_yoast_wpseo_metadesc', true ) || $overwrite ) ) {
			update_post_meta( $page->ID, '_yoast_wpseo_metadesc', $def['desc'] );
		}
		if ( ! empty( $def['seo_title'] ) && ( $is_new || $overwrite ) ) {
			update_post_meta( $page->ID, '_yoast_wpseo_title', $def['seo_title'] );
		}
		if ( ! empty( $def['preserve'] ) && ! $is_new ) {
			$log[ $key ] = 'kept existing content';
			continue;
		}
		if ( ! $is_new && ! $overwrite ) {
			$log[ $key ] = 'exists — not changed (tick "overwrite" to replace)';
			continue;
		}
		wp_update_post( array(
			'ID'           => $page->ID,
			'post_title'   => $def['title'],
			'post_status'  => 'publish',
			'post_excerpt' => isset( $def['intro'] ) ? $def['intro'] : '',
			'post_content' => dralphy_blocks( $def ),
		) );
		delete_post_meta( $page->ID, '_wp_page_template' );
		if ( ! $is_new ) { $log[ $key ] = 'updated (previous version kept in revisions)'; }
	}
	// Front page + posts page.
	$home = dralphy_find_page( dralphy_page( 'home' ) );
	$blog = dralphy_find_page( dralphy_page( 'blog' ) );
	if ( 'page' !== get_option( 'show_on_front' ) || ! get_option( 'page_on_front' ) ) {
		update_option( 'show_on_front', 'page' );
		if ( $home ) { update_option( 'page_on_front', $home->ID ); }
	}
	if ( $blog ) { update_option( 'page_for_posts', $blog->ID ); }
	if ( ! get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
	}
	flush_rewrite_rules();
	return $log;
}

/* ---------- Admin screen ---------- */

add_action( 'admin_menu', function () {
	add_theme_page( 'Dr. Alphy Setup', 'Dr. Alphy Setup', 'manage_options', 'dralphy-setup', 'dralphy_setup_screen' );
} );

add_action( 'admin_notices', function () {
	$screen = get_current_screen();
	if ( ! current_user_can( 'manage_options' ) || get_option( 'dralphy_setup_done' ) || ( $screen && 'appearance_page_dralphy-setup' === $screen->id ) ) { return; }
	echo '<div class="notice notice-info"><p><strong>Dr. Alphy theme:</strong> create the approved page structure in <a href="' . esc_url( admin_url( 'themes.php?page=dralphy-setup' ) ) . '">Appearance → Dr. Alphy Setup</a>.</p></div>';
} );

function dralphy_setup_screen() {
	if ( ! current_user_can( 'manage_options' ) ) { return; }
	$log = null;
	if ( isset( $_POST['dralphy_action'] ) && check_admin_referer( 'dralphy_setup' ) ) {
		$action = sanitize_key( $_POST['dralphy_action'] );
		if ( 'import' === $action ) {
			$log = dralphy_run_import( ! empty( $_POST['overwrite'] ) );
			update_option( 'dralphy_setup_done', 1 );
		} elseif ( 'redirects' === $action ) {
			update_option( 'dralphy_redirects_on', empty( $_POST['redirects_on'] ) ? 0 : 1 );
		}
	}
	$on = (bool) get_option( 'dralphy_redirects_on' );
	?>
	<div class="wrap">
		<h1>Dr. Alphy Setup</h1>
		<?php if ( $log ) : ?>
			<div class="notice notice-success"><p>Page structure processed.</p></div>
		<?php endif; ?>

		<h2>1. Page structure</h2>
		<p>Creates every page in the approved sitemap, in the approved order. Clinical copy is inserted as <strong>draft text for Dr. Alphy’s review</strong>. Pages that already exist are left untouched unless you tick the box below; Reviews, Educational Videos, the Blog page and the current home page content are always kept.</p>
		<form method="post">
			<?php wp_nonce_field( 'dralphy_setup' ); ?>
			<input type="hidden" name="dralphy_action" value="import">
			<p><label><input type="checkbox" name="overwrite" value="1"> Overwrite the content of pages that already exist (the previous version stays in each page’s revisions)</label></p>
			<?php submit_button( 'Create / update pages', 'primary', 'submit', false ); ?>
		</form>

		<table class="widefat striped" style="margin-top:16px;max-width:1100px">
			<thead><tr><th>#</th><th>Page</th><th>Section</th><th>URL</th><th>Status</th></tr></thead>
			<tbody>
			<?php
			$n = 0;
			foreach ( dralphy_pages() as $key => $def ) :
				$page  = dralphy_find_page( $def );
				$group = in_array( $key, dralphy_condition_keys(), true ) ? 'Conditions' : ( in_array( $key, dralphy_treatment_keys(), true ) ? 'Treatments' : ( in_array( $key, dralphy_resource_keys(), true ) ? 'Patient Resources' : '—' ) );
				?>
				<tr>
					<td><?php echo esc_html( ++$n ); ?></td>
					<td><?php echo esc_html( $def['title'] ); ?></td>
					<td><?php echo esc_html( $group ); ?></td>
					<td><code><?php echo esc_html( wp_make_link_relative( dralphy_url( $key ) ) ); ?></code></td>
					<td><?php echo esc_html( isset( $log[ $key ] ) ? $log[ $key ] : ( $page ? 'exists' : 'not created yet' ) ); ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>

		<h2 style="margin-top:32px">2. Legacy redirects (301)</h2>
		<p>Switch on only after the Search Console audit and written approval of every merge. Each old URL goes to its closest relevant page — never in bulk to the homepage.</p>
		<form method="post">
			<?php wp_nonce_field( 'dralphy_setup' ); ?>
			<input type="hidden" name="dralphy_action" value="redirects">
			<p><label><input type="checkbox" name="redirects_on" value="1" <?php checked( $on ); ?>> Enable the redirects below</label></p>
			<?php submit_button( 'Save', 'secondary', 'submit', false ); ?>
		</form>
		<table class="widefat striped" style="margin-top:16px;max-width:900px">
			<thead><tr><th>Old URL</th><th>Redirects to</th></tr></thead>
			<tbody>
			<?php foreach ( dralphy_redirect_map() as $old => $key ) : ?>
				<tr><td><code>/<?php echo esc_html( $old ); ?>/</code></td><td><code><?php echo esc_html( wp_make_link_relative( dralphy_url( $key ) ) ); ?></code></td></tr>
			<?php endforeach; ?>
			</tbody>
		</table>

		<h2 style="margin-top:32px">3. Before launch</h2>
		<ol>
			<li>Appearance → Customize → <em>Dr. Alphy — site details</em>: verify phone, WhatsApp, email, addresses; upload portraits; add consented testimonials.</li>
			<li>Dr. Alphy reviews every clinical page, then sets the “Clinical review” date in the page sidebar.</li>
			<li>Keep the staging site on “Discourage search engines” (Settings → Reading) until written sign-off.</li>
		</ol>
	</div>
	<?php
}
