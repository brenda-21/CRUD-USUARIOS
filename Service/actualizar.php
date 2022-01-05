<?php 

include "conection.php";

$Id=$_POST['id'];
$Usuario=$_POST['usuario'];
$Correo=$_POST['correo'];

$consulta="UPDATE usuarios SET usuario = '".$Usuario."', correo='".$Correo."' WHERE (id = '".$Id."');";
mysqli_query($con,$consulta);
$con->close()
?>