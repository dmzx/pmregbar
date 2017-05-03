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
// ’ » “ ” …

$lang = array_merge($lang, array(
	'PMREGBAR_CONFIG_SAVED'			=> 'Ajustes de la barra de PM Notify & Guest Register guardados',
	'PMREGBAR_VERSION'				=> 'Versión',
	'PMREGBAR_ENABLEPM'				=> 'Habilitar barra de mensajes privados',
	'PMREGBAR_ENABLEPM_EXPLAIN'		=> 'Habilitar o deshabilitar la barra de mensajes privados',
	'PMREGBAR_ENABLEREG'			=> 'Habilitar barra de registro',
	'PMREGBAR_ENABLEREG_EXPLAIN'	=> 'Habilitar o deshabilitar la barra de registro',
	'PMREGBAR_ENABLE_TEXT'			=> 'Habilitar texto alternativo en la barra de registro de invitados',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'	=> 'Si se establece en Si, rellene el siguiente campo de texto para la barra alternativa de registro de invitados',
	'PMREGBAR_TEXT_FIELD'			=> 'Campo de texto alternativo para la barra de registro de invitados',
	'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Rellene el texto alternativo',
	'PMREGBAR_MESSAGE'				=> 'Hola %s tiene un mensaje privado',
	'PMREGBAR_WELCOME'				=> 'Bienvenido a %s haga clic aquí para registrarse',
));
