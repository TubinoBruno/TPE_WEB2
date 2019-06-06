<?php
/* Smarty version 3.1.33, created on 2019-06-05 04:04:00
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarNoticiaU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf7231029bf99_06023691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4e6822f333717ee03c44429e7b97bc3abe678c' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarNoticiaU.tpl',
      1 => 1559683973,
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
function content_5cf7231029bf99_06023691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <li class="list-group-item"<p><b>NOMBRE:</b><?php echo $_smarty_tpl->tpl_vars['Noticia']->value['titulo'];?>
<p>
      <p><b>DESCRIPCIÓN:</b><?php echo $_smarty_tpl->tpl_vars['Noticia']->value['descripcion'];?>
<p>
        <p><b>BANDA:</b>  <a  href="bandaUser/<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['Noticia']->value['nombre'];?>
</a><p>



    </div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
