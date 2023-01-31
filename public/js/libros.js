let tblLibros = $("#tblLibros").DataTable({
  ajax: {
    url: "http://localhost/CURSOPHP/MVCbiblioteca/Libros/todos",
    dataSrc: "",
  },
  columns: [
    { data: "codLibro" },
    { data: "nomLibro" },
    { data: "precioLibro" },
    { data: "idEditorial" },
    { data: "numPagLibro" },
    { data: "generoLibro" },
    { data: "autorLibro" },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='libroEditar' data-bs-toggle='modal' data-bs-target='#libro' class='btn' style='background-color: purple; color:white;'>Editar</a>",
    },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='libroEliminar' data-bs-toggle='modal' data-bs-target='#usuario' class='btn btn-danger'>Eliminar</a>",
    },
  ],
});

//selecciona el libro para editarlo
$("#tblLibros tbody").on("click", "#libroEditar", function () {
  var data = tblLibros.row($(this).parents("tr")).data(); //captura la fila
  editarLibro(
    data.codLibro,
    data.nomLibro,
    data.precioLibro,
    data.idEditorial,
    data.numPagLibro,
    data.generoLibro,
    data.autorLibro
  );
});

function editarLibro(codLibro, nomLibro, precioLibro, idEditorial, numPagLibro, generoLibro, autorLibro) {
  let codL = document.getElementById("codLibro");
  let nomL = document.getElementById("nomLibro");
  let precioL = document.getElementById("precioLibro");
  let idEdit= document.getElementById("idEditorial");
  let numPagL = document.getElementById("numPagLibro");
  let generoL = document.getElementById("generoLibro");
  let autorL = document.getElementById("autorLibro");

  codL.value = codLibro;
  nomL.value = nomLibro;
  precioL.value = precioLibro;
  idEdit.value = idEditorial;
  numPagL.value = numPagLibro;
  generoL.value = generoLibro;
  autorL.value = autorLibro;
}



//selecciona el libro para eliminarlo
$("#tblLibros tbody").on("click", "#libroEliminar", function () {
  var data = tblLibros.row($(this).parents("tr")).data(); //captura la fila
  eliminarLibro(
    data.codLibro,
    data.nomLibro,
    data.precioLibro,
    data.idEditorial,
    data.numPagLibro,
    data.generoLibro,
    data.autorLibro
  );
});

function eliminarLibro(codLibro, nomLibro, precioLibro, idEditorial, numPagLibro, generoLibro, autorLibro) {
  let codL = document.getElementById("codLibroE");
  let nomL = document.getElementById("nomLibroE");
  let precioL = document.getElementById("precioLibroE");
  let idEdit= document.getElementById("idEditorialE");
  let numPagL = document.getElementById("numPagLibroE");
  let generoL = document.getElementById("generoLibroE");
  let autorL = document.getElementById("autorLibroE");

  codL.value = codLibro;
  nomL.value = nomLibro;
  precioL.value = precioLibro;
  idEdit.value = idEditorial;
  numPagL.value = numPagLibro;
  generoL.value = generoLibro;
  autorL.value = autorLibro;
}
 