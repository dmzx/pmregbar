<?php
/**
*
* @package phpBB Extension - PM Notify & Guest Register bar
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\pmregbar\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' => 'load_language_on_setup',
			'core.page_header'	=> 'add_page_header_link',
		);
	}
	protected $helper;

	protected $template;

	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->config = $config;		
	}
	
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/pmregbar',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
	
	public function add_page_header_link($event)
	
	{
		$this->template->assign_vars(array(
		'PMREGBAR_ENABLEPM'			=> $this->config['pmregbar_enablepm'] ? true : false,
		'PMREGBAR_ENABLEREG'		=> $this->config['pmregbar_enablereg'] ? true : false,
		));
	}
	
}
