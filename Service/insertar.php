<?php 

include "conection.php";

$Usuario=$_POST['usuario'];
$Correo=$_POST['correo'];

$consulta="INSERT INTO usuarios VALUES (NULL,'".$Usuario."','".$Correo."')";
mysqli_query($con,$consulta);
$con->close()
?>