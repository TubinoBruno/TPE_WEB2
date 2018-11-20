<?php
/* Smarty version 3.1.33, created on 2018-11-20 01:43:52
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/bandas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf358c813ba52_62554517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ef2e781d60d2b4fffa56524bde64b4e09662e2' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/bandas.tpl',
      1 => 1542674627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf358c813ba52_62554517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container"><br>

<div class="container">
  <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
  <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Bandas']->value, 'banda');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banda']->value) {
?>
        <li class="list-group-item"><p>NOMBRE:<a href="bandaUser/<?php echo $_smarty_tpl->tpl_vars['banda']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['banda']->value['nombre'];?>
</a><p>
          ESTILO:<?php echo $_smarty_tpl->tpl_vars['banda']->value['estilo'];?>
<p>
          </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
