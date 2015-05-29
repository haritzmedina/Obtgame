<?php

/**
 * annonce2.php
 *
 * @version 1.0
 * @copyright 2008 by ??????? for XNova
 */

define('INSIDE'  , true);
define('INSTALL' , false);

$ugamela_root_path = './';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.'.$phpEx);

$actions = $_GET['action'];

includeLang('annonce');
$parse = $lang;

if($actions == 2)
{
$page .= parsetemplate(gettemplate('annonce3'), $parse);

display($page);
}
?>
