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
	'ADMIN_SIG_PREVIEW'		=> 'Parapamja e nënshkrimit',
	'AT_LEAST_ONE_FOUNDER'	=> 'Ky themelues nuk mund të kthehet në përdorues të zakonshëm. Forumi duhet të ketë të paktën një themelues aktiv. Për ta ndryshuar statusin e këtij përdoruesi, caktoni më parë një përdorues tjetër si themelues.',

	'BAN_ALREADY_ENTERED'	=> 'Ndalimi ishte vendosur më parë. Lista e ndalimeve nuk u përditësua.',
	'BAN_SUCCESSFUL'		=> 'Ndalimi u vendos me sukses.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Nuk lejohet ndalimi i llogarisë anonime. Lejet për përdoruesit anonimë caktohen te skeda Lejet.',
	'CANNOT_BAN_FOUNDER'			=> 'Nuk lejohet ndalimi i llogarive të themeluesve.',
	'CANNOT_BAN_YOURSELF'			=> 'Nuk mund ta ndaloni veten.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Nuk lejohet çaktivizimi i llogarive të robotëve. Çaktivizojeni robotin nga faqja e robotëve.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Nuk lejohet çaktivizimi i llogarive të themeluesve.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Nuk mund ta çaktivizoni llogarinë tuaj.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Nuk lejohet riaktivizimi i detyruar i llogarive të robotëve. Riaktivizojeni robotin nga faqja e robotëve.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Nuk lejohet riaktivizimi i detyruar i llogarive të themeluesve.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Nuk mund ta detyroni riaktivizimin e llogarisë tuaj.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Llogaria e përdoruesit mysafir nuk mund të hiqet.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Nuk lejohet heqja e llogarive të themeluesve.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Nuk mund ta hiqni llogarinë tuaj.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Përdoruesit e shpërfillur nuk mund të caktohen si themelues.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Përdoruesit duhet të aktivizohen para se të caktohen si themelues; vetëm përdoruesit aktivë mund të ngrihen në këtë status.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Këtë duhet ta jepni vetëm nëse po ndryshoni adresën e emailit të përdoruesit.',

	'DELETE_POSTS'			=> 'Fshini postimet',
	'DELETE_USER'			=> 'Fshini përdoruesin',
	'DELETE_USER_EXPLAIN'	=> 'Fshirja e përdoruesit është përfundimtare dhe ai nuk mund të rikuperohet. Mesazhet private të palexuara të dërguara nga ky përdorues do të fshihen dhe nuk do të jenë të disponueshme për marrësit.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Riaktivizimi u detyrua me sukses.',
	'FOUNDER'						=> 'Themelues',
	'FOUNDER_EXPLAIN'				=> 'Themeluesit kanë të gjitha lejet administrative dhe nuk mund të ndalohen, fshihen ose ndryshohen nga anëtarë që nuk janë themelues.',

	'GROUP_APPROVE'					=> 'Miratoni anëtarin',
	'GROUP_DEFAULT'					=> 'Bëjeni grupin të parazgjedhur për anëtarin',
	'GROUP_DELETE'					=> 'Hiqeni anëtarin nga grupi',
	'GROUP_DEMOTE'					=> 'Ulni drejtuesin e grupit',
	'GROUP_PROMOTE'					=> 'Ngrijeni si drejtues grupi',

	'IP_WHOIS_FOR'			=> 'WHOIS i IP-së për %s',

	'LAST_ACTIVE'			=> 'Aktiv për herë të fundit',

	'MOVE_POSTS_EXPLAIN'	=> 'Zgjidhni forumin ku dëshironi të zhvendosen të gjitha postimet e këtij përdoruesi.',

	'NO_SPECIAL_RANK'		=> 'Nuk është caktuar rang i posaçëm',
	'NO_WARNINGS'			=> 'Nuk ka paralajmërime.',
	'NOT_MANAGE_FOUNDER'	=> 'U përpoqët të menaxhoni një përdorues me status themeluesi. Vetëm themeluesit mund të menaxhojnë themelues të tjerë.',

	'QUICK_TOOLS'			=> 'Mjete të shpejta',

	'REGISTERED'			=> 'Regjistruar',
	'REGISTERED_IP'			=> 'Regjistruar nga IP-ja',
	'RETAIN_POSTS'			=> 'Ruajini postimet',

	'SELECT_FORM'			=> 'Zgjidhni formularin',
	'SELECT_USER'			=> 'Zgjidhni përdoruesin',

	'USER_ADMIN'					=> 'Administrimi i përdoruesit',
	'USER_ADMIN_ACTIVATE'			=> 'Aktivizoni llogarinë',
	'USER_ADMIN_ACTIVATED'			=> 'Përdoruesi u aktivizua me sukses.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatari u hoq me sukses nga llogaria.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Ndaloni sipas emailit',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Adresa e emailit u ndalua përmes menaxhimit të përdoruesve',
	'USER_ADMIN_BAN_IP'				=> 'Ndaloni sipas IP-së',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP-ja u ndalua përmes menaxhimit të përdoruesve',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Emri u ndalua përmes menaxhimit të përdoruesve',
	'USER_ADMIN_BAN_USER'			=> 'Ndaloni sipas emrit',
	'USER_ADMIN_DEACTIVATE'			=> 'Çaktivizoni llogarinë',
	'USER_ADMIN_DEACTIVED'			=> 'Përdoruesi u çaktivizua me sukses.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Fshini të gjitha bashkëngjitjet',
	'USER_ADMIN_DEL_AVATAR'			=> 'Fshini avatarin',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Zbrazni kutinë dalëse të MP-ve',
	'USER_ADMIN_DEL_POSTS'			=> 'Fshini të gjitha postimet',
	'USER_ADMIN_DEL_SIG'			=> 'Fshini nënshkrimin',
	'USER_ADMIN_EXPLAIN'			=> 'Këtu mund të ndryshoni të dhënat e përdoruesve dhe disa opsione të caktuara.',
	'USER_ADMIN_FORCE'				=> 'Detyroni riaktivizimin',
	'USER_ADMIN_LEAVE_NR'			=> 'Hiqeni nga Të saporegjistruarit',
	'USER_ADMIN_MOVE_POSTS'			=> 'Zhvendosni të gjitha postimet',
	'USER_ADMIN_SIG_REMOVED'		=> 'Nënshkrimi u hoq me sukses nga llogaria.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Të gjitha bashkëngjitjet e këtij përdoruesi u hoqën me sukses.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Avatari nuk mund të shfaqet sepse avatarët janë çaktivizuar.',
	'USER_AVATAR_UPDATED'			=> 'Të dhënat e avatarit u përditësuan me sukses.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Avatari aktual nuk mund të shfaqet sepse lloji i tij nuk lejohet.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Fushat e personalizuara të profilit',
	'USER_DELETED'					=> 'Përdoruesi u fshi me sukses.',
	'USER_GROUP_ADD'				=> 'Shtojeni përdoruesin në grup',
	'USER_GROUP_NORMAL'				=> 'Grupet e përcaktuara nga përdoruesit ku bën pjesë',
	'USER_GROUP_PENDING'			=> 'Grupet ku përdoruesi është në pritje',
	'USER_GROUP_SPECIAL'			=> 'Grupet e paracaktuara ku bën pjesë',
	'USER_LIFTED_NR'				=> 'Statusi i saporegjistruar i përdoruesit u hoq me sukses.',
	'USER_NO_ATTACHMENTS'			=> 'Nuk ka skedarë të bashkëngjitur për t’u shfaqur.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Përdoruesi nuk ka postime për t’u ruajtur ose fshirë.',
	'USER_OUTBOX_EMPTIED'			=> 'Kutia dalëse e mesazheve private u zbraz me sukses.',
	'USER_OUTBOX_EMPTY'				=> 'Kutia dalëse e mesazheve private ishte tashmë bosh.',
	'USER_OVERVIEW_UPDATED'			=> 'Të dhënat e përdoruesit u përditësuan.',
	'USER_POSTS_DELETED'			=> 'Të gjitha postimet e këtij përdoruesi u hoqën me sukses.',
	'USER_POSTS_MOVED'				=> 'Postimet e përdoruesit u zhvendosën me sukses në forumin e synuar.',
	'USER_PREFS_UPDATED'			=> 'Parapëlqimet e përdoruesit u përditësuan.',
	'USER_PROFILE'					=> 'Profili i përdoruesit',
	'USER_PROFILE_UPDATED'			=> 'Profili i përdoruesit u përditësua.',
	'USER_RANK'						=> 'Rangu i përdoruesit',
	'USER_RANK_UPDATED'				=> 'Rangu i përdoruesit u përditësua.',
	'USER_SIG_UPDATED'				=> 'Nënshkrimi i përdoruesit u përditësua me sukses.',
	'USER_WARNING_LOG_DELETED'		=> 'Nuk ka informacion. Hyrja në regjistër mund të jetë fshirë.',
	'USER_TOOLS'					=> 'Mjete bazë',
));
