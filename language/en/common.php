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
	'PMREGBAR_WELCOME'				=> 'Welcome to',
	'PMREGBAR_REGISTER'				=> 'Click here to register',
	'PMREGBAR_HELLO'				=> 'Hello',
	'PMREGBAR_YOUHAVE'				=> '- You have a private message',
	'PMREGBAR_AND'					=> 'and',
	'PMREGBAR_CONFIG_SAVED'			=> 'PM Notify & Guest Register bar settings saved',
	'PMREGBAR_VERSION'				=> 'Version',
	'PMREGBAR_ENABLEPM'				=> 'Enable private message bar',
	'PMREGBAR_ENABLEPM_EXPLAIN'		=> 'Enable or disable private message bar',
	'PMREGBAR_ENABLEREG'			=> 'Enable register bar',
	'PMREGBAR_ENABLEREG_EXPLAIN'	=> 'Enable or disable register bar',
	'PMREGBAR_ENABLE_TEXT'			=> 'Enable alternative text for guest register bar',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'	=> 'If Yes fill in text field below for alternative guest register bar',
	'PMREGBAR_TEXT_FIELD'			=> 'Alternative text field for guest register bar',
	'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Fill in the alternative text',
));
