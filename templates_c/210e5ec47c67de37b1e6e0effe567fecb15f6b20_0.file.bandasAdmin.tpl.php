<?php
/* Smarty version 3.1.33, created on 2018-11-20 02:00:59
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/bandasAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf35ccbb5e416_47804420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210e5ec47c67de37b1e6e0effe567fecb15f6b20' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/bandasAdmin.tpl',
      1 => 1542675657,
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
function content_5bf35ccbb5e416_47804420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navAdm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container"><br>
  <h2>AGREGAR BANDA</h2>

  <form method="post" action="enlistar" >
    <div class="form-group">
      <label for="tituloForm">Nombre de la banda</label>
      <input type="text" class="form-control" id="nombreForm" name="nombreForm">
    </div>
    <div class="form-group">
      <label for="emailForm">Estilo</label>
      <input type="text" class="form-control" id="estiloForm" name="estiloForm">
    </div>
    <div class="form-group">
      <label for="emailForm">Imagen</label>
      <input type="text" class="form-control" id="imagenForm" name="imagenForm">
    </div>

    <button type="submit" class="btn btn-primary">Crear Perfil de Banda</button>
  </form>
</div>
<div class="container">
  <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
  <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Bandas']->value, 'banda');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banda']->value) {
?>
        <li class="list-group-item"><p>NOMBRE:<a href="mostrar_banda/<?php echo $_smarty_tpl->tpl_vars['banda']->value['id_banda'];?>
"><?php echo $_smarty_tpl->tpl_vars['banda']->value['nombre'];?>
</a><p>
          <p>ESTILO:<?php echo $_smarty_tpl->tpl_vars['banda']->value['estilo'];?>
<p>
          <p>  IMAGEN:<?php echo $_smarty_tpl->tpl_vars['banda']->value['imagen'];?>
<a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['banda']->value['id_banda'];?>
"><p>eliminar</a>
          <a href="editar/<?php echo $_smarty_tpl->tpl_vars['banda']->value['id_banda'];?>
">editar</a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
