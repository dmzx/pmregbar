<?php
/**
 *
 * PM Notify & Guest Register bar. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 dmzx <https://www.dmzx-web.net> & Stoker <http://www.phpbb3bbcodes.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'PMREGBAR_CONFIG_SAVED'			=> 'Les paramètres du bandeau d’enregistrement & de notification des MP ont été sauvegardés',
	'PMREGBAR_VERSION'				=> 'Version',
	'PMREGBAR_ENABLEPM'				=> 'Activer le bandeau de notification des MP',
	'PMREGBAR_ENABLEPM_EXPLAIN'		=> 'Active ou désactive le bandeau de notification des nouveaux messages privés reçus.',
	'PMREGBAR_ENABLEREG'			=> 'Activer le bandeau d’enregistrement',
	'PMREGBAR_ENABLEREG_EXPLAIN'	=> 'Active ou désactive le bandeau invitant les invités à s’enregistrer sur le forum.',
	'PMREGBAR_ENABLE_TEXT'			=> 'Activer le texte alternatif pour le bandeau d’enregistrement',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'	=> 'Si paramétré sur Oui veuillez remplir le champ de texte ci-dessous permettant d’afficher un message alternatif dans le bandeau d’enregistrement destiné aux invités.',
	'PMREGBAR_TEXT_FIELD'			=> 'Champ du texte alternatif pour le bandeau d’enregistrement',
	'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Veuillez remplir un message alternatif pour le bandeau d’enregistrement destiné aux invités.',
	'PMREGBAR_MESSAGE'				=> 'Bonjour %s vous avez un message privé',
	'PMREGBAR_WELCOME'				=> 'Bienvenue sur %s cliquez ici pour vous enregistrer',
));
