<?php
/**
*
* @package Auto db Backup (3.2)
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\autodbbackup\acp;

class auto_db_backup_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\autodbbackup\acp\auto_db_backup_module',
			'title'		=> 'ACP_AUTO_DB_BACKUP',
			'modes'		=> array(
				'main'	=> array('title' => 'ACP_AUTO_DB_BACKUP_SETTINGS', 'auth' => 'ext_david63/autodbbackup && acl_a_board', 'cat' => array('ACP_AUTO_DB_BACKUP')),
			),
		);
	}
}
