<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if(!empty($username) || !empty($password) {
	$host = "sql1.njit.edu";
	$dbUsername = "jbb26";
	$dbPassword = "QeImfRBe";
	$dbname = "reg";
	
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli connect errno().')'.mysqli_connect_error());
		}else{
			$SELECT = "SELECT email From reg Where email = ? Limit 1";
			$INSERT = "INSERT Into reg (username, password, email)";
			
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
			}else{
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

