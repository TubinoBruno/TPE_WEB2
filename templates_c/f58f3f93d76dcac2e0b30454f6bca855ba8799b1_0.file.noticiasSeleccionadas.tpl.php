<?php
/* Smarty version 3.1.33, created on 2018-10-18 05:07:21
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/noticiasSeleccionadas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7f8e95c4c31_54967825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58f3f93d76dcac2e0b30454f6bca855ba8799b1' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/noticiasSeleccionadas.tpl',
      1 => 1539831585,
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
function content_5bc7f8e95c4c31_54967825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>


    <div class="container">
      <h1>Noticias </h1>



      <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>

            <li class="list-group-item"><p><b>TITULO:</b><a  href="mostrar_noticia/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</a><p>
              <b>DESCRIPCIÓN:</b><?php echo $_smarty_tpl->tpl_vars['noticia']->value['descripcion'];?>
<p>
                <p><b>BANDA:</b>  <a  href="mostrar_banda/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombre'];?>
</a><p>
                  <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"><br>BORRAR</a>
                  <a href="modificar/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"><br>EDITAR</a></li>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}