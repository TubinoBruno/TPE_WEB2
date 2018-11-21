{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>

    <div class="container">
      <h1>Banda</h1>



            <li class="list-group-item"><p><b>NOMBRE:</b>{$Banda['nombre']}<p>
              <b>Estilo:</b>{$Banda['estilo']}<p>
                {if !$Banda['url']==null}
                      <img class="d-block w-100" src="images/{$Banda['url']}" alt="">
                      {/if}
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
                   <input type="hidden" class="form-control" id="id_bandaForm" name="id_bandaForm" value="{$Banda['id_banda']}">
                   <input type="hidden" class="form-control" id="id_usuarioForm" name="id_usuarioForm" value="{$id_usuario}">

                  </select>
                  <button type="submit" class="btn-enviarComentario">Comentar</button>
                </form>
                </div>

    </div>





{include file = "footer.tpl"}
</body>
</html>
