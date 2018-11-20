{include file = "header.tpl"}
{include file = "nav.tpl"}
<div class="container"><br>

<div class="container">
  <h1>{$Titulo}</h1>
  <ul class="list-group">
    {foreach from=$Bandas item= banda}
        <li class="list-group-item"><p>NOMBRE:<a href="bandaUser/{$banda['id_banda']}">{$banda['nombre']}</a><p>
          ESTILO:{$banda['estilo']}<p>
          </li>
    {/foreach}
  </ul>
</div>



{include file = "footer.tpl"}
