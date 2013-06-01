<?php
require_once './wrappers/mysqli_wrapper.php';

class GestioneUtente_handler{

    function stampa_utenti(){
        $mysqli = new mysqli_wrapper();
        $mysqli->connetti();

        $result = $mysqli->fai_query("SELECT * from utente");

        $utenti = array();
        $i = 0;
        if($result != FALSE){ // $r è false quando la query non restituisce nessuna tupla.
            while($result_obj = $mysqli->estrai($result)){// estrai restituisce un ogetto alla volta. se non ci sono piu restituisce false e si esce dal ciclo.
                $utenti[$i] = $result_obj;
                $i++;
            }
        }
        return $utenti;
    }

}

?>
