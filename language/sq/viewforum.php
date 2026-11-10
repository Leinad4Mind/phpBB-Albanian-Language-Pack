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
	'ACTIVE_TOPICS'			=> 'Tema aktive',
	'ANNOUNCEMENTS'			=> 'Njoftimet',

	'FORUM_PERMISSIONS'		=> 'Lejet e forumit',

	'ICON_ANNOUNCEMENT'		=> 'Njoftim',
	'ICON_STICKY'			=> 'Ngjitëse',

	'LOGIN_NOTIFY_FORUM'	=> 'Ju jeni njoftuar për këtë forum, ju lutemi identifikohuni për ta parë atë.',

	'MARK_TOPICS_READ'		=> 'Shënoni temat e lexuara',

	'NEW_POSTS_HOT'			=> 'Postime të reja [ Popullore ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Postime të reja [E kyçur]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Nuk ka postime të reja [ Popullore ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Nuk ka postime të reja [E mbyllur]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Ju nuk keni lejet e nevojshme për të parë ose lexuar tema brenda këtij forumi.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Kjo kategori nuk ka forume.',
	'NO_UNREAD_POSTS_HOT'		=> 'Nuk ka postime të palexuara [ Popullore ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Nuk ka postime të palexuara [E kyçur]',

	'POST_FORUM_LOCKED'		=> 'Forumi është i mbyllur',

	'TOPICS_MARKED'			=> 'Temat për këtë forum tani janë shënuar të lexuara.',

	'UNREAD_POSTS_HOT'		=> 'Postime të palexuara [ Popullore ]',
	'UNREAD_POSTS_LOCKED'	=> 'Postime të palexuara [E kyçur]',

	'VIEW_FORUM'			=> 'Shiko forumin',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> 'Tema %d',
		2	=> '%d tema',
	),
));
