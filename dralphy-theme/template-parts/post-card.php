<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<a class="card post-card" href="<?php the_permalink(); ?>">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-card__img"><?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => '', 'loading' => 'lazy' ) ); ?></div>
	<?php endif; ?>
	<div class="post-card__body">
		<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'j M Y' ) ); ?></time>
		<h3><?php the_title(); ?></h3>
		<p><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
		<span class="link-arrow">Read article</span>
	</div>
</a>
