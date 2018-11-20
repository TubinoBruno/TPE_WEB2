{include file = "header.tpl"}
{include file = "navVisitante.tpl"}
<div class="container">
  <h1>BANDAS</h1>
  <ul class="list-group">
    {foreach from=$Bandas item= banda}
        <li class="list-group-item"><p>NOMBRE:<a href="mostrarBandaUser/{$banda['id_banda']}">{$banda['nombre']}</a><p>

    {/foreach}
  </ul>
</div>
{include file = "footer.tpl"}
