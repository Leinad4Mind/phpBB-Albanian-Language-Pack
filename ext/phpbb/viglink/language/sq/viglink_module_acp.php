<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Cilësimet e VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink është një shërbim i palës së tretë që monetizon në mënyrë diskrete lidhjet e postuara nga përdoruesit e forumit tuaj, pa ndryshuar përvojën e përdoruesit. Kur përdoruesit klikojnë lidhjet tuaja dalëse drejt produkteve ose shërbimeve dhe blejnë diçka, tregtarët i paguajnë VigLink-ut një komision, një pjesë e të cilit i dhurohet projektit phpBB. Duke zgjedhur të aktivizoni VigLink dhe t’ia dhuroni të ardhurat projektit phpBB, mbështetni organizatën tonë me burim të hapur dhe ndihmoni në sigurimin e vazhdimësisë së saj financiare.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Mund t’i ndryshoni këto cilësime në çdo kohë në panelin “<a href="%1$s">Cilësimet e VigLink</a>”.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Nuk do të ridrejtoheni më te kjo faqe pasi të paraqitni opsionet tuaja të preferuara më poshtë duke klikuar butonin Paraqisni.',
	'ACP_VIGLINK_ENABLE'			=> 'Aktivizo VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Aktivizon përdorimin e shërbimeve VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Kërkoni të ardhurat tuaja (opsionale)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Mund t’i kërkoni të ardhurat tuaja duke u regjistruar për një llogari VigLink Convert.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Shërbimet VigLink janë çaktivizuar nga phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Kërkoni të ardhurat tuaja',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Mund t’i merrni të ardhurat e forumit tuaj nga lidhjet e monetizuara nga VigLink, në vend që t’ia dhuroni projektit phpBB. Për të menaxhuar cilësimet e llogarisë, regjistrohuni për një llogari “VigLink Convert” duke klikuar “Konverto llogarinë”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Konverto llogarinë',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Lidhja për llogarinë VigLink Convert nuk mund të merrej.',
));
