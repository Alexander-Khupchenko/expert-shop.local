<?php
/* Smarty version 3.1.29, created on 2016-08-23 12:08:12
  from "C:\xampp\htdocs\expert-shop.local\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bc208c805d81_16870612',
  'file_dependency' => 
  array (
    '41e476a2b74c1fc23465ecb633bc7e04f625bb1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\expert-shop.local\\views\\default\\header.tpl',
      1 => 1471946890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_57bc208c805d81_16870612 ($_smarty_tpl) {
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div id="header">
            <h1>my shop - интернет магазин</h1>
        </div>
        
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        <div id="centerColumn">

            

<?php }
}
