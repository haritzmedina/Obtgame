<?php

/**
 * banned.php
 *
 * @version 1.0
 * @copyright 2008 by ??????? for XNova
 */

define('INSIDE'  , true);
define('INSTALL' , false);

$ugamela_root_path = './';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.'.$phpEx);


includeLang('banned');

$parse = $lang;
$parse['dpath'] = $dpath;
$parse['mf'] = $mf;

$page .= parsetemplate(gettemplate('banned_body'), $parse);

$query = doquery("SELECT * FROM {{table}} ORDER BY `id`;",'banned');
$i=0;
while($u = mysql_fetch_array($query)){
	$page .= "<tr><td class=b><center><font color=red><b>".$u[1]."</b></font></center></td>";
	$page .= "<td class=b><center><b>".$u[2]."</center></b></td>";
	$page .= "<td class=b><center><b>".gmdate("d/m/Y G:i:s",$u[4])."</center></b></td>";
	$page .= "<td class=b><center><b>".gmdate("d/m/Y G:i:s",$u[5])."</center></b></td>";
	$page .= "<td class=b><center><b>".$u[6]."</center></b></td></tr>";
	$i++;
}

$page .= '<tr><th class=b colspan=6>' .$lang['ban_thereare'] ."{$i}" .$lang['ban_players'] .'</th></tr></table>';

if($user['authlevel'] > 1)
	$page .= parsetemplate(gettemplate('banned_body_adm'), $parse);

display($page);


// Created by e-Zobar (XNova Team). All rights reversed (C) 2008
?>
