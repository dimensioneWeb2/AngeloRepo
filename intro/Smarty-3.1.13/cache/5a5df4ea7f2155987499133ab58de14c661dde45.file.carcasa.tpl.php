<?php /* Smarty version Smarty-3.1.13, created on 2013-05-31 07:04:45
         compiled from "Smarty-3.1.13\views\carcasa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1251751a746b56204f5-04207919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a5df4ea7f2155987499133ab58de14c661dde45' => 
    array (
      0 => 'Smarty-3.1.13\\views\\carcasa.tpl',
      1 => 1369983794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1251751a746b56204f5-04207919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a746b567eac0_31074165',
  'variables' => 
  array (
    'templateIncluso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a746b567eac0_31074165')) {function content_51a746b567eac0_31074165($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="ISO-8859-1"<?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>carcasa</title>
        
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
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Area Riservata</a></li>
                            <li>Board</li>
                            </ul>
                        </div>
                        <div id="contentPageTitle">
                        Board
                        </div>
                        <div id="contenitoreTemplateVariabile">
                            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templateIncluso']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
</html><?php }} ?>