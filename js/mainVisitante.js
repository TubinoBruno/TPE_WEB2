
'use strict'
let templateComentariosVisit;

fetch('js/templates/comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
    templateComentariosVisit = Handlebars.compile(template); // compila y prepara el template
    let idBanda = document.querySelector("#id_bandaForm").value;
    getComentarios(idBanda);
    timer = setInterval(function () { getComentarios(idBanda); }, 2000);
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
  let html = templateComentariosVisit(context);
  document.querySelector("#comentarios-container").innerHTML = html;
}
