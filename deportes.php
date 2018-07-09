<!DOCTYPE html>
<html lang="es">
	<head>
		<?php /*ENLACES DE LIBRERIAS */ include_once('secciones/links-local.php');  ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>DEPORTES - BIENESTAR UNIVERSITARIO - AUTÓNOMA DE NARIÑO</title>
		
	</head>
	<body>
		<?php
				include_once('secciones/menu1.php');
				include_once('secciones/logo-central.php');
				include_once('secciones/zoom.php');
				include_once('secciones/redes-sociales-aunar.php');
				include_once('secciones/modal-traductor.php');
				include_once('modal/modal-contactenos.php');
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<img class="mx-auto img-fluid" width="100%" src="img/bienestar/deportes.png"/>
				</div>
			</div>
		</div>
		<?php include_once('secciones/menu_bienestar.php');?>
		<!-- personal encargado -->
		<div class="container-fluid p-5 fondo-gris-os">
			<div class="row m-3 fuente-institucional texto-azul-os d-flex justify-content-center">
				<div class="col-lg-6 ">
					<!-- Personal -->
					<div class="media border-bottom borde-amarillo pb-3">
						<img src="img/bienestar/Vanessa_Constanza.png" class="align-self-center mr-3 rounded-circle" width="180px" >
						<div class="media-body ">
							<h4 class="fuente-institucional texto-amarillo f-negrita">PROFESIONAL ENCARGADO</h4>
							<div class="pt-sans">
								<p><label class="f-negrita">José Luis Yarpaz Benavides</label><br>
									Coordinador de deporte y cultura <br>									
									Lic. En educación Física<br>									
									Candidato A Magister En Deporte Y Actividad Física
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include_once('secciones/footer-principal.php');?>
		
		
	</body>
</html>