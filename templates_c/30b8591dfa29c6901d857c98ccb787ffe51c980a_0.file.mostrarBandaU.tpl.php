<?php
/* Smarty version 3.1.33, created on 2018-11-21 00:52:15
  from '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarBandaU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf49e2f45feb3_86354248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b8591dfa29c6901d857c98ccb787ffe51c980a' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE_WEB2/templates/mostrarBandaU.tpl',
      1 => 1542757928,
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
function content_5bf49e2f45feb3_86354248 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php if (!$_smarty_tpl->tpl_vars['Banda']->value['url'] == null) {?>
                      <img class="d-block w-100" src="images/<?php echo $_smarty_tpl->tpl_vars['Banda']->value['url'];?>
" alt="">
                      <?php }?>
                </li>
                <h3>Comentarios</h3>

                <div id="comentarios-container" class="mt-3">

                </div>
                <h3>Nuevo Comentario</h3>

                <div class="informaciongeneral encuesta mt-3 mb-3">
                  <form method="post" action="comentar">

                    <div class="form-group">
                      <label for="comentarioForm">Comentario</label>
                      <textarea type="text" class="form-control" id="comentarioForm" name="comentarioForm" required ></textarea>
                    </div>
                    <div class="form-group">
                      <label for="puntaje">Puntaje</label>
                      <input type="number" min="1" max="5" class="form-control comentario" id="puntajeForm" value="" placeholder="Puntaje" name="puntaje" required>
                    </div>
                   <input type="hidden" class="form-control" id="id_bandaForm" name="id_bandaForm" value="<?php echo $_smarty_tpl->tpl_vars['Banda']->value['id_banda'];?>
">
                   <input type="hidden" class="form-control" id="id_usuarioForm" name="id_usuarioForm" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">

                  </select>
                  <button type="submit" class="btn btn-lg btn-enviarComentario">Comentar</button>
                </form>
                </div>

    </div>





<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
