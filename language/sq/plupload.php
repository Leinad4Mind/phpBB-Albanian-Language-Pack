<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Shtoni skedarë',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Shtoni skedarë në radhën e ngarkimit dhe klikoni butonin e fillimit.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s tashmë është i pranishëm në radhë.',
	'PLUPLOAD_CLOSE'			=> 'Mbylle',
	'PLUPLOAD_DRAG'				=> 'Tërhiq skedarët këtu.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Gabim i skedarit të kopjuar.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Ju gjithashtu mund të bashkëngjitni skedarë duke i tërhequr dhe hedhur në kutinë e mesazheve.',
	'PLUPLOAD_ERR_INPUT'		=> 'Hapja e transmetimit të hyrjes dështoi.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Zhvendosja e skedarit të ngarkuar dështoi.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Hapja e transmetimit të daljes dështoi.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Skedari shumë i madh:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Gabim në numërimin e skedarëve.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Shtesa e pavlefshme e skedarit:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Koha e ekzekutimit i mbaroi memoria e disponueshme.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Ngarkimi i URL mund të jetë i gabuar ose nuk ekziston.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Gabim i zgjerimit të skedarit.',
	'PLUPLOAD_FILE'				=> 'Skedari: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Skedari: %s, madhësia: %d, madhësia maksimale e skedarit: %d',
	'PLUPLOAD_FILENAME'			=> 'Emri i skedarit',
	'PLUPLOAD_FILES_QUEUED'		=> 'Skedarët %d janë në radhë',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Gabim gjenerik.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Gabim HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Formati i imazhit ose i gabuar ose nuk mbështetet.',
	'PLUPLOAD_INIT_ERROR'		=> 'Gabim init.',
	'PLUPLOAD_IO_ERROR'			=> 'Gabim IO.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Gabim sigurie.',
	'PLUPLOAD_SELECT_FILES'		=> 'Zgjidhni skedarët',
	'PLUPLOAD_SIZE'				=> 'Madhësia',
	'PLUPLOAD_SIZE_ERROR'		=> 'Gabim në madhësinë e skedarit.',
	'PLUPLOAD_STATUS'			=> 'Statusi',
	'PLUPLOAD_START_UPLOAD'		=> 'Filloni ngarkimin',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Filloni të ngarkoni radhën',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Ndalo ngarkimin',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Ndalo ngarkimin aktual',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Skedarët e ngarkuar %d/%d',
));
