const URLROOT = "http://localhost/ProyectoBellavista/";

let frmPrimeraDespacho = document.getElementById("frmPrimeraDespacho");
let fecha = document.getElementById("fecha1");
let responsableDiario = document.getElementById("responsableDiario");

//Carga Inicial de las interacciones
function init() {
    frmPrimeraDespacho.addEventListener("submit", function (e) {
        guardar1(e);
    });
}



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

//selecciona el  item para agregarlo al detalle del cargue
$("#tblOperarios tbody").on("click", "#agregarResp", function () {
    var data = tblOperarios.row($(this).parents("tr")).data(); //captura la fila
    agregarResp2(
        data.nombres,
        data.apellidos,
    );
});

//agrega el item al detalle de la formula    id='filas' 
function agregarResp2(nombres, apellidos) {
    responsablePatios = document.getElementById("responsableDiario");
    responsablePatios.value = `${nombres} ${apellidos}`;

}
//modal busqueda de referencias
let tblReferencias1 = $("#tblReferencias1").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/Referencias/todos",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRef1'>+</button>",
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
$("#tblReferencias1 tbody").on("click", "#agregarRef1", function () {
    var data = tblReferencias1.row($(this).parents("tr")).data(); //captura la fila
    agregarDetalle1(
        data.id,
        data.nombre,
        data.medidas,
        data.rendimiento,
        data.peso,
        data.referencia
    );
});

//agrega el item al detalle de la formula    id='filas' 
function agregarDetalle1(id, nombre, medidas, rendimiento, peso, referencia) {
    referencial = document.getElementById("referencial");
    referencial.value = `${referencia}`;
}


//Guardar el documento
function guardar1(e) {
    e.preventDefault();
    let datos1 = new FormData(frmPrimeraDespacho);

    fetch("http://localhost/ProyectoBellavista/PrimeraDespacho/Add", {
        method: "POST",
        body: datos1,
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