<?php include"inc/conexion.php"; ?>
<?php include_once("inc/analyticstracking.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body >
	<?php
$nombre=$_POST["nom_usuario"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$organizacion=$_POST["nom_organizacion"];
$direccion=$_POST["direccion"];
$cp=$_POST["cp"];
$ciudad=$_POST["ciudad"];
$estado=$_POST["estado"];

$consulta=mysql_query("INSERT INTO usuarios (nombre, email, telefono, organizacion, direccion, cp, ciudad, estado)
					VALUES ('$nombre', '$correo', '$telefono', '$organizacion', '$direccion', '$cp', '$ciudad', '$estado') ");

echo"<script language='JavaScript'> 
                alert('Gracias por registrarte: $nombre '); 
                </script>";

echo "<script>window.location=\"index.php\"</script>";

?>
	
</body>
</html>

