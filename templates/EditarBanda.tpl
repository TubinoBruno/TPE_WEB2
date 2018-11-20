{include file = "header.tpl"}
{include file = "navAdm.tpl"}
<div class="container"><br>
  <h2>EDITAR BANDA</h2>

  <form method="post" action="actualizar" >
    <div class="form-group">
      <label for="tituloForm">Nombre de la banda</label>
      <input type="text" class="form-control" id="nombreForm" name="nombreForm"  placeholder="{$Banda['nombre']}">
    </div>
    <div class="form-group">
      <label for="emailForm">Estilo</label>
      <input type="text" class="form-control" id="estiloForm" name="estiloForm"  placeholder="{$Banda['estilo']}">
    </div>
    <div class="form-group">
      <label for="emailForm">Imagen</label>
      <input type="file" class="form-control" id="imagenForm" placeholder="" name="imagenForm" >
    </div>
    <input type="hidden" class="form-control" id="id_bandaForm" name="id_bandaForm" value="{$Banda['id_banda']}">

    <button type="submit" class="btn btn-primary" >Editar Perfil de Banda</button>
  </form>
</div>


{include file = "footer.tpl"}
