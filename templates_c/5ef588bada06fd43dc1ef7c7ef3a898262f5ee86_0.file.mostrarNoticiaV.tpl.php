<?php
/* Smarty version 3.1.33, created on 2018-10-18 15:26:46
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarNoticiaV.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc88a16045065_31324358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ef588bada06fd43dc1ef7c7ef3a898262f5ee86' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarNoticiaV.tpl',
      1 => 1539830994,
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
function content_5bc88a16045065_31324358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <li class="list-group-item"<p><b>NOMBRE:</b><?php echo $_smarty_tpl->tpl_vars['Noticia']->value['titulo'];?>
<p>
      <p><b>DESCRIPCIÓN:</b><?php echo $_smarty_tpl->tpl_vars['Noticia']->value['descripcion'];?>
<p>
        <p><b>BANDA:</b>  <a  href="mostrarBanda/<?php echo $_smarty_tpl->tpl_vars['Noticia']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['Noticia']->value['nombre'];?>
</a><p>



    </div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
