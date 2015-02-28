<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* @Polish translation by HPK
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
	'PMG_WELCOME'		=> 'Witaj na',
    'PMG_REGISTER'		=> 'Kliknij i zarejestruj się', 
    'PMG_HELLO'			=> 'Cześć',	
    'PMG_YOUHAVE'		=> '- dostałeś prywatną wiadomość',
	'PMG_AND'			=> 'i',
	'ACP_PMREGBAR_CONFIG'		  => 'PW Powiadomienie i Informacja o rejestracji dla gości',
	'PMREGVERSION_VERSION'	      => 'Wersja',
	'ACP_PMREGBAR_CONFIG_SET'	  => 'Konfiguracja',	
	'PMREGBAR_CONFIG_SAVED'		  => 'Konfiguracja została zmieniona',	
	'PMREGBAR_VERSION'			  => 'Wersja',	
	'PMREGBAR_ENABLEPM'			  => 'Włącz powiadomienia o Prywatnych Wiadomościach',
	'PMREGBAR_ENABLEPM_EXPLAIN'	  => 'Włącza lub wyłącza wyświetlanie powiadomień o przychodzących Prywatnych Wiadomościach.',
	'PMREGBAR_ENABLEREG'		  => 'Włącz informację o rejestracji',
	'PMREGBAR_ENABLEREG_EXPLAIN'  => 'Włącza lub wyłącza wyświetlanie paska informującego gości o rejestracji na forum.',
)); 
