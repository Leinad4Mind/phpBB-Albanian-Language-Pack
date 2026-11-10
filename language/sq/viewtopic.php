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
	'APPROVE'								=> 'Mirato',
	'ATTACHMENT'						=> 'Bashkëngjitje',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Funksioni i bashkëngjitjeve është çaktivizuar.',

	'BOOKMARK_ADDED'		=> 'Tema u shënua me sukses.',
	'BOOKMARK_ERR'			=> 'Shënimi i temës dështoi. Ju lutemi provoni përsëri.',
	'BOOKMARK_REMOVED'		=> 'Tema e shënuar me faqe u hoq me sukses.',
	'BOOKMARK_TOPIC'		=> 'Shënoni temën',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Hiq nga faqeshënuesit',
	'BUMPED_BY'				=> 'Përplasja e fundit nga %1$s në %2$s.',
	'BUMP_TOPIC'			=> 'Tema e përplasjes',

	'DELETE_TOPIC'			=> 'Fshije temën',
	'DELETED_INFORMATION'	=> 'Fshirë nga %1$s në %2$s',
	'DISAPPROVE'					=> 'Mos miratoni',
	'DOWNLOAD_NOTICE'		=> 'Ju nuk keni lejet e nevojshme për të parë skedarët e bashkangjitur këtij postimi.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Redaktuar së fundi nga %2$s në %3$s, koha e modifikuar %1$d në total.',
		2	=> 'Redaktuar së fundi nga %2$s në %3$s, modifikuar %1$d herë në total.',
	),
	'EMAIL_TOPIC'			=> 'Tema e emailit',
	'ERROR_NO_ATTACHMENT'	=> 'Bashkëngjitja e zgjedhur nuk ekziston më.',

	'FILE_NOT_FOUND_404'	=> 'Skedari <strong>%s</strong> nuk ekziston.',
	'FORK_TOPIC'			=> 'Kopjoni temën',
	'FULL_EDITOR'			=> 'Pamje paraprake e redaktuesit të plotë &amp;',

	'LINKAGE_FORBIDDEN'		=> 'Ju nuk jeni të autorizuar për të parë, shkarkuar ose lidhur nga/në këtë sajt.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Ju jeni njoftuar për këtë temë, ju lutemi identifikohuni për ta parë atë.',
	'LOGIN_VIEWTOPIC'		=> 'Bordi kërkon që ju të regjistroheni dhe të identifikoheni për të parë këtë temë.',

	'MAKE_ANNOUNCE'				=> 'Ndrysho në "Njoftim"',
	'MAKE_GLOBAL'				=> 'Ndrysho në "Global"',
	'MAKE_NORMAL'				=> 'Ndrysho në "Tema standarde"',
	'MAKE_STICKY'				=> 'Ndrysho në "Ngjitës"',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Ju mund të zgjidhni opsionin <strong>%d</strong>',
		2	=> 'Mund të zgjidhni deri në opsione <strong>%d</strong>',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Shtojca <strong>%s</strong> nuk është më e disponueshme',
	'MOVE_TOPIC'				=> 'Zhvendos temën',

	'NO_ATTACHMENT_SELECTED'=> 'Nuk keni zgjedhur një bashkëngjitje për ta shkarkuar ose parë.',
	'NO_NEWER_TOPICS'		=> 'Nuk ka tema më të reja në këtë forum.',
	'NO_OLDER_TOPICS'		=> 'Nuk ka tema më të vjetra në këtë forum.',
	'NO_UNREAD_POSTS'		=> 'Nuk ka postime të reja të palexuara për këtë temë.',
	'NO_VOTE_OPTION'		=> 'Ju duhet të specifikoni një opsion kur votoni.',
	'NO_VOTES'				=> 'Asnjë votë',
	'NO_AUTH_PRINT_TOPIC'	=> 'Ju nuk jeni të autorizuar të printoni tema.',

	'POLL_ENDED_AT'			=> 'Sondazhi përfundoi në %s',
	'POLL_RUN_TILL'			=> 'Sondazhi zgjat deri në %s',
	'POLL_VOTED_OPTION'		=> 'Ju votuat për këtë opsion',
	'POST_DELETED_RESTORE'	=> 'Ky postim është fshirë. Mund të restaurohet.',
	'PRINT_TOPIC'			=> 'Pamja e printimit',

	'QUICK_MOD'				=> 'Mjetet e modalitetit të shpejtë',
	'QUICKREPLY'			=> 'Përgjigje e shpejtë',

	'REPLY_TO_TOPIC'		=> 'Përgjigju temës',
	'RESTORE'				=> 'Rivendos',
	'RESTORE_TOPIC'			=> 'Rivendos temën',
	'RETURN_POST'			=> '%sKthehuni te posti%s',

	'SUBMIT_VOTE'			=> 'Paraqisni votën',

	'TOPIC_TOOLS'			=> 'Mjetet e temës',
	'TOTAL_VOTES'			=> 'Totali i votave',

	'UNLOCK_TOPIC'			=> 'Zhblloko temën',

	'VIEW_INFO'				=> 'Detajet e postimit',
	'VIEW_NEXT_TOPIC'		=> 'Tema tjetër',
	'VIEW_PREVIOUS_TOPIC'	=> 'Tema e mëparshme',
	'VIEW_QUOTED_POST'		=> 'Shiko postimin e cituar',
	'VIEW_RESULTS'			=> 'Shiko rezultatet',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> 'Postimi %d',
		2	=> '%d postime',
	),
	'VIEW_UNREAD_POST'		=> 'Postimi i parë i palexuar',
	'VOTE_SUBMITTED'		=> 'Vota juaj është hedhur.',
	'VOTE_CONVERTED'		=> 'Ndryshimi i votave nuk mbështetet për sondazhet e konvertuara.',

));
