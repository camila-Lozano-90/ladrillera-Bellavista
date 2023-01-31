const URLROOT = "http://localhost/ProyectoBellavista/";
let frmNumContacto = document.getElementById("frmNumContacto");

//Carga Inicial de las interacciones
function init() {
    frmNumContacto.addEventListener("submit", function (e) {
        guardar(e);
    });
}

//modal busqueda de referencias
let tblNumeros = $("#tblNumeros").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/Configuracion/telefonos",
        dataSrc: "",
    },
    columns: [
        { data: "id" },
        { data: "numero" },
        { data: "descripcion" },
        {
            data: null,
            defaultContent:
                "<a type='button' href='#' id='editar' data-bs-toggle='modal' data-bs-target='#modalEditar' class='btn' style='background-color: #4EB700; color:white;'>Editar</a>",
        },
        {
            data: null,
            defaultContent:
                "<a type='button' href='#' id='eliminar' data-bs-toggle='modal' data-bs-target='#modalEliminar' class='btn' style='background-color: #FF0000; color:white;'>Eliminar</a>",
        },
    ],
});


//selecciona el libro para editarlo
$("#tblNumeros tbody").on("click", "#editar", function () {
    var data = tblNumeros.row($(this).parents("tr")).data(); //captura la fila
    editar(
      data.numero,
      data.descripcion
    );
  });
  
  function editar(numero, descripcion) {
    let numEdit = document.getElementById("numEdit");
    let descripcionEdit= document.getElementById("descripcionEdit");
  
    numEdit.value = numero;
    descripcionEdit.value = descripcion;
  }
  
  $("#tblNumeros tbody").on("click", "#eliminar", function () {
    var data = tblNumeros.row($(this).parents("tr")).data(); //captura la fila
    eliminar(
        data.numero,
        data.descripcion
    );
  });
  
  function eliminar(numero, descripcion) {
    let numDel = document.getElementById("numDel");
    let descripcionDel= document.getElementById("descripcionDel");
  
    numDel.value = numero;
    descripcionDel.value = descripcion;
  }

//Guardar el documento
function guardar(e) {
    e.preventDefault();
    let datos = new FormData(frmNumContacto);

    fetch("http://localhost/ProyectoBellavista/Configuracion/AddTel", {
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