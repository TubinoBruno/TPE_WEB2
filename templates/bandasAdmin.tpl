{include file = "header.tpl"}
{include file = "navAdm.tpl"}
<div class="container"><br>
  <h2>AGREGAR BANDA</h2>

  <form method="post" action="enlistar" >
    <div class="form-group">
      <label for="tituloForm">Nombre de la banda</label>
      <input type="text" class="form-control" id="nombreForm" name="nombreForm">
    </div>
    <div class="form-group">
      <label for="emailForm">Estilo</label>
      <input type="text" class="form-control" id="estiloForm" name="estiloForm">
    </div>
    <div class="form-group">
      <label for="emailForm">Imagen</label>
      <input type="text" class="form-control" id="imagenForm" name="imagenForm">
    </div>

    <button type="submit" class="btn btn-primary">Crear Perfil de Banda</button>
  </form>
</div>
<div class="container">
  <h1>{$Titulo}</h1>
  <ul class="list-group">
    {foreach from=$Bandas item= banda}
        <li class="list-group-item"><p>NOMBRE:<a href="mostrar_banda/{$banda['id_banda']}">{$banda['nombre']}</a><p>
          <p>ESTILO:{$banda['estilo']}<p>
          <p>  IMAGEN:{$banda['imagen']}<a href="eliminar/{$banda['id_banda']}"><p>eliminar</a>
          <a href="editar/{$banda['id_banda']}">editar</a></li>
    {/foreach}
  </ul>
</div>



{include file = "footer.tpl"}
