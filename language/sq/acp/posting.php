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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode është zbatim i posaçëm i HTML-së që jep më shumë kontroll mbi paraqitjen. Nga kjo faqe mund të shtoni, hiqni dhe redaktoni BBCode të personalizuara.',
	'ADD_BBCODE'				=> 'Shtoni BBCode të re',

	'BBCODE_DANGER'				=> 'BBCode që po shtoni duket e pasigurt. Nëse përdor tokenin {TEXT} në kontekst të ndjeshëm, përdorni një lloj më kufizues. Vazhdoni vetëm nëse i kuptoni rreziqet.',
	'BBCODE_DANGER_PROCEED'		=> 'Vazhdoni', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode u shtua me sukses.',
	'BBCODE_EDITED'				=> 'BBCode u redaktua me sukses.',
	'BBCODE_DELETED'			=> 'BBCode u hoq me sukses.',
	'BBCODE_NOT_EXIST'			=> 'BBCode e zgjedhur nuk ekziston.',
	'BBCODE_HELPLINE'			=> 'Rreshti i ndihmës',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Kjo fushë përmban tekstin që shfaqet kur kursori kalon mbi BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Teksti i rreshtit të ndihmës',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Rreshti i ndihmës është shumë i gjatë.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Emri i etiketës BBCode ekziston tashmë.',
	'BBCODE_INVALID'			=> 'BBCode është ndërtuar në formë të pavlefshme.',
	'BBCODE_INVALID_TEMPLATE'	=> 'Shablloni i BBCode është i pavlefshëm.',
	'BBCODE_TAG'				=> 'Etiketa',
	'BBCODE_TAG_TOO_LONG'		=> 'Emri i etiketës është shumë i gjatë.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Përkufizimi i etiketës është shumë i gjatë; shkurtojeni.',
	'BBCODE_USAGE'				=> 'Përdorimi i BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Këtu përcaktoni si përdoret BBCode. Zëvendësoni hyrjet e ndryshueshme me tokenin përkatës (%sshihni më poshtë%s).',

	'EXAMPLE'						=> 'Shembull:',
	'EXAMPLES'						=> 'Shembuj:',

	'HTML_REPLACEMENT'				=> 'Zëvendësimi HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Këtu përcaktoni zëvendësimin e parazgjedhur HTML. Mos harroni të rivendosni tokenët e përdorur më sipër!',

	'TOKEN'					=> 'Tokeni',
	'TOKENS'				=> 'Tokenët',
	'TOKENS_EXPLAIN'		=> 'Tokenët janë vendmbajtës për hyrjen e përdoruesit. Hyrja do të vërtetohet vetëm nëse përputhet me përkufizimin përkatës. Nëse është e nevojshme, mund t’i numëroni duke shtuar një numër si shenjën e fundit brenda kllapave, p.sh. {TEXT1}, {TEXT2}.<br /><br />Në zëvendësimin HTML mund të përdorni gjithashtu çdo varg gjuhësor që ndodhet në drejtorinë language/, në këtë formë: {L_<em>&lt;STRINGNAME&gt;</em>}, ku <em>&lt;STRINGNAME&gt;</em> është emri i vargut të përkthyer që dëshironi të shtoni. Për shembull, {L_WROTE} do të shfaqet si “shkroi” ose sipas përkthimit të gjuhës së përdoruesit.<br /><br /><strong>Vini re se në BBCode-et e personalizuara mund të përdoren vetëm tokenët e renditur më poshtë.</strong>',
	'TOKEN_DEFINITION'		=> 'Çfarë mund të jetë?',
	'TOO_MANY_BBCODES'		=> 'Nuk mund të krijoni BBCode të tjera. Hiqni një ose më shumë dhe provoni sërish.',

	'tokens'	=>	array(
		'TEXT'			=> 'Çdo tekst, përfshirë shkronja të huaja, numra etj.',
		'SIMPLETEXT'	=> 'Shkronja latine (A-Z), numra, hapësira, presje, pika, minus, plus, vizë dhe nënvijë',
		'INTTEXT'		=> 'Shkronja Unicode, numra, hapësira, presje, pika, minus, plus, vizë, nënvijë dhe hapësirë e bardhë.',
		'IDENTIFIER'	=> 'Shkronja latine (A-Z), numra, vizë dhe nënvijë',
		'NUMBER'		=> 'Çdo varg shifrash',
		'EMAIL'			=> 'Adresë emaili e vlefshme',
		'URL'			=> 'URL e vlefshme me çdo protokoll të lejuar (http, ftp etj.; nuk mund të përdoret për shfrytëzime javascript). Nëse mungon protokolli, shtohet “http://”.',
		'LOCAL_URL'		=> 'URL lokale, relative ndaj faqes së temës, pa emër serveri ose protokoll, sepse lidhjet parashtesohen me “%s”',
		'RELATIVE_URL'	=> 'URL relative për përputhjen e pjesëve të një URL-je. Një URL e plotë është gjithashtu relative e vlefshme; për lidhjet e forumit përdorni tokenin LOCAL_URL.',
		'COLOR'			=> 'Ngjyrë HTML, në formë numerike <samp>#FF1234</samp> ose si <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">fjalëkyç ngjyre CSS</a>, si p.sh. <samp>fuchsia</samp> ose <samp>InactiveBorder</samp>',
		'ALNUM'			=> 'Shkronja latine (A-Z) dhe numra.',
		'CHOICE'		=> 'Zgjedhje vlerash të përcaktuara, p.sh. <samp>{CHOICE=spades,hearts,diamonds,clubs}</samp>. Si parazgjedhje nuk dallohen shkronjat e mëdha; përdorni opsionin <samp>caseSensitive</samp> për t’i dalluar: <samp>{CHOICE=Spades,Hearts,Diamonds,Clubs;caseSensitive}</samp>',
		'FLOAT'			=> 'Vlerë dhjetore, p.sh. <samp>0.5</samp>.',
		'HASHMAP'		=> 'Hartëzon vargjet te zëvendësimet në formën <samp>{HASHMAP=string1:replacement1,string2:replacement2}</samp>. Dallon shkronjat e mëdha dhe ruan vlerat e panjohura.',
		'INT'			=> 'Vlerë numër i plotë, p.sh. <samp>2</samp>.',
		'IP'			=> 'Adresë e vlefshme IPv4 ose IPv6.',
		'IPPORT'		=> 'Adresë e vlefshme IPv4 ose IPv6 me numër porte.',
		'IPV4'			=> 'Adresë e vlefshme IPv4.',
		'IPV6'			=> 'Adresë e vlefshme IPv6.',
		'MAP'			=> 'Hartëzon vargjet te zëvendësimet në formën <samp>{MAP=string1:replacement1,string2:replacement2}</samp>. Nuk dallon shkronjat e mëdha dhe ruan vlerat e panjohura.',
		'RANGE'			=> 'Pranon numër të plotë në intervalin e dhënë, p.sh. <samp>{RANGE=-10,42}</samp>.',
		'REGEXP'		=> 'Vërteton vlerën sipas shprehjes së rregullt, p.sh. <samp>{REGEXP=/^foo\w+bar$/}</samp>.',
		'TIMESTAMP'		=> 'Vulë kohe si <samp>1h30m10s</samp>, që kthehet në sekonda. Pranon edhe numër.',
		'UINT'			=> 'Numër i plotë pa shenjë. Si <samp>{INT}</samp>, por refuzon vlerat nën 0.',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Nga kjo faqe mund të shtoni, hiqni dhe redaktoni ikonat që përdoruesit mund t’u shtojnë temave ose postimeve të tyre. Zakonisht këto ikona shfaqen pranë titujve të temave në listën e forumit ose pranë subjekteve të postimeve në listën e temave. Mund të instaloni dhe krijoni edhe paketa të reja ikonash.',
	'ACP_SMILIES_EXPLAIN'	=> 'Buzëqeshjet ose emotikonet janë zakonisht figura të vogla, ndonjëherë të animuara, që përdoren për të shprehur një emocion ose ndjenjë. Nga kjo faqe mund të shtoni, hiqni dhe redaktoni emotikonet që përdoruesit mund të përdorin në postimet dhe mesazhet e tyre private. Mund të instaloni dhe krijoni edhe paketa të reja buzëqeshjesh.',
	'ADD_SMILIES'			=> 'Shtoni disa emotikone',
	'ADD_SMILEY_CODE'		=> 'Shtoni kod shtesë emotikoni',
	'ADD_ICONS'				=> 'Shtoni disa ikona',
	'AFTER_ICONS'			=> 'Pas %s',
	'AFTER_SMILIES'			=> 'Pas %s',

	'CODE'						=> 'Kodi',
	'CURRENT_ICONS'				=> 'Ikonat aktuale',
	'CURRENT_ICONS_EXPLAIN'		=> 'Zgjidhni çfarë të bëhet me ikonat e instaluara.',
	'CURRENT_SMILIES'			=> 'Emotikonet aktuale',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Zgjidhni çfarë të bëhet me emotikonet e instaluara.',

	'DISPLAY_ON_POSTING'		=> 'Shfaqeni në faqen e postimit',
	'DISPLAY_POSTING'			=> 'Në faqen e postimit',
	'DISPLAY_POSTING_NO'		=> 'Jo në faqen e postimit',

	'EDIT_ICONS'				=> 'Redaktoni ikonat',
	'EDIT_SMILIES'				=> 'Redaktoni emotikonet',
	'EMOTION'					=> 'Emocioni',
	'EXPORT_ICONS'				=> 'Eksportoni dhe shkarkoni icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sKur klikoni këtë lidhje, konfigurimi i ikonave paketohet në <samp>icons.pak</samp>. Pas shkarkimit mund të përdoret për të krijuar skedar <samp>.zip</samp> ose <samp>.tgz</samp> me të gjitha ikonat dhe skedarin e konfigurimit <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Eksportoni dhe shkarkoni smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sKur klikoni këtë lidhje, konfigurimi i emotikoneve paketohet në <samp>smilies.pak</samp>. Pas shkarkimit mund të përdoret për të krijuar skedar <samp>.zip</samp> ose <samp>.tgz</samp> me të gjitha emotikonet dhe skedarin e konfigurimit <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'E para',

	'ICONS_ADD'				=> 'Shtoni ikonë të re',
	'ICONS_ADDED'			=> array(
		0	=> 'Nuk u shtua asnjë ikonë.',
		1	=> 'Ikona u shtua me sukses.',
		2	=> 'Ikonat u shtuan me sukses.',
	),
	'ICONS_CONFIG'			=> 'Konfigurimi i ikonave',
	'ICONS_DELETED'			=> 'Ikona u hoq me sukses.',
	'ICONS_EDIT'			=> 'Redaktoni ikonën',
	'ICONS_EDITED'			=> array(
		0	=> 'Nuk u përditësua asnjë ikonë.',
		1	=> 'Ikona u përditësua me sukses.',
		2	=> 'Ikonat u përditësuan me sukses.',
	),
	'ICONS_HEIGHT'			=> 'Lartësia e ikonës',
	'ICONS_IMAGE'			=> 'Figura e ikonës',
	'ICONS_IMPORTED'		=> 'Paketa e ikonave u instalua me sukses.',
	'ICONS_IMPORT_SUCCESS'	=> 'Paketa e ikonave u importua me sukses.',
	'ICONS_LOCATION'		=> 'Vendndodhja e ikonës',
	'ICONS_NOT_DISPLAYED'	=> 'Ikonat e mëposhtme nuk shfaqen në faqen e postimit',
	'ICONS_ORDER'			=> 'Renditja e ikonave',
	'ICONS_URL'				=> 'Skedari i figurës së ikonës',
	'ICONS_WIDTH'			=> 'Gjerësia e ikonës',
	'IMPORT_ICONS'			=> 'Instaloni paketën e ikonave',
	'IMPORT_SMILIES'		=> 'Instaloni paketën e emotikoneve',

	'KEEP_ALL'			=> 'Mbajini të gjitha',

	'MASS_ADD_SMILIES'	=> 'Shtoni disa emotikone',

	'NO_ICONS_ADD'		=> 'Nuk ka ikona për t’u shtuar.',
	'NO_ICONS_EDIT'		=> 'Nuk ka ikona për t’u ndryshuar.',
	'NO_ICONS_EXPORT'	=> 'Nuk keni ikona për të krijuar paketë.',
	'NO_ICONS_PAK'		=> 'Nuk u gjetën paketa ikonash.',
	'NO_SMILIES_ADD'	=> 'Nuk ka emotikone për t’u shtuar.',
	'NO_SMILIES_EDIT'	=> 'Nuk ka emotikone për t’u ndryshuar.',
	'NO_SMILIES_EXPORT'	=> 'Nuk keni emotikone për të krijuar paketë.',
	'NO_SMILIES_PAK'	=> 'Nuk u gjetën paketa emotikonesh.',

	'PAK_FILE_NOT_READABLE'		=> 'Skedari <samp>.pak</samp> nuk mund të lexohej.',

	'REPLACE_MATCHES'	=> 'Zëvendësoni përputhjet',

	'SELECT_PACKAGE'			=> 'Zgjidhni skedarin e paketës',
	'SMILIES_ADD'				=> 'Shtoni emotikon të ri',
	'SMILIES_ADDED'				=> array(
		0	=> 'Nuk u shtua asnjë emotikon.',
		1	=> 'Emotikoni u shtua me sukses.',
		2	=> 'Emotikonet u shtuan me sukses.',
	),
	'SMILIES_CODE'				=> 'Kodi i emotikonit',
	'SMILIES_CONFIG'			=> 'Konfigurimi i emotikoneve',
	'SMILIES_DELETED'			=> 'Emotikoni u hoq me sukses.',
	'SMILIES_EDIT'				=> 'Redaktoni emotikonin',
	'SMILIE_NO_CODE'			=> 'Emotikoni “%s” u shpërfill sepse nuk u vendos kod.',
	'SMILIE_NO_EMOTION'			=> 'Emotikoni “%s” u shpërfill sepse nuk u vendos emocion.',
	'SMILIE_NO_FILE'			=> 'Emotikoni “%s” u shpërfill sepse mungon skedari.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Nuk u përditësua asnjë emotikon.',
		1	=> 'Emotikoni u përditësua me sukses.',
		2	=> 'Emotikonet u përditësuan me sukses.',
	),
	'SMILIES_EMOTION'			=> 'Emocioni',
	'SMILIES_HEIGHT'			=> 'Lartësia e emotikonit',
	'SMILIES_IMAGE'				=> 'Figura e emotikonit',
	'SMILIES_IMPORTED'			=> 'Paketa e emotikoneve u instalua me sukses.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Paketa e emotikoneve u importua me sukses.',
	'SMILIES_LOCATION'			=> 'Vendndodhja e emotikonit',
	'SMILIES_NOT_DISPLAYED'		=> 'Emotikonet e mëposhtme nuk shfaqen në faqen e postimit',
	'SMILIES_ORDER'				=> 'Renditja e emotikoneve',
	'SMILIES_URL'				=> 'Skedari i figurës së emotikonit',
	'SMILIES_WIDTH'				=> 'Gjerësia e emotikonit',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'U arrit kufiri prej %d emotikoni.',
		2	=> 'U arrit kufiri prej %d emotikonesh.',
	),

	'WRONG_PAK_TYPE'	=> 'Paketa e përcaktuar nuk përmban të dhënat e duhura.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Nga ky panel kontrolli mund të shtoni, redaktoni dhe hiqni fjalët që do të censurohen automatikisht në forumet tuaja. Njerëzit lejohen ende të regjistrohen me emra përdoruesi që i përmbajnë këto fjalë. Në fushën e fjalës pranohen shenjat universale (*); p.sh. *test* përputhet me detestable, test* me testing dhe *test me detest.',
	'ADD_WORD'				=> 'Shtoni fjalë të re',

	'EDIT_WORD'		=> 'Redaktoni censurimin e fjalës',
	'ENTER_WORD'	=> 'Duhet të vendosni një fjalë dhe zëvendësimin e saj.',

	'NO_WORD'	=> 'Nuk u zgjodh fjalë për redaktim.',

	'REPLACEMENT'	=> 'Zëvendësimi',

	'UPDATE_WORD'	=> 'Përditësoni censurimin',

	'WORD'				=> 'Fjala',
	'WORD_ADDED'		=> 'Censurimi i fjalës u shtua me sukses.',
	'WORD_REMOVED'		=> 'Censurimi i zgjedhur u hoq me sukses.',
	'WORD_UPDATED'		=> 'Censurimi i zgjedhur u përditësua me sukses.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Me këtë formular mund të shtoni, redaktoni, shihni dhe fshini rangje, si edhe të krijoni rangje të posaçme për përdoruesit.',
	'ADD_RANK'				=> 'Shtoni rang të ri',

	'MUST_SELECT_RANK'		=> 'Duhet të zgjidhni një rang.',

	'NO_ASSIGNED_RANK'		=> 'Nuk është caktuar rang i posaçëm.',
	'NO_RANK_TITLE'			=> 'Nuk keni përcaktuar titull për rangun.',
	'NO_UPDATE_RANKS'		=> 'Rangu u fshi me sukses, por llogaritë që e përdornin nuk u përditësuan. Duhet ta rivendosni rangun manualisht në këto llogari.',

	'RANK_ADDED'			=> 'Rangu u shtua me sukses.',
	'RANK_IMAGE'			=> 'Figura e rangut',
	'RANK_IMAGE_EXPLAIN'	=> 'Përcakton një figurë të vogël për rangun. Shtegu është relativ ndaj dosjes rrënjë të phpBB-së.',
	'RANK_IMAGE_IN_USE'		=> '(Në përdorim)',
	'RANK_MINIMUM'			=> 'Postimet minimale',
	'RANK_REMOVED'			=> 'Rangu u fshi me sukses.',
	'RANK_SPECIAL'			=> 'Caktojeni si rang të posaçëm',
	'RANK_TITLE'			=> 'Titulli i rangut',
	'RANK_UPDATED'			=> 'Rangu u përditësua me sukses.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Këtu kontrolloni emrat e përdoruesve që nuk lejohen. Emrat e palejuar mund të përmbajnë shenjën universale *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Mund ta ndaloni një emër duke përdorur * për përputhje me çdo shenjë.',
	'ADD_DISALLOW_TITLE'	=> 'Shtoni emër të palejuar',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Për ta hequr një emër të palejuar, zgjidheni nga lista dhe dorëzojeni.',
	'DELETE_DISALLOW_TITLE'		=> 'Hiqni emër të palejuar',
	'DISALLOWED_ALREADY'		=> 'Emri i vendosur është tashmë i palejuar.',
	'DISALLOWED_DELETED'		=> 'Emri i palejuar u hoq me sukses.',
	'DISALLOW_SUCCESSFUL'		=> 'Emri i palejuar u shtua me sukses.',

	'NO_DISALLOWED'				=> 'Nuk ka emra të palejuar',
	'NO_USERNAME_SPECIFIED'		=> 'Nuk keni zgjedhur ose vendosur emër përdoruesi.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Këtu menaxhoni arsyet e përdorura në raportime dhe në mesazhet e refuzimit të postimeve. Një arsye e parazgjedhur (e shënuar me *) nuk mund të hiqet dhe përdoret për mesazhe të personalizuara kur asnjë arsye tjetër nuk përshtatet.',
	'ADD_NEW_REASON'		=> 'Shtoni arsye të re',
	'AVAILABLE_TITLES'		=> 'Titujt e përkthyer të disponueshëm',

	'IS_NOT_TRANSLATED'			=> 'Arsyeja <strong>nuk</strong> është përkthyer.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Arsyeja <strong>nuk</strong> është përkthyer. Për formën e përkthyer, përcaktoni çelësin e saktë nga pjesa e arsyeve të raportimit në skedarët gjuhësorë.',
	'IS_TRANSLATED'				=> 'Arsyeja është përkthyer.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Arsyeja është përkthyer. Nëse titulli gjendet te arsyet e raportimit në skedarët gjuhësorë, përdoret titulli dhe përshkrimi i përkthyer.',

	'NO_REASON'					=> 'Arsyeja nuk u gjet.',
	'NO_REASON_INFO'			=> 'Duhet të përcaktoni titull dhe përshkrim për këtë arsye.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Arsyeja e parazgjedhur “Tjetër” nuk mund të hiqet.',

	'REASON_ADD'				=> 'Shtoni arsye raportimi/refuzimi',
	'REASON_ADDED'				=> 'Arsyeja e raportimit/refuzimit u shtua me sukses.',
	'REASON_ALREADY_EXIST'		=> 'Një arsye me këtë titull ekziston tashmë; vendosni titull tjetër.',
	'REASON_DESCRIPTION'		=> 'Përshkrimi i arsyes',
	'REASON_DESC_TRANSLATED'	=> 'Përshkrimi që shfaqet',
	'REASON_EDIT'				=> 'Redaktoni arsyen e raportimit/refuzimit',
	'REASON_EDIT_EXPLAIN'		=> 'Këtu mund të shtoni ose redaktoni një arsye. Nëse është përkthyer, përdoret versioni i përkthyer në vend të përshkrimit këtu.',
	'REASON_REMOVED'			=> 'Arsyeja u hoq me sukses.',
	'REASON_TITLE'				=> 'Titulli i arsyes',
	'REASON_TITLE_TRANSLATED'	=> 'Titulli që shfaqet',
	'REASON_UPDATED'			=> 'Arsyeja u përditësua me sukses.',

	'USED_IN_REPORTS'		=> 'Përdoret në raportime',
));
