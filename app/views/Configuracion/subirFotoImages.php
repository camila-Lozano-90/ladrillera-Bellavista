<?php
##session_start();
error_reporting(0);
?>
<?php require_once APPROOT . '/views/user/inc/header.php'; ?>
<!-- Navbar End -->

<main class="col-md-12" style="background-color: white;height:auto;">
    <div class="container-fluid">
        <div style="background-color: #FF6800;" class="card-header bg-gradient text-white">
            <h5>Subir archivos a images</h5>
        </div>
        <div class="col-md-12">
            <div class="card">
                <form id="frmArchivo">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Imagen:</label>
                                    <img src="" alt="" id="imgMostrar" name="imgMostrar">
                                    <input type="file" name="archivo" id="archivo" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!--items*************************************************************************************************************** -->
                        <div class="card-footer d-flex justify-content-center">
                            <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                            <input value="Enviar" type="submit" style="background-color: #FF5733 ; color:#ffffff;" class="btn  btn-sm ms-1" name="btnGuardar1" id="btnGuardar1">
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- fin del contenedor principal -->
</main>


<script type="text/javascript">
    const URLROOT = "http://localhost/ProyectoBellavista/";

    let frmArchivo = document.getElementById("frmArchivo");
    let archivo = document.getElementById("archivo");
    let imgMostrar = document.getElementById("imgMostrar");

    //Carga Inicial de las interacciones
    function init() {
        frmArchivo.addEventListener("submit", function(e) {
            guardar(e);
        });
    }

    archivo.addEventListener("change", () => {
        let archivo = document.getElementById("archivo");
        // Los archivos seleccionados, pueden ser muchos o uno
        const archivos = archivo.files;
        // Si no hay archivos salimos de la función y quitamos la imagen
        if (!archivos || !archivos.length) {
            imgMostrar.src = "";
            return;
        }
        // Ahora tomamos el primer archivo, el cual vamos a previsualizar
        const primerArchivo = archivos[0];
        // Lo convertimos a un objeto de tipo objectURL
        const objectURL = URL.createObjectURL(primerArchivo);
        // Y a la fuente de la imagen le ponemos el objectURL
        imgMostrar.src = objectURL;
    });

    //Guardar el documento
    function guardar(e) {
        e.preventDefault();
        if (archivo.files.length > 0) {
            let datos = new FormData(frmArchivo);
            datos.append("archivo", archivo.files[0]); // En la posición 0; es decir, el primer elemento
            fetch("http://localhost/ProyectoBellavista/Configuracion/subirArchivo", {
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
        } else {
            // El usuario no ha seleccionado archivos
            alert("Selecciona un archivo");
        }
    }


    init();
</script>



<!-- FOOTER -->
<?php require_once APPROOT . '/views/user/inc/footer.php'; ?>