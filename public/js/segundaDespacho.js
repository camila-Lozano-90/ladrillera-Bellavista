//const URLROOT = "http://localhost/ProyectoBellavista/";

let frmSegundaDespacho = document.getElementById("frmSegundaDespacho");
let fecha2 = document.getElementById("fecha2");

//Carga Inicial de las interacciones
function init() {
    frmSegundaDespacho.addEventListener("submit", function (e) {
        guardar2(e);
    });
}


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
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarResp2'>+</button>",
        },
        { data: "nombres" },
        { data: "apellidos" },
    ],
});

//selecciona el  item para agregarlo al detalle del cargue
$("#tblOperarios2 tbody").on("click", "#agregarResp2", function () {
    var data = tblOperarios2.row($(this).parents("tr")).data(); //captura la fila
    agregarResp3(
        data.nombres,
        data.apellidos,
    );
});

//agrega el item al detalle de la formula    id='filas' 
function agregarResp3(nombres, apellidos) {
    responsableDiario2 = document.getElementById("responsableDiario2");
    responsableDiario2.value = `${nombres} ${apellidos}`;

}

//modal busqueda de referencias
let tblReferencias2 = $("#tblReferencias2").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/SegundaDespacho/todasRef",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRef2'>+</button>",
        },
        { data: "nombre" },
        { data: "medidas" },
        { data: "rendimiento" },
        { data: "peso" },
        { data: "referencia" },
    ],
});

//selecciona el  item para agregarlo al detalle del cargue
$("#tblReferencias2 tbody").on("click", "#agregarRef2", function () {
    var data = tblReferencias2.row($(this).parents("tr")).data(); //captura la fila
    agregarDetalle2(
        data.id,
        data.nombre,
        data.medidas,
        data.rendimiento,
        data.peso,
        data.referencia
    );
});
//});
//agrega el item al detalle de la formula    id='filas' 
function agregarDetalle2(id, nombre, medidas, rendimiento, peso, referencia) {
    referencial2 = document.getElementById("referencial2");
    referencial2.value = `${referencia}`;
}


//Guardar el documento
function guardar2(e) {
    e.preventDefault();
    let datos2 = new FormData(frmSegundaDespacho);

    fetch("http://localhost/ProyectoBellavista/SegundaDespacho/Add", {
        method: "POST",
        body: datos2,
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