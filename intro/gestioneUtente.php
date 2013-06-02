<?php

/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/
 
require_once rootPath.'/my_smarty.php';
require_once rootPath.'/event_handler/gestioneUtente_handler.php';

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


$gestione_utente = new GestioneUtente_handler();


$utenti = $gestione_utente->stampa_utenti();

$smarty->assign("utenti", $utenti);

// display della carcasa
$smarty->display("carcasa.tpl");

?>
