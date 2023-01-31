//const URLROOT = "http://localhost/ProyectoBellavista/";
//=========================================================================================================
//Carga Inicial de las interacciones
//Tabla
$("#tblInv").DataTable({
  ajax: {
    url: "http://localhost/ProyectoBellavista/DiarioInventario/getAll",
    dataSrc: "",
  },
  columns: [
    { data: "responsableCargue" },
    { data: "fechaDiario" },
    { data: "referencia" },
    { data: "primera" },
    { data: "segunda" },
    { data: "rotura" },
  ],
});


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


