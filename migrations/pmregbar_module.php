<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\pmregbar\migrations;

class pmregbar_module extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_PMREGBAR')),
			array('module.add', array(
				'acp', 'ACP_PMREGBAR', array(
					'module_basename'	=> '\dmzx\pmregbar\acp\pmregbar_module',
					'modes'		=> array('config'),
				),
			)),
		);
	}
}
