<?php
session_start();
error_reporting(0);
?>

<?php require_once APPROOT . '/views/user/inc/header.php'; ?>

<link rel="stylesheet" href="<?php echo URLROOT; ?>css/sweetalert2.min.css">
<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>

<main class="col-md-12" style="background-color: white;height:auto;">
    <div class="container-fluid">
        <div style="background-color: #FF6800;" class="card-header bg-gradient text-white">
            <h5>Descargue del Horno</h5>
        </div>

        <div class="col-md-12">
            <div class="card">
                <form id="frmDescargueHorno">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5" style="display:inline-block;">
                                <label for="" class="form-label">Responsable Hornos:</label>
                                <div class="input-group form-group" style="padding-top:0%;padding-left:1%;margin-top:0%;margin-bottom:2%;">
                                    <input id="responsableHornos" name="responsableHornos" type="text" class="form-control" placeholder="Buscar..." required>
                                    <button id="buscarResp" class="btn" type="button" style="background-color: #FF6800;color: white;" data-bs-toggle="modal" data-bs-target="#items"><span class="bi bi-search"></span></button>
                                </div>
                            </div>

                            <div class="col-md-5" style="display:inline-block;">
                                <label for="" style="margin-top: 1%;" class="form-label">Responsable Patios:</label>
                                <div class="input-group form-group" style="padding-top:0%;padding-left:1%;margin-top:0%;margin-bottom:2%;">
                                    <input id="responsablePatios" name="responsablePatios" type="text" class="form-control" placeholder="Buscar..." required>
                                    <button id="buscarResp" class="btn" type="button" style="background-color: #FF6800;color: white;" data-bs-toggle="modal" data-bs-target="#items2"><span class="bi bi-search"></span></button>
                                </div>
                            </div>

                            <div class="col-md-5" style="display:inline-block;">
                                <label for="" style="margin-top: 1%;" class="form-label">Referencia:</label>
                                <div class="input-group form-group" style="padding-top:0%;padding-left:1%;margin-top:0%;margin-bottom:2%;">
                                    <input id="referencial" name="referencial" type="text" class="form-control" placeholder="Buscar..." required>
                                    <button id="buscarRef" class="btn" type="button" style="background-color: #FF6800;color: white;" data-bs-toggle="modal" data-bs-target="#items3"><span class="bi bi-search"></span></button>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Descargue estimado:</label>
                                    <input type="number" name="descargueEstimado" id="descargueEstimado" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Diferencia:</label>
                                    <input type="text" name="diferencia" id="diferencia" class="form-control form-control-sm" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Cantidad primera:</label>
                                    <input type="number" name="cantPrimera" id="cantPrimera" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Cantidad segunda:</label>
                                    <input type="number" name="cantSegunda" id="cantSegunda" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Rotura Horno:</label>
                                    <input type="number" name="roturaHorno" id="roturaHorno" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Porcentaje:</label>
                                    <input type="floatval" name="porcentaje" id="porcentaje" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Crudos:</label>
                                    <input type="number" name="crudos" id="crudos" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Total del Descargue:</label>
                                    <input type="number" name="totalDescargue" id="totalDescargue" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Total rotura del día:</label>
                                    <input type="number" name="totalRoturaDia" id="totalRoturaDia" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Porcentaje rotura del día:</label>
                                    <input type="text" value="" name="PorcentajeRoturaDia" id="PorcentajeRoturaDia" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <input type="text" id="idr[]" name="idr[]" value="" hidden>
                            <hr>
                        </div>
                        <!--items*************************************************************************************************************** -->
                        <div class="row mb-1">

                        </div>

                        <div class="card-footer d-flex justify-content-center">
                            <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                            <input value="Guardar registro" type="submit" style="background-color: #FF5733 ; color:#ffffff;" class="btn  btn-sm ms-1" name="btnGuardar" id="btnGuardar">

                        </div>
                </form>
            </div>
            <script type="text/javascript">
                let cantPrimera = document.getElementById("cantPrimera");
                let cantSegunda = document.getElementById("cantSegunda");
                let roturaHorno = document.getElementById("roturaHorno");
                let PorcentajeRoturaDia = document.getElementById("PorcentajeRoturaDia");

                roturaHorno.addEventListener('change', calcularPorcentaje);
                //document.querySelector('#cantPrimera').addEventListener('change', calcularPorcentaje);
                function calcularPorcentaje() {
                    let num1 = cantPrimera.value;
                    let num2 = cantSegunda.value;
                    let num3 = roturaHorno.value;

                    let suma = num1 + num2 + num3;
                    let res1 = suma / 100;
                    let res2 = num3 / res1;
                        //console.log(res2);
                    PorcentajeRoturaDia.innerHTML = res2.value;
                }
            </script>
        </div>
    </div>
    </div>
    <!-- fin del contenedor principal -->
</main>


<!-- Modal Items-->
<div class="modal fade" id="items" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Operarios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm table-hover" id="tblOperarios">
                    <thead class="table-light">
                        <tr>
                            <th></th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                        </tr>
                    </tfoot>
                </table>



            </div>
            <div class="modal-footer">
                <button type="button" style="background-color: #FF6800;color: white;" class="btn" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Items-->
<div class="modal fade" id="items2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Operarios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm table-hover" id="tblOperarios2">
                    <thead class="table-light">
                        <tr>
                            <th></th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                        </tr>
                    </tfoot>
                </table>



            </div>
            <div class="modal-footer">
                <button type="button" style="background-color: #FF6800;color: white;" class="btn" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Items-->
<div class="modal fade" id="items3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Referencias:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered table-sm table-hover" id="tblReferencias">
                    <thead class="table-light">
                        <tr>
                            <th></th>
                            <th>id</th>
                            <th>nombre</th>
                            <th>medidas</th>
                            <th>Rendimiento</th>
                            <th>Peso</th>
                            <th>referencia</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>id</th>
                            <th>nombre</th>
                            <th>medidas</th>
                            <th>Rendimiento</th>
                            <th>Peso</th>
                            <th>referencia</th>
                        </tr>

                    </tfoot>
                </table>



            </div>
            <div class="modal-footer">
                <button type="button" style="background-color: #FF6800;color: white;" class="btn" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>


<!-- fin del contenedor principal -->

<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo URLROOT; ?>js/descargueHornos.js"></script>
<script src="<?php echo URLROOT; ?>js/sweetalert2.all.min.js"></script>

<?php require_once APPROOT . '/views/user/inc/footer.php'; ?>