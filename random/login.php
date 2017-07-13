<?php 
require 'connection.php';
session_start();

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * FROM users
WHERE username='$username'
AND password='$password'";

$result = mysqli_query($connect,$sql);

if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		extract($row);
	$_SESSION['username']=$username;
	$_SESSION['role']=$role;

	$_SESSION['is_logged_in'] = TRUE;
	if ($_SESSION['role']=='admin') {
		$_SESSION['is_admin']=TRUE;
	}

	$_SESSION['message'] = "Hi $username";
	echo $_SESSION['message'];
	}
}


 ?>