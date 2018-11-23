'use strict'
let templateComentariosAdm;
document.querySelector('.btn-enviarComentario').addEventListener('click', e => enviarComentario());

fetch('js/templates/comentariosAdmin.handlebars')
  .then(response => response.text())
  .then(template => {
    templateComentariosAdm = Handlebars.compile(template); // compila y prepara el template
    let idBanda = document.querySelector("#id_bandaForm").value;
    getComentarios(idBanda);
    //timer = setInterval(function () { getComentarios(idBanda); }, 2000);
  });

  function getComentarios(idBanda) {
    fetch("api/comentarios/"+idBanda)
      .then(response => response.json())
      .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
      })
  }

function mostrarComentarios(jsonComentarios) {
  let context = { // como el assign de smarty
    comentarios: jsonComentarios
    //otra: "hola
  }
  let html = templateComentariosAdm(context);
  document.querySelector("#comentarios-container").innerHTML = html;
  let botonesBorrarCcomentario = document.querySelectorAll(".btn-borrarComentario");

  for (let i = 0, element; element = botonesBorrarCcomentario[i]; i++) {
    element.addEventListener('click', e => deleteComentario(element.value));
  }

}
function deleteComentario(id){
  let idBanda = document.querySelector("#id_bandaForm").value;
  fetch("api/comentarios/"+id, {
      method: 'DELETE'
  }).then(response =>
      getComentarios(idBanda)
  );
}

function enviarComentario() {
  let idBanda = document.querySelector("#id_bandaForm").value;
      let comentario = document.querySelector("#comentarioForm").value;
      let puntaje = document.querySelector("#puntajeForm").value;
      let idUsuario = document.querySelector("#id_usuarioForm").value;
      echo (idBanda);
      let comentarios = {
        "comentario": comentario,
        "puntaje": puntaje,
        "id_banda": id_banda,
        "id_usuario": id_usuario,



      }

      fetch("api/comentarios/", {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify(comentarios)
      }).then(response =>
          getComentarios(idBanda)
      );
}
