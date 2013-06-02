<?php

/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER
         E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/
 

require_once rootPath.'/my_smarty.php';

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
