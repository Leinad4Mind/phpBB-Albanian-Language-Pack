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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Nga ky panel mund të administroni të gjitha grupet e përdoruesve. Mund të fshini, krijoni dhe redaktoni grupe, të zgjidhni drejtuesit, të caktoni gjendjen hapur/fshehur/mbyllur dhe të vendosni emrin e përshkrimin e grupit.',
	'ADD_GROUP_CATEGORY'			=> 'Shtoni kategori',
	'ADD_USERS'						=> 'Shtoni përdorues',
	'ADD_USERS_EXPLAIN'				=> 'Këtu mund të shtoni përdorues të rinj në grup. Mund të zgjidhni nëse ky grup do të bëhet i parazgjedhuri për përdoruesit e zgjedhur dhe mund t’i caktoni si drejtues grupi. Vendoseni secilin emër përdoruesi në rresht më vete.',

	'COPY_PERMISSIONS'				=> 'Kopjoni lejet nga',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Pasi të krijohet, grupi do të ketë të njëjtat leje si grupi që zgjidhni këtu.',
	'CREATE_GROUP'					=> 'Krijoni grup të ri',

	'GROUPS_NO_MEMBERS'				=> 'Ky grup nuk ka anëtarë',
	'GROUPS_NO_MODS'				=> 'Nuk janë caktuar drejtues grupi',

	'GROUP_APPROVE'					=> 'Miratoni anëtarin',
	'GROUP_APPROVED'				=> 'Anëtarët e miratuar',
	'GROUP_AVATAR'					=> 'Avatari i grupit',
	'GROUP_AVATAR_EXPLAIN'			=> 'Kjo figurë do të shfaqet në Panelin e kontrollit të grupit.',
	'GROUP_CATEGORY_NAME'			=> 'Emri i kategorisë',
	'GROUP_CLOSED'					=> 'I mbyllur',
	'GROUP_COLOR'					=> 'Ngjyra e grupit',
	'GROUP_COLOR_EXPLAIN'			=> 'Përcakton ngjyrën e emrave të anëtarëve; lëreni bosh për ngjyrën e parazgjedhur të përdoruesit.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Jeni të sigurt se dëshironi ta shtoni përdoruesin %2$s në grup?',
		2	=> 'Jeni të sigurt se dëshironi t’i shtoni përdoruesit %2$s në grup?',
	),
	'GROUP_CREATED'					=> 'Grupi u krijua me sukses.',
	'GROUP_DEFAULT'					=> 'Bëjeni grupin të parazgjedhur për anëtarin',
	'GROUP_DEFS_UPDATED'			=> 'Grupi i parazgjedhur u caktua për të gjithë anëtarët e zgjedhur.',
	'GROUP_DELETE'					=> 'Hiqeni anëtarin nga grupi',
	'GROUP_DELETED'					=> 'Grupi u fshi dhe grupet e parazgjedhura të përdoruesve u caktuan me sukses.',
	'GROUP_DEMOTE'					=> 'Ulni drejtuesin e grupit',
	'GROUP_DESC'					=> 'Përshkrimi i grupit',
	'GROUP_DETAILS'					=> 'Hollësitë e grupit',
	'GROUP_EDIT_EXPLAIN'			=> 'Këtu mund të redaktoni një grup ekzistues. Mund t’i ndryshoni emrin, përshkrimin dhe llojin (i hapur, i mbyllur etj.), si edhe opsione të përbashkëta si ngjyra dhe rangu. Ndryshimet këtu mbishkruajnë cilësimet aktuale të përdoruesve. Anëtarët mund t’i mbishkruajnë cilësimet e avatarit të grupit, përveçse kur caktoni lejet e duhura.',
	'GROUP_ERR_USERS_EXIST'			=> 'Përdoruesit e përcaktuar janë tashmë anëtarë të këtij grupi.',
	'GROUP_FOUNDER_MANAGE'			=> 'Menaxhim vetëm nga themeluesit',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Kufizojeni menaxhimin e këtij grupi vetëm te themeluesit. Përdoruesit me leje grupi mund ta shohin ende grupin dhe anëtarët e tij.',
	'GROUP_HIDDEN'					=> 'I fshehur',
	'GROUP_LANG'					=> 'Gjuha e grupit',
	'GROUP_LEAD'					=> 'Drejtuesit e grupit',
	'GROUP_LEADERS_ADDED'			=> 'Drejtuesit e rinj u shtuan me sukses në grup.',
	'GROUP_LEGEND'					=> 'Shfaqeni grupin në legjendë',
	'GROUP_LIST'					=> 'Anëtarët aktualë',
	'GROUP_LIST_EXPLAIN'			=> 'Kjo është lista e plotë e anëtarëve aktualë. Mund të fshini anëtarë (përveç disa grupeve të posaçme) ose të shtoni të rinj.',
	'GROUP_MEMBERS'					=> 'Anëtarët e grupit',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Kjo është lista e plotë e anëtarëve, me pjesë të veçanta për drejtuesit, anëtarët në pritje dhe anëtarët ekzistues. Këtu menaxhoni anëtarësinë dhe rolin e secilit. Për ta hequr dikë nga drejtimi pa e hequr nga grupi, përdorni Ulni dhe jo Fshini. Përdorni Ngrini për ta bërë një anëtar drejtues.',
	'GROUP_MESSAGE_LIMIT'			=> 'Kufiri i mesazheve private të grupit për dosje',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Ky cilësim mbishkruan kufirin individual të mesazheve për dosje. Vlera reale përcaktohet nga maksimumi i të gjitha grupeve të përdoruesit.<br />Vendoseni 0 për ta zëvendësuar me cilësimin e përgjithshëm të forumit.',
	'GROUP_MODS_ADDED'				=> 'Drejtuesit e rinj të grupit u shtuan me sukses.',
	'GROUP_MODS_DEMOTED'			=> 'Drejtuesit e grupit u ulën me sukses.',
	'GROUP_MODS_PROMOTED'			=> 'Anëtarët e grupit u ngritën me sukses.',
	'GROUP_NAME'					=> 'Emri i grupit',
	'GROUP_NAME_TAKEN'				=> 'Emri i grupit po përdoret tashmë; zgjidhni një tjetër.',
	'GROUP_OPEN'					=> 'I hapur',
	'GROUP_PENDING'					=> 'Anëtarët në pritje',
	'GROUP_MAX_RECIPIENTS'			=> 'Numri maksimal i marrësve për mesazh privat',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Numri maksimal i marrësve të lejuar në një mesazh privat. Vlera reale përcaktohet nga maksimumi i të gjitha grupeve të përdoruesit.<br />Vendoseni 0 për ta zëvendësuar me cilësimin e përgjithshëm të forumit.',
	'GROUP_OPTIONS_SAVE'			=> 'Opsionet e përbashkëta të grupit',
	'GROUP_PROMOTE'					=> 'Ngrijeni si drejtues grupi',
	'GROUP_RANK'					=> 'Rangu i grupit',
	'GROUP_RECEIVE_PM'				=> 'Grupi mund të marrë mesazhe private',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Grupet e fshehura nuk mund të marrin mesazhe, pavarësisht këtij cilësimi.',
	'GROUP_REQUEST'					=> 'Kërkesa',
	'GROUP_SETTINGS_SAVE'			=> 'Cilësimet e përbashkëta të grupit',
	'GROUP_SKIP_AUTH'				=> 'Përjashtojeni drejtuesin nga lejet',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Nëse aktivizohet, drejtuesi nuk i trashëgon më lejet e grupit.',
	'GROUP_SPECIAL'					=> 'I paracaktuar',
	'GROUP_TEAMPAGE'				=> 'Shfaqeni grupin në faqen e ekipit',
	'GROUP_TYPE'					=> 'Lloji i grupit',
	'GROUP_TYPE_EXPLAIN'			=> 'Përcakton cilët përdorues mund t’i bashkohen ose ta shohin këtë grup.',
	'GROUP_UPDATED'					=> 'Parapëlqimet e grupit u përditësuan me sukses.',

	'GROUP_USERS_ADDED'				=> 'Përdoruesit e rinj u shtuan me sukses në grup.',
	'GROUP_USERS_EXIST'				=> 'Përdoruesit e zgjedhur janë tashmë anëtarë.',
	'GROUP_USERS_REMOVE'			=> 'Përdoruesit u hoqën nga grupi dhe parazgjedhjet e reja u caktuan me sukses.',
	'GROUP_USERS_INVALID'			=> 'Nuk u shtua asnjë përdorues sepse emrat e mëposhtëm nuk ekzistojnë: %s',

	'LEGEND_EXPLAIN'				=> 'Këto janë grupet që shfaqen në legjendën e grupeve:',
	'LEGEND_SETTINGS'				=> 'Cilësimet e legjendës',
	'LEGEND_SORT_GROUPNAME'			=> 'Renditeni legjendën sipas emrit të grupit',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Renditja më poshtë shpërfillet kur ky opsion aktivizohet.',

	'MANAGE_LEGEND'			=> 'Menaxhoni legjendën e grupeve',
	'MANAGE_TEAMPAGE'		=> 'Menaxhoni faqen e ekipit',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Bëjeni grup të parazgjedhur për çdo anëtar',
	'MEMBERS'				=> 'Anëtarët',

	'NO_GROUP'					=> 'Nuk u përcaktua grup.',
	'NO_GROUPS_ADDED'			=> 'Nuk është shtuar ende asnjë grup.',
	'NO_GROUPS_CREATED'			=> 'Nuk është krijuar ende asnjë grup.',
	'NO_PERMISSIONS'			=> 'Mos kopjoni leje',
	'NO_USERS'					=> 'Nuk keni vendosur përdorues.',
	'NO_USERS_ADDED'			=> 'Nuk u shtua asnjë përdorues në grup.',
	'NO_VALID_USERS'			=> 'Nuk keni vendosur përdorues të përshtatshëm për këtë veprim.',

	'PENDING_MEMBERS'			=> 'Në pritje',

	'SELECT_GROUP'				=> 'Zgjidhni një grup',
	'SPECIAL_GROUPS'			=> 'Grupet e paracaktuara',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Grupet e paracaktuara janë grupe të posaçme dhe nuk mund të fshihen ose ndryshohen drejtpërdrejt. Megjithatë, mund të shtoni përdorues dhe të ndryshoni cilësimet bazë.',

	'TEAMPAGE'					=> 'Faqja e ekipit',
	'TEAMPAGE_DISP_ALL'			=> 'Të gjitha anëtarësimet',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Vetëm grupi i parazgjedhur i përdoruesit',
	'TEAMPAGE_DISP_FIRST'		=> 'Vetëm anëtarësimi i parë',
	'TEAMPAGE_EXPLAIN'			=> 'Këto janë grupet që shfaqen në faqen e ekipit:',
	'TEAMPAGE_FORUMS'			=> 'Shfaqni forumet e moderuara',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Nëse vendoset po, në rreshtin e moderatorëve do të shfaqet lista e forumeve ku kanë leje moderimi. Në forume të mëdha kjo mund ta ngarkojë shumë bazën e të dhënave.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Shfaqni anëtarësimet e përdoruesve',
	'TEAMPAGE_SETTINGS'			=> 'Cilësimet e faqes së ekipit',
	'TOTAL_MEMBERS'				=> 'Anëtarët',

	'USERS_APPROVED'				=> 'Përdoruesit u miratuan me sukses.',
	'USER_DEFAULT'					=> 'Parazgjedhja e përdoruesit',
	'USER_DEF_GROUPS'				=> 'Grupet e përcaktuara nga përdoruesit',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Këto grupe janë krijuar nga ju ose një administrator tjetër. Mund të menaxhoni anëtarësimet, të redaktoni vetitë ose ta fshini grupin.',
	'USER_GROUP_DEFAULT'			=> 'Caktojeni si grup të parazgjedhur',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Zgjedhja po e cakton këtë si grupin e parazgjedhur për përdoruesit e shtuar.',
	'USER_GROUP_LEADER'				=> 'Caktojeni si drejtues grupi',
));
