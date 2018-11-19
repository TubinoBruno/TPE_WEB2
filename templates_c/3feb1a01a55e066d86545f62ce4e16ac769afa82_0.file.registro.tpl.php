<?php
/* Smarty version 3.1.33, created on 2018-11-18 23:54:24
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf1eda0c85240_58625977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3feb1a01a55e066d86545f62ce4e16ac769afa82' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/registro.tpl',
      1 => 1542578710,
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
function content_5bf1eda0c85240_58625977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

      <h2><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h2>
      <form method="post" action="verificarRegistro">
        <div class="form-group">
          <label for="exampleInputUsuario1">Usuario</label>
          <input type="input" class="form-control" id="usuarioId" name="usuarioId" aria-describedby="usuarioId" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="passwordId" name="passwordId" placeholder="Password">
        </div>
        <div class="">
          <?php echo $_smarty_tpl->tpl_vars['Mensaje']->value;?>

        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
