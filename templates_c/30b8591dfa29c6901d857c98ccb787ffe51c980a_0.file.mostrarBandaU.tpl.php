<?php
/* Smarty version 3.1.33, created on 2018-11-20 01:40:25
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarBandaU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf357f93bc0b2_64893456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b8591dfa29c6901d857c98ccb787ffe51c980a' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarBandaU.tpl',
      1 => 1542674415,
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
function content_5bf357f93bc0b2_64893456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div class="container">
      <h1>Banda</h1>



            <li class="list-group-item"><p><b>NOMBRE:</b><?php echo $_smarty_tpl->tpl_vars['Banda']->value['nombre'];?>
<p>
              <b>Estilo:</b><?php echo $_smarty_tpl->tpl_vars['Banda']->value['estilo'];?>
<p>

                </li>

    </div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
