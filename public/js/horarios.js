const URLROOT = "http://localhost/ProyectoBellavista/";
let frmHorarioAdd = document.getElementById("frmHorarioAdd");

//Carga Inicial de las interacciones
function init() {
    frmHorarioAdd.addEventListener("submit", function (e) {
        guardar(e);
    });
}

//modal busqueda de referencias
let tblHorario = $("#tblHorario").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/Configuracion/horarios",
        dataSrc: "",
    },
    columns: [
        { data: "id" },
        { data: "dia" },
        { data: "horarioApertura" },
        { data: "horarioCierre" },
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
$("#tblHorario tbody").on("click", "#editar", function () {
    var data = tblHorario.row($(this).parents("tr")).data(); //captura la fila
    editar(
      data.dia,
      data.horarioApertura,
      data.horarioCierre
    );
  });
  
  function editar(dia, horarioApertura, horarioCierre) {
    let diaEdit = document.getElementById("diaEdit");
    let horarioAperEdit = document.getElementById("horarioAperEdit");
    let horarioCierreEdit= document.getElementById("horarioCierreEdit");
  
    diaEdit.value = dia;
    horarioAperEdit.value = horarioApertura;
    horarioCierreEdit.value = horarioCierre;
  }
  
  $("#tblHorario tbody").on("click", "#eliminar", function () {
    var data = tblHorario.row($(this).parents("tr")).data(); //captura la fila
    eliminar(
        data.dia,
        data.horarioApertura,
        data.horarioCierre
    );
  });
  
  function eliminar(dia, horarioApertura, horarioCierre) {
    let diaDel = document.getElementById("diaDel");
    let horarioAperDel = document.getElementById("horarioAperDel");
    let horarioCierreDel= document.getElementById("horarioCierreDel");
  
    diaDel.value = dia;
    horarioAperDel.value = horarioApertura;
    horarioCierreDel.value = horarioCierre;
  }

//Guardar el documento
function guardar(e) {
    e.preventDefault();
    let datos = new FormData(frmHorarioAdd);

    fetch("http://localhost/ProyectoBellavista/Configuracion/cambiarHorarios", {
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