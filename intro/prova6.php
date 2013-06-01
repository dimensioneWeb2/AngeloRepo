<?php
require_once '/my_smarty.php';

$smarty = new my_smarty();

// setto il template variabile
$smarty->assign("templateIncluso","contatta.tpl");

// inzio impostazione breadcrumb
$breadcrumbsArray = array();
$breadcrumbsArray[0] = array("href"=>"http://www.google.it","nome"=>"home");
$breadcrumbsArray[1] = array("href"=>"http://www.google.it","nome"=>"gestione utenti");
$smarty->assign("breadcrumbs", $breadcrumbsArray);
$smarty->assign("last_breadcrumb", array("nome"=>"contatta utenti"));
//fine impostazione breadcrumb

// setto titolo del contenuto
$titoloContent = "Scrivere messaggio";
$smarty->assign("titoloContenuto", $titoloContent);
// fine titolo contenuto

// display della carcasa
$smarty->display("carcasa.tpl");

?>
