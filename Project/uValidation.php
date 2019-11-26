<?php

session_start();

$con = mysqli_connect('sql1.njit.edu' , 'jbb26', 'QeImfRBe');

mysqli_select_db($con, 'jbb26');

$name = $_POST['user'];
$pass = $_POST['password'];
$y = $_SESSION['hash'];

if(password_verify($pass, $y)) {

	$s = " select * from usertable where name = '$name' && password = '$y'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1){
		header('location:uLand.php');
	}
	
	else{
		//header('location:uLogin.php');
		echo " Login failed. Check username and password";
	}
}else{
	echo " Login failed. Check username and password";
}
	
	

?>
