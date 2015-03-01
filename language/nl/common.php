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
	'PMREGBAR_WELCOME'		        => 'Welkom bij',
    'PMREGBAR_REGISTER'		        => 'Klik hier om te registreren', 
    'PMREGBAR_HELLO'			    => 'Hallo',	
    'PMREGBAR_YOUHAVE'		        => '- Je hebt een prive bericht',
	'PMREGBAR_AND'			        => 'en',
	'PMREGBAR_CONFIG_SAVED'		    => 'PM Notificatie & Guest Registratie bar instellingen zijn opgeslagen',	
	'PMREGBAR_VERSION'			    => 'Versie',	
	'PMREGBAR_ENABLEPM'			    => 'Inschakelen prive berichten balk',
	'PMREGBAR_ENABLEPM_EXPLAIN'	    => 'In of Uit schaken prive berichten balk',
	'PMREGBAR_ENABLEREG'		    => 'Inschakelen registratie balk',
	'PMREGBAR_ENABLEREG_EXPLAIN'    => 'In of Uit schakelen registratie balk',
	'PMREGBAR_ENABLE_TEXT'		    => 'Inschakelen alternatieve tekst',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'  => 'Als je Ja aanvinkt, vul in onderstaande tekstveld de alternatieve tekst in',
	'PMREGBAR_TEXT_FIELD'           => 'Alternatieve tekst veld',
    'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Vul hier jouw alternatieve tekst in',
)); 
