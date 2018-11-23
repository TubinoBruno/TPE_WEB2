<?php
/* Smarty version 3.1.33, created on 2018-11-23 00:10:23
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarbanda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf7375fd958e5_84503828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55df223a5f9a3e1a03cfcc844c453e872f6573aa' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarbanda.tpl',
      1 => 1542927633,
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
function content_5bf7375fd958e5_84503828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div class="container">
      <h1>Banda</h1>



            <li class="list-group-item"><p><b>NOMBRE:</b><?php echo $_smarty_tpl->tpl_vars['Banda']->value['nombre'];?>
<p>
              <b>Estilo:</b><?php echo $_smarty_tpl->tpl_vars['Banda']->value['estilo'];?>
<p>
                <?php if (!$_smarty_tpl->tpl_vars['Banda']->value['url'] == null) {?>
                      <img class="d-block w-100" src="images/<?php echo $_smarty_tpl->tpl_vars['Banda']->value['url'];?>
" alt="">
                      <?php }?>

                      <a href="eliminarImagen/<?php echo $_smarty_tpl->tpl_vars['Banda']->value['id_banda'];?>
">BORRAR IMAGEN</a>

                  <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['Banda']->value['id_banda'];?>
">BORRAR</a>
                  <a href="editar/<?php echo $_smarty_tpl->tpl_vars['Banda']->value['id_banda'];?>
">EDITAR</a>
                </li>

    </div>
    <h3>Comentarios</h3>

    <div id="comentarios-container" class="mt-3">

    </div>






<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
