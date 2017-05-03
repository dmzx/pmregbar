<?php
/**
*
* @version $Id: common.php 100 2017-05-03 17:27:56Z Scanialady $
* @package phpBB Extension - PM Notify & Guest Register bar (deutsch)
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
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
//
// Some characters for use
// ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'PMREGBAR_CONFIG_SAVED'			=> 'PM Benachrichtigung & Gäste-Registrierungsleiste Einstellungen gespeichert',
	'PMREGBAR_VERSION'				=> 'Version',
	'PMREGBAR_ENABLEPM'				=> 'Aktiviere Private Nachricht-Leiste',
	'PMREGBAR_ENABLEPM_EXPLAIN'		=> 'Aktiviere oder deaktiviere hier die Leiste für private Nachrichten',
	'PMREGBAR_ENABLEREG'			=> 'Aktiviere Registrierungsleiste',
	'PMREGBAR_ENABLEREG_EXPLAIN'	=> 'Aktiviere oder deaktiviere hier die Registrierungsleiste',
	'PMREGBAR_ENABLE_TEXT'			=> 'Aktiviere alternativen Text für Gäste-Registrierungsleiste',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'	=> 'Wenn dies auf Ja gestellt wird, fülle das Textfeld unten aus für die alternative Anzeige in der Gäste-Registrierungsleiste',
	'PMREGBAR_TEXT_FIELD'			=> 'Alternatives Textfeld für Gäste-Registrierungsleiste',
	'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Gib den alternativen Text hier ein',
	'PMREGBAR_MESSAGE'				=> 'Hallo %s, du hast eine Private Nachricht',
	'PMREGBAR_WELCOME'				=> 'Willkommen auf %s. Klicke hier, um dich zu registrieren',
));
