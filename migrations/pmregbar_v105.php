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

class pmregbar_v105 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\dmzx\pmregbar\migrations\pmregbar_schema',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('pmregbar_version', '1.0.5')),
		);
	}
}
