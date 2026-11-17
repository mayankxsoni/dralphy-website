<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="theme-color" content="#0c3a3d">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
	<div class="wrap">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="Dr. Alphy S. Puthiyidom — home">
			<?php if ( has_custom_logo() ) : ?>
				<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'medium', false, array( 'class' => 'brand__logo', 'alt' => 'Dr. Alphy S. Puthiyidom', 'loading' => 'eager' ) ); ?>
			<?php else : ?>
				<span class="brand__mark"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/dralphy-logo.png' ); ?>" alt="" width="209" height="52"></span>
				<span class="brand__text">
					<span class="brand__name">Dr. Alphy S. Puthiyidom</span>
					<span class="brand__tag">Advanced Gynaecological Care · Minimally Invasive Surgery</span>
				</span>
			<?php endif; ?>
		</a>

		<nav class="nav" id="site-nav" aria-label="Main">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'depth' => 2 ) );
			} else {
				dralphy_nav_fallback();
			}
			?>
		</nav>

		<a class="btn btn--primary btn--sm header-cta" href="<?php echo esc_url( dralphy_booking_url() ); ?>">Book Consultation</a>
		<button class="nav-toggle" type="button" aria-controls="site-nav" aria-expanded="false">
			<span class="nav-toggle__label">Menu</span>
			<span class="nav-toggle__bars" aria-hidden="true"><span></span></span>
		</button>
	</div>
</header>

<main id="main">
