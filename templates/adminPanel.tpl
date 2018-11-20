{include file = "header.tpl"}
{include file = "navAdm.tpl"}
<div class="container"><br>
  <h2>PANEL</h2>

  <ul class="list-group">

    {foreach from=$Usuarios item=usuario}
    <li class="list-group-item"><p>NOMBRE:{$usuario['usuario']}<p>
          {if $usuario['admin'] eq 1}
             <p>Admin<p>
             {else}
             <p>Usuario<p>
             {/if}
              <a type="text" class="btn btn-enviar" href="borrarUsuario/{$usuario['id_usuario']}" target="_self">Borrar Usuario</a>
              {if $usuario['admin'] eq 1}
              <a type="text" class="btn btn-enviar " href="quitarPermiso/{$usuario['id_usuario']}" target="_self">Quitar Permiso</a>
              {else}
              <a type="text" class="btn btn-enviar " href="darPermiso/{$usuario['id_usuario']}" target="_self">Dar Permiso</a>
              {/if}
           </li>

         {/foreach}
  </ul>
</div>




{include file = "footer.tpl"}
