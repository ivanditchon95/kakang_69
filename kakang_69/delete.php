<?php 

include 'connection.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM wolar_application WHERE WOLAR_ID = '$id'";
	$query = mysqli_query($con, $sql);
	if(!$query){
		die("Error:" .mysqli_error());
	}
	else{
		echo "<script>alert('Successfully deleted')</script>";
		echo "<script>window.open('wolar_information.php','_self')</script>";
	}
}
?>