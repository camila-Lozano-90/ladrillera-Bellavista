//const URLROOT = "http://localhost/ProyectoBellavista/";

let frmNuevaReferencia = document.getElementById("frmNuevaReferencia");

//Carga Inicial de las interacciones
function init() {
    frmNuevaReferencia.addEventListener("submit", function (e) {
        guardar(e);
    });
}

//modal busqueda de referencias
let tblReferencias = $("#tblReferencias").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/Referencias/todos",
        dataSrc: "",
    },
    columns: [
        { data: "id" },
        { data: "nombre" },
        { data: "medidas" },
        { data: "rendimiento" },
        { data: "peso" },
        { data: "referencia" },
        {
            data: null,
            defaultContent:
                "<a type='button' href='#' id='editar' data-bs-toggle='modal' data-bs-target='#modalEditar' class='btn' style='background-color: #4EB700; color:white;'>Editar</a>",
        },
        {
            data: null,
            defaultContent:
                "<a type='button' href='#' id='eliminar' data-bs-toggle='modal' data-bs-target='#modalEliminaReferencia' class='btn' style='background-color: #FF0000; color:white;'>Eliminar</a>",
        },
    ],
});

//selecciona el libro para editarlo
$("#tblReferencias tbody").on("click", "#editar", function () {
    var data = tblReferencias.row($(this).parents("tr")).data(); //captura la fila
    editar(
      data.id,
      data.nombre,
      data.medidas,
      data.rendimiento,
      data.peso,
      data.referencia
    );
  });
  
  function editar(id, nombre, medidas, rendimiento, peso, referencia) {
    let idEdit = document.getElementById("idEdit");
    let nomEdit = document.getElementById("nombreEdit");
    let medidaEdit = document.getElementById("medidasEdit");
    let rendimEdit= document.getElementById("rendimientoEdit");
    let pesoEdit = document.getElementById("pesoEdit");
    let refEdit = document.getElementById("referenciaEdit");
  
    idEdit.value = id;
    nomEdit.value = nombre;
    medidaEdit.value = medidas;
    rendimEdit.value = rendimiento;
    pesoEdit.value = peso;
    refEdit.value = referencia;
  }
  
  $("#tblReferencias tbody").on("click", "#eliminar", function () {
    var data = tblReferencias.row($(this).parents("tr")).data(); //captura la fila
    eliminar(
        data.id,
        data.nombre,
        data.medidas,
        data.rendimiento,
        data.peso,
        data.referencia
    );
  });
  
  function eliminar(id, nombre, medidas, rendimiento, peso, referencia) {
    let idDel = document.getElementById("idDel");
    let nombreDel = document.getElementById("nombreDel");
    let medidasDel = document.getElementById("medidasDel");
    let rendimientoDel= document.getElementById("rendimientoDel");
    let pesoDel = document.getElementById("pesoDel");
    let referenciaDel = document.getElementById("referenciaDel");
  
    idDel.value = id;
    nombreDel.value = nombre;
    medidasDel.value = medidas;
    rendimientoDel.value = rendimiento;
    pesoDel.value = peso;
    referenciaDel.value = referencia;
  }

//Guardar el documento
function guardar(e) {
    e.preventDefault();
    let datos = new FormData(frmNuevaReferencia);

    fetch("http://localhost/ProyectoBellavista/Referencias/Add", {
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