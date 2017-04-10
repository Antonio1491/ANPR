<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];

$conectar=mysqli_connect("localhost","root","", "anpr");

if (!$conectar) {
  die("Error en la conexión a la Base de Datos");
}
else{
  echo $nombre, $apellido, $email;
  $sql= "INSERT INTO 	boletin-anpr (nombre, apellido, email)
  VALUES ('$nombre', '$apellido', '$email')";

  mysqli_query($conectar, $sql);

  echo"<script language='JavaScript'>
        alert('Hemos registrado al nuevo contacto correctamente');
      </script>";
  echo "<script>window.location=\"index.html\"</script>";
}

 ?>
