<?php 
if(session_status() == PHP_SESSION_NONE){
	session_start() ;
}

function authorised(){
	return isset($_SESSION['authorised']) ;
}