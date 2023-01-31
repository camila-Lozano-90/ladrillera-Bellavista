const URLROOT = "http://localhost/ProyectoBellavista/";

let frmOperariosAdd = document.getElementById("frmOperariosAdd");

//Carga Inicial de las interacciones
function init() {
    frmOperariosAdd.addEventListener("submit", function (e) {
      guardar(e);
  });
}

let tblOperarios = $("#tblOperarios").DataTable({
  ajax: {
    url: "http://localhost/ProyectoBellavista/Operarios/todos",
    dataSrc: "",
  },
  columns: [
    { data: "nombres" },
    { data: "apellidos" },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='editarOperario'  data-bs-toggle='modal' data-bs-target='#usuario' class='btn' style='background-color: purple; color:white;'>Editar</a>",
    },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='eliminarOperario'  data-bs-toggle='modal' data-bs-target='#usuarioEliminar' class='btn btn-danger'>Eliminar</a>",
    },
  ],
});

//Guardar el documento
function guardar(e) {
  e.preventDefault();
  let datos = new FormData(frmOperariosAdd);

  fetch("http://localhost/ProyectoBellavista/Operarios/Add", {
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