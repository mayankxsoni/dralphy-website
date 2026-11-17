<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<header class="page-hero">
	<div class="wrap">
		<h1>Page not found</h1>
		<p class="lead">The page you were looking for may have moved. These links should help.</p>
	</div>
</header>
<section class="section">
	<div class="wrap">
		<div class="grid grid--3">
			<?php foreach ( array( 'conditions', 'treatments', 'contact' ) as $k ) { dralphy_card( $k ); } ?>
		</div>
	</div>
</section>
<?php
get_footer();
