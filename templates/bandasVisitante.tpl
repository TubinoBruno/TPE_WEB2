{include file = "header.tpl"}
{include file = "navVisitante.tpl"}
<div class="container">
  <h1>BANDAS</h1>
  <ul class="list-group">
    {foreach from=$Bandas item= banda}
        <li class="list-group-item"><p>NOMBRE:<a href="mostrarBanda/{$banda['id_banda']}">{$banda['nombre']}</a><p>
          ESTILO:{$banda['estilo']}<p>
            {if !$banda['url']==null}
                  <img class="d-block w-100" src="images/{$banda['url']}" alt="">
                  {/if}

    {/foreach}
  </ul>
</div>
{include file = "footer.tpl"}
