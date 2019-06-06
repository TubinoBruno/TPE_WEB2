<?php
/* Smarty version 3.1.33, created on 2019-06-06 01:22:39
  from '/opt/lampp/htdocs/bd/templates/ocupados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf84ebf554702_00908698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '389d1b9af17def16bfd38382301252040c3aab14' => 
    array (
      0 => '/opt/lampp/htdocs/bd/templates/ocupados.tpl',
      1 => 1559776525,
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
function content_5cf84ebf554702_00908698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div id="noticias-container" class="container">
      <h1 class="center"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <form method="post" action="verocupados">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Codigo cliente</label>
      <input type="number" class="form-control mb-2" id="inlineFormInput" placeholder="Codigo cliente">
    </div>
    
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>
    </div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
