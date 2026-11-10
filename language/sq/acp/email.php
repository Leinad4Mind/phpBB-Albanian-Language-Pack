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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Këtu mund t’u dërgoni një mesazh me email të gjithë përdoruesve ose të gjithë përdoruesve të një grupi të caktuar <strong>që kanë aktivizuar marrjen e emaileve masive</strong>. Për këtë qëllim, emaili do të dërgohet në adresën administrative të dhënë, ndërsa të gjithë marrësit do të vendosen në kopje të fshehtë. Si parazgjedhje përfshihen vetëm 20 marrës në një email; për më shumë marrës do të dërgohen emaile shtesë. Nëse po i dërgoni email një grupi të madh, prisni me durim pas dorëzimit dhe mos e ndërprisni faqen në mes të procesit. Është normale që dërgimi masiv të zgjasë; do të njoftoheni kur skripti të ketë përfunduar.',
	'ALL_USERS'						=> 'Të gjithë përdoruesit',

	'COMPOSE'				=> 'Hartoni',

	'EMAIL_SEND_ERROR'		=> 'Ndodhën një ose më shumë gabime gjatë dërgimit të emailit. Kontrolloni %sregjistrin e gabimeve%s për mesazhe të hollësishme.',
	'EMAIL_SENT'			=> 'Ky mesazh u dërgua.',
	'EMAIL_SENT_QUEUE'		=> 'Ky mesazh u vendos në radhë për dërgim.',

	'LOG_SESSION'			=> 'Regjistrojeni sesionin e postës në regjistrin kritik',

	'SEND_IMMEDIATELY'		=> 'Dërgojeni menjëherë',
	'SEND_TO_GROUP'			=> 'Dërgojani grupit',
	'SEND_TO_USERS'			=> 'Dërgojuani përdoruesve',
	'SEND_TO_USERS_EXPLAIN'	=> 'Emrat e vendosur këtu do të anashkalojnë çdo grup të zgjedhur më sipër. Vendoseni secilin emër përdoruesi në një rresht të ri.',

	'MAIL_BANNED'			=> 'Dërgojuani përdoruesve të ndaluar',
	'MAIL_BANNED_EXPLAIN'	=> 'Kur dërgoni një email masiv një grupi, këtu mund të zgjidhni nëse emailin do ta marrin edhe përdoruesit e ndaluar.',
	'MAIL_HIGH_PRIORITY'	=> 'I lartë',
	'MAIL_LOW_PRIORITY'		=> 'I ulët',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Përparësia e emailit',
	'MASS_MESSAGE'			=> 'Mesazhi juaj',
	'MASS_MESSAGE_EXPLAIN'	=> 'Kini parasysh se mund të vendosni vetëm tekst të thjeshtë. Çdo shenjim do të hiqet para dërgimit.',

	'NO_EMAIL_MESSAGE'		=> 'Duhet të vendosni një mesazh.',
	'NO_EMAIL_SUBJECT'		=> 'Duhet të përcaktoni një subjekt për mesazhin.',
));
