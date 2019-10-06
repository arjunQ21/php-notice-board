<?php 

$db_host = "localhost";
$db_user = "root" ;
$db_password = "" ;
$db_name = "notices" ;
 
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name ) ;
if(!($conn)){
	die("Error: Unable to connect to database.") ;
}

?>