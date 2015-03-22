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
	'PMREGBAR_WELCOME'				=> 'Bienvenue sur',
	'PMREGBAR_REGISTER'				=> 'Cliquez ici pour vous enregistrer.',
	'PMREGBAR_HELLO'				=> 'Bonjour',
	'PMREGBAR_YOUHAVE'				=> '- Vous avez un message privé',
	'PMREGBAR_AND'					=> 'et',
	'PMREGBAR_CONFIG_SAVED'			=> 'Les paramètres ont été sauvegardés',
	'PMREGBAR_VERSION'				=> 'Version',
	'PMREGBAR_ENABLEPM'				=> 'Activer le bandeau de notification des MP',
	'PMREGBAR_ENABLEPM_EXPLAIN'		=> 'Active ou désactive le bandeau de notification des nouveaux messages privés reçus.',
	'PMREGBAR_ENABLEREG'			=> 'Activer le bandeau d’enregistrement',
	'PMREGBAR_ENABLEREG_EXPLAIN'	=> 'Active ou désactive le bandeau invitant les invités à s’enregistrer sur le forum.',
	'PMREGBAR_ENABLE_TEXT'			=> 'Activer le texte alternatif pour le bandeau d’enregistrement',
	'PMREGBAR_ENABLE_TEXT_EXPLAIN'  => 'Si paramétré sur Oui veuillez remplir le champ de texte ci-dessous permettant d’afficher un message alternatif dans le bandeau d’enregistrement destiné aux invités.',
	'PMREGBAR_TEXT_FIELD'		   => 'Champ du texte alternatif pour le bandeau d’enregistrement',
	'PMREGBAR_TEXT_FIELD_EXPLAIN'	=> 'Veuillez remplir un message alternatif pour le bandeau d’enregistrement destiné aux invités.',
));
