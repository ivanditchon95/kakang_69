<?php 

session_start();
$_SESSION['is_login'] == false;
unset($_SESSION['account_id']);
header("location:index.html");

?>