<?php
/* Smarty version 3.1.33, created on 2019-06-06 00:47:13
  from '/opt/lampp/htdocs/bd/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf84671237e08_49058840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3f09bc7a35e3c9e11aea8678a75da1878165a43' => 
    array (
      0 => '/opt/lampp/htdocs/bd/templates/home.tpl',
      1 => 1559774814,
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
function content_5cf84671237e08_49058840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <body>

    <div id="noticias-container" class="container">
      <h1 class="center"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
        <p class="center">La Empresa “WMS Tandil” maneja un depósito de almacenamiento de pallets. Estos se guardan en estanterías a lo largo del depósito, que están divididas en filas y a su vez éstas filas se dividen en posiciones; en cada posición se puede guardar un único pallet al mismo tiempo. Cada posición se identifica por la estantería, la fila y su nro de posición dentro de la fila; también el depósito maneja un número único de posición.
Cada fila tiene un alto y el peso máximo que puede soportar.
Las posiciones se alquilan a a un cliente por un determinado intervalo de tiempo. Cuando se vence este tiempo, el cliente tiene 7 días para retirar la mercadería (caso contrario la pierde).
Cuando ingresa un pallet, existe un movimiento de entrada se le asigna una posición de las que el cliente tiene alquiladas (si es que el cliente tiene posiciones libres) y se marca como ocupada dicha posición dentro de las que tiene alquiladas.También se registran los movimientos de egreso de mercadería, que siempre deben hacer referencia a un movimiento de entrada y los movimientos de cambios de posición internos de los pallets que pudieran llegar a haber, que también deben hacer referencia a un movimiento de entrada o a otro movimiento de cambio
Tenga en cuenta que las frases indicadas en negrita cursiva pueden no haber sido plasmadas en el Diagrama.</p>
            <h2 class="center">Trabajo realizado por Jose Miguez y Bruno Tubino</h1>

      
      </ul>
    </div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
