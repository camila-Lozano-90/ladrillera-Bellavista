$("#tblCargues").DataTable({
  ajax: {
    url: "http://localhost/ProyectoBellavista/CargueDescargueHornos/getAll",
    dataSrc: "",
  },
  columns: [
    { data: "responsableCargue" },
    { data: "fechaCargue" },
    { data: "paquete" },
    { data: "nombre" },
    { data: "medidas" },
    { data: "rendimiento" },
    { data: "peso" },
    { data: "referencia" },
    { data: "cantidad" },
    { data: "idCargueHeader" },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='editarPrestamo'  class='btn' style='background-color: purple; color:white;'>Editar</a>",
    },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' class='btn btn-danger'>Eliminar</a>",
    },
  ],
});












/*
//selecciona el  item para agregarlo al detalle de la formula
$("#tblPrestamos2 tbody").on("click", "#editarPrestamo", function () {
  var data = tblPrestamos2.row($(this).parents("tr")).data(); //captura la fila
  agregarDetalle(    
    data.nomPrestador,
    data.nomUsuario,
    data.fechaSalidaPrestamo,
    data.fechaDevolucionPrestamo,
    data.fechaMaxDevPrestamo,
    data.cantLibros,
    data.codLibro,
    data.nomLibro,
    data.idEditorial,
    data.numPagLibro,
    data.generoLibro,
    data.autorLibro,
    data.numPrestamo
      );
});
//});

//agrega el item al detalle de la formula
function agregar(nomPrestador,nomUsuario,fechaSalidaPrestamo,fechaDevolucionPrestamo,fechaMaxDevPrestamo,cantLibros,
  codLibro,nomLibro,idEditorial,numPagLibro,generoLibro,autorLibro,numPrestamo) {
  detalle = document.getElementById("det");
  fila = `  
  <tr id='filas' > 
  <td><input type="text" name="nomPrestador[]" id="nomPrestador[]" value ="${nomPrestador}" class="form-control form-control-sm"</td>
  <td><input type="text" name="nomUsuario[]"  id="nomUsuario[]" value ="${nomUsuario}" class="form-control form-control-sm"}</td>
  <td><input type="text" name="fechaSalidaPrestamo[]"  id="fechaSalidaPrestamo[]" value ="${fechaSalidaPrestamo}" class="form-control form-control-sm"</td>
  <td><input type="text" name="fechaDevolucionPrestamo[]" id="fechaDevolucionPrestamo[]" value ="${fechaDevolucionPrestamo}" class="form-control form-control-sm"</td>
  <td><input type="text" name="fechaMaxDevPrestamo[]"  id="fechaMaxDevPrestamo[]" value ="${fechaMaxDevPrestamo}" class="form-control form-control-sm"</td>
  <td><input type="text" name="cantLibros[]" id="cantLibros[]" value ="${cantLibros}" class="form-control form-control-sm"</td>
  <td><input type="text" name="codLibro[]" id="codLibro[]" value ="${codLibro}" class="form-control form-control-sm"</td>
  <td><input type="text" name="nomLibro[]"  id="nomLibro[]" value ="${nomLibro}" class="form-control form-control-sm"}</td>
  <td><input type="text" name="idEditorial[]"  id="idEditorial[]" value ="${idEditorial}" class="form-control form-control-sm"</td>
  <td><input type="text" name="numPagLibro[]" id="numPagLibro[]" value ="${numPagLibro}" class="form-control form-control-sm"</td>
  <td><input type="text" name="generoLibro[]"  id="generoLibro[]" value ="${generoLibro}" class="form-control form-control-sm"</td>
  <td><input type="text" name="autorLibro[]" id="autorLibro[]" value ="${autorLibro}" class="form-control form-control-sm"</td>
  <td><input type="text" name="numPrestamo[]" id="numPrestamo[]" value ="${numPrestamo}" class="form-control form-control-sm"</td>
  </tr>
  `;
  detalle.innerHTML += fila;
}


 function editarPrestamo(nomPrestador,nomUsuario,fechaSalidaPrestamo,fechaDevolucionPrestamo,fechaMaxDevPrestamo,cantLibros,
 codLibro,nomLibro,idEditorial,numPagLibro,generoLibro,autorLibro,numPrestamo) {
  let nomP = document.getElementById("nomPrestador");
  let nomU = document.getElementById("nomUsuario");
  let fechaSalidaP = document.getElementById("fechaSalidaPrestamo");
  let fechaDevolucionP = document.getElementById("fechaDevolucionPrestamo");
  let fechaMaxDevP = document.getElementById("fechaMaxDevPrestamo");
  let cantL = document.getElementById("cantLibros");
  let codL = document.getElementById("codLibro");
  let nomL = document.getElementById("nomLibro");
  let idEdit = document.getElementById("idEditorial");
  let numPagL = document.getElementById("numPagLibro");
  let generoL = document.getElementById("generoLibro");
  let autorL = document.getElementById("autorLibro");
  let numP = document.getElementById("numPrestamo");

  nomP.value = nomPrestador;
  nomU.value = nomUsuario;
  fechaSalidaP.value = fechaSalidaPrestamo;
  fechaDevolucionP.value = fechaDevolucionPrestamo;
  fechaMaxDevP.value = fechaMaxDevPrestamo;
  cantL.value = cantLibros;
  codL.value = codLibro;
  nomL.value = nomLibro;
  idEdit.value = idEditorial;
  numPagL.value = numPagLibro;
  generoL.value = generoLibro;
  autorL.value = autorLibro;
  numP.value = numPrestamo;
}

 */








/* //selecciona el libro para editarlo
$("#tblPrestamos2 tbody").on("click", "#editarPrestamo", function () {
  var data = tblPrestamos2.row($(this).parents("tr")).data(); //captura la fila
  editarPrestamo(
    data.nomPrestador,
    data.nomUsuario,
    data.fechaSalidaPrestamo,
    data.fechaDevolucionPrestamo,
    data.fechaMaxDevPrestamo,
    data.cantLibros,
    data.codLibro,
    data.nomLibro,
    data.idEditorial,
    data.numPagLibro,
    data.generoLibro,
    data.autorLibro,
    data.numPrestamo
  );
}); */
  