{include file = "header.tpl"}
{include file = "navVisitante.tpl"}
  <body>

      <h2>{$Titulo}</h2>
      <form method="post" action="verificarLogin">
        <div class="form-group">
          <label for="exampleInputUsuario1">Usuario</label>
          <input type="input" class="form-control" id="usuarioId" name="usuarioId" aria-describedby="usuarioId" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="passwordId" name="passwordId" placeholder="Password">
        </div>
        <div class="">
          {$Mensaje}
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>




{include file = "footer.tpl"}
</body>
</html>
