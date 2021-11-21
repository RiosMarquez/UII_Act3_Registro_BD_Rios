<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['fecha_nac']) >= 1 && strlen($_POST['contraseña']) >= 1) {
	    $name = trim($_POST['nombre']);
	    $correo = trim($_POST['correo']);
		$apellido = trim($_POST['apellido']);
		$fecha = trim($_POST['fecha_nac']);
		$contraseña = trim($_POST['contraseña']);
		

	
	    $consulta = "INSERT INTO usuario(nombre, apellido, fecha_nac,correo, contraseña) VALUES ('$name','$apellido', '$fecha','$correo','$contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>