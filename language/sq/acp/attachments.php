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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Këtu mund të konfiguroni cilësimet kryesore të bashkëngjitjeve dhe kategoritë e posaçme përkatëse.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Këtu mund të shtoni, fshini, ndryshoni ose çaktivizoni grupet e prapashtesave. Mund t’u caktoni kategori të posaçme, të ndryshoni mekanizmin e shkarkimit dhe të përcaktoni ikonën që shfaqet para bashkëngjitjes.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Këtu menaxhoni prapashtesat e lejuara. Për aktivizim, përdorni panelin e grupeve të prapashtesave. Rekomandohet fuqimisht të mos lejoni prapashtesa skriptimi (si <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> etj.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Këtu shfaqen skedarët jetimë, zakonisht kur përdoruesi bashkëngjit skedar por nuk e dorëzon postimin. Mund t’i fshini ose t’ua caktoni postimeve ekzistuese. Caktimi kërkon një ID të vlefshme postimi, të cilën duhet ta përcaktoni vetë.',
	'ADD_EXTENSION'						=> 'Shtoni prapashtesë',
	'ADD_EXTENSION_GROUP'				=> 'Shtoni grup prapashtesash',
	'ADMIN_UPLOAD_ERROR'				=> 'Gabime gjatë bashkëngjitjes së skedarit: “%s”.',
	'ALLOWED_FORUMS'					=> 'Forumet e lejuara',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Lejon postimin e prapashtesave të caktuara në forumet e zgjedhura ose në të gjitha.',
	'ALLOWED_IN_PM_POST'				=> 'Lejohet',
	'ALLOW_ATTACHMENTS'					=> 'Lejoni bashkëngjitjet',
	'ALLOW_ALL_FORUMS'					=> 'Lejoni të gjitha forumet',
	'ALLOW_IN_PM'						=> 'Lejohet në mesazhet private',
	'ALLOW_PM_ATTACHMENTS'				=> 'Lejoni bashkëngjitje në mesazhe private',
	'ALLOW_SELECTED_FORUMS'				=> 'Vetëm forumet e zgjedhura më poshtë',
	'ASSIGNED_EXTENSIONS'				=> 'Prapashtesat e caktuara',
	'ASSIGNED_GROUP'					=> 'Grupi i caktuar i prapashtesave',
	'ATTACH_EXTENSIONS_URL'				=> 'Prapashtesat',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupet e prapashtesave',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Madhësia maksimale e skedarit',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Madhësia maksimale e secilit skedar. Me 0 kufizohet vetëm nga konfigurimi i PHP-së.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Madhësia maksimale në mesazhe',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Madhësia maksimale e secilit skedar në mesazh privat; 0 është pa kufi.',
	'ATTACH_ORPHAN_URL'					=> 'Bashkëngjitjet jetime',
	'ATTACH_POST_ID'					=> 'ID e postimit',
	'ATTACH_POST_TYPE'					=> 'Lloji i postimit',
	'ATTACH_QUOTA'						=> 'Kuota gjithsej e bashkëngjitjeve',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Hapësira maksimale për bashkëngjitjet e të gjithë forumit; 0 është pa kufi.',
	'ATTACH_TO_POST'					=> 'Bashkëngjiteni skedarin te postimi',

	'CAT_IMAGES'				=> 'Figurat',
	'CHECK_CONTENT'				=> 'Kontrolloni skedarët e bashkëngjitur',
	'CHECK_CONTENT_EXPLAIN'		=> 'Disa shfletues mund të mashtrohen me lloj MIME të gabuar. Ky opsion refuzon skedarët që mund ta shkaktojnë këtë.',
	'CREATE_GROUP'				=> 'Krijoni grup të ri',
	'CREATE_THUMBNAIL'			=> 'Krijoni miniaturë',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Krijon miniaturë në çdo rast të mundshëm.',

	'DEFINE_ALLOWED_IPS'			=> 'Përcaktoni IP-të/hostet e lejuara',
	'DEFINE_DISALLOWED_IPS'			=> 'Përcaktoni IP-të/hostet e palejuara',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Për të përcaktuar disa IP ose emra hostesh, vendoseni secilin në një rresht të ri. Për të përcaktuar një interval adresash IP, ndani adresën fillestare dhe atë përfundimtare me vizë (-); për një shenjë universale përdorni “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Mund të hiqni ose çpërjashtoni disa IP njëherësh me kombinimin e duhur të miut dhe tastierës. IP-të e përjashtuara kanë sfond blu.',
	'DISPLAY_INLINED'				=> 'Shfaqini figurat brenda tekstit',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Nëse vendoset Jo, figurat e bashkëngjitura shfaqen si lidhje.',
	'DISPLAY_ORDER'					=> 'Renditja e bashkëngjitjeve',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Shfaqini bashkëngjitjet të renditura sipas kohës.',

	'EDIT_EXTENSION_GROUP'			=> 'Redaktoni grupin e prapashtesave',
	'EXCLUDE_ENTERED_IP'			=> 'Aktivizojeni për ta përjashtuar IP-në/hostin e vendosur.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Përjashtojeni IP-në nga IP-të/hostet e lejuara',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Përjashtojeni IP-në nga IP-të/hostet e palejuara',
	'EXTENSIONS_UPDATED'			=> 'Prapashtesat u përditësuan me sukses.',
	'EXTENSION_EXIST'				=> 'Prapashtesa %s ekziston tashmë.',
	'EXTENSION_GROUP'				=> 'Grupi i prapashtesave',
	'EXTENSION_GROUPS'				=> 'Grupet e prapashtesave',
	'EXTENSION_GROUP_DELETED'		=> 'Grupi i prapashtesave u fshi me sukses.',
	'EXTENSION_GROUP_EXIST'			=> 'Grupi i prapashtesave %s ekziston tashmë.',

	'EXT_GROUP_ARCHIVES'			=> 'Arkivat',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumentet',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Skedarët e shkarkueshëm',
	'EXT_GROUP_IMAGES'				=> 'Figurat',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Teksti i thjeshtë',

	'FILES_GONE'			=> 'Disa bashkëngjitje të zgjedhura nuk ekzistojnë dhe mund të jenë fshirë tashmë. Bashkëngjitjet që ekzistonin u fshinë.',
	'FILES_STATS_WRONG'		=> 'Statistikat e skedarëve mund të jenë të pasakta dhe duhen risinkronizuar. Vlerat reale: bashkëngjitje = %1$d, madhësia gjithsej = %2$s.<br />Klikoni %3$skëtu%4$s për risinkronizim.',

	'GO_TO_EXTENSIONS'		=> 'Shkoni te menaxhimi i prapashtesave',
	'GROUP_NAME'			=> 'Emri i grupit',

	'IMAGE_LINK_SIZE'			=> 'Përmasat e figurës për lidhje',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Shfaqeni figurën si lidhje tekstuale kur është më e madhe se këto përmasa. Për çaktivizim vendosni 0px me 0px.',
	'IMAGE_QUALITY'				=> 'Cilësia e figurave të ngarkuara (vetëm JPEG)',
	'IMAGE_QUALITY_EXPLAIN'		=> 'Vendosni 50% (skedar më i vogël) deri 90% (cilësi më e lartë). Mbi 90% rrit madhësinë dhe nuk lejohet. Zbatohet vetëm kur përmasat maksimale nuk janë 0px me 0px.',
	'IMAGE_STRIP_METADATA'		=> 'Hiqni metatëdhënat e figurës (vetëm JPEG)',
	'IMAGE_STRIP_METADATA_EXPLAIN'	=> 'Heq metatëdhënat Exif, si emri i autorit, koordinatat GPS dhe të dhënat e kamerës. Zbatohet vetëm kur përmasat maksimale nuk janë 0px me 0px.',

	'MAX_ATTACHMENTS'				=> 'Numri maksimal i bashkëngjitjeve për postim',
	'MAX_ATTACHMENTS_PM'			=> 'Numri maksimal i bashkëngjitjeve për mesazh privat',
	'MAX_EXTGROUP_FILESIZE'			=> 'Madhësia maksimale e skedarit',
	'MAX_IMAGE_SIZE'				=> 'Përmasat maksimale të figurës',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Përmasat maksimale të figurave. phpBB mund të provojë t’i ripërmasojë automatikisht para ngarkimit. Vendosni 0px me 0px për të çaktivizuar kontrollin dhe ripërmasimin.',
	'MAX_THUMB_WIDTH'				=> 'Gjerësia/lartësia maksimale e miniaturës në pikselë',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Miniatura e krijuar nuk e tejkalon gjerësinë e caktuar.',
	'MIN_THUMB_FILESIZE'			=> 'Madhësia minimale për miniaturë',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Mos krijoni miniaturë për figura më të vogla se kjo.',
	'MODE_INLINE'					=> 'Brenda tekstit',
	'MODE_PHYSICAL'					=> 'Fizik',

	'NOT_ALLOWED_IN_PM'			=> 'Lejohet vetëm në postime',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Nuk lejohet',
	'NOT_ASSIGNED'				=> 'E pacaktuar',
	'NO_ATTACHMENTS'			=> 'Nuk u gjetën bashkëngjitje për këtë periudhë.',
	'NO_EXT_GROUP'				=> 'Asnjë',
	'NO_EXT_GROUP_ALLOWED_PM'	=> 'Nuk ka <a href="%s">grupe të lejuara prapashtesash</a> për mesazhet private.',
	'NO_EXT_GROUP_ALLOWED_POST'	=> 'Nuk ka <a href="%s">grupe të lejuara prapashtesash</a> për postimet.',
	'NO_EXT_GROUP_NAME'			=> 'Nuk u vendos emër grupi',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nuk u përcaktua grup prapashtesash.',
	'NO_FILE_CAT'				=> 'Asnjë',
	'NO_IMAGE'					=> 'Pa figurë',
	'NO_UPLOAD_DIR'				=> 'Dosja e përcaktuar e ngarkimit nuk ekziston.',
	'NO_WRITE_UPLOAD'			=> 'Në dosjen e ngarkimit nuk mund të shkruhet. Ndryshoni lejet që serveri i uebit të mund të shkruajë.',

	'ONLY_ALLOWED_IN_PM'	=> 'Lejohet vetëm në mesazhe private',
	'ORDER_ALLOW_DENY'		=> 'Lejoni',
	'ORDER_DENY_ALLOW'		=> 'Mohoni',

	'REMOVE_ALLOWED_IPS'			=> 'Hiqni ose çpërjashtoni IP/hoste <em>të lejuara</em>',
	'REMOVE_DISALLOWED_IPS'			=> 'Hiqni ose çpërjashtoni IP/hoste <em>të palejuara</em>',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Jeni të sigurt se dëshironi t’i risinkronizoni statistikat e skedarëve?',

	'SECURE_ALLOW_DENY'				=> 'Lista Lejo/Moho',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Caktoni sjelljen e listës si <strong>listë e bardhë</strong> (Lejo) ose <strong>listë e zezë</strong> (Moho) kur shkarkimet e sigurta janë aktive.',
	'SECURE_DOWNLOADS'				=> 'Aktivizoni shkarkimet e sigurta',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Shkarkimet kufizohen te IP-të/hostet që përcaktoni.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Shkarkimet e sigurta nuk janë aktive. Cilësimet më poshtë zbatohen pas aktivizimit.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Lista e IP-ve u përditësua me sukses.',
	'SECURE_EMPTY_REFERRER'			=> 'Lejoni referues bosh',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Shkarkimet e sigurta bazohen te referuesit. A dëshironi të lejoni shkarkime pa referues?',
	'SETTINGS_CAT_IMAGES'			=> 'Cilësimet e kategorisë së figurave',
	'SPECIAL_CATEGORY'				=> 'Kategori e posaçme',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Kategoritë e posaçme ndryshojnë mënyrën e paraqitjes në postime.',
	'SUCCESSFULLY_UPLOADED'			=> 'U ngarkua me sukses.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Grupi i prapashtesave u shtua me sukses.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Grupi i prapashtesave u përditësua me sukses.',

	'UPLOADING_FILES'				=> 'Ngarkimi i skedarëve',
	'UPLOADING_FILE_TO'				=> 'Po ngarkohet skedari “%1$s” te postimi %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Nuk keni leje të ngarkoni skedarë në forumin “%s”.',
	'UPLOAD_DIR'					=> 'Dosja e ngarkimit',
	'UPLOAD_DIR_EXPLAIN'			=> 'Shtegu i ruajtjes së bashkëngjitjeve. Nëse e ndryshoni pasi janë ngarkuar skedarë, duhet t’i kopjoni manualisht në vendndodhjen e re.',
	'UPLOAD_ICON'					=> 'Ikona e ngarkimit',
	'UPLOAD_NOT_DIR'				=> 'Vendndodhja e përcaktuar nuk duket se është dosje.',
	'UPLOAD_POST_NOT_EXIST'			=> 'Skedari “%1$s” nuk mund të ngarkohet te postimi %2$d sepse postimi nuk ekziston.',
));
