<?php 

include 'connection.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$emailaddress = $_POST['emailaddress'];

	$sql = "SELECT * FROM accounts WHERE USERNAME = '$username' AND EMAILADDRESS = '$emailaddress'";
	$query = mysqli_query($con, $sql);
	$numRows = mysqli_num_rows($query);
	if($numRows > 0){
		echo "<script>alert('Username or Emailaddress is already exist!')</script>";
		echo "<script>window.open('create_account.php','_self')</script>";
	}
	else{
		$sql = "INSERT INTO accounts VALUES(NULL, 'ADMIN', '$username', '$password', '$emailaddress')";
		$query = mysqli_query($con, $sql);
		if(!$query){
			die("Error" .mysqli_error());
		}
		else{
			echo "<script>alert('Successfully created!')</script>";
			echo "<script>window.open('Successfully created!','_self')</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create account</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/skeleton.css"/>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
			<div class="row">
				<h2>Create account</h2>
				<label class="u-pull-right"><a href="index.html" style="text-decoration: none;">Home</a></label>
				<label for="username">Username:</label>
				<input type="text" class="u-full-width" name="username" id="username" placeholder="Your username" required/>
				<label for="password">Password:</label>
				<input type="password" class="u-full-width" name="password" id="password" placeholder="Your password" required/>
				<label for="emailaddress">Emailaddress:</label>
				<input type="email" class="u-full-width" name="emailaddress" id="emailaddress" placeholder="Your emaiaddress" required/>
				<input type="submit" style="margin-top: 20px;" name="submit" class="button-primary" value="Create"/>
			</div>
		</form>
	</div>
</body>
</html>