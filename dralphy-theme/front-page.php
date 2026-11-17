<?php
/**
 * Homepage — one hero and 11 sections, in the approved order (plan section 03).
 * No slider, no autoplay, no pop-ups.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<!-- 01 Hero -->
<section class="hero">
	<div class="wrap hero__grid">
		<div class="hero__text">
			<h1>Advanced Gynaecological &amp; Minimally Invasive Surgery in Dubai</h1>
			<p class="lead">Personalised care for endometriosis, fibroids, pelvic organ prolapse and urogynecological conditions.</p>
			<div class="btn-row">
				<a class="btn btn--primary" href="<?php echo esc_url( dralphy_booking_url() ); ?>">Book a Consultation</a>
				<a class="btn btn--ghost" href="#specialties">Explore Specialties</a>
			</div>
		</div>
		<div class="hero-figure">
			<div class="hero-figure__img"><?php dralphy_portrait_img( 'dralphy_portrait_hero', true ); ?></div>
		</div>
	</div>
</section>

<!-- 02 Trust strip -->
<?php $src = dralphy_opt( 'src_text' ); ?>
<section class="trust<?php echo $src ? '' : ' trust--3'; ?>" aria-label="Credentials">
	<div class="wrap">
		<ul>
			<?php if ( $src ) : // Shown only once the exact SRC credential title has been verified and entered. ?>
				<li><i class="trust__icon"><?php echo dralphy_icon( 'shield' ); // phpcs:ignore ?></i><div><strong><?php echo esc_html( $src ); ?></strong><em>Surgical Review Corporation (SRC)</em></div></li>
			<?php endif; ?>
			<li><i class="trust__icon"><?php echo dralphy_icon( 'calendar' ); // phpcs:ignore ?></i><div><strong>Practising Since 2008</strong></div></li>
			<li><i class="trust__icon"><?php echo dralphy_icon( 'layers' ); // phpcs:ignore ?></i><div><strong>Program Director</strong><em>SRC-accredited Centre of Excellence in Minimally Invasive Gynaecology and Centre of Excellence in Multidisciplinary Endometriosis Care</em></div></li>
			<li><i class="trust__icon"><?php echo dralphy_icon( 'pin' ); // phpcs:ignore ?></i><div><strong>Hospital affiliations</strong><em>Mediclinic Welcare Hospital · Mediclinic Parkview Hospital</em></div></li>
		</ul>
	</div>
</section>

<!-- 03 What brings you here? -->
<section class="section">
	<div class="wrap">
		<div class="section-head">
			<h2>What brings you here?</h2>
		</div>
		<div class="symptoms">
			<?php
			$symptoms = array(
				array( 'Painful Periods', 'endometriosis' ),
				array( 'Heavy, Irregular or Prolonged Periods', 'menstrual' ),
				array( 'Chronic Pelvic Pain', 'pelvic-pain' ),
				array( 'Urinary Leakage', 'incontinence' ),
				array( 'Vaginal Bulge / Pelvic Pressure', 'prolapse' ),
				array( 'Pregnancy Loss / Cervical Weakness', 'cerclage' ),
			);
			foreach ( $symptoms as $s ) {
				printf( '<a class="symptom" href="%s"><span>%s</span></a>', esc_url( dralphy_url( $s[1] ) ), esc_html( $s[0] ) );
			}
			?>
		</div>
	</div>
</section>

<!-- 04 Major specialties -->
<section class="section section--paper" id="specialties">
	<div class="wrap">
		<div class="section-head">
			<h2>Major Specialties</h2>
		</div>
		<div class="grid grid--4">
			<?php foreach ( array( 'endometriosis', 'fibroids', 'urogynecology', 'prolapse' ) as $k ) { dralphy_card( $k, true ); } ?>
		</div>
		<div class="pill-links">
			<strong>Other Conditions &amp; Specialised Treatments</strong>
			<?php foreach ( array( 'adenomyosis' => 'Adenomyosis', 'ovarian-cysts' => 'Ovarian Cysts', 'pelvic-pain' => 'Chronic Pelvic Pain', 'menstrual' => 'Menstrual Irregularities', 'cerclage' => 'Laparoscopic Cervical Cerclage' ) as $k => $label ) : ?>
				<a class="pill" href="<?php echo esc_url( dralphy_url( $k ) ); ?>"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- 05 Meet Dr. Alphy -->
<section class="section">
	<div class="wrap split">
		<div class="media-stack">
			<img class="media-stack__main" src="<?php echo esc_url( dralphy_asset( 'dr-alphy-speaking' ) ); ?>" alt="Dr. Alphy S. Puthiyidom presenting at a medical education session" width="1200" height="800" loading="lazy">
			<img class="media-stack__inset" src="<?php echo esc_url( dralphy_asset( 'dr-alphy-lecture' ) ); ?>" alt="Dr. Alphy speaking at a medical conference" width="1100" height="733" loading="lazy">
		</div>
		<div>
			<h2>Meet Dr. Alphy</h2>
			<p>Dr. Alphy is Program Director of the Centre of Excellence in Minimally Invasive Gynaecology and the Centre of Excellence in Multidisciplinary Endometriosis Care at Mediclinic Welcare Hospital. The practice is dedicated to advanced gynaecological surgery and specialist pelvic ultrasound.</p>
			<p>Detailed imaging and surgical experience are combined to explain what is happening and which options are realistic — and decisions about treatment are always made together with the patient.</p>
			<a class="btn btn--ghost" href="<?php echo esc_url( dralphy_url( 'about' ) ); ?>">Read More</a>
		</div>
	</div>
</section>

<!-- 06 Diagnosis & treatment -->
<section class="section section--sand">
	<div class="wrap split split--rev">
		<div>
			<h2>Diagnosis &amp; Treatment</h2>
			<ul class="ticks">
				<li>Advanced transvaginal ultrasound and 3D imaging</li>
				<li>Endometriosis mapping</li>
				<li>Laparoscopy</li>
				<li>Hysteroscopy</li>
				<li>Pelvic reconstructive surgery</li>
			</ul>
			<div class="btn-row">
				<a class="btn btn--primary" href="<?php echo esc_url( dralphy_url( 'ultrasound' ) ); ?>">Advanced Ultrasound</a>
				<a class="btn btn--ghost" href="<?php echo esc_url( dralphy_url( 'treatments' ) ); ?>">All Treatments</a>
			</div>
		</div>
		<div class="grid grid--2">
			<?php
			$tiles = array(
				array( 'pulse', 'Advanced ultrasound &amp; 3D imaging', 'ultrasound' ),
				array( 'layers', 'Laparoscopy', 'laparoscopy' ),
				array( 'drop', 'Hysteroscopy', 'hysteroscopy' ),
				array( 'shield', 'Pelvic reconstructive surgery', 'reconstructive' ),
			);
			foreach ( $tiles as $t ) {
				printf( '<a class="card card--tile" href="%s"><span class="card__icon">%s</span><h3>%s</h3></a>', esc_url( dralphy_url( $t[2] ) ), dralphy_icon( $t[0] ), $t[1] ); // phpcs:ignore
			}
			?>
		</div>
	</div>
</section>

<!-- 07 Centres of Excellence -->
<section class="section section--teal">
	<div class="wrap">
		<div class="section-head">
			<h2>Centres of Excellence</h2>
			<p>Dr. Alphy is Program Director of two SRC-accredited Centres of Excellence at Mediclinic Welcare Hospital.</p>
		</div>
		<div class="coe coe--2">
			<div><h3>Centre of Excellence in Minimally Invasive Gynaecology</h3><p>SRC-accredited programme at Mediclinic Welcare Hospital.</p></div>
			<div><h3>Centre of Excellence in Multidisciplinary Endometriosis Care</h3><p>SRC-accredited programme at Mediclinic Welcare Hospital. Complex cases are managed through multidisciplinary collaboration.</p></div>
		</div>
	</div>
</section>

<!-- 08 Your care pathway -->
<section class="section section--paper">
	<div class="wrap">
		<div class="section-head">
			<h2>Your Care Pathway</h2>
		</div>
		<ol class="steps">
			<li><h3>Consultation</h3><p>Time to understand your symptoms, history and what matters most to you.</p></li>
			<li><h3>Assessment &amp; Imaging</h3><p>Examination and detailed ultrasound, with further tests only when they are useful.</p></li>
			<li><h3>Individualised Treatment</h3><p>Observation, medication, physiotherapy or surgery — chosen together after discussing benefits and risks.</p></li>
			<li><h3>Recovery &amp; Follow-up</h3><p>Clear guidance after treatment and planned review of your progress.</p></li>
		</ol>
		<p class="steps-note">Many patients do not need surgery. It is recommended only when it is likely to help.</p>
	</div>
</section>

<!-- 09 Patient experiences -->
<section class="section">
	<div class="wrap">
		<?php
		$quotes = array();
		for ( $i = 1; $i <= 3; $i++ ) {
			$q = dralphy_opt( "t{$i}_quote" );
			if ( $q ) { $quotes[] = array( $q, dralphy_opt( "t{$i}_name" ) ); }
		}
		?>
		<div class="experience<?php echo $quotes ? ' experience--quotes' : ''; ?>">
			<div class="section-head" style="margin-bottom:0">
				<h2>Patient Experiences</h2>
				<p>Experiences shared with consent. Individual experiences vary and are not a guarantee of results.</p>
			</div>
			<a class="btn btn--ghost" href="<?php echo esc_url( dralphy_url( 'reviews' ) ); ?>">Read patient reviews</a>
		</div>
		<?php if ( $quotes ) : ?>
			<div class="grid grid--3" style="margin-top:32px">
				<?php foreach ( $quotes as $q ) : ?>
					<blockquote class="quote"><p>“<?php echo esc_html( $q[0] ); ?>”</p><?php if ( $q[1] ) : ?><footer>— <?php echo esc_html( $q[1] ); ?></footer><?php endif; ?></blockquote>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- 10 Education & FAQs -->
<section class="section section--sand">
	<div class="wrap">
		<div class="section-head">
			<h2>Education &amp; FAQs</h2>
		</div>
		<?php
		$posts = new WP_Query( array( 'posts_per_page' => 3, 'ignore_sticky_posts' => true, 'no_found_rows' => true ) );
		if ( $posts->have_posts() ) :
			?>
			<div class="grid grid--3">
				<?php
				while ( $posts->have_posts() ) :
					$posts->the_post();
					get_template_part( 'template-parts/post-card' );
				endwhile;
				wp_reset_postdata();
				?>
			</div>
			<p style="margin:24px 0 0"><a class="link-arrow" href="<?php echo esc_url( dralphy_url( 'resources' ) ); ?>">All patient resources</a></p>
		<?php endif; ?>

		<div class="faq-grid" style="margin-top:56px">
			<div>
				<h2 style="font-size:1.6rem">Frequently asked questions</h2>
				<p class="lead" style="font-size:1rem">General questions about booking, ultrasound, treatment choices, insurance and recovery. Detailed FAQs are on each <a href="<?php echo esc_url( dralphy_url( 'conditions' ) ); ?>">condition</a> and <a href="<?php echo esc_url( dralphy_url( 'treatments' ) ); ?>">treatment</a> page.</p>
			</div>
			<div>
				<?php foreach ( dralphy_home_faqs() as $f ) : ?>
					<details><summary><?php echo esc_html( $f[0] ); ?></summary><p><?php echo esc_html( $f[1] ); ?></p></details>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<!-- 11 Locations & booking -->
<section class="section section--paper" id="locations">
	<div class="wrap">
		<div class="section-head">
			<h2>Locations &amp; Booking</h2>
		</div>
		<div class="grid grid--3">
			<?php foreach ( dralphy_locations() as $loc ) : ?>
				<div class="location">
					<i class="card__icon"><?php echo dralphy_icon( 'pin' ); // phpcs:ignore ?></i>
					<h3><?php echo esc_html( $loc['name'] ); ?></h3>
					<address><?php echo esc_html( $loc['address'] ); ?></address>
					<a class="link-arrow" href="<?php echo esc_url( $loc['map'] ); ?>" rel="noopener">View on map</a>
				</div>
			<?php endforeach; ?>
			<div class="location location--contact">
				<h3>Contact</h3>
				<?php get_template_part( 'template-parts/contact-list' ); ?>
				<p style="margin:20px 0 0"><a class="btn btn--light" href="<?php echo esc_url( dralphy_booking_url() ); ?>">Book a Consultation</a></p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
