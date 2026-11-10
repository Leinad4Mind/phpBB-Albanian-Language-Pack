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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Veprimet',
	'ACL_CAT_CONTENT'		=> 'Përmbajtja',
	'ACL_CAT_FORUMS'		=> 'Forumet',
	'ACL_CAT_MISC'			=> 'Të ndryshme',
	'ACL_CAT_PERMISSIONS'	=> 'Lejet',
	'ACL_CAT_PM'			=> 'Mesazhet private',
	'ACL_CAT_POLLS'			=> 'Sondazhet',
	'ACL_CAT_POST'			=> 'Postimi',
	'ACL_CAT_POST_ACTIONS'	=> 'Veprimet me postime',
	'ACL_CAT_POSTING'		=> 'Postimi',
	'ACL_CAT_PROFILE'		=> 'Profili',
	'ACL_CAT_SETTINGS'		=> 'Cilësimet',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Veprimet me tema',
	'ACL_CAT_USER_GROUP'	=> 'Përdoruesit &amp; grupet',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Mund të shohë profilet, listën e anëtarëve dhe listën në linjë',
	'ACL_U_CHGNAME'		=> 'Mund të ndryshojë emrin e përdoruesit',
	'ACL_U_CHGPASSWD'	=> 'Mund të ndryshojë fjalëkalimin',
	'ACL_U_CHGEMAIL'	=> 'Mund të ndryshojë adresën e emailit',
	'ACL_U_CHGAVATAR'	=> 'Mund të ndryshojë avatarin',
	'ACL_U_CHGGRP'		=> 'Mund të ndryshojë grupin e parazgjedhur',
	'ACL_U_CHGPROFILEINFO'	=> 'Mund të ndryshojë të dhënat e fushave të profilit',

	'ACL_U_ATTACH'		=> 'Mund të bashkëngjisë skedarë',
	'ACL_U_DOWNLOAD'	=> 'Mund të shkarkojë skedarë',
	'ACL_U_SAVEDRAFTS'	=> 'Mund të ruajë skica',
	'ACL_U_CHGCENSORS'	=> 'Mund ta çaktivizojë censurimin e fjalëve',
	'ACL_U_SIG'			=> 'Mund të përdorë nënshkrim',
	'ACL_U_EMOJI'		=> 'Mund të përdorë emoji dhe shenja të pasura teksti në titullin e temës',

	'ACL_U_SENDPM'		=> 'Mund të dërgojë mesazhe private',
	'ACL_U_MASSPM'		=> 'Mund t’u dërgojë mesazhe private disa përdoruesve',
	'ACL_U_MASSPM_GROUP'=> 'Mund t’u dërgojë mesazhe private grupeve',
	'ACL_U_READPM'		=> 'Mund të lexojë mesazhe private',
	'ACL_U_PM_EDIT'		=> 'Mund t’i redaktojë mesazhet e veta private',
	'ACL_U_PM_DELETE'	=> 'Mund t’i heqë mesazhet private nga dosja e vet',
	'ACL_U_PM_FORWARD'	=> 'Mund t’i përcjellë mesazhet private',
	'ACL_U_PM_EMAILPM'	=> 'Mund t’i dërgojë mesazhet private me email',
	'ACL_U_PM_PRINTPM'	=> 'Mund t’i shtypë mesazhet private',
	'ACL_U_PM_ATTACH'	=> 'Mund të bashkëngjisë skedarë në mesazhe private',
	'ACL_U_PM_DOWNLOAD'	=> 'Mund të shkarkojë skedarë nga mesazhet private',
	'ACL_U_PM_BBCODE'	=> 'Mund të përdorë BBCode në mesazhe private',
	'ACL_U_PM_SMILIES'	=> 'Mund të përdorë emotikone në mesazhe private',
	'ACL_U_PM_IMG'		=> 'Mund të përdorë etiketën BBCode [img] në mesazhe private',
	'ACL_U_PM_FLASH'	=> 'Mund të përdorë etiketën BBCode [flash] në mesazhe private',

	'ACL_U_SENDEMAIL'	=> 'Mund të dërgojë emaile',
	'ACL_U_SENDIM'		=> 'Mund të dërgojë mesazhe të çastit',
	'ACL_U_IGNOREFLOOD'	=> 'Mund ta shpërfillë kufirin e shpeshtësisë',
	'ACL_U_HIDEONLINE'	=> 'Mund ta fshehë gjendjen në linjë',
	'ACL_U_VIEWONLINE'	=> 'Mund t’i shohë përdoruesit e fshehur në linjë',
	'ACL_U_SEARCH'		=> 'Mund të kërkojë në forum',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Mund ta shohë forumin',
	'ACL_F_LIST_TOPICS' => 'Mund t’i shohë temat',
	'ACL_F_READ'		=> 'Mund ta lexojë forumin',
	'ACL_F_SEARCH'		=> 'Mund të kërkojë në forum',
	'ACL_F_SUBSCRIBE'	=> 'Mund të abonohet në forum',
	'ACL_F_PRINT'		=> 'Mund t’i shtypë temat',
	'ACL_F_EMAIL'		=> 'Mund t’i dërgojë temat me email',
	'ACL_F_BUMP'		=> 'Mund t’i ngrejë temat',
	'ACL_F_USER_LOCK'	=> 'Mund t’i kyçë temat e veta',
	'ACL_F_DOWNLOAD'	=> 'Mund të shkarkojë skedarë',
	'ACL_F_REPORT'		=> 'Mund të raportojë postime',

	'ACL_F_POST'		=> 'Mund të nisë tema të reja',
	'ACL_F_STICKY'		=> 'Mund të postojë tema ngjitëse',
	'ACL_F_ANNOUNCE'	=> 'Mund të postojë njoftime',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Mund të postojë njoftime globale',
	'ACL_F_REPLY'		=> 'Mund t’u përgjigjet temave',
	'ACL_F_EDIT'		=> 'Mund t’i redaktojë postimet e veta',
	'ACL_F_DELETE'		=> 'Mund t’i fshijë përgjithmonë postimet e veta',
	'ACL_F_SOFTDELETE'	=> 'Mund t’i fshijë butësisht postimet e veta<br /><em>Moderatorët me leje miratimi mund t’i rikthejnë postimet e fshira butësisht.</em>',
	'ACL_F_IGNOREFLOOD' => 'Mund ta shpërfillë kufirin e shpeshtësisë',
	'ACL_F_POSTCOUNT'	=> 'Rrit numëruesin e postimeve<br /><em>Ky cilësim prek vetëm postimet e reja.</em>',
	'ACL_F_NOAPPROVE'	=> 'Mund të postojë pa miratim',

	'ACL_F_ATTACH'		=> 'Mund të bashkëngjisë skedarë',
	'ACL_F_ICONS'		=> 'Mund të përdorë ikona temash/postimesh',
	'ACL_F_BBCODE'		=> 'Mund të përdorë BBCode',
	'ACL_F_FLASH'		=> 'Mund të përdorë etiketën BBCode [flash]',
	'ACL_F_IMG'			=> 'Mund të përdorë etiketën BBCode [img]',
	'ACL_F_SIGS'		=> 'Mund të përdorë nënshkrime',
	'ACL_F_SMILIES'		=> 'Mund të përdorë emotikone',

	'ACL_F_POLL'		=> 'Mund të krijojë sondazhe',
	'ACL_F_VOTE'		=> 'Mund të votojë në sondazhe',
	'ACL_F_VOTECHG'		=> 'Mund ta ndryshojë votën ekzistuese',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Mund të redaktojë postime',
	'ACL_M_DELETE'		=> 'Mund të fshijë postime përgjithmonë',
	'ACL_M_SOFTDELETE'	=> 'Mund të fshijë postime butësisht<br /><em>Moderatorët me leje miratimi mund t’i rikthejnë postimet e fshira butësisht.</em>',
	'ACL_M_APPROVE'		=> 'Mund të miratojë dhe rikthejë postime',
	'ACL_M_REPORT'		=> 'Mund të mbyllë dhe fshijë raportime',
	'ACL_M_CHGPOSTER'	=> 'Mund ta ndryshojë autorin e postimit',

	'ACL_M_MOVE'	=> 'Mund të zhvendosë tema',
	'ACL_M_LOCK'	=> 'Mund të kyçë tema',
	'ACL_M_SPLIT'	=> 'Mund të ndajë tema',
	'ACL_M_MERGE'	=> 'Mund të bashkojë tema',

	'ACL_M_INFO'		=> 'Mund t’i shohë hollësitë e postimit',
	'ACL_M_WARN'		=> 'Mund të japë paralajmërime',
	'ACL_M_PM_REPORT'	=> 'Mund të mbyllë dhe fshijë raportime të mesazheve private',
	'ACL_M_BAN'			=> 'Mund të menaxhojë ndalimet',
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Mund të ndryshojë cilësimet e forumit dhe të kontrollojë përditësimet',
	'ACL_A_SERVER'		=> 'Mund të ndryshojë cilësimet e serverit/komunikimit',
	'ACL_A_JABBER'		=> 'Mund të ndryshojë cilësimet e Jabber-it',
	'ACL_A_PHPINFO'		=> 'Mund t’i shohë cilësimet e PHP-së',

	'ACL_A_FORUM'		=> 'Mund të menaxhojë forumet',
	'ACL_A_FORUMADD'	=> 'Mund të shtojë forume të reja',
	'ACL_A_FORUMDEL'	=> 'Mund të fshijë forume',
	'ACL_A_PRUNE'		=> 'Mund të krasitë forumet',

	'ACL_A_ICONS'		=> 'Mund të ndryshojë ikonat e temave/postimeve dhe emotikonet',
	'ACL_A_WORDS'		=> 'Mund të ndryshojë censurimin e fjalëve',
	'ACL_A_BBCODE'		=> 'Mund të përcaktojë etiketa BBCode',
	'ACL_A_ATTACH'		=> 'Mund të ndryshojë cilësimet e bashkëngjitjeve',

	'ACL_A_USER'		=> 'Mund të menaxhojë përdoruesit<br /><em>Kjo përfshin shikimin e agjentit të shfletuesit në listën e përdoruesve në linjë.</em>',
	'ACL_A_USERDEL'		=> 'Mund të fshijë/krasitë përdoruesit',
	'ACL_A_GROUP'		=> 'Mund të menaxhojë grupet',
	'ACL_A_GROUPADD'	=> 'Mund të shtojë grupe të reja',
	'ACL_A_GROUPDEL'	=> 'Mund të fshijë grupe',
	'ACL_A_RANKS'		=> 'Mund të menaxhojë rangjet',
	'ACL_A_PROFILE'		=> 'Mund të menaxhojë fushat e personalizuara të profilit',
	'ACL_A_NAMES'		=> 'Mund të menaxhojë emrat e palejuar',
	'ACL_A_BAN'			=> 'Mund të menaxhojë ndalimet',

	'ACL_A_VIEWAUTH'	=> 'Mund t’i shohë maskat e lejeve',
	'ACL_A_AUTHGROUPS'	=> 'Mund të ndryshojë lejet e grupeve të veçanta',
	'ACL_A_AUTHUSERS'	=> 'Mund të ndryshojë lejet e përdoruesve të veçantë',
	'ACL_A_FAUTH'		=> 'Mund të ndryshojë klasën e lejeve të forumit',
	'ACL_A_MAUTH'		=> 'Mund të ndryshojë klasën e lejeve të moderatorit',
	'ACL_A_AAUTH'		=> 'Mund të ndryshojë klasën e lejeve të administratorit',
	'ACL_A_UAUTH'		=> 'Mund të ndryshojë klasën e lejeve të përdoruesit',
	'ACL_A_ROLES'		=> 'Mund të menaxhojë rolet',
	'ACL_A_SWITCHPERM'	=> 'Mund të përdorë lejet e të tjerëve',

	'ACL_A_STYLES'		=> 'Mund të menaxhojë stilet',
	'ACL_A_EXTENSIONS'	=> 'Mund të menaxhojë shtesat',
	'ACL_A_VIEWLOGS'	=> 'Mund t’i shohë regjistrat',
	'ACL_A_CLEARLOGS'	=> 'Mund t’i pastrojë regjistrat',
	'ACL_A_MODULES'		=> 'Mund të menaxhojë modulet',
	'ACL_A_LANGUAGE'	=> 'Mund të menaxhojë paketat gjuhësore',
	'ACL_A_EMAIL'		=> 'Mund të dërgojë email masiv',
	'ACL_A_BOTS'		=> 'Mund të menaxhojë robotët',
	'ACL_A_REASONS'		=> 'Mund të menaxhojë arsyet e raportimit/refuzimit',
	'ACL_A_BACKUP'		=> 'Mund të krijojë/rikthejë kopje rezervë të bazës së të dhënave',
	'ACL_A_SEARCH'		=> 'Mund të menaxhojë motorët dhe cilësimet e kërkimit',
));
