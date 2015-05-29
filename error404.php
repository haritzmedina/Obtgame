<?php

header("Refresh: 5; URL=index.php");

define('INSIDE'  , true);
define('INSTALL' , false);

$ugamela_root_path = './';
include($ugamela_root_path . 'extension.inc');
include($ugamela_root_path . 'common.'.$phpEx);

includeLang('error404');
$parse = $lang;


$page .= parsetemplate(gettemplate('error404'), $parse);

display ($page);

?>
