<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\pmregbar\migrations;

class pmregbar_v106 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\pmregbar\migrations\pmregbar_v105',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['pmregbar_version', '1.0.6']],
		];
	}
}
