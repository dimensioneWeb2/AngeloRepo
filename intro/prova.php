<?php
require_once '/my_smarty.php';

$smarty = new my_smarty();
$smarty->assign("templateIncluso","prova.tpl");
$smarty->display("carcasa.tpl");

?>
