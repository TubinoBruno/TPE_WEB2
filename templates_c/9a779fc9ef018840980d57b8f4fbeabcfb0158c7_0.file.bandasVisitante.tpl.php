<?php
/* Smarty version 3.1.33, created on 2018-11-19 22:23:46
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/bandasVisitante.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf329e2aa7521_21505189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a779fc9ef018840980d57b8f4fbeabcfb0158c7' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/bandasVisitante.tpl',
      1 => 1542662584,
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
function content_5bf329e2aa7521_21505189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <h1>BANDAS</h1>
  <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Bandas']->value, 'banda');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banda']->value) {
?>
        <li class="list-group-item"><p>NOMBRE:<a href="mostrarBandaUser/<?php echo $_smarty_tpl->tpl_vars['banda']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['banda']->value['nombre'];?>
</a><p>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
