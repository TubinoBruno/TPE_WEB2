{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>
    
    <div class="container">
      <h1>Banda</h1>


      <ul class="list-group">

            <li class="list-group-item"><p><b>NOMBRE:</b>{$Banda['nombre']}</a><p>
              <b>Estilo:</b>{$Banda['estilo']}<p>
                  <a href="eliminar/{$Banda['id_banda']}"><br>BORRAR</a>
                  <a href="editar/{$Banda['id_banda']}"><br>EDITAR</a></li>

      </ul>
    </div>





{include file = "footer.tpl"}
</body>
</html>
