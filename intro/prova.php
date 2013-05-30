<?php
require_once '/my_smarty.php';

$smarty = new my_smarty();
$smarty->compile_check = true;
$smarty->display("carcasa.tpl");

?>
