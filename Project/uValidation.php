<?php

session_start();

$con = mysqli_connect('sql1.njit.edu' , 'jbb26', 'QeImfRBe');

mysqli_select_db($con, 'jbb26');

$n = $_SESSION['name'];
$p = $_SESSION['pass'];
$y = $_SESSION['hash'];
echo $y;
if(password_verify($p, $y)) {
		// If the password inputs matched the hashed password in the database
		// Do something, you know... log them in.

	$s = " select * from usertable where name = '$n' && password = '$y'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1){
		header('location:uLand.php');
	}
	
	else{
		//header('location:uLogin.php');
		echo " Login failed. Check username and password";
	}
}
	

?>
