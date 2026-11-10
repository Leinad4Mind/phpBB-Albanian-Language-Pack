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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Kjo pjesë ju lejon të fshini ose çaktivizoni përdorues të forumit. Llogaritë mund të filtrohen në mënyra të ndryshme: sipas numrit të postimeve, veprimtarisë më të fundit etj. Kriteret mund të kombinohen për ta ngushtuar grupin e llogarive të prekura. Për shembull, mund të krasitni përdoruesit me më pak se 10 postime që kanë qenë joaktivë pas datës 2002-01-01. Përdorni * si shenjë universale në fushat e tekstit. Ose mund ta anashkaloni plotësisht zgjedhjen e kritereve duke vendosur një listë përdoruesish (secili në rresht më vete). Tregoni kujdes! Pasi një përdorues të fshihet, veprimi nuk mund të zhbëhet.',

	'CRITERIA'				=> 'Kriteret',

	'DEACTIVATE_DELETE'			=> 'Çaktivizoni ose fshini',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Zgjidhni nëse përdoruesit do të çaktivizohen apo do të fshihen plotësisht. Përdoruesit e fshirë nuk mund të rikthehen!',
	'DELETE_USERS'				=> 'Fshini',
	'DELETE_USER_POSTS'			=> 'Fshini postimet e përdoruesve të krasitur',
	'DELETE_USER_POSTS_EXPLAIN' => 'Heq postimet e bëra nga përdoruesit e fshirë; nuk ka efekt nëse përdoruesit çaktivizohen.',

	'JOINED_EXPLAIN'			=> 'Vendosni një datë në formatin <kbd>YYYY-MM-DD</kbd>. Mund t’i përdorni të dyja fushat për të përcaktuar një interval ose ta lini njërën bosh për interval të hapur.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Vendosni një datë në formatin <kbd>YYYY-MM-DD</kbd>. Vendosni <kbd>0000-00-00</kbd> për të krasitur përdoruesit që nuk janë identifikuar kurrë; kushtet <em>Para</em> dhe <em>Pas</em> do të shpërfillen.',

	'POSTS_ON_QUEUE'			=> 'Postime në pritje të miratimit',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Kufizojeni te përdoruesit e grupit të zgjedhur.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Të gjitha grupet',
	'PRUNE_USERS_LIST'				=> 'Përdoruesit për t’u krasitur',
	'PRUNE_USERS_LIST_DELETE'		=> 'Sipas kritereve të zgjedhura, llogaritë e mëposhtme do të hiqen. Mund t’i hiqni përdoruesit veçmas nga lista e fshirjes duke çzgjedhur kutinë pranë emrit të tyre.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Sipas kritereve të zgjedhura, llogaritë e mëposhtme do të çaktivizohen. Mund t’i hiqni përdoruesit veçmas nga lista e çaktivizimit duke çzgjedhur kutinë pranë emrit të tyre.',

	'SELECT_USERS_EXPLAIN'		=> 'Vendosni këtu emra të caktuar përdoruesish. Ata do të kenë përparësi ndaj kritereve më sipër. Themeluesit nuk mund të krasiten.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Përdoruesit e zgjedhur u çaktivizuan me sukses.',
	'USER_DELETE_SUCCESS'		=> 'Përdoruesit e zgjedhur u fshinë me sukses.',
	'USER_PRUNE_FAILURE'		=> 'Asnjë përdorues nuk i plotëson kriteret e zgjedhura.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Data e vendosur është e gabuar; pritet formati <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Kjo do të fshijë çdo temë që nuk është postuar ose parë brenda numrit të ditëve që zgjidhni. Nëse nuk vendosni numër, do të fshihen të gjitha temat. Si parazgjedhje, nuk do të hiqen temat me sondazhe ende aktive, temat ngjitëse dhe njoftimet.',

	'FORUM_PRUNE'		=> 'Krasitja e forumit',

	'NO_PRUNE'			=> 'Nuk u krasit asnjë forum.',

	'SELECTED_FORUM'	=> 'Forumi i zgjedhur',
	'SELECTED_FORUMS'	=> 'Forumet e zgjedhura',

	'POSTS_PRUNED'					=> 'Postime të krasitura',
	'PRUNE_ANNOUNCEMENTS'			=> 'Krasitni njoftimet',
	'PRUNE_FINISHED_POLLS'			=> 'Krasitni sondazhet e mbyllura',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Heq temat me sondazhe që kanë përfunduar.',
	'PRUNE_FORUM_CONFIRM'			=> 'Jeni të sigurt se dëshironi t’i krasitni forumet e zgjedhura me cilësimet e dhëna? Pasi të hiqen, postimet dhe temat e krasitura nuk mund të rikuperohen.',
	'PRUNE_NOT_POSTED'				=> 'Ditë nga postimi i fundit',
	'PRUNE_NOT_VIEWED'				=> 'Ditë nga shikimi i fundit',
	'PRUNE_OLD_POLLS'				=> 'Krasitni sondazhet e vjetra',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Heq temat me sondazhe ku nuk është votuar për aq ditë sa mosha e postimit.',
	'PRUNE_STICKY'					=> 'Krasitni temat ngjitëse',
	'PRUNE_SUCCESS'					=> 'Forumet u krasitën me sukses.',

	'TOPICS_PRUNED'		=> 'Tema të krasitura',
));
