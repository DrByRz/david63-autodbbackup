<?php
/**
*
* @package Auto db Backup (3.2)
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\autodbbackup\acp;

class auto_db_backup_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		$this->tpl_name		= 'auto_db_backup';
		$this->page_title	= $user->lang('AUTO_DB_BACKUP_SETTINGS');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('david63.autodbbackup.admin.controller');

		$admin_controller->display_options();
	}
}
