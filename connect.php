<?php 
	$server = "localhost";
	$database = "habesha_gram";
	$username = "HenokG";
	$password = "thenokg";
	try{
	$conn = new PDO("mysql:host=$server;dbname=$database",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
	catch(PDOException $e){
		echo "Sorry We Can't Connect To Database At This Time.".$e->getMessage();}
 ?>