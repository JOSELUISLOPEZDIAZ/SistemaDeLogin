<?php
	include("session.php");
	include("config.php");
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
  <a class="active" href="#"><i class="fa fa-user"></i></a> 
  <a href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Usuario</h2>
<hr/>
<div class="container">
<?php
$result = mysqli_query($mysqli,"SELECT * FROM users");

echo "<table border='1'>
<tr>
<th>Cedula</th>
<th>Primer Nombre</th>
<th>Segundo Nombre</th>
<th>Primer Apellido</th>
<th>Segundo Apellido</th>
<th>Fecha de Nacimiento</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Email</th>

<th>Update</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['cedula'] . "</td>";
echo "<td>" . $row['primer_nombre'] . "</td>";
echo "<td>" . $row['segundo_nombre'] . "</td>";
echo "<td>" . $row['primer_apellido'] . "</td>";
echo "<td>" . $row['segundo_apellido'] . "</td>";
echo "<td>" . $row['fecha_nacimiento'] . "</td>";
echo "<td>" . $row['direccion'] . "</td>";
echo "<td>" . $row['telefono'] . "</td>";
echo "<td>" . $row['email'] . "</td>";

echo "<td><a href='edit.php?id=".$row['username']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='delete.php?id=".$row['username']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td><tr>";
echo "</tr>";
}
echo "</table>";

mysqli_close($mysqli);

?>
</div>
</body>
</html> 
