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

class pmregbar_schema extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('pmregbar_enablepm', '')),
			array('config.add', array('pmregbar_enablereg', '')),
			array('config.add', array('pmregbar_enable_text', '')),
			array('config.add', array('pmregbar_enable_text_field', '')),
			array('config.add', array('pmregbar_version', '1.0.4')),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('pmregbar_enablepm')),
			array('config.remove', array('pmregbar_enablereg')),
			array('config.remove', array('pmregbar_enable_text')),
			array('config.remove', array('pmregbar_enable_text_field')),
			array('config.remove', array('pmregbar_version')),
		);
	}
}
