<?php
       
	require_once('Smarty-3.1.13/libs/Smarty.class.php');
	 
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
 	        $this->template_dir = root_path."Smarty-3.1.13/views/";
 	        $this->config_dir = root_path."Smarty-3.1.13/conf/";
 	        $this->compile_dir = root_path."Smarty-3.1.13/cache/";
 	        $this->caching = 0;
                $this->error_reporting = E_ALL & ~E_NOTICE;
 	    }
  	
}

?>
