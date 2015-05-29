<?php

/**
 * annonce.php
 *
 * @version 2.0b
 * @copyright 2009 by pirque for OBTgame
 */

define('INSIDE'  , true);
define('INSTALL' , false);

$ugamela_root_path = './';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.' . $phpEx);

includeLang('annonce');

$parse = $lang;

$users   = doquery("SELECT * FROM {{table}} WHERE id='".$user['id']."';", 'users');
$annonce = doquery("SELECT * FROM {{table}} ", 'annonce');
$action  = $_GET['action'];

if ($action == 5) {
	$sellMetal = $_POST['metalvendre'];
	$sellCrystal = $_POST['cristalvendre'];
	$sellDeut = $_POST['deutvendre'];

	$needMetal = $_POST['metalsouhait'];
	$needCrystal = $_POST['cristalsouhait'];
	$needDeut = $_POST['deutsouhait'];

	while ($v_annonce = mysql_fetch_array($users)) {
		$user = $v_annonce['username'];
		$galaxie = $v_annonce['galaxy'];
		$systeme = $v_annonce['system'];
		$userid = $v_annonce['id'];
	}

	doquery("INSERT INTO {{table}} SET
user='{$user}',
galaxie='{$galaxie}',
systeme='{$systeme}',
metala='{$sellMetal}',
cristala='{$sellCrystal}',
deuta='{$sellDeut}',
metals='{$needMetal}',
cristals='{$needCrystal}',
deuts='{$needDeut}',
userid='{$userid}'" , "annonce");

	$page .= parsetemplate(gettemplate('annonce'), $parse);
	display($page);
}

$page .= parsetemplate(gettemplate('annonce2'), $parse);


if ($action != 5) {
	$annonce = doquery("SELECT * FROM {{table}} ORDER BY `id` DESC ", "annonce");
	while ($b = mysql_fetch_array($annonce)) {
		$userid = $b['userid'];
		$page .= "</th><th>";
		if($user['authlevel'] > 0) //admin send message
		{
			if($user['id'] != $userid)
			{
				$page .= "<a href='messages.php?mode=write&id=$userid'>" .$b['user'] ."</a>";
			}
			else
			{
				$page .= $b['user'];
			}
		}
		else
		{
			$page .= $b["user"];
		}
		$page .= '</th><th>';
		$page .= $b["galaxie"];
		$page .= '</th><th>';
		$page .= $b["systeme"];
		$page .= '</th><th>';
		$page .= $b["metala"];
		$page .= '</th><th>';
		$page .= $b["cristala"];
		$page .= '</th><th>';
		$page .= $b["deuta"];
		$page .= '</th><th>';
		$page .= $b["metals"];
		$page .= '</th><th>';
		$page .= $b["cristals"];
		$page .= '</th><th>';
		$page .= $b["deuts"];
		$page .= '</th><th>';
		if ($user['authlevel'] > 0) //admin delete ads
		{
			$id = $b['id'];
			$page .= "<a href='annonce_del.php?id=$id'>".$lang['ann_delete'].'</a>';
		}
		else
		{
			if($user['id'] == $userid) //user deletes his ad
			{
				$id = $b['id'];
				$page .= "<a href='annonce_del.php?id=$id&userid=$userid'>".$lang['ann_delete'].'</a>';
			}
			else // the users can't delete other ad but they can send a message
			{
				$page .= "<a href='messages.php?mode=write&id=$userid'>" .$lang['ann_sendMessage']. "</a>";
			}
		}
		$page .= "</th></tr>";
	}
}

display($page);
?>
