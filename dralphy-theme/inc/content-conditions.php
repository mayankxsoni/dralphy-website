<?php
/**
 * Condition pages (plan section 04). DRAFT COPY FOR CLINICAL REVIEW — not approved for publication
 * until reviewed by Dr. Alphy.
 *
 * Fixed template order: overview → common symptoms → possible causes / types → diagnostic approach →
 * treatment choices → when specialist care is appropriate → FAQs → related content → Book Consultation.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return array(

	'endometriosis' => array(
		'title' => 'Endometriosis', 'slug' => 'endometriosis-treatment-dubai', 'type' => 'condition',
		'desc'  => 'Endometriosis assessment and treatment in Dubai: symptoms, ultrasound mapping, medical options and when excision surgery may be considered.',
		'intro' => 'Endometriosis can cause painful periods, pelvic pain and difficulty conceiving. Careful assessment helps decide which treatment — if any — is right for you.',
		'card'  => 'Painful periods, pelvic pain and fertility concerns — from specialist imaging to medical and surgical options.',
		'sections' => array(
			array( 'Overview', array(
				'Endometriosis is a condition in which tissue similar to the lining of the uterus grows outside it — most often on the pelvic lining, ovaries, and sometimes the bowel, bladder or the ligaments behind the uterus. It affects people in different ways: some have severe symptoms, others have few.',
				'Diagnosis is often delayed by several years because symptoms can be mistaken for "normal" period pain or for bowel and bladder problems.',
			) ),
			array( 'Common symptoms', array(
				array( 'Painful periods that interfere with work, study or daily life', 'Pelvic pain between periods', 'Pain during or after intercourse', 'Pain when opening the bowels or passing urine, especially around a period', 'Heavy or irregular bleeding', 'Fatigue', 'Difficulty becoming pregnant' ),
				'The severity of pain does not always match the extent of disease.',
			) ),
			array( 'Possible causes and types', array(
				'The exact cause is not fully understood; genetic, hormonal and immune factors are all thought to play a part. Endometriosis is commonly described as:',
				array( 'Superficial peritoneal disease — small deposits on the pelvic lining', 'Ovarian endometriomas — cysts containing old blood', 'Deep endometriosis — nodules that can involve the bowel, bladder, ureters or pelvic nerves' ),
			) ),
			array( 'Diagnostic approach', array(
				'Assessment starts with a detailed history and examination. A specialist transvaginal ultrasound can map endometriomas and deep disease and assess how freely the pelvic organs move. MRI may be added where appropriate, particularly when bowel, bladder or ureteric involvement is suspected.',
				'A normal scan does not exclude superficial endometriosis. Laparoscopy is not always needed to start treatment.',
			) ),
			array( 'Treatment choices', array(
				'Treatment depends on your symptoms, the extent of disease, and whether you wish to become pregnant.',
				array( 'Pain relief and hormonal treatment, which can control symptoms for many patients', 'Laparoscopic excision, which may be considered when symptoms persist despite medical treatment, when there is deep disease affecting organs, or in selected fertility situations', 'Fertility care, planned together with a fertility specialist where relevant', 'Pelvic floor physiotherapy and pain management support' ),
				'Complex disease involving the bowel, bladder or ureters is planned with a multidisciplinary team. Endometriosis can recur after any treatment, and surgery carries risks that will be discussed with you. Read more about <a href="{url:endo-surgery}">endometriosis excision surgery</a>.',
				'### Recovery',
				'Recovery after surgery depends on the extent of the operation. Many patients go home the same day or after one night following limited surgery, and need longer after complex surgery. A follow-up visit reviews recovery, laboratory results and any further treatment.',
			) ),
			array( 'When specialist care is appropriate', array(
				array( 'Period or pelvic pain that is not controlled by simple measures', 'Bowel or bladder symptoms that follow your cycle', 'An endometrioma or suspected deep endometriosis on a scan', 'Symptoms returning after previous surgery', 'Endometriosis with difficulty conceiving' ),
			) ),
		),
		'faqs' => array(
			array( 'My ultrasound was normal. Can I still have endometriosis?', 'Yes. Superficial endometriosis is usually not visible on ultrasound or MRI. Your symptoms and examination remain important in deciding next steps.' ),
			array( 'Is surgery always necessary?', 'No. Many patients are managed with medical treatment. Surgery is considered when it is likely to help and after the alternatives and risks have been discussed.' ),
			array( 'Can endometriosis come back after surgery?', 'It can. Recurrence depends on several factors, including the type of disease and the completeness of excision. Follow-up and, in some cases, medical treatment after surgery may reduce the risk.' ),
			array( 'Does endometriosis always cause infertility?', 'No. Many people with endometriosis conceive naturally. If pregnancy is not happening, assessment of both partners helps to plan the most suitable approach.' ),
		),
		'related' => array( 'endo-surgery', 'ultrasound', 'pelvic-pain', 'adenomyosis' ),
	),

	'fibroids' => array(
		'title' => 'Uterine Fibroids', 'slug' => 'uterine-fibroids-treatment-dubai', 'type' => 'condition',
		'desc'  => 'Uterine fibroids in Dubai: types, symptoms, ultrasound assessment and treatment choices from observation and medication to myomectomy.',
		'intro' => 'Fibroids are common, non-cancerous growths of the uterus. Many need no treatment; others cause heavy bleeding, pressure symptoms or affect fertility.',
		'card'  => 'Heavy bleeding, pressure symptoms and fertility — options from observation to uterus-preserving surgery.',
		'sections' => array(
			array( 'Overview', array(
				'Uterine fibroids (leiomyomas) are benign growths of the muscle of the uterus. They are very common and vary from a few millimetres to many centimetres. Whether they need treatment depends on symptoms, size, location and your plans for pregnancy.',
			) ),
			array( 'Common symptoms', array(
				array( 'Heavy or prolonged periods, sometimes leading to anaemia', 'Pelvic pressure, bloating or a feeling of fullness', 'Passing urine frequently, or constipation', 'Pain during intercourse or lower back pain', 'Difficulty conceiving or recurrent pregnancy loss in some cases' ),
				'Many fibroids cause no symptoms and are found incidentally.',
			) ),
			array( 'Types and location', array(
				array( 'Submucosal — projecting into the uterine cavity; often linked to heavy bleeding and fertility problems', 'Intramural — within the wall of the uterus', 'Subserosal — on the outer surface; more likely to cause pressure symptoms', 'Pedunculated — attached by a stalk' ),
			) ),
			array( 'Diagnostic approach', array(
				'Pelvic ultrasound, including 3D imaging, shows the number, size and position of fibroids and their relationship to the uterine cavity. MRI may be useful when fibroids are large or numerous, or when procedure planning needs more detail. Blood tests check for anaemia.',
			) ),
			array( 'Treatment choices', array(
				array( 'Observation, when fibroids are not causing problems', 'Medication to reduce bleeding or, for a limited time, to shrink fibroids', 'Myomectomy — hysteroscopic, laparoscopic or open — to remove fibroids while keeping the uterus', 'Radiofrequency or microwave ablation and uterine artery embolisation, where appropriate and available', 'Hysterectomy, when clinically indicated and when preserving the uterus is not a priority' ),
				'Each option has benefits, limits and risks, and fibroids can recur after uterus-preserving treatment. Read more about <a href="{url:fibroid-surgery}">fibroid surgery and myomectomy</a>.',
				'### Recovery',
				'Recovery depends on the treatment chosen and, for surgery, on the route of the operation. You will be given advice specific to your procedure, including when to return to normal activity and, where relevant, when it is appropriate to try to conceive.',
			) ),
			array( 'When specialist care is appropriate', array(
				array( 'Heavy bleeding or anaemia', 'Pressure symptoms affecting the bladder or bowel', 'Fibroids that are growing or are large', 'Fibroids with difficulty conceiving or pregnancy loss', 'A wish to preserve the uterus when hysterectomy has been advised' ),
			) ),
		),
		'faqs' => array(
			array( 'Do all fibroids need to be removed?', 'No. Fibroids that are not causing symptoms often need only monitoring.' ),
			array( 'Can fibroids be treated without removing the uterus?', 'In many cases, yes. Suitability depends on the number, size and position of the fibroids and on your priorities.' ),
			array( 'Can I become pregnant after myomectomy?', 'Many patients do. The advice about timing and mode of delivery depends on the operation performed and will be explained to you.' ),
			array( 'Are fibroids cancerous?', 'Fibroids are benign. A cancerous growth resembling a fibroid is rare; any concerning features on imaging will be discussed with you.' ),
		),
		'related' => array( 'fibroid-surgery', 'hysteroscopy', 'ultrasound', 'menstrual' ),
	),

	'adenomyosis' => array(
		'title' => 'Adenomyosis', 'slug' => array( 'adenomyosis-treatment-dubai-uae', 'adenomyosis-treatment-dubai' ), 'type' => 'condition',
		'desc'  => 'Adenomyosis in Dubai: symptoms, ultrasound and MRI diagnosis, medical management, selected procedures and fertility considerations.',
		'intro' => 'Adenomyosis can cause heavy, painful periods and an enlarged, tender uterus. It often overlaps with fibroids and endometriosis.',
		'card'  => 'Heavy, painful periods and an enlarged uterus — diagnosis and management options.',
		'sections' => array(
			array( 'Overview', array(
				'In adenomyosis, tissue similar to the lining of the uterus grows within its muscular wall. The uterus may become enlarged and tender. It can be diffuse (spread through the wall) or focal (an adenomyoma).',
			) ),
			array( 'Common symptoms', array(
				array( 'Heavy or prolonged periods', 'Severe period cramps', 'Pelvic heaviness or bloating', 'Pain during intercourse', 'Difficulty conceiving in some patients' ),
				'Symptoms overlap with fibroids and endometriosis, and the conditions frequently occur together.',
			) ),
			array( 'Possible causes', array(
				'The cause is not fully understood. Adenomyosis is more often diagnosed in people who have had children or uterine surgery, but it is also seen in younger patients as imaging improves.',
			) ),
			array( 'Diagnostic approach', array(
				'A transvaginal ultrasound performed by an experienced operator can identify typical features of adenomyosis. MRI is added where appropriate — for example to distinguish adenomyosis from fibroids or to plan treatment.',
			) ),
			array( 'Treatment choices', array(
				array( 'Pain relief and non-hormonal medicines to reduce bleeding', 'Hormonal treatment, including a hormone-releasing intrauterine system', 'Selected procedures for focal disease in carefully chosen patients', 'Hysterectomy when clinically indicated, symptoms are severe and childbearing is complete' ),
				'For those wishing to conceive, treatment is planned together with a fertility specialist where relevant.',
			) ),
			array( 'When specialist care is appropriate', array(
				array( 'Heavy or painful periods not controlled by first-line treatment', 'Uncertainty whether symptoms are due to fibroids, adenomyosis or endometriosis', 'Adenomyosis with fertility concerns' ),
			) ),
		),
		'faqs' => array(
			array( 'Is adenomyosis the same as endometriosis?', 'No. They are related but different: adenomyosis is within the wall of the uterus, endometriosis is outside it. They can occur together.' ),
			array( 'Is hysterectomy the only cure?', 'Hysterectomy removes the affected uterus, but many patients control symptoms with medical treatment and never need it.' ),
			array( 'Can adenomyosis affect pregnancy?', 'It may in some patients. Individual advice depends on the extent of disease and your history.' ),
		),
		'related' => array( 'endometriosis', 'fibroids', 'menstrual', 'ultrasound' ),
	),

	'ovarian-cysts' => array(
		'title' => 'Ovarian Cysts', 'slug' => 'ovarian-cysts-treatment-dubai', 'type' => 'condition',
		'desc'  => 'Ovarian cysts in Dubai: functional cysts, endometriomas and dermoids; ultrasound risk assessment, surveillance versus surgery and ovarian preservation.',
		'intro' => 'Most ovarian cysts are harmless and settle on their own. Ultrasound assessment helps decide which cysts can be watched and which may need treatment.',
		'card'  => 'Which cysts can be watched, which need treatment, and how the ovary is protected.',
		'sections' => array(
			array( 'Overview', array(
				'An ovarian cyst is a fluid-filled or solid swelling in or on an ovary. Cysts are common at all ages. Most are benign and many disappear without treatment.',
			) ),
			array( 'Common symptoms', array(
				array( 'Often none — many cysts are found on a scan done for another reason', 'Pelvic ache or pressure, often on one side', 'Bloating', 'Pain during intercourse' ),
				'!! Sudden, severe pelvic pain — especially with nausea, vomiting or fainting — can indicate a twisted or ruptured cyst. Go to the nearest emergency department.',
			) ),
			array( 'Types of cyst', array(
				array( 'Functional cysts — related to ovulation; usually resolve within a few cycles', 'Endometriomas — cysts caused by endometriosis', 'Dermoid cysts (mature teratomas) — benign cysts containing different tissue types', 'Cystadenomas and other benign growths', 'Cysts with features that need further assessment to exclude malignancy' ),
			) ),
			array( 'Diagnostic approach', array(
				'A detailed ultrasound describes the size and internal features of a cyst and allows a structured assessment of risk. Blood tests (tumour markers) and MRI may be added in selected cases. A repeat scan after a few weeks is often the most useful next step.',
			) ),
			array( 'Treatment choices', array(
				array( 'Surveillance with repeat ultrasound for simple or functional cysts', 'Laparoscopic cystectomy — removing the cyst while preserving healthy ovarian tissue', 'Removal of the ovary in selected situations', 'Referral to a gynaecological oncology team when imaging suggests this is appropriate' ),
				'When surgery is planned, protecting ovarian reserve and future fertility is a priority, particularly with endometriomas. The possible effect on fertility is discussed before any operation.',
			) ),
			array( 'When specialist care is appropriate', array(
				array( 'A cyst that persists or grows on repeat scans', 'A cyst causing pain', 'An endometrioma or dermoid cyst', 'Any cyst with complex features on ultrasound', 'A cyst found after the menopause' ),
			) ),
		),
		'faqs' => array(
			array( 'Do all ovarian cysts need surgery?', 'No. Most simple cysts are monitored and resolve without treatment.' ),
			array( 'Will surgery affect my fertility?', 'Cystectomy aims to preserve the ovary, but some reduction in ovarian reserve can occur. This is weighed against the reasons for surgery in each case.' ),
			array( 'Are ovarian cysts cancerous?', 'The great majority are benign. Ultrasound features, age and blood tests help identify the small number that need urgent specialist review.' ),
		),
		'related' => array( 'endometriosis', 'laparoscopy', 'ultrasound', 'emergency' ),
	),

	'pelvic-pain' => array(
		'title' => 'Chronic Pelvic Pain', 'slug' => 'chronic-pelvic-pain-dubai', 'type' => 'condition',
		'desc'  => 'Chronic pelvic pain in Dubai: gynaecological and non-gynaecological causes, assessment, and medical, physiotherapy and multidisciplinary options.',
		'intro' => 'Pelvic pain lasting six months or more often has more than one cause. A thorough assessment looks beyond the gynaecological organs alone.',
		'card'  => 'Persistent pelvic pain often has several causes. Assessment looks at the whole picture.',
		'sections' => array(
			array( 'Overview', array(
				'Chronic pelvic pain is pain in the lower abdomen or pelvis that has lasted for six months or longer. It may be constant or come and go, and may or may not follow the menstrual cycle. Several contributing factors are often present at once.',
			) ),
			array( 'Common symptoms', array(
				array( 'Aching, cramping or sharp pain in the lower abdomen or pelvis', 'Pain that worsens with periods, intercourse, or bladder or bowel function', 'Pain when sitting or after activity', 'Effects on sleep, mood and daily life' ),
			) ),
			array( 'Possible causes', array(
				'### Gynaecological',
				array( 'Endometriosis and adenomyosis', 'Pelvic adhesions or previous pelvic infection', 'Ovarian cysts and fibroids, in some cases' ),
				'### Non-gynaecological',
				array( 'Pelvic floor muscle dysfunction', 'Bladder pain syndrome', 'Irritable bowel syndrome and other bowel conditions', 'Musculoskeletal and nerve-related pain' ),
				'In some patients no single structural cause is found; the pain is still real and can still be treated.',
			) ),
			array( 'Diagnostic approach', array(
				'A careful history is the most important step, followed by examination — including assessment of the pelvic floor muscles — and a detailed pelvic ultrasound. Further tests are arranged only when they are likely to change management. Laparoscopy is considered selectively.',
			) ),
			array( 'Treatment choices', array(
				array( 'Treating an identified cause, such as endometriosis', 'Medication, including hormonal treatment and medicines for nerve-related pain', 'Pelvic floor physiotherapy', 'Input from pain medicine, gastroenterology, urology or psychology when helpful' ),
				'Surgery is offered only when there is a clear indication. Improvement is often gradual and usually comes from combining approaches.',
			) ),
			array( 'When specialist care is appropriate', array(
				array( 'Pain that has lasted more than a few months', 'Pain affecting work, relationships or sleep', 'Pain continuing after previous treatment or surgery' ),
			) ),
		),
		'faqs' => array(
			array( 'Does chronic pelvic pain always mean endometriosis?', 'No. Endometriosis is one common cause, but muscle, bladder, bowel and nerve-related causes are also frequent, and several can coexist.' ),
			array( 'Will I need a laparoscopy?', 'Not always. Laparoscopy is considered when the history, examination and imaging suggest it is likely to help.' ),
			array( 'What if my tests are normal?', 'Normal tests are common and do not mean nothing can be done. Treatment then focuses on the pain mechanisms themselves.' ),
		),
		'related' => array( 'endometriosis', 'adenomyosis', 'ultrasound', 'laparoscopy' ),
	),

	'menstrual' => array(
		'title' => 'Menstrual Irregularities & Abnormal Uterine Bleeding', 'nav' => 'Menstrual Irregularities & Abnormal Uterine Bleeding', 'slug' => 'menstrual-irregularities-dubai', 'type' => 'condition',
		'desc'  => 'Heavy, prolonged or irregular periods and abnormal uterine bleeding in Dubai: causes, ultrasound, hysteroscopy and medical and surgical options.',
		'intro' => 'Heavy, prolonged, irregular or unexpected bleeding is common and usually has a treatable cause. Assessment identifies that cause before treatment is chosen.',
		'card'  => 'Heavy, prolonged or irregular periods, and bleeding between periods or after the menopause.',
		'sections' => array(
			array( 'Overview', array(
				'Abnormal uterine bleeding means bleeding that is heavier, longer, more frequent or less predictable than is usual for you, or bleeding at unexpected times.',
				'!! Any bleeding after the menopause should be assessed promptly by a doctor. Very heavy bleeding with dizziness, fainting or breathlessness needs emergency care.',
			) ),
			array( 'Common symptoms', array(
				array( 'Heavy periods — flooding, clots, or changing protection every one to two hours', 'Periods lasting longer than seven days', 'Irregular or unpredictable cycles', 'Bleeding between periods or after intercourse', 'Bleeding after the menopause', 'Tiredness or breathlessness from anaemia' ),
			) ),
			array( 'Possible causes', array(
				array( 'Endometrial polyps', 'Fibroids', 'Adenomyosis', 'Ovulatory dysfunction, including polycystic ovary syndrome, thyroid problems and the years around the menopause', 'Changes in the lining of the uterus (endometrial hyperplasia) and, less commonly, cancer', 'Bleeding disorders and some medicines' ),
			) ),
			array( 'Diagnostic approach', array(
				'After a history and examination, blood tests check for anaemia and relevant hormonal causes. Pelvic ultrasound with 3D imaging assesses the uterus and its lining; saline sonography can outline polyps and fibroids within the cavity. Hysteroscopy and endometrial biopsy are recommended when indicated — for example with persistent bleeding, certain risk factors or postmenopausal bleeding.',
			) ),
			array( 'Treatment choices', array(
				array( 'Non-hormonal medicines to reduce blood loss', 'Hormonal treatment, including a hormone-releasing intrauterine system', 'Iron replacement for anaemia', 'Hysteroscopic removal of polyps or submucosal fibroids', 'Myomectomy or other procedures for fibroids', 'Hysterectomy, when other treatments are unsuitable or have not helped' ),
				'Read about <a href="{url:hysteroscopy}#hysteroscopic-polypectomy">hysteroscopic polypectomy</a>, which removes endometrial polyps under direct vision.',
			) ),
			array( 'When specialist care is appropriate', array(
				array( 'Bleeding after the menopause', 'Bleeding between periods or after intercourse', 'Heavy periods causing anaemia or affecting daily life', 'Bleeding that has not improved with initial treatment', 'A polyp, fibroid or thickened lining seen on ultrasound' ),
			) ),
		),
		'faqs' => array(
			array( 'How do I know if my periods are too heavy?', 'If bleeding regularly soaks through protection, contains large clots, lasts more than seven days or leaves you exhausted, it is worth having it assessed.' ),
			array( 'Are endometrial polyps dangerous?', 'Most are benign. They are usually removed if they cause bleeding, affect fertility or have features that need to be examined in the laboratory.' ),
			array( 'Will I need a biopsy?', 'Only when indicated. The recommendation depends on your age, symptoms, risk factors and ultrasound findings.' ),
			array( 'Can irregular periods be treated without surgery?', 'Often, yes. Many causes respond to medication once the diagnosis is clear.' ),
		),
		'related' => array( 'hysteroscopy', 'fibroids', 'adenomyosis', 'ultrasound' ),
	),

	'incontinence' => array(
		'title' => 'Urinary Incontinence', 'slug' => 'urinary-incontinence-dubai', 'type' => 'condition',
		'desc'  => 'Urinary incontinence in women in Dubai: stress, urgency and mixed leakage; assessment, pelvic floor therapy, medication, bulking and sling procedures.',
		'intro' => 'Leaking urine is common and treatable. The right treatment depends on the type of leakage and how much it affects your life.',
		'card'  => 'Leakage with coughing, exercise or urgency — from pelvic floor therapy to procedures.',
		'sections' => array(
			array( 'Overview', array(
				'Urinary incontinence is the unintentional loss of urine. It is not an inevitable part of ageing or childbirth, and most patients improve with treatment.',
			) ),
			array( 'Common symptoms', array(
				array( 'Leaking with coughing, sneezing, laughing, lifting or exercise', 'A sudden, strong urge to pass urine, sometimes with leakage before reaching the toilet', 'Passing urine frequently, including at night', 'A combination of the above' ),
			) ),
			array( 'Types', array(
				array( 'Stress urinary incontinence — leakage with physical effort, due to weakened support of the urethra', 'Urgency incontinence (overactive bladder) — leakage with a sudden urge', 'Mixed incontinence — features of both' ),
			) ),
			array( 'Diagnostic approach', array(
				'Assessment includes a history, examination of the pelvic floor, a urine test and a bladder diary recorded over a few days. Pelvic floor ultrasound may add information. Urodynamic testing is used selectively — for example before surgery or when the diagnosis is unclear.',
			) ),
			array( 'Treatment choices', array(
				array( 'Supervised pelvic floor muscle training with a specialist physiotherapist', 'Bladder training and adjustments to fluids, caffeine and weight', 'Medication, when relevant, for urgency symptoms', 'Urethral bulking injections for stress incontinence', 'Sling procedures and other operations for stress incontinence' ),
				'Conservative treatment is normally tried first. Every procedure has realistic benefits and risks — including the possibility that symptoms persist, return, or that new bladder symptoms develop — and these are discussed before you decide.',
			) ),
			array( 'When specialist care is appropriate', array(
				array( 'Leakage that affects exercise, work or confidence', 'Symptoms that persist after pelvic floor training', 'Leakage together with a vaginal bulge or recurrent urine infections', 'Blood in the urine or pain — which need prompt assessment' ),
			) ),
		),
		'faqs' => array(
			array( 'Is leaking urine normal after childbirth?', 'It is common, but it is not something you simply have to accept. Assessment and treatment are available.' ),
			array( 'Will I need surgery?', 'Many patients improve with physiotherapy and bladder training alone. Procedures are discussed when these have not helped enough.' ),
			array( 'What is a bladder diary?', 'A simple record, kept for a few days, of what you drink, when you pass urine and when leakage happens. It helps identify the type of incontinence.' ),
		),
		'related' => array( 'urogynecology', 'prolapse', 'reconstructive', 'ultrasound' ),
	),

	'prolapse' => array(
		'title' => 'Pelvic Organ Prolapse', 'slug' => 'pelvic-organ-prolapse-dubai', 'type' => 'condition',
		'desc'  => 'Pelvic organ prolapse in Dubai: symptoms, POP-Q assessment, pessaries and pelvic floor care, vaginal and laparoscopic repair, uterus-preserving options.',
		'intro' => 'A vaginal bulge or pelvic pressure can be caused by prolapse. Treatment is guided by how much the symptoms bother you, not by the examination alone.',
		'card'  => 'Vaginal bulge and pelvic pressure — pessaries, pelvic floor care and surgical repair.',
		'sections' => array(
			array( 'Overview', array(
				'Pelvic organ prolapse occurs when the supports of the pelvic organs weaken, allowing the uterus, bladder, bowel or the top of the vagina to descend. It is common, and mild prolapse often needs no treatment.',
			) ),
			array( 'Common symptoms', array(
				array( 'A bulge or lump felt or seen at the vaginal opening', 'Pelvic heaviness or dragging, often worse at the end of the day', 'Difficulty emptying the bladder or bowel', 'Urinary leakage or urgency', 'Discomfort during intercourse' ),
			) ),
			array( 'Types', array(
				array( 'Uterine prolapse — descent of the uterus', 'Cystocele — the bladder bulging into the front wall of the vagina', 'Rectocele — the rectum bulging into the back wall', 'Vault prolapse — descent of the top of the vagina after hysterectomy' ),
				'Contributing factors include childbirth, the menopause, chronic straining or coughing, heavy lifting and family tendency.',
			) ),
			array( 'Diagnostic approach', array(
				'Examination uses the POP-Q system to measure which compartments are affected and by how much. Bladder and bowel function are reviewed, and pelvic floor ultrasound or urodynamic testing may be added when they will influence treatment.',
			) ),
			array( 'Treatment choices', array(
				array( 'Observation, when symptoms are mild', 'Pelvic floor muscle training and lifestyle measures', 'Vaginal pessaries — an effective non-surgical option for many patients', 'Vaginal repair operations', 'Laparoscopic repairs, including sacrocolpopexy or hysteropexy, when appropriate', 'Uterus-preserving surgery for those who wish to keep the uterus' ),
				'The use of mesh is considered carefully. Its potential benefits and specific risks, and the non-mesh alternatives, are explained before any decision. Prolapse can recur after surgery. Read more about <a href="{url:reconstructive}">pelvic reconstructive surgery</a>.',
			) ),
			array( 'When specialist care is appropriate', array(
				array( 'A bulge that is bothersome or protrudes outside the vagina', 'Difficulty emptying the bladder or bowel', 'Prolapse returning after previous surgery', 'A wish to discuss uterus-preserving options' ),
			) ),
		),
		'faqs' => array(
			array( 'Is prolapse dangerous?', 'It is rarely dangerous, but it can affect comfort and bladder or bowel function. Treatment is based on how much it troubles you.' ),
			array( 'Can prolapse be treated without surgery?', 'Yes. Pelvic floor training and pessaries help many patients and may be all that is needed.' ),
			array( 'Do I have to have a hysterectomy?', 'Not necessarily. Uterus-preserving operations are suitable for some patients; the options depend on your examination and preferences.' ),
			array( 'Is mesh always used?', 'No. Many repairs use your own tissue. Where mesh is an option, its benefits and risks are discussed in detail.' ),
		),
		'related' => array( 'reconstructive', 'urogynecology', 'incontinence', 'ultrasound' ),
	),

	'urogynecology' => array(
		'title' => 'Urogynecology', 'nav' => 'Urogynecology overview', 'slug' => 'urogynecology', 'type' => 'condition',
		'desc'  => 'Urogynaecology in Dubai with Dr. Alphy: assessment and treatment of bladder and pelvic floor conditions, including urinary incontinence and pelvic organ prolapse.',
		'intro' => 'Urogynaecology is the care of bladder and pelvic floor problems in women — most commonly urinary leakage and pelvic organ prolapse.',
		'card'  => 'Bladder and pelvic floor care, including urinary incontinence and prolapse.',
		'sections' => array(
			array( 'Overview', array(
				'The pelvic floor is a group of muscles and ligaments that supports the bladder, uterus, vagina and bowel. When it is weakened or injured, problems with bladder control, support of the pelvic organs or bowel function can follow. These problems are common and usually treatable.',
			) ),
			array( 'Conditions treated', array(
				array( '<a href="{url:incontinence}">Urinary incontinence</a> — stress, urgency and mixed leakage', '<a href="{url:prolapse}">Pelvic organ prolapse</a> — uterine and vaginal prolapse, cystocele, rectocele and vault prolapse', 'Overactive bladder and difficulty emptying the bladder', 'Recurrent problems after previous pelvic floor surgery' ),
				'The two pages linked above explain symptoms, assessment and treatment in detail.',
			) ),
			array( 'How assessment works', array(
				'A consultation covers your symptoms and how they affect daily life, followed by an examination. Depending on the findings, a bladder diary, urine test, pelvic floor ultrasound or urodynamic study may be arranged.',
			) ),
			array( 'Treatment approach', array(
				'Care generally begins with conservative measures — pelvic floor physiotherapy, bladder training, pessaries or medication. Surgery, including <a href="{url:reconstructive}">pelvic reconstructive surgery</a>, is discussed when these have not given enough relief or are unlikely to help.',
			) ),
			array( 'When specialist care is appropriate', array(
				array( 'Urine leakage or urgency affecting daily life', 'A vaginal bulge or pelvic pressure', 'Symptoms that persist after initial treatment or previous surgery' ),
			) ),
		),
		'faqs' => array(
			array( 'What does a urogynaecologist treat?', 'Bladder control problems, pelvic organ prolapse and related pelvic floor conditions in women.' ),
			array( 'Are these problems just part of ageing?', 'They become more common with age, but they are not inevitable and effective treatments are available.' ),
		),
		'related' => array( 'incontinence', 'prolapse', 'reconstructive', 'ultrasound' ),
	),
);
