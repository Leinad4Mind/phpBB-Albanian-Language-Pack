<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Çdo administrator i bordit mund të lejojë ose të mos lejojë disa lloje të bashkëngjitjeve. Nëse nuk jeni të sigurt se çfarë lejohet të ngarkohet, kontaktoni administratorin e bordit për ndihmë.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Çfarë bashkëngjitjesh lejohen në këtë tabelë?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Për të gjetur listën tuaj të bashkëngjitjeve që keni ngarkuar, shkoni te Paneli i Kontrollit të Përdoruesit dhe ndiqni lidhjet në seksionin e bashkëngjitjeve.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Si t\'i gjej të gjitha bashkëngjitjet e mia?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Shtojcat',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Abonimet dhe faqeshënuesit',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Formatimi dhe Llojet e Temave',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Miqtë dhe Armiqtë',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Nivelet dhe Grupet e Përdoruesve',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB Çështje',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Çështjet e hyrjes dhe regjistrimit',
	'HELP_FAQ_BLOCK_PMS'	=> 'Mesazhe Private',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Çështjet e Postimit',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Duke kërkuar në Forume',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Preferencat dhe cilësimet e përdoruesit',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'Në phpBB 3.0, temat e faqeshënuesve funksiononin njësoj si shënimi në një shfletues uebi. Nuk u lajmërua kur kishte një përditësim. Që nga phpBB 3.1, shënimi i faqeve është më shumë si abonimi në një temë. Mund të njoftoheni kur përditësohet një temë e shënuar. Megjithatë, abonimi do t\'ju njoftojë kur të ketë një përditësim për një temë ose forum në tabelë. Opsionet e njoftimit për faqeshënuesit dhe abonimet mund të konfigurohen në Panelin e Kontrollit të Përdoruesit, nën "Preferencat e Bordit".',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Cili është ndryshimi midis shënimit të faqeve dhe abonimit?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Për t\'u abonuar në një forum specifik, kliko lidhjen "Abonohu në forum", në fund të faqes, pasi të hysh në forum.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Si mund të regjistrohem në forume specifike?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Për të hequr abonimet tuaja, shkoni te Paneli i Kontrollit të Përdoruesit dhe ndiqni lidhjet me abonimet tuaja.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Si t\'i heq abonimet e mia?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Mund të shënoni faqeshënues ose të abonoheni në një temë specifike duke klikuar lidhjen e duhur në menynë "Mjetet e temës", e vendosur në mënyrë të përshtatshme pranë krye dhe fund të një diskutimi teme.<br />Përgjigja ndaj një teme me opsionin "Më njofto kur të postohet një përgjigje" të zgjedhur do t\'ju regjistrojë gjithashtu në temë.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Si mund të shënoj ose regjistrohem në tema specifike?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Njoftimet shpesh përmbajnë informacione të rëndësishme për forumin që po lexoni dhe ju duhet t\'i lexoni sa herë që të jetë e mundur. Njoftimet shfaqen në krye të çdo faqeje në forumin ku janë postuar. Ashtu si me njoftimet globale, lejet e shpalljeve jepen nga administratori i bordit.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Çfarë janë njoftimet?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode është një zbatim i veçantë i HTML, duke ofruar kontroll të shkëlqyeshëm të formatimit në objekte të veçanta në një postim. Përdorimi i BBCode lejohet nga administratori, por gjithashtu mund të çaktivizohet në bazë të postimit nga formulari i postimit. Vetë BBCode është i ngjashëm në stil me HTML, por etiketat janë të mbyllura në kllapa katrore [ dhe ] në vend të &lt; dhe &gt;. Për më shumë informacion mbi BBCode shihni udhëzuesin që mund të aksesohet nga faqja e postimit.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Çfarë është BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Njoftimet globale përmbajnë informacione të rëndësishme dhe ju duhet t\'i lexoni sa herë që të jetë e mundur. Ato do të shfaqen në krye të çdo forumi dhe brenda Panelit të Kontrollit të Përdoruesit. Lejet e shpalljeve globale jepen nga administratori i bordit.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Cilat janë njoftimet globale?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Jo. Nuk është e mundur të postohet HTML në këtë tabelë dhe të jepet si HTML. Shumica e formatimeve që mund të kryhen duke përdorur HTML mund të aplikohen duke përdorur BBCode në vend.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'A mund të përdor HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Ikonat e temës janë imazhe të zgjedhura nga autori të lidhura me postimet për të treguar përmbajtjen e tyre. Aftësia për të përdorur ikonat e temave varet nga lejet e vendosura nga administratori i bordit.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Cilat janë ikonat e temës?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Po, imazhet mund të shfaqen në postimet tuaja. Nëse administratori ka lejuar bashkëngjitjet, mund të jeni në gjendje të ngarkoni imazhin në tabelë. Përndryshe, duhet të lidheni me një imazh të ruajtur në një server ueb të aksesueshëm publikisht, p.sh. http://www.example.com/my-picture.gif. Ju nuk mund të lidheni me fotot e ruajtura në kompjuterin tuaj (përveç nëse është një server i aksesueshëm nga publiku) dhe as imazhe të ruajtura pas mekanizmave të vërtetimit, p.sh. kuti postare hotmail ose yahoo, faqe të mbrojtura me fjalëkalim, etj. Për të shfaqur imazhin përdorni etiketën BBCode [img].',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'A mund të postoj imazhe?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Temat e kyçura janë tema ku përdoruesit nuk mund të përgjigjen më dhe çdo sondazh që përmbante përfundoi automatikisht. Temat mund të mbyllen për shumë arsye dhe janë vendosur në këtë mënyrë ose nga moderatori i forumit ose nga administratori i bordit. Ju gjithashtu mund të jeni në gjendje të bllokoni temat tuaja në varësi të lejeve që ju janë dhënë nga administratori i bordit.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Cilat janë temat e mbyllura?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Smilies, ose Emoticons, janë imazhe të vogla që mund të përdoren për të shprehur një ndjenjë duke përdorur një kod të shkurtër, p.sh. :) tregon lumturi, ndërsa :( tregon trishtim. Lista e plotë e emoticoneve mund të shihet në formularin e postimit. Megjithatë, përpiquni të mos përdorni shumë buzëqeshje, pasi ato mund ta bëjnë shpejt një postim të palexueshëm dhe një moderator mund t\'i modifikojë ato ose ta heqë fare postimin. Administratori i bordit mund të ketë vendosur gjithashtu një kufi për numrin e përdorimit të postimeve tuaja.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Çfarë janë Smilies?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Temat ngjitëse brenda forumit shfaqen poshtë njoftimeve dhe vetëm në faqen e parë. Ato shpesh janë mjaft të rëndësishme kështu që duhet t\'i lexoni sa herë që të jetë e mundur. Ashtu si me njoftimet dhe njoftimet globale, lejet e temave ngjitëse jepen nga administratori i bordit.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Cilat janë temat ngjitëse?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Ju mund t\'i përdorni këto lista për të organizuar anëtarët e tjerë të bordit. Anëtarët e shtuar në listën tuaj të miqve do të renditen në Panelin e Kontrollit të Përdoruesit për qasje të shpejtë për të parë statusin e tyre në linjë dhe për t\'u dërguar atyre mesazhe private. Në varësi të mbështetjes së shabllonit, postimet nga këta përdorues mund të theksohen gjithashtu. Nëse shtoni një përdorues në listën tuaj të armiqve, çdo postim që ata bëjnë do të fshihen si parazgjedhje.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Cilat janë listat e mia të miqve dhe armiqve?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Ju mund të shtoni përdorues në listën tuaj në dy mënyra. Brenda profilit të secilit përdorues, ekziston një lidhje për t\'i shtuar ata në listën tuaj të miqve ose armiqve. Përndryshe, nga Paneli i Kontrollit të Përdoruesit, mund të shtoni drejtpërdrejt përdorues duke futur emrin e tyre të anëtarit. Ju gjithashtu mund të hiqni përdoruesit nga lista juaj duke përdorur të njëjtën faqe.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Si mund të shtoj / heq përdoruesit në listën time të miqve ose armiqve?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administratorët janë anëtarë të caktuar me nivelin më të lartë të kontrollit mbi të gjithë bordin. Këta anëtarë mund të kontrollojnë të gjitha aspektet e funksionimit të bordit, duke përfshirë vendosjen e lejeve, ndalimin e përdoruesve, krijimin e grupeve të përdoruesve ose moderatorëve, etj., në varësi të themeluesit të bordit dhe çfarë lejesh ai ose ajo u ka dhënë administratorëve të tjerë. Ata mund të kenë gjithashtu aftësi të plota moderatore në të gjitha forumet, në varësi të cilësimeve të paraqitura nga themeluesi i bordit.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Çfarë janë Administratorët?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Është e mundur që administratori i bordit të caktojë një ngjyrë për anëtarët e një grupi përdoruesish për ta bërë të lehtë identifikimin e anëtarëve të këtij grupi.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Pse disa grupe përdoruesish shfaqen me ngjyra të ndryshme?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Nëse jeni anëtar i më shumë se një grupi përdoruesish, parazgjedhja juaj përdoret për të përcaktuar se cila ngjyrë grupi dhe renditja e grupit duhet të shfaqen për ju si parazgjedhje. Administratori i bordit mund t\'ju japë leje për të ndryshuar grupin tuaj të paracaktuar të përdoruesve nëpërmjet Panelit të Kontrollit të Përdoruesit.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Çfarë është një "grup përdoruesi i parazgjedhur"?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Moderatorët janë individë (ose grupe individësh) që kujdesen për forumet nga dita në ditë. Ata kanë autoritetin për të redaktuar ose fshirë postimet dhe për të kyçur, zhbllokuar, lëvizur, fshirë dhe ndarë tema në forumin që moderon. Në përgjithësi, moderatorët janë të pranishëm për të parandaluar përdoruesit që të dalin jashtë temës ose të postojnë materiale abuzive ose fyese.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Çfarë janë Moderatorët?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Kjo faqe ju ofron një listë të stafit të bordit, duke përfshirë administratorët dhe moderatorët e bordit dhe detaje të tjera si forumet që ata moderojnë.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Çfarë është lidhja "Ekipi"?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Grupet e përdoruesve janë grupe përdoruesish që e ndajnë komunitetin në seksione të menaxhueshme me të cilat mund të punojnë administratorët e bordit. Çdo përdorues mund t\'i përkasë disa grupeve dhe secilit grup mund t\'i caktohen leje individuale. Kjo ofron një mënyrë të lehtë për administratorët që të ndryshojnë lejet për shumë përdorues menjëherë, si p.sh. ndryshimi i lejeve të moderatorit ose dhënia e përdoruesve akses në një forum privat.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Ju mund t\'i shikoni të gjitha grupet e përdoruesve nëpërmjet lidhjes "Grupet e përdoruesve" brenda Panelit të Kontrollit të Përdoruesit. Nëse dëshironi të bashkoheni me një, vazhdoni duke klikuar butonin e duhur. Megjithatë, jo të gjitha grupet kanë qasje të hapur. Disa mund të kërkojnë miratim për t\'u bashkuar, disa mund të mbyllen dhe disa mund të kenë edhe anëtarësim të fshehur. Nëse grupi është i hapur, mund t\'i bashkoheni duke klikuar butonin e duhur. Nëse një grup kërkon miratim për t\'u bashkuar, ju mund të kërkoni të bashkoheni duke klikuar butonin e duhur. Udhëheqësi i grupit të përdoruesve do të duhet të miratojë kërkesën tuaj dhe mund të pyesë pse dëshironi t\'i bashkoheni grupit. Ju lutemi mos ngacmoni një drejtues grupi nëse ai refuzon kërkesën tuaj; ata do të kenë arsyet e tyre.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Ku janë grupet e përdoruesve dhe si mund t\'i bashkohem?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Një udhëheqës i grupit të përdoruesve zakonisht caktohet kur grupet e përdoruesve krijohen fillimisht nga një administrator bordi. Nëse jeni të interesuar të krijoni një grup përdoruesish, pika juaj e parë e kontaktit duhet të jetë një administrator; provoni të dërgoni një mesazh privat.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Si të bëhem udhëheqës i grupit të përdoruesve?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Çfarë janë grupet e përdoruesve?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Të gjithë përdoruesit e bordit mund të përdorin formularin “Na kontaktoni”, nëse opsioni është aktivizuar nga administratori i bordit.<br />Anëtarët e bordit mund të përdorin gjithashtu lidhjen “Ekipi”.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Si mund të kontaktoj një administrator bordi?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Ky softuer është shkruar dhe licencuar nga phpBB Limited. Nëse besoni se një veçori duhet të shtohet, ju lutemi vizitoni Qendrën e Ideve <a href="https://www.phpbb.com/ideas/">phpBB</a>, ku mund të votoni për idetë ekzistuese ose të sugjeroni veçori të reja.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Pse nuk disponohet veçoria X?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Secili nga administratorët e listuar në faqen "Ekipi" duhet të jetë një pikë e përshtatshme kontakti për ankesat tuaja. Nëse kjo ende nuk merr përgjigje, atëherë duhet të kontaktoni pronarin e domenit (bëni një <a href="http://www.google.com/search?q=whois">whois search</a>) ose, nëse funksionon në një shërbim falas (p.sh. Yahoo!, free.fr, f2s.com, etj.), departamenti i menaxhimit ose abuzimit të atij shërbimi. Ju lutemi vini re se phpBB Limited ka <strong>absolutisht asnjë juridiksion</strong> dhe nuk mund të mbahet në asnjë mënyrë përgjegjës për mënyrën, ku ose nga kush përdoret ky bord. Mos kontaktoni me phpBB E kufizuar në lidhje me çdo çështje ligjore (ndërprerje dhe ndërprerje, përgjegjësi, koment shpifës, etj.) <strong>jo të lidhura drejtpërdrejt</strong> te phpBBfaqen e internetit .com ose softuerin diskret të phpBB vetë. Nëse bëni email phpBB I kufizuar <strong>për ndonjë palë të tretë</strong> përdorimi i këtij softueri atëherë duhet të prisni një përgjigje të shkurtër ose asnjë përgjigje.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Me kë mund të kontaktoj për çështje abuzive dhe/ose ligjore që lidhen me këtë bord?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Ky softuer (në formën e tij të pamodifikuar) është prodhuar, lëshuar dhe është me të drejtë autori <a href="https://www.phpbb.com/">phpBB Limited</a>. Është vënë në dispozicion nën Licencën e Përgjithshme Publike GNU, versioni 2 (GPL-2.0) dhe mund të shpërndahet lirisht. Shih <a href="https://www.phpbb.com/about/">Arreth phpBB</a> për më shumë detaje.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Kush e shkroi këtë tabelë?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Nëse nuk e kontrolloni kutinë <em>Mos harroni me</em> kur identifikoheni, bordi do t\'ju mbajë të identifikuar vetëm për një kohë të paracaktuar. Kjo parandalon keqpërdorimin e llogarisë suaj nga dikush tjetër. Për të qëndruar i identifikuar, kontrolloni kutinë <em>Mbaj mend më</em> gjatë identifikimit. Kjo nuk rekomandohet nëse aksesoni tabelën nga një kompjuter i përbashkët, p.sh. bibliotekë, internet kafe, laborator kompjuteri universitar, etj. Nëse nuk e shihni këtë kuti, do të thotë që një administrator bordi e ka çaktivizuar këtë funksion.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Pse dal automatikisht?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Ka disa arsye pse kjo mund të ndodhë. Së pari, sigurohuni që emri juaj i përdoruesit dhe fjalëkalimi janë të sakta. Nëse janë, kontaktoni një administrator bordi për t\'u siguruar që nuk jeni ndaluar. Është gjithashtu e mundur që pronari i faqes në internet të ketë një gabim konfigurimi në fund të tij, dhe ata do të duhet ta rregullojnë atë.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Është e mundur që një administrator të ketë çaktivizuar ose fshirë llogarinë tuaj për ndonjë arsye. Gjithashtu, shumë borde heqin periodikisht përdoruesit që nuk kanë postuar për një kohë të gjatë për të zvogëluar madhësinë e bazës së të dhënave. Nëse kjo ka ndodhur, provoni të regjistroheni përsëri dhe të përfshiheni më shumë në diskutime.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Jam regjistruar në të kaluarën por nuk mund të identifikohem më?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Pse nuk mund të identifikohem?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Është e mundur që një administrator i bordit të ketë çaktivizuar regjistrimin për të parandaluar regjistrimin e vizitorëve të rinj. Një administrator bordi mund të ketë ndaluar gjithashtu adresën tuaj IP ose të mos lejojë emrin e përdoruesit që po përpiqeni të regjistroheni. Kontaktoni një administrator bordi për ndihmë.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Pse nuk mund të regjistrohem?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA, ose Akti i Mbrojtjes së Privatësisë në internet të Fëmijëve i vitit 1998, është një ligj në Shtetet e Bashkuara që kërkon që faqet e internetit që mund të mbledhin informacione nga të miturit nën moshën 13 vjeç, të kenë pëlqimin me shkrim prindëror ose ndonjë metodë tjetër të njohjes së kujdestarit ligjor, duke lejuar mbledhjen e informacionit personalisht të identifikueshëm nën këtë moshë. vlen për ju si dikush që përpiqet të regjistrohet ose për faqen e internetit ku po përpiqeni të regjistroheni, kontaktoni këshilltarin ligjor për ndihmë. Ju lutemi vini re se phpBB Limited dhe pronarët e këtij bordi nuk mund të ofrojnë këshilla ligjore dhe nuk është një pikë kontakti për shqetësime ligjore të çfarëdo lloji, përveç siç përshkruhet në pyetjen "Kë të kontaktoj për çështje abuzive dhe/ose ligjore që lidhen me këtë bord?".',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Çfarë është COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '“Fshi cookies” fshin kukit e krijuar nga phpBB të cilat ju mbajnë të vërtetuar dhe të kyçur në tabelë. Cookies gjithashtu ofrojnë funksione të tilla si gjurmimi i leximit nëse ato janë aktivizuar nga një administrator bordi. Nëse keni probleme me hyrjen ose daljen, fshirja e kukive të bordit mund të ndihmojë.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Çfarë bën "Fshi cookies"?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'mos u frikësoni! Ndërsa fjalëkalimi juaj nuk mund të merret, ai mund të rivendoset lehtësisht. Vizitoni faqen e hyrjes dhe klikoni <em>I harrova fjalëkalimin tim</em>. Ndiqni udhëzimet dhe do të jeni në gjendje të identifikoheni përsëri së shpejti.<br />Megjithatë, nëse nuk jeni në gjendje të rivendosni fjalëkalimin tuaj, kontaktoni një administrator bordi.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Kam humbur fjalëkalimin tim!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Ju mund të mos keni nevojë, varet nga administratori i bordit nëse duhet të regjistroheni për të postuar mesazhe. Megjithatë; regjistrimi do t\'ju japë akses në veçori shtesë që nuk janë të disponueshme për përdoruesit e ftuar, si p.sh. imazhe të avatarit të përcaktueshëm, mesazhe private, dërgim me email të përdoruesve të tjerë, abonim në grupin e përdoruesve, etj. Duhen vetëm disa momente për t\'u regjistruar, prandaj rekomandohet që ta bëni këtë.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Së pari, kontrolloni emrin e përdoruesit dhe fjalëkalimin. Nëse janë të sakta, atëherë një nga dy gjërat mund të ketë ndodhur. Nëse mbështetja COPPA është aktivizuar dhe ju keni specifikuar se jeni nën 13 vjeç gjatë regjistrimit, do t\'ju duhet të ndiqni udhëzimet që keni marrë. Disa borde do të kërkojnë gjithashtu që të aktivizohen regjistrime të reja, qoftë nga ju ose nga një administrator përpara se të mund të identifikoheni; ky informacion ishte i pranishëm gjatë regjistrimit. Nëse ju është dërguar një email, ndiqni udhëzimet. Nëse nuk keni marrë një email, mund të keni dhënë një adresë të pasaktë emaili ose emaili mund të jetë marrë nga një skedar i postës së padëshiruar. Nëse jeni i sigurt se adresa e emailit që keni dhënë është e saktë, provoni të kontaktoni një administrator.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Jam regjistruar por nuk mund të identifikohem!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Pse më duhet të regjistrohem?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Ka tre arsye për këtë; ju nuk jeni regjistruar dhe/ose nuk jeni identifikuar, administratori i bordit ka çaktivizuar mesazhet private për të gjithë bordin ose administratori i bordit ju ka penguar të dërgoni mesazhe. Kontaktoni një administrator bordi për më shumë informacion.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Nuk mund të dërgoj mesazhe private!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Na vjen keq që e dëgjojmë këtë. Veçoria e formularit të postës elektronike të këtij bordi përfshin masa mbrojtëse për të provuar dhe gjurmuar përdoruesit që dërgojnë postime të tilla, prandaj dërgoni email administratorit të bordit me një kopje të plotë të emailit që keni marrë. Është shumë e rëndësishme që kjo të përfshijë titujt që përmbajnë detajet e përdoruesit që dërgoi emailin. Administratori i bordit më pas mund të ndërmarrë veprime.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Kam marrë një email me mesazhe të padëshiruara ose abuzive nga dikush në këtë bord!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Ju mund të fshini automatikisht mesazhet private nga një përdorues duke përdorur rregullat e mesazheve brenda Panelit të Kontrollit të Përdoruesit. Nëse po merrni mesazhe private abuzive nga një përdorues i caktuar, raportoni mesazhet te moderatorët; ata kanë fuqinë për të parandaluar një përdorues nga dërgimi i mesazheve private.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Vazhdoj të marr mesazhe private të padëshiruara!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Duke klikuar lidhjen "Përplasni temën" kur jeni duke e parë, mund ta "përplasni" temën në krye të forumit në faqen e parë. Megjithatë, nëse nuk e shihni këtë, atëherë përplasja e temës mund të çaktivizohet ose koha e lejuar midis përplasjeve nuk është arritur ende. Është gjithashtu e mundur të përplasësh temën thjesht duke iu përgjigjur asaj, megjithatë, sigurohuni që të ndiqni rregullat e bordit kur e bëni këtë.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Si ta hap temën time?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Për të postuar një temë të re në një forum, klikoni "Tema e re". Për të postuar një përgjigje për një temë, klikoni "Posto përgjigje". Mund t\'ju duhet të regjistroheni përpara se të postoni një mesazh. Një listë e lejeve tuaja në çdo forum është e disponueshme në fund të ekraneve të forumit dhe temave. Shembull: Mund të postoni tema të reja, Mund të postoni bashkëngjitje, etj.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Si mund të krijoj një temë të re ose të postoj një përgjigje?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Kjo ju lejon të ruani draftet për t\'u plotësuar dhe dorëzuar në një datë të mëvonshme. Për të ringarkuar një draft të ruajtur, vizitoni Panelin e Kontrollit të Përdoruesit.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Për çfarë shërben butoni "Ruaj" në postimin e temës?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Nëse nuk jeni administrator ose moderator bordi, ju mund të modifikoni ose fshini vetëm postimet tuaja. Ju mund të redaktoni një postim duke klikuar butonin redakto për postimin përkatës, ndonjëherë vetëm për një kohë të kufizuar pasi është bërë postimi. Nëse dikush i është përgjigjur tashmë postimit, do të gjeni një pjesë të vogël të tekstit të dalë poshtë postimit kur të ktheheni në temën e cila liston numrin e herëve që e keni redaktuar së bashku me datën dhe orën. Kjo do të shfaqet vetëm nëse dikush ka bërë një përgjigje; nuk do të shfaqet nëse një moderator ose administrator e ka redaktuar postimin, megjithëse ata mund të lënë një shënim se pse e kanë redaktuar postimin sipas gjykimit të tyre. Ju lutemi vini re se përdoruesit normalë nuk mund të fshijnë një postim pasi dikush të jetë përgjigjur.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Si mund të modifikoj ose fshij një postim?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Disa forume mund të kufizohen në disa përdorues ose grupe. Për të parë, lexuar, postuar ose kryer një veprim tjetër, mund t\'ju nevojiten leje speciale. Kontaktoni një moderator ose administrator bordi për t\'ju dhënë akses.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Pse nuk mund të hyj në një forum?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Lejet e bashkëngjitjes jepen në bazë të forumit, grupit ose përdoruesve. Administratori i bordit mund të mos ketë lejuar shtimin e bashkëngjitjeve për forumin specifik ku po postoni, ose ndoshta vetëm grupe të caktuara mund të postojnë bashkëngjitje. Kontaktoni administratorin e bordit nëse nuk jeni të sigurt përse nuk jeni në gjendje të shtoni bashkëngjitje.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Pse nuk mund të shtoj bashkëngjitje?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Kufiri për opsionet e sondazhit vendoset nga administratori i bordit. Nëse mendoni se duhet të shtoni më shumë opsione në sondazhin tuaj sesa shuma e lejuar, kontaktoni administratorin e bordit.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Pse nuk mund të shtoj më shumë opsione sondazhi?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Kur postoni një temë të re ose redaktoni postimin e parë të një teme, klikoni në skedën "Krijimi i sondazhit" poshtë formularit kryesor të postimit; nëse nuk mund ta shihni këtë, nuk keni lejet e duhura për të krijuar sondazhe. Futni një titull dhe të paktën dy opsione në fushat e duhura, duke u siguruar që secili opsion të jetë në një rresht të veçantë në zonën e tekstit. Ju gjithashtu mund të vendosni numrin e opsioneve që përdoruesit mund të zgjedhin gjatë votimit nën "Opsionet për përdorues", një afat kohor në ditë për sondazhin (0 për kohëzgjatje të pafundme) dhe së fundi opsionin për t\'i lejuar përdoruesit të ndryshojnë votat e tyre.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Si mund të krijoj një sondazh?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Ashtu si me postimet, sondazhet mund të modifikohen vetëm nga posteri origjinal, një moderator ose një administrator. Për të redaktuar një sondazh, klikoni për të redaktuar postimin e parë në temë; kjo ka gjithmonë të lidhur sondazhin me të. Nëse askush nuk ka votuar, përdoruesit mund të fshijnë sondazhin ose të modifikojnë çdo opsion sondazhi. Megjithatë, nëse anëtarët kanë votuar tashmë, vetëm moderatorët ose administratorët mund ta modifikojnë ose fshijnë atë. Kjo parandalon që opsionet e sondazhit të ndryshohen në mes të një sondazhi.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Si mund të modifikoj ose fshij një sondazh?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Administratori i bordit mund të ketë vendosur që postimet në forum që po postoni të kërkojnë rishikim përpara dorëzimit. Është gjithashtu e mundur që administratori ju ka vendosur në një grup përdoruesish, postimet e të cilëve kërkojnë rishikim përpara dorëzimit. Ju lutemi kontaktoni administratorin e bordit për detaje të mëtejshme.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Pse duhet të miratohet postimi im?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Nëse administratori i bordit e ka lejuar, duhet të shihni një buton për raportimin e postimeve pranë postimit që dëshironi të raportoni. Duke klikuar këtë do t\'ju udhëzojë nëpër hapat e nevojshëm për të raportuar postimin.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Si mund t\'i raportoj postimet një moderatori?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Për të shtuar një nënshkrim në një postim, fillimisht duhet të krijoni një të tillë nëpërmjet Panelit të Kontrollit të Përdoruesit. Pasi të krijohet, mund të kontrolloni kutinë <em>Alidhni një nënshkrim</em> në formularin e postimit për të shtuar nënshkrimin tuaj. Ju gjithashtu mund të shtoni një nënshkrim si parazgjedhje në të gjitha postimet tuaja duke kontrolluar butonin e duhur të radios në Panelin e Kontrollit të Përdoruesit. Nëse e bëni këtë, mund të parandaloni që një nënshkrim të shtohet në postime individuale duke hequr zgjedhjen e kutisë së shtimit të nënshkrimit brenda formularit të postimit.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Si mund të shtoj një nënshkrim në postimin tim?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Çdo administrator i bordit ka grupin e vet të rregullave për faqen e tij. Nëse keni thyer një rregull, mund t\'ju lëshohet një paralajmërim. Ju lutemi vini re se ky është vendimi i administratorit të bordit dhe phpBB Limited nuk ka të bëjë fare me paralajmërimet në sitin e dhënë. Kontaktoni administratorin e bordit nëse nuk jeni të sigurt se përse ju është dhënë një paralajmërim.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Pse mora një paralajmërim?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Kërkimi juaj ktheu shumë rezultate për t\'u trajtuar nga serveri i uebit. Përdorni "Kërkim i avancuar" dhe jini më specifik në termat e përdorur dhe forumet që do të kërkohen.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Pse kërkimi im kthen një faqe të zbrazët!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Futni një term kërkimi në kutinë e kërkimit të vendosur në faqet e indeksit, forumit ose temës. Kërkimi i avancuar mund të arrihet duke klikuar lidhjen "Kërkimi i përparuar" i cili është i disponueshëm në të gjitha faqet në forum. Mënyra e qasjes në kërkim mund të varet nga stili i përdorur.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Si mund të kërkoj një forum apo forume?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Vizitoni listën e anëtarëve dhe klikoni lidhjen "Gjeni një anëtar".',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Si të kërkoj anëtarë?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Kërkimi juaj ishte ndoshta shumë i paqartë dhe përfshinte shumë terma të zakonshëm të cilët nuk janë të indeksuar nga phpBB. Jini më specifik dhe përdorni opsionet e disponueshme brenda Kërkimit të Avancuar.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Pse kërkimi im nuk jep rezultate?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Postimet tuaja mund të merren ose duke klikuar lidhjen "Shfaq postimet e tua" brenda Panelit të Kontrollit të Përdoruesit ose duke klikuar lidhjen "Kërko postimet e përdoruesit" nëpërmjet faqes së profilit tuaj ose duke klikuar menynë "Lidhje të shpejta" në krye të tabelës. Për të kërkuar temat tuaja, përdorni faqen e kërkimit të avancuar dhe plotësoni opsionet e ndryshme në mënyrë të përshtatshme.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Si mund t\'i gjej postimet dhe temat e mia?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Ka dy imazhe që mund të shfaqen së bashku me një emër përdoruesi kur shikoni postimet. Njëri prej tyre mund të jetë një imazh i lidhur me gradën tuaj, përgjithësisht në formën e yjeve, blloqeve ose pikave, që tregon numrin e postimeve që keni bërë ose statusin tuaj në tabelë. Një imazh tjetër, zakonisht më i madh, njihet si avatar dhe në përgjithësi është unik ose personal për çdo përdorues.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'Brenda panelit të kontrollit të përdoruesit, nën "Profili" mund të shtoni një avatar duke përdorur një nga katër metodat e mëposhtme: Gravatar, Galeria, Remote ose Ngarkoni. I takon administratorit të bordit të aktivizojë avatarët dhe të zgjedhë mënyrën në të cilën avatarët mund të vihen në dispozicion. Nëse nuk jeni në gjendje të përdorni avatarët, kontaktoni një administrator të bordit.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Si të shfaq një avatar?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Cilat janë imazhet pranë emrit tim të përdoruesit?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Nëse jeni përdorues i regjistruar, të gjitha cilësimet tuaja ruhen në bazën e të dhënave të bordit. Për t\'i ndryshuar ato, vizitoni Panelin e Kontrollit të Përdoruesit; një lidhje zakonisht mund të gjendet duke klikuar mbi emrin e përdoruesit në krye të faqeve të tabelës. Ky sistem do t\'ju lejojë të ndryshoni të gjitha cilësimet dhe preferencat tuaja.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Si t\'i ndryshoj cilësimet e mia?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Vetëm përdoruesit e regjistruar mund t\'u dërgojnë email përdoruesve të tjerë nëpërmjet formularit të integruar të emailit dhe vetëm nëse administratori e ka aktivizuar këtë veçori. Kjo është për të parandaluar përdorimin me qëllim të keq të sistemit të postës elektronike nga përdoruesit anonimë.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Kur klikoj lidhjen e emailit për një përdorues, ai më kërkon të identifikohem?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'Brenda Panelit të Kontrollit të Përdoruesit, nën "Preferencat e Bordit", do të gjeni opsionin <em>Hide statusin tuaj online</em>. Aktivizoni këtë opsion dhe do t\'u shfaqeni vetëm administratorëve, moderatorëve dhe vetes. Do të llogariteni si përdorues i fshehur.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Si mund të parandaloj që emri im i përdoruesit të shfaqet në listat e përdoruesve në internet?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Ose administratori nuk e ka instaluar gjuhën tuaj ose askush nuk e ka përkthyer këtë tabelë në gjuhën tuaj. Provoni të pyesni një administrator të bordit nëse mund të instalojë paketën gjuhësore që ju nevojitet. Nëse paketa gjuhësore nuk ekziston, mos ngurroni të krijoni një përkthim të ri. Më shumë informacion mund të gjeni në faqen e internetit <a href="https://www.phpbb.com/">phpBB</a>&reg;.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Gjuha ime nuk është në listë!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Renditjet, të cilat shfaqen poshtë emrit tuaj të përdoruesit, tregojnë numrin e postimeve që keni bërë ose identifikojnë përdorues të caktuar, p.sh. moderatorë dhe administratorë. Në përgjithësi, ju nuk mund të ndryshoni drejtpërdrejt formulimin e çdo rang bordi pasi ato përcaktohen nga administratori i bordit. Ju lutemi mos abuzoni me bordin duke postuar në mënyrë të panevojshme vetëm për të rritur gradën tuaj. Shumica e bordeve nuk do ta tolerojnë këtë dhe moderatori ose administratori thjesht do të ulin numrin e postimeve tuaja.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Cila është grada ime dhe si ta ndryshoj atë?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Nëse jeni të sigurt që e keni vendosur saktë zonën kohore dhe ora është ende e pasaktë, atëherë ora e ruajtur në orën e serverit është e pasaktë. Ju lutemi njoftoni një administrator për të korrigjuar problemin.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Ndryshova zonën kohore dhe ora është ende e gabuar!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Është e mundur që koha e shfaqur të jetë nga një zonë kohore e ndryshme nga ajo ku jeni. Nëse është kështu, vizitoni Panelin e Kontrollit të Përdoruesit dhe ndryshoni zonën tuaj kohore që të përputhet me zonën tuaj të veçantë, p.sh. Londër, Paris, Nju Jork, Sydney, etj. Ju lutemi, vini re se ndryshimi i zonës kohore, si shumica e cilësimeve, mund të bëhet vetëm nga përdoruesit e regjistruar. Nëse nuk jeni regjistruar, kjo është një kohë e mirë për ta bërë këtë.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Kohët nuk janë të sakta!',
));
