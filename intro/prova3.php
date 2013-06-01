
<?php
require_once '/my_smarty.php';

$smarty = new my_smarty();

// setto il template variabile
$smarty->assign("templateIncluso","gestione_utenti.tpl");

// inzio impostazione breadcrumb
$breadcrumbsArray = array();
$breadcrumbsArray[0] = array("href"=>"http://www.google.it","nome"=>"home");
$smarty->assign("breadcrumbs", $breadcrumbsArray);
$smarty->assign("last_breadcrumb", array("nome"=>"Gestione Utenti"));
//fine impostazione breadcrumb

// setto titolo del contenuto
$titoloContent = "Gestione Utenti";
$smarty->assign("titoloContenuto", $titoloContent);
// fine titolo contenuto

// setto titolo della pagina
$titoloPagina = "Gestione Utente";
$smarty->assign("titoloPagina", $titoloPagina);
// fine titolo pagina

// display della carcasa
$smarty->display("carcasa.tpl");

?>


