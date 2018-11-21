
'use strict'
let templateComentarios;

fetch('js/templates/comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
    templateComentarios = Handlebars.compile(template); // compila y prepara el template
    let idBanda = document.querySelector("#id_bandaForm").value;
    getComentarios(idBanda);
    timer = setInterval(function () { getComentarios(idBanda); }, 2000);
  });



function getComentarios(idBanda) {
  fetch("api/comentario/"+idBanda)
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
  let html = templateComentarios(context);
  document.querySelector("#comentarios-container").innerHTML = html;
}
function enviarComentario() {
  let idBanda = document.querySelector("#id_bandaForm").value;
      let comentario = document.querySelector("#comentarioForm").value;
      let puntaje = document.querySelector("#puntajeForm").value;
      let idUsuario = document.querySelector("#id_usuarioForm").value;

      let encuesta = {
          "IdBanda": idBanda,
          "Comentario": comentario,
          "Puntaje": puntaje,
          "IdUsuario": idUsuario,


      }

      fetch("api/comentario/", {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify(encuesta)
      }).then(response =>
          getComentarios(idBanda)
      );
}
