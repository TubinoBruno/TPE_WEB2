{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>

    <li class="list-group-item"<p><b>NOMBRE:</b>{$Noticia['titulo']}<p>
      <p><b>DESCRIPCIÓN:</b>{$Noticia['descripcion']}<p>
        <p><b>BANDA:</b>  <a  href="mostrar_banda/{$Noticia['id_banda']}">{$Noticia['nombre']}</a><p>
          <a href="borrar/{$Noticia['id_noticia']}">BORRAR</a>
          <a href="modificar/{$Noticia['id_noticia']}">EDITAR</a></li>


    </div>





{include file = "footer.tpl"}
</body>
</html>
