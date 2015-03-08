<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* @translated into French by Galixte (http://www.galixte.com)
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

$lang = array_merge($lang, array(
	'ACP_PMREGBAR'			            => 'Bandeau d’enregistrement & de notification des MP',
	'ACP_PMREGBAR_CONFIG_SETTINGS'		=> 'Paramètres',
	'ACP_PMREGBAR_CONFIG_SET'	        => 'Configuration',	
));

