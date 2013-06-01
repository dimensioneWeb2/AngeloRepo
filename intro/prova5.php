<?php

require_once '/my_smarty.php';

$smarty = new my_smarty();


// setto titolo del contenuto
$titoloContent = "Inserire Utente";
$smarty->assign("titoloContenuto", $titoloContent);
// fine titolo contenuto

// setto titolo della pagina
$titoloPagina = "Login";
$smarty->assign("titoloPagina", $titoloPagina);
// fine titolo pagina

// display della carcasa
$smarty->display("login.tpl");
?>
