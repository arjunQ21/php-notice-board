<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){

require_once "db_connection.php" ;
$uploaded_by = $_POST['name'] ;
$title = $_POST['title'] ;
$body = $_POST['description'] ;

$sql = "INSERT INTO notices( made_by, title, body ) VALUES ( '$uploaded_by', '$title', '$body' )" ;
mysqli_query($conn, $sql) ;
if(mysqli_affected_rows($conn) == 1){
	echo "Added Notice" ;
	header("Location: ../addNotice.php?msg=Added Notice.") ;
}else{
	echo "some error occurred. <br>" ;
	print_r(mysqli_error_list($conn)) ;
}


}



 ?>