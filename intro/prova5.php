<?php

require_once '/my_smarty.php';

$smarty = new my_smarty();


// setto titolo del contenuto
$titoloContent = "Inserire Utente";
$smarty->assign("titoloContenuto", $titoloContent);
// fine titolo contenuto

// display della carcasa
$smarty->display("login.tpl");
?>
