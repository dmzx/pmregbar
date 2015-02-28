<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
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

$lang = array_merge($lang, array(
	'PMG_WELCOME'		=> 'Welcome to',
    'PMG_REGISTER'		=> 'Click here to register', 
    'PMG_HELLO'			=> 'Hello',	
    'PMG_YOUHAVE'		=> '- You have a private message',
	'PMG_AND'			=> 'and',
	'ACP_PMREGBAR_CONFIG'		  => 'PM Notify & Guest Register bar',
	'PMREGVERSION_VERSION'	      => 'Version',
	'ACP_PMREGBAR_CONFIG_SET'	  => 'Configuration',	
	'PMREGBAR_CONFIG_SAVED'		  => 'PM Notify & Guest Register bar settings saved',	
	'PMREGBAR_VERSION'			  => 'Version',	
	'PMREGBAR_ENABLEPM'			  => 'Enable private message bar',
	'PMREGBAR_ENABLEPM_EXPLAIN'	  => 'Enable or disable private message bar',
	'PMREGBAR_ENABLEREG'		  => 'Enable register bar',
	'PMREGBAR_ENABLEREG_EXPLAIN'  => 'Enable or disable register bar',
)); 
