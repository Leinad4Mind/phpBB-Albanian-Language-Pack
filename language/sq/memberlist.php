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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Profili',
	'ACTIVE_IN_FORUM'		=> 'Forumi më aktiv',
	'ACTIVE_IN_TOPIC'		=> 'Tema më aktive',
	'ADD_FOE'				=> 'Shto armik',
	'ADD_FRIEND'			=> 'Shto mik',
	'AFTER'					=> 'Pas',

	'ALL'					=> 'Të gjitha',

	'BEFORE'				=> 'Përpara',

	'CC_SENDER'				=> 'Dërgojini vetes një kopje të këtij emaili.',
	'CONTACT_ADMIN'			=> 'Kontaktoni një administrator të bordit',

	'DEST_LANG'				=> 'Gjuha',
	'DEST_LANG_EXPLAIN'		=> 'Zgjidhni një gjuhë të përshtatshme (nëse disponohet) për marrësin e këtij mesazhi.',

	'EDIT_PROFILE'			=> 'Redakto profilin',

	'EMAIL_BODY_EXPLAIN'	=> 'Ky mesazh do të dërgohet si tekst i thjeshtë, mos përfshini asnjë HTML ose BBCode. Adresa e kthimit për këtë mesazh do të vendoset në adresën tuaj të emailit.',
	'EMAIL_DISABLED'		=> 'Na vjen keq, por të gjitha funksionet e lidhura me emailin janë çaktivizuar.',
	'EMAIL_SENT'			=> 'Email-i është dërguar.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Ky mesazh do të dërgohet si tekst i thjeshtë, mos përfshini asnjë HTML ose BBCode. Ju lutemi vini re se informacioni i temës është përfshirë tashmë në mesazh. Adresa e kthimit për këtë mesazh do të vendoset në adresën tuaj të emailit.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Ju duhet të jepni një adresë të vlefshme emaili për marrësin.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Ju duhet të shkruani një mesazh për t\'u dërguar me email.',
	'EMPTY_MESSAGE_IM'		=> 'Duhet të futni një mesazh për t\'u dërguar.',
	'EMPTY_NAME_EMAIL'		=> 'Ju duhet të shkruani emrin e vërtetë të marrësit.',
	'EMPTY_SENDER_EMAIL'	=> 'Ju duhet të jepni një adresë të vlefshme emaili.',
	'EMPTY_SENDER_NAME'		=> 'Ju duhet të jepni një emër.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Duhet të specifikoni një temë për emailin.',
	'EQUAL_TO'				=> 'E barabartë me',

	'FIND_USERNAME_EXPLAIN'	=> 'Përdoreni këtë formular për të kërkuar anëtarë të veçantë. Ju nuk keni nevojë të plotësoni të gjitha fushat. Për të përputhur të dhëna të pjesshme, përdorni * si karakteristikë. Kur futni data, përdorni formatin <kbd>YYYY-MM-DD</kbd>, p.sh. <samp>2004-02-29</samp>. Përdorni kutitë e kontrollit për të zgjedhur një ose më shumë emra përdoruesish (disa emra përdoruesish mund të pranohen në varësi të vetë formularit) dhe klikoni butonin Zgjidh të shënuar për t\'u kthyer në formularin e mëparshëm.',
	'FLOOD_EMAIL_LIMIT'		=> 'Nuk mund të dërgoni një email tjetër në këtë moment. Ju lutemi provoni përsëri më vonë.',

	'GROUP_LEADER'			=> 'Drejtuesi i grupit',

	'HIDE_MEMBER_SEARCH'	=> 'Fshih kërkimin e anëtarëve',

	'IM_ADD_CONTACT'		=> 'Shto Kontakt',
	'IM_DOWNLOAD_APP'		=> 'Shkarkoni aplikacionin',
	'IM_JABBER'				=> 'Ju lutemi vini re se përdoruesit mund të kenë zgjedhur të mos marrin mesazhe të menjëhershme të pakërkuara.',
	'IM_JABBER_SUBJECT'		=> 'Ky është një mesazh i automatizuar, ju lutemi mos u përgjigjeni! Mesazh nga përdoruesi %1$s në %2$s.',
	'IM_MESSAGE'			=> 'Mesazhi juaj',
	'IM_NAME'				=> 'Emri juaj',
	'IM_NO_DATA'			=> 'Nuk ka informacion të përshtatshëm kontakti për këtë përdorues.',
	'IM_NO_JABBER'			=> 'Na vjen keq, por mesazhet e drejtpërdrejta të përdoruesve të Jabber nuk mbështeten në këtë tabelë. Do t\'ju duhet një klient Jabber i instaluar në sistemin tuaj për të kontaktuar marrësin e mësipërm.',
	'IM_RECIPIENT'			=> 'Marrësi',
	'IM_SEND'				=> 'Dërgo mesazh',
	'IM_SEND_MESSAGE'		=> 'Dërgo mesazh',
	'IM_SENT_JABBER'		=> 'Mesazhi juaj për %1$s u dërgua me sukses.',
	'IM_USER'				=> 'Dërgoni një mesazh të menjëhershëm',

	'LAST_ACTIVE'				=> 'Aktivi i fundit',
	'LESS_THAN'					=> 'Më pak se',
	'LIST_USERS'				=> array(
		1	=> 'përdorues %d',
		2	=> 'Përdoruesit e %d',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Bordi kërkon që ju të regjistroheni dhe të identifikoheni për të parë listën e ekipit.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Bordi kërkon që ju të regjistroheni dhe të identifikoheni për të hyrë në listën e anëtarëve.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Bordi kërkon që ju të regjistroheni dhe të identifikoheni për të kërkuar përdoruesit.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Bordi kërkon që ju të regjistroheni dhe të identifikoheni për të parë profilet.',

	'MANAGE_GROUP'			=> 'Menaxho grupin',
	'MORE_THAN'				=> 'Më shumë se',

	'NO_CONTACT_FORM'		=> 'Formulari i kontaktit me administratorin e bordit është çaktivizuar.',
	'NO_CONTACT_PAGE'		=> 'Faqja e kontaktit të administratorit të bordit është çaktivizuar.',
	'NO_EMAIL'				=> 'Nuk ju lejohet t\'i dërgoni email këtij përdoruesi.',
	'NO_VIEW_USERS'			=> 'Ju nuk jeni të autorizuar të shikoni listën e anëtarëve ose profilet.',

	'ORDER'					=> 'Rendit',
	'OTHER'					=> 'Të tjera',

	'POST_IP'				=> 'Postuar nga IP/domain',

	'REAL_NAME'				=> 'Emri i marrësit',
	'RECIPIENT'				=> 'Marrësi',
	'REMOVE_FOE'			=> 'Hiq armikun',
	'REMOVE_FRIEND'			=> 'Hiq shokun',

	'SELECT_MARKED'			=> 'Zgjidhni të shënuar',
	'SELECT_SORT_METHOD'	=> 'Zgjidhni metodën e renditjes',
	'SENDER_EMAIL_ADDRESS'	=> 'Adresa juaj e emailit',
	'SENDER_NAME'			=> 'Emri juaj',
	'SEND_ICQ_MESSAGE'		=> 'Dërgo mesazh ICQ',
	'SEND_IM'				=> 'Mesazhimi i çastit',
	'SEND_JABBER_MESSAGE'	=> 'Dërgo mesazh Jabber',
	'SEND_MESSAGE'			=> 'Mesazh',
	'SEND_YIM_MESSAGE'		=> 'Dërgo mesazh YIM',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Aktivi i fundit',
	'SORT_POST_COUNT'		=> 'Numri i postimeve',

	'USERNAME_BEGINS_WITH'	=> 'Emri i përdoruesit fillon me',
	'USER_ADMIN'			=> 'Administroni përdoruesin',
	'USER_BAN'				=> 'Ndalimi',
	'USER_FORUM'			=> 'Statistikat e përdoruesve',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Asnjë rikujtues nuk është dërguar në këtë moment',
		1		=> 'Përkujtuesi %1$d u dërgua<br />» %2$s',
		2		=> 'Përkujtuesi %1$d u dërgua<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Në linjë',
	'USER_PRESENCE'			=> 'Prania e Bordit',
	'USERS_PER_PAGE'		=> 'Përdoruesit për faqe',

	'VIEWING_PROFILE'		=> 'Duke parë profilin - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Shikoni profilin e Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Shikoni profilin e Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Shikoni profilin e X',
	'VIEW_YOUTUBE_PROFILE'	=> 'Shikoni profilin e YouTube',
));
