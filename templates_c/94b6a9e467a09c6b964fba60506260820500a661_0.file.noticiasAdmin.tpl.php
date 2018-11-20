<?php
/* Smarty version 3.1.33, created on 2018-11-19 20:58:48
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/noticiasAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf315f8887a54_19308428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94b6a9e467a09c6b964fba60506260820500a661' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/noticiasAdmin.tpl',
      1 => 1542657491,
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
function content_5bf315f8887a54_19308428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div class="container"><br>
      <h2>AGREGAR NOTICIA</h2>

      <form method="post" action="agregar">
        <div class="form-group">
          <label for="tituloForm">Nombre de la Noticia</label>
          <input type="text" class="form-control" id="tituloForm" name="tituloForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <textarea type="text" class="form-control" id="descripcionForm" name="descripcionForm"></textarea>
        </div>
        <div class="form-group">
          <label for="bandasForm">Bandas</label>
          <select type="text" class="form-control" id="bandasForm" name="bandasForm">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Banda']->value, 'bandas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bandas']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['bandas']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['bandas']->value['nombre'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Noticia</button>
      </form>
    </div>

    <div class="container">
      <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

      <form method="post" action="buscar">

      <select type="text" class="form-control" id="bandasForm" name="bandasForm">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Banda']->value, 'bandas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bandas']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['bandas']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['bandas']->value['nombre'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <button type="submit" class="btn btn-primary">Buscar Noticias</button>
    </form>

      <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>

            <li class="list-group-item"><p><b>NOMBRE:</b><a  href="mostrar_noticia/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
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
