<?php

define('INSIDE'  , true);
define('INSTALL' , false);

$ugamela_root_path = './';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.' . $phpEx);

//includelang('ideas');

$parse = $lang;

if($do == 0)
{
	$ideas = doquery("select * from {{table}} ORDER BY idea_id desc", "ideas");

	$page .= '<table><tr>';

	while ($a = mysql_fetch_array($ideas))
	{
		$page .= '</td><td>';
		$page .= $a['idea_id'];
		$page .= '</td><td>';
		$page .= $a['user_name'];
		$page .= '</td><td>';
		$page .= $a['idea'];
	}

	$page .= '</tr></table>';
}

display($page);

?>