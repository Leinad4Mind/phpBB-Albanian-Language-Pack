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
	'ALREADY_DEFAULT_GROUP'		=> 'Grupi i zgjedhur është tashmë grupi juaj i paracaktuar.',
	'ALREADY_IN_GROUP'			=> 'Ju jeni tashmë një anëtar i grupit të zgjedhur.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ju tashmë keni kërkuar t\'i bashkoheni grupit të zgjedhur.',

	'CANNOT_JOIN_GROUP'			=> 'Ju nuk mund të bashkoheni në këtë grup. Ju mund të bashkoheni vetëm në grupe të hapura dhe të hapura lirisht.',
	'CANNOT_RESIGN_GROUP'		=> 'Ju nuk mund të hiqni dorë nga ky grup. Ju mund të hiqni dorë vetëm nga grupet e hapura dhe të hapura lirisht.',
	'CHANGED_DEFAULT_GROUP'		=> 'Grupi i paracaktuar u ndryshua me sukses.',

	'GROUP_AVATAR'						=> 'Avatari i grupit',
	'GROUP_CHANGE_DEFAULT'				=> 'Jeni i sigurt që dëshironi të ndryshoni anëtarësimin tuaj të paracaktuar në grupin "%s"?',
	'GROUP_CLOSED'						=> 'Mbyllur',
	'GROUP_DESC'						=> 'Përshkrimi i grupit',
	'GROUP_HIDDEN'						=> 'I fshehur',
	'GROUP_INFORMATION'					=> 'Informacioni i grupit të përdoruesve',
	'GROUP_IS_CLOSED'					=> 'Ky është një grup i mbyllur, anëtarët e rinj mund të bashkohen vetëm me ftesë të një drejtuesi grupi.',
	'GROUP_IS_FREE'						=> 'Ky është një grup i hapur lirisht, të gjithë anëtarët e rinj janë të mirëpritur.',
	'GROUP_IS_HIDDEN'					=> 'Ky është një grup i fshehur, vetëm anëtarët e këtij grupi mund ta shikojnë anëtarësimin e tij.',
	'GROUP_IS_OPEN'						=> 'Ky është një grup i hapur, anëtarët mund të aplikojnë për t\'u bashkuar.',
	'GROUP_IS_SPECIAL'					=> 'Ky është një grup i veçantë, grupet e veçanta menaxhohen nga administratorët e bordit.',
	'GROUP_JOIN'						=> 'Bashkohu në grup',
	'GROUP_JOIN_CONFIRM'				=> 'Jeni i sigurt që dëshironi t\'i bashkoheni grupit të zgjedhur?',
	'GROUP_JOIN_PENDING'				=> 'Kërkesë për t\'u bashkuar me grupin',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Jeni i sigurt që dëshironi të kërkoni t\'i bashkoheni grupit të zgjedhur?',
	'GROUP_JOINED'						=> 'U bashkua me sukses në grupin e zgjedhur.',
	'GROUP_JOINED_PENDING'				=> 'U kërkua me sukses anëtarësimi në grup. Ju lutemi prisni që një drejtues grupi të miratojë anëtarësimin tuaj.',
	'GROUP_LIST'						=> 'Menaxho përdoruesit',
	'GROUP_MEMBERS'						=> 'Anëtarët e grupit',
	'GROUP_NAME'						=> 'Emri i grupit',
	'GROUP_OPEN'						=> 'Hapur',
	'GROUP_RANK'						=> 'Renditja në grup',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Hiq dorë nga anëtarësia në grup',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Jeni i sigurt që dëshironi të hiqni dorë nga anëtarësimi juaj nga grupi i zgjedhur?',
	'GROUP_RESIGN_PENDING'				=> 'Hiq dorë nga një anëtarësim në pritje në grup',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Jeni i sigurt që dëshironi të hiqni dorë nga anëtarësimi juaj në pritje nga grupi i zgjedhur?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Ju u hoqët me sukses nga grupi i zgjedhur.',
	'GROUP_RESIGNED_PENDING'			=> 'Anëtarësimi juaj në pritje u hoq me sukses nga grupi i zgjedhur.',
	'GROUP_TYPE'						=> 'Lloji i grupit',
	'GROUP_UNDISCLOSED'					=> 'Grupi i fshehur',
	'FORUM_UNDISCLOSED'					=> 'Moderimi i forumeve të fshehura',

	'LOGIN_EXPLAIN_GROUP'	=> 'Ju duhet të identifikoheni për të parë detajet e grupit.',

	'NO_LEADERS'					=> 'Ju nuk jeni udhëheqës i asnjë grupi.',
	'NOT_LEADER_OF_GROUP'			=> 'Operacioni i kërkuar nuk mund të kryhet sepse nuk jeni udhëheqës i grupit të zgjedhur.',
	'NOT_MEMBER_OF_GROUP'			=> 'Operacioni i kërkuar nuk mund të kryhet sepse nuk jeni anëtar i grupit të zgjedhur ose anëtarësimi juaj nuk është miratuar ende.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Nuk ju lejohet të jepni dorëheqjen nga grupi juaj i paracaktuar.',

	'PRIMARY_GROUP'		=> 'Grupi primar',

	'REMOVE_SELECTED'		=> 'Hiq të zgjedhurin',

	'USER_GROUP_CHANGE'			=> 'Nga grupi "%1$s" në "%2$s"',
	'USER_GROUP_DEMOTE'			=> 'Ulja e lidershipit',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Jeni i sigurt që dëshironi të zbrisni si drejtues grupi nga grupi i zgjedhur?',
	'USER_GROUP_DEMOTED'		=> 'U ul me sukses lidershipin tuaj.',
));
