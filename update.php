<?php
include("config.php");
include("session.php");

		  

$id = $_POST['id'];
$primer_nombre = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];



$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE users SET primer_nombre = '$primer_nombre', segundo_nombre= '$segundo_nombre',  primer_apellido= '$primer_apellido',  segundo_apellido= '$segundo_apellido', fecha_nacimiento= '$fecha_nacimiento',  direccion= '$direccion',  telefono= '$telefono',  email= '$email', username='$username', password='$password' WHERE username='$id'";






if(mysqli_query($mysqli, $sql)){
   
   
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado satisfactoriamente!");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	
	
	echo '<script language="javascript">';
	echo 'alert("Error actualizando!");';
	echo 'window.location="users.php";';
	echo '</script>';
}

?>
