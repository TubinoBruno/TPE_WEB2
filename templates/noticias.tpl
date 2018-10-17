{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>

    <div class="container"><br>
      <h2>AGREGAR NOTICIA</h2>

      <form method="post" action="agregar">
        <div class="form-group">
          <label for="tituloForm">Nombre de la Noticia</label>
          <input type="text" class="form-control" id="tituloForm" name="tituloForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <textarea type="text" class="form-control" id="descripcionForm" name="descripcionForm"></textarea>
        </div>
        <div class="form-group">
          <label for="bandasForm">Bandas</label>
          <select type="text" class="form-control" id="bandasForm" name="bandasForm">
            {foreach from=$Banda item= bandas}
            <option value="{$bandas['id_banda']}">{$bandas['nombre']}</option>
            {/foreach}
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Noticia</button>
      </form>
    </div>

    <div class="container">
      <h1>{$Titulo}</h1>

      <form method="post" action="buscar">

      <select type="text" class="form-control" id="bandasForm" name="bandasForm">
        {foreach from=$Banda item= bandas}
        <option value="{$bandas['id_banda']}">{$bandas['nombre']}</option>
        {/foreach}
      </select>
      <button type="submit" class="btn btn-primary">Buscar Noticias</button>
    </form>

      <ul class="list-group">
        {foreach from=$Noticias item= noticia}

            <li class="list-group-item"><p><b>NOMBRE:</b><a  href="mostrar_noticia/{$noticia['id_noticia']}">{$noticia['titulo']}</a><p>
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
