<?php
	include("session.php");
	include("config.php");
	$id = $_GET['id'];
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
<h2>Update</h2>
<hr/>




<form action="update.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM users WHERE username ='$id'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<label><b>Información personal</b>";
    echo"<input type='hidden' name='id' value='{$row['username']}' required>";
    echo"<input type='text' placeholder='First name' name='primer_nombre' value='{$row['primer_nombre']}' required>";
    echo"<input type='text' placeholder='First name' name='segundo_nombre' value='{$row['segundo_nombre']}' required>";
    echo"<input type='text' placeholder='Middle name' name='primer_apellido' value='{$row['primer_apellido']}' required>";
    echo"<input type='text' placeholder='Last name' name='segundo_apellido' value='{$row['segundo_apellido']}' required>";
    echo"</label>";
		
  	echo"<label><b>Fecha de nacimiento</b>";
    echo"<input type='date' name='fecha_nacimiento' value='{$row['fecha_nacimiento']}'required>";
    echo"</label>";
    
    echo"<label><b>Ubicacion</b>";
    echo"<input type='text' placeholder='First name' name='direccion' value='{$row['direccion']}' required>";
    echo"<input type='text' placeholder='Middle name' name='telefono' value='{$row['telefono']}' required>";
    echo"<input type='text' placeholder='Last name' name='email' value='{$row['email']}' required>";
    echo"</label>";
    
    echo"<label><b>Autenticacion</b>";
    echo"<input type='text' placeholder='Username' name='username' value='{$row['username']}' required>";
    echo"<input type='password' placeholder='New Password' name='password' value='{$row['password']}' required>";
    echo"</label>";
    
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Update</button>";
	echo"</div>";
	}?>
  </div>
</form>
