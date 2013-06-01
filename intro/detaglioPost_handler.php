<?php
require_once './wrappers/mysqli_wrapper.php';

class DetaglioPost_handler{

    function stampa_post(){
        $mysqli = new mysqli_wrapper();
        $mysqli->connetti();

        $result = $mysqli->fai_query("SELECT * FROM entry LEFT JOIN file ON entry.id = file.entry where entry.id = 2; ");

        $post = array();
        $i = 0;
        if($result != FALSE){ // $r è false quando la query non restituisce nessuna tupla.
            while($result_obj = $mysqli->estrai($result)){// estrai restituisce un ogetto alla volta. se non ci sono piu restituisce false e si esce dal ciclo.
                $post[$i] = $result_obj;
                $i++;
            }
        }
        return $post;
    }

}

?>
