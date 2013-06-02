<?php
session_start();
/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/

require_once rootPath.'/wrappers/mysqli_wrapper.php';

if(isset($_POST['login_submit']) && $_POST['login_submit'] == 'LOGIN'){

    $mysqli = new mysqli_wrapper();
    $mysqli->connetti();
    $user_mail = $_POST['login_mail'];
    $user_password = $_POST['login_password'];
   
    $r = $mysqli->fai_query("SELECT * FROM utente WHERE email = '$user_mail' AND Password = '$user_password'");
    
    if($r == FALSE){
        $url = rootUrl;
        header("Location:".$url."/login.php?err=true"); 
    }
    else
    {
        $r_obj = $mysqli->estrai($r);
        $user_id = $r_obj->id;
        
        $_SESSION['user_id'] = $user_id;
 
        $url = rootUrl;
        header("Location:".$url."/board.php"); 
    }

}

?>
