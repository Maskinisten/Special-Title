<?php
/**
*
* @package phpBB Extension - Special Title
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'ACL_U_SPECIALTITLE_USE'		=> 'Può impostare titolo',
	'SPECIAL_TITLE'				 	=> 'Titolo',
	'SPECIAL_TITLE_EXPLAIN'		 	=> '<em>Un titolo a destra del proprio nome utente di massimo 8 caratteri.</em>',
	'SPECIAL_TITLE_COLOUR'			=> 'Colore titolo',
	'SPECIAL_TITLE_COLOUR_EXPLAIN'	=> '<em>Scegli un valore dal selettore oppure inseriscilo direttamente.</em>',
));
