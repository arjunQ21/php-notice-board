<?php 
if(session_status() == PHP_SESSION_NONE){
	session_start() ;
}

$db_host = "localhost";
$db_user = "id11365941_root" ;
$db_password = "12345678" ;
$db_name = "id11365941_notices" ;
 
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name ) ;
if(!($conn)){
	die("Error: Unable to connect to database.") ;   
}

?>