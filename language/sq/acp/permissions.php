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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Lejet janë shumë të hollësishme dhe ndahen në katër pjesë kryesore:</p>

		<h2>Lejet globale</h2>
		<p>Këto kontrollojnë qasjen në nivel global dhe zbatohen në të gjithë forumin. Ndahen në leje përdoruesi, leje grupi, administratorë dhe moderatorë globalë.</p>

		<h2>Lejet sipas forumit</h2>
		<p>Këto kontrollojnë qasjen për secilin forum dhe ndahen në leje forumi, moderatorë forumi, leje forumi për përdorues dhe për grupe.</p>

		<h2>Rolet e lejeve</h2>
		<p>Këto krijojnë grupe lejesh për lloje të ndryshme, që mund të caktohen sipas roleve. Rolet e parazgjedhura mbulojnë shumicën e nevojave, por mund të shtoni, redaktoni ose fshini role.</p>

		<h2>Maskat e lejeve</h2>
		<p>Këto përdoren për të parë lejet efektive të përdoruesve, moderatorëve lokalë e globalë, administratorëve ose forumeve.</p>

		<br />

		<p>Për më shumë informacion rreth konfigurimit dhe menaxhimit të lejeve, shihni pjesën <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">Caktimi i lejeve në Udhëzuesin e nisjes së shpejtë</a>.</p>
	',

	'ACL_NEVER'				=> 'Kurrë',
	'ACL_SET'				=> 'Caktimi i lejeve',
	'ACL_SET_EXPLAIN'		=> 'Lejet bazohen në një sistem të thjeshtë <strong>PO</strong>/<strong>JO</strong>. Caktimi i një opsioni si <strong>KURRË</strong> për një përdorues ose grup përdoruesish mbishkruan çdo vlerë tjetër që i është caktuar. Nëse nuk dëshironi t’i caktoni vlerë një opsioni për këtë përdorues ose grup, zgjidhni <strong>JO</strong>. Nëse këtij opsioni i janë caktuar vlera diku tjetër, ato do të përdoren me përparësi; përndryshe merret <strong>KURRË</strong>. Të gjitha objektet e shënuara (me kutinë përpara tyre) do të kopjojnë grupin e lejeve që përcaktuat. Vini re se caktimi i lejeve administrative për llogaritë e themeluesve nuk ka efekt, sepse lejet administrative për themeluesit janë gjithmonë <strong>PO</strong>.',
	'ACL_SETTING'			=> 'Cilësimi',

	'ACL_TYPE_A_'			=> 'Lejet administrative',
	'ACL_TYPE_F_'			=> 'Lejet e forumit',
	'ACL_TYPE_M_'			=> 'Lejet e moderimit',
	'ACL_TYPE_U_'			=> 'Lejet e përdoruesit',

	'ACL_TYPE_GLOBAL_A_'	=> 'Lejet administrative',
	'ACL_TYPE_GLOBAL_U_'	=> 'Lejet e përdoruesit',
	'ACL_TYPE_GLOBAL_M_'	=> 'Lejet e moderatorit global',
	'ACL_TYPE_LOCAL_M_'		=> 'Lejet e moderatorit të forumit',
	'ACL_TYPE_LOCAL_F_'		=> 'Lejet e forumit',

	'ACL_NO'				=> 'Jo',
	'ACL_VIEW'				=> 'Shikimi i lejeve',
	'ACL_VIEW_EXPLAIN'		=> 'Këtu shihni lejet efektive të përdoruesit/grupit. Katrori i kuq tregon se leja mungon, ndërsa i gjelbri se leja është dhënë.',
	'ACL_YES'				=> 'Po',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Këtu u caktoni leje administratori përdoruesve ose grupeve. Të gjithë me këto leje mund të hapin panelin e administrimit.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Këtu caktoni përdorues dhe grupe si moderatorë forumi. Për qasjen, moderimin global ose administratorët përdorni faqen përkatëse.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Këtu ndryshoni cilët përdorues dhe grupe mund të hyjnë në cilat forume. Për moderatorët ose administratorët përdorni faqen përkatëse.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Këtu kopjoni lejet nga një forum te një ose më shumë forume të tjera.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Këtu u caktoni leje moderatori global përdoruesve ose grupeve. Moderatorët globalë kanë qasje në çdo forum.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Këtu u caktoni grupeve leje forumi.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Këtu mund t’u caktoni grupeve leje globale: leje përdoruesi, leje moderatori global dhe leje administratori. Lejet e përdoruesit përfshijnë mundësi si përdorimi i avatarëve dhe dërgimi i mesazheve private; lejet e moderatorit global përfshijnë miratimin e postimeve, menaxhimin e temave dhe menaxhimin e ndalimeve; ndërsa lejet e administratorit përfshijnë ndryshimin e lejeve, përcaktimin e BBCode-ve të personalizuara dhe menaxhimin e forumeve. Lejet individuale të përdoruesve duhen ndryshuar vetëm në raste të rralla; metoda e parapëlqyer është vendosja e përdoruesve në grupe dhe caktimi i lejeve grupit.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Këtu menaxhoni rolet e lejeve administrative. Ndryshimi i rolit ndryshon edhe lejet e elementeve që e përdorin.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Këtu menaxhoni rolet e lejeve të forumit. Ndryshimi i rolit ndryshon edhe lejet e elementeve që e përdorin.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Këtu menaxhoni rolet e lejeve të moderimit. Ndryshimi i rolit ndryshon edhe lejet e elementeve që e përdorin.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Këtu menaxhoni rolet e lejeve të përdoruesit. Ndryshimi i rolit ndryshon edhe lejet e elementeve që e përdorin.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Këtu u caktoni përdoruesve leje forumi.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Këtu mund t’u caktoni përdoruesve leje globale: leje përdoruesi, leje moderatori global dhe leje administratori. Lejet e përdoruesit përfshijnë mundësi si përdorimi i avatarëve dhe dërgimi i mesazheve private; lejet e moderatorit global përfshijnë miratimin e postimeve, menaxhimin e temave dhe menaxhimin e ndalimeve; ndërsa lejet e administratorit përfshijnë ndryshimin e lejeve, përcaktimin e BBCode-ve të personalizuara dhe menaxhimin e forumeve. Për t’i ndryshuar këto cilësime për shumë përdorues, parapëlqehet sistemi i lejeve të grupeve. Lejet individuale të përdoruesve duhen ndryshuar vetëm në raste të rralla; metoda e parapëlqyer është vendosja e përdoruesve në grupe dhe caktimi i lejeve grupit.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Këtu shihni lejet efektive administrative të përdoruesve/grupeve të zgjedhura.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Këtu shihni lejet globale të moderimit të përdoruesve/grupeve të zgjedhura.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Këtu shihni lejet e forumit për përdoruesit/grupet dhe forumet e zgjedhura.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Këtu shihni lejet e moderatorit për përdoruesit/grupet dhe forumet e zgjedhura.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Këtu shihni lejet efektive të përdoruesit për përdoruesit/grupet e zgjedhura.',

	'ADD_GROUPS'				=> 'Shtoni grupe',
	'ADD_PERMISSIONS'			=> 'Shtoni leje',
	'ADD_USERS'					=> 'Shtoni përdorues',
	'ADVANCED_PERMISSIONS'		=> 'Lejet e përparuara',
	'ALL_GROUPS'				=> 'Zgjidhini të gjitha grupet',
	'ALL_NEVER'					=> 'Të gjitha <strong>KURRË</strong>',
	'ALL_NO'					=> 'Të gjitha <strong>JO</strong>',
	'ALL_USERS'					=> 'Zgjidhini të gjithë përdoruesit',
	'ALL_YES'					=> 'Të gjitha <strong>PO</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Zbatoni të gjitha lejet',
	'APPLY_PERMISSIONS'			=> 'Zbatoni lejet',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Lejet dhe roli zbatohen vetëm te ky element dhe te të gjitha elementet e shënuara.',
	'AUTH_UPDATED'				=> 'Lejet u përditësuan.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Jeni të sigurt se dëshironi ta kryeni këtë veprim? Ai mbishkruan lejet ekzistuese te synimet e zgjedhura.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Forumi burim nga i cili dëshironi t’i kopjoni lejet.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Forumet e synuara ku dëshironi t’i zbatoni lejet e kopjuara.',
	'COPY_PERMISSIONS_FROM'					=> 'Kopjoni lejet nga',
	'COPY_PERMISSIONS_TO'					=> 'Zbatoni lejet te',

	'CREATE_ROLE'				=> 'Krijoni rol',
	'CREATE_ROLE_FROM'			=> 'Përdorni cilësimet nga…',
	'CUSTOM'					=> 'I personalizuar…',

	'DEFAULT'					=> 'I parazgjedhur',
	'DELETE_ROLE'				=> 'Fshini rolin',
	'DELETE_ROLE_CONFIRM'		=> 'Jeni të sigurt se dëshironi ta hiqni këtë rol? Elementet që e përdorin <strong>nuk</strong> do t’i humbasin cilësimet e lejeve.',
	'DISPLAY_ROLE_ITEMS'		=> 'Shihni elementet që përdorin këtë rol',

	'EDIT_PERMISSIONS'			=> 'Redaktoni lejet',
	'EDIT_ROLE'					=> 'Redaktoni rolin',

	'GROUPS_NOT_ASSIGNED'		=> 'Asnjë grup nuk i është caktuar këtij roli',

	'LOOK_UP_GROUP'				=> 'Kërkoni grup përdoruesish',
	'LOOK_UP_USER'				=> 'Kërkoni përdorues',

	'MANAGE_GROUPS'		=> 'Menaxhoni grupet',
	'MANAGE_USERS'		=> 'Menaxhoni përdoruesit',

	'NO_AUTH_SETTING_FOUND'		=> 'Cilësimet e lejeve nuk janë përcaktuar.',
	'NO_ROLE_ASSIGNED'			=> 'Nuk është caktuar rol…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Caktimi i këtij roli nuk i ndryshon lejet në të djathtë. Për t’i hequr të gjitha përdorni lidhjen “Të gjitha <strong>JO</strong>”.',
	'NO_ROLE_AVAILABLE'			=> 'Nuk ka rol të disponueshëm',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Jepini rolit një emër.',
	'NO_ROLE_SELECTED'			=> 'Roli nuk u gjet.',
	'NO_USER_GROUP_SELECTED'	=> 'Nuk keni zgjedhur përdorues ose grup.',

	'ONLY_FORUM_DEFINED'	=> 'Keni zgjedhur vetëm forume. Zgjidhni edhe të paktën një përdorues ose grup.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Lejet dhe roli do të zbatohen edhe te të gjitha objektet e zgjedhura',
	'PLUS_SUBFORUMS'				=> '+Nënforumet',

	'REMOVE_PERMISSIONS'			=> 'Hiqni lejet',
	'REMOVE_ROLE'					=> 'Hiqni rolin',
	'RESULTING_PERMISSION'			=> 'Leja përfundimtare',
	'ROLE'							=> 'Roli',
	'ROLE_ADD_SUCCESS'				=> 'Roli u shtua me sukses.',
	'ROLE_ASSIGNED_TO'				=> 'Përdoruesit/Grupet e caktuara te %s',
	'ROLE_DELETED'					=> 'Roli u hoq me sukses.',
	'ROLE_DESCRIPTION'				=> 'Përshkrimi i rolit',

	'ROLE_ADMIN_FORUM'			=> 'Administrator forumi',
	'ROLE_ADMIN_FULL'			=> 'Administrator i plotë',
	'ROLE_ADMIN_STANDARD'		=> 'Administrator standard',
	'ROLE_ADMIN_USERGROUP'		=> 'Administrator përdoruesish dhe grupesh',
	'ROLE_FORUM_BOT'			=> 'Qasje roboti',
	'ROLE_FORUM_FULL'			=> 'Qasje e plotë',
	'ROLE_FORUM_LIMITED'		=> 'Qasje e kufizuar',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Qasje e kufizuar + sondazhe',
	'ROLE_FORUM_NOACCESS'		=> 'Pa qasje',
	'ROLE_FORUM_ONQUEUE'		=> 'Në radhën e moderimit',
	'ROLE_FORUM_POLLS'			=> 'Qasje standard + sondazhe',
	'ROLE_FORUM_READONLY'		=> 'Qasje vetëm për lexim',
	'ROLE_FORUM_STANDARD'		=> 'Qasje standard',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Qasje për përdorues të saporegjistruar',
	'ROLE_MOD_FULL'				=> 'Moderator i plotë',
	'ROLE_MOD_QUEUE'			=> 'Moderator i radhës',
	'ROLE_MOD_SIMPLE'			=> 'Moderator i thjeshtë',
	'ROLE_MOD_STANDARD'			=> 'Moderator standard',
	'ROLE_USER_FULL'			=> 'Të gjitha veçoritë',
	'ROLE_USER_LIMITED'			=> 'Veçori të kufizuara',
	'ROLE_USER_NOAVATAR'		=> 'Pa avatar',
	'ROLE_USER_NOPM'			=> 'Pa mesazhe private',
	'ROLE_USER_STANDARD'		=> 'Veçori standard',
	'ROLE_USER_NEW_MEMBER'		=> 'Veçori për përdorues të saporegjistruar',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Mund të hyjë në menaxhimin e forumeve dhe cilësimet e lejeve.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Ka qasje në të gjitha funksionet administrative.<br />Nuk rekomandohet.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Ka qasje në shumicën e veçorive administrative, por jo në mjetet e serverit ose sistemit.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Mund të menaxhojë grupe e përdorues, të ndryshojë leje e cilësime dhe të menaxhojë ndalime e rangje.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ky rol rekomandohet për robotët dhe merimangat e kërkimit.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Mund të përdorë të gjitha veçoritë, përfshirë njoftimet dhe temat ngjitëse, dhe të shpërfillë kufirin e shpeshtësisë.<br />Nuk rekomandohet për përdorues të zakonshëm.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Mund të përdorë disa veçori, por nuk mund të bashkëngjisë skedarë ose të përdorë ikona postimesh.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Si Qasja e kufizuar, por mund të krijojë edhe sondazhe.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nuk mund ta shohë ose ta hapë forumin.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Mund të përdorë shumicën e veçorive, por postimet dhe temat kërkojnë miratim nga moderatorët.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Si Qasja standard, por mund të krijojë edhe sondazhe.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Mund ta lexojë forumin, por jo të krijojë tema ose të përgjigjet.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Mund të përdorë shumicën e veçorive, por nuk mund t’i kyçë temat e veta ose të krijojë sondazhe.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Rol për grupin e saporegjistruar; përmban leje <strong>KURRË</strong> që kufizojnë veçoritë.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Mund të përdorë të gjitha veçoritë e moderimit, përfshirë ndalimet.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Mund të përdorë vetëm radhën e moderimit për të miratuar dhe redaktuar postime.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Mund të përdorë vetëm veprimet bazë të temave; jo paralajmërimet ose radhën e moderimit.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Mund të përdorë shumicën e mjeteve, por jo të ndalojë përdorues ose të ndryshojë autorin.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Mund të përdorë të gjitha veçoritë, përfshirë ndryshimin e emrit dhe shpërfilljen e kufirit.<br />Nuk rekomandohet.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Mund të përdorë disa veçori; bashkëngjitjet, emailet dhe mesazhet e çastit nuk lejohen.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ka veçori të kufizuara dhe nuk mund të përdorë avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ka veçori të kufizuara dhe nuk mund të përdorë mesazhe private.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Mund të përdorë shumicën, por jo të gjitha veçoritë; p.sh. nuk ndryshon emrin ose shpërfill kufirin.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Rol për grupin e saporegjistruar; përmban leje <strong>KURRË</strong> që kufizojnë veçoritë.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Mund të vendosni një shpjegim të shkurtër të qëllimit të rolit. Teksti shfaqet edhe në ekranet e lejeve.',
	'ROLE_DESCRIPTION_LONG'			=> 'Përshkrimi i rolit është shumë i gjatë; kufizojeni në 4000 shenja.',
	'ROLE_DETAILS'					=> 'Hollësitë e rolit',
	'ROLE_EDIT_SUCCESS'				=> 'Roli u redaktua me sukses.',
	'ROLE_NAME'						=> 'Emri i rolit',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Një rol me emrin <strong>%s</strong> ekziston tashmë për këtë lloj lejeje.',
	'ROLE_NOT_ASSIGNED'				=> 'Roli nuk është caktuar ende.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Forumet e zgjedhura nuk ekzistojnë.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Grupet e zgjedhura nuk ekzistojnë.',
	'SELECTED_USER_NOT_EXIST'		=> 'Përdoruesit e zgjedhur nuk ekzistojnë.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forumi i zgjedhur përfshin të gjitha nënforumet.',
	'SELECT_ROLE'					=> 'Zgjidhni rolin…',
	'SELECT_TYPE'					=> 'Zgjidhni llojin',
	'SET_PERMISSIONS'				=> 'Caktoni lejet',
	'SET_ROLE_PERMISSIONS'			=> 'Caktoni lejet e rolit',
	'SET_USERS_PERMISSIONS'			=> 'Caktoni lejet e përdoruesit',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Caktoni lejet e forumit për përdoruesin',

	'TRACE_DEFAULT'					=> 'Si parazgjedhje çdo leje është <strong>JO</strong> (e pacaktuar), prandaj mund të mbishkruhet nga cilësime të tjera.',
	'TRACE_FOR'						=> 'Gjurmimi për',
	'TRACE_GLOBAL_SETTING'			=> '%s (globale)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Leja e grupit është <strong>KURRË</strong>, njësoj si rezultati total, ndaj ruhet rezultati i vjetër.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Leja e grupit për këtë forum është <strong>KURRË</strong>, njësoj si rezultati total, ndaj ruhet rezultati i vjetër.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Leja e grupit është <strong>KURRË</strong> dhe bëhet vlera e re totale sepse ishte <strong>JO</strong>.',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Leja e grupit për këtë forum është <strong>KURRË</strong> dhe bëhet vlera e re totale sepse ishte <strong>JO</strong>.',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Leja e këtij grupi është caktuar si <strong>KURRË</strong>, gjë që mbishkruan vlerën totale <strong>PO</strong> me <strong>KURRË</strong> për këtë përdorues.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Leja e këtij grupi për këtë forum është caktuar si <strong>KURRË</strong>, gjë që mbishkruan vlerën totale <strong>PO</strong> me <strong>KURRË</strong> për këtë përdorues.',
	'TRACE_GROUP_NO'				=> 'Leja e grupit është <strong>JO</strong>, ndaj ruhet vlera e vjetër totale.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Leja e grupit në këtë forum është <strong>JO</strong>, ndaj ruhet vlera e vjetër totale.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Leja e grupit është <strong>PO</strong>, por rezultati total <strong>KURRË</strong> nuk mund të mbishkruhet.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Leja e grupit për këtë forum është <strong>PO</strong>, por rezultati total <strong>KURRË</strong> nuk mund të mbishkruhet.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Leja e grupit është <strong>PO</strong> dhe bëhet vlera e re totale sepse ishte <strong>JO</strong>.',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Leja e grupit për këtë forum është <strong>PO</strong> dhe bëhet vlera e re totale sepse ishte <strong>JO</strong>.',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Leja e këtij grupi është caktuar si <strong>PO</strong> dhe leja totale është tashmë <strong>PO</strong>, ndaj rezultati total ruhet.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Leja e këtij grupi për këtë forum është caktuar si <strong>PO</strong> dhe leja totale është tashmë <strong>PO</strong>, ndaj rezultati total ruhet.',
	'TRACE_PERMISSION'				=> 'Gjurmimi i lejes - %s',
	'TRACE_RESULT'					=> 'Rezultati i gjurmimit',
	'TRACE_SETTING'					=> 'Cilësimi i gjurmimit',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Leja globale e përdoruesit është <strong>PO</strong> dhe leja totale është tashmë <strong>PO</strong>, ndaj ruhet rezultati. %sGjurmoni lejen globale%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Leja globale e përdoruesit <strong>PO</strong> mbishkruan rezultatin lokal <strong>KURRË</strong>. %sGjurmoni lejen globale%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Leja globale e përdoruesit është <strong>KURRË</strong> dhe nuk ndikon te leja lokale. %sGjurmoni lejen globale%s',

	'TRACE_USER_FOUNDER'					=> 'Përdoruesi është themelues, prandaj lejet administrative janë gjithmonë <strong>PO</strong>.',
	'TRACE_USER_KEPT'						=> 'Leja e përdoruesit është <strong>JO</strong>, ndaj ruhet vlera e vjetër totale.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Leja e përdoruesit për këtë forum është <strong>JO</strong>, ndaj ruhet vlera e vjetër totale.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Leja e përdoruesit është caktuar si <strong>KURRË</strong> dhe vlera totale është <strong>KURRË</strong>, ndaj nuk ndryshon asgjë.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Leja e përdoruesit për këtë forum është caktuar si <strong>KURRË</strong> dhe vlera totale është <strong>KURRË</strong>, ndaj nuk ndryshon asgjë.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Leja e përdoruesit është <strong>KURRË</strong> dhe bëhet vlera totale sepse ishte JO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Leja e përdoruesit për këtë forum është <strong>KURRË</strong> dhe bëhet vlera totale sepse ishte JO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Leja e përdoruesit <strong>KURRË</strong> mbishkruan vlerën e mëparshme <strong>PO</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Leja e përdoruesit për këtë forum <strong>KURRË</strong> mbishkruan vlerën e mëparshme <strong>PO</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Leja e përdoruesit është <strong>JO</strong> dhe vlera totale ishte caktuar si JO, ndaj parazgjedhja bëhet <strong>KURRË</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Leja e përdoruesit për këtë forum është <strong>JO</strong> dhe vlera totale ishte caktuar si JO, ndaj parazgjedhja bëhet <strong>KURRË</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Leja e përdoruesit është <strong>PO</strong>, por rezultati total <strong>KURRË</strong> nuk mbishkruhet.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Leja e përdoruesit për këtë forum është <strong>PO</strong>, por rezultati total <strong>KURRË</strong> nuk mbishkruhet.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Leja e përdoruesit është <strong>PO</strong> dhe bëhet vlera totale sepse ishte <strong>JO</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Leja e përdoruesit për këtë forum është <strong>PO</strong> dhe bëhet vlera totale sepse ishte <strong>JO</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Leja e përdoruesit është caktuar si <strong>PO</strong> dhe vlera totale është <strong>PO</strong>, ndaj nuk ndryshon asgjë.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Leja e përdoruesit për këtë forum është caktuar si <strong>PO</strong> dhe vlera totale është <strong>PO</strong>, ndaj nuk ndryshon asgjë.',
	'TRACE_WHO'								=> 'Kush',
	'TRACE_TOTAL'							=> 'Gjithsej',

	'USERS_NOT_ASSIGNED'			=> 'Asnjë përdorues nuk i është caktuar këtij roli',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'është anëtar i grupeve të paracaktuara më poshtë',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'është anëtar i grupeve të përcaktuara nga përdoruesit më poshtë',

	'VIEW_ASSIGNED_ITEMS'	=> 'Shihni elementet e caktuara',
	'VIEW_LOCAL_PERMS'		=> 'Lejet lokale',
	'VIEW_GLOBAL_PERMS'		=> 'Lejet globale',
	'VIEW_PERMISSIONS'		=> 'Shihni lejet',

	'WRONG_PERMISSION_TYPE'				=> 'U zgjodh lloj i gabuar lejeje.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Cilësimet e lejeve janë në format të gabuar dhe phpBB nuk mund t’i përpunojë.',
));
