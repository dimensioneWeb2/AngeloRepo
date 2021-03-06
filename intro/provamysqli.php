<?php

/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/
 

require_once rootPath.'/my_smarty.php';
require_once rootPath.'/wrappers/mysqli_wrapper.php';

$smarty = new my_smarty();

// instanzio ogetto mysqli_wrapper.
$mysqli = new mysqli_wrapper();

// mi connetto.
$mysqli->connetti();


/* ESEMPIO DOVE CE SOLO UN RISULTATO */

//faccio query
$r = $mysqli->fai_query("SELECT * from utente");

if($r != FALSE){ // $r è false quando la query non restituisce nessuna tupla.
$r_obj = $mysqli->estrai($r);// mi presenta risultato come oggetto . i risultati come insieme di oggetti.
}
$utente1 = $r_obj;
$smarty->assign("nome1", $utente1);
/* FINE ESEMPIO DOVE CE SOLO UN RISULTATO */

/* ESEMPIO DOVE CI SONO PIU RISULTATI*/

$r2 = $mysqli->fai_query("SELECT * from file");

$file = array();
$i = 0;
if($r2 != FALSE){ // $r è false quando la query non restituisce nessuna tupla.
    while($r_obj2 = $mysqli->estrai($r2)){// estrai restituisce un ogetto alla volta. se non ci sono piu restituisce false e si esce dal ciclo.
        $file[$i] = $r_obj2;
        $i++;
    }
}

$smarty->assign("file", $file);
/* FINE ESEMPIO DOVE CI SONO PIU RISULTATI*/


// mi scollego
$mysqli->disconnetti();


$smarty->display("prova.tpl");

?>
