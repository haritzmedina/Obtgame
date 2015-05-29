<?php

define('INSIDE'  , true);
define('INSTALL' , false);

$ugamela_root_path = './';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.'.$phpEx);

includeLang('changelog');
$parse = $lang;

$page .= parsetemplate(gettemplate('changelog'), $parse);
display($page);

// Created by Pirque 2009 (c) for OBTgame
?>
