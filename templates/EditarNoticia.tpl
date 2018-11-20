{include file = "header.tpl"}
{include file = "navAdm.tpl"}
  <body>

    <div class="container"><br>
      <h2>EDITAR NOTICIA</h2>

      <form method="post" action="renovar">
        <div class="form-group">
          <label for="tituloForm">Nombre de la Noticia</label>
          <input type="text" class="form-control" id="tituloForm" name="tituloForm" placeholder="{$Noticias['titulo']}">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripción</label>
          <textarea type="text" class="form-control" id="descripcionForm" name="descripcionForm"  placeholder="{$Noticias['descripcion']}"></textarea>
        </div>
        <input type="hidden" class="form-control" id="id_noticiaForm" name="id_noticiaForm" value="{$Noticias['id_noticia']}">
        <input type="hidden" class="form-control" id="id_noticiaForm" name="id_bandaForm" value="{$Noticias['id_banda']}">


        <button type="submit" class="btn btn-primary">Editar Noticia</button>
      </form>
    </div>





{include file = "footer.tpl"}
</body>
</html>
