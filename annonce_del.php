<?php

/*
	annonce_del.php
	version 1.0
	by pirque for OBTgame 2009 (c)
*/

define('INSIDE'  , true);
define('INSTALL' , false);

header("Refresh: 5; URL=annonce.php");

$ugamela_root_path = './';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.' . $phpEx);

$users = doquery("SELECT * FROM {{table}} WHERE id='".$user['id']."';", 'users');

includeLang('annonce');
$parse = $lang;

$id = $_REQUEST['id'];
$userid = $_REQUEST['userid'];

if (($user['authlevel'] >= 2) || ($userid == $user['id']))
{
	doquery("DELETE FROM {{table}} WHERE id='{$id}'", 'annonce');
	$page .= '<table width="600"><tr><th>' .$lang['ann_deleteOk'] .'</th></tr>';
	$page	.= '<tr><th>'.$lang['ann_doClick']."<a href='annonce.php'>".$lang['ann_here']."</a>".$lang['ann_ifRedNo'].'</th></tr></table>';
}

else
{
	$page .= $lang['ann_permissionNo'];
}

display($page);

?>
