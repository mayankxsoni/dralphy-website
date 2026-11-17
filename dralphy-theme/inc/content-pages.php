<?php
/**
 * Core (non-clinical) pages. DRAFT COPY — every statement about credentials, roles,
 * locations and contact channels must be verified and approved before publication.
 *
 * Section items: 'text' = paragraph · array = bullet list · '### text' = H3 · '!! text' = safety callout.
 * {url:key} is replaced with the page permalink on import.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return array(

	'home' => array(
		'title' => 'Home', 'slug' => 'home', 'type' => 'home', 'preserve' => true,
		'seo_title' => 'Advanced Gynaecological & Minimally Invasive Surgery in Dubai | Dr. Alphy',
		'desc'  => 'Dr. Alphy S. Puthiyidom provides advanced gynaecological care and minimally invasive surgery in Dubai for endometriosis, fibroids, pelvic organ prolapse and urogynaecological conditions.',
	),

	'about' => array(
		'title' => 'About Dr. Alphy S. Puthiyidom', 'nav' => 'About Dr. Alphy', 'slug' => 'about-dr-alphy', 'type' => 'about',
		'desc'  => 'Dr. Alphy S. Puthiyidom is a gynaecologist and minimally invasive surgeon in Dubai, and Program Director of two Centres of Excellence at Mediclinic Welcare Hospital.',
		'intro' => 'Gynaecologist and minimally invasive surgeon in Dubai, practising since 2008, with a focus on endometriosis, fibroids, pelvic floor conditions and advanced gynaecological ultrasound.',
		'sections' => array(
			array( 'Current role', array(
				'Dr. Alphy S. Puthiyidom is Program Director of the Centre of Excellence in Minimally Invasive Gynaecology and the Centre of Excellence in Multidisciplinary Endometriosis Care at Mediclinic Welcare Hospital, Dubai.',
				'The practice is dedicated to advanced gynaecological care and minimally invasive surgery. Consultations are held at Mediclinic Welcare Hospital and Mediclinic Parkview Hospital.',
			) ),
			array( 'Areas of expertise', array(
				array(
					'Endometriosis assessment and excision surgery, including complex disease managed with a multidisciplinary team',
					'Uterine fibroids, including uterus-preserving myomectomy',
					'Adenomyosis, ovarian cysts, chronic pelvic pain and abnormal uterine bleeding',
					'Urogynaecology: urinary incontinence and pelvic organ prolapse, including pelvic reconstructive surgery',
					'Hysteroscopy, including hysteroscopic polypectomy and myomectomy',
					'Laparoscopic cervical cerclage',
					'Advanced gynaecological ultrasound and 3D imaging',
				),
			) ),
			array( 'An ultrasound-led clinical approach', array(
				'Careful imaging is central to how Dr. Alphy plans care. A detailed pelvic ultrasound, performed or reviewed by the same clinician who examines you and who may operate, helps to map disease, explain findings clearly and decide whether treatment is needed at all.',
				'Decisions are made together with each patient. Options usually include observation, medical treatment and, when appropriate, surgery — with the expected benefits, limits and risks of each explained in plain language.',
			) ),
			array( 'Centres of Excellence', array(
				'Dr. Alphy is Program Director of two SRC-accredited Centres of Excellence at Mediclinic Welcare Hospital:',
				array( 'Centre of Excellence in Minimally Invasive Gynaecology', 'Centre of Excellence in Multidisciplinary Endometriosis Care' ),
				'Complex cases are managed through multidisciplinary collaboration.',
			) ),
			array( 'Hospital affiliations', array(
				array( 'Mediclinic Welcare Hospital, Dubai', 'Mediclinic Parkview Hospital, Dubai' ),
			) ),
			array( 'Education, teaching and professional activities', array(
				'Dr. Alphy takes part in teaching and professional education in minimally invasive gynaecological surgery.',
			) ),
		),
		'related' => array( 'conditions', 'treatments', 'contact' ),
	),

	'conditions' => array(
		'title' => 'Conditions', 'slug' => 'conditions', 'type' => 'hub', 'children' => 'conditions',
		'desc'  => 'Gynaecological conditions assessed and treated by Dr. Alphy in Dubai: endometriosis, fibroids, adenomyosis, ovarian cysts, pelvic pain, abnormal bleeding, incontinence and prolapse.',
		'intro' => 'Clear, balanced information about the conditions Dr. Alphy assesses and treats — what the symptoms can mean, how a diagnosis is reached and which options may be appropriate.',
	),

	'treatments' => array(
		'title' => 'Treatments', 'slug' => 'services', 'type' => 'hub', 'children' => 'treatments',
		'desc'  => 'Minimally invasive gynaecological treatments in Dubai: laparoscopy, endometriosis surgery, myomectomy, hysteroscopy, cervical cerclage, pelvic reconstruction and advanced ultrasound.',
		'intro' => 'What each procedure involves, who may benefit, when it may not be the right choice, and what to expect from preparation through recovery.',
	),

	'resources' => array(
		'title' => 'Patient Resources', 'slug' => 'patient-resources', 'type' => 'resources', 'children' => 'resources',
		'desc'  => 'Patient education articles, educational videos, reviews and practical guidance on preparing for a consultation or procedure with Dr. Alphy in Dubai.',
		'intro' => 'Articles, videos and practical guidance to help you prepare for a consultation, understand your options and plan your recovery.',
		'sections' => array(
			array( 'What to bring to your appointment', array(
				array(
					'Emirates ID or passport, and your insurance card',
					'Previous ultrasound, MRI or CT reports — and the images, if you have them',
					'Operation notes, histology and discharge summaries from earlier procedures',
					'Recent blood test results',
					'A list of current medicines, supplements and allergies',
					'A short record of your symptoms and cycle, and your main questions',
				),
			) ),
			array( 'Your care pathway', array(
				'Care usually follows four stages: a consultation to understand your symptoms and priorities; assessment and imaging; an individualised treatment plan; then recovery and follow-up. Many patients do not need surgery, and no treatment is recommended before the findings and alternatives have been discussed with you.',
			) ),
			array( 'Common questions before a procedure', array(
				array(
					'Fasting and medicines: you will be told when to stop eating and drinking, and which medicines to continue or pause.',
					'Anaesthesia: an anaesthetist will review you before any procedure under general anaesthetic.',
					'Going home: arrange for an adult to accompany you home after day-case surgery.',
					'Work and travel: ask for guidance specific to your procedure before making plans.',
				),
			) ),
			array( 'Insurance and pre-approval', array(
				'Cover varies between insurers and policies. The hospital insurance team can check your eligibility and submit a pre-approval request for investigations or procedures where one is required. Please allow time for the insurer to respond before a planned procedure.',
			) ),
			array( 'Recovery information', array(
				'Recovery advice depends on the procedure. You will find general guidance on each treatment page — for example <a href="{url:laparoscopy}">laparoscopy</a>, <a href="{url:hysteroscopy}">hysteroscopy</a> and <a href="{url:reconstructive}">pelvic reconstructive surgery</a> — and you will receive written instructions specific to your operation.',
				'!! If you have severe pain, heavy bleeding, fever, fainting or shortness of breath after a procedure, go to the nearest emergency department. Do not use the website enquiry form for urgent problems.',
			) ),
		),
	),

	'blog' => array(
		'title' => 'Blog & Patient Education', 'nav' => 'Blog & Patient Education', 'slug' => array( 'blog-2', 'blog' ), 'type' => 'blog', 'preserve' => true,
		'desc'  => 'Patient education articles on endometriosis, fibroids, prolapse, urinary incontinence and minimally invasive gynaecological surgery.',
		'card'  => 'Clinically reviewed articles on common gynaecological conditions and treatments.',
	),

	'videos' => array(
		'title' => 'Educational Videos', 'slug' => array( 'video-gallery', 'educational-videos' ), 'type' => 'page', 'preserve' => true,
		'desc'  => 'Educational videos from Dr. Alphy explaining gynaecological conditions, investigations and treatment options.',
		'intro' => 'Short educational videos explaining conditions, investigations and treatment options.',
		'card'  => 'Short explanations of conditions, investigations and treatment options.',
	),

	'reviews' => array(
		'title' => 'Patient Reviews', 'slug' => 'reviews', 'type' => 'page', 'preserve' => true,
		'desc'  => 'Patient experiences of gynaecological care with Dr. Alphy in Dubai, shared with consent.',
		'intro' => 'Experiences shared by patients, published with their consent. Individual experiences vary and are not a guarantee of results.',
		'card'  => 'Experiences shared by patients, published with their consent.',
	),

	'contact' => array(
		'title' => 'Contact & Book a Consultation', 'nav' => 'Contact', 'slug' => 'contact', 'type' => 'contact',
		'desc'  => 'Book a consultation with Dr. Alphy at Mediclinic Welcare Hospital or Mediclinic Parkview Hospital in Dubai. Phone, locations, maps and enquiry form.',
		'intro' => 'Book a consultation at Mediclinic Welcare Hospital or Mediclinic Parkview Hospital, or send a short enquiry and the team will contact you.',
	),

	'privacy' => array(
		'title' => 'Privacy Notice', 'slug' => 'privacy-notice', 'type' => 'page', 'aside' => false,
		'desc'  => 'How personal information submitted through this website is collected, used and protected.',
		'intro' => 'How information you submit through this website is collected, used and protected.',
		'sections' => array(
			array( 'Information we collect', array(
				'When you send an enquiry we collect the details you enter: your name, phone number, email address, preferred location and message. Please do not include detailed medical history in the form.',
				'With your consent, the website may also use analytics cookies to understand in aggregate how pages are used.',
			) ),
			array( 'How your information is used', array(
				array( 'To respond to your enquiry and arrange an appointment', 'To improve the website', 'To meet legal and regulatory obligations' ),
				'Your information is not sold, and is not used for marketing without your consent.',
			) ),
			array( 'Storage and sharing', array(
				'Enquiries are sent by email to the practice team and are shared only with those who need them to arrange your care, including the hospital appointment team where relevant. Clinical records are held by the treating hospital under its own privacy policy.',
			) ),
			array( 'Your choices', array(
				'You may ask what information is held about your enquiry, or ask for it to be corrected or deleted, by contacting us using the details on the <a href="{url:contact}">Contact page</a>.',
			) ),
		),
	),

	'disclaimer' => array(
		'title' => 'Medical Disclaimer', 'slug' => 'medical-disclaimer', 'type' => 'page', 'aside' => false,
		'desc'  => 'The information on this website is for general education and does not replace a consultation with a qualified doctor.',
		'intro' => 'The information on this website is provided for general education only.',
		'sections' => array(
			array( 'General information, not personal advice', array(
				'Content on this website describes conditions and treatments in general terms. It is not a diagnosis and does not replace an individual consultation, examination and investigation by a qualified doctor.',
				'Treatments are not suitable for everyone. Results, recovery and risks vary between individuals, and no outcome is guaranteed.',
			) ),
			array( 'Emergencies', array(
				'!! If you have severe pain, heavy bleeding, fainting, fever or any other urgent symptom, go to the nearest emergency department. Enquiry forms on this website are not monitored for emergencies.',
			) ),
			array( 'Patient experiences', array(
				'Reviews and testimonials reflect individual experiences shared with consent. They do not predict the experience or outcome of any other patient.',
			) ),
		),
	),
);
