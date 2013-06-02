<?php

/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/
 

require_once rootPath.'/wrappers/mysqli_wrapper.php';

class Board_handler{

    function stampa_board(){
        $mysqli = new mysqli_wrapper();
        $mysqli->connetti();

        $result = $mysqli->fai_query("SELECT * from entry");

        $entries = array();
        $i = 0;
        if($result != FALSE){ // $r è false quando la query non restituisce nessuna tupla.
            while($result_obj = $mysqli->estrai($result)){// estrai restituisce un ogetto alla volta. se non ci sono piu restituisce false e si esce dal ciclo.
                $entries[$i] = $result_obj;
                $i++;
            }
        }
        return $entries;
    }

}

?>
