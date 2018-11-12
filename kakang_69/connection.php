<?php 
include_once 'db.php';

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DBNAME);
if(!$con){
	die("Error" .mysqli_error());
}
else{
	return $con;
}
?>