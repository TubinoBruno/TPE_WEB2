{include file = "header.tpl"}
{include file = "navVisitante.tpl"}
  <body>

    <li class="list-group-item"<p><b>NOMBRE:</b>{$Noticia['titulo']}<p>
      <p><b>DESCRIPCIÓN:</b>{$Noticia['descripcion']}<p>
        <p><b>BANDA:</b>  <a  href="mostrarBanda/{$Noticia['id_banda']}">{$Noticia['nombre']}</a><p>



    </div>





{include file = "footer.tpl"}
</body>
</html>
