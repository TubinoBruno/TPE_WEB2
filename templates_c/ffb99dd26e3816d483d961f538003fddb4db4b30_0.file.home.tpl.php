<?php
/* Smarty version 3.1.33, created on 2019-06-05 03:32:45
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf71bbda69434_12119889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb99dd26e3816d483d961f538003fddb4db4b30' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/home.tpl',
      1 => 1559683973,
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
function content_5cf71bbda69434_12119889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div id="noticias-container" class="container">
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

      <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>

            <li class="list-group-item"><p><b>NOMBRE:</b><a  href="verNoticia/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</a><p>
              <b>DESCRIPCIÓN:</b><?php echo $_smarty_tpl->tpl_vars['noticia']->value['descripcion'];?>
</a>
                <p><b>BANDA:</b>  <a  href="mostrarBanda/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombre'];?>
</a><p>


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
