<?php
/* Smarty version 3.1.33, created on 2018-10-18 05:12:19
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarnoticia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7fa13283472_07234998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebee579052d1af43165dc9a4187b9de508fa510' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarnoticia.tpl',
      1 => 1539830815,
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
function content_5bc7fa13283472_07234998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <li class="list-group-item"<p><b>NOMBRE:</b><?php echo $_smarty_tpl->tpl_vars['Noticia']->value['titulo'];?>
<p>
      <p><b>DESCRIPCIÓN:</b><?php echo $_smarty_tpl->tpl_vars['Noticia']->value['descripcion'];?>
<p>
        <p><b>BANDA:</b>  <a  href="mostrar_banda/<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['Noticia']->value['nombre'];?>
</a><p>
          <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['id_noticia'];?>
">BORRAR</a>
          <a href="modificar/<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['id_noticia'];?>
">EDITAR</a></li>


    </div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
