<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrar</h2>
<hr/>
<form action="register.php" method="POST">
  <div class="container">
	  
	<label><b>Información Personal</b> 
	<input type="text" placeholder="Cedula" name="cedula" required>
	<input type="text" placeholder="Primer Nombre" name="primer_nombre" required>
	<input type="text" placeholder="Segundo Nombre" name="segundo_nombre" >
    <input type="text" placeholder="Primer Apellido" name="primer_apellido" required>
    <input type="text" placeholder="Segundo Apellido" name="segundo_apellido" >
    </label>
    
  	<label><b>Fecha de Nacimiento</b>
    <input type="date" name="fecha_nacimiento" required>
    </label>
    <label><b>Ubicación</b>
    <input type="text" placeholder="Direccion" name="direccion" required>
	<input type="text" placeholder="Telefono" name="telefono" required>
	<input type="text" placeholder="Email" name="email" required>
    </label>
    <label><b>Autenticación</b>
    <input type="text" placeholder="Usuario" name="username" required>
    <input type="password" placeholder="Clave" name="password" required>
    <input type="password" placeholder="Repetir Clave" name="psw-repeat" required>
     </label>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Registrar</button>
	  <input type="reset" class="cancelbtn" value="Cancelar">
    </div>
  </div>
</form>
