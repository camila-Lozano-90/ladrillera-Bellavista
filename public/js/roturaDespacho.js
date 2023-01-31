//const URLROOT = "http://localhost/ProyectoBellavista/";

let frmRoturaDespacho = document.getElementById("frmRoturaDespacho");
let fecha3 = document.getElementById("fecha3");

//Carga Inicial de las interacciones
function init() {
    frmRoturaDespacho.addEventListener("submit", function (e) {
        guardar3(e);
    });
}


//modal busqueda de referencias
let tblOperarios3 = $("#tblOperarios3").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/CargueDescargueHornos/operarios",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarResp3'>+</button>",
        },
        { data: "nombres" },
        { data: "apellidos" },
    ],
});

//selecciona el  item para agregarlo al detalle del cargue
$("#tblOperarios3 tbody").on("click", "#agregarResp3", function () {
    var data = tblOperarios3.row($(this).parents("tr")).data(); //captura la fila
    agregarResp4(
        data.nombres,
        data.apellidos,
    );
});

//agrega el item al detalle de la formula    id='filas' 
function agregarResp4(nombres, apellidos) {
    responsableDiario4 = document.getElementById("responsableDiario3");
    responsableDiario4.value = `${nombres} ${apellidos}`;

}

//modal busqueda de referencias
let tblReferencias4 = $("#tblReferencias4").DataTable({
    autoWidth: false,
    ajax: {
        url: "http://localhost/ProyectoBellavista/Referencias/todos",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRef3'>+</button>",
        },
        { data: "nombre" },
        { data: "medidas" },
        { data: "rendimiento" },
        { data: "peso" },
        { data: "referencia" },
    ],
});


//selecciona el  item para agregarlo al detalle del cargue
$("#tblReferencias4 tbody").on("click", "#agregarRef3", function () {
    var data = tblReferencias4.row($(this).parents("tr")).data(); //captura la fila
    agregarDetalle3(
        data.nombre,
        data.medidas,
        data.rendimiento,
        data.peso,
        data.referencia
    );
});
//});

//agrega el item al detalle de la formula    id='filas' 
function agregarDetalle3(nombre, medidas, rendimiento, peso, referencia) {
    referencial3 = document.getElementById("referencial3");
    referencial3.value = `${referencia}`;
}

//Guardar el documento
function guardar3(e) {
    e.preventDefault();
    let datos3 = new FormData(frmRoturaDespacho);

    fetch("http://localhost/ProyectoBellavista/RoturaDespacho/Add", {
        method: "POST",
        body: datos3,
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