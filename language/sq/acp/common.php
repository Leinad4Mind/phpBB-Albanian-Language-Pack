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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administratorët',
	'ACP_ADMIN_LOGS'			=> 'Regjistri i administratorëve',
	'ACP_ADMIN_ROLES'			=> 'Rolet e administratorit',
	'ACP_ATTACHMENTS'			=> 'Bashkëngjitjet',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Cilësimet e bashkëngjitjes',
	'ACP_AUTH_SETTINGS'			=> 'Autentifikimi',
	'ACP_AUTOMATION'			=> 'Automatizimi',
	'ACP_AVATAR_SETTINGS'		=> 'Cilësimet e avatarit',

	'ACP_BACKUP'				=> 'Kopja rezervë',
	'ACP_BAN'					=> 'Ndalimet',
	'ACP_BAN_EMAILS'			=> 'Ndalo emailet',
	'ACP_BAN_IPS'				=> 'Ndalo IP-të',
	'ACP_BAN_USERNAMES'			=> 'Ndalo përdoruesit',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfigurimi i bordit',
	'ACP_BOARD_FEATURES'		=> 'Karakteristikat e bordit',
	'ACP_BOARD_MANAGEMENT'		=> 'Menaxhimi i bordit',
	'ACP_BOARD_SETTINGS'		=> 'Cilësimet e bordit',
	'ACP_BOTS'					=> 'Merimangat/Robotët',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Personalizo',
	'ACP_CAT_DATABASE'			=> 'Databazë',
	'ACP_CAT_DOT_MODS'			=> 'Shtesat',
	'ACP_CAT_FORUMS'			=> 'Forumet',
	'ACP_CAT_GENERAL'			=> 'Të përgjithshme',
	'ACP_CAT_MAINTENANCE'		=> 'Mirëmbajtja',
	'ACP_CAT_PERMISSIONS'		=> 'Lejet',
	'ACP_CAT_POSTING'			=> 'Postimi',
	'ACP_CAT_STYLES'			=> 'Stile',
	'ACP_CAT_SYSTEM'			=> 'Sistemi',
	'ACP_CAT_USERGROUP'			=> 'Përdoruesit dhe grupet',
	'ACP_CAT_USERS'				=> 'Përdorues',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikimi me klientin',
	'ACP_COOKIE_SETTINGS'		=> 'Cilësimet e kukive',
	'ACP_CONTACT'				=> 'Faqja e kontaktit',
	'ACP_CONTACT_SETTINGS'		=> 'Cilësimet e faqes së kontaktit',
	'ACP_CRITICAL_LOGS'			=> 'Regjistri i gabimeve',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Fushat e personalizuara të profilit',

	'ACP_DATABASE'				=> 'Menaxhimi i bazës së të dhënave',
	'ACP_DISALLOW'				=> 'Hiq lejen',
	'ACP_DISALLOW_USERNAMES'	=> 'Mos lejo emrat e përdoruesve',

	'ACP_EMAIL_SETTINGS'		=> 'Cilësimet e emailit',
	'ACP_EXTENSION_GROUPS'		=> 'Menaxho grupet e zgjerimit të bashkëngjitjes',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Menaxhimi i shtesave',
	'ACP_EXTENSIONS'			=> 'Menaxho shtesat',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Lejet e bazuara në forum',
	'ACP_FORUM_LOGS'				=> 'Regjistrat e forumit',
	'ACP_FORUM_MANAGEMENT'			=> 'Menaxhimi i forumit',
	'ACP_FORUM_MODERATORS'			=> 'Moderatorët e forumit',
	'ACP_FORUM_PERMISSIONS'			=> 'Lejet e forumit',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopjo lejet e forumit',
	'ACP_FORUM_ROLES'				=> 'Rolet e forumit',

	'ACP_GENERAL_CONFIGURATION'		=> 'Konfigurimi i përgjithshëm',
	'ACP_GENERAL_TASKS'				=> 'Detyrat e përgjithshme',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderatorë globalë',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Lejet globale',
	'ACP_GROUPS'					=> 'Grupet',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Lejet e forumit të grupit',
	'ACP_GROUPS_MANAGE'				=> 'Menaxho grupet',
	'ACP_GROUPS_MANAGEMENT'			=> 'Menaxhimi i grupeve',
	'ACP_GROUPS_PERMISSIONS'		=> 'Lejet e grupit',
	'ACP_GROUPS_POSITION'			=> 'Menaxho pozicionet e grupit',

	'ACP_HELP_PHPBB'			=> 'Ndihmoni në mbështetjen e phpBB-së',

	'ACP_ICONS'					=> 'Ikonat e temës',
	'ACP_ICONS_SMILIES'			=> 'Ikonat e temave/emotikonet',
	'ACP_INACTIVE_USERS'		=> 'Përdoruesit joaktivë',
	'ACP_INDEX'					=> 'Faqja kryesore e PKA-së',

	'ACP_JABBER_SETTINGS'		=> 'Cilësimet e Jabber-it',

	'ACP_LANGUAGE'				=> 'Menaxhimi i gjuhës',
	'ACP_LANGUAGE_PACKS'		=> 'Paketa gjuhësore',
	'ACP_LOAD_SETTINGS'			=> 'Cilësimet e ngarkesës',
	'ACP_LOGGING'				=> 'Regjistrimi',

	'ACP_MAIN'					=> 'Faqja kryesore e PKA-së',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Menaxhoni bashkëngjitjet',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Këtu mund të listosh dhe të fshish skedarët e bashkangjitur në postime dhe mesazhe private.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Menaxho zgjerimet e bashkëngjitjes',
	'ACP_MANAGE_FORUMS'			=> 'Menaxho forumet',
	'ACP_MANAGE_RANKS'			=> 'Menaxho gradat',
	'ACP_MANAGE_REASONS'		=> 'Menaxhoni arsyet e raportimit/refuzimit',
	'ACP_MANAGE_USERS'			=> 'Menaxhoni përdoruesit',
	'ACP_MASS_EMAIL'			=> 'Email masiv',
	'ACP_MESSAGES'				=> 'Mesazhe',
	'ACP_MESSAGE_SETTINGS'		=> 'Cilësimet e mesazheve private',
	'ACP_MODULE_MANAGEMENT'		=> 'Menaxhimi i modulit',
	'ACP_MOD_LOGS'				=> 'Regjistri i moderatorëve',
	'ACP_MOD_ROLES'				=> 'Rolet e moderatorit',

	'ACP_NO_ITEMS'				=> 'Nuk ka ende asnjë artikull.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Bashkëngjitjet jetime',

	'ACP_PERMISSIONS'			=> 'Lejet',
	'ACP_PERMISSION_MASKS'		=> 'Maskat e lejes',
	'ACP_PERMISSION_ROLES'		=> 'Rolet e lejes',
	'ACP_PERMISSION_TRACE'		=> 'Gjurmë e lejes',
	'ACP_PHP_INFO'				=> 'PHP informacion',
	'ACP_POST_SETTINGS'			=> 'Rregullimet e postimit',
	'ACP_PRUNE_FORUMS'			=> 'Forume krasitjeje',
	'ACP_PRUNE_USERS'			=> 'Përdoruesit e krasitjes',
	'ACP_PRUNING'				=> 'Krasitje',

	'ACP_QUICK_ACCESS'			=> 'Qasje e shpejtë',

	'ACP_RANKS'					=> 'Grada',
	'ACP_REASONS'				=> 'Arsyet e raportimit/refuzimit',
	'ACP_REGISTER_SETTINGS'		=> 'Cilësimet e regjistrimit',

	'ACP_RESTORE'				=> 'Rivendos',

	'ACP_FEED'					=> 'Menaxhimi i burimeve',
	'ACP_FEED_SETTINGS'			=> 'Cilësimet e burimit',

	'ACP_SEARCH'				=> 'Konfigurimi i kërkimit',
	'ACP_SEARCH_INDEX'			=> 'Indeksi i kërkimit',
	'ACP_SEARCH_SETTINGS'		=> 'Cilësimet e kërkimit',

	'ACP_SECURITY_SETTINGS'		=> 'Cilësimet e sigurisë',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfigurimi i serverit',
	'ACP_SERVER_SETTINGS'		=> 'Rregullimet e serverit',
	'ACP_SIGNATURE_SETTINGS'	=> 'Cilësimet e nënshkrimit',
	'ACP_SMILIES'				=> 'Emotikonet',
	'ACP_STYLE_MANAGEMENT'		=> 'Menaxhimi i stilit',
	'ACP_STYLES'				=> 'Stile',
	'ACP_STYLES_CACHE'			=> 'Pastroni memorien e përkohshme',
	'ACP_STYLES_INSTALL'		=> 'Instalo stilet',

	'ACP_SUBMIT_CHANGES'		=> 'Dërgo ndryshimet',

	'ACP_TEMPLATES'				=> 'Shabllone',
	'ACP_THEMES'				=> 'Temat',

	'ACP_UPDATE'					=> 'Aktualizon',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Lejet e forumit të përdoruesve',
	'ACP_USERS_LOGS'				=> 'Regjistrat e përdoruesve',
	'ACP_USERS_PERMISSIONS'			=> 'Lejet e perdoruesit',
	'ACP_USER_ATTACH'				=> 'Skedar',
	'ACP_USER_AVATAR'				=> 'Avatari',
	'ACP_USER_FEEDBACK'				=> 'Përshtypjet',
	'ACP_USER_GROUPS'				=> 'Grupet',
	'ACP_USER_MANAGEMENT'			=> 'Menaxhimi i përdoruesve',
	'ACP_USER_OVERVIEW'				=> 'Pwrmbledhje',
	'ACP_USER_PERM'					=> 'Lejet',
	'ACP_USER_PREFS'				=> 'Preferenca',
	'ACP_USER_PROFILE'				=> 'Profili',
	'ACP_USER_RANK'					=> 'Renditja',
	'ACP_USER_ROLES'				=> 'Rolet e Përdoruesit',
	'ACP_USER_SECURITY'				=> 'Siguria e përdoruesit',
	'ACP_USER_SIG'					=> 'Nënshkrimi',
	'ACP_USER_WARNINGS'				=> 'Paralajmërime',

	'ACP_VC_SETTINGS'					=> 'Kundërmasat spambot',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA pamje paraprake e imazhit',
	'ACP_VERSION_CHECK'					=> 'Kontrollo për aktualizime',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Shfaq lejet administrative',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Shfaq lejet e moderimit të forumit',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Shfaq lejet e bazuara në forum',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Shfaq lejet globale të moderimit',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Shfaq lejet e bazuara në përdorues',

	'ACP_WORDS'					=> 'Censurimi i fjalëve',

	'ACTION'				=> 'Veprimi',
	'ACTIONS'				=> 'Veprime',
	'ACTIVATE'				=> 'Aktivizo',
	'ADD'					=> 'Shto',
	'ADMIN'					=> 'Administrata.',
	'ADMIN_INDEX'			=> 'Indeksi i administratorit',
	'ADMIN_PANEL'			=> 'Paneli i kontrollit të administratës',

	'ADM_LOGOUT'			=> 'ACP&nbsp; Logout',
	'ADM_LOGGED_OUT'		=> 'Doli me sukses nga Paneli i Kontrollit të Administratës',

	'BACK'					=> 'Prapa',

	'CONTAINER_EXCEPTION' => 'phpBB hasi një gabim në ndërtimin e enës për shkak të një zgjatjeje të instaluar. Për këtë arsye, të gjitha shtesat janë çaktivizuar përkohësisht. Provo të pastrosh cache-në e forumit. Të gjitha zgjerimet do të riaktivizohen automatikisht sapo të zgjidhet gabimi i kontejnerit. Nëse ky gabim vazhdon, ju lutemi vizitoni <a href="https://www.phpbb.com/support">phpBB.com</a> për mbështetje.',
	'EXCEPTION' => 'njw përjashtim',

	'COLOUR_SWATCH'			=> 'Swatch me ngjyra të sigurta në internet',
	'CONFIG_UPDATED'		=> 'Konfigurimi u përditësua me sukses.',
	'CRON_LOCK_ERROR'		=> 'Nuk mund të merrte bllokimin cron.',
	'CRON_NO_SUCH_TASK'		=> 'Nuk mund të gjendej detyra cron “%s”.',
	'CRON_NO_TASK'			=> 'Nr. cron detyra duhet të kryhen tani.',
	'CRON_NO_TASKS'			=> 'Nuk mund të gjendeshin detyra cron.',
	'CSV_INVALID'			=> 'Cilësimi i dhënë i ndarë me presje “%1$s” është i pavlefshëm. Vlerat duhet të përcaktohen vetëm me presje, nuk duhet të përmbajnë asnjë kufizues udhëheqës ose zvarritës.',
	'CURRENT_VERSION'		=> 'Verzion i Tanishëm:',

	'DEACTIVATE'				=> 'Çaktivizo',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Rruga e futur "%s" nuk ekziston.',
	'DIRECTORY_NOT_DIR'			=> 'Rruga e futur "%s" nuk është një drejtori.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Rruga e futur "%s" nuk është e shkrueshme.',
	'DISABLE'					=> 'Çaktivizo',
	'DOWNLOAD'					=> 'Shkarko',
	'DOWNLOAD_AS'				=> 'SHKARKO SI PDF',
	'DOWNLOAD_STORE'			=> 'Shkarko ose ruaj skedarin',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Ju mund ta shkarkoni direkt skedarin ose ta ruani atë në dosjen tuaj <samp>store/</samp>.',
	'DOWNLOADS'					=> 'Shkarkime',

	'EDIT'					=> 'Modifiko',
	'ENABLE'				=> 'Aktivizo ',
	'EXPORT_DOWNLOAD'		=> 'Shkarko',
	'EXPORT_STORE'			=> 'Ruaj',

	'GENERAL_OPTIONS'		=> 'Opsionet e përgjithshme',
	'GENERAL_SETTINGS'		=> 'Cilësimet e përgjithshme',
	'GLOBAL_MASK'			=> 'Maska globale e lejes',

	'INSTALL'				=> 'Instalo',
	'IP'					=> 'Përdoruesi IP',
	'IP_HOSTNAME'			=> 'IP adresa ose emra hosti',

	'LATEST_VERSION'		=> 'Versioni me i fundit',
	'LOAD_NOTIFICATIONS'			=> 'Shfaq Njoftimet',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Shfaq listën e njoftimeve në çdo faqe (zakonisht në kokë).',
	'LOGGED_IN_AS'			=> 'Je regjistruar si:',
	'LOGIN_ADMIN'			=> 'Për të administruar bordin, duhet të jesh përdorues i vërtetuar.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Për të administruar tabelën, duhet të ri-autentifikohesh.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Je vërtetuar me sukses dhe tani do të ridrejtohesh te Paneli i Kontrollit të Administratës.',
	'LOOK_UP_FORUM'			=> 'Zgjidh një forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Mund të zgjedhësh më shumë se një forum.',

	'MANAGE'				=> 'Menaxho',
	'MENU_TOGGLE'			=> 'Fshih ose shfaq menunë anësore',
	'MORE'					=> 'Më tepër',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Më shumë informata',
	'MOVE_DOWN'				=> 'Lëviz poshtë',
	'MOVE_UP'				=> 'Lëviz sipër',

	'NOTIFY'				=> 'Njoftimi',
	'NO_ADMIN'				=> 'Ju nuk jeni i autorizuar të administroni këtë bord.',
	'NO_EMAILS_DEFINED'		=> 'Nuk u gjet asnjë adresë e vlefshme emaili.',
	'NO_FILES_TO_DELETE'	=> 'Bashkëngjitjet që ke zgjedhur për fshirje nuk ekzistojnë.',
	'NO_PASSWORD_SUPPLIED'	=> 'Ju duhet të shkruani fjalëkalimin tuaj për të hyrë në Panelin e Kontrollit të Administrimit.',

	'OFF'					=> 'Çaktivizuar',
	'ON'					=> 'Aktiv',

	'PARSE_BBCODE'						=> 'Analiza BBCode',
	'PARSE_SMILIES'						=> 'Analizo buzëqeshjet',
	'PARSE_URLS'						=> 'Analizo linqet',
	'PERMISSIONS_TRANSFERRED'			=> 'Lejet e transferuara',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Aktualisht ke lejet nga %1$s. Ju mund të shfletoni bordin me lejet e këtij përdoruesi, por nuk mund të hyni në panelin e kontrollit të administratës pasi lejet e administratorit nuk u transferuan. Ju mundeni <a href="%2$s"><strong> të ktheheni në lejen tuaj të vendosur</strong></a> në çdo kohë.',
	'PROCEED_TO_ACP'					=> '%sVazhdoni te PKA-ja%s',

	'RELEASE_ANNOUNCEMENT'		=> 'Njoftim',
	'REMIND'							=> 'Rikujtesë',
	'REPARSE_LOCK_ERROR'				=> 'Riparimi është tashmë në proces nga një proces tjetër.',
	'RESYNC'							=> 'Risinkronizo',

	'RUNNING_TASK'			=> 'Detyra e ekzekutimit: %s.',
	'SELECT_ANONYMOUS'		=> 'Zgjidh një përdorues anonim',
	'SELECT_OPTION'			=> 'Zgjedh një mundësi',

	'SETTING_TOO_LOW'		=> 'Vlera e parashikuar për cilësimin “%1$s” është shumë e ulët. Vlera minimale e pranueshme është %2$d.',
	'SETTING_TOO_BIG'		=> 'Vlera e parashikuar për cilësimin “%1$s” është shumë e lartë. Vlera maksimale e pranueshme është %2$d.',
	'SETTING_TOO_LONG'		=> 'Vlera e dhënë për cilësimin “%1$s” është shumë e gjatë. Gjatësia maksimale e pranueshme është %2$d.',
	'SETTING_TOO_SHORT'		=> 'Vlera e parashikuar për cilësimin “%1$s” është shumë e shkurtër. Gjatësia minimale e pranueshme është %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Shfaq të gjitha operacionet',

	'TASKS_NOT_READY'			=> 'Detyrat jo të gatshme:',
	'TASKS_READY'			=> 'Detyrat e gatshme:',
	'TOTAL_SIZE'			=> 'Madhësia totale:',

	'UCP'					=> 'PANELI I KONTROLLIT',
	'URL_INVALID'			=> 'E dhënë URL për cilësimin “%1$s” është e pavlefshme.',
	'URL_SCHEME_INVALID'	=> 'Skema e parashikuar “%2$s” në cilësimin e ndarë me presje “%1$s” është e pavlefshme. Skema duhet të fillojë me një karakter latin të ndjekur nga karaktere alfanumerike, viza ose pika.',
	'USERNAMES_EXPLAIN'		=> 'Vendosni çdo emër përdoruesi në një linjë të veçantë.',
	'USER_CONTROL_PANEL'	=> 'PANELI I KONTROLLIT',

	'UPDATE_NEEDED'			=> 'Bordi nuk është i përditësuar.',
	'UPDATE_NOT_NEEDED'		=> 'Bordi është i përditësuar.',
	'UPDATES_AVAILABLE'		=> 'Përditësimet e disponueshme:',

	'WARNING'				=> 'Paralajmërim',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Kjo faqe liston informacione mbi versionin e PHP të instaluar në këtë server. Ai përfshin detaje të moduleve të ngarkuara, ndryshoreve të disponueshme dhe cilësimeve të paracaktuara. Ky informacion mund të jetë i dobishëm kur diagnostikohen problemet. Ki parasysh se disa kompani pritëse do të kufizojnë informacionin që shfaqet këtu për arsye sigurie. Ju këshillojmë të mos jepni asnjë detaj në këtë faqe, përveç kur kërkohet nga <a href="https://www.phpbb.com/about/team/"> anëtarë zyrtarë të ekipit</a> në forumet e mbështetjes.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informacioni në lidhje me konfigurimin tuaj PHP nuk mund të përcaktohet. Phpinfo() është çaktivizuar për arsye sigurie.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Këtu renditen të gjitha veprimet e kryera nga administratorët e bordit. Mund të renditësh sipas emrit të përdoruesit, datës, IP ose veprimit. Nëse ke lejet e duhura, mund të pastrosh edhe operacionet individuale ose regjistrin në tërësi.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Në të renditen veprimet e kryera nga vetë bordi. Ky regjistër ju ofron informacione që mund t \'i përdorni për zgjidhjen e problemeve specifike, për shembull mosdhënien e emaileve. Mund të renditësh sipas emrit të përdoruesit, datës, IP ose veprimit. Nëse ke lejet e duhura, mund të pastrosh edhe operacionet individuale ose regjistrin në tërësi.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Kjo liston të gjitha veprimet e bëra në forume, tema dhe postime, si dhe veprimet e kryera ndaj përdoruesve nga moderatorët, përfshirë ndalimin. Mund të renditësh sipas emrit të përdoruesit, datës, IP ose veprimit. Nëse ke lejet e duhura, mund të pastrosh edhe operacionet individuale ose regjistrin në tërësi.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Kjo liston të gjitha veprimet e kryera nga përdoruesit ose mbi përdoruesit (raportet, paralajmërimet dhe shënimet e përdoruesit).',
	'ALL_ENTRIES'				=> 'Të gjitha Hyrjet',

	'DISPLAY_LOG'	=> 'Shfaq shënimet nga e mëparshmja',

	'NO_ENTRIES'	=> 'Nuk ka regjistrime për këtë periudhë.',

	'SORT_IP'		=> 'IP adresa',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Veprimi i regjistrit',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Faleminderit që zgjodhët phpBB si zgjidhjen tuaj të bordit. Ky ekran do t \'ju japë një përmbledhje të shpejtë të të gjitha statistikave të ndryshme të bordit tuaj. Lidhjet në anën e majtë të këtij ekrani ju lejojnë të kontrolloni çdo aspekt të përvojës suaj të bordit. Çdo faqe do të ketë udhëzime se si të përdoren mjetet.',
	'ADMIN_LOG'					=> 'Veprimet e administratorit të regjistruar',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Kjo jep një pasqyrë të pesë veprimeve të fundit të kryera nga administratorët e bordit. Një kopje e plotë e regjistrit mund të shihet nga artikulli i duhur i menusë ose duke ndjekur linkun e mëposhtëm.',
	'AVATAR_DIR_SIZE'			=> 'Madhësia e drejtorisë së avatarit',

	'BOARD_STARTED'		=> 'Bordi filloi',
	'BOARD_VERSION'		=> 'Versioni i bordit',

	'DATABASE_SERVER_INFO'	=> 'Serveri i bazës së të dhënave',
	'DATABASE_SIZE'			=> 'Madhësia e të dhënave të databazës',

	// Environment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Mbingarkesa e funksionit është konfiguruar në mënyrë jo të duhur',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> duhet të vendoset në 0 ose 4. Ju mund të kontrolloni vlerën aktuale në faqen <samp>PHP information</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Kodifikimi transparent i karaktereve është konfiguruar në mënyrë jo të duhur',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> duhet të vendoset në 0. Ju mund të kontrolloni vlerën aktuale në faqen <samp>PHP information</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP konvertimi i karakterit hyrës është konfiguruar në mënyrë jo të duhur',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> duhet të lihet bosh. Ju mund të kontrolloni vlerën aktuale në faqen <samp>PHP information</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP konvertimi i karakterit të daljes është konfiguruar në mënyrë jo të duhur',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> duhet të lihet bosh. Ju mund të kontrolloni vlerën aktuale në faqen <samp>PHP information</samp>.',
	'ERROR_DEFAULT_CHARSET'							=> 'Seti i paracaktuar i karaktereve është konfiguruar në mënyrë jo të duhur',
	'ERROR_DEFAULT_CHARSET_EXPLAIN'					=> '<var>default_charset</var> duhet të vendoset në <samp>UTF-8</samp>. Ju mund të kontrolloni vlerën aktuale në faqen <samp>PHP information</samp>.',

	'FILES_PER_DAY'		=> 'Bashkëngjitjet në ditë',
	'FORUM_STATS'		=> 'Statistikat e bordit',

	'GZIP_COMPRESSION'	=> 'Perdor kompresimin gzip',

	'NO_SEARCH_INDEX'	=> 'Sfondi i përzgjedhur i kërkimit nuk ka një indeks kërkimi.<br />Ju lutemi krijoni indeksin për "%1$s" në seksionin %2$s indeksi i kërkimit%3$s.',
	'NOT_AVAILABLE'		=> 'I padisponueshëm',
	'NUMBER_FILES'		=> 'Numri i bashkëngjitjeve',
	'NUMBER_POSTS'		=> 'Numri i postimeve',
	'NUMBER_TOPICS'		=> 'Numri i temave',
	'NUMBER_USERS'		=> 'Numri i përdoruesve',
	'NUMBER_ORPHAN'		=> 'Shtojcat jetime',

	'PHP_VERSION'		=> 'Versioni i PHP-së',
	'PHP_VERSION_OLD'	=> 'Versioni i PHP në këtë server (%1$s) nuk do të mbështetet më nga versionet e ardhshme të phpBB. Versioni minimal i kërkuar do të jetë PHP %2$s. %3$sDetaje%4$s',

	'POSTS_PER_DAY'		=> '≈45 postime në ditë',

	'PURGE_CACHE'			=> 'Pastro cache',
	'PURGE_CACHE_CONFIRM'	=> 'Je i sigurt që dëshiron ta pastrosh cache?',
	'PURGE_CACHE_EXPLAIN'	=> 'Pastro të gjithë artikujt e lidhur me cache, duke përfshirë çdo skedar shablloni ose pyetje të ruajtura.',
	'PURGE_CACHE_SUCCESS'	=> 'Cache u pastrua me sukses.',

	'PURGE_SESSIONS'			=> 'Spastro të gjitha seancat',
	'PURGE_SESSIONS_CONFIRM'	=> 'Je i sigurt që dëshiron t \'i spastrosh të gjitha seancat? Kjo do të çaktivizojë të gjithë përdoruesit.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Pastroni të gjitha seancat. Kjo do të dalë nga të gjithë përdoruesit duke shkurtuar tabelën e seancave.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Seancat u pastruan me sukses.',

	'RESET_DATE'					=> 'Rivendos datën e fillimit të bordit',
	'RESET_DATE_CONFIRM'			=> 'Konfirmon që dëshiron të rivendosësh datën e fillimit të bordit?',
	'RESET_DATE_SUCCESS'				=> 'Rivendosja e datës së fillimit të bordit',
	'RESET_ONLINE'					=> 'Rivendos shumicën e përdoruesve ndonjëherë online',
	'RESET_ONLINE_CONFIRM'			=> 'Je i sigurt që dëshiron të rivendosësh numëruesin më të madh të përdoruesve ndonjëherë në internet?',
	'RESET_ONLINE_SUCCESS'				=> 'Shumica e përdoruesve rivendosen ndonjëherë në internet',
	'RESYNC_POSTCOUNTS'				=> 'Risinkronizo numërimin e postimeve',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Vetëm postimet ekzistuese do të merren parasysh. Postimet e krasitura nuk do të numërohen.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Je i sigurt që dëshiron të ri-sinkronizosh numrin e postimeve?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Numërimi i ri-sinkronizuar i postimeve',
	'RESYNC_POST_MARKING'			=> 'Sinkronizo temat me pika',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Je i sigurt që dëshiron të ri-sinkronizosh temat e pikëzuara?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Së pari, shënoni të gjitha temat dhe më pas shënoni saktë temat që kanë parë ndonjë aktivitet gjatë gjashtë muajve të fundit.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Tema të risinkronizuara me pika',
	'RESYNC_STATS'					=> 'Sinkronizo statistikat',
	'RESYNC_STATS_CONFIRM'			=> 'Je i sigurt që dëshiron të ri-sinkronizosh statistikat?',
	'RESYNC_STATS_EXPLAIN'			=> 'Rillogarit numrin e përgjithshëm të postimeve, temave, përdoruesve dhe skedarëve.',
	'RESYNC_STATS_SUCCESS'			=> 'Statistika të risinkronizuara',
	'RUN'							=> 'Vrapo tani!',

	'STATISTIC'					=> 'Statistikë',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Sinkronizo ose rivendos statistikat',

	'TIMEZONE_INVALID'	=> 'Zona kohore që ke zgjedhur është e pavlefshme.',
	'TIMEZONE_SELECTED'	=> '(aktualisht e zgjedhur)',
	'TOPICS_PER_DAY'	=> 'Temat në ditë',

	'UPLOAD_DIR_SIZE'	=> 'Madhësia e bashkëngjitjeve të postuara',
	'USERS_PER_DAY'		=> 'Përdorues në ditë',

	'VALUE'							=> 'Vlerë',
	'VERSIONCHECK_FAIL'				=> 'Dështoi në marrjen e informacionit të versionit të fundit.',
	'VERSIONCHECK_FORCE_UPDATE'		=> 'Kontrollo përsëri versionin',
	'VERSION_CHECK'					=> 'Kontrolli i versionit',
	'VERSION_CHECK_EXPLAIN'			=> 'Kontrollet për të parë nëse instalimi yt phpBB është i përditësuar.',
	'VERSIONCHECK_INVALID_ENTRY'	=> 'Informacioni i versionit të fundit përmban një hyrje të pambështetur.',
	'VERSIONCHECK_INVALID_URL'		=> 'Informacioni i versionit të fundit përmban URL të pavlefshëm.',
	'VERSIONCHECK_INVALID_VERSION'	=> 'Informacioni i versionit të fundit përmban një version të pavlefshëm.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Instalimi juaj phpBB nuk është i përditësuar.<br />Më poshtë është një lidhje me njoftimin e lëshimit, i cili përmban më shumë informacion, si dhe udhëzime për përditësimin.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Instalimi yt phpBB nuk është i përditësuar.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Instalimi yt phpBB është i përditësuar. Nuk ka përditësime të disponueshme për momentin.',
	'VIEW_ADMIN_LOG'				=> 'Shfaq regjistrin e administratorit',
	'VIEW_INACTIVE_USERS'			=> 'Përdoruesit  jo aktive',

	'WELCOME_PHPBB'			=> 'Mirë se erdhe në phpBB',
	'WRITABLE_CONFIG'		=> 'Skedari yt i konfigurimit (config.php) aktualisht mund të shkruhet në të gjithë botën. Ju inkurajojmë fuqimisht të ndryshoni lejet në 640 ose të paktën në 644 (për shembull: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Data joaktive',
	'INACTIVE_REASON'				=> 'Arsyeja',
	'INACTIVE_REASON_MANUAL'		=> 'Llogaria u çaktivizua nga administratori',
	'INACTIVE_REASON_PROFILE'		=> 'Detajet e profilit u ndryshuan',
	'INACTIVE_REASON_REGISTER'		=> 'Llogari e regjistruar rishtas',
	'INACTIVE_REASON_REMIND'		=> 'Riaktivizimi i detyruar i llogarisë së përdoruesit',
	'INACTIVE_REASON_UNKNOWN'		=> 'I/e panjohur',
	'INACTIVE_USERS'				=> 'Përdoruesit  jo aktive',
	'INACTIVE_USERS_EXPLAIN'		=> 'Kjo është një listë e përdoruesve që janë regjistruar, por llogaritë e të cilëve janë joaktive. Nëse dëshiron, mund t \'i aktivizosh, fshish ose t\' i kujtosh (duke dërguar një email) këta përdorues.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Kjo është një listë e 10 përdoruesve të fundit të regjistruar që kanë llogari joaktive. Llogaritë janë joaktive ose sepse aktivizimi i llogarisë është aktivizuar në cilësimet e regjistrimit të përdoruesit dhe llogaritë e këtyre përdoruesve nuk janë aktivizuar ende, ose sepse këto llogari janë çaktivizuar. Një listë e plotë është e disponueshme duke ndjekur linkun e mëposhtëm nga ku mund t \'i aktivizosh, fshish ose t\' i kujtosh (duke dërguar një email) këta përdorues nëse dëshiron.',

	'NO_INACTIVE_USERS'	=> 'Përdoruesit  jo aktive',

	'SORT_INACTIVE'		=> 'Data joaktive',
	'SORT_LAST_VISIT'	=> 'Vizita e fundit',
	'SORT_REASON'		=> 'Arsyeja',
	'SORT_REG_DATE'		=> 'Data Regjistrimit',
	'SORT_LAST_REMINDER'=> 'Kujtesa e fundit',
	'SORT_REMINDER'		=> 'Rikujtesa u dërgua',

	'USER_IS_INACTIVE'		=> 'Përdoruesi është joaktiv',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Ju lutemi dërgoni informacion në lidhje me konfigurimet e serverit dhe bordit tuaj në phpBB për analiza statistikore. Të gjitha informacionet që mund t \'ju identifikojnë ju ose faqen tuaj të internetit janë hequr - të dhënat janë plotësisht <strong>anonymous</strong>. Vendimet për versionet e ardhshme phpBB i bazojmë në këtë informacion. Statistikat vihen në dispozicion të publikut. Këto të dhëna i ndajmë edhe me projektin PHP, me të cilin është bërë gjuha e programimit phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Duke përdorur butonin e mëposhtëm mund të shikoni paraprakisht të gjitha variablat që do të transmetohen.',
	'DONT_SEND_STATISTICS'		=> 'Kthehu te ACP nëse nuk dëshiron të dërgosh informacion statistikor në phpBB.',
	'GO_ACP_MAIN'				=> 'Shko te faqja fillestare ACP',
	'HIDE_STATISTICS'			=> 'Fshih Detajet',
	'SEND_STATISTICS'			=> 'Dërgo statistika',
	'SEND_STATISTICS_LONG'		=> 'Dërgo informacion statistikor',
	'SHOW_STATISTICS'			=> 'Shfaq detajet',
	'THANKS_SEND_STATISTICS'	=> 'Faleminderit për ftesën. ',
	'FAIL_SEND_STATISTICS'		=> 'phpBB nuk ishte në gjendje të dërgonte statistika',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong> Lejet e përdoruesve të shtuar ose të redaktuar</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong> Lejet e përdoruesve të grupeve të shtuara ose tëredaktuara</strong><br /> » %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong> Lejet globale të moderatorëve të përdoruesve të shtuar ose tëredaktuar</strong><br /> » %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong> Lejet globale të moderatorëve të grupeve të shtuara ose tëredaktuara</strong><br /> » %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong> Lejet e administratorit të përdoruesve të shtuar ose tëredaktuar</strong><br /> » %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong> Lejet e administratorit të grupeve të shtuara ose tëredaktuara</strong><br /> » %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Administratorët e shtuar ose të redaktuar</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Moderatorët globalë të shtuar ose të redaktuar</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong> Qasja në forumin e përdoruesve të shtuar ose të redaktuar</strong> në%1$s<br /> » %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong> Qasja e moderatorit të forumit të përdoruesve të shtuar ose të redaktuar</strong> në%1$s<br /> » %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong> Qasja në forumin e grupeve të shtuara ose të redaktuara</strong> në%1$s<br /> » %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong> Qasja e moderatorit të forumit të grupeve të shtuara ose të redaktuara</strong> në%1$s<br /> » %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong> Moderatorë të shtuar ose të redaktuar</strong> për%1$s<br /> » %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong> Lejet e forumit të shtuara ose të redaktuara</strong> për%1$s<br /> » %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Administratorët e larguar</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>U hoqën moderatorët globalë</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderatorët e zhvendosur</strong> nga %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>U hoqën lejet e forumit për përdoruesin/grupin</strong> nga %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permisimet e transferuara nga</strong><br /> » %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong> Lejet e veta u rikthyen pas përdorimit të lejeve nga</strong><br /> » %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Përpjekje e dështuar për hyrje në administratë</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Një hyrje e suksesshme në administratë</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Të bashkangjiturat e përdoruesit tëlarguar</strong><br /> » %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong> Shtesa e bashkangjitur e shtuar ose eredaktuar</strong><br /> » %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Zgjerimi i hequr ibashkëngjitjes</strong><br /> » %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Zgjerimi i përditësuar ibashkëngjitjes</strong><br /> » %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong> Grupi i zgjeruar ishtuar</strong><br /> » %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>U redaktua grupi i prapashtesave</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Grupi i zgjeruar izhvendosur</strong><br /> » %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Dosja e Jetimit e ngarkuar nëPost</strong><br /> » ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Dosjet jetime të fshira</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Përjashtohet përdoruesi nga ban</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Përjashtuar IP nga ban</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Përjashtohet emaili nga ban</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Përdoruesi i ndaluar</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP-ja u ndalua</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Emaili u ndalua</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Përdorues i ndaluar</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Panned IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-mail i ndaluar</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong> Shtuar BBCode </strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>U redaktua BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Fshirë BBCode</strong><br />» %s',
	'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>Gabim gjatë konfigurimit të BBCode</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'		=> '<strong>U shtua robot i ri</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Fshirë bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Bot ekzistues i përditësuar</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Log i pastruar i administratorit</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Log i fshirë i gabimit</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Moderatori i pastruar log</strong>',
	'LOG_CLEAR_USER'		=> '<strong>U pastrua regjistri i përdoruesit</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Shkrimet e përdoruesve të pastruara</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong> Cilësimet e ndryshuara të bashkëngjitjes</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong> Cilësimet e ndryshuara të vërtetimit</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong> Cilësimet e ndryshuara të avatarit</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong> Cilësimet e ndryshuara të cookie-t</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong> Cilësimet e ndryshuara të emailit</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong> Karakteristikat e bordit të ndryshuar</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong> Cilësimet e ndryshuara të ngarkesës</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong> Cilësimet e ndryshuara të mesazhit privat</strong>',
	'LOG_CONFIG_POST'			=> '<strong> Cilësimet e postimit të ndryshuar</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Ndryshuar cilësimet e regjistrimit të përdoruesit</strong>',
	'LOG_CONFIG_FEED'			=> '<strong> Cilësimet e ushqimit të ndryshuar të sindikatës</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong> Cilësimet e ndryshuara të kërkimit</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong> Cilësimet e ndryshuara të sigurisë</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong> Cilësimet e ndryshuara të serverit</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong> Cilësimet e ndryshuara të bordit</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong> Cilësimet e ndryshuara të nënshkrimit</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong> Cilësimet e ndryshuara kundër spambotit</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Tema e miratuar</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Tema e përplasur epërdoruesit</strong><br /> » %s',
	'LOG_DELETE_POST'			=> '<strong>Postimi i fshirë “%1$s” i shkruar nga “%2$s” për arsyen e mëposhtme</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Tema e hijes sëfshirë</strong><br /> » %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Tema e fshirë “%1$s” e shkruar nga “%2$s” për arsyen e mëposhtme</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Tema e kopjuar</strong><br />» nga %s',
	'LOG_LOCK'					=> '<strong>Tema e mbyllur</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Posta e mbyllur</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Postime të ndryshme</strong> në temë<br />» %s',
	'LOG_MOVE'					=> '<strong> Tema ezhvendosur</strong><br /> » nga %1$s në %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong> Tema elëvizur</strong><br /> » %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong> Raporti PM imbyllur</strong><br /> » %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>U fshi raportimi i mesazhit privat</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>U miratua postimi</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Postimi i miratuar "%1$s" i shkruar me "%3$s" për arsyen e mëposhtme</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>U redaktua postimi “%1$s” i shkruar nga “%2$s” për arsyen e mëposhtme</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>U rikthye postimi</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong> Raporti imbyllur</strong><br /> » %s',
	'LOG_REPORT_DELETED'		=> '<strong>Raporti i fshirë</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Tema e rivendosur “%1$s” e shkruar nga </strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Postimi i fshirë “%1$s” i shkruar nga “%2$s” për arsyen e mëposhtme</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Tema e fshirë “%1$s” e shkruar nga “%2$s” për arsyen e mëposhtme</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Postimet e ndara u zhvendosën</strong><br />» te %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Split posts</strong><br />» nga %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Tema e miratuar</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Tema e restauruar</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Tema e miratuar “%1$s” e shkruar nga “%3$s” për arsyen e mëposhtme</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong> Numëruesit e temave tësinkronizuara</strong><br /> » %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Tipi i temës sëndryshuar</strong><br /> » %s',
	'LOG_UNLOCK'				=> '<strong>Tema e pakyçur</strong><br /> » %s',
	'LOG_UNLOCK_POST'			=> '<strong>Postë e mbyllur</strong><br />» %s',
	'LOG_VERSION_CHECK_FAIL'	=> '<strong>Kontrolli i versionit dështoi</strong>',

	'LOG_DISALLOW_ADD'		=> '<strong>Emri i përdoruesit i pa lejuar i shtuar</strong><br /> » %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>E fshirë emri i përdoruesit i palejuar</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Rezervimi i bazës së të dhënave</strong>',
	'LOG_DB_DELETE'			=> '<strong>U fshi kopja rezervë e bazës së të dhënave</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Restaurimi i kopjes rezervë të bazës së të dhënave</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Përjashtuar IP/hostname nga lista e shkarkimeve</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Shtuar IP/hostname në listën e shkarkimeve</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>I zhvendosur IP/hostname nga lista e shkarkimeve</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong> Gabim gabimi</strong><br /> » %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Gabim i emailit</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>Gabim i CAPTCHA-s</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Krijuar forum i ri</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong> Lejet e kopjuara të forumit</strong> nga%1$s<br /> » %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Forumi i fshirë</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Forumi i fshirë dhe nënforumet e tij</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Forumi i fshirë dhe nënforumet e zhvendosura</strong> në %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Fshi forumin dhe zhvendos postimet </strong> në %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Forumi i fshirë dhe nënforumet e tij, zhvendosën postimet</strong> në %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Forumi i fshirë, postimet e zhvendosura</strong> në %1$s <strong> dhe nënforumet</strong> në %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Forumi i fshirë dhe postimet e tij</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Forumi i fshirë, postimet dhe nënforumet e tij</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Forumi i fshirë dhe postimet e tij, nënforumet e zhvendosura</strong> në %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>U redaktuan hollësitë e forumit</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Forumi u zhvendos</strong> %1$s <strong>poshtë</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Forumi u zhvendos</strong> %1$s <strong>sipër</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Forum i ri-sinkronizuar</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Një gabim i përgjithshëm ka ndodhur</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Grupi i ri i përdoruesve i krijuar</strong><br /> » %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grupi “%1$s” u bë i parazgjedhur për anëtarët</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Grupi i fshirë</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leaders të ulur në grupin e përdoruesve</strong>%1$s<br /> » %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Anëtarët promovohen në lider në grupin e përdoruesve</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Anëtarët e hequr nga grupi i përdoruesve</strong>%1$s<br /> » %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Detaje të grupit tëpërditësuar</strong><br /> » %s',
	'LOG_MODS_ADDED'		=> '<strong> Shtoi drejtues të rinj në grupin e përdoruesve</strong>%1$s<br /> » %2$s',
	'LOG_USERS_ADDED'		=> '<strong> Shtoi anëtarë të rinj në grupin e përdoruesve</strong>%1$s<br /> » %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Përdoruesit e miratuar në grupin e përdoruesve</strong>%1$s<br /> » %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Përdoruesit kërkuan të bashkohen me grupin “%1$s” dhe duhet të miratohen</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Gabim gjatë krijimit tëimazhit</strong><br /> » Gabim në %1$s në linjën %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Përdoruesit joaktivë të aktivizuar</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Përdoruesit joaktivë të fshirë</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Të dërguara emaile rikujtuese për përdoruesit joaktivë</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Konvertuar nga %1$s në phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Instaluar phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Sesioni IP/browser/X_FORWARDED_FOR kontrolli dështoi</strong><br />»Përdoruesi IP “ <em>%1$s</em>” u kontrollua kundrejt sesionit IP “<em>%2$s</em>”, vargu i shfletuesit të përdoruesit"<em>%3$s</em> " u kontrollua kundër vargut të shfletuesit të sesionit" <em>%4$s</em> " dhe përdoruesi X_forwarded_PËR vargun " <em>%5$s</em> " u kontrollua kundër seancës X_forwarded_PËR vargun "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong> Llogaria Jabber e ndryshuar</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong> Fjalëkalimi Jabber u ndryshua</strong>',
	'LOG_JAB_REGISTER'			=> '<strong> Llogaria jaber e regjistruar</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong> Cilësimet e gabarit të ndryshuar</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong> Paketa gjuhësore efshirë</strong><br /> » %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong> Paketa gjuhësore einstaluar</strong><br /> » %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong> Detajet e përditësuara të paketës sëgjuhës</strong><br /> » %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Dosja e gjuhës sëzëvendësuar</strong><br /> » %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Dosja e gjuhës së dorëzuar dhe e vendosur në dosjen edyqanit</strong><br /> » %s',

	'LOG_MASS_EMAIL'		=> '<strong>U dërgua email masiv</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Ndryshoi posteri në temën “%1$s”</strong><br />» nga %2$s në %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Modueli me aftësi të kufizuara</strong><br /> » %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Moduli i aktivizuar</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Moduli u zhvendos</strong><br />» %1$s nën %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Moduli u ngrit</strong><br />»%1$s më sipër %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Moduli hiqet</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>U shtua moduli</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>U redaktua moduli</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Roli i administratorit ushtua</strong><br /> » %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Roli administrativ i redaktuar</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong> Roli i administratorit uhoq</strong><br /> » %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Roli i forumit ushtua</strong><br /> » %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Roli i forumit iredaktuar</strong><br /> » %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Roli i forumit uhoq</strong><br /> » %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Roli i moderatorit ushtua</strong><br /> » %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>U redaktua roli i moderatorit</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Roli i moderatorit hiqet</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Roli i përdoruesit ushtua</strong><br /> » %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Roli i përdoruesit iredaktuar</strong><br /> » %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Roli i përdoruesit uhoq</strong><br /> » %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Nuk mund të hapet %1$s për rregullim, kontrolloni lejet.</strong><br />Përjashtimi: %2$s<br />Trace: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Fushë profili e aktivizuar</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Fushë profili e shtuar</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Fusha e profilit eçaktivizuar</strong><br /> » %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Fushë profili e ndryshuar</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Fushë profili e hequr</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>U krasitën forumet</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Forumet e automatizuara</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Temat hije u krasitën automatikisht</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Përdoruesit e çaktivizuar</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Përdoruesit e krasitur dhe postimet e fshira</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Përdoruesit e krasitur dhe postet e mbajtura</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>U pastrua memoria e përkohshme</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Seanca të mbyllura</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Shtuar rang i ri</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Renditja e zhvendosur</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Renditja e përditësuar</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong> Shtuar report/denial arsye</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Emoved report/denial reason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Përditësuar report/denial arsye</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Vlefshmëria e referuesitdështoi</strong><br /> »Referuesi ishte "<em>%1$s</em>". Kërkesa u refuzua dhe seanca u shua.',
	'LOG_RESET_DATE'			=> '<strong>Data e rifillimit të bordit</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Shumica e përdoruesve në linjë reset</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong> Statistikat e skedarëve të ri-sinkronizuara</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong> Numërimi i postimeve të përdoruesve të ri-sinkronizuara</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Tema të pikëzuara të sinkronizuara</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Postimi, tema dhe statistikat e përdoruesve të risinkronizuara</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Krijuar indeksi i kërkimit për </strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Indeksi i kërkimit të hequr për</strong><br /> » %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Gabim i Sphinx-it</strong><br />» %s',

	'LOG_SPAMHAUS_OPEN_RESOLVER'		=> 'Spamhaus nuk lejon pyetje duke përdorur një zgjidhës të hapur. Kontrolli i listës së zezë është çaktivizuar. Për më shumë informacion, shih https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/.',
	'LOG_SPAMHAUS_VOLUME_LIMIT'			=> 'Limiti i vëllimit të pyetjes Spamhaus është tejkaluar. Kontrolli i listës së zezë është çaktivizuar. Për më shumë informacion, shih https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/.',

	'LOG_STYLE_ADD'				=> '<strong> Stili i ri ishtuar</strong><br /> » %s',
	'LOG_STYLE_DELETE'			=> '<strong>Stil i fshirë</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>U redaktua stili</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Stili i eksportuar</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong> Modeli i ri i shtuar i vendosur në bazën e të dhënave</strong><br /> » %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Shto shabllon të ri të vendosur në sistemin eskedarëve</strong><br /> » %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Versionet e ruajtura të skedarëve të shablloneve në shabllonin e vendosur <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Vendosja e modelit tëfshirë</strong><br /> » %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Vendosja e modelit të redaktuar <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong> Detajet e modelit tëredaktuar</strong><br /> » %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Vendosja e modelit tëeksportuar</strong><br /> » %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Vendosja e modelit tërifreskuar</strong><br /> » %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong> Tema e re e shtuar në bazën e të dhënave</strong><br /> » %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Shto temë të re në sistemin eskedarëve</strong><br /> » %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema u fshi</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong> Detajet e temës sëredaktuar</strong><br /> » %s',
	'LOG_THEME_EDIT'			=> '<strong>U redaktua tema grafike <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>U redaktua tema grafike <em>%1$s</em></strong><br />» U ndryshua skedari <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Tema e eksportuar</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Tema e rifreskuar</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Baza e të dhënave të përditësuara nga versioni %1$s në versionin %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Përditësuar phpBB nga versioni %1$s në versionin %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Përdoruesi i aktivizuar</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong> Përdorues i ndaluar nëpërmjet menaxhimit të përdoruesit</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP-ja u ndalua përmes menaxhimit të përdoruesve</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>E-mail i ndaluar nëpërmjet menaxhimit të përdoruesit</strong> për arsyen “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Përdoruesi i fshirë</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Lëvizi të gjitha bashkëngjitjet e bëra nga përdoruesi</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Avatar i përdoruesit tëlarguar</strong><br /> » %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>U zbraz kutia dalëse e përdoruesit</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Lëvizi të gjitha postimet e bëra nga përdoruesi</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Nënshkrimi i përdoruesit tëhequr</strong><br /> » %s',
	'LOG_USER_INACTIVE'		=> '<strong>Përdoruesi i çaktivizuar</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>U zhvendosën postimet e përdoruesit</strong><br />» postimet e “%1$s” te forumi “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Ndryshuar fjalëkalimi i përdoruesit</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Aktivizimi i detyruar i llogarisë sëpërdoruesit</strong><br /> » %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>U zhvendos flamuri i sapo regjistruar nga përdoruesi</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Përdoruesi “%1$s” ndryshoi emailin</strong><br /> » nga “%2$s” në “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Ndryshoi emrin e përdoruesit</strong><br /> » nga “%1$s ” në “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong> Detajet e përdoruesit tëpërditësuar</strong><br /> » %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong> Llogaria e përdoruesit e aktivizuar</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong> Avatari i përdoruesit u hoq</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Firma e përdoruesit u hoq</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Kthim i shtuar ipërdoruesit</strong><br /> » %s',
	'LOG_USER_GENERAL'			=> '<strong>Hyrja u shtua:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong> Llogaria e përdoruesit e çaktivizuar</strong>',
	'LOG_USER_LOCK'				=> '<strong> Tema e mbyllur e përdoruesit</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Lëvizi të gjitha postimet në forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Aktivizimi i detyruar i llogarisë së përdoruesit</strong>',
	'LOG_USER_UNLOCK'			=> '<strong> Tema personale e përdoruesit ezhbllokuar</strong><br /> » %s',
	'LOG_USER_WARNING'			=> '<strong>Paralajmërimi i përdoruesit tështuar</strong><br /> » %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Paralajmërimi i mëposhtëm iu lëshua këtij përdoruesi</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Përdoruesi ndryshoi grupin e paracaktuar</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Përdoruesi i ulur si drejtues nga grupi ipërdoruesve</strong><br /> » %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Përdoruesi u bashkua megrupin</strong><br /> » %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Përdoruesi u bashkua me grupin dhe duhet të miratohet</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Përdoruesi dha dorëheqjen nga anëtarësia nga grupi</strong><br /> » %s',

	'LOG_WARNING_DELETED'		=> '<strong>Paralajmërimi i përdoruesit tëfshirë</strong><br /> » %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>U fshi paralajmërimi i përdoruesit</strong><br />» %1$s',
		2 => '<strong>U fshinë %2$d paralajmërime të përdoruesit</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Fshirë të gjitha paralajmërimet e përdoruesit</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Fjalë e shtuar censor</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Fjala e fshirë censor</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Fjalë e redaktuar censor</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Shtesa u aktivizua</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Shtesa u çaktivizua</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>U fshinë të dhënat e shtesës</strong><br />» %s',
	'LOG_EXT_UPDATE'	=> '<strong>Zgjerimi i përditësuar</strong><br />» %s',
));
