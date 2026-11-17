<?php
/**
 * All pages: condition, treatment, hub, resources, contact, about and generic pages.
 * Every medical page: one H1 → short intro → structured H2s → FAQs → related care → booking CTA.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();

while ( have_posts() ) :
	the_post();
	$key     = dralphy_current_key();
	$def     = $key ? dralphy_page( $key ) : null;
	$type    = $def ? $def['type'] : 'page';
	$intro   = has_excerpt() ? get_the_excerpt() : ( $def && isset( $def['intro'] ) ? $def['intro'] : '' );
	$medical = in_array( $type, array( 'condition', 'treatment' ), true );
	$eyebrow = 'condition' === $type ? 'Condition' : ( 'treatment' === $type ? 'Treatment' : '' );
	$aside   = ! in_array( $type, array( 'hub', 'contact' ), true ) && ! ( $def && isset( $def['aside'] ) && ! $def['aside'] );
	?>

	<?php
	$hero_img = '';
	if ( has_post_thumbnail() ) {
		$hero_img = get_the_post_thumbnail_url( null, 'large' );
	} elseif ( $medical ) {
		$hero_img = dralphy_img( $key );
	} elseif ( 'about' === $type ) {
		$hero_img = dralphy_asset( 'dr-alphy' );
	}
	?>
	<header class="page-hero<?php echo $hero_img ? ' page-hero--img' : ''; ?>">
		<div class="wrap">
			<div class="page-hero__text">
				<?php dralphy_breadcrumbs(); ?>
				<?php if ( $eyebrow ) : ?><span class="eyebrow"><?php echo esc_html( $eyebrow ); ?></span><?php endif; ?>
				<h1><?php the_title(); ?></h1>
				<?php if ( $intro ) : ?><p class="lead"><?php echo esc_html( wp_strip_all_tags( $intro ) ); ?></p><?php endif; ?>
				<?php if ( $medical ) { dralphy_review_line(); } ?>
				<?php if ( $medical || 'about' === $type ) : ?>
					<div class="btn-row" style="margin-top:26px">
						<a class="btn btn--primary" href="<?php echo esc_url( dralphy_booking_url() ); ?>">Book a Consultation</a>
					</div>
				<?php endif; ?>
			</div>
			<?php if ( $hero_img ) : ?>
				<div class="page-hero__img"><img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php echo esc_attr( 'contact' === $type ? 'Mediclinic Welcare Hospital, Dubai' : ( 'resources' === $type ? 'A doctor explaining a diagnosis to a patient' : dralphy_img_alt( $key ) ) ); ?>" loading="eager"></div>
			<?php endif; ?>
		</div>
	</header>

	<?php if ( 'hub' === $type ) : ?>

		<section class="section">
			<div class="wrap">
				<div class="grid grid--3">
					<?php
					$kids = 'conditions' === $def['children'] ? dralphy_condition_keys() : dralphy_treatment_keys();
					foreach ( $kids as $k ) { dralphy_card( $k ); }
					?>
				</div>
				<?php if ( trim( get_the_content() ) ) : ?><div class="entry" style="max-width:780px;margin-top:48px"><?php the_content(); ?></div><?php endif; ?>
			</div>
		</section>

	<?php elseif ( 'contact' === $type ) : ?>

		<section class="section">
			<div class="wrap split" style="align-items:start">
				<div>
					<h2>Booking and contact</h2>
					<?php get_template_part( 'template-parts/contact-list' ); ?>
					<?php if ( dralphy_opt( 'booking' ) ) : ?>
						<p style="margin-top:24px"><a class="btn btn--primary" href="<?php echo esc_url( dralphy_opt( 'booking' ) ); ?>" rel="noopener">Book online</a></p>
					<?php endif; ?>
					<h2 style="margin-top:44px">Locations</h2>
					<div class="grid">
						<?php foreach ( dralphy_locations() as $loc ) : ?>
							<div class="location">
								<h3><?php echo esc_html( $loc['name'] ); ?></h3>
								<address><?php echo esc_html( $loc['address'] ); ?></address>
								<p style="font-size:.9rem;color:var(--muted)"><?php echo esc_html( $loc['note'] ); ?></p>
								<a class="link-arrow" href="<?php echo esc_url( $loc['map'] ); ?>" rel="noopener">View on map</a>
							</div>
						<?php endforeach; ?>
					</div>
					<?php if ( trim( get_the_content() ) ) : ?><div class="entry" style="margin-top:36px"><?php the_content(); ?></div><?php endif; ?>
				</div>
				<div class="box" style="padding:clamp(22px,3vw,36px)">
					<h2 style="font-size:1.5rem">Send an enquiry</h2>
					<p>The team will contact you during working hours to arrange an appointment.</p>
					<?php dralphy_enquiry_form(); ?>
				</div>
			</div>
		</section>

	<?php else : ?>

		<div class="wrap layout<?php echo $aside ? '' : ' layout--single'; ?>">
			<article class="entry">
				<?php if ( 'resources' === $type ) : ?>
					<div class="grid grid--3" style="margin-bottom:8px">
						<?php foreach ( dralphy_resource_keys() as $k ) { dralphy_card( $k ); } ?>
					</div>
				<?php endif; ?>

				<?php the_content(); ?>

				<?php if ( 'about' === $type ) : ?>
					<div class="gallery gallery--4">
						<?php
						$shots = array(
							'dr-alphy-speaking' => 'Dr. Alphy presenting at a patient and professional education session',
							'dr-alphy-forum'    => 'Dr. Alphy speaking at the Emirates Obs-Gyne and Fertility Forum',
							'dr-alphy-lecture'  => 'Dr. Alphy lecturing at a medical conference',
							'dr-alphy-podium'   => 'Dr. Alphy at the podium of an international congress',
						);
						foreach ( $shots as $name => $alt ) {
							printf( '<img src="%s" alt="%s" loading="lazy">', esc_url( dralphy_asset( $name ) ), esc_attr( $alt ) );
						}
						?>
					</div>
				<?php endif; ?>

				<?php if ( $def && ! empty( $def['related'] ) ) : ?>
					<section class="related" aria-labelledby="related-h">
						<h2 id="related-h">Related care</h2>
						<div class="grid grid--2">
							<?php foreach ( $def['related'] as $k ) { dralphy_card( $k ); } ?>
						</div>
					</section>
				<?php endif; ?>
			</article>
			<?php if ( $aside ) { dralphy_aside(); } ?>
		</div>

	<?php endif; ?>

	<?php
	if ( 'contact' !== $type ) { dralphy_cta_band(); }
endwhile;

get_footer();
