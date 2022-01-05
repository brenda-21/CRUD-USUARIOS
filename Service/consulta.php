<?php      
// Including database connections  
require_once 'conection.php';  
// mysqli query to fetch all data from database  
$query = "SELECT * FROM usuarios";  
$result = mysqli_query($con, $query);  
$arr = array();  
while($row = mysqli_fetch_assoc($result)) {  
    array_push($arr,$row);
 }
 print json_encode($arr,JSON_FORCE_OBJECT);
//echo $json_info = json_encode($arr);  
?>