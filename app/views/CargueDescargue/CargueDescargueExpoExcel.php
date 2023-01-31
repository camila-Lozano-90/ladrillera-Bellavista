<?php
header("Pragma: public");
header("Expires: 0");
$filename = "cargueHorno.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<table class="table table-striped table-sm" id="tblCargues">
    <thead>
        <tr>
            <th scope="col">responsable</th>
            <th scope="col">fechaCargue</th>
            <th scope="col">nave</th>
            <th scope="col">paquete</th>
            <th scope="col">linea</th>
            <th scope="col">nombre</th>
            <th scope="col">medidas</th>
            <th scope="col">rendimiento</th>
            <th scope="col">peso</th>
            <th scope="col">referencia</th>
            <th scope="col">cantidad</th>
            <th scope="col"># Cargue</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $cargue) :; ?>
            <tr>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->responsableCargue)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->fechaCargue)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->nave)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->paquete)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->linea)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->nombre)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->medidas)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->rendimiento)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->peso)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->referencia)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($cargue->cantidad)); ?></td>
                <td><?php echo $cargue->idCargueHeader; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>