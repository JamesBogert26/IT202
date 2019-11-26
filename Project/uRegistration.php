<?php

session_start();

$con = mysqli_connect('sql1.njit.edu' , 'jbb26', 'QeImfRBe');

mysqli_select_db($con, 'jbb26');

$name = $_POST['user'];
$pass = $_POST['password'];
$hashed_password = password_hash($pass, PASSWORD_BCRYPT);

$_SESSION['name']=$name;
$_SESSION['pass']=$pass;
$_SESSION['hash']=$hashed_password;

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Username already taken";
}
else{
	$reg = " insert into usertable(name , password) values ('$name' , '$hashed_password')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}
?>

