<?php

/**
 * unbanned.php
 *
 * @version 1.0
 * @copyright 2009 by pirque for OBTgame
 */

define('INSIDE'  , true);
define('INSTALL' , false);
define('IN_ADMIN', true);

$ugamela_root_path = './../';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.' . $phpEx);

includeLang('admin/unbanned');

	if ($user['authlevel'] >= "2") 
	{

		$parse['dpath'] = $dpath;
		$parse = $lang;

		$mode = $_GET['mode'];

		if ($mode != 'change') 
		{
			$parse['Name'] = "Nom du joueur";
		} 
		elseif ($mode == 'change') 
		{
			$name = $_POST['nam'];
			if(doquery("SELECT `username` FROM {{table}} WHERE `username` = '". mysql_escape_string($name) ."' LIMIT 1;", 'users', true))
			{
				if(doquery("SELECT `who` FROM {{table}} WHERE `who` = '". mysql_escape_string($name) ."' LIMIT 1;", 'banned', true))
				{
					doquery("DELETE FROM {{table}} WHERE who2='{$name}'", 'banned');
					doquery("UPDATE {{table}} SET bana=NULL, banaday=NULL WHERE username='{$name}'", "users");
					message( $lang['admin_unban_player']. " " . $name . " " . $lang['admin_unban_unbanned'] . "<br>" . $lang['admin_unban_back'] , $lang['admin_unban_unbanOkTitle'] );
				}
				else
					message ( $lang['admin_unban_player']. " " . $name . " " . $lang['admin_unban_noBanned'] . "<br>" . $lang['admin_unban_back'] , $lang['admin_unbanFailTitle'] );
			}
			message ( $lang['admin_unban_player']. " " . $name . " " . $lang['admin_unban_noUser'] . "<br>" . $lang['admin_unban_back'] , $lang['admin_unbanFailTitle'] );
		}

		display(parsetemplate(gettemplate('admin/unbanned'), $parse), "Overview", false, '', true);
	} 
	else 
	{
		message( $lang['sys_noalloaw'], $lang['sys_noaccess'] );
	}

?>
