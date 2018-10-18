<?php
/* Smarty version 3.1.33, created on 2018-10-18 04:37:20
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/EditarNoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7f1e0a90660_82552544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ad5cdafb3b8232b25e44315082c4db04cde9ae' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/EditarNoticia.tpl',
      1 => 1539830232,
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
function content_5bc7f1e0a90660_82552544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div class="container"><br>
      <h2>EDITAR NOTICIA</h2>

      <form method="post" action="renovar">
        <div class="form-group">
          <label for="tituloForm">Nombre de la Noticia</label>
          <input type="text" class="form-control" id="tituloForm" name="tituloForm" placeholder="<?php echo $_smarty_tpl->tpl_vars['Noticias']->value['titulo'];?>
">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <textarea type="text" class="form-control" id="descripcionForm" name="descripcionForm"  placeholder="<?php echo $_smarty_tpl->tpl_vars['Noticias']->value['descripcion'];?>
"></textarea>
        </div>
        <input type="hidden" class="form-control" id="id_noticiaForm" name="id_noticiaForm" value="<?php echo $_smarty_tpl->tpl_vars['Noticias']->value['id_noticia'];?>
">
        <input type="hidden" class="form-control" id="id_noticiaForm" name="id_bandaForm" value="<?php echo $_smarty_tpl->tpl_vars['Noticias']->value['id_banda'];?>
">


        <button type="submit" class="btn btn-primary">Editar Noticia</button>
      </form>
    </div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
