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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Paneli i instalimit',
	'SELECT_LANG'	=> 'Zgjidhni gjuhën',

	'STAGE_INSTALL'	=> 'Instalimi i phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Hyrje',
	'INTRODUCTION_BODY'		=> 'Mirë se vini në phpBB3!<br /><br />phpBB® është zgjidhja më e përdorur gjerësisht e tabelës së buletinit me burim të hapur në botë. phpBB3 është kësti më i fundit në linjën e paketave të nisura në vitin 2000. Ashtu si paraardhësit e tij, phpBB3 është i pasur me veçori, i përshtatshëm për përdoruesit dhe i mbështetur plotësisht nga ekipi phpBB. phpBB3 përmirëson shumë atë që e bëri phpBB2 popullor dhe shton veçori të kërkuara zakonisht që nuk ishin të pranishme në versionet e mëparshme. Shpresojmë që t\'i tejkalojë pritshmëritë tuaja.<br /><br />Ky sistem instalimi do t\'ju udhëheqë përmes instalimit të phpBB3, përditësimit në versionin më të fundit të phpBB3 nga versionet e kaluara, si dhe konvertimit në phpBB3 nga një sistem i ndryshëm bordi diskutimi (përfshirë phpBB2). Për më shumë informacion, ju inkurajojmë të lexoni <a href="%1$s"> udhëzuesin e instalimit</a>.<br /><br />Për të lexuar licencën phpBB3 ose për të mësuar rreth marrjes së mbështetjes dhe qëndrimit tonë ndaj saj, ju lutemi zgjidhni opsionet përkatëse nga menyja anësore. Për të vazhduar, ju lutemi zgjidhni skedën e duhur më sipër.',

	// Support page
	'SUPPORT_TITLE'		=> 'Mbështetje',
	'SUPPORT_BODY'		=> 'Do të ofrohet mbështetje e plotë për lëshimin aktual të qëndrueshëm të phpBB3, pa pagesë. Kjo përfshin:</p><ul><li>instalimi</li><li>konfigurimi</li><li>pyetje teknike</li><li>problemet që lidhen me gabimet e mundshme në softuer</li><li>përditësimi nga versionet Release Candidate (RC) në versionin më të fundit të qëndrueshëm</li><li>duke u konvertuar nga phpBB 2.0.x në phpBB3</li><li>konvertimin nga softuer të tjerë të bordit të diskutimit në phpBB3 (ju lutemi shihni <a href="https://www.phpbb.com/community/viewforum.php?f=486">Forumi i Konvertuesve</a>)</li></ul><p>Ne inkurajojmë përdoruesit që ende përdorin versionet beta të phpBB3 që të zëvendësojnë instalimin e tyre me një kopje të re të versionit më të fundit.</p><h2>Zgjatjet / Stilet</h2><p>Për çështje që kanë të bëjnë me Shtesat, ju lutemi postoni në vendin e duhur <a href="https://www.phpbb.com/community/viewforum.php?f=451">Forumi i Zgjerimeve</a>.<br />Për çështje që lidhen me stilet, shabllonet dhe temat, ju lutemi postoni në vendin e duhur <a href="https://www.phpbb.com/community/viewforum.php?f=471">Forumi i Stileve</a>.<br /><br />Nëse pyetja juaj ka të bëjë me një paketë specifike, ju lutemi postoni drejtpërdrejt në temën e dedikuar paketës.</p><h2>Marrja e mbështetjes</h2><p><a href="https://www.phpbb.com/support/">Seksioni i Mbështetjes</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Udhëzues për fillimin e shpejtë</a><br /><br />Për t\'u siguruar që të qëndroni të përditësuar me lajmet dhe publikimet më të fundit, na ndiqni <a href="https://www.x.com/phpbb/">X</a> dhe <a href="https://www.facebook.com/phpbb/">Facebook</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'Licenca e Përgjithshme Publike',

	// Install page
	'INSTALL_INTRO'			=> 'Mirë se vini në Instalim',
	'INSTALL_INTRO_BODY'	=> 'Me këtë opsion, është e mundur të instaloni phpBB3 në serverin tuaj.</p><p>Për të vazhduar, do t\'ju duhen cilësimet tuaja të bazës së të dhënave. Nëse nuk i dini cilësimet tuaja të bazës së të dhënave, ju lutemi kontaktoni hostin tuaj dhe kërkoni për to. Ju nuk do të mund të vazhdoni pa to. Ju duhet:</p>

	<ul>
		<li>Lloji i bazës së të dhënave - baza e të dhënave që do të përdorni.</li>
		<li>Emri i hostit të serverit të bazës së të dhënave ose DSN - adresa e serverit të bazës së të dhënave.</li>
		<li>Porti i serverit të bazës së të dhënave - porti i serverit të bazës së të dhënave (shumicën e kohës kjo nuk është e nevojshme).</li>
		<li>Emri i bazës së të dhënave - emri i bazës së të dhënave në server.</li>
		<li>Emri i përdoruesit dhe fjalëkalimi i bazës së të dhënave - të dhënat e hyrjes për të hyrë në bazën e të dhënave.</li>
	</ul>

	<p><strong>Shënim:</strong> nëse po instaloni duke përdorur SQLite, duhet të futni shtegun e plotë të skedarit të bazës së të dhënave në fushën DSN dhe të lini bosh fushat e emrit të përdoruesit dhe fjalëkalimit. Për arsye sigurie, duhet të siguroheni që skedari i bazës së të dhënave të mos ruhet në një vend të aksesueshëm nga uebi.</p>

	<p>phpBB3 mbështet bazat e të dhënave të mëposhtme:</p>
	<ul>
		<li>MySQL 4.1.3 ose më lart (kërkohet MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ose më lart (drejtpërdrejt ose nëpërmjet ODBC)</li>
		<li>MS SQL Serveri 2005 ose më i lartë (vendas)</li>
		<li>Orakulli</li>
	</ul>

	<p>Do të shfaqen vetëm ato baza të të dhënave të mbështetura në serverin tuaj.',

	'ACP_LINK'	=> 'Më çoni te <a href="%1$s">aCP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB është instaluar tashmë.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB nuk është instaluar ende.',
	'INSTALL_RESTART'				=> 'Rinis instalimin',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Skedari nuk ekziston',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Për të qenë në gjendje të instaloni phpBB, skedari %1$s duhet të ekzistojë.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Rekomandohet që skedari %1$s të ekzistojë për një përvojë më të mirë të përdoruesit të forumit.',
	'FILE_NOT_WRITABLE'						=> 'Skedari nuk mund të shkruhet',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Për të qenë në gjendje të instaloni phpBB, skedari %1$s duhet të jetë i shkrueshëm.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Rekomandohet që skedari %1$s të jetë i shkruajtshëm për një përvojë më të mirë të përdoruesit të forumit.',

	'DIRECTORY_NOT_EXISTS'						=> 'Drejtoria nuk ekziston',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Për të qenë në gjendje të instaloni phpBB duhet të ekzistojë direktoria %1$s.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Rekomandohet që drejtoria %1$s të ekzistojë për një përvojë më të mirë të përdoruesit të forumit.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Drejtoria nuk është e shkruajtshme',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Për të qenë në gjendje të instaloni phpBB, direktoria %1$s duhet të jetë e shkrueshme.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Rekomandohet që direktoria %1$s të jetë e shkrueshme për një përvojë më të mirë të përdoruesit të forumit.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Versioni PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB kërkon PHP version 7.2.0 ose më të lartë.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Kërkohet funksioni PHP getimagesize().',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Në mënyrë që phpBB të funksionojë siç duhet, funksioni getimagesize duhet të jetë i disponueshëm.',
	'PCRE_UTF_SUPPORT'					=> 'Mbështetje PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB nuk do të ekzekutohet nëse instalimi juaj PHP nuk është kompiluar me mbështetjen UTF-8 në shtesën PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Mbështetje PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Në mënyrë që phpBB të funksionojë siç duhet, duhet të jetë i disponueshëm zgjerimi PHP JSON.',
	'PHP_MBSTRING_SUPPORT'				=> 'Mbështetje mbstring PHP',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'Në mënyrë që phpBB të funksionojë siç duhet, duhet të jetë i disponueshëm zgjerimi mbstring PHP.',
	'PHP_XML_SUPPORT'					=> 'Mbështetje PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Në mënyrë që phpBB të funksionojë siç duhet, duhet të disponohet zgjerimi PHP XML/DOM.',
	'PHP_SUPPORTED_DB'					=> 'Bazat e të dhënave të mbështetura',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Duhet të keni mbështetje për të paktën një bazë të dhënash të përputhshme brenda PHP. Nëse asnjë modul i bazës së të dhënave nuk shfaqet si i disponueshëm, duhet të kontaktoni ofruesin tuaj të pritjes ose të rishikoni dokumentacionin përkatës të instalimit të PHP për këshilla.',

	'RETEST_REQUIREMENTS'	=> 'Kërkesat e ritestimit',

	'STAGE_REQUIREMENTS'	=> 'Kontrolloni kërkesat',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Duhet të plotësoni të gjitha fushat në këtë bllok.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Instaluesi zbuloi një afat kohor',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Instaluesi ka zbuluar një afat kohor, mund të provoni të rifreskoni faqen, gjë që mund të çojë në prishje të të dhënave. Ne sugjerojmë që ose të rrisni cilësimet e skadimit ose të provoni të përdorni CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Vendosni të dhënat e instalimit',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Detajet e administratorit',

	// Form labels
	'ADMIN_CONFIG'				=> 'Konfigurimi i administratorit',
	'ADMIN_PASSWORD'			=> 'Fjalëkalimi i administratorit',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Konfirmo fjalëkalimin e administratorit',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Ju lutemi shkruani një fjalëkalim me gjatësi nga 6 deri në 30 karaktere.',
	'ADMIN_USERNAME'			=> 'Emri i përdoruesit të administratorit',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Ju lutemi vendosni një emër përdoruesi me gjatësi nga 3 deri në 20 karaktere.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Adresa e emailit që futët është e pavlefshme.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Fjalëkalimet që fute nuk përputheshin.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Fjalëkalimi që fute është shumë i gjatë. Gjatësia maksimale është 30 karaktere.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Fjalëkalimi që fute është shumë i shkurtër. Gjatësia minimale është 6 karaktere.',
	'INST_ERR_USER_TOO_LONG'		=> 'Emri i përdoruesit që fute është shumë i gjatë. Gjatësia maksimale është 20 karaktere.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Emri i përdoruesit që futët është shumë i shkurtër. Gjatësia minimale është 3 karaktere.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Konfigurimi i tabelës së buletinit',
	'DEFAULT_LANGUAGE'	=> 'Gjuha e parazgjedhur',
	'BOARD_NAME'		=> 'Titulli i bordit',
	'BOARD_DESCRIPTION'	=> 'Përshkrim i shkurtër i tabelës',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Cilësimet e bazës së të dhënave',

	// Form labels
	'DB_CONFIG'				=> 'Konfigurimi i bazës së të dhënave',
	'DBMS'					=> 'Lloji i bazës së të dhënave',
	'DB_HOST'				=> 'Emri i hostit të serverit të bazës së të dhënave ose DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN qëndron për Emri i burimit të të dhënave dhe është i rëndësishëm vetëm për instalimet ODBC. Në PostgreSQL, përdorni localhost për t\'u lidhur me serverin lokal nëpërmjet folesë së domenit UNIX dhe 127.0.0.1 për t\'u lidhur me TCP. Për SQLite, futni shtegun e plotë për skedarin tuaj të bazës së të dhënave.',
	'DB_PORT'				=> 'Porta e serverit të bazës së të dhënave',
	'DB_PORT_EXPLAIN'		=> 'Lëreni këtë bosh nëse nuk e dini se serveri funksionon në një portë jo standarde.',
	'DB_PASSWORD'			=> 'Fjalëkalimi i bazës së të dhënave',
	'DB_NAME'				=> 'Emri i bazës së të dhënave',
	'DB_USERNAME'			=> 'Emri i përdoruesit të bazës së të dhënave',
	'DATABASE_VERSION'		=> 'Versioni i bazës së të dhënave',
	'TABLE_PREFIX'			=> 'Parashtesa për tabelat në bazën e të dhënave',
	'TABLE_PREFIX_EXPLAIN'	=> 'Parashtesa duhet të fillojë me një shkronjë dhe duhet të përmbajë vetëm shkronja, numra dhe nënvizime.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ nëpërmjet ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'Serveri MSSQL 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL me zgjerimin MySQLi',
	'DB_OPTION_ORACLE'		=> 'Orakulli',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Gabim i instalimit të bazës së të dhënave',
	'INST_ERR_NO_DB'				=> 'Moduli PHP nuk mund të ngarkohet për llojin e zgjedhur të bazës së të dhënave.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Parashtesa që fute është e pavlefshme. Duhet të fillojë me një shkronjë dhe duhet të përmbajë vetëm shkronja, numra dhe nënvizime.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Parashtesa e tabelës që keni specifikuar është shumë e gjatë. Gjatësia maksimale është karaktere %d.',
	'INST_ERR_DB_NO_NAME'			=> 'Asnjë emër i bazës së të dhënave nuk është specifikuar.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Skedari i bazës së të dhënave të specifikuar është brenda pemës tuaj të drejtorisë së bordit. Ju duhet ta vendosni këtë skedar në një vend jo të aksesueshëm nga ueb-ja.',
	'INST_ERR_DB_CONNECT'			=> 'Nuk mund të lidhej me bazën e të dhënave, shikoni mesazhin e gabimit më poshtë.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Si baza e të dhënave ashtu edhe direktoria që e përmban atë duhet të jenë të shkrueshme.',
	'INST_ERR_DB_NO_ERROR'			=> 'Nuk është dhënë asnjë mesazh gabimi.',
	'INST_ERR_PREFIX'				=> 'Tabelat me prefiksin e specifikuar tashmë ekzistojnë, ju lutemi zgjidhni një alternativë.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Versioni i MySQL i instaluar në këtë makinë është i papajtueshëm me opsionin "MySQL with MySQLi Extension" që keni zgjedhur. Në vend të kësaj, provoni opsionin "MySQL".',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Versioni i shtesës SQLite që keni instaluar është shumë i vjetër, duhet të përmirësohet në të paktën 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Versioni i Oracle i instaluar në këtë makinë kërkon që ju të vendosni parametrin <var>NLS_CHARACTERSET</var> në <var>UTF8</var>. Ose përmirësoni instalimin tuaj në 9.2+ ose ndryshoni parametrin.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Baza e të dhënave që keni zgjedhur nuk është krijuar në kodimin <var>UNICODE</var> ose <var>UTF8</var>. Provoni të instaloni me një bazë të dhënash në kodimin <var>UNICODE</var> ose <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Skedari i skemës nuk mund të shkruhet',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Konfigurimi i postës elektronike',

	// Package info
	'PACKAGE_VERSION'					=> 'Versioni i paketës është instaluar',
	'UPDATE_INCOMPLETE'				=> 'Instalimi juaj phpBB nuk është përditësuar saktë.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Ju lutemi lexoni informacionin e mëposhtëm për të rregulluar këtë gabim.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Përditësim jo i plotë</h1>

<p>Ne vumë re se përditësimi i fundit i instalimit tuaj phpBB nuk ka përfunduar. Vizitoni përditësuesin e bazës së të dhënave <a href="%1$s" title="%1$s"></a>, sigurohuni që <em> Përditësoni bazën e të dhënave vetëm</em> është zgjedhur dhe klikoni në <strong>Submit</strong>. Mos harroni të fshini direktorinë "install" pasi të keni përditësuar me sukses bazën e të dhënave.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Një lëshim i ri i veçorive <strong>%1$s</strong> është i disponueshëm. Ju lutemi, lexoni <a href="%2$s" title="%2$s"><strong> njoftimin e lëshimit</strong></a> për të mësuar se çfarë ka për të ofruar dhe si të përmirësohet.',
	'SERVER_CONFIG'				=> 'Konfigurimi i serverit',
	'SCRIPT_PATH'				=> 'Rruga e skriptit',
	'SCRIPT_PATH_EXPLAIN'		=> 'Rruga ku ndodhet phpBB në lidhje me emrin e domenit, p.sh. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Faleminderit, Menaxhmenti',
	'CONFIG_SITE_DESC'				=> 'Një tekst i shkurtër për të përshkruar forumin tuaj',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> '<t>Ky është një shembull i postimit në instalimin tuaj të phpBB3. Gjithçka duket se po funksionon. Ju mund ta fshini këtë postim nëse dëshironi dhe vazhdoni të konfiguroni bordin tuaj. Gjatë procesit të instalimit kategorisë suaj të parë dhe forumit tuaj të parë i caktohet një grup i përshtatshëm lejesh për administratorët e grupeve të përdoruesve të paracaktuar, bots, moderatorë globalë, të ftuar, përdoruesit e regjistruar dhe përdoruesit e regjistruar të COPPA. Nëse zgjidhni gjithashtu të fshini kategorinë tuaj të parë dhe forumin tuaj të parë, mos harroni të caktoni leje për të gjitha këto grupe përdoruesish për të gjitha kategoritë dhe forumet e reja që krijoni. Rekomandohet të riemërtoni kategorinë tuaj të parë dhe forumin tuaj të parë dhe të kopjoni lejet nga këto ndërsa krijoni kategori dhe forume të reja. Argëtohu!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Kategoria juaj e parë',
	'FORUMS_TEST_FORUM_DESC'		=> 'Përshkrimi i forumit tuaj të parë.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Forumi juaj i parë',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administratori i faqes',
	'REPORT_WAREZ'					=> 'Postimi përmban lidhje me programe të paligjshme ose pirate.',
	'REPORT_SPAM'					=> 'Postimi i raportuar ka të vetmin qëllim për të reklamuar një faqe interneti ose një produkt tjetër.',
	'REPORT_OFF_TOPIC'				=> 'Postimi i raportuar është jashtë temës.',
	'REPORT_OTHER'					=> 'Postimi i raportuar nuk përshtatet në asnjë kategori tjetër, ju lutemi përdorni fushën e informacionit të mëtejshëm.',

	'SMILIES_ARROW'					=> 'Shigjeta',
	'SMILIES_CONFUSED'				=> 'I hutuar',
	'SMILIES_COOL'					=> 'I ftohtë',
	'SMILIES_CRYING'				=> 'Duke qarë ose shumë e trishtuar',
	'SMILIES_EMARRASSED'			=> 'I turpëruar',
	'SMILIES_EVIL'					=> 'E keqe ose shumë e çmendur',
	'SMILIES_EXCLAMATION'			=> 'pasthirrma',
	'SMILIES_GEEK'					=> 'Ekspert',
	'SMILIES_IDEA'					=> 'Ideja',
	'SMILIES_LAUGHING'				=> 'Duke qeshur',
	'SMILIES_MAD'					=> 'I çmendur',
	'SMILIES_MR_GREEN'				=> 'Zoti Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Pyetje',
	'SMILIES_RAZZ'					=> 'Tallës',
	'SMILIES_ROLLING_EYES'			=> 'Sytë që rrotullohen',
	'SMILIES_SAD'					=> 'E trishtuar',
	'SMILIES_SHOCKED'				=> 'I tronditur',
	'SMILIES_SMILE'					=> 'Buzëqeshni',
	'SMILIES_SURPRISED'				=> 'I habitur',
	'SMILIES_TWISTED_EVIL'			=> 'E keqja e shtrembëruar',
	'SMILIES_UBER_GEEK'				=> 'Super ekspert',
	'SMILIES_VERY_HAPPY'			=> 'Shumë i lumtur',
	'SMILIES_WINK'					=> 'Bëj syrin',

	'TOPICS_TOPIC_TITLE'			=> 'Mirë se vini në phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Vështrim i përgjithshëm',
	'MENU_INTRO'		=> 'Hyrje',
	'MENU_LICENSE'		=> 'Licenca',
	'MENU_SUPPORT'		=> 'Mbështetje',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Krijimi i skedarit të konfigurimit',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Shtimi i cilësimeve të konfigurimit',
	'TASK_ADD_DEFAULT_DATA'				=> 'Shtimi i cilësimeve të paracaktuara në bazën e të dhënave',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Krijimi i skedarit të skemës së bazës së të dhënave',
	'TASK_SETUP_DATABASE'				=> 'Vendosja e bazës së të dhënave',
	'TASK_CREATE_TABLES'				=> 'Krijimi i tabelave',

	// Install data
	'TASK_ADD_AI_CRAWLERS'		=> 'Regjistrimi i zvarritësve të AI',
	'TASK_ADD_BOTS'				=> 'Regjistrimi i robotëve',
	'TASK_ADD_LANGUAGES'		=> 'Instalimi i gjuhëve të disponueshme',
	'TASK_ADD_MODULES'			=> 'Instalimi i moduleve',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Krijimi i indeksit të kërkimit',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Instalimi i shtesave të paketuara',
	'TASK_NOTIFY_USER'			=> 'Dërgimi i emailit të njoftimit',
	'TASK_POPULATE_MIGRATIONS'	=> 'Migrimet e populluara',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Instaluesi ka përfunduar me sukses',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Moduli nuk u gjet',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Një modul nuk mund të gjendej sepse shërbimi, %s, është i papërcaktuar.',

	'TASK_NOT_FOUND'				=> 'Detyra nuk u gjet',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Një detyrë nuk mund të gjendej sepse shërbimi, %s, është i papërcaktuar.',

	'SKIP_MODULE'	=> 'Kapërceni modulin "%s".',
	'SKIP_TASK'		=> 'Kapërceni detyrën "%s".',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Të gjitha shërbimet e detyrave të instaluesit duhet të fillojnë me "instalues"',
	'TASK_CLASS_NOT_FOUND'				=> 'Përkufizimi i shërbimit të detyrës së instaluesit është i pavlefshëm. Emri i shërbimit "%1$s" i dhënë, hapësira e pritshme e emrave të klasës është "%2$s" për këtë. Për më shumë informacion, ju lutemi shikoni dokumentacionin e task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Skedari i konfigurimit të instaluesit nuk mund të shkruhet.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Instaloni phpBB',
	'CLI_UPDATE_BOARD'				=> 'Përditëso phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Trego konfigurimin që do të përdoret',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Vërtetoni një skedar konfigurimi',
	'CLI_CONFIG_FILE'				=> 'Skedari i konfigurimit për t\'u përdorur',
	'MISSING_FILE'					=> 'Nuk mund të qaset në skedarin %1$s',
	'MISSING_DATA'					=> 'Skedarit të konfigurimit i mungojnë të dhënat ose mund të përmbajë cilësime të pavlefshme.',
	'INVALID_YAML_FILE'				=> 'Skedari YAML %1$s nuk mund të analizohej',
	'CONFIGURATION_VALID'			=> 'Skedari i konfigurimit është i vlefshëm',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Përditëso instalimin e phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Me këtë opsion, është e mundur të përditësoni tuajin phpBB instalimi në versionin më të fundit.<br />Gjatë procesit të gjithë skedarët tuaj do të kontrollohen për integritetin e tyre. Ju mund të rishikoni të gjitha ndryshimet dhe skedarët përpara përditësimit.<br /><br />Vetë përditësimi i skedarit mund të bëhet në dy mënyra të ndryshme.</p><h2>Përditësimi manual</h2><p>Me këtë përditësim ju shkarkoni vetëm grupin tuaj personal të skedarëve të ndryshuar për t\'u siguruar që të mos humbni modifikimet e skedarëve që mund të keni bërë. Pasi të keni shkarkuar këtë paketë, duhet të ngarkoni manualisht skedarët në pozicionin e tyre të saktë nën tuaj phpBB direktoria rrënjësore. Pasi të keni mbaruar, mund të bëni përsëri fazën e kontrollit të skedarit për të parë nëse i keni zhvendosur skedarët në vendndodhjen e tyre të saktë.</p><h2>Përditësim i avancuar me FTP</h2><p>Kjo metodë është e ngjashme me të parën, por pa nevojën që të shkarkoni skedarët e ndryshuar dhe t\'i ngarkoni vetë. Kjo do të bëhet për ju. Për të përdorur këtë metodë, ju duhet të dini detajet tuaja të hyrjes në FTP pasi ato do t\'ju kërkohen. Pasi të përfundoni, do të ridrejtoheni përsëri te kontrolli i skedarit për t\'u siguruar që gjithçka është përditësuar saktë.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '<h1>Njoftim publikimi</h1>

<p> Ju lutemi lexoni njoftimin e lëshimit për versionin më të fundit përpara se të vazhdoni procesin tuaj të përditësimit, ai mund të përmbajë informacione të dobishme. Ai gjithashtu përmban lidhje të plota të shkarkimit si dhe regjistrin e ndryshimeve.</p>

<br />

<h1>Si të përditësoni instalimin tuaj me paketën e plotë</h1>

<p> Mënyra e rekomanduar për të përditësuar instalimin tuaj është përdorimi i paketës së plotë. Nëse skedarët thelbësorë phpBB janë modifikuar në instalimin tuaj, mund të dëshironi të përdorni paketën e përditësimit të avancuar për të mos humbur këto ndryshime. Ju gjithashtu mund të përditësoni instalimin tuaj duke përdorur metodat e tjera të listuara në dokumentin INSTALL.html. Hapat për përditësimin e phpBB3 duke përdorur paketën e plotë janë:</p>

<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Backback të gjithë skedarët e bordit dhe bazën e të dhënave.</strong></li>
			<li> Shkoni te faqja e shkarkimeve <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com</a> dhe shkarkoni arkivin më të fundit "Paketa e plotë".</li>
			<li>Çpaketo arkivin.</li>
			<li>Hiqni (fshini) skedarin <code class="inline">config.php</code> dhe <code class="inline">/imazhet</code>, <code class="inline">/store</code> dhe <code class="inline">/skedarët</code> dosjet <em>nga paketa</em> (jo faqja juaj).</li>
			<li>Shkoni te ACP, cilësimet e tabelës dhe sigurohuni që prosilver të jetë vendosur si stili i paracaktuar. Nëse jo, vendoseni në prosilver.</li>
			<li>Fshi dosjet <code class="inline">/shitësi</code> dhe <code class="inline">/cache</code> nga dosja rrënjë e bordit në host.</li>
			<li>Via FTP ose SSH ngarkoni skedarët dhe dosjet e mbetura (d.m.th., PËRMBAJTJET e mbetura të dosjes phpBB3) në dosjen rrënjë të instalimit të bordit tuaj në server, duke mbishkruar skedarët ekzistues. (Shënim: kini kujdes që të mos fshini asnjë shtesë në dosjen tuaj <code class="inline">/ext</code> kur ngarkoni përmbajtjen e re phpBB3.)</li>
			<li><strong><a href="%1$s" title="%1$s">Tani filloni procesin e përditësimit duke e drejtuar shfletuesin tuaj te dosja e instalimit</a>.</strong></li>
			<li>Ndiqni hapat për të përditësuar bazën e të dhënave dhe lëreni të përfundojë deri në fund.</li>
			<li>Via FTP ose SSH fshini dosjen <code class="inline">/install</code> nga rrënja e bordit tuaj instalimi.<br><br></li>
		</ol>

<p> Tani keni një tabelë të re të përditësuar që përmban të gjithë përdoruesit dhe postimet tuaja. Detyrat vijuese:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li> Përditëso paketën tënde të gjuhës</li>
			<li>Përditësoni stilin tuaj<br><br></li>
		</ul>

<h1>Si të përditësoni instalimin tuaj me Paketën e Përditësimeve të Avancuara</h1>

<p> Paketa e avancuar e përditësimit rekomandohet vetëm për përdoruesit ekspertë në rast se skedarët thelbësorë phpBB janë modifikuar në instalimin tuaj. Ju gjithashtu mund të përditësoni instalimin tuaj duke përdorur metodat e listuara në dokumentin INSTALL.html. Hapat për përditësimin e phpBB3 duke përdorur paketën e përditësuar të avancuar janë:</p>

<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Shkoni te faqja e shkarkimeve <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com</a> dhe shkarkoni arkivin "Paketa e Përditësimit të Avancuar".</li>
			<li>Çpaketo arkivin.</li>
			<li>Ngarkoni dosjet e plota të pakompresuara "install" dhe "shitës" në direktorinë tuaj rrënjësore phpBB (ku është skedari juaj config.php).<br><br></li>
		</ol>

<p> Pasi të jetë ngarkuar, bordi juaj do të jetë jashtë linje për përdoruesit normalë për shkak se drejtoria e instalimit që keni ngarkuar tani është e pranishme.<br /><br />
		<strong><a href="%1$s" title="%1$s"> Tani filloni procesin e përditësimit duke e drejtuar shfletuesin tuaj te dosja e instalimit</a>.</strong><br />
		<br />
		Më pas do të udhëhiqeni përmes procesit të përditësimit. Do të njoftoheni sapo të përfundojë përditësimi.
		</p>',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Lloji i përditësimit për ekzekutim',

	'UPDATE_TYPE_ALL'		=> 'Përditësoni sistemin e skedarëve dhe bazën e të dhënave',
	'UPDATE_TYPE_DB_ONLY'	=> 'Përditëso vetëm bazën e të dhënave',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Metodat e përditësimit të skedarëve',

	'UPDATE_FILE_METHOD'			=> 'Metoda e përditësimit të skedarit',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Shkarkoni skedarët e modifikuar në një arkiv',
	'UPDATE_FILE_METHOD_FTP'		=> 'Përditësoni skedarët përmes FTP (Automatic)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Përditësoni skedarët përmes aksesit të drejtpërdrejtë të skedarit (Automatik)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Zgjidhni formatin e arkivit të shkarkimit',

	// FTP settings
	'FTP_SETTINGS'			=> 'Cilësimet e FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Nuk u gjet asnjë direktori e vlefshme përditësimi, sigurohuni që të keni ngarkuar skedarët përkatës.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Versioni juaj është i përditësuar. Nuk ka nevojë të ekzekutoni mjetin e përditësimit. Nëse dëshironi të bëni një kontroll të integritetit të skedarëve tuaj, sigurohuni që të keni ngarkuar skedarët e duhur të përditësimit.',
	'OLD_UPDATE_FILES'				=> 'Skedarët e përditësimit janë të vjetëruar. Skedarët përditësues të gjetur janë për përditësim nga phpBB %1$s në phpBB %2$s, por versioni më i fundit i phpBB është %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Skedarët përditësues të gjetur janë të papajtueshëm me versionin tuaj të instaluar. Versioni juaj i instaluar është %1$s dhe skedari i përditësimit është për përditësimin e phpBB %2$s në %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Përditëso skedarët',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Kontrolloni skedarët për t\'u përditësuar',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Skedari differ nuk arriti të hapte %s.',

	'UPDATE_FILE_DIFF'		=> 'Ndryshimi i skedarëve të ndryshuar',
	'ALL_FILES_DIFFED'		=> 'Të gjithë skedarët e modifikuar janë ndryshuar.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Përditëso skedarët',

	'DOWNLOAD'							=> 'Shkarkoni',
	'DOWNLOAD_CONFLICTS'				=> 'Shkarkoni arkivin e konflikteve të bashkimit',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Kërko për &lt;&lt;&lt; për të dalluar konfliktet',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Shkarkoni arkivin e skedarëve të modifikuar',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Pasi të keni shkarkuar, duhet të shpaketoni arkivin. Do të gjeni skedarët e modifikuar që ju nevojiten për të ngarkuar në direktoriumin tuaj rrënjësor phpBB brenda tij. Më pas, ngarkoni skedarët në vendndodhjet e tyre përkatëse. Pasi të keni ngarkuar të gjithë skedarët, mund të vazhdoni me procesin e përditësimit.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Skedari është tashmë i përditësuar.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Skedari nuk lejohet të ndryshohet.',
	'FILE_USED'						=> 'Informacioni i përdorur nga',			// Single file
	'FILES_CONFLICT'				=> 'Skedarët e konfliktit',
	'FILES_CONFLICT_EXPLAIN'		=> 'Skedarët e mëposhtëm janë modifikuar dhe nuk përfaqësojnë skedarët origjinalë nga versioni i vjetër. phpBB përcaktoi që këta skedarë krijojnë konflikte nëse përpiqen të bashkohen. Ju lutemi, hetoni konfliktet dhe përpiquni t\'i zgjidhni ato manualisht ose vazhdoni përditësimin duke zgjedhur metodën e preferuar të bashkimit. Nëse i zgjidhni konfliktet me dorë, kontrolloni sërish skedarët pasi t\'i modifikoni. Ju gjithashtu mund të zgjidhni midis metodës së preferuar të bashkimit për çdo skedar. E para do të rezultojë në një skedar ku linjat konfliktuale nga skedari juaj i vjetër do të humbasin, tjetri do të rezultojë në humbjen e ndryshimeve nga skedari më i ri.',
	'FILES_DELETED'					=> 'Skedarët e fshirë',
	'FILES_DELETED_EXPLAIN'			=> 'Skedarët e mëposhtëm nuk ekzistojnë në versionin e ri. Këto skedarë duhet të fshihen nga instalimi juaj.',
	'FILES_MODIFIED'				=> 'Skedarët e modifikuar',
	'FILES_MODIFIED_EXPLAIN'		=> 'Skedarët e mëposhtëm janë modifikuar dhe nuk përfaqësojnë skedarët origjinalë nga versioni i vjetër. Skedari i përditësuar do të jetë një bashkim midis modifikimeve tuaja dhe skedarit të ri.',
	'FILES_NEW'						=> 'Skedarë të rinj',
	'FILES_NEW_EXPLAIN'				=> 'Skedarët e mëposhtëm aktualisht nuk ekzistojnë brenda instalimit tuaj. Këta skedarë do të shtohen në instalimin tuaj.',
	'FILES_NEW_CONFLICT'			=> 'Skedarë të rinj konfliktualë',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Skedarët e mëposhtëm janë të rinj në versionin më të fundit, por është përcaktuar se tashmë ekziston një skedar me të njëjtin emër brenda të njëjtit pozicion. Ky skedar do të mbishkruhet nga skedari i ri.',
	'FILES_NOT_MODIFIED'			=> 'Skedarët e pa modifikuar',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Skedarët e mëposhtëm nuk janë modifikuar dhe përfaqësojnë skedarët origjinalë phpBB nga versioni nga i cili dëshironi të përditësoni.',
	'FILES_UP_TO_DATE'				=> 'Skedarët e përditësuar tashmë',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Skedarët e mëposhtëm janë tashmë të përditësuar dhe nuk kanë nevojë të përditësohen.',
	'FILES_VERSION'					=> 'Versioni i skedarëve',
	'TOGGLE_DISPLAY'				=> 'Shiko/Fshihe listën e skedarëve',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Përditësimi i skedarëve',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Përditësuesi i skedarit "%1$s" dështoi. Instaluesi do të përpiqet të kthehet në "%2$s".',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Përditësuesi i skedarit dështoi. Nuk ka metoda shtesë të mëtejshme.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Vazhdoni procesin e përditësimit',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Kontrolloni skedarët përsëri',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Përditëso bazën e të dhënave',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Përditësimi i bazës së të dhënave ishte i suksesshëm.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Përditësimi i shtesave',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Konvertuesi i specifikuar nuk ekziston.',
	'DEV_NO_TEST_FILE'			=> 'Asnjë vlerë nuk është specifikuar për variablin test_file në konvertues. Nëse jeni përdorues i këtij konvertuesi, nuk duhet ta shihni këtë gabim, ju lutemi raportoni këtë mesazh autorit të konvertuesit. Nëse jeni autor i konvertuesit, duhet të specifikoni emrin e një skedari që ekziston në bordin burimor për të lejuar që shtegu drejt tij të verifikohet.',
	'COULD_NOT_COPY'			=> 'Skedari <strong>%1$s</strong> nuk mund të kopjohej në <strong>%2$s</strong><br><br>Ju lutemi kontrolloni nëse direktoria e synuar ekziston dhe është e shkruajtshme nga uebserveri.',
	'COULD_NOT_FIND_PATH'		=> 'Nuk mund të gjeja rrugën për në bordin tuaj të mëparshëm. Ju lutemi kontrolloni cilësimet tuaja dhe provoni përsëri.<br />» %s u specifikua si shtegu i burimit.',
	'CONFIG_PHPBB_EMPTY'		=> 'Ndryshorja e konfigurimit phpBB3 për "%s" është bosh.',

	'MAKE_FOLDER_WRITABLE'		=> 'Ju lutemi sigurohuni që kjo dosje ekziston dhe është e shkruajtshme nga serveri i internetit dhe provoni sërish:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Ju lutemi sigurohuni që këto dosje ekzistojnë dhe janë të shkruajtshme nga serveri i internetit dhe më pas provoni përsëri:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Provoni përsëri',

	'NO_TABLES_FOUND'			=> 'Nuk u gjetën tabela.',
	'TABLES_MISSING'			=> 'Nuk mund të gjeja këto tabela<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Ju lutemi kontrolloni prefiksin tuaj të tabelës dhe provoni përsëri.',

	// Conversion in progress
	'CATEGORY'					=> 'Kategoria',
	'CONTINUE_CONVERT'			=> 'Vazhdo konvertimin',
	'CONTINUE_CONVERT_BODY'		=> 'Është përcaktuar një përpjekje e mëparshme konvertimi. Tani mund të zgjidhni midis fillimit të një konvertimi të ri ose vazhdimit të konvertimit.',
	'CONVERT_NEW_CONVERSION'	=> 'Konvertim i ri',
	'CONTINUE_OLD_CONVERSION'	=> 'Vazhdo konvertimin e filluar më parë',
	'POST_ID'					=> 'ID e postës',

	// Start conversion
	'SUB_INTRO'					=> 'Hyrje',
	'CONVERT_INTRO'				=> 'Mirë se vini në Kornizën e Unifikuar të Konvertuesit phpBB',
	'CONVERT_INTRO_BODY'		=> 'Nga këtu, ju mund të importoni të dhëna nga sisteme të tjera (të instaluara) të bordit. Lista e mëposhtme tregon të gjitha modulet e konvertimit të disponueshme aktualisht. Nëse nuk shfaqet asnjë konvertues në këtë listë për softuerin e bordit nga i cili dëshironi të konvertoni, ju lutemi kontrolloni faqen tonë të internetit ku mund të disponohen për shkarkim module të tjera konvertimi.',
	'AVAILABLE_CONVERTORS'		=> 'Konvertuesit e disponueshëm',
	'NO_CONVERTORS'				=> 'Nuk ka konvertues të disponueshëm për përdorim.',
	'CONVERT_OPTIONS'			=> 'Opsionet',
	'SOFTWARE'					=> 'Softueri i bordit',
	'VERSION'					=> 'Versioni',
	'CONVERT'					=> 'Konverto',

	// Settings
	'STAGE_SETTINGS'			=> 'Cilësimet',
	'TABLE_PREFIX_SAME'			=> 'Prefiksi i tabelës duhet të jetë ai që përdoret nga softueri nga i cili po konvertoni.<br />» Prefiksi i specifikuar i tabelës ishte %s.',
	'DEFAULT_PREFIX_IS'			=> 'Konvertuesi nuk ishte në gjendje të gjente tabela me prefiksin e specifikuar. Ju lutemi sigurohuni që të keni futur të dhënat e sakta për tabelën nga e cila po konvertoni. Prefiksi i parazgjedhur i tabelës për %1$s është <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Specifikoni opsionet e konvertimit',
	'FORUM_PATH'				=> 'Rruga e bordit',
	'FORUM_PATH_EXPLAIN'		=> 'Kjo është shtegu <strong>relative</strong> në disk në bordin tuaj të mëparshëm nga <strong>root i këtij instalimi phpBB3</strong>.',
	'REFRESH_PAGE'				=> 'Rifresko faqen për të vazhduar konvertimin',
	'REFRESH_PAGE_EXPLAIN'		=> 'Nëse vendoset në po, konverteri do të rifreskojë faqen për të vazhduar konvertimin pasi të ketë përfunduar një hap. Nëse ky është konvertimi juaj i parë për qëllime testimi dhe për të përcaktuar paraprakisht ndonjë gabim, ju sugjerojmë ta vendosni këtë në Nr.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Konvertimi në progres',

	'AUTHOR_NOTES'				=> 'Shënime të autorit<br />» %s',
	'STARTING_CONVERT'			=> 'Fillimi i procesit të konvertimit',
	'CONFIG_CONVERT'			=> 'Konvertimi i konfigurimit',
	'DONE'						=> 'U krye',
	'PREPROCESS_STEP'			=> 'Ekzekutimi i funksioneve/pyetjeve të para-përpunimit',
	'FILLING_TABLE'				=> 'Tabela mbushëse <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Mbushja e tabelave',
	'DB_ERR_INSERT'				=> 'Gabim gjatë përpunimit të pyetjes <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Gabim gjatë përpunimit të <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Gabim gjatë ekzekutimit të <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Gabim gjatë ekzekutimit të <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Gabim gjatë ekzekutimit të pyetjes <code>SELECT</code>.',
	'STEP_PERCENT_COMPLETED'	=> 'Hapi <strong>%d</strong> i <strong>%d</strong>',
	'FINAL_STEP'				=> 'Procesi i hapit të fundit',
	'SYNC_FORUMS'				=> 'Fillimi i sinkronizimit të forumeve',
	'SYNC_POST_COUNT'			=> 'Sinkronizimi i numrit të postimeve',
	'SYNC_POST_COUNT_ID'		=> 'Sinkronizimi i numrit të postimeve nga <var>entry</var> %1$s në %2$s.',
	'SYNC_TOPICS'				=> 'Fillimi i sinkronizimit të temave',
	'SYNC_TOPIC_ID'				=> 'Sinkronizimi i temave nga <var>topic_id</var> %1$s në %2$s.',
	'PROCESS_LAST'					=> 'Përpunimi i deklaratave të fundit',
	'UPDATE_TOPICS_POSTED'		=> 'Gjenerimi i informacionit të postuar për temat',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Ndodhi një gabim gjatë krijimit të informacionit për temat e postuara. Mund ta riprovoni këtë hap në ACP pasi të përfundojë procesi i konvertimit.',
	'CONTINUE_LAST'				=> 'Vazhdoni deklaratat e fundit',
	'CLEAN_VERIFY'				=> 'Pastrimi dhe verifikimi i strukturës përfundimtare',
	'NOT_UNDERSTAND'			=> 'Nuk mund ta kuptoja %s #%d, tabela %s ("%s")',
	'NAMING_CONFLICT'			=> 'Konflikti i emërtimit: %s dhe %s janë të dyja pseudonime<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Konvertimi përfundoi',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Tani e keni konvertuar me sukses bordin tuaj në phpBB 3.3. Tani mund të identifikoheni dhe <a href="../">afroni bordin tuaj</a>. Ju lutemi sigurohuni që cilësimet janë transferuar saktë përpara se të aktivizoni bordin tuaj duke fshirë direktorinë e instalimit. Mos harroni se ndihma për përdorimin e phpBB është e disponueshme në internet nëpërmjet <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Documentation</a> dhe forumeve mbështetëse <a href="https://www.phpbb.com/community/viewforum.php?f=661"></a>.',

	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> është emri i pastër i përdoruesit për:',
	'COLLIDING_USER'					=> '» ID e përdoruesit: <strong>%d</strong> emri i përdoruesit: <strong>%s</strong> (postimet %d)',
	'COLLIDING_USERNAMES_FOUND'			=> 'Emrat e përdoruesve të përplasur u gjetën në tabelën tuaj të vjetër. Për të përfunduar konvertimin, ju lutemi fshini ose riemërtoni këta përdorues në mënyrë që të ketë vetëm një përdorues në tabelën tuaj të vjetër për çdo emër përdoruesi të pastër.',
	'CONV_ERR_FATAL'					=> 'Gabim fatal i konvertimit',
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Ngarkimi FTP për bashkëngjitjet është aktivizuar në tabelën e vjetër. Ju lutemi çaktivizoni opsionin e ngarkimit FTP dhe sigurohuni që të specifikohet një direktori e vlefshme ngarkimi, më pas kopjoni të gjithë skedarët e bashkëngjitjes në këtë direktori të re të aksesueshme në ueb. Pasi ta keni bërë këtë, rinisni konvertuesin.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nuk ka asnjë informacion konfigurimi të disponueshëm për konvertimin.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nuk mund të merret informacioni i hyrjes në forum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nuk mund të merren kategoritë.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nuk mund të merrej konfigurimi i tabelës.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'I paaftë për të hyrë/lexuar "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nuk mund të merret informacioni i vërtetimit të grupit.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Mospërputhja në tabelën e grupeve u zbulua në add_bots() - duhet të shtoni të gjitha grupet speciale nëse e bëni atë me dorë.',
	'CONV_ERROR_INSERT_BOT'				=> 'Bot nuk mund të futet në tabelën e përdoruesve.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Bot nuk mund të futet në tabelën e robotëve.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nuk mund të futet përdoruesi në tabelën e grupit të përdoruesve.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Gabim analizues i mesazheve',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Shënim për zhvilluesin: duhet të specifikoni $convertor[\'avatar_path\'] për të përdorur %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Rruga relative drejt bordit burimor nuk është specifikuar.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Shënim për zhvilluesin: duhet të specifikoni $convertor[\'avatar_gallery_path\'] për të përdorur %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupi "%1$s" nuk mund të gjendej në %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Shënim për zhvilluesin: duhet të specifikoni $convertor[\'ranks_path\'] për të përdorur %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Shënim për zhvilluesin: duhet të specifikoni $convertor[\'smilies_path\'] për të përdorur %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Shënim për zhvilluesin: duhet të specifikoni $convertor[\'upload_path\'] për të përdorur %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nuk mund të futet/përditësohet cilësimi i lejes.',
	'CONV_ERROR_PM_COUNT'				=> 'Nuk mund të zgjidhet numri i pm dosjeve.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nuk mund të futet forumi i ri që zëvendëson kategorinë e vjetër.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nuk mund të futet forumi i ri duke zëvendësuar forumin e vjetër.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nuk mund të merret informacioni i vërtetimit të përdoruesit.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grupi i gabuar "%1$s" i përcaktuar në %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Kjo faqe mbledh të dhënat e nevojshme për të hyrë në tabelën burimore. Futni të dhënat e bazës së të dhënave të bordit tuaj të mëparshëm; konverteri nuk do të ndryshojë asgjë në bazën e të dhënave të dhënë më poshtë. Bordi burimor duhet të çaktivizohet për të lejuar një konvertim të qëndrueshëm.',
	'CONV_SAVED_MESSAGES'				=> 'Mesazhet e ruajtura',

	'PRE_CONVERT_COMPLETE'			=> 'Të gjitha hapat e para-konvertimit janë përfunduar me sukses. Tani mund të filloni procesin aktual të konvertimit. Ju lutemi vini re se mund t\'ju duhet të bëni dhe rregulloni manualisht disa gjëra. Pas konvertimit, veçanërisht kontrolloni lejet e caktuara, rindërtoni indeksin tuaj të kërkimit i cili nuk është konvertuar dhe gjithashtu sigurohuni që skedarët të kopjohen saktë, për shembull avatarët dhe smilies.',
));
