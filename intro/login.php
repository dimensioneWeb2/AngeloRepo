<?php
session_start();
/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER
         E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/
 

require_once rootPath.'/my_smarty.php';

$smarty = new my_smarty();

if(!isset($_SESSION['user_id'])){
    if(isset($_GET['err'])){
        $smarty->assign('erroreLogin','email o password sbagliata');
    }
    $smarty->display("login.tpl");
}
else{
        $url = rootUrl;
        header("Location:".$url."/board.php"); 
}
?>
