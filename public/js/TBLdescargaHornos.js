let tblDescargues = $("#tblDescargues").DataTable({
    ajax: {
      url: "http://localhost/ProyectoBellavista/DescargueHornos/getAll",
      dataSrc: "",
    },
    columns: [
      { data: "responsableHornos" },
      { data: "responsablePatios" },
      { data: "referencia" },
      { data: "descargueEstimado" },
      { data: "diferencia" },
      { data: "cantPrimera" },
      { data: "cantSegunda" },
      { data: "roturaHorno" },
      { data: "porcentaje" },
      { data: "crudos" },
      { data: "totalDescargue" },
      { data: "totalRoturaDia" },
      { data: "PorcentajeRoturaDia" },
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