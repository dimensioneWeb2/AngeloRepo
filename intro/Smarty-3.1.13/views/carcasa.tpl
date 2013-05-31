<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>carcasa</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
   
        <div id="container">
            
            <div id="inner_container">
                
                <div id="header">
          
                    <div id = "logo">
                        <img src="imageintro/logo_sx.gif" alt="logo_sx"/> 
                        <img src="imageintro/logo_central.gif" alt="logo_centrale"/> 
                        <img src="imageintro/logo_dx.gif" alt="logo_dx"/>
                    </div>
                    <div id = "logo_label">
                        <div id="logo_label_1"> Consulenza Amica </div>
                        <div id="logo_label_2"> Consulenza per le innovazioni tecnologiche.</div>
                    </div>
                    
                </div>
                
                <div id="inner_inner_container">
                
                    <div id="left_content">
                        <div id="breadcrumb">
                            <ul id="crumbs">
                              <!--
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Area Riservata</a></li>
                            <li>Board</li> -->
                            
                            {foreach from=$breadcrumbs item=curr_breadcrumb}
                                   <li><a href="{$curr_breadcrumb.href}">{$curr_breadcrumb.nome}</a></li>
                            {/foreach}
                            <li>{$last_breadcrumb.nome}</li>
                            
                            
                            </ul>
                        </div>
                        <div id="contentPageTitle">
                            {$titoloContenuto}
                        </div>
                        <div id="contenitoreTemplateVariabile">
                            {include file="{$templateIncluso}"}
                        </div>
                    </div>
                    
                    <div id="right_content"> 
                       <div class="menu_div">
                            <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Chi siamo</a></li>
                            <li><a href="#">Contattami</a></li>
                            <li><a href="#">Dove siamo</a></li>
                            <li id="active"><a id="areaRis_link" href="#">Area Riservata</a>
                                <ul>
                            <li><a href="#">Board intro</a></li>
                            <li><a href="#">Gestione utenti</a></li>
                            </ul>
                            </li>
                            </ul>
                      </div>
                    </div>
                    
                    
                </div>
                
            
            </div>

        </div> 

    </body>
</html>