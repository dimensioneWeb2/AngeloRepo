<?php

/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/
 

require_once rootPath.'/my_smarty.php';

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

// setto titolo della pagina
$titoloPagina = "Contatta Utente";
$smarty->assign("titoloPagina", $titoloPagina);
// fine titolo pagina

// display della carcasa
$smarty->display("carcasa.tpl");

?>
