<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if(!empty($username) || !empty($password) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "TestUsers";
	
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	
	if(mysqli_connect_error()){
		die('connect error('.mysqli connect error().')'.mysqli_connect());
		}else{
			$SELECT = "SELECT email from register where email = ? Limit 1";
			$INSERT = "INSERT Into register (username, password, email);
			
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if($rnum==0){
				$stmt->close();
				
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssii", $username, $password, $email);
				$stmt->execute();
				echo "recorded";
				
			}echo{
					echo "already taken";
			}
			$stmt->close();
			$conn->close();	
			
			
		}
}else{
	echo "Fields required"
	die();
}

?>
