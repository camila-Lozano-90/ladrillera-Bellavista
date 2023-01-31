const URLROOT = "http://localhost/ProyectoBellavista/";

//Carga Inicial de las interacciones
function init() {
  frmRegistroU.addEventListener("submit", function (e) {
      guardar(e);
  });
}

let tblUsuarios = $("#tblUsuarios").DataTable({
  ajax: {
    url: "http://localhost/ProyectoBellavista/Usuarios/todos",
    dataSrc: "",
  },
  columns: [
    { data: "id" },
    { data: "nombres" },
    { data: "apellidos" },
    { data: "documentoID" },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='editarUsuario'  data-bs-toggle='modal' data-bs-target='#usuario' class='btn' style='background-color: purple; color:white;'>Editar</a>",
    },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='eliminarUsuario'  data-bs-toggle='modal' data-bs-target='#usuarioEliminar' class='btn btn-danger'>Eliminar</a>",
    },
  ],
});

//Guardar el documento
function guardar(e) {
  e.preventDefault();
  let datos = new FormData(frmRegistroU);

  fetch("http://localhost/ProyectoBellavista/Usuarios/registroUsuario", {
      method: "POST",
      body: datos,
  })
      .then((response) => response.json())
      .then((data) => {
          Swal.fire({
              title: data,
              icon: "success",
              confirmButtonText: "Ok",
          });
      })
      .catch((error) => {
          console.log("hay un error :", error);
      });
}

init();































//selecciona el usuario para editarlo
$("#tblUsuarios tbody").on("click", "#editarUsuario", function () {
  var data = tblUsuarios.row($(this).parents("tr")).data(); //captura la fila
  editarUsuario(
    data.id,
    data.nombres,
    data.apellidos,
    data.documentoID
  );
});





function editarUsuario(id, nombres, apellidos, documentoID) {
  let idU = document.getElementById("idUsuario");
  let nomU = document.getElementById("nomUsuario");
  let apeU = document.getElementById("apeUsuario");
  let direccionU= document.getElementById("direccionUsuario");

  idU.value = id;
  nomU.value = nombres;
  apeU.value = apellidos;
  direccionU.value = documentoID;
}

//selecciona el usuario para eliminarlo
$("#tblUsuarios tbody").on("click", "#eliminarUsuario", function () {
  var data = tblUsuarios.row($(this).parents("tr")).data(); //captura la fila
  eliminarUsuario(
    data.id,
    data.nombres,
    data.apellidos,
    data.documentoID
  );
});

function eliminarUsuario(id, nombres, apellidos, documentoID) {
  let idU = document.getElementById("idUsuarioE");
  let nomU = document.getElementById("nomUsuarioE");
  let apeU = document.getElementById("apeUsuarioE");
  let direccionU= document.getElementById("direccionUsuarioE");

  idU.value = id;
  nomU.value = nombres;
  apeU.value = apellidos;
  direccionU.value = documentoID;
}

