<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){

require_once "db_connection.php" ;
$id = $_POST['id'] ;
$title = $_POST['title'] ;
$body = $_POST['description'] ;

$sql = "UPDATE notices set title = '$title', body = '$body' where id = $id" ;
mysqli_query($conn, $sql) ;
if(mysqli_affected_rows($conn) == 1){
	// echo "Added Notice" ;
	header("Location: ../updateNotice.php?id=$id&msg=Updated Notice.") ;
}else{
	echo "some error occurred. <br>" ;
	print_r(mysqli_error_list($conn)) ;
}


}



 ?>