{include file = "header.tpl"}
{include file = "navVisitante.tpl"}
  <body>

    <div id="noticias-container" class="container">
      <h1>{$Titulo}</h1>

      <ul class="list-group">
        {foreach from=$Noticias item= noticia}

            <li class="list-group-item"><p><b>NOMBRE:</b><a  href="verNoticia/{$noticia['id_noticia']}">{$noticia['titulo']}</a><p>
              <b>DESCRIPCIÓN:</b>{$noticia['descripcion']}</a>
                <p><b>BANDA:</b>  <a  href="mostrarBanda/{$noticia['id_banda']}">{$noticia['nombre']}</a><p>


        {/foreach}
      </ul>
    </div>




{include file = "footer.tpl"}
</body>
</html>
