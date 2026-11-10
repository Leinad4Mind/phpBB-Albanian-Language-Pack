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
	'ADD_ATTACHMENT'			=> 'Ngarko bashkëngjitjen',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Nëse dëshironi të bashkëngjitni një ose më shumë skedarë, shkruani detajet më poshtë.',
	'ADD_FILE'					=> 'Shtoni skedarin',
	'ADD_POLL'					=> 'Krijimi i sondazhit',
	'ADD_POLL_EXPLAIN'			=> 'Nëse nuk dëshironi të shtoni një sondazh në temën tuaj, lini fushat bosh.',
	'ALREADY_DELETED'			=> 'Na vjen keq por ky mesazh është fshirë tashmë.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'Komenti i bashkëngjitjes përmban karaktere të ndaluara (Emoji).',
	'ATTACH_DISK_FULL'			=> 'Nuk ka hapësirë të mjaftueshme të lirë në disk për të postuar këtë bashkëngjitje.',
	'ATTACH_QUOTA_REACHED'		=> 'Na vjen keq, kuota e bashkëngjitjes së bordit është arritur.',
	'ATTACH_SIG'				=> 'Bashkangjit një nënshkrim (nënshkrimet mund të ndryshohen nëpërmjet UCP)',

	'BBCODE_A_HELP'				=> 'Bashkëngjitja e ngarkuar në linjë: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Teksti me shkronja të zeza: [b]tekst[/b]',
	'BBCODE_C_HELP'				=> 'Shfaqja e kodit: [code]kodi[/code]',
	'BBCODE_D_HELP'				=> 'Blic: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Madhësia e shkronjave: [size=85] tekst i vogël[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s është <em>OFF</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s është <em>ON</em>',
	'BBCODE_I_HELP'				=> 'Teksti kursive: [i]teksti[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list][*]teksti[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Artikulli i listës: [*]tekst',
	'BBCODE_O_HELP'				=> 'Lista e renditur: p.sh. [list=1][*]Pika e parë[/list] ose [list=a][*]Pika a[/list]',
	'BBCODE_P_HELP'				=> 'Fut imazhin: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Teksti i citimit: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Ngjyra e shkronjave: [color=red]text[/color] ose [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'				=> 'Nënvizoni tekstin: [u]teksti[/u]',
	'BBCODE_W_HELP'				=> 'Fut URL: [url]http://url[/url] ose [url=http://url]URL tekst[/url]',
	'BBCODE_Y_HELP'				=> 'Lista: Shtoni elementin e listës',
	'BUMP_ERROR'				=> 'Ju nuk mund ta përplasni këtë temë kaq shpejt pas postimit të fundit.',

	'CANNOT_DELETE_REPLIED'		=> 'Na vjen keq, por ju mund të fshini vetëm postimet të cilave nuk ju është përgjigjur.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Ky postim është mbyllur. Nuk mund ta modifikoni më atë postim.',
	'CANNOT_EDIT_TIME'			=> 'Nuk mund ta modifikoni apo fshini më atë postim.',
	'CANNOT_POST_ANNOUNCE'		=> 'Na vjen keq por nuk mund të postoni njoftime.',
	'CANNOT_POST_STICKY'		=> 'Na vjen keq, por nuk mund të postoni tema ngjitëse.',
	'CHANGE_TOPIC_TO'			=> 'Ndrysho llojin e temës në',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Mesazhi juaj përmban karakterin %1$d.',
		2	=> 'Mesazhi juaj përmban karaktere %1$d.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Nënshkrimi juaj përmban karakterin %1$d.',
		2	=> 'Nënshkrimi juaj përmban karaktere %1$d.',
	),
	'CLOSE_TAGS'				=> 'Mbyll etiketat',
	'CURRENT_TOPIC'				=> 'Tema aktuale',

	'DELETE_FILE'				=> 'Fshi skedarin',
	'DELETE_MESSAGE'			=> 'Fshi mesazhin',
	'DELETE_MESSAGE_CONFIRM'	=> 'Jeni i sigurt që dëshironi ta fshini këtë mesazh?',
	'DELETE_OWN_POSTS'			=> 'Na vjen keq, por ju mund të fshini vetëm postimet tuaja.',
	'DELETE_PERMANENTLY'		=> 'Fshije përgjithmonë',
	'DELETE_POST_CONFIRM'		=> 'Jeni i sigurt që dëshironi ta fshini këtë postim?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Jeni të sigurt që dëshironi ta fshini <strong>përgjithmonë</strong> këtë postim?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Fshije përgjithmonë këtë postim që të mos mund të rikuperohet',
		2	=> 'Fshini përgjithmonë postimet e %1$d në mënyrë që ato të mos mund të rikuperohen',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Jeni i sigurt që dëshironi t\'i fshini këto postime?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Jeni të sigurt që dëshironi të fshini <strong> në mënyrë të përhershme</strong> këto postime?',
	'DELETE_REASON'				=> 'Arsyeja e fshirjes',
	'DELETE_REASON_EXPLAIN'		=> 'Arsyeja e specifikuar e fshirjes do të jetë e dukshme për moderatorët.',
	'DELETE_POST_WARN'			=> 'Fshije këtë postim',
	'DELETE_TOPIC_CONFIRM'		=> 'Jeni i sigurt që dëshironi ta fshini këtë temë?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Fshije përgjithmonë këtë temë që të mos mund të rikuperohet',
		2	=> 'Fshini përgjithmonë temat %1$d në mënyrë që ato të mos mund të rikuperohen',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Jeni të sigurt që dëshironi të fshini <strong> në mënyrë të përhershme</strong> këtë temë?',
	'DELETE_TOPICS_CONFIRM'		=> 'Jeni i sigurt që dëshironi t\'i fshini këto tema?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Jeni të sigurt që dëshironi të fshini <strong> në mënyrë të përhershme</strong> këto tema?',
	'DISABLE_BBCODE'			=> 'Çaktivizo BBCode',
	'DISABLE_MAGIC_URL'			=> 'Mos i analizoni automatikisht URL-të',
	'DISABLE_SMILIES'			=> 'Çaktivizo buzëqeshjet',
	'DISALLOWED_CONTENT'		=> 'Ngarkimi u refuzua sepse skedari i ngarkuar u identifikua si një vektor i mundshëm sulmi.',
	'DISALLOWED_EXTENSION'		=> 'Shtesa %s nuk lejohet.',
	'DRAFT_LOADED'				=> 'Drafti i ngarkuar në zonën e postimit, mund të dëshironi ta përfundoni postimin tuaj tani.<br />Drafti juaj do të fshihet pas dorëzimit të këtij postimi.',
	'DRAFT_LOADED_PM'			=> 'Drafti i ngarkuar në zonën e mesazheve, mund të dëshironi të përfundoni mesazhin tuaj privat tani.<br />Drafti juaj do të fshihet pas dorëzimit të këtij mesazhi privat.',
	'DRAFT_SAVED'				=> 'Drafti u ruajt me sukses.',
	'DRAFT_TITLE'				=> 'Titulli i draftit',

	'EDIT_REASON'				=> 'Arsyeja e redaktimit të këtij postimi',
	'EMPTY_FILEUPLOAD'			=> 'Skedari i ngarkuar është bosh.',
	'EMPTY_MESSAGE'				=> 'Ju duhet të shkruani një mesazh kur postoni.',
	'EMPTY_REMOTE_DATA'			=> 'Skedari nuk mund të ngarkohej, ju lutemi provoni ta ngarkoni skedarin me dorë.',

	'FLASH_IS_OFF'				=> '[flash] është <em>OFF</em>',
	'FLASH_IS_ON'				=> '[flash] është <em>ON</em>',
	'FLOOD_ERROR'				=> 'Nuk mund të bësh një postim tjetër kaq shpejt pas të fundit.',
	'FONT_COLOR'				=> 'Ngjyra e shkronjave',
	'FONT_COLOR_HIDE'			=> 'Fshih ngjyrën e shkronjave',
	'FONT_HUGE'					=> 'I madh',
	'FONT_LARGE'				=> 'I madh',
	'FONT_NORMAL'				=> 'Normale',
	'FONT_SIZE'					=> 'Madhësia e shkronjave',
	'FONT_SMALL'				=> 'I vogël',
	'FONT_TINY'					=> 'I vogel',

	'GENERAL_UPLOAD_ERROR'		=> 'Nuk mund të ngarkohej bashkëngjitja në %s.',

	'IMAGES_ARE_OFF'			=> '[img] është <em>OFF</em>',
	'IMAGES_ARE_ON'				=> '[img] është <em>ON</em>',
	'INVALID_FILENAME'			=> '%s është një emër skedari i pavlefshëm.',

	'LOAD'						=> 'Ngarkoni',
	'LOAD_DRAFT'				=> 'Ngarko draftin',
	'LOAD_DRAFT_EXPLAIN'		=> 'Këtu mund të zgjidhni draftin që dëshironi të vazhdoni të shkruani. Postimi juaj aktual do të anulohet, e gjithë përmbajtja aktuale e postimit do të fshihet. Shikoni, modifikoni dhe fshini draftet brenda Panelit të Kontrollit të Përdoruesit.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Ju duhet të identifikoheni në mënyrë që të përplasni temat brenda këtij forumi.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Ju duhet të identifikoheni për të fshirë postimet brenda këtij forumi.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'Ju duhet të identifikoheni për të fshirë postimet brenda këtij forumi.',
	'LOGIN_EXPLAIN_POST'		=> 'Ju duhet të identifikoheni për të postuar në këtë forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Ju duhet të identifikoheni për të cituar postime brenda këtij forumi.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Ju duhet të identifikoheni për t\'iu përgjigjur temave brenda këtij forumi.',

	'MAX_ATTACHMENT_FILESIZE'	=> 'Madhësia maksimale e skedarit për bashkëngjitje: %s.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Mund të përdorni vetëm shkronja deri në madhësinë %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Skedarët tuaj flash mund të kenë vetëm lartësi deri në %d piksel.',
		2	=> 'Skedarët tuaj flash mund të jenë vetëm deri në %d pikselë të lartë.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Skedarët tuaj flash mund të kenë gjerësi vetëm deri në %d piksel.',
		2	=> 'Skedarët tuaj flash mund të jenë vetëm deri në %d pikselë të gjerë.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Imazhet tuaja mund të jenë vetëm deri në %1$d lartësi pixel.',
		2	=> 'Imazhet tuaja mund të jenë vetëm deri në %1$d piksele të larta.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Imazhet tuaja mund të kenë gjerësi vetëm deri në %d piksel.',
		2	=> 'Imazhet tuaja mund të jenë vetëm deri në %d pikselë të gjerë.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Shkruani mesazhin tuaj këtu, ai mund të përmbajë jo më shumë se karakter <strong>%d</strong>.',
		2	=> 'Shkruani mesazhin tuaj këtu, ai mund të përmbajë jo më shumë se karaktere <strong>%d</strong>.',
	),
	'MESSAGE_DELETED'			=> 'Ky mesazh është fshirë me sukses.',
	'MORE_SMILIES'				=> 'Shikoni më shumë buzëqeshje',

	'NOTIFY_REPLY'				=> 'Më njoftoni kur të postohet një përgjigje',
	'NOT_UPLOADED'				=> 'Skedari nuk mund të ngarkohej.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nuk mund të fshish opsionet ekzistuese të sondazhit.',
	'NO_PM_ICON'				=> 'Nuk ka ikonë PM',
	'NO_POLL_TITLE'				=> 'Ju duhet të shkruani një titull sondazhi.',
	'NO_POST'					=> 'Postimi i kërkuar nuk ekziston.',
	'NO_POST_MODE'				=> 'Asnjë modalitet postimi nuk është specifikuar.',
	'NO_TEMP_DIR'				=> 'Dosja e përkohshme nuk mund të gjendej ose nuk mund të shkruhej.',

	'PARTIAL_UPLOAD'			=> 'Skedari i ngarkuar u ngarkua vetëm pjesërisht.',
	'PHP_UPLOAD_STOPPED'		=> 'Një shtesë PHP ka ndaluar ngarkimin e skedarit.',
	'PHP_SIZE_NA'				=> 'Madhësia e skedarit të bashkëngjitjes është shumë e madhe.<br />Nuk mund të përcaktojë madhësinë maksimale të përcaktuar nga PHP në php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Madhësia e skedarit të bashkëngjitjes është shumë e madhe, madhësia maksimale e ngarkimit është %1$d %2$s.<br />Ju lutemi, vini re se kjo është vendosur në php.ini dhe nuk mund të anashkalohet.',
	'PLACE_INLINE'				=> 'Vendi në linjë',
	'POLL_DELETE'				=> 'Fshi sondazhin',
	'POLL_FOR'					=> 'Drejtoni sondazhin për',
	'POLL_FOR_EXPLAIN'			=> 'Shkruani 0 për një sondazh pa fund.',
	'POLL_MAX_OPTIONS'			=> 'Opsionet për përdorues',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Ky është numri i opsioneve që çdo përdorues mund të zgjedhë kur voton.',
	'POLL_OPTIONS'				=> 'Opsionet e sondazhit',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Vendosni çdo opsion në një rresht të ri. Mund të futni opsionin <strong>%d</strong>.',
		2	=> 'Vendosni çdo opsion në një rresht të ri. Mund të futni deri në opsione <strong>%d</strong>.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Vendosni çdo opsion në një rresht të ri. Mund të futni opsionin <strong>%d</strong>. Nëse hiqni ose shtoni opsione, të gjitha votat e mëparshme do të rivendosen.',
		2	=> 'Vendosni çdo opsion në një rresht të ri. Mund të futni deri në opsione <strong>%d</strong>. Nëse hiqni ose shtoni opsione, të gjitha votat e mëparshme do të rivendosen.',
	),
	'POLL_QUESTION'				=> 'Pyetja e sondazhit',
	'POLL_TITLE_TOO_LONG'		=> 'Titulli i sondazhit duhet të përmbajë më pak se 100 karaktere.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Madhësia e analizuar e titullit të sondazhit tuaj është shumë e madhe, merrni parasysh heqjen e kodeve të BBC-së ose të buzëqeshjeve.',
	'POLL_VOTE_CHANGE'			=> 'Lejo rivotimin',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Nëse përdoruesit e aktivizuar janë në gjendje të ndryshojnë votën e tyre.',
	'POSTED_ATTACHMENTS'		=> 'Shtojcat e postuara',
	'POST_APPROVAL_NOTIFY'		=> 'Ju do të njoftoheni kur postimi juaj të jetë miratuar.',
	'POST_CONFIRMATION'			=> 'Konfirmimi i postimit',
	'POST_CONFIRM_EXPLAIN'		=> 'Për të parandaluar postimet e automatizuara, bordi kërkon që ju të vendosni një kod konfirmimi. Kodi shfaqet në imazhin që duhet të shihni më poshtë. Nëse jeni me shikim të dëmtuar ose nuk mund ta lexoni ndryshe këtë kod, ju lutemi kontaktoni Administratorin e Bordit %s%s.',
	'POST_DELETED'				=> 'Ky postim është fshirë me sukses.',
	'POST_EDITED'				=> 'Ky postim është redaktuar me sukses.',
	'POST_EDITED_MOD'			=> 'Ky postim është redaktuar me sukses, por do të duhet të miratohet nga një moderator përpara se të shihet publikisht.',
	'POST_GLOBAL'				=> 'globale',
	'POST_ICON'					=> 'Ikona e postimit',
	'POST_NORMAL'				=> 'Normale',
	'POST_REVIEW'				=> 'Posto rishikimin',
	'POST_REVIEW_EDIT'			=> 'Posto rishikimin',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Ky postim është ndryshuar nga një përdorues tjetër ndërsa ju po e redaktoni. Ju mund të dëshironi të rishikoni versionin aktual të këtij postimi dhe të rregulloni modifikimet tuaja.',
	'POST_REVIEW_EXPLAIN'		=> 'Të paktën një postim i ri është bërë në këtë temë. Ju mund të dëshironi të rishikoni postimin tuaj në dritën e kësaj.',
	'POST_STORED'				=> 'Ky mesazh është postuar me sukses.',
	'POST_STORED_MOD'			=> 'Ky mesazh është dërguar me sukses, por do të duhet të miratohet nga një moderator përpara se të shihet publikisht.',
	'POST_TOPIC_AS'				=> 'Postoni temën si',
	'PROGRESS_BAR'				=> 'Shiriti i progresit',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Ju mund të futni vetëm kuotën e %d brenda njëri-tjetrit.',
		2	=> 'Ju mund të futni vetëm citate %d brenda njëri-tjetrit.',
	),
	'QUOTE_NO_NESTING'			=> 'Ju nuk mund të futni citate brenda njëri-tjetrit.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Skedari i specifikuar nuk mund të ngarkohej sepse kërkesa përfundoi.',
	'SAVE'						=> 'Ruaj',
	'SAVE_DATE'					=> 'Ruajtur në',
	'SAVE_DRAFT'				=> 'Ruaj draftin',
	'SAVE_DRAFT_CONFIRM'		=> 'Ju lutemi vini re se draftet e ruajtura përfshijnë vetëm temën dhe mesazhin, çdo element tjetër do të hiqet. Dëshiron ta ruash draftin tënd tani?',
	'SMILIES'					=> 'Emotikone',
	'SMILIES_ARE_OFF'			=> 'Smilies janë <em>OFF</em>',
	'SMILIES_ARE_ON'			=> 'Smilies janë <em>ON</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Ngjitës/Njoftim/Afat kohor global',
	'STICK_TOPIC_FOR'			=> 'Ngjit temën për',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Futni 0 për një Sticky/Njoftim/Global pa fund. Ju lutemi vini re se ky numër është në lidhje me datën e postimit.',
	'STYLES_TIP'				=> 'Këshillë: Stilet mund të aplikohen shpejt në tekstin e zgjedhur.',

	'TOO_FEW_CHARS'				=> 'Mesazhi juaj përmban shumë pak karaktere.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Duhet të futni të paktën karakterin %1$d.',
		2	=> 'Duhet të futni të paktën karaktere %1$d.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Duhet të futni të paktën dy opsione sondazhi.',
	'TOO_MANY_ATTACHMENTS'		=> 'Nuk mund të shtohet një bashkëngjitje tjetër, %d është maksimumi.',
	'TOO_MANY_CHARS'			=> 'Mesazhi juaj përmban shumë karaktere.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Numri maksimal i karaktereve të lejuara është %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Jeni përpjekur të futni shumë opsione sondazhi.',
	'TOO_MANY_SMILIES'			=> 'Mesazhi juaj përmban shumë buzëqeshje. Numri maksimal i lejuar i buzëqeshjeve është %d.',
	'TOO_MANY_URLS'				=> 'Mesazhi juaj përmban shumë URL. Numri maksimal i URL-ve i lejuar është %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Nuk mund të specifikoni më shumë opsione për përdorues sesa opsionet ekzistuese të sondazhit.',
	'TOPIC_BUMPED'				=> 'Tema është goditur me sukses.',

	'UNAUTHORISED_BBCODE'		=> 'Ju nuk mund të përdorni kode të caktuara BBC: %s.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Mesazhi juaj përmban karakteret e mëposhtme të pambështetura:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Subjekti juaj përmban karakteret e mëposhtme të pambështetura:<br />%s',
	'UPDATE_COMMENT'			=> 'Përditëso komentin',
	'URL_INVALID'				=> 'URL që specifikuat është i pavlefshëm.',
	'URL_NOT_FOUND'				=> 'Skedari i specifikuar nuk mund të gjendej.',
	'URL_IS_OFF'				=> '[url] është <em>OFF</em>',
	'URL_IS_ON'					=> '[url] është <em>ON</em>',
	'USER_CANNOT_BUMP'			=> 'Ju nuk mund t\'i bashkoni temat në këtë forum.',
	'USER_CANNOT_DELETE'		=> 'Ju nuk mund të fshini postimet në këtë forum.',
	'USER_CANNOT_EDIT'			=> 'Ju nuk mund të modifikoni postimet në këtë forum.',
	'USER_CANNOT_REPLY'			=> 'Ju nuk mund të përgjigjeni në këtë forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Ju nuk jeni në gjendje të bëni operacione postimi në këtë forum për shkak se lloji i forumit nuk e mbështet atë.',

	'VIEW_MESSAGE'				=> '%sShikoni mesazhin tuaj të dorëzuar%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sShikoni mesazhin tuaj privat të dërguar%s',

	'WRONG_FILESIZE'			=> 'Skedari është shumë i madh, madhësia maksimale e lejuar është %1$d %2$s.',
	'WRONG_SIZE'				=> 'Imazhi duhet të jetë së paku %1$s i gjerë, %2$s i lartë dhe maksimumi %3$s i gjerë dhe %4$s i lartë. Imazhi i dorëzuar është %5$s i gjerë dhe %6$s i lartë.',
));
