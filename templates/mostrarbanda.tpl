{include file = "header.tpl"}
{include file = "nav.tpl"}
  <body>

    <div class="container">
      <h1>Banda</h1>



            <li class="list-group-item"><p><b>NOMBRE:</b>{$Banda['nombre']}<p>
              <b>Estilo:</b>{$Banda['estilo']}<p>
                  <a href="eliminar/{$Banda['id_banda']}">BORRAR</a>
                  <a href="editar/{$Banda['id_banda']}">EDITAR</a>
                </li>

    </div>





{include file = "footer.tpl"}
</body>
</html>
