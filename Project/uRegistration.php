<?php

session_start();

$con = mysqli_connect('sql1.njit.edu' , 'jbb26', 'QeImfRBe');

mysqli_select_db($con, 'jbb26');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Username already taken";
}
else{
	$reg = " insert into usertable(name , password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
}
?>
