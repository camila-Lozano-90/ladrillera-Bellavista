const URLROOT = "http://localhost/ProyectoBellavista/";

let nave = document.getElementById("nave");
let quema = document.getElementById("quema");
let paquete = document.getElementById("paquete");
let linea = document.getElementById("linea");
let fechaCargue = document.getElementById("fechaCargue");
let frmCargueDescargue = document.getElementById("frmCargueDescargue");

//Carga Inicial de las interacciones
function init() {
  frmCargueDescargue.addEventListener("submit", function (e) {
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
      url: "http://localhost/ProyectoBellavista/Operarios/todos",
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
  agregarResp1(
      data.nombres,
      data.apellidos,
  );
});

//agrega el item al detalle de la formula    id='filas' 
function agregarResp1(nombres, apellidos) {
  let nomOperario = document.getElementById("responsableCargue");
  nomOperario.value = `${nombres}${apellidos}`;

}

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
  agregarDetalle( 
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
function agregarDetalle(id,nombre,medidas,rendimiento,peso,referencia) {
  detalle = document.getElementById("detalle");
  let cantidad = 0;
  fila = `  
  <tr id='filas' > 
  <td><input type="number" name="id[]" id="id[]" value = '${id}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="nombre[]"  id="nombre[]" value = '${nombre}' class="form-control form-control-sm"></td>
  <td><input type="text" name="medidas[]"  id="medidas[]" value = '${medidas}' class="form-control form-control-sm"></td>
  <td><input type="text" name="rendimiento[]" id="rendimiento[]" value = '${rendimiento}' class="form-control form-control-sm"></td>
  <td><input type="text" name="peso[]"  id="peso[]" value = '${peso}' class="form-control form-control-sm"></td>
  <td><input type="text" name="referencia[]" id="referencia[]" value = '${referencia}' class="form-control form-control-sm"></td>
  <td><input type="number" name="cantidad[]" id="cantidad[]" value = '${cantidad}' class="form-control form-control-sm"></td>
  <td><button id="borrar" type="button"style='background-color: red; color:white;' class="btn" data-bs-toggle="modal" data-bs-target="#eliminarItem">Eliminar</button></td>
  </tr>
  `;
  detalle.innerHTML += fila;
}
//selecciona el  item para quitar una fila del detalle del cargue
$(document).on('click', '#borrar', function(event) {
  event.preventDefault();
  $(this).closest('tr').remove();
}); 


//Guardar el documento
 function guardar(e) {
  e.preventDefault();
  let datos = new FormData(frmCargueDescargue);

  fetch("http://localhost/ProyectoBellavista/CargueDescargueHornos/Add", {
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
















//para llenar el select option de libro
/* fetch(URLROOT + "Prestamos/todosLibros")
.then(function (response) {
  return response.json();
}) */
/* .then(function (datos) {
  for (let index = 0; index < datos.length; index++) {
    nomLibro.options[index] = new Option(datos[index].nomLibro)

  }
}) */
/* function llenarLibro() {
  fetch(URLROOT + "Libros/todos")
    .then((response) => response.json())
    .then((data) => {
      for (let i = 0; i <= data.length; i++) {
        nomLibro.options[i] = new Option(data[i].nomLibro)
         nomLibro.addEventListener("change", function (e) {
          nomLibro.value = e.target.value;
        }); 
      }
    })
    //Then con el error generado...
    .catch((error) => {
      console.error("Error:", error);
    });
} */

//selecciona el  item para agregarlo al detalle de la formula
/* $("#tblLibros tbody").on("click", "#agregarLibro", function () {
  var data = tblLibros.row($(this).parents("tr")).data(); //captura la fila
  agregarDataLibro(
    data.codLibro,
    data.nomLibro,
    data.precioLibro,
    data.idEditorial,
    data.numPagLibro,
    data.generoLibro,
    data.autorLibro
  );
}); */


/* //para llenar el cuadro de busqueda de la modal de items
//$(document).ready(function () {
let tblItems = $("#tblItems").DataTable({
  autoWidth: false,
  ajax: {
    url: "http://localhost/Aphp/hospv2/Formula/getItems",
    dataSrc: "",
  },
  columns: [
    {
      data: null,
      defaultContent:
        "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Agregar +</button>",
    },
    { data: "idItem" },
    { data: "descripcion" },
  ],
});
//selecciona el  item para agregarlo al detalle de la formula
$("#tblItems tbody").on("click", "#agregar", function () {
  var data = tblItems.row($(this).parents("tr")).data(); //captura la fila
  agregarDetalle(data.idItem, data.descripcion);
});
//});
*/


//======================================================================================================

//cargamos todo
//init();

/* window.addEventListener(
  "load",
  function () {
    // do something here ...
  },
  false
);
 */

/* $(document).ready(function () {
  $("#tblPrestamos").DataTable({
    ajax: {
      url: "http://localhost/CURSOPHP/MVCbiblioteca/Prestamos/todos",
      dataSrc: "",
    },
      columns: [
        { data: "numPrestamo" },
        { data: "codLibro" },
        { data: "idUsuario" },
        { data: "fechaSalidaPrestamo" },
        { data: "fechaDevolucionPrestamo" },
        { data: "fechaMaxDevPrestamo" },
        { data: "cantLibros" },
        { data: "nomLibro" },
        {
          data: null,
          defaultContent:
            "<a type='button' href='<?php URLROOT; ?>Prestamos/PrestamosEditar/<?php echo $libros->codLibro;  ?>' class='btn' style='background-color: purple; color:white;'>Editar</a>",
        },
        {
          data: null,
          defaultContent:
            "<a type='button' href='<?php URLROOT; ?>Prestamos/PrestamosEliminar/<?php echo $libros->codLibro;  ?>' class='btn btn-danger'>Eliminar</a>",
        },
      ],
    });
  }); */



