<?php
/* Smarty version 3.1.33, created on 2018-11-22 23:55:46
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarBandaV.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf733f2bf6639_19546025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '348343d08e76fd60b172ac62ff70abfbd3b51aea' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarBandaV.tpl',
      1 => 1542927341,
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
function content_5bf733f2bf6639_19546025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div class="container">
      <h1>Banda</h1>



            <li class="list-group-item"><p><b>NOMBRE:</b><?php echo $_smarty_tpl->tpl_vars['Banda']->value['nombre'];?>
<p>
              <b>Estilo:</b><?php echo $_smarty_tpl->tpl_vars['Banda']->value['estilo'];?>
<p>
                <?php if (!$_smarty_tpl->tpl_vars['Banda']->value['url'] == null) {?>
                      <img class="d-block w-100" src="images/<?php echo $_smarty_tpl->tpl_vars['Banda']->value['url'];?>
" alt="">
                      <?php }?>
                </li>



    </div>
    <h3>Comentarios</h3>
    <div id="comentarios-container" class="mt-3 mb-3">

    </div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
