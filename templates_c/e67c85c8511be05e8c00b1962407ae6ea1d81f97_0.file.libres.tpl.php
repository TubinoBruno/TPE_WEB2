<?php
/* Smarty version 3.1.33, created on 2019-06-06 04:42:39
  from '/opt/lampp/htdocs/bd/templates/libres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf87d9fd51b27_60032332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e67c85c8511be05e8c00b1962407ae6ea1d81f97' => 
    array (
      0 => '/opt/lampp/htdocs/bd/templates/libres.tpl',
      1 => 1559788898,
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
function content_5cf87d9fd51b27_60032332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    
<div id="noticias-container" class="container">
      <h1 class="center"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <form method="post" action="verLibres">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Codigo cliente</label>
      <input type="date" class="form-control mb-2" name="verLibres" id="inlineFormInput" placeholder="Codigo cliente" min="2017-04-01" max="2022-04-30">
    </div>
    
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>
    </div>
    </div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
