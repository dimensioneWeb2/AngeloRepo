<?php
require_once '/my_smarty.php';
require_once '/board_handler.php';

$smarty = new my_smarty();

// setto il template variabile
$smarty->assign("templateIncluso","board.tpl");

// inzio impostazione breadcrumb
$breadcrumbsArray = array();
$breadcrumbsArray[0] = array("href"=>"http://www.google.it","nome"=>"home");
$smarty->assign("breadcrumbs", $breadcrumbsArray);
$smarty->assign("last_breadcrumb", array("nome"=>"board"));
//fine impostazione breadcrumb

// setto titolo del contenuto
$titoloContent = "Board";
$smarty->assign("titoloContenuto", $titoloContent);
// fine titolo contenuto

// setto titolo della pagina
$titoloPagina = "Board entries";
$smarty->assign("titoloPagina", $titoloPagina);
// fine titolo pagina

$board = new Board_handler();

$entries = $board->stampa_board();

$smarty->assign("entries", $entries);

// display della carcasa
$smarty->display("carcasa.tpl");

?>
