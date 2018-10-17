<?php
/* Smarty version 3.1.33, created on 2018-10-17 21:59:38
  from '/opt/lampp/htdocs/Web2/TPE_2018/templates/mostrarbanda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc794aa9ea378_02838051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15c6350c09d3a851f819aa82555996a04303e404' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_2018/templates/mostrarbanda.tpl',
      1 => 1539806372,
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
function content_5bc794aa9ea378_02838051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>
    
    <div class="container">
      <h1>Banda</h1>


      <ul class="list-group">

            <li class="list-group-item"><p><b>NOMBRE:</b><?php echo $_smarty_tpl->tpl_vars['Banda']->value['nombre'];?>
</a><p>
              <b>Estilo:</b><?php echo $_smarty_tpl->tpl_vars['Banda']->value['estilo'];?>
<p>
                  <a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['Banda']->value['id_banda'];?>
"><br>BORRAR</a>
                  <a href="editar/<?php echo $_smarty_tpl->tpl_vars['Banda']->value['id_banda'];?>
"><br>EDITAR</a></li>

      </ul>
    </div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
