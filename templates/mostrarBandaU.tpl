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

    </div>





{include file = "footer.tpl"}
</body>
</html>
