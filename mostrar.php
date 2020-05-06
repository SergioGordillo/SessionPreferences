<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>

	<!-- Cuando haya click en guardar preferencias, guardo la info del formulario en sesión y cuando entre en mostrar aquí que me muestre los valores de la sesión y que al borrar preferencias te borre la sesión -->

	


    <?php

	session_start(); //Inicio la sesión 

	if(isset($_POST['borrar'])){
		unset($_SESSION['idioma']);
		unset($_SESSION['perfil']);
		unset($_SESSION['zona_horaria']); 
		echo "La sesión ha sido borrada";
	}



	?>


		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" data-ajax="false" enctype="multipart/form-data">
        
			<fieldset>
				<legend>Preferencias</legend>

				<p>Idioma:</p>
				<?php
					if(isset($_SESSION['idioma'])){
						echo $_SESSION['idioma']; 
					} else {
						echo "No hay idioma registrado en esta sesión"; 
					}


				?>

				<p>Perfil público:</p>
				<?php
					if(isset($_SESSION['perfil'])){
						echo $_SESSION['perfil']; 
					} else {
						echo "No hay perfil registrado en esta sesión";
					}


				?>
				

				<p>Zona horaria:</p>
				<?php	if(isset($_SESSION['zona_horaria'])){
						echo $_SESSION['zona_horaria']; 
					} else {
						echo "No hay zona horaria registrada en esta sesión";
					}
			?>

				<input type="submit" name="borrar" value="Borrar preferencias">
				<br/>
				<a href="preferencias.php">Establecer preferencias</a>

			</fieldset>

		</form>
	</body>
</html>