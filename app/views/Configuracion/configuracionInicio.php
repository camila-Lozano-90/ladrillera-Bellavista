<?php
##session_start();
error_reporting(0);
?>
<?php require_once APPROOT . '/views/user/inc/header.php'; ?>
<!-- Navbar End -->

<div class="container text-center" style="background-image: url('<?php echo URLROOT; ?>img/LogotipoLadrillera.png');">
    <div class="row align-items-start">
        <div class="col">
            <div class="">
                <a href="<?php echo URLROOT; ?>Configuracion/cambiarHorarios"><img src="<?php echo URLROOT; ?>img/iconoConfig/calendar.png" style="border-radius: 5%;" width="20%" alt=""></a>
                <a href="<?php echo URLROOT; ?>Configuracion/cambiarTelefonos"><img src="<?php echo URLROOT; ?>img/iconoConfig/telephone.png" style="border-radius: 5%;" width="20%" alt=""></a>
                <a href="<?php echo URLROOT; ?>Configuracion/carpetaFotos"><img src="<?php echo URLROOT; ?>img/iconoConfig/image.png" style="border-radius: 5%;" width="20%" alt=""></a>
                <a href="<?php echo URLROOT; ?>Configuracion/finde">A fourth link item</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
/* Leer el contenido de un directorio de forma asincrona usando callbacks*/
import fs from 'node:fs'
let files = []
fs.readdir('images/',(err, result) => {
  if(err) {
    console.error(err)
    throw Error(err)
  }
  files = result
}) 
```

## ¿Cómo obtener todos los archivos incluyendo los sub-directorios?

Recursión es la respuesta:

```
    async function readAllFiles(path, arrayOfFiles = []){
	const files = fs.readdirSync(path)
	files.forEach(file => {
		const stat = fs.statSync(`${path}/${file}`)
		if(stat.isDirectory()){
			readAllFiles(`${path}/${file}`, arrayOfFiles)
		}else{
			arrayOfFiles.push(`${path}/${file}`)
		}
	}
	)
	return arrayOfFiles
}
```

La función de arriba realiza la lectura del contenido de un directorio

```
const file = fs.readdirSync(path)
```

Luego, para cada uno de los elementos del arreglo retornado 'files.forEach' revisa si dicho elemento es o no un directorio

```
const stat = fs.statSync(`${path}/${file}`)

if(stat.isDirectory())
```

En caso de ser un directorio, realiza una llamada recursiva, cambiando el primer argumento para que sea el actual directorio.

```
readAllFiles(`${path}/${file}`, arrayOfFiles)
```

En caso contrario, simplemente almacena en el arreglo 'arrayOfFiles' el archivo.

Así, el resultado de leer la estructura de directorios anterior el resultado será

```

</script>
<!-- FOOTER -->
<?php require_once APPROOT . '/views/user/inc/footer.php'; ?>