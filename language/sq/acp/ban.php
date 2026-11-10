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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 orë',
	'30_MINS'		=> '30 minuta',
	'6_HOURS'		=> '6 orë',

	'ACP_BAN_EXPLAIN'	=> 'Këtu mund të kontrolloni ndalimin e përdoruesve sipas emrit, IP-së ose adresës së emailit. Këto metoda ia ndalojnë përdoruesit hyrjen në çdo pjesë të forumit. Nëse dëshironi, mund të jepni një arsye të shkurtër (maksimumi 3000 shenja) për ndalimin; ajo do të shfaqet në regjistrin e administratorit. Mund të përcaktohet edhe kohëzgjatja. Nëse dëshironi që ndalimi të përfundojë në një datë të caktuar, zgjidhni <span style="text-decoration: underline;">Deri më -&gt;</span> dhe vendosni një datë në formatin <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Përjashtoni nga ndalimi',
	'BAN_LENGTH'			=> 'Kohëzgjatja e ndalimit',
	'BAN_REASON'			=> 'Arsyeja e ndalimit',
	'BAN_GIVE_REASON'		=> 'Arsyeja që i shfaqet të ndaluarit',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Lista e ndalimeve u përditësua me sukses.',
	'BANNED_UNTIL_DATE'		=> 'deri më %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (deri më %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Ndaloni një ose më shumë adresa emaili',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Aktivizojeni për ta përjashtuar adresën e vendosur nga të gjitha ndalimet aktuale.',
	'EMAIL_BAN_EXPLAIN'			=> 'Për të përcaktuar disa adresa emaili, vendoseni secilën në rresht të ri. Për përputhje të pjesshme përdorni * si shenjë universale, p.sh. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp> etj.',
	'EMAIL_NO_BANNED'			=> 'Nuk ka adresa emaili të ndaluara',
	'EMAIL_UNBAN'				=> 'Hiqni ndalimin ose përjashtimin e emaileve',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Mund t’ua hiqni njëherësh ndalimin (ose përjashtimin) disa adresave duke përdorur kombinimin e duhur të miut dhe tastierës. Adresat e përjashtuara janë të theksuara.',

	'IP_BAN'					=> 'Ndaloni një ose më shumë IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Aktivizojeni për ta përjashtuar IP-në e vendosur nga të gjitha ndalimet aktuale.',
	'IP_BAN_EXPLAIN'			=> 'Për të përcaktuar disa IP ose emra hosti, vendoseni secilin në rresht të ri. Për një interval IP-sh, ndajeni fillimin dhe fundin me vizë (-); për shenjë universale përdorni “*”.',
	'IP_HOSTNAME'				=> 'Adresa IP ose emra hosti',
	'IP_NO_BANNED'				=> 'Nuk ka adresa IP të ndaluara',
	'IP_UNBAN'					=> 'Hiqni ndalimin ose përjashtimin e IP-ve',
	'IP_UNBAN_EXPLAIN'			=> 'Mund t’ua hiqni njëherësh ndalimin (ose përjashtimin) disa adresave IP duke përdorur kombinimin e duhur të miut dhe tastierës. IP-të e përjashtuara janë të theksuara.',

	'LENGTH_BAN_INVALID'		=> 'Data duhet të jetë në formatin <kbd>YYYY-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Të ndaluar',
	'OPTIONS_EXCLUDED'			=> 'Të përjashtuar',

	'PERMANENT'		=> 'I përhershëm',

	'UNTIL'						=> 'Deri më',
	'USER_BAN'					=> 'Ndaloni një ose më shumë përdorues sipas emrit',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Aktivizojeni për t’i përjashtuar përdoruesit e vendosur nga të gjitha ndalimet aktuale.',
	'USER_BAN_EXPLAIN'			=> 'Mund të ndaloni disa përdorues njëherësh duke vendosur secilin emër në rresht të ri. Përdorni funksionin <span style="text-decoration: underline;">Gjeni një anëtar</span> për të kërkuar dhe shtuar automatikisht një ose më shumë përdorues.',
	'USER_NO_BANNED'			=> 'Nuk ka emra përdoruesish të ndaluar',
	'USER_UNBAN'				=> 'Hiqni ndalimin ose përjashtimin sipas emrit',
	'USER_UNBAN_EXPLAIN'		=> 'Mund t’ua hiqni njëherësh ndalimin (ose përjashtimin) disa përdoruesve duke përdorur kombinimin e duhur të miut dhe tastierës. Përdoruesit e përjashtuar janë të theksuar.',
));
