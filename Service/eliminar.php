<?php 

include "conection.php";

$Id=$_POST['id'];

$consulta="DELETE FROM usuarios WHERE id='".$Id."'";
mysqli_query($con,$consulta);
$con->close()
?>