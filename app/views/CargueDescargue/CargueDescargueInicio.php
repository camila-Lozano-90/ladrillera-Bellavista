<?php
##session_start();
error_reporting(0);
?>
<?php require_once APPROOT . '/views/user/inc/header.php'; ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light">
    <h2>Cargue y descargue del horno</h2>
    <div class="table-responsive">
        <div class="col-12">
            <a type="button" class="btn btn-success" href="<?php echo URLROOT; ?>CargueDescargueHornos/Add">Nuevo</a>
        </div>
        <table class="table table-stripped table-sm" id="tblPrestamos2">
            <thead>
                <tr>
                    <th>responsableCargue</th>
                    <th>fechaCargue</th>
                    <th>paquete</th>
                    <th>nombreRef</th>
                    <th>medidasRef</th>
                    <th>rendimientoRef</th>
                    <th>pesoRef</th>
                    <th>referencia</th>
                    <th>cantidad</th>
                    <th># Cargue</th>
                    
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</main>
</div>
</div>


<script src="<?php echo URLROOT; ?>jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?php echo URLROOT; ?>DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URLROOT; ?>js/prestamos2.js"></script>





<?php require_once APPROOT . '/views/user/inc/footer.php'; ?>