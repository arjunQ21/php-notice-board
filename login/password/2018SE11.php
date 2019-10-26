<?php 
session_start() ;
$_SESSION['authorised'] = 1 ;
header("Location: ../../index.php?msg=You are granted admin permissions now.") ;
?>