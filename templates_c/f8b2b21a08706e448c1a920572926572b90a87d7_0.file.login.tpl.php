<?php
/* Smarty version 3.1.33, created on 2019-06-05 22:11:38
  from '/opt/lampp/htdocs/bd/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf821fae07e32_88946539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8b2b21a08706e448c1a920572926572b90a87d7' => 
    array (
      0 => '/opt/lampp/htdocs/bd/templates/login.tpl',
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
function content_5cf821fae07e32_88946539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

      <h2><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h2>
      <form method="post" action="verificarLogin">
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
        <button type="submit" class="btn btn-primary">Login</button>
      </form>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
