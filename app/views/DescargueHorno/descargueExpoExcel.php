<?php
header("Pragma: public");
header("Expires: 0");
$filename = "decargueHorno.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<table class="table table-striped table-sm" id="tblDescargue">
    <thead>
        <tr>
            <th scope="col">responsable Hornos</th>
            <th scope="col">responsable Patios</th>
            <th scope="col">referencia</th>
            <th scope="col">descargue Estimado</th>
            <th scope="col">diferencia</th>
            <th scope="col">cantidad Primera</th>
            <th scope="col">cantidad Segunda</th>
            <th scope="col">rotura</th>
            <th scope="col">%</th>
            <th scope="col">crudos</th>
            <th scope="col">Total</th>
            <th scope="col">TotalRoturaDia</th>
            <th scope="col">%RoturaDia</th>
            <th scope="col">Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $descargue) :; ?>
            <tr>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->responsableHornos)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->responsablePatios)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->referencia)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->descargueEstimado)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->diferencia)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->cantPrimera)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->cantSegunda)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->roturaHorno)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->porcentaje)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->crudos)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->totalDescargue)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->totalRoturaDia)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->PorcentajeRoturaDia)); ?></td>
                <td><?php echo iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($descargue->fecha)); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>