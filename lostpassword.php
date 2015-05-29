<?php

define('INSIDE'  , true);
define('INSTALL' , false);

$ugamela_root_path = './';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.' . $phpEx);

	includeLang('lostpassword');

	if ($action != 1) {
		$parse               = $lang;
		$parse['servername'] = $game_config['game_name'];
		$page .= parsetemplate(gettemplate('lostpassword'), $parse);
		display($page, $lang['system'], false);
	}
	if ($action == 1) {
		$email               = $_POST['email'];
		sendnewpassword($email);
		message('Le nouveau mot de passe a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s !', 'OK');
	}
?>
