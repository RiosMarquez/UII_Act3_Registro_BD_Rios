<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post" >
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="nombre" placeholder="Nombre ">
        <input type="text" name="apellido" placeholder="Apellido">
    	<input type="date" name="fecha_nac" placeholder="Fecha de nacimiento">
        <input type="email" name="correo" placeholder="Correo electronico">
        <input type="password" name="contraseña" placeholder="Contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("usuario.php");
        ?>
</body>
</html>