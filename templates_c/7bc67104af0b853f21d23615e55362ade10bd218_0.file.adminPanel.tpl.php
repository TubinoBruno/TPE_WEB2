<?php
/* Smarty version 3.1.33, created on 2018-11-20 04:14:39
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/adminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf37c1f455549_03907426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bc67104af0b853f21d23615e55362ade10bd218' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/adminPanel.tpl',
      1 => 1542683608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navAdm.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf37c1f455549_03907426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container"><br>
  <h2>PANEL</h2>

  <ul class="list-group">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
    <li class="list-group-item"><p>NOMBRE:<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
<p>
          <?php if ($_smarty_tpl->tpl_vars['usuario']->value['admin'] == 1) {?>
             <p>Admin<p>
             <?php } else { ?>
             <p>Usuario<p>
             <?php }?>
              <a type="text" class="btn btn-enviar" href="borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" target="_self">Borrar Usuario</a>
              <?php if ($_smarty_tpl->tpl_vars['usuario']->value['admin'] == 1) {?>
              <a type="text" class="btn btn-enviar " href="quitarPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" target="_self">Quitar Permiso</a>
              <?php } else { ?>
              <a type="text" class="btn btn-enviar " href="darPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" target="_self">Dar Permiso</a>
              <?php }?>
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
