<?php 

session_start();
include 'connection.php';

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM accounts WHERE USERNAME = '$username' AND PASSWORD = '$password'";
	$query = mysqli_query($con, $sql);
	$numRows = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);
	if($numRows > 0){
		$_SESSION['account_id'] = $row['ACCOUNT_ID'];
		$_SESSION['user_type'] = $row['USER_TYPE'];
		$_SESSION['is_login'] = TRUE;
		echo "<script>window.open('admin_index.html','_self')</script>";
	}
	else{
		echo "<script>alert('Invalid username or password')</script>";
		echo "<script>window.open('index.html','_self')</script>";
	}
}

?>