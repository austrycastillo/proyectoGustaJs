<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Paso de datos con variables establecidas por el usuario</title>
<style type="text/css">

body {
	background-color: #CCCCCC;
}
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Estilo6 {font-size: 12px; font-weight: bold; }

</style>
</head>

<body>

<h1>Muchas gracias por su consulta <h1>
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$especialidad = $_POST['especialidad'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$destino = "nukemapu2012@gmail.com";
mail ($destino, $asunto, $mensaje);


?>
<ul>
  <li>Su nombre es: <?php echo $nombre; ?></li>
  <li>Su apellido es: <?php echo $apellido; ?></li>
  <li>Su empresa es: <?php echo $empresa; ?></li>
  <li>Su email es: <?php echo $email; ?></li>
  <li>Su especialidad es: <?php echo $especialidad; ?></li>
  <li>Su telefono es: <?php echo $telefono; ?></li>
<br>
  <h4>El asunto ingresado fue: <?php echo $asunto; ?></h4>
  <h4>El mensaje ingresado fue: <?php echo $mensaje; ?></h4>

</ul>
<a href="index.html"><p><strong>Volver a Index<strong></p>

	</section>
</body>
</html>
