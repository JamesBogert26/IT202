<?php

session_start();

?>

<html>
<head>
<title> Home Page </title>

</head>
<body>
	
	<a href ="uLogout.php"> Logout </a>
	
	<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
	
</body>

</html>

