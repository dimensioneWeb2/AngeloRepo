<?php
require_once '/my_smarty.php';
require_once '/detaglioPost_handler.php';

$smarty = new my_smarty();

// setto il template variabile
$smarty->assign("templateIncluso","post_details.tpl");

// inzio impostazione breadcrumb
$breadcrumbsArray = array();
$breadcrumbsArray[0] = array("href"=>"http://www.google.it","nome"=>"home");
$breadcrumbsArray[1] = array("href"=>"http://www.google.it","nome"=>"board");
$smarty->assign("breadcrumbs", $breadcrumbsArray);
$smarty->assign("last_breadcrumb", array("nome"=>"Nome Post"));
//fine impostazione breadcrumb

// setto titolo della pagina
$titoloPagina = "Detaglio Post";
$smarty->assign("titoloPagina", $titoloPagina);
// fine titolo pagina

$detaglio_post = new DetaglioPost_handler();

$post = $detaglio_post->stampa_post();



// setto titolo del contenuto
$titoloContent = $post[0]->titolo;
$smarty->assign("titoloContenuto", $titoloContent);
// fine titolo contenuto

$smarty->assign("post", $post);

// display della carcasa
$smarty->display("carcasa.tpl");

?>
