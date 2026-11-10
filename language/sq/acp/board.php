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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Këtu mund të përcaktoni funksionimin bazë të forumit, t’i vendosni një emër dhe përshkrim të përshtatshëm dhe, ndër cilësimet e tjera, të rregulloni vlerat e parazgjedhura për zonën kohore dhe gjuhën.',
	'BOARD_INDEX_TEXT'				=> 'Teksti i faqes kryesore të forumit',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Ky tekst shfaqet si faqja kryesore e forumit në shtegun e navigimit. Nëse nuk përcaktohet, vlera e parazgjedhur do të jetë “Faqja kryesore e forumit”.',
	'BOARD_STYLE'					=> 'Stili i forumit',
	'CUSTOM_DATEFORMAT'				=> 'I personalizuar…',
	'DEFAULT_DATE_FORMAT'			=> 'Formati i datës',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Sintaksa përdor të njëjtin format si <a href="https://www.php.net/manual/datetime.format.php">funksionet e datës</a> të PHP-së.',
	'DEFAULT_LANGUAGE'				=> 'Gjuha e parazgjedhur',
	'DEFAULT_STYLE'					=> 'Stili i parazgjedhur',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Stili i parazgjedhur për përdoruesit e rinj.',
	'DISABLE_BOARD'					=> 'Çaktivizo forumin',
	'DISABLE_BOARD_EXPLAIN'			=> 'Kjo do ta bëjë forumin të paarritshëm për përdoruesit që nuk janë administratorë ose moderatorë. Nëse dëshironi, mund të shkruani edhe një mesazh të shkurtër (255 shenja) për t’u shfaqur.',
	'DISPLAY_LAST_SUBJECT'			=> 'Shfaq subjektin e postimit të fundit në listën e forumeve',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Subjekti i postimit të fundit do të shfaqet në listën e forumeve me një lidhje drejt postimit. Subjektet nga forumet e mbrojtura me fjalëkalim dhe forumet ku përdoruesi nuk ka të drejtë leximi nuk shfaqen.',
	'DISPLAY_UNAPPROVED_POSTS'		=> 'Shfaqja autorit postimet e pamiratuara',
	'DISPLAY_UNAPPROVED_POSTS_EXPLAIN'	=> 'Postimet e pamiratuara mund të shihen nga autori. Nuk zbatohet për postimet e vizitorëve.',
	'GUEST_STYLE'					=> 'Stili për vizitorët',
	'GUEST_STYLE_EXPLAIN'			=> 'Stili i forumit për vizitorët.',
	'OVERRIDE_STYLE'				=> 'Anashkalo stilin e përdoruesit',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Zëvendëson stilin e përdoruesit (dhe të vizitorit) me stilin e përcaktuar te “Stili i parazgjedhur”.',
	'SITE_DESC'						=> 'Përshkrimi i sajtit',
	'SITE_HOME_TEXT'				=> 'Teksti i sajtit kryesor',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Ky tekst do të shfaqet si lidhje drejt faqes kryesore të sajtit në shtegun e navigimit të forumit. Nëse nuk përcaktohet, vlera e parazgjedhur do të jetë “Kreu”.',
	'SITE_HOME_URL'					=> 'URL-ja e sajtit kryesor',
	'SITE_HOME_URL_EXPLAIN'			=> 'Nëse përcaktohet, një lidhje drejt kësaj URL-je do të vendoset në fillim të shtegut të navigimit dhe logoja e forumit do të lidhet me këtë URL në vend të faqes kryesore të forumit. Kërkohet një URL absolute, p.sh. <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Emri i sajtit',
	'SYSTEM_TIMEZONE'				=> 'Zona kohore e vizitorëve',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Zona kohore që përdoret për t’ua shfaqur orën përdoruesve të paidentifikuar (vizitorë, robotë). Përdoruesit e identifikuar e caktojnë zonën kohore gjatë regjistrimit dhe mund ta ndryshojnë në panelin e kontrollit të përdoruesit.',
	'WARNINGS_EXPIRE'				=> 'Kohëzgjatja e paralajmërimit',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Numri i ditëve pas të cilave një paralajmërim skadon automatikisht nga regjistri i përdoruesit. Vendoseni vlerën në 0 për t’i bërë paralajmërimet të përhershme.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Këtu mund të aktivizoni ose çaktivizoni disa veçori të forumit.',

	'ALLOW_ATTACHMENTS'			=> 'Lejo bashkëngjitjet',
	'ALLOW_BIRTHDAYS'			=> 'Lejo ditëlindjet',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Lejon vendosjen e ditëlindjeve dhe shfaqjen e moshës në profile. Kini parasysh se lista e ditëlindjeve në faqen kryesore të forumit kontrollohet nga një cilësim i veçantë ngarkese.',
	'ALLOW_BOOKMARKS'			=> 'Lejo ruajtjen e temave në faqeshënues',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Përdoruesi mund të ruajë faqeshënues personalë.',
	'ALLOW_BBCODE'				=> 'Lejo BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'Lejo pajtimin në forume',
	'ALLOW_NAME_CHANGE'			=> 'Lejo ndryshimin e emrit të përdoruesit',
	'ALLOW_NO_CENSORS'			=> 'Lejo çaktivizimin e censurimit të fjalëve',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Përdoruesit mund të zgjedhin të çaktivizojnë censurimin automatik të fjalëve në postime dhe mesazhe private.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Lejo bashkëngjitjet në mesazhet private',
	'ALLOW_PM_REPORT'			=> 'Lejo përdoruesit të raportojnë mesazhe private',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Nëse ky cilësim aktivizohet, përdoruesit mund t’u raportojnë moderatorëve të forumit një mesazh privat që kanë marrë ose dërguar. Këto mesazhe private më pas do të jenë të dukshme në Panelin e Kontrollit të Moderatorit.',
	'ALLOW_QUICK_REPLY'			=> 'Lejo përgjigjen e shpejtë',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Ky çelës mundëson çaktivizimin e përgjigjes së shpejtë në të gjithë forumin. Kur aktivizohet, cilësimet e secilit forum përcaktojnë nëse përgjigjja e shpejtë shfaqet aty.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Dërgo dhe aktivizo përgjigjen e shpejtë në të gjitha forumet',
	'ALLOW_SIG'					=> 'Lejo nënshkrimet',
	'ALLOW_SIG_BBCODE'			=> 'Lejo BBCode në nënshkrimet e përdoruesve',
	'ALLOW_SIG_FLASH'			=> 'Lejo përdorimin e etiketës BBCode <code>[FLASH]</code> në nënshkrimet e përdoruesve',
	'ALLOW_SIG_IMG'				=> 'Lejo përdorimin e etiketës BBCode <code>[IMG]</code> në nënshkrimet e përdoruesve',
	'ALLOW_SIG_LINKS'			=> 'Lejo përdorimin e lidhjeve në nënshkrimet e përdoruesve',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Nëse ndalohet, etiketa BBCode <code>[URL]</code> dhe URL-të automatike çaktivizohen.',
	'ALLOW_SIG_SMILIES'			=> 'Lejo përdorimin e emotikonëve në nënshkrimet e përdoruesve',
	'ALLOW_SMILIES'				=> 'Lejo emotikonët',
	'ALLOW_TOPIC_NOTIFY'		=> 'Lejo pajtimin në tema',
	'BOARD_PM'					=> 'Mesazhet private',
	'BOARD_PM_EXPLAIN'			=> 'Aktivizon mesazhet private për të gjithë përdoruesit.',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Lejo njoftimet e forumit',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatarët janë zakonisht figura të vogla dhe unike që përdoruesi mund t’i shoqërojë me llogarinë e vet. Në varësi të stilit, ato zakonisht shfaqen poshtë emrit të përdoruesit gjatë shikimit të temave. Këtu mund të përcaktoni mënyrën se si përdoruesit vendosin avatarët e tyre. Për të ngarkuar avatarë duhet të keni krijuar dosjen e përcaktuar më poshtë dhe të siguroheni që serveri i uebit mund të shkruajë në të. Kini gjithashtu parasysh se kufijtë e madhësisë së skedarit zbatohen vetëm për avatarët e ngarkuar, jo për figurat e lidhura nga larg.',

	'ALLOW_AVATARS'					=> 'Aktivizo avatarët',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Lejon përdorimin e përgjithshëm të avatarëve;<br>Nëse çaktivizoni avatarët në përgjithësi ose avatarët e një mënyre të caktuar, avatarët e çaktivizuar nuk do të shfaqen më në forum, por përdoruesit do të mund t’i shkarkojnë ende avatarët e tyre nga Paneli i Kontrollit të Përdoruesit.',
	'ALLOW_GRAVATAR'				=> 'Aktivizo avatarët Gravatar',
	'ALLOW_LOCAL'					=> 'Aktivizo avatarët e galerisë',
	'ALLOW_REMOTE'					=> 'Aktivizo avatarët në largësi',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatarë të lidhur nga një sajt tjetër.<br><em><strong class="error">Paralajmërim:</strong> Aktivizimi i kësaj veçorie mund t’u lejojë përdoruesve të kontrollojnë ekzistencën e skedarëve dhe shërbimeve që mund të arrihen vetëm në rrjetin lokal.</em>',
	'ALLOW_REMOTE_UPLOAD'			=> 'Aktivizo ngarkimin e avatarëve nga larg',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Lejon ngarkimin e avatarëve nga një sajt tjetër.<br><em><strong class="error">Paralajmërim:</strong> Aktivizimi i kësaj veçorie mund t’u lejojë përdoruesve të kontrollojnë ekzistencën e skedarëve dhe shërbimeve që mund të arrihen vetëm në rrjetin lokal.</em>',
	'ALLOW_UPLOAD'					=> 'Aktivizo ngarkimin e avatarëve',
	'AVATAR_GALLERY_PATH'			=> 'Shtegu i galerisë së avatarëve',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Shtegu nën dosjen rrënjë të phpBB-së për figurat e parangarkuara, p.sh. <samp>images/avatars/gallery</samp>.<br>Për arsye sigurie, pikat e dyfishta si <samp>../</samp> do të hiqen nga shtegu.',
	'AVATAR_STORAGE_PATH'			=> 'Shtegu i ruajtjes së avatarëve',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Shtegu nën dosjen rrënjë të phpBB-së, p.sh. <samp>images/avatars/upload</samp>.<br>Ngarkimi i avatarëve <strong>nuk do të jetë i disponueshëm</strong> nëse në këtë shteg nuk mund të shkruhet.<br>Për arsye sigurie, pikat e dyfishta si <samp>../</samp> do të hiqen nga shtegu.',
	'MAX_AVATAR_SIZE'				=> 'Përmasat maksimale të avatarit',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Gjerësia x Lartësia në pikselë.',
	'MAX_FILESIZE'					=> 'Madhësia maksimale e skedarit të avatarit',
	'MAX_FILESIZE_EXPLAIN'			=> 'Për skedarët e avatarëve të ngarkuar. Nëse kjo vlerë është 0, madhësia e skedarit kufizohet vetëm nga konfigurimi i PHP-së.',
	'MIN_AVATAR_SIZE'				=> 'Përmasat minimale të avatarit',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Gjerësia x Lartësia në pikselë.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Këtu mund të caktoni të gjitha cilësimet e parazgjedhura për mesazhet private.',

	'ALLOW_BBCODE_PM'			=> 'Lejo BBCode në mesazhet private',
	'ALLOW_FLASH_PM'			=> 'Lejo përdorimin e etiketës BBCode <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Kini parasysh se mundësia për të përdorur Flash në mesazhet private, nëse aktivizohet këtu, varet edhe nga lejet.',
	'ALLOW_FORWARD_PM'			=> 'Lejo përcjelljen e mesazheve private',
	'ALLOW_IMG_PM'				=> 'Lejo përdorimin e etiketës BBCode <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Lejo dërgimin e mesazheve private te disa përdorues dhe grupe',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Dërgimi te grupet mund të rregullohet veçmas për secilin grup në faqen e cilësimeve të grupit.',
	'ALLOW_PRINT_PM'			=> 'Lejo pamjen për shtyp në mesazhet private',
	'ALLOW_QUOTE_PM'			=> 'Lejo citimet në mesazhet private',
	'ALLOW_SIG_PM'				=> 'Lejo nënshkrimin në mesazhet private',
	'ALLOW_SMILIES_PM'			=> 'Lejo emotikonët në mesazhet private',
	'BOXES_LIMIT'				=> 'Numri maksimal i mesazheve private për kuti',
	'BOXES_LIMIT_EXPLAIN'		=> 'Përdoruesit nuk mund të marrin më shumë se kaq mesazhe në secilën kuti të mesazheve private. Vendoseni vlerën në 0 për një numër të pakufizuar mesazhesh.',
	'BOXES_MAX'					=> 'Numri maksimal i dosjeve të mesazheve private',
	'BOXES_MAX_EXPLAIN'			=> 'Si parazgjedhje, përdoruesit mund të krijojnë kaq dosje personale për mesazhet private.',
	'ENABLE_PM_ICONS'			=> 'Aktivizo ikonat e temave në mesazhet private',
	'FULL_FOLDER_ACTION'		=> 'Veprimi i parazgjedhur për dosjen e mbushur',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Veprimi i parazgjedhur kur dosja e përdoruesit është e mbushur, nëse veprimi i caktuar nga përdoruesi nuk mund të zbatohet. Përjashtimi i vetëm është dosja “Mesazhet e dërguara”, ku veprimi i parazgjedhur është gjithmonë fshirja e mesazheve të vjetra.',
	'HOLD_NEW_MESSAGES'			=> 'Mbaj mesazhet e reja',
	'PM_EDIT_TIME'				=> 'Kufiri kohor i redaktimit',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Kufizon kohën e disponueshme për të redaktuar një mesazh privat që nuk është dorëzuar ende. Vendosja e vlerës në 0 e çaktivizon këtë sjellje.',
	'PM_MAX_RECIPIENTS'			=> 'Numri maksimal i marrësve të lejuar',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Numri maksimal i marrësve të lejuar në një mesazh privat. Nëse vendoset 0, lejohet një numër i pakufizuar. Ky cilësim mund të rregullohet për çdo grup në faqen e cilësimeve të grupit.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Këtu mund të caktoni të gjitha cilësimet e parazgjedhura për postimet.',
	'ALLOW_POST_LINKS'					=> 'Lejo lidhjet në postime dhe mesazhe private',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Nëse ndalohet, etiketa BBCode <code>[URL]</code> dhe URL-të automatike çaktivizohen.',
	'ALLOWED_SCHEMES_LINKS'				=> 'Skemat e lejuara në lidhje',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> 'Përdoruesit mund të postojnë vetëm URL pa skemë ose URL që përdorin një nga skemat e lejuara të ndara me presje.',
	'ALLOW_POST_FLASH'					=> 'Lejo përdorimin e etiketës BBCode <code>[FLASH]</code> në postime',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Nëse ndalohet, etiketa BBCode <code>[FLASH]</code> çaktivizohet në postime. Përndryshe, sistemi i lejeve kontrollon se cilët përdorues mund ta përdorin etiketën BBCode <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Intervali i ngritjes së temës',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Numri i minutave, orëve ose ditëve ndërmjet postimit të fundit në një temë dhe mundësisë për ta ngritur atë. Vendosja e vlerës në 0 e çaktivizon plotësisht ngritjen.',
	'CHAR_LIMIT'					=> 'Numri maksimal i shenjave për postim ose mesazh',
	'CHAR_LIMIT_EXPLAIN'			=> 'Numri i shenjave të lejuara në një postim ose mesazh privat. Vendoseni në 0 për një numër të pakufizuar shenjash.',
	'DELETE_TIME'					=> 'Kufiri kohor i fshirjes',
	'DELETE_TIME_EXPLAIN'			=> 'Kufizon kohën e disponueshme për të fshirë një postim të ri. Vendosja e vlerës në 0 e çaktivizon këtë sjellje.',
	'DISPLAY_LAST_EDITED'			=> 'Shfaq të dhënat e redaktimit të fundit',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Zgjidhni nëse në postime do të shfaqen të dhënat se kush e kreu redaktimin e fundit.',
	'EDIT_TIME'						=> 'Kufiri kohor i redaktimit',
	'EDIT_TIME_EXPLAIN'				=> 'Kufizon kohën e disponueshme për të redaktuar një postim të ri. Vendosja e vlerës në 0 e çaktivizon këtë sjellje.',
	'FLOOD_INTERVAL'				=> 'Intervali kundër vërshimit',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Numri i sekondave që përdoruesi duhet të presë ndërmjet postimit të mesazheve të reja. Për t’u lejuar përdoruesve ta shpërfillin këtë, ndryshoni lejet e tyre.',
	'HOT_THRESHOLD'					=> 'Pragu i temave popullore',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Numri i postimeve për temë që kërkohet për shënimin si temë popullore. Vendoseni në 0 për t’i çaktivizuar temat popullore.',
	'MAX_POLL_OPTIONS'				=> 'Numri maksimal i mundësive të sondazhit',
	'MAX_POST_FONT_SIZE'			=> 'Madhësia maksimale e shkronjave për postim',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Madhësia maksimale e shkronjave e lejuar në një postim. Vendoseni në 0 për madhësi të pakufizuar.',
	'MAX_POST_IMG_HEIGHT'			=> 'Lartësia maksimale e Flash-it për postim',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Lartësia maksimale e një skedari Flash në postime. Vendoseni në 0 për madhësi të pakufizuar.',
	'MAX_POST_IMG_WIDTH'			=> 'Gjerësia maksimale e Flash-it për postim',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Gjerësia maksimale e një skedari Flash në postime. Vendoseni në 0 për madhësi të pakufizuar.',
	'MAX_POST_URLS'					=> 'Numri maksimal i lidhjeve për postim',
	'MAX_POST_URLS_EXPLAIN'			=> 'Numri maksimal i URL-ve në një postim. Vendoseni në 0 për një numër të pakufizuar lidhjesh.',
	'MIN_CHAR_LIMIT'				=> 'Numri minimal i shenjave për postim ose mesazh',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Numri minimal i shenjave që përdoruesi duhet të shkruajë në një postim ose mesazh privat. Vlera minimale për këtë cilësim është 1.',
	'POSTING'						=> 'Postimi',
	'POSTS_PER_PAGE'				=> 'Postime për faqe',
	'QUOTE_DEPTH_LIMIT'				=> 'Thellësia maksimale e ndërthurjes së citimeve',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Thellësia maksimale e ndërthurjes së citimeve në një postim. Vendoseni në 0 për thellësi të pakufizuar.',
	'SMILIES_LIMIT'					=> 'Numri maksimal i emotikonëve për postim',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Numri maksimal i emotikonëve në një postim. Vendoseni në 0 për një numër të pakufizuar emotikonësh.',
	'SMILIES_PER_PAGE'				=> 'Emotikonë për faqe',
	'TOPICS_PER_PAGE'				=> 'Tema për faqe',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Këtu mund të caktoni të gjitha cilësimet e parazgjedhura për nënshkrimet.',

	'MAX_SIG_FONT_SIZE'				=> 'Madhësia maksimale e shkronjave të nënshkrimit',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Madhësia maksimale e shkronjave e lejuar në nënshkrimet e përdoruesve. Vendoseni në 0 për madhësi të pakufizuar.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Lartësia maksimale e figurës së nënshkrimit',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Lartësia maksimale e një figure ose skedari Flash në nënshkrimet e përdoruesve. Vendoseni në 0 për lartësi të pakufizuar.',
	'MAX_SIG_IMG_WIDTH'				=> 'Gjerësia maksimale e figurës së nënshkrimit',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Gjerësia maksimale e një figure ose skedari Flash në nënshkrimet e përdoruesve. Vendoseni në 0 për gjerësi të pakufizuar.',
	'MAX_SIG_LENGTH'				=> 'Gjatësia maksimale e nënshkrimit',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Numri maksimal i shenjave në nënshkrimet e përdoruesve.',
	'MAX_SIG_SMILIES'				=> 'Numri maksimal i emotikonëve për nënshkrim',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Numri maksimal i emotikonëve të lejuar në nënshkrimet e përdoruesve. Vendoseni në 0 për një numër të pakufizuar emotikonësh.',
	'MAX_SIG_URLS'					=> 'Numri maksimal i lidhjeve në nënshkrim',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Numri maksimal i lidhjeve në nënshkrimet e përdoruesve. Vendoseni në 0 për një numër të pakufizuar lidhjesh.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Këtu mund të përcaktoni cilësimet që lidhen me regjistrimin dhe profilin.',

	'ACC_ACTIVATION'				=> 'Aktivizimi i llogarisë',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Përcakton nëse përdoruesit kanë qasje të menjëhershme në forum apo nevojitet konfirmim. Mund t’i çaktivizoni plotësisht edhe regjistrimet e reja. <em>“Emaili në të gjithë forumin” duhet të jetë aktiv për të përdorur aktivizimin nga përdoruesi ose administratori.</em>',
	'ACC_ACTIVATION_WARNING'		=> 'Kini parasysh se mënyra e zgjedhur e aktivizimit kërkon që emailet të jenë aktive; përndryshe regjistrimi do të çaktivizohet. Rekomandojmë të zgjidhni një mënyrë tjetër aktivizimi ose t’i riaktivizoni emailet.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Kufiri i postimeve për anëtarët e rinj',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Anëtarët e rinj qëndrojnë në grupin <em>Përdoruesit e saporegjistruar</em> derisa të arrijnë këtë numër postimesh. Mund ta përdorni këtë grup për t’ua ndaluar sistemin e mesazheve private ose për të shqyrtuar postimet e tyre. <strong>Vlera 0 e çaktivizon këtë veçori.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Cakto grupin e përdoruesve të saporegjistruar si të parazgjedhur',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Nëse vendoset po dhe përcaktohet një kufi postimesh për anëtarët e rinj, përdoruesit e saporegjistruar jo vetëm që do të futen në grupin <em>Përdoruesit e saporegjistruar</em>, por ky grup do të bëhet edhe grupi i tyre i parazgjedhur. Kjo është e dobishme nëse dëshironi t’u caktoni një gradë ose avatar të parazgjedhur të grupit që përdoruesi do ta trashëgojë.',

	'ACC_ADMIN'					=> 'Nga administratori',
	'ACC_DISABLE'				=> 'Çaktivizo regjistrimin',
	'ACC_NONE'					=> 'Pa aktivizim (qasje e menjëhershme)',
	'ACC_USER'					=> 'Nga përdoruesi (verifikim me email)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Lejo ripërdorimin e adresës së emailit',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Përdorues të ndryshëm mund të regjistrohen me të njëjtën adresë emaili.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Numri i faksit COPPA',
	'COPPA_MAIL'				=> 'Adresa postare COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Kjo është adresa postare ku prindërit do të dërgojnë formularët e regjistrimit COPPA.',
	'ENABLE_COPPA'				=> 'Aktivizo COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Për pajtueshmëri me ligjin amerikan COPPA, përdoruesve u kërkohet të deklarojnë nëse janë 13 vjeç ose më të mëdhenj. Nëse çaktivizohet, grupet e posaçme COPPA nuk do të shfaqen më.',
	'MAX_CHARS'					=> 'Maks.',
	'MIN_CHARS'					=> 'Min.',
	'NO_AUTH_PLUGIN'			=> 'Nuk u gjet shtojcë e përshtatshme vërtetimi.',
	'PASSWORD_LENGTH'			=> 'Gjatësia e fjalëkalimit',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Numri minimal i shenjave në fjalëkalime. Kini parasysh se numri maksimal nuk kufizohet.',
	'REG_LIMIT'					=> 'Përpjekjet e regjistrimit',
	'REG_LIMIT_EXPLAIN'			=> 'Numri i përpjekjeve që përdoruesit mund të bëjnë për të zgjidhur detyrën kundër robotëve para se të bllokohen nga ajo seancë.',
	'USERNAME_ALPHA_ONLY'		=> 'Vetëm alfanumerike',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerike dhe ndarës',
	'USERNAME_ASCII'			=> 'ASCII (pa Unicode ndërkombëtar)',
	'USERNAME_LETTER_NUM'		=> 'Çdo shkronjë dhe numër',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Çdo shkronjë, numër dhe ndarës',
	'USERNAME_CHARS'			=> 'Kufizo shenjat e emrit të përdoruesit',
	'USERNAME_CHARS_ANY'		=> 'Çdo shenjë',
	'USERNAME_CHARS_EXPLAIN'	=> 'Kufizon llojin e shenjave që mund të përdoren në emrat e përdoruesve; ndarësit janë: hapësira, -, +, _, [ dhe ].',
	'USERNAME_LENGTH'			=> 'Gjatësia e emrit të përdoruesit',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Numri minimal dhe maksimal i shenjave në emrat e përdoruesve.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Cilësimet e përgjithshme të burimeve të shpërndarjes',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Ky modul ofron burime të ndryshme ATOM dhe përpunon çdo BBCode në postime për t’i bërë të lexueshme në burimet e jashtme.',

	'ACP_FEED_GENERAL'					=> 'Cilësimet e përgjithshme të burimeve',
	'ACP_FEED_POST_BASED'				=> 'Cilësimet e burimeve të bazuara në postime',
	'ACP_FEED_TOPIC_BASED'				=> 'Cilësimet e burimeve të bazuara në tema',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Burime dhe cilësime të tjera',

	'ACP_FEED_ENABLE'					=> 'Aktivizo burimet',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Aktivizon ose çaktivizon burimet ATOM për të gjithë forumin.<br>Çaktivizimi i kësaj zgjedhjeje i çaktivizon të gjitha burimet, pavarësisht cilësimeve të mëposhtme.',
	'ACP_FEED_LIMIT'					=> 'Numri i elementeve',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Numri maksimal i elementeve të burimit që do të shfaqen.',

	'ACP_FEED_OVERALL'					=> 'Aktivizo burimin për të gjithë forumin',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Postimet e reja në të gjithë forumin.',
	'ACP_FEED_FORUM'					=> 'Aktivizo burimet për çdo forum',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Postimet e reja të një forumi dhe nënforumeve të tij.',
	'ACP_FEED_TOPIC'					=> 'Aktivizo burimet për çdo temë',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Postimet e reja të një teme të vetme.',

	'ACP_FEED_TOPICS_NEW'				=> 'Aktivizo burimin e temave të reja',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Aktivizon burimin “Temat e reja”, i cili shfaq temat e krijuara së fundi bashkë me postimin e parë.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Aktivizo burimin e temave aktive',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Aktivizon burimin “Temat aktive”, i cili shfaq temat aktive së fundi bashkë me postimin e fundit.',
	'ACP_FEED_NEWS'						=> 'Burimi i lajmeve',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Merr postimin e parë nga këto forume. Mos zgjidhni asnjë forum për ta çaktivizuar burimin e lajmeve.<br>Zgjidhni disa forume duke mbajtur shtypur <samp>CTRL</samp> dhe duke klikuar.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Aktivizo burimin e forumeve',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Aktivizon burimin “Të gjitha forumet”, i cili shfaq një listë forumesh.',

	'ACP_FEED_HTTP_AUTH'				=> 'Lejo vërtetimin HTTP',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Aktivizon vërtetimin HTTP dhe u lejon përdoruesve të hyjnë në përmbajtjen e fshehur nga vizitorët duke shtuar parametrin <samp>auth=http</samp> në URL-në e burimit. Kini parasysh se disa konfigurime PHP mund të kërkojnë ndryshime shtesë në skedarin .htaccess; shihni atë skedar për udhëzime. Vërtetimi HTTP mbështetet vetëm në lidhje të koduara (https).',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Statistikat e elementit',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Shfaq statistika të veçanta poshtë elementeve të burimit<br>(p.sh. postuar nga, data dhe ora, përgjigjet, shikimet)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Përjashto këto forume',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Përmbajtja e tyre <strong>nuk do të përfshihet në burime</strong>. Mos zgjidhni asnjë forum për të marrë të dhëna nga të gjitha forumet.<br>Zgjidhni ose çzgjidhni disa forume duke mbajtur shtypur <samp>CTRL</samp> dhe duke klikuar.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Këtu mund të zgjidhni dhe konfiguroni shtojcat e krijuara për të bllokuar dërgimin automatik të formularëve nga robotët e padëshiruar. Këto shtojca zakonisht i paraqesin përdoruesit një <em>CAPTCHA</em>, një provë e krijuar që të jetë e vështirë për t’u zgjidhur nga kompjuterët.',
	'ACP_VC_EXT_GET_MORE'					=> 'Për shtojca shtesë (dhe ndoshta më të mira) kundër mesazheve të padëshiruara, vizitoni <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>Bazën e zgjerimeve të phpBB.com</strong></a>. Për më shumë informacion mbi parandalimin e mesazheve të padëshiruara në forum, vizitoni <a href="https://www.phpbb.com/go/anti-spam"><strong>Bazën e njohurive të phpBB.com</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Shtojcat e disponueshme',
	'CAPTCHA_UNAVAILABLE'					=> 'Shtojca nuk mund të zgjidhet sepse kërkesat e saj nuk plotësohen.',
	'CAPTCHA_GD'							=> 'Figurë GD',
	'CAPTCHA_GD_3D'							=> 'Figurë GD 3D',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Zhurma e planit të parë',
	'CAPTCHA_GD_EXPLAIN'					=> 'Përdor GD-në për të krijuar një figurë më të përparuar kundër robotëve.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Përdor zhurmë në planin e parë për ta bërë figurën më të vështirë për t’u lexuar.',
	'CAPTCHA_GD_X_GRID'						=> 'Zhurma e sfondit në boshtin x',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Përdorni vlera më të ulëta për ta bërë figurën më të vështirë për t’u lexuar. 0 e çaktivizon zhurmën e sfondit në boshtin x.',
	'CAPTCHA_GD_Y_GRID'						=> 'Zhurma e sfondit në boshtin y',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Përdorni vlera më të ulëta për ta bërë figurën më të vështirë për t’u lexuar. 0 e çaktivizon zhurmën e sfondit në boshtin y.',
	'CAPTCHA_GD_WAVE'						=> 'Shtrembërimi valor',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Zbaton një shtrembërim valor në figurë.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Shto objekte zhurme 3D',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Shton objekte të tjera në figurë, mbi shkronja.',
	'CAPTCHA_GD_FONTS'						=> 'Përdor shkronja të ndryshme',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Ky cilësim kontrollon sa forma të ndryshme shkronjash përdoren. Mund të përdorni vetëm format e parazgjedhura ose të shtoni shkronja të ndryshuara. Mund të shtohen edhe shkronja të vogla.',
	'CAPTCHA_FONT_DEFAULT'					=> 'E parazgjedhur',
	'CAPTCHA_FONT_NEW'						=> 'Forma të reja',
	'CAPTCHA_FONT_LOWER'					=> 'Përdor edhe shkronja të vogla',
	'CAPTCHA_NO_GD'							=> 'Figurë e thjeshtë',
	'CAPTCHA_PREVIEW_MSG'					=> 'Ndryshimet nuk janë ruajtur; kjo është vetëm një pamje paraprake.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Pamja që do të kishte shtojca me përzgjedhjen aktuale.',

	'CAPTCHA_SELECT'						=> 'Shtojcat e instaluara',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'Lista rënëse përmban shtojcat e njohura nga forumi. Zërat gri nuk janë të disponueshëm tani dhe mund të kërkojnë konfigurim para përdorimit.',
	'CAPTCHA_CONFIGURE'						=> 'Konfiguro shtojcat',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Ndryshoni cilësimet e shtojcës së zgjedhur.',
	'CONFIGURE'								=> 'Konfiguro',
	'CAPTCHA_NO_OPTIONS'					=> 'Kjo shtojcë nuk ka mundësi konfigurimi.',

	'VISUAL_CONFIRM_POST'					=> 'Aktivizo masat kundër robotëve për postimet e vizitorëve',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'U kërkon vizitorëve të kalojnë detyrën kundër robotëve për të ndihmuar në parandalimin e postimeve automatike.',
	'VISUAL_CONFIRM_REG'					=> 'Aktivizo masat kundër robotëve për regjistrimet',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'U kërkon përdoruesve të rinj të kalojnë detyrën kundër robotëve për të ndihmuar në parandalimin e regjistrimeve automatike.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Lejo rifreskimin e detyrës kundër robotëve',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'U lejon përdoruesve të kërkojnë një detyrë të re kundër robotëve nëse nuk arrijnë ta zgjidhin detyrën aktuale gjatë regjistrimit. Disa shtojca mund të mos e mbështesin këtë mundësi.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Këto hollësi përcaktojnë të dhënat që përdoren për të dërguar cookie në shfletuesit e përdoruesve. Në shumicën e rasteve, vlerat e parazgjedhura duhet të mjaftojnë. Nëse duhet t’i ndryshoni, bëjeni me kujdes, sepse cilësimet e gabuara mund t’i pengojnë përdoruesit të identifikohen. Nëse përdoruesit kanë probleme për të mbetur të identifikuar, vizitoni <strong><a href="https://www.phpbb.com/support/go/cookie-settings">Bazën e njohurive të phpBB.com — Rregullimi i cilësimeve të gabuara të cookie-ve</a></strong>.',

	'COOKIE_DOMAIN'					=> 'Domeni i cookie-ve',
	'COOKIE_DOMAIN_EXPLAIN'			=> 'Në shumicën e rasteve domeni i cookie-ve është opsional. Lëreni bosh nëse nuk jeni të sigurt.<br><br>Nëse forumi është i integruar me programe të tjera ose përdorni disa domene, përcaktojeni domenin e cookie-ve kështu: nëse keni <i>example.com</i> dhe <i>forums.example.com</i>, ose <i>forums.example.com</i> dhe <i>blog.example.com</i>, hiqni nëndomenet derisa të gjeni domenin e përbashkët, <i>example.com</i>. Pastaj shtoni një pikë përpara tij dhe shkruani .example.com (vini re pikën në fillim).',
	'COOKIE_NAME'					=> 'Emri i cookie-t',
	'COOKIE_NAME_EXPLAIN'			=> 'Mund të jetë çfarëdo emri që dëshironi; bëjeni unik. Sa herë që ndryshohen cilësimet e cookie-ve, duhet të ndryshohet edhe emri i cookie-t.',
	'COOKIE_NOTICE'					=> 'Njoftimi për cookie-t',
	'COOKIE_NOTICE_EXPLAIN'			=> 'Nëse aktivizohet, përdoruesve do t’u shfaqet një njoftim për cookie-t kur vizitojnë forumin. Kjo mund të kërkohet nga ligji, në varësi të përmbajtjes së forumit dhe zgjerimeve të aktivizuara.',
	'COOKIE_PATH'					=> 'Shtegu i cookie-t',
	'COOKIE_PATH_EXPLAIN'			=> 'Zakonisht është i njëjtë me shtegun e skriptit ose thjesht një vijë e pjerrët, që cookie të jetë i arritshëm në të gjithë domenin e sajtit.',
	'COOKIE_SECURE'					=> 'Cookie i sigurt',
	'COOKIE_SECURE_EXPLAIN'			=> 'Nëse serveri përdor SSL, aktivizojeni; përndryshe lëreni të çaktivizuar. Aktivizimi pa përdorur SSL do të shkaktojë gabime serveri gjatë ridrejtimeve.',
	'ONLINE_LENGTH'					=> 'Kohëzgjatja e shfaqjes në linjë',
	'ONLINE_LENGTH_EXPLAIN'			=> 'Numri i minutave pas të cilave përdoruesit joaktivë nuk do të shfaqen në listën “Kush është në linjë”. Sa më e lartë të jetë kjo vlerë, aq më shumë përpunim nevojitet për të krijuar listën.',
	'SESSION_LENGTH'				=> 'Kohëzgjatja e seancës',
	'SESSION_LENGTH_EXPLAIN'		=> 'Seancat skadojnë pas kësaj kohe, në sekonda.',
	'SESSION_GC'					=> 'Intervali i pastrimit të seancave',
	'SESSION_GC_EXPLAIN'			=> 'Seancat pastrohen pas kësaj kohe, në sekonda.',
	'SESSION_GUEST_LENGTH'			=> 'Kohëzgjatja e seancës së vizitorit',
	'SESSION_GUEST_LENGTH_EXPLAIN'	=> 'Seancat e vizitorëve skadojnë pas kësaj kohe, në sekonda.',
	'SESSION_GUEST_GC'				=> 'Intervali i pastrimit të seancave të vizitorëve',
	'SESSION_GUEST_GC_EXPLAIN'		=> 'Seancat e vizitorëve pastrohen pas kësaj kohe, në sekonda.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Këtu mund të aktivizoni ose çaktivizoni faqen e kontaktit dhe të shtoni tekstin që shfaqet në të.',

	'CONTACT_US_ENABLE'				=> 'Aktivizo faqen e kontaktit',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Kjo faqe u lejon përdoruesve t’u dërgojnë email administratorëve të forumit. Duhet të jetë aktivizuar edhe mundësia e emaileve në të gjithë forumin. Këtë mundësi e gjeni te Të përgjithshme &gt; Komunikimi me klientin &gt; Cilësimet e emailit.',

	'CONTACT_US_INFO'				=> 'Të dhënat e kontaktit',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Mesazhi shfaqet në faqen e kontaktit',
	'CONTACT_US_INFO_PREVIEW'		=> 'Të dhënat e faqes së kontaktit — Pamje paraprake',
	'CONTACT_US_INFO_UPDATED'		=> 'Të dhënat e faqes së kontaktit u përditësuan.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Këtu mund të aktivizoni ose çaktivizoni funksione të caktuara të forumit për të zvogëluar përpunimin e nevojshëm. Në shumicën e serverëve nuk ka nevojë të çaktivizoni asnjë funksion. Megjithatë, në disa sisteme ose mjedise hostimi të përbashkët mund të jetë e dobishme të çaktivizoni veçoritë që nuk ju duhen. Mund të përcaktoni edhe kufij për ngarkesën e sistemit dhe seancat aktive, përtej të cilëve forumi do të dalë jashtë linje.',

	'ALLOW_CDN'						=> 'Lejo rrjetet e palëve të treta për shpërndarjen e përmbajtjes',
	'ALLOW_CDN_EXPLAIN'				=> 'Nëse aktivizohet, disa skedarë do të shërbehen nga serverë të jashtëm të palëve të treta në vend të serverit tuaj. Kjo zvogëlon gjerësinë e brezit të përdorur nga serveri, por mund të sjellë çështje privatësie në disa vende. Në një instalim të parazgjedhur të phpBB-së, kjo përfshin ngarkimin e “jQuery” dhe shkronjave “Open Sans” nga rrjeti i Google-it. Zbatohet edhe për shkronjat “Font Awesome”, që phpBB dhe disa zgjerime i përdorin për ikona.',
	'ALLOW_LIVE_SEARCHES'			=> 'Lejo kërkimet e drejtpërdrejta',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Nëse aktivizohet, përdoruesve u sugjerohen fjalë kyçe ndërsa shkruajnë në fusha të caktuara në forum.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Fushat e personalizuara të profilit',
	'LIMIT_LOAD'					=> 'Kufizo ngarkesën e sistemit',
	'LIMIT_LOAD_EXPLAIN'			=> 'Nëse mesatarja njëminutëshe e ngarkesës së sistemit e tejkalon këtë vlerë, forumi del automatikisht jashtë linje. Vlera 1.0 është afërsisht 100% e përdorimit të një procesori. Funksionon vetëm në serverë UNIX ku këto të dhëna janë të arritshme. Vlera rivendoset në 0 nëse phpBB nuk arrin të marrë kufirin e ngarkesës.',
	'LIMIT_SESSIONS'				=> 'Kufizo seancat',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Nëse numri i seancave e tejkalon këtë vlerë brenda një minute, forumi del jashtë linje. Vendoseni në 0 për seanca të pakufizuara.',
	'LOAD_CPF_MEMBERLIST'			=> 'Lejo stilet të shfaqin fushat e personalizuara të profilit në listën e anëtarëve',
	'LOAD_CPF_PM'					=> 'Shfaq fushat e personalizuara të profilit në mesazhet private',
	'LOAD_CPF_VIEWPROFILE'			=> 'Shfaq fushat e personalizuara të profilit në profilet e përdoruesve',
	'LOAD_CPF_VIEWTOPIC'			=> 'Shfaq fushat e personalizuara të profilit në faqet e temave',
	'LOAD_USER_ACTIVITY'			=> 'Shfaq veprimtarinë e përdoruesit',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Shfaq temën ose forumin aktiv në profile dhe në panelin e kontrollit të përdoruesit. Rekomandohet ta çaktivizoni në forume me më shumë se një milion postime.',
	'LOAD_USER_ACTIVITY_LIMIT'		=> 'Kufiri i postimeve për veprimtarinë e përdoruesit',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> 'Tema ose forumi aktiv nuk shfaqet për përdoruesit me më shumë se kaq postime. Vendoseni në 0 për ta çaktivizuar kufirin.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Skadimi i njoftimeve të lexuara',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Numri i ditëve pas të cilave një njoftim i lexuar fshihet automatikisht. Vendoseni vlerën në 0 për t’i bërë njoftimet të përhershme.',
	'RECOMPILE_STYLES'				=> 'Ripërpilo përbërësit e vjetruar të stilit',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Kontrollon për përbërës të përditësuar të stilit në sistemin e skedarëve dhe i ripërpilon.',
	'YES_ACCURATE_PM_BUTTON'			=> 'Aktivizo butonin e mesazheve private sipas lejeve në faqet e temave',
	'YES_ACCURATE_PM_BUTTON_EXPLAIN'	=> 'Nëse aktivizohet, vetëm profilet e postimeve të përdoruesve që lejohen të lexojnë mesazhe private do të kenë butonin e mesazhit privat.',
	'YES_ANON_READ_MARKING'			=> 'Aktivizo shënimin e temave për vizitorët',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Ruan gjendjen lexuar/pa lexuar për vizitorët. Nëse çaktivizohet, postimet shënohen gjithmonë si të lexuara për vizitorët.',
	'YES_BIRTHDAYS'					=> 'Aktivizo listën e ditëlindjeve',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Nëse çaktivizohet, lista e ditëlindjeve nuk shfaqet më. Që ky cilësim të zbatohet, duhet të jetë aktive edhe veçoria e ditëlindjeve.',
	'YES_JUMPBOX'					=> 'Aktivizo shfaqjen e kutisë së kalimit',
	'YES_MODERATORS'				=> 'Aktivizo shfaqjen e moderatorëve',
	'YES_ONLINE'					=> 'Aktivizo listat e përdoruesve në linjë',
	'YES_ONLINE_EXPLAIN'			=> 'Shfaq të dhënat e përdoruesve në linjë në faqet kryesore, të forumeve dhe të temave.',
	'YES_ONLINE_GUESTS'				=> 'Aktivizo listën e vizitorëve në linjë te faqja e pranisë',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Lejon shfaqjen e të dhënave të vizitorëve në faqen e pranisë.',
	'YES_ONLINE_TRACK'				=> 'Aktivizo shfaqjen e gjendjes në linjë/jashtë linje',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Shfaq gjendjen në linjë të përdoruesit në profile dhe faqet e temave.',
	'YES_POST_MARKING'				=> 'Aktivizo temat e shënuara me pikë',
	'YES_POST_MARKING_EXPLAIN'		=> 'Tregon nëse përdoruesi ka postuar në një temë.',
	'YES_READ_MARKING'				=> 'Aktivizo shënimin e temave në server',
	'YES_READ_MARKING_EXPLAIN'		=> 'Ruan gjendjen lexuar/pa lexuar në bazën e të dhënave në vend të një cookie-je.',
	'YES_UNREAD_SEARCH'				=> 'Aktivizo kërkimin për postime të palexuara',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB mbështet shtojca ose module vërtetimi. Ato ju lejojnë të përcaktoni si vërtetohen përdoruesit kur identifikohen në forum. Si parazgjedhje ofrohen katër shtojca: DB, LDAP, Apache dhe OAuth. Jo të gjitha mënyrat kërkojnë të dhëna shtesë, ndaj plotësoni vetëm fushat që lidhen me mënyrën e zgjedhur.',

	'AUTH_METHOD'				=> 'Zgjidhni një mënyrë vërtetimi',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Duhet të jepen si çelësi, ashtu edhe sekreti për çdo ofrues të aktivizuar të shërbimit OAuth. Për një ofrues OAuth u dha vetëm njëri.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Çdo ofrues OAuth kërkon një sekret dhe çelës unik për t’u vërtetuar me serverin e jashtëm. Shërbimi OAuth duhet t’jua japë këto kur regjistroni sajtin tuaj dhe duhet t’i shkruani saktësisht siç jepen.<br>Çdo shërbim pa çelës dhe sekret nuk do të jetë i disponueshëm për përdoruesit e forumit. Përdoruesit mund të vazhdojnë të regjistrohen dhe identifikohen me shtojcën e vërtetimit DB.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Çelësi',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Sekreti',

	'APACHE_SETUP_BEFORE_USE'	=> 'Duhet të konfiguroni vërtetimin Apache para se ta kaloni phpBB-në në këtë mënyrë. Emri i përdoruesit për vërtetimin Apache duhet të jetë i njëjtë me emrin tuaj në phpBB. Vërtetimi Apache mund të përdoret vetëm me mod_php (jo me versionin CGI).',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'Baza LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Ky është emri i dalluar që përcakton vendndodhjen e të dhënave të përdoruesit, p.sh. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'Atributi i emailit LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Vendoseni në emrin e atributit të emailit të zërit të përdoruesit (nëse ekziston) për të caktuar automatikisht adresën e emailit për përdoruesit e rinj. Nëse lihet bosh, përdoruesit që identifikohen për herë të parë do të kenë adresë emaili bosh.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Lidhja me serverin LDAP dështoi me përdoruesin ose fjalëkalimin e dhënë.',
	'LDAP_NO_EMAIL'					=> 'Atributi i përcaktuar i emailit nuk ekziston.',
	'LDAP_NO_IDENTITY'				=> 'Nuk u gjet identitet identifikimi për %s.',
	'LDAP_PASSWORD'					=> 'Fjalëkalimi LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Lëreni bosh për lidhje anonime; përndryshe shkruani fjalëkalimin e përdoruesit të mësipërm. Kërkohet për serverët Active Directory.<br><em><strong>Paralajmërim:</strong> Ky fjalëkalim do të ruhet si tekst i thjeshtë në bazën e të dhënave dhe do të jetë i dukshëm për këdo që mund të hyjë në bazën tuaj ose të shohë këtë faqe konfigurimi.</em>',
	'LDAP_PORT'						=> 'Porta e serverit LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Mund të përcaktoni një portë që do të përdoret për t’u lidhur me serverin LDAP në vend të portës së parazgjedhur 389.',
	'LDAP_SERVER'					=> 'Emri i serverit LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Nëse përdorni LDAP, ky është emri i hostit ose adresa IP e serverit LDAP. Mund të përcaktoni edhe një URL si ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Ky është çelësi me të cilin kërkohet identiteti i dhënë i identifikimit, p.sh. <var>uid</var>, <var>sn</var> etj.',
	'LDAP_USER'						=> 'Përdoruesi LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Lëreni bosh për lidhje anonime. Nëse plotësohet, phpBB përdor emrin e dalluar gjatë përpjekjeve të identifikimit për të gjetur përdoruesin e duhur, p.sh. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Kërkohet për serverët Active Directory.',
	'LDAP_USER_FILTER'				=> 'Filtri i përdoruesve LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Mund t’i kufizoni më tej objektet e kërkuara me filtra shtesë. Për shembull, <samp>objectClass=posixGroup</samp> do të përdorte <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Këtu përcaktoni cilësimet që varen nga serveri dhe domeni. Sigurohuni që të dhënat të jenë të sakta, sepse gabimet do të sjellin emaile me informacion të pasaktë. Kur shkruani emrin e domenit, mbani mend se ai përfshin http:// ose një term tjetër protokolli. Ndryshoni numrin e portës vetëm nëse e dini se serveri përdor një vlerë tjetër; porta 80 është e saktë në shumicën e rasteve.',

	'ENABLE_GZIP'				=> 'Aktivizo ngjeshjen GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Përmbajtja e krijuar do të ngjeshet para se t’i dërgohet përdoruesit. Kjo mund të zvogëlojë trafikun e rrjetit, por rrit përdorimin e CPU-së si në server, ashtu edhe te klienti. Kërkon ngarkimin e zgjerimit zlib të PHP-së.',
	'FORCE_SERVER_VARS'			=> 'Detyro cilësimet e URL-së së serverit',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Nëse vendoset po, cilësimet e serverit të përcaktuara këtu do të përdoren në vend të vlerave të zbuluara automatikisht.',
	'ICONS_PATH'				=> 'Shtegu i ruajtjes së ikonave të postimeve',
	'ICONS_PATH_EXPLAIN'		=> 'Shtegu nën dosjen rrënjë të phpBB-së, p.sh. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Aktivizo rishkrimin e URL-ve',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Kur aktivizohet, URL-të që përmbajnë ’app.php’ rishkruhen për ta hequr emrin e skedarit (p.sh. app.php/foo bëhet /foo). <strong>Që kjo të funksionojë kërkohet moduli mod_rewrite i serverit Apache; nëse aktivizohet pa mbështetje mod_rewrite, URL-të e forumit mund të prishen.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'Moduli <strong>mod_rewrite</strong> në serverin tuaj Apache është çaktivizuar. Aktivizojeni ose kontaktoni ofruesin e hostimit nëse dëshironi ta përdorni këtë veçori.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Nuk mund të përcaktojmë nëse ky server mbështet rishkrimin e URL-ve. Mund ta aktivizoni, por nëse rishkrimi nuk është i disponueshëm, shtigjet e krijuara nga forumi (p.sh. për lidhje) mund të prishen. Kontaktoni ofruesin e hostimit nëse nuk jeni të sigurt nëse mund ta aktivizoni pa rrezik.',
	'PATH_SETTINGS'				=> 'Cilësimet e shtigjeve',
	'RANKS_PATH'				=> 'Shtegu i ruajtjes së figurave të gradave',
	'RANKS_PATH_EXPLAIN'		=> 'Shtegu nën dosjen rrënjë të phpBB-së, p.sh. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Shtegu i skriptit',
	'SCRIPT_PATH_EXPLAIN'		=> 'Shtegu ku ndodhet phpBB në raport me emrin e domenit, p.sh. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Emri i domenit',
	'SERVER_NAME_EXPLAIN'		=> 'Emri i domenit nga i cili funksionon ky forum (p.sh. <samp>example.com</samp>).',
	'SERVER_PORT'				=> 'Porta e serverit',
	'SERVER_PORT_EXPLAIN'		=> 'Porta në të cilën funksionon serveri, zakonisht 80; ndryshojeni vetëm nëse është ndryshe.',
	'SERVER_PROTOCOL'			=> 'Protokolli i serverit',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Përdoret si protokoll i serverit nëse këto cilësime detyrohen. Nëse lihet bosh ose nuk detyrohet, protokolli përcaktohet nga cilësimi i cookie-t të sigurt (<samp>http://</samp> ose <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Cilësimet e URL-së së serverit',
	'SMILIES_PATH'				=> 'Shtegu i ruajtjes së emotikonëve',
	'SMILIES_PATH_EXPLAIN'		=> 'Shtegu nën dosjen rrënjë të phpBB-së, p.sh. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Shtegu i ruajtjes së ikonave të grupeve të zgjerimeve',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Shtegu nën dosjen rrënjë të phpBB-së, p.sh. <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'			=> 'Ekzekuto detyrat periodike me cron-in e sistemit operativ',
	'USE_SYSTEM_CRON_EXPLAIN'	=> 'Kur çaktivizohet, phpBB kujdeset që detyrat periodike të ekzekutohen automatikisht. Kur aktivizohet, phpBB nuk planifikon vetë asnjë detyrë periodike; administratori i sistemit duhet të caktojë që <code>bin/phpbbcli.php cron:run</code> të ekzekutohet nga cron-i i sistemit operativ në intervale të rregullta (p.sh. çdo 5 minuta).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Këtu mund të përcaktoni cilësimet që lidhen me seancat dhe identifikimin.',

	'ALL'							=> 'Të gjitha',
	'ALLOW_AUTOLOGIN'				=> 'Lejo identifikimin me “Më mbaj mend”',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Përcakton nëse përdoruesve u ofrohet mundësia “Më mbaj mend” kur vizitojnë forumin.',
	'ALLOW_PASSWORD_RESET'			=> 'Lejo rivendosjen e fjalëkalimit (“Harrova fjalëkalimin”)',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Përcakton nëse përdoruesit mund të përdorin lidhjen “Harrova fjalëkalimin” në faqen e identifikimit për të rikuperuar llogarinë. Nëse përdorni një mekanizëm të jashtëm vërtetimi, mund ta çaktivizoni këtë veçori.',
	'AUTOLOGIN_LENGTH'				=> 'Kohëzgjatja e vlefshmërisë së çelësave “Më mbaj mend” (në ditë)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Numri i ditëve pas të cilave çelësat e identifikimit “Më mbaj mend” hiqen; vendoseni në zero për ta çaktivizuar.',
	'BROWSER_VALID'					=> 'Vërteto shfletuesin',
	'BROWSER_VALID_EXPLAIN'			=> 'Aktivizon vërtetimin e shfletuesit për çdo seancë, duke përmirësuar sigurinë.',
	'CHECK_DNSBL'					=> 'Kontrollo IP-në në listën e zezë DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'Nëse aktivizohet, adresa IP e përdoruesit kontrollohet gjatë regjistrimit dhe postimit në shërbimet DNSBL: <a href="http://spamcop.net">spamcop.net</a> dhe <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Kërkimi mund të zgjasë, në varësi të konfigurimit të serverit. Nëse ka ngadalësime ose shumë rezultate të rreme pozitive, rekomandohet ta çaktivizoni këtë kontroll.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Kontrollo domenin e emailit për regjistrim MX të vlefshëm',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Nëse aktivizohet, domeni i emailit i dhënë gjatë regjistrimit dhe ndryshimeve të profilit kontrollohet për një regjistrim MX të vlefshëm.',
	'FORCE_PASS_CHANGE'				=> 'Detyro ndryshimin e fjalëkalimit',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'I kërkon përdoruesit ta ndryshojë fjalëkalimin pas një numri të caktuar ditësh. Vendosja e vlerës në 0 e çaktivizon këtë sjellje.',
	'FORM_TIME_MAX'					=> 'Koha maksimale për dërgimin e formularëve',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Koha që përdoruesi ka për të dërguar një formular. Përdorni -1 për ta çaktivizuar. Formulari mund të bëhet i pavlefshëm nëse seanca skadon, pavarësisht këtij cilësimi.',
	'FORM_SID_GUESTS'				=> 'Lidhi formularët me seancat e vizitorëve',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Nëse aktivizohet, tokeni i formularit që u jepet vizitorëve do të vlejë vetëm për atë seancë. Kjo mund të shkaktojë probleme me disa ofrues interneti.',
	'FORWARDED_FOR_VALID'			=> 'Vërteto kokën <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Seanca vazhdon vetëm nëse koka e dërguar <var>X_FORWARDED_FOR</var> përputhet me atë të kërkesës së mëparshme. Edhe ndalimet kontrollohen kundrejt IP-ve në <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Vërtetimi i IP-së së seancës',
	'IP_VALID_EXPLAIN'				=> 'Përcakton sa pjesë e IP-së së përdoruesit përdoret për të vërtetuar seancën; <samp>Të gjitha</samp> krahason adresën e plotë, <samp>A.B.C</samp> pjesën e parë x.x.x, <samp>A.B</samp> pjesën e parë x.x, ndërsa <samp>Asnjë</samp> e çaktivizon kontrollin. Për adresat IPv6, <samp>A.B.C</samp> krahason 4 blloqet e para dhe <samp>A.B</samp> 3 blloqet e para.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Numri maksimal i përpjekjeve të identifikimit për adresë IP',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Pragu i përpjekjeve të lejuara nga një adresë IP para se të aktivizohet detyra kundër robotëve. Shkruani 0 që adresat IP të mos e aktivizojnë këtë detyrë.',
	'IP_LOGIN_LIMIT_TIME'			=> 'Koha e skadimit të përpjekjeve të identifikimit sipas IP-së',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Përpjekjet e identifikimit skadojnë pas kësaj periudhe.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Kufizo përpjekjet sipas kokës <var>X_FORWARDED_FOR</var>',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Në vend që të kufizohen sipas adresës IP, përpjekjet kufizohen sipas vlerave <var>X_FORWARDED_FOR</var>. <br><em><strong>Paralajmërim:</strong> Aktivizojeni vetëm nëse përdorni një server ndërmjetës që e vendos <var>X_FORWARDED_FOR</var> në vlera të besueshme.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Numri maksimal i përpjekjeve për emër përdoruesi',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Numri i përpjekjeve të lejuara për një llogari para se të aktivizohet detyra kundër robotëve. Shkruani 0 për të mos e aktivizuar detyrën për llogari të veçanta.',
	'NO_IP_VALIDATION'				=> 'Asnjë',
	'NO_REF_VALIDATION'				=> 'Asnjë',
	'PASSWORD_TYPE'					=> 'Ndërlikueshmëria e fjalëkalimit',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Përcakton sa i ndërlikuar duhet të jetë fjalëkalimi kur vendoset ose ndryshohet; mundësitë pasuese përfshijnë të mëparshmet.',
	'PASS_TYPE_ALPHA'				=> 'Duhet të përmbajë shkronja dhe numra',
	'PASS_TYPE_ANY'					=> 'Pa kërkesa',
	'PASS_TYPE_CASE'				=> 'Duhet të ketë shkronja të mëdha dhe të vogla',
	'PASS_TYPE_SYMBOL'				=> 'Duhet të përmbajë simbole',
	'REF_HOST'						=> 'Vërteto vetëm hostin',
	'REF_PATH'						=> 'Vërteto edhe shtegun',
	'REFERRER_VALID'				=> 'Vërteto referuesin',
	'REFERRER_VALID_EXPLAIN'		=> 'Nëse aktivizohet, referuesi i kërkesave POST kontrollohet kundrejt cilësimeve të hostit dhe shtegut të skriptit. Kjo mund të shkaktojë probleme në forume me disa domene ose identifikime të jashtme.',
	'TPL_ALLOW_PHP'					=> 'Lejo PHP në shabllone',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Nëse aktivizohet, deklaratat <code>PHP</code> dhe <code>INCLUDEPHP</code> do të njihen dhe përpunohen në shabllone.',
	'UPLOAD_CERT_VALID'				=> 'Vërteto certifikatën e ngarkimit',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> 'Nëse aktivizohet, certifikatat e ngarkimeve nga larg do të vërtetohen. Kërkohet që paketa CA të përcaktohet nga cilësimi <samp>openssl.cafile</samp> ose <samp>curl.cainfo</samp> në php.ini.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Këto të dhëna përdoren kur forumi u dërgon email përdoruesve. Sigurohuni që adresa e emailit të jetë e vlefshme, sepse mesazhet e kthyera ose të padorëzueshme ka të ngjarë të dërgohen në atë adresë. Nëse hosti nuk ofron shërbim emaili vendas (të bazuar në PHP), mund t’i dërgoni mesazhet drejtpërdrejt me SMTP. Kjo kërkon adresën e një serveri të përshtatshëm (pyetni ofruesin nëse nevojitet). Nëse serveri kërkon vërtetim, dhe vetëm atëherë, shkruani emrin e përdoruesit, fjalëkalimin dhe mënyrën e vërtetimit.',

	'ADMIN_EMAIL'					=> 'Adresa e emailit të dërguesit',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Do të përdoret si adresa e dërguesit në të gjitha emailet dhe si adresë kontakti teknik. Do të përdoret gjithmonë si adresa <samp>Sender</samp> në email.',
	'BOARD_EMAIL_FORM'				=> 'Përdoruesit dërgojnë email përmes forumit',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Në vend që të shfaqet adresa e emailit e përdoruesit, përdoruesit mund të dërgojnë email përmes forumit.',
	'BOARD_HIDE_EMAILS'				=> 'Fshih adresat e emailit',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Ky funksion i mban plotësisht private adresat e emailit.',
	'CONTACT_EMAIL'					=> 'Adresa e emailit të kontaktit',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Kjo adresë përdoret sa herë që nevojitet një pikë e posaçme kontakti, p.sh. për mesazhe të padëshiruara, gabime etj. Do të përdoret gjithmonë si adresa <samp>From</samp> dhe <samp>Reply-To</samp> në email.',
	'CONTACT_EMAIL_NAME'			=> 'Emri i kontaktit',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Ky është emri i kontaktit që do të shohin marrësit e emailit. Nëse nuk dëshironi emër kontakti, lëreni fushën bosh.',
	'EMAIL_FORCE_SENDER'			=> 'Detyro adresën e emailit të dërguesit',
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> 'E vendos <samp>Return-Path</samp> në adresën e emailit të dërguesit në vend të përdoruesit lokal dhe emrit të hostit të serverit. Ky cilësim nuk zbatohet kur përdoret SMTP.<br><em><strong>Paralajmërim:</strong> Përdoruesi me të cilin funksionon serveri i uebit duhet të shtohet si përdorues i besuar në konfigurimin e sendmail-it.</em>',
	'EMAIL_PACKAGE_SIZE'			=> 'Madhësia e paketës së emaileve',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Numri maksimal i emaileve që dërgohen në një paketë. Ky cilësim zbatohet në radhën e brendshme të mesazheve; vendoseni në 0 nëse keni probleme me emailet e njoftimeve që nuk dorëzohen.',
	'EMAIL_MAX_CHUNK_SIZE'			=> 'Numri maksimal i marrësve të emailit',
	'EMAIL_MAX_CHUNK_SIZE_EXPLAIN'	=> 'Nëse nevojitet, caktojeni që të mos tejkalojë numrin maksimal të marrësve që serveri i emailit lejon në një mesazh.',
	'EMAIL_SIG'						=> 'Nënshkrimi i emailit',
	'EMAIL_SIG_EXPLAIN'				=> 'Ky tekst do t’u bashkëngjitet të gjitha emaileve që dërgon forumi.',
	'ENABLE_EMAIL'					=> 'Aktivizo emailet në të gjithë forumin',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Nëse çaktivizohet, forumi nuk do të dërgojë asnjë email. <em>Kini parasysh se cilësimet e aktivizimit të llogarisë nga përdoruesi dhe administratori kërkojnë që ky cilësim të jetë aktiv. Nëse përdoret aktivizimi nga “përdoruesi” ose “administratori”, çaktivizimi i këtij cilësimi do ta çaktivizojë regjistrimin.</em>',
	'SEND_TEST_EMAIL'				=> 'Dërgo një email prove',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'Dërgon një email prove në adresën e përcaktuar në llogarinë tuaj.',
	'SMTP_ALLOW_SELF_SIGNED'		=> 'Lejo certifikata SSL të vetënënshkruara',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> 'Lejon lidhjet me serverin SMTP me certifikatë SSL të vetënënshkruar. <br><em><strong>Paralajmërim:</strong> Lejimi i certifikatave SSL të vetënënshkruara mund të sjellë rreziqe sigurie.</em>',
	'SMTP_AUTH_METHOD'				=> 'Mënyra e vërtetimit për SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Përdoret vetëm nëse është vendosur emër përdoruesi ose fjalëkalim; pyetni ofruesin nëse nuk jeni të sigurt cilën mënyrë të përdorni.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Fjalëkalimi SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Shkruani fjalëkalim vetëm nëse e kërkon serveri SMTP.<br><em><strong>Paralajmërim:</strong> Ky fjalëkalim do të ruhet si tekst i thjeshtë në bazën e të dhënave dhe do të jetë i dukshëm për këdo që mund të hyjë në bazë ose të shohë këtë faqe konfigurimi.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Porta e serverit SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Ndryshojeni vetëm nëse e dini se serveri SMTP përdor një portë tjetër.',
	'SMTP_SERVER'					=> 'Adresa e serverit SMTP',
	'SMTP_SERVER_EXPLAIN'			=> 'Mos jepni protokoll (<samp>ssl://</samp> ose <samp>tls://</samp>) përveçse kur jua kërkon hosti i emailit.',
	'SMTP_SETTINGS'					=> 'Cilësimet SMTP',
	'SMTP_USERNAME'					=> 'Emri i përdoruesit SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Shkruani emër përdoruesi vetëm nëse e kërkon serveri SMTP.',
	'SMTP_VERIFY_PEER'				=> 'Vërteto certifikatën SSL',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'Kërkon vërtetimin e certifikatës SSL të përdorur nga serveri SMTP. <br><em><strong>Paralajmërim:</strong> Lidhja me palë që kanë certifikata SSL të pavërtetuara mund të sjellë rreziqe sigurie.</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'Vërteto emrin e palës SMTP',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'Kërkon vërtetimin e emrit të palës për serverët SMTP që përdorin lidhje SSL / TLS. <br><em><strong>Paralajmërim:</strong> Lidhja me palë të pavërtetuara mund të sjellë rreziqe sigurie.</em>',
	'TEST_EMAIL_SENT'				=> 'Emaili i provës u dërgua.<br>Nëse nuk e merrni, kontrolloni konfigurimin e emaileve.<br><br>Nëse ju nevojitet ndihmë, vizitoni <a href="https://www.phpbb.com/community/">forumet e mbështetjes së phpBB-së</a>.',

	'USE_SMTP'						=> 'Përdor server SMTP për email',
	'USE_SMTP_EXPLAIN'				=> 'Zgjidhni “Po” nëse dëshironi ose duhet të dërgoni email përmes një serveri të përcaktuar në vend të funksionit lokal të postës.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Këtu mund të aktivizoni dhe kontrolloni përdorimin e Jabber-it për mesazhe të çastit dhe njoftime të forumit. Jabber është protokoll me burim të hapur dhe mund të përdoret nga kushdo. Disa serverë Jabber përfshijnë porta ose transporte që ju lejojnë të kontaktoni përdorues në rrjete të tjera. Jo të gjithë serverët ofrojnë çdo transport dhe ndryshimet e protokolleve mund t’i pengojnë transportet të funksionojnë. Sigurohuni që të shkruani të dhënat e një llogarie të regjistruar; phpBB do t’i përdorë ashtu siç i jepni.',

	'JAB_ALLOW_SELF_SIGNED'			=> 'Lejo certifikata SSL të vetënënshkruara',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> 'Lejon lidhjet me serverin Jabber me certifikatë SSL të vetënënshkruar. <br><em><strong>Paralajmërim:</strong> Lejimi i certifikatave SSL të vetënënshkruara mund të sjellë rreziqe sigurie.</em>',
	'JAB_ENABLE'					=> 'Aktivizo Jabber-in',
	'JAB_ENABLE_EXPLAIN'			=> 'Aktivizon përdorimin e mesazheve dhe njoftimeve Jabber.',
	'JAB_GTALK_NOTE'				=> 'Kini parasysh se GTalk nuk do të funksionojë sepse funksioni <samp>dns_get_record</samp> nuk u gjet. Ky funksion nuk është i disponueshëm në PHP4 dhe nuk është zbatuar në platformat Windows. Aktualisht nuk funksionon në sistemet e bazuara në BSD, përfshirë Mac OS.',
	'JAB_PACKAGE_SIZE'				=> 'Madhësia e paketës Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'		=> 'Numri i mesazheve që dërgohen në një paketë. Nëse vendoset 0, mesazhi dërgohet menjëherë dhe nuk vihet në radhë për t’u dërguar më vonë.',
	'JAB_PASSWORD'					=> 'Fjalëkalimi Jabber',
	'JAB_PASSWORD_EXPLAIN'			=> '<em><strong>Paralajmërim:</strong> Ky fjalëkalim do të ruhet si tekst i thjeshtë në bazën e të dhënave dhe do të jetë i dukshëm për këdo që mund të hyjë në bazë ose të shohë këtë faqe konfigurimi.</em>',
	'JAB_PORT'						=> 'Porta Jabber',
	'JAB_PORT_EXPLAIN'				=> 'Lëreni bosh, përveçse kur e dini se nuk është porta 5222.',
	'JAB_SERVER'					=> 'Serveri Jabber',
	'JAB_SERVER_EXPLAIN'			=> 'Shihni %sjabber.org%s për një listë serverësh.',
	'JAB_SETTINGS_CHANGED'			=> 'Cilësimet e Jabber-it u ndryshuan me sukses.',
	'JAB_USE_SSL'					=> 'Përdor SSL për lidhjen',
	'JAB_USE_SSL_EXPLAIN'			=> 'Nëse aktivizohet, tentohet të krijohet një lidhje e sigurt. Porta Jabber ndryshohet në 5223 nëse është përcaktuar porta 5222.',
	'JAB_USERNAME'					=> 'Emri i përdoruesit Jabber ose JID',
	'JAB_USERNAME_EXPLAIN'			=> 'Përcaktoni një emër përdoruesi të regjistruar ose një JID të vlefshëm. Vlefshmëria e emrit nuk do të kontrollohet. Nëse jepni vetëm një emër përdoruesi, JID-ja do të përbëhet nga ai emër dhe serveri i përcaktuar më sipër. Përndryshe, jepni një JID të vlefshëm, p.sh. user@jabber.org.',
	'JAB_VERIFY_PEER'				=> 'Vërteto certifikatën SSL',
	'JAB_VERIFY_PEER_EXPLAIN'		=> 'Kërkon vërtetimin e certifikatës SSL të përdorur nga serveri Jabber. <br><em><strong>Paralajmërim:</strong> Lidhja me palë që kanë certifikata SSL të pavërtetuara mund të sjellë rreziqe sigurie.</em>',
	'JAB_VERIFY_PEER_NAME'			=> 'Vërteto emrin e palës Jabber',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> 'Kërkon vërtetimin e emrit të palës për serverët Jabber që përdorin lidhje SSL / TLS. <br><em><strong>Paralajmërim:</strong> Lidhja me palë të pavërtetuara mund të sjellë rreziqe sigurie.</em>',
));
