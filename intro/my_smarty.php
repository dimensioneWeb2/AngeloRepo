<?php
/********************************************************************************************************************************/
        /*QUESTO REQUIRE è L'UNICO CHE CAMBIERA DA COMPUTER A COMPUTER O DA SERVER A SERVER E DOVRA APPARIRE IN TUTTE LE PAGINE*/
        /*INCLUDE UN FILE CON TUTTI I PATH IN MODO TALE DA RENDERE TUTTI GLI ALTRI INCLUDES DELLA PAGINA INDIPENDENTI DAL CONTESTO*/ 
        require_once 'D:\www\AngeloRepo\intro\path.php';
       /*FINE REQUIRE DA MODIFICARE*/ 
/*****************************************************************************************************************************/
        
        
        
	 require_once(rootPath.'/Smarty-3.1.13/libs/Smarty.class.php');
	 
 	/**
 	 * MySmarty Class
 	 *
 	 * initializes basic smarty settings and act as smarty object
 	 */
        
        
        
 	class my_smarty extends Smarty
 	{
 	 
 	    /**
 	     * constructor
 	     */
 	    function __construct()
 	    {
 	        parent::__construct();
 	        $this->template_dir = rootPath."/Smarty-3.1.13/views/";
 	        $this->config_dir = rootPath."/Smarty-3.1.13/conf/";
 	        $this->compile_dir = rootPath."/Smarty-3.1.13/cache/";
 	        $this->caching = 0;
                $this->error_reporting = E_ALL & ~E_NOTICE;
 	    }
  	
}

?>
