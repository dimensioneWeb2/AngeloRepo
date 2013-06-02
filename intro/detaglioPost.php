<?php

/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/
 

require_once rootPath.'/my_smarty.php';
require_once rootPath.'/event_handler/detaglioPost_handler.php';

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
