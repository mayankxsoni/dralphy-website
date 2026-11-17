<?php
/**
 * Blog index, archives and search results.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();

if ( is_search() ) {
	$title = 'Search results for “' . get_search_query() . '”';
	$intro = '';
} elseif ( is_archive() ) {
	$title = wp_strip_all_tags( get_the_archive_title() );
	$intro = wp_strip_all_tags( get_the_archive_description() );
} else {
	$title = 'Blog & Patient Education';
	$intro = 'Articles on gynaecological conditions, investigations and treatment options.';
}
?>
<header class="page-hero">
	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span aria-hidden="true">/</span><a href="<?php echo esc_url( dralphy_url( 'resources' ) ); ?>">Patient Resources</a><span aria-hidden="true">/</span>Blog</nav>
		<h1><?php echo esc_html( $title ); ?></h1>
		<?php if ( $intro ) : ?><p class="lead"><?php echo esc_html( $intro ); ?></p><?php endif; ?>
	</div>
</header>

<section class="section">
	<div class="wrap">
		<?php if ( have_posts() ) : ?>
			<div class="grid grid--3">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/post-card' );
				endwhile;
				?>
			</div>
			<nav class="pagination" aria-label="Pages"><?php echo wp_kses_post( paginate_links( array( 'prev_text' => '← Newer', 'next_text' => 'Older →' ) ) ); ?></nav>
		<?php else : ?>
			<p>No articles found. <a href="<?php echo esc_url( dralphy_url( 'conditions' ) ); ?>">Browse conditions</a> or <a href="<?php echo esc_url( dralphy_url( 'treatments' ) ); ?>">treatments</a>.</p>
		<?php endif; ?>
	</div>
</section>

<?php
dralphy_cta_band();
get_footer();
