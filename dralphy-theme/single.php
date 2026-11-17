<?php
/**
 * Single article. One H1 (the title), review/update line, content, booking CTA.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();

while ( have_posts() ) :
	the_post();
	?>
	<header class="page-hero">
		<div class="wrap">
			<?php dralphy_breadcrumbs(); ?>
			<span class="eyebrow">Patient education</span>
			<h1><?php the_title(); ?></h1>
			<?php dralphy_review_line(); ?>
		</div>
	</header>

	<div class="wrap layout">
		<article class="entry">
			<?php the_content(); ?>
			<p class="note" style="margin-top:2.5em">This article is general information and does not replace an individual medical consultation.</p>
		</article>
		<?php dralphy_aside(); ?>
	</div>
	<?php
	dralphy_cta_band();
endwhile;

get_footer();
