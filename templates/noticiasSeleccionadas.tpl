{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>


    <div class="container">
      <h1>Noticias </h1>



      <ul class="list-group">
        {foreach from=$Noticias item= noticia}

            <li class="list-group-item"><p><b>TITULO:</b><a  href="mostrar_noticia/{$noticia['id_noticia']}">{$noticia['titulo']}</a><p>
              <b>DESCRIPCIÓN:</b>{$noticia['descripcion']}<p>
                <p><b>BANDA:</b>  <a  href="mostrar_banda/{$noticia['id_banda']}">{$noticia['nombre']}</a><p>
                  <a href="borrar/{$noticia['id_noticia']}"><br>BORRAR</a>
                  <a href="modificar/{$noticia['id_noticia']}"><br>EDITAR</a></li>

        {/foreach}
      </ul>
    </div>



{include file = "footer.tpl"}
</body>
</html>
