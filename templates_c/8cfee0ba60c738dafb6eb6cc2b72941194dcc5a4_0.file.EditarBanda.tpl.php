<?php
/* Smarty version 3.1.33, created on 2018-10-18 04:38:09
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/EditarBanda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7f211199094_60017757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cfee0ba60c738dafb6eb6cc2b72941194dcc5a4' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/EditarBanda.tpl',
      1 => 1539830227,
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
function content_5bc7f211199094_60017757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container"><br>
  <h2>EDITAR BANDA</h2>

  <form method="post" action="actualizar" >
    <div class="form-group">
      <label for="tituloForm">Nombre de la banda</label>
      <input type="text" class="form-control" id="nombreForm" name="nombreForm"  placeholder="<?php echo $_smarty_tpl->tpl_vars['Banda']->value['nombre'];?>
">
    </div>
    <div class="form-group">
      <label for="emailForm">Estilo</label>
      <input type="text" class="form-control" id="estiloForm" name="estiloForm"  placeholder="<?php echo $_smarty_tpl->tpl_vars['Banda']->value['estilo'];?>
">
    </div>
    <input type="hidden" class="form-control" id="id_bandaForm" name="id_bandaForm" value="<?php echo $_smarty_tpl->tpl_vars['Banda']->value['id_banda'];?>
">

    <button type="submit" class="btn btn-primary" >Editar Perfil de Banda</button>
  </form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
