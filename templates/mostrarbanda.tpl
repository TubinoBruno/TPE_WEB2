{include file = "header.tpl"}
{include file = "navAdm.tpl"}
  <body>

    <div class="container">
      <h1>Banda</h1>



            <li class="list-group-item"><p><b>NOMBRE:</b>{$Banda['nombre']}<p>
              <b>Estilo:</b>{$Banda['estilo']}<p>
                {if !$Banda['url']==null}
                      <img class="d-block w-100" src="images/{$Banda['url']}" alt="">
                      {/if}
                      <a href="eliminarImagen/{$Banda['id_banda']}">BORRAR IMAGEN</a>

                  <a href="eliminar/{$Banda['id_banda']}">BORRAR</a>
                  <a href="editar/{$Banda['id_banda']}">EDITAR</a>
                </li>
                <h3>Comentarios</h3>
                    <div id="comentarios-container" class="mt-3 mb-3">

                    </div>

    </div>





{include file = "footer.tpl"}
</body>
</html>
