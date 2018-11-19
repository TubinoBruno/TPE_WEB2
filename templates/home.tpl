{include file = "header.tpl"}
{include file = "navVisitante.tpl"}
  <body>

    <div id="noticias-container" class="container">
      <h1>{$Titulo}</h1>

      <ul class="list-group">
        {foreach from=$Noticias item= noticia}

            <li class="list-group-item"><p><b>NOMBRE:</b><a  href="verNoticia/{$noticia['id_noticia']}">{$noticia['titulo']}</a><p>

                <p><b>BANDA:</b>  <a  href="mostrarBanda/{$noticia['id_banda']}">{$noticia['nombre']}</a><p>


        {/foreach}
      </ul>
    </div>
    <div class="container">
      <h1>Seleccionar noticias de banda</h1>

    <form method="post" action="filtrar">

    <select type="text" class="form-control" id="bandasForm" name="bandasForm">
      {foreach from=$Banda item= bandas}
      <option value="{$bandas['id_banda']}">{$bandas['nombre']}</option>
      {/foreach}
    </select>
    <button type="submit" class="btn btn-primary">Buscar Noticias</button>
  </form>
</div>



{include file = "footer.tpl"}
</body>
</html>
