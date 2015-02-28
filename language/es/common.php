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
	'PMREGBAR_WELCOME'		        => 'Bienvenido a',
    'PMREGBAR_REGISTER'		        => 'Clic aquí para registrarse', 
    'PMREGBAR_HELLO'			    => 'Hola',	
    'PMREGBAR_YOUHAVE'		        => '- Tiene un mensaje privado',
	'PMREGBAR_AND'			        => 'y',
	'PMREGVERSION_VERSION'	        => 'Versión',
	'PMREGBAR_CONFIG_SAVED'		    => 'Ajustes de PM Notify & Guest Register guardados',	
	'PMREGBAR_VERSION'			    => 'Versión',	
	'PMREGBAR_ENABLEPM'			    => 'Habilitar barra de mensajes privados',
	'PMREGBAR_ENABLEPM_EXPLAIN'	    => 'Habilitar o deshabilitar barra de mensajes privados',
	'PMREGBAR_ENABLEREG'		    => 'Habilitar barra de registro',
	'PMREGBAR_ENABLEREG_EXPLAIN'    => 'Habilitar o deshabilitar barra de registro',
	'PMREGBAR_ENABLE_TEXT'		    => 'Habilitar texto alternativo',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'  => 'En caso afirmativo, rellene el campo de texto de abajo para el texto alternativo',
	'PMREGBAR_TEXT_FIELD'           => 'Campo de texto alternativo',
    'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Rellene el texto alternativo',
)); 
