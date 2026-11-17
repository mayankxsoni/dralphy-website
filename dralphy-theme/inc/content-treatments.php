<?php
/**
 * Treatment pages (plan section 05). DRAFT COPY FOR CLINICAL REVIEW — not approved for publication
 * until reviewed by Dr. Alphy.
 *
 * Fixed template order: what it is → who may benefit → when it may not be appropriate → preparation →
 * what to expect → risks → recovery and follow-up → FAQs → related content → Book Consultation.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return array(

	'laparoscopy' => array(
		'title' => 'Minimally Invasive Laparoscopy', 'slug' => 'laparoscopy-in-gynecological-conditions', 'type' => 'treatment',
		'desc'  => 'Gynaecological laparoscopy in Dubai: how keyhole surgery works, common indications, patient selection, benefits and limits, risks and recovery.',
		'intro' => 'Laparoscopy — keyhole surgery — allows many gynaecological operations to be performed through small incisions. It is not the right approach for every patient or every condition.',
		'card'  => 'Keyhole surgery: principles, common indications, benefits, limits and recovery.',
		'sections' => array(
			array( 'What it is', array(
				'In laparoscopy a thin camera and fine instruments are passed through small incisions in the abdomen, usually 5–10 mm each. The abdomen is gently inflated with gas so the surgeon can see and operate on the pelvic organs on a magnified screen.',
			) ),
			array( 'Who may benefit', array(
				'Laparoscopy may be used to diagnose and treat:',
				array( '<a href="{url:endometriosis}">Endometriosis</a>', '<a href="{url:fibroids}">Fibroids</a> (laparoscopic myomectomy)', '<a href="{url:ovarian-cysts}">Ovarian cysts</a>', 'Pelvic adhesions and some causes of pelvic pain', '<a href="{url:prolapse}">Pelvic organ prolapse</a>', 'Conditions requiring hysterectomy', 'Cervical insufficiency (<a href="{url:cerclage}">laparoscopic cerclage</a>)' ),
				'Compared with open surgery, possible benefits include smaller scars, less post-operative pain, a shorter hospital stay and an earlier return to activity. These benefits vary between patients and procedures.',
			) ),
			array( 'When it may not be appropriate', array(
				array( 'When symptoms can be managed without surgery', 'When a very large mass, extensive previous surgery or certain medical conditions make an open approach safer', 'When there is concern about malignancy that requires a different surgical plan' ),
				'Occasionally an operation started by laparoscopy needs to be converted to an open procedure for safety.',
			) ),
			array( 'Preparation', array(
				array( 'A pre-operative assessment, blood tests and review by the anaesthetist', 'Instructions about fasting and regular medicines', 'Bowel preparation only for selected operations', 'A discussion of the planned procedure, alternatives and risks, and written consent' ),
			) ),
			array( 'What to expect', array(
				'Laparoscopy is performed under general anaesthetic. Depending on the operation it may take from under an hour to several hours. Many patients go home the same day or after one night.',
			) ),
			array( 'Risks', array(
				'All surgery carries risk. With laparoscopy these include bleeding, infection, blood clots, anaesthetic complications, and — uncommonly — injury to the bowel, bladder, ureters or blood vessels. Your individual risk depends on your health and the complexity of the operation, and will be discussed before you consent.',
			) ),
			array( 'Recovery and follow-up', array(
				array( 'Shoulder-tip discomfort and bloating from the gas are common for a day or two', 'Light activity is encouraged early; avoid heavy lifting until advised', 'Return to work ranges from a few days to several weeks depending on the procedure', 'A follow-up visit reviews healing and any laboratory results' ),
				'!! Seek urgent medical attention for increasing pain, fever, heavy bleeding, persistent vomiting, calf pain or breathlessness.',
			) ),
		),
		'faqs' => array(
			array( 'How many incisions will I have?', 'Usually three or four small incisions, depending on the operation.' ),
			array( 'Is laparoscopy always better than open surgery?', 'Not always. The safest approach depends on the condition and the individual patient.' ),
			array( 'When can I drive or exercise?', 'This varies. You will be given advice specific to your operation before you go home.' ),
		),
		'related' => array( 'endo-surgery', 'fibroid-surgery', 'cerclage', 'emergency' ),
	),

	'endo-surgery' => array(
		'title' => 'Endometriosis Excision / Surgery', 'nav' => 'Endometriosis Surgery', 'slug' => 'endometriosis-surgery', 'type' => 'treatment',
		'desc'  => 'Endometriosis excision surgery in Dubai: surgical planning with imaging, excision principles, multidisciplinary care, recovery, recurrence and alternatives.',
		'intro' => 'Laparoscopic excision removes endometriosis tissue. This page explains the operation itself; for symptoms, diagnosis and non-surgical options, see the endometriosis condition page.',
		'card'  => 'Planning, excision principles, multidisciplinary care, recovery and recurrence.',
		'sections' => array(
			array( 'What it is', array(
				'Excision surgery aims to cut out visible endometriosis rather than only burning its surface, while preserving healthy tissue and organ function. It is almost always performed by laparoscopy. For an overview of the condition and medical treatment, see <a href="{url:endometriosis}">Endometriosis</a>.',
			) ),
			array( 'Who may benefit', array(
				array( 'Patients whose pain persists despite medical treatment, or who cannot take it', 'Deep endometriosis affecting the bowel, bladder or ureters', 'Selected endometriomas', 'Some patients with endometriosis-related infertility, after discussion with a fertility specialist' ),
			) ),
			array( 'When it may not be appropriate', array(
				array( 'When symptoms are well controlled with medication', 'When the expected benefit is small compared with the risk — for example repeated surgery on the ovaries in someone planning pregnancy', 'When pain is mainly driven by other causes that surgery would not address' ),
				'Alternatives to surgery include pain relief, hormonal treatment, pelvic floor physiotherapy and pain management support.',
			) ),
			array( 'Preparation and surgical planning', array(
				'Planning starts with imaging. Specialist <a href="{url:ultrasound}">ultrasound mapping</a>, with MRI where appropriate, shows where disease is and which organs are involved, so the complexity of surgery can be anticipated.',
				'When the bowel, bladder or ureters are involved, the operation is planned with colorectal and urology colleagues through the multidisciplinary endometriosis team. The goals of surgery, alternatives and risks are agreed with you beforehand.',
			) ),
			array( 'What to expect', array(
				'The operation is done under general anaesthetic. Its length and your hospital stay depend on the extent of disease — from a day case for limited disease to several days when bowel or bladder surgery is required.',
			) ),
			array( 'Risks', array(
				'In addition to the general risks of laparoscopy, excision of deep disease carries specific risks, including injury to the bowel, bladder or ureters, temporary bladder dysfunction, and reduction in ovarian reserve after surgery on endometriomas. Not every patient gains complete pain relief.',
			) ),
			array( 'Recovery and follow-up', array(
				array( 'Recovery typically takes two to six weeks, longer after complex surgery', 'Histology results are reviewed at follow-up', 'Medical treatment after surgery may be advised to lower the chance of recurrence', 'Fertility plans are reviewed where relevant' ),
				'Endometriosis can recur. The likelihood depends on age, disease type and treatment after surgery.',
			) ),
		),
		'faqs' => array(
			array( 'What is the difference between excision and ablation?', 'Excision cuts the disease out; ablation destroys the surface with heat. The appropriate technique depends on the type and depth of disease.' ),
			array( 'Will surgery cure my endometriosis?', 'Surgery can remove visible disease and often improves symptoms, but it cannot guarantee a cure and recurrence is possible.' ),
			array( 'Will I need bowel surgery?', 'Only if imaging and findings show bowel involvement that is causing symptoms. This is planned in advance with a colorectal surgeon whenever possible.' ),
		),
		'related' => array( 'endometriosis', 'ultrasound', 'laparoscopy', 'pelvic-pain' ),
	),

	'fibroid-surgery' => array(
		'title' => 'Fibroid Surgery / Myomectomy', 'slug' => 'fibroid-surgery', 'type' => 'treatment',
		'desc'  => 'Myomectomy in Dubai: laparoscopic, hysteroscopic and open fibroid removal, uterus preservation, future pregnancy, recovery and alternatives.',
		'intro' => 'Myomectomy removes fibroids while keeping the uterus. The route — hysteroscopic, laparoscopic or open — depends on the size, number and position of the fibroids.',
		'card'  => 'Hysteroscopic, laparoscopic and open myomectomy, uterus preservation and recovery.',
		'sections' => array(
			array( 'What it is', array(
				'Myomectomy is the surgical removal of fibroids with repair of the uterus.',
				array( 'Hysteroscopic myomectomy — through the cervix, for fibroids inside the uterine cavity; no abdominal incisions', 'Laparoscopic myomectomy — keyhole surgery for fibroids in the wall or on the surface of the uterus', 'Open myomectomy — through a larger incision, when fibroids are very large or numerous' ),
			) ),
			array( 'Who may benefit', array(
				array( 'Patients with heavy bleeding or pressure symptoms from <a href="{url:fibroids}">fibroids</a>', 'Those who wish to keep the uterus or plan a future pregnancy', 'Selected patients with fibroids and infertility or pregnancy loss' ),
			) ),
			array( 'When it may not be appropriate', array(
				array( 'Fibroids that cause no symptoms', 'When medication or a less invasive option is likely to control symptoms', 'When childbearing is complete and hysterectomy offers a more reliable solution', 'When imaging raises concern that needs a different approach' ),
				'Alternatives — observation, medication, ablation techniques, uterine artery embolisation and hysterectomy — are discussed alongside surgery.',
			) ),
			array( 'Preparation', array(
				'Ultrasound, and MRI where needed, maps each fibroid to plan the route of surgery. Anaemia is corrected beforehand where possible, and medication to reduce bleeding or fibroid size may be advised for a short period.',
			) ),
			array( 'What to expect', array(
				'Surgery is under general anaesthetic. Hysteroscopic procedures are usually day cases; laparoscopic myomectomy commonly needs one night in hospital; open surgery two to three nights. Complex or multiple fibroids take longer and may need a staged approach.',
			) ),
			array( 'Risks', array(
				'Risks include bleeding (occasionally requiring transfusion), infection, adhesions, injury to nearby organs and, rarely, the need for hysterectomy to control bleeding. New fibroids can develop later.',
			) ),
			array( 'Recovery and future pregnancy', array(
				array( 'Return to normal activity: a few days after hysteroscopic surgery, two to four weeks after laparoscopic surgery, around six weeks after open surgery', 'You will be advised how long to wait before trying to conceive', 'Depending on how the uterus was repaired, caesarean delivery may be recommended in a future pregnancy' ),
			) ),
		),
		'faqs' => array(
			array( 'Can large or multiple fibroids be removed by keyhole surgery?', 'Sometimes. It depends on their size, number and position; this is assessed on imaging before a route is recommended.' ),
			array( 'Will fibroids grow back?', 'Removed fibroids do not regrow, but new ones can form, particularly in younger patients.' ),
			array( 'Is myomectomy safer than hysterectomy?', 'They are different operations with different aims and risks. The choice depends on your symptoms, plans for pregnancy and preferences.' ),
		),
		'related' => array( 'fibroids', 'hysteroscopy', 'laparoscopy', 'ultrasound' ),
	),

	'hysteroscopy' => array(
		'title' => 'Hysteroscopy', 'nav' => 'Hysteroscopy (including Polypectomy)', 'slug' => 'hysteroscopy', 'type' => 'treatment',
		'desc'  => 'Hysteroscopy in Dubai: diagnostic hysteroscopy, hysteroscopic polypectomy, hysteroscopic myomectomy and treatment of selected intrauterine abnormalities.',
		'intro' => 'Hysteroscopy looks inside the uterus with a fine camera passed through the cervix. It is used both to diagnose and to treat — including removal of endometrial polyps.',
		'card'  => 'Diagnostic hysteroscopy, polypectomy, hysteroscopic myomectomy and more.',
		'sections' => array(
			array( 'What it is', array(
				'A hysteroscope is a thin telescope passed through the vagina and cervix into the uterus. No incisions are needed. Fluid gently opens the cavity so the lining can be inspected and, where needed, treated.',
				array( 'Diagnostic hysteroscopy — inspection of the cavity, often with a biopsy', '<a href="#hysteroscopic-polypectomy">Hysteroscopic polypectomy</a> — removal of endometrial polyps', 'Hysteroscopic myomectomy — removal of fibroids within the cavity', 'Treatment of selected intrauterine abnormalities, such as a uterine septum or adhesions' ),
			) ),
			array( 'Who may benefit', array(
				array( '<a href="{url:menstrual}">Heavy, irregular or postmenopausal bleeding</a>', 'A polyp, fibroid or thickened lining seen on ultrasound', 'Infertility or recurrent pregnancy loss, in selected cases', 'A displaced intrauterine device' ),
			) ),
			array( 'When it may not be appropriate', array(
				array( 'During pregnancy', 'When there is active pelvic infection', 'When ultrasound has already answered the clinical question and treatment would not change' ),
			) ),
			array( 'Hysteroscopic polypectomy', array(
				'Endometrial polyps are overgrowths of the lining of the uterus. Most are benign. Hysteroscopic polypectomy removes them under direct vision, which allows the whole polyp, including its base, to be taken out.',
				'### When it is recommended',
				array( 'Abnormal bleeding — heavy periods, bleeding between periods or after the menopause', 'Polyps found during investigation of infertility', 'Polyps that are large, multiple or persist on repeat scans', 'Any polyp after the menopause, or with features that should be examined in the laboratory' ),
				'Small polyps without symptoms in younger patients may sometimes simply be monitored.',
				'### Technique',
				'The polyp is seen through the hysteroscope and removed with fine scissors, a tissue-removal device or an electrosurgical loop, depending on its size and position. The procedure usually takes 10–30 minutes and is most often done as a day case.',
				'### Pathology assessment',
				'All removed tissue is sent to the laboratory. The result confirms whether the polyp is benign and is reviewed with you at follow-up.',
				'### Recovery',
				array( 'Mild cramping and light bleeding or discharge for a few days are common', 'Most patients return to normal activities within one to two days', 'Avoid tampons, intercourse and swimming for the period advised' ),
				'Polyps can recur in some patients.',
			), 'hysteroscopic-polypectomy' ),
			array( 'Preparation', array(
				array( 'The procedure is ideally timed just after a period, if you are still menstruating', 'A pregnancy test may be required', 'Fasting instructions apply if an anaesthetic is planned' ),
			) ),
			array( 'What to expect', array(
				'Depending on the procedure, hysteroscopy is done with local anaesthetic, sedation or a short general anaesthetic. You normally go home the same day.',
			) ),
			array( 'Risks', array(
				'Hysteroscopy is generally a low-risk procedure. Uncommon complications include infection, bleeding, perforation of the uterus, fluid overload during longer operative procedures, and adhesions within the cavity afterwards.',
			) ),
			array( 'Recovery and follow-up', array(
				'Results of any biopsy or removed tissue are usually available within one to two weeks and are discussed at follow-up, together with any further treatment.',
				'!! Seek medical attention for heavy bleeding, fever, offensive discharge or increasing pain after the procedure.',
			) ),
		),
		'faqs' => array(
			array( 'Is hysteroscopy painful?', 'Experiences vary. Cramping is common; the type of anaesthetic is chosen to suit the procedure and your preference.' ),
			array( 'Are endometrial polyps cancerous?', 'The great majority are benign. Laboratory examination of the removed tissue confirms this.' ),
			array( 'Can polyps come back after polypectomy?', 'Yes, new polyps can form in some patients. Tell your doctor if bleeding symptoms return.' ),
			array( 'How soon can I try to conceive after polypectomy?', 'Often from the next cycle, but follow the individual advice you are given.' ),
		),
		'related' => array( 'menstrual', 'fibroid-surgery', 'fibroids', 'ultrasound' ),
	),

	'cerclage' => array(
		'title' => 'Laparoscopic Cervical Cerclage', 'slug' => array( 'laparoscopic-cervical-cerclage-in-recurrent-pregnancy-loss', 'laparoscopic-cervical-cerclage-dubai' ), 'type' => 'treatment',
		'desc'  => 'Laparoscopic (transabdominal) cervical cerclage in Dubai for cervical insufficiency: who may be considered, timing, procedure, risks and delivery planning.',
		'intro' => 'A laparoscopic cerclage places a supportive stitch high around the cervix. It may be considered for selected patients with cervical insufficiency and previous pregnancy loss.',
		'card'  => 'A supportive stitch for selected patients with cervical insufficiency and pregnancy loss.',
		'sections' => array(
			array( 'What it is', array(
				'Cervical insufficiency means the cervix shortens and opens too early in pregnancy, without contractions, which can lead to second-trimester loss or very premature birth. A cerclage is a strong stitch placed around the cervix to support it.',
				'A laparoscopic (transabdominal) cerclage is placed by keyhole surgery at the top of the cervix, higher than is possible with a vaginal stitch.',
			) ),
			array( 'Who may be considered', array(
				array( 'Previous second-trimester loss or very preterm birth despite a vaginal cerclage', 'A cervix that is very short, scarred or partly removed after surgery, making a vaginal stitch impractical', 'Other situations identified after specialist review of your pregnancy history' ),
				'A referral assessment reviews records of previous pregnancies and procedures, cervical length on ultrasound and other possible causes of pregnancy loss.',
			) ),
			array( 'When it may not be appropriate', array(
				array( 'When pregnancy loss is more likely to have another cause', 'When a vaginal cerclage or monitoring with progesterone is a suitable first option', 'In a pregnancy that is too advanced for safe laparoscopic placement' ),
			) ),
			array( 'Timing: before or during pregnancy', array(
				'The stitch is most often placed before pregnancy, when the operation is technically simpler and carries no risk to a pregnancy. It can also be placed in early pregnancy, usually before 12–14 weeks, in selected cases. The advantages and risks of each timing are discussed individually.',
			) ),
			array( 'What to expect', array(
				'The procedure is done under general anaesthetic through small incisions and usually takes about an hour. Most patients go home the same day or the next morning.',
			) ),
			array( 'Risks', array(
				'Risks include those of laparoscopy generally — bleeding, infection and injury to nearby structures — and, when the stitch is placed during pregnancy, a small risk of pregnancy loss. A cerclage improves support of the cervix but cannot guarantee a full-term pregnancy.',
			) ),
			array( 'Follow-up and delivery planning', array(
				array( 'You will be advised when it is appropriate to try to conceive', 'Pregnancy is monitored with your obstetric team, including cervical length scans', 'The stitch normally stays in place, and delivery is by planned caesarean section', 'The stitch can remain for future pregnancies or be removed at caesarean' ),
				'!! Bleeding, fluid leakage, contractions or reduced fetal movements in pregnancy need urgent assessment at a maternity unit.',
			) ),
		),
		'faqs' => array(
			array( 'How is this different from a vaginal cerclage?', 'It is placed higher on the cervix through the abdomen, and is generally reserved for patients in whom a vaginal stitch has failed or is not possible.' ),
			array( 'Can I have a vaginal birth with an abdominal cerclage?', 'No. Delivery is by planned caesarean section because the stitch stays in place.' ),
			array( 'Does the stitch affect becoming pregnant?', 'It is not expected to prevent conception. Your individual circumstances will be discussed.' ),
		),
		'related' => array( 'laparoscopy', 'ultrasound', 'hysteroscopy', 'menstrual' ),
	),

	'reconstructive' => array(
		'title' => 'Pelvic Reconstructive Surgery', 'slug' => 'pelvic-reconstructive-surgeries', 'type' => 'treatment',
		'desc'  => 'Pelvic reconstructive surgery in Dubai for prolapse: vaginal and laparoscopic repair, uterus-preserving options, sacrocolpopexy, mesh considerations and recovery.',
		'intro' => 'Reconstructive surgery restores support to the pelvic organs when prolapse is bothersome and non-surgical treatment has not helped enough or is not suitable.',
		'card'  => 'Vaginal and laparoscopic prolapse repair, uterus-preserving options and recovery.',
		'sections' => array(
			array( 'What it is', array(
				'Pelvic reconstructive surgery covers a group of operations that correct <a href="{url:prolapse}">pelvic organ prolapse</a>.',
				array( 'Vaginal repairs of the front or back wall using your own tissue', 'Vaginal suspension procedures for the uterus or vaginal vault', 'Laparoscopic sacrocolpopexy — suspension of the vaginal vault', 'Laparoscopic hysteropexy — suspension of the uterus, preserving it', 'Vaginal hysterectomy with repair, when appropriate' ),
			) ),
			array( 'Who may benefit', array(
				array( 'Patients with symptomatic prolapse who have tried, or do not wish to use, pessaries and pelvic floor therapy', 'Prolapse recurring after previous surgery', 'Those wishing to discuss uterus-preserving surgery' ),
			) ),
			array( 'When it may not be appropriate', array(
				array( 'Mild prolapse without bothersome symptoms', 'When future pregnancy is planned — surgery is usually deferred', 'When medical conditions make surgery higher risk and a pessary is effective' ),
			) ),
			array( 'Preparation and shared decision-making', array(
				'The choice of operation depends on which compartments are affected, previous surgery, sexual activity, your general health and your own priorities. Bladder function is assessed beforehand, as prolapse repair can unmask or change urinary symptoms.',
				'Where mesh is an option — for example in sacrocolpopexy — its potential benefits, specific risks such as exposure or pain, and non-mesh alternatives are explained so that you can make an informed choice.',
			) ),
			array( 'What to expect', array(
				'Surgery is under general or regional anaesthetic. Hospital stay is commonly one to two nights. A urinary catheter and vaginal pack may be used for a short time.',
			) ),
			array( 'Risks', array(
				'Risks include bleeding, infection, difficulty emptying the bladder, new or persistent urinary leakage, pain during intercourse, injury to bladder or bowel, mesh-related complications where mesh is used, and recurrence of prolapse over time.',
			) ),
			array( 'Recovery and follow-up', array(
				array( 'Avoid heavy lifting and straining for around six weeks', 'Avoid constipation — fluids, fibre and laxatives if needed', 'Return to desk work is often possible after two to four weeks', 'Pelvic floor exercises are resumed as advised to protect the repair' ),
			) ),
		),
		'faqs' => array(
			array( 'Will my prolapse come back after surgery?', 'Recurrence is possible with any repair. The risk varies with the type of prolapse, the operation and individual factors.' ),
			array( 'Can I keep my uterus?', 'Uterus-preserving operations are suitable for some patients. This depends on examination findings and your preferences.' ),
			array( 'Which is better — vaginal or laparoscopic repair?', 'Neither is best for everyone. Each has advantages for particular types of prolapse and patients.' ),
		),
		'related' => array( 'prolapse', 'urogynecology', 'incontinence', 'laparoscopy' ),
	),

	'ultrasound' => array(
		'title' => 'Advanced Gynaecological Ultrasound & 3D Imaging', 'slug' => 'advanced-gynecological-ultrasound-dubai', 'type' => 'treatment',
		'desc'  => 'Advanced gynaecological ultrasound and 3D imaging in Dubai: endometriosis mapping, fibroid and adenomyosis assessment and uterine cavity evaluation.',
		'intro' => 'A detailed pelvic ultrasound, interpreted by the clinician who examines you, often gives the clearest picture of what is causing your symptoms — and whether treatment is needed.',
		'card'  => 'Endometriosis mapping, fibroid and adenomyosis assessment and 3D imaging of the uterus.',
		'sections' => array(
			array( 'What it is', array(
				'Advanced gynaecological ultrasound is a detailed, structured scan of the uterus, ovaries and surrounding pelvic structures, usually performed transvaginally for the best image quality. 3D imaging reconstructs the shape of the uterus and its cavity.',
			) ),
			array( 'What it can assess', array(
				array( 'Endometriosis mapping — endometriomas, deep nodules and whether the bowel, bladder or ligaments are involved', 'Fibroids — number, size, position and relationship to the uterine cavity', 'Adenomyosis', 'Ovarian cysts and structured assessment of their features', 'The uterine cavity — polyps, submucosal fibroids and congenital variations, sometimes with saline sonography', 'Pelvic floor ultrasound for prolapse and incontinence, where available' ),
			) ),
			array( 'When it may not be appropriate or sufficient', array(
				array( 'A transvaginal scan is not performed without your consent or if you have not been sexually active — transabdominal or other imaging is used instead', 'Superficial endometriosis is generally not visible on any imaging', 'MRI may be added for very large fibroids or when more detail is needed for surgical planning' ),
			) ),
			array( 'Preparation', array(
				array( 'An empty bladder is usually best for a transvaginal scan', 'Simple bowel preparation may be advised before endometriosis mapping', 'Bring previous scan and MRI reports for comparison' ),
			) ),
			array( 'What to expect', array(
				'The scan takes about 20–40 minutes. A slim probe with a protective cover is placed in the vagina; it may be uncomfortable but should not be painful, and you can ask to stop at any time. A chaperone is available.',
			) ),
			array( 'How imaging informs your care', array(
				'Findings are explained to you at the time, often using the images. They help decide whether observation, medication or surgery is appropriate and, when surgery is planned, allow the operation, the team and the consent discussion to be tailored in advance.',
			) ),
			array( 'Limits and follow-up', array(
				'Ultrasound is safe and involves no radiation. It is operator-dependent, and a normal scan does not exclude every condition. Repeat scans may be recommended to monitor change over time.',
			) ),
		),
		'faqs' => array(
			array( 'Is a transvaginal ultrasound painful?', 'Most people find it mildly uncomfortable rather than painful. Tell the clinician if you feel pain so the examination can be adapted.' ),
			array( 'Can ultrasound diagnose endometriosis?', 'It can identify endometriomas and deep endometriosis in experienced hands. Superficial disease usually cannot be seen.' ),
			array( 'Do I need both ultrasound and MRI?', 'Often ultrasound is enough. MRI is requested when it is likely to add useful information.' ),
		),
		'related' => array( 'endometriosis', 'fibroids', 'adenomyosis', 'ovarian-cysts' ),
	),

	'emergency' => array(
		'title' => 'Emergency Laparoscopy', 'slug' => 'emergency-laparoscopic-procedures', 'type' => 'treatment',
		'desc'  => 'Emergency gynaecological laparoscopy in Dubai for ectopic pregnancy, ovarian torsion and ruptured cysts. Urgent symptoms and how to access hospital care.',
		'intro' => 'Some gynaecological conditions need urgent surgery. If you think you have an emergency, go directly to a hospital emergency department.',
		'card'  => 'Urgent keyhole surgery for conditions such as ectopic pregnancy and ovarian torsion.',
		'sections' => array(
			array( 'If you need urgent help', array(
				'!! Go to the nearest hospital emergency department, or call 998 for an ambulance in the UAE, if you have sudden severe pelvic or abdominal pain, heavy vaginal bleeding, fainting or dizziness, shoulder-tip pain, or pain with fever or vomiting — especially if you could be pregnant. Do not use the website enquiry form or wait for a clinic appointment.',
			) ),
			array( 'What it is', array(
				'Emergency laparoscopy is keyhole surgery performed urgently to diagnose and treat an acute problem in the pelvis. It is arranged through the hospital emergency department after assessment, blood tests and ultrasound.',
			) ),
			array( 'Who may need it', array(
				array( 'Ectopic pregnancy — a pregnancy outside the uterus', 'Ovarian torsion — twisting of the ovary that cuts off its blood supply', 'A ruptured or bleeding ovarian cyst that does not settle', 'Severe pelvic infection with an abscess', 'Acute pelvic pain when the cause remains unclear' ),
			) ),
			array( 'When surgery may not be needed', array(
				'Many acute problems are managed without an operation — for example some ruptured cysts settle with observation and pain relief, and selected ectopic pregnancies can be treated with medication. The decision is made by the emergency team with you.',
			) ),
			array( 'What to expect', array(
				'After assessment, the surgical plan, alternatives and risks are explained before consent. Surgery is under general anaesthetic. An open operation is occasionally required for safety.',
			) ),
			array( 'Risks', array(
				'Risks are those of laparoscopy in general, and may be higher in an emergency because of bleeding or infection already present.',
			) ),
			array( 'Recovery and follow-up', array(
				'Hospital stay is often one to two nights. Follow-up reviews laboratory results, recovery and, where relevant, future fertility and pregnancy planning.',
			) ),
		),
		'faqs' => array(
			array( 'Can I book emergency care through this website?', 'No. For urgent symptoms attend a hospital emergency department directly.' ),
			array( 'Will the ovary or tube be removed?', 'The aim is to preserve organs whenever it is safe. What is possible depends on the findings at surgery.' ),
		),
		'related' => array( 'laparoscopy', 'ovarian-cysts' ),
	),
);
