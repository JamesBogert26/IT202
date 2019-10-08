<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getName(){
	if(isset($_GET['name'])){
		echo "<p>Hello, " . $_GET['name'] . "</p>";
	}
}

$password = $_GET['password'];
$confirmpassword = $_GET['confirm_password'];

if($_GET['password']==$_GET['confirm_password'])
{
	echo "<p> Confirmed" . "</p>";
}
else
{
	echo "<p> Doesnt match" . "</p>";
}
?>
<html>
<head></head>
<body><?php getName();?>
<form method="GET" action="#">
<input name="name" type="text" placeholder="Enter your name"/>
<input name="password" type="password" placeholder="Enter a password"/>

<input name="password" type="password" placeholder="Confirm your password"/>

<button type="submit" class="pure-button pure-button-primary">Confirm</button>





		

<input type="submit" value="Try it"/>
</form>
</body>
</html>

<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
}
?>
