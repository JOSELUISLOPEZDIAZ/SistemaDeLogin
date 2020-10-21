<?php
include("config.php");
include("session.php");

$username = $_POST['username'];
$password = $_POST['password'];
$cedula = $_POST['cedula'];
$primer_nombre = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];


$sql = "INSERT INTO users
            (username,password,cedula,primer_nombre,segundo_nombre, primer_apellido,segundo_apellido,fecha_nacimiento,direccion,telefono,email) 
        VALUES
            ('$username','$password','$cedula','$primer_nombre','$segundo_nombre','$primer_apellido','$segundo_apellido','$fecha_nacimiento','$direccion','$telefono','$email')";




if(mysqli_query($mysqli, $sql)){

 
    echo '<script language="javascript">';
	echo 'alert("New user was added!");';
	echo 'window.location="home.php";';
	echo '</script>';

	
} else {


	echo '<script language="javascript">';
	echo 'alert("Duplicate user!");';
	echo 'window.location="registration.php";';
	echo '</script>';

}



?>
