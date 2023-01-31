const URLROOT = "http://localhost/ProyectoBellavista/";

let totalDescargue = document.getElementById("totalDescargue");
let totalRoturaDia = document.getElementById("totalRoturaDia");
//let PorcentajeRoturaDia = document.getElementById("PorcentajeRoturaDia");
let frmCargueDescargue = document.getElementById("frmCargueDescargue");

//Carga Inicial de las interacciones
function init() {
    frmDescargueHorno.addEventListener("submit", function (e) {
        guardar(e);
    });
}

//=========================================================================================================

/**
 *
 * Definicion de las interacciones
 */

//modal busqueda de referencias
let tblOperarios = $("#tblOperarios").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/CargueDescargueHornos/operarios",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarResp'>+</button>",
        },
        { data: "nombres" },
        { data: "apellidos" },
    ],
});

//modal busqueda de referencias
let tblOperarios2 = $("#tblOperarios2").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/CargueDescargueHornos/operarios",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarResp'>+</button>",
        },
        { data: "nombres" },
        { data: "apellidos" },
    ],
});

//modal busqueda de referencias
let tblReferencias = $("#tblReferencias").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/Referencias/todos",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRef'>+</button>",
        },
        { data: "id" },
        { data: "nombre" },
        { data: "medidas" },
        { data: "rendimiento" },
        { data: "peso" },
        { data: "referencia" },
    ],
});


//selecciona el  item para agregarlo al detalle del cargue
$("#tblReferencias tbody").on("click", "#agregarRef", function () {
    var data = tblReferencias.row($(this).parents("tr")).data(); //captura la fila
    agregarRef(
        data.referencia,
        data.id
    );
});

//selecciona el  item para agregarlo al detalle del cargue
$("#tblReferencias tbody").on("click", "#agregarRef", function () {
    var data = tblReferencias.row($(this).parents("tr")).data(); //captura la fila
    agregarID(
        data.id
    );
});


//selecciona el  item para agregarlo al detalle del cargue
$("#tblOperarios tbody").on("click", "#agregarResp", function () {
    var data = tblOperarios.row($(this).parents("tr")).data(); //captura la fila
    agregarResp1(
        data.nombres,
        data.apellidos,
    );
});


//selecciona el  item para agregarlo al detalle del cargue
$("#tblOperarios2 tbody").on("click", "#agregarResp", function () {
    var data = tblOperarios2.row($(this).parents("tr")).data(); //captura la fila
    agregarResp2(
        data.nombres,
        data.apellidos,
    );
});

//agrega el item al detalle de la formula    id='filas' 
function agregarResp1(nombres, apellidos) {
    responsableHornos = document.getElementById("responsableHornos");
    responsableHornos.value = `${nombres}${apellidos}`;

}
//agrega el item al detalle de la formula    id='filas' 
function agregarResp2(nombres, apellidos) {
    responsablePatios = document.getElementById("responsablePatios");
    responsablePatios.value = `${nombres}${apellidos}`;

}

//agrega el item al detalle de la formula    id='filas' 
function agregarRef(referencia) {
    referencial = document.getElementById("referencial");
    referencial.value = `${referencia}`;
}
//agrega el item al detalle de la formula    id='filas' 
function agregarID(id) {
    idr = document.getElementById("idr[]");
    idr.value = `${id}`;
}

//selecciona el  item para quitar una fila del detalle del cargue
$(document).on('click', '#borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});



//Guardar el documento
function guardar(e) {
    e.preventDefault();
    let datos = new FormData(frmDescargueHorno);

    fetch("http://localhost/ProyectoBellavista/DescargueHornos/Add", {
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


