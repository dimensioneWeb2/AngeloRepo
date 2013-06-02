<?php

/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/
 
/*
 * classe contenitore di insieme di metodi che sono utili per la connessione e interogazzione del database
 * ---> connetti ()                              ---> serve per collegarsi e selezionare un certo db
 * --->fai_query ($query,$tipo=TRUE)             ---> serve per fare una query qualsiasi , nel caso di query di tipo diverso da select , $tipo deve essere FALSE 
 * --->inserisci($t,$v,$r=NULL)                  ---> query di inserimento ( insert ) 
 * 
 */



class mysqli_wrapper {
    private $host;
    private $username;
    private $password;
    private $database;
    private $attiva = FALSE;
    public $mysqli;
   
 
   public function __construct($database=null,$host=null,$username=null,$password=null) {
        $config = simplexml_load_file(rootPath.'/config.xml');

        if( isset ($host,$username,$password,$database) ){
            $this->host=$host;
            $this->username=$username;
            $this->password=$password;
            $this->database=$database;
        }
        else{
            $this->host=$config->host;
            $this->username=$config->username;
            $this->password=$config->password;
            $this->database=$config->database;
            
        }
        
        
    }
    
    public function __destruct() {
        if($this->attiva == TRUE){
            $this->attiva=FALSE;
            $this->mysqli->close();
        }
    }

    public function connetti(){
        
        $mysqli = @new mysqli($this->host,  $this->username,  $this->password,  $this->database);
        // verifica dell'avvenuta connessione
        if (mysqli_connect_errno()) {
           // notifica in caso di errore
                die("Errore in connessione al DBMS: ".mysqli_connect_error() );  

        }
        else{
            $this->attiva=TRUE;
            $this->mysqli=$mysqli;
            
        }
        
    }
    
    public function disconnetti(){
        if($this->attiva == TRUE){
            $this->attiva=FALSE;
            $this->mysqli->close();
        }
    }


    public function fai_query($query,$tipo=TRUE){
        
      //  if(isset($this->attiva)){

        @$result = $this->mysqli->query($query);

        if($this->mysqli->errno){
            die($this->mysqli->error);

        }
         //conteggio dei record restituiti dalla query
        if($tipo){  // se tipo è true vuol dire che sto facendo una select per cui un ulteriore controllo è necessario
        if($result->num_rows >0){
  
            return $result;
        }
        else{
            return FALSE;
        }
        
        }
        

        else{
            return $result;
        }
 

    }
    
    /*
     * Il metodo inserisci prende 3 parametri ;
     * --> Nome tabella della quale si vuole inserire nuova tupla
     * --> Una stringa contenenti i nomi degli attributi separati da virgola
     * --> Un arrray contenente i valori degli attributi
     * 
     * Questo metodo serve per facilitare l'inserimento dei dati nel database ed ad astrarre lo
     * stesso metodo per qualsiasi tabella.
     * usandolo si puo evitare dover scrivere il comando SQL completo ma basta chiamare la funzione
     * con i parametri opportuni.
     * 
     * $t="nome_tabella";
     * $r="par1,par2";
     * $v=array ("val1","val2");
     * 
     * 
     */
    
    
     public function inserisci($t,$v,$r = null){
    
         if(isset($this->attiva))
          {
                        $istruzione = 'INSERT INTO '.$t;
            if($r != null)
            {
                $istruzione .= ' ('.$r.')';
            }
 
            for($i = 0; $i < count($v); $i++)
            {
                if(is_string($v[$i]))
                    $v[$i] = '"'.$v[$i].'"';
                if(is_null($v[$i]))
                    $v[$i] = 'NULL';
            }
            $v = implode(',',$v);
            $istruzione .= ' VALUES ('.$v.')';
 
            $query = $this->fai_query($istruzione,FALSE);

            return $query;
 
            }else{
                return FALSE;
            }
        }
    
        public function estrai($risultato){
 
        if(isset($this->attiva)){
        
        @$r = $risultato->fetch_object();
        
        
        return $r;
        }
        else{
        return false;
        }
        }
        
  
    
    
    
}

?>
