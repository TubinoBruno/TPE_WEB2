<?php
/* Smarty version 3.1.33, created on 2019-06-06 05:10:39
  from '/opt/lampp/htdocs/bd/templates/verLibres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf8842f769735_32435845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a19b8e360bf9bdcbb993282ec5877a7fa899ec7c' => 
    array (
      0 => '/opt/lampp/htdocs/bd/templates/verLibres.tpl',
      1 => 1559790555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navVisitante.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf8842f769735_32435845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div id="noticias-container" class="container">
      <h1 class="center"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    
    </div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
