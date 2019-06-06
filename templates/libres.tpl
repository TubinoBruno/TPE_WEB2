{include file = "header.tpl"}
{include file = "navVisitante.tpl"}
  <body>

    
<div id="noticias-container" class="container">
      <h1 class="center">{$Titulo}</h1>
    <form method="post" action="verLibres">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Codigo cliente</label>
      <input type="date" class="form-control mb-2" name="verLibres" id="inlineFormInput" placeholder="Codigo cliente" min="2017-04-01" max="2022-04-30">
    </div>
    
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>
    </div>
    </div>




{include file = "footer.tpl"}
</body>
</html>
