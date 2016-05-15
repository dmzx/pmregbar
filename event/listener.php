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
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\template\template			$template
	* @param \phpbb\config\config				$config
	* @param \phpbb\user						$user
	*/
	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config, \phpbb\user $user)
	{
		$this->template = $template;
		$this->config 	= $config;
		$this->user 	= $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' 	=> 'load_language_on_setup',
			'core.page_header'	=> 'add_page_header_link',
		);
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
			'PMREGBAR_ENABLE_TEXT'		=> $this->config['pmregbar_enable_text'] ? true : false,
			'PMREGBAR_TEXT_FIELD'		=> (isset($this->config['pmregbar_text_field'])) ? $this->config['pmregbar_text_field'] : '',
			'L_PMREGBAR_PM'				=> $this->user->lang('PMREGBAR_MESSAGE', $this->user->data['username']),
			'L_PMREGBAR_WELCOME'		=> $this->user->lang('PMREGBAR_WELCOME', $this->config['sitename']),
		));
	}
}
