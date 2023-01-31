<?php 
error_reporting(0); 
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="icon" href="<?php echo URLROOT; ?>img/LogotipoLadrillera.png">
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>css/login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header d-flex justify-content-center h-100">
				<h3 style="margin-top: 15%; margin-right: 10%;">Iniciar sesión</h3>
				<img width="35%" src="<?php URLROOT; ?>img/LogotipoLadrillera.png" alt="">		
			</div>
			<div class="card-body">
				<!--	INICIO DE FORMULARIO DE ENTRADA	-->
				<form action="<?php echo URLROOT ?>Login/login" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id="documentoID" name="documentoID" type="text" class="form-control" placeholder="Ingrese su documento de identidad">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="passUsuario" name="passUsuario" type="password" class="form-control" placeholder="Ingrese su contraseña">
						<button id="show_password" class="btn" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
					</div>
					<?php if($data != ""){echo $data;}elseif($data == ""){echo "+.+";}?>
					<input style="background-color: #FFC300; color: #ffffff;margin-left:2px;" type="submit" value="Iniciar" class="btn float-right login_btn">
					<a href="<?php echo URLROOT ?>Inicio" style="background-color: #FFC300; color: #ffffff;" type="button" value="" class="btn float-right login_btn">Volver al inicio</a>
				</form>
			<!--	FIN DE FORMULARIO DE ENTRADA	-->
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links" style="margin-right: 1%;">
					
				</div>
				<div class="d-flex justify-content-center">
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("passUsuario");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
</html>