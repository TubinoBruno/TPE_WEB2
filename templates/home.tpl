{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>

    <div class="container">
      <h1>{$Titulo}</h1>
      <ul class="list-group">
        {foreach from=$Noticias item= noticia}

            <li class="list-group-item"><p><b>NOMBRE:</b>{$noticia['titulo']}<p>
              <b>DESCRIPCIÓN:</b>{$noticia['descripcion']}<p>
                <p><b>BANDA:</b>{$noticia['nombre']}<p>

              </li>

        {/foreach}
      </ul>
    </div>



{include file = "footer.tpl"}
</body>
</html>
