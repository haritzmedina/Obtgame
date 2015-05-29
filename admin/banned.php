<?php

/**
 * banned.php
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
includeLang('admin/banned');

	if ($user['authlevel'] > 1) 
	{
		$mode      = $_POST['mode'];

		$PageTpl   = gettemplate("admin/banned");

		$parse     = $lang;
		if ($mode == 'banit') 
		{
			if (($_POST['why'] != null) && ($_POST['name'] != null))
			{
				if (doquery("SELECT `username` FROM {{table}} WHERE `username` = '". mysql_escape_string($_POST['name']) ."' LIMIT 1;", 'users', true))
				{
					//$adm = (doquery("SELECT id FROM {{table}} WHERE `username` = '". mysql_escape_string($_POST['name'])."'" , 'users'));
					//if ($adm != "1")
					//{
						if (!doquery("SELECT `who` FROM {{table}} WHERE `who` = '". mysql_escape_string($name) ."' LIMIT 1;", 'banned', true))
						{
							$name              = $_POST['name'];
							$reas              = $_POST['why'];
							$days              = $_POST['days'];
							$hour              = $_POST['hour'];
							$mins              = $_POST['mins'];
							$secs              = $_POST['secs'];

							$admin             = $user['username'];
							$mail              = $user['email'];

							$Now               = time();
							$BanTime           = $days * 86400;
							$BanTime          += $hour * 3600;
							$BanTime          += $mins * 60;
							$BanTime          += $secs;
							$BannedUntil       = $Now + $BanTime;

							$QryInsertBan      = "INSERT INTO {{table}} SET ";
							$QryInsertBan     .= "`who` = \"". $name ."\", ";
							$QryInsertBan     .= "`theme` = '". $reas ."', ";
							$QryInsertBan     .= "`who2` = '". $name ."', ";
							$QryInsertBan     .= "`time` = '". $Now ."', ";
							$QryInsertBan     .= "`longer` = '". $BannedUntil ."', ";
							$QryInsertBan     .= "`author` = '". $admin ."', ";
							$QryInsertBan     .= "`email` = '". $mail ."';";
							doquery( $QryInsertBan, 'banned');

							$QryUpdateUser     = "UPDATE {{table}} SET ";
							$QryUpdateUser    .= "`bana` = '1', ";
							$QryUpdateUser    .= "`banaday` = '". $BannedUntil ."' ";
							$QryUpdateUser    .= "WHERE ";
							$QryUpdateUser    .= "`username` = \"". $name ."\";";
							doquery( $QryUpdateUser, 'users');

							echo($adm);
							message ( $lang['admin_ban_player'] . " " . $name . " " . $lang['admin_ban_banOk'] . "<br>" . $lang['admin_ban_back'] , $lang['admin_ban_banned'] );
						}
						else
							message ( $lang['admin_ban_player'] . " " . $name . " " . $lang['admin_ban_bannedPrev'] . "<br>" . $lang['admin_ban_back'] , $lang['admin_ban_failTitle'] );
					//}
					//else
						//message ( "El administrador no puede ser baneado", "Error");
				}
				else
					message ( $lang['admin_ban_player'] . " " . $name . " " . $lang['admin_ban_notFound'] . "<br>" . $lang['admin_ban_back'] , $lang['admin_ban_notBanned'] );
			}
			else
				message ( $lang['admin_ban_fail'] . "<br>" . $lang['admin_ban_back'] , $lang['admin_ban_failTitle'] );
		}

		$Page = parsetemplate($PageTpl, $parse);
		display( $Page, $lang['adm_bn_ttle'], false, '', true);
	} else {
		AdminMessage ($lang['sys_noalloaw'], $lang['sys_noaccess']);
	}

?>
