<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\pmregbar\acp;

class pmregbar_info
{
	function module()
	{
		return array(
			'filename'	=> '\dmzx\pmregbar\acp\pmregbar_module',
			'title'		=> 'ACP_PMREGBAR',
			'modes'		=> array(
			'config'	=> array('title' => 'ACP_PMREGBAR_CONFIG_SETTINGS', 'auth' => 'ext_dmzx/pmregbar && acl_a_board', 'cat' => array('ACP_PMREGBAR')),
			),
		);
	}
}
