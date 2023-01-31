let tblEditorial = $("#tblEditorial").DataTable({
  ajax: {
    url: "http://localhost/CURSOPHP/MVCbiblioteca/Editorial/todos",
    dataSrc: "",
  },
  columns: [
    { data: "idEditorial" },
    { data: "nomEditorial" },
    { data: "ciudadEditorial" },
    { data: "direccionEditorial" },
    { data: "nomContactoEditorial" },
    { data: "telefonoEditorial" },
    { data: "emailEditorial" },
    { data: "comentarioEditorial" },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='editEditar' data-bs-toggle='modal' data-bs-target='#editarE' class='btn' style='background-color: purple; color:white;'>Editar</a>",
    },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='editEliminar' data-bs-toggle='modal' data-bs-target='#delete' class='btn btn-danger'>Eliminar</a>",
    },
  ],
});

//selecciona la editorial para editarla
$("#tblEditorial tbody").on("click", "#editEditar", function () {
  var data = tblEditorial.row($(this).parents("tr")).data(); //captura la fila
  editarEditorial(
    data.idEditorial,
    data.nomEditorial,
    data.ciudadEditorial,
    data.direccionEditorial,
    data.nomContactoEditorial,
    data.telefonoEditorial,
    data.emailEditorial,
    data.comentarioEditorial
  );
});

function editarEditorial(idEditorial, nomEditorial, ciudadEditorial, direccionEditorial, nomContactoEditorial, telefonoEditorial, emailEditorial,comentarioEditorial) {
  let idE = document.getElementById("idEditorial");
  let nomE = document.getElementById("nomEditorial");
  let ciudadE = document.getElementById("ciudadEditorial");
  let direccionE= document.getElementById("direccionEditorial");
  let nomContactoE = document.getElementById("nomContactoEditorial");
  let telefonoE = document.getElementById("telefonoEditorial");
  let emailE = document.getElementById("emailEditorial");
  let comentarioE = document.getElementById("comentarioEditorial");

  idE.value = idEditorial;
  nomE.value = nomEditorial;
  ciudadE.value = ciudadEditorial;
  direccionE.value = direccionEditorial;
  nomContactoE.value = nomContactoEditorial;
  telefonoE.value = telefonoEditorial;
  emailE.value = emailEditorial;
  comentarioE.value = comentarioEditorial;
}

/* //selecciona la editorial para eliminarla
$("#tblEditorial tbody").on("click", "#editEliminar", function () {
  var data = tblEditorial.row($(this).parents("tr")).data(); //captura la fila
  eliminarEditorial(
    data.idEditorial,
    data.nomEditorial,
    data.ciudadEditorial,
    data.direccionEditorial,
    data.nomContactoEditorial,
    data.telefonoEditorial,
    data.emailEditorial,
    data.comentarioEditorial
  );
});

function eliminarEditorial(idEditorial, nomEditorial, ciudadEditorial, direccionEditorial, nomContactoEditorial, telefonoEditorial, emailEditorial,comentarioEditorial) {
  let idE = document.getElementById("idEditorialE");
  let nomE = document.getElementById("nomEditorialE");
  let ciudadE = document.getElementById("ciudadEditorialE");
  let direccionE= document.getElementById("direccionEditorialE");
  let nomContactoE = document.getElementById("nomContactoEditorialE");
  let telefonoE = document.getElementById("telefonoEditorialE");
  let emailE = document.getElementById("emailEditorialE");
  let comentarioE = document.getElementById("comentarioEditorialE");

  idE.value = idEditorial;
  nomE.value = nomEditorial;
  ciudadE.value = ciudadEditorial;
  direccionE.value = direccionEditorial;
  nomContactoE.value = nomContactoEditorial;
  telefonoE.value = telefonoEditorial;
  emailE.value = emailEditorial;
  comentarioE.value = comentarioEditorial;
} */


