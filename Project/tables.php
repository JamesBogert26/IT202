<?php

session_start();

if(!isset($_SESSION['logged']))
{
	echo "<br>login first <br><br>";
	header("refresh:4; url = loginHTML.html");
	exit();
}

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
ini_set('display_errors' , 1);
include ("account.php") ;
include("myFunctions.php"); 
$db = mysqli_connect($hostname,$username, $password ,$project);
if (mysqli_connect_errno())
  {	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
  }
print "<br>Successfully connected to MySQL.<br>";
mysqli_select_db( $db, $project ); 

$UCID = $_SESSION['UCID'];
$account = $_SESSION['account'];

$s = "select * from AA where UCID = '$UCID' and account = $account";
($t = mysqli_query ($db, $s)) or die(mysqli_error($db));

echo"<table border = 2 width = 30%>";
echo"<tr>";
echo"<th>pass</th>";
echo"<th>name</th>";
echo"<th>email</th>";
echo"<th>initial</th>";
echo"<th>current</th>";
echo"<th>recent</th>";
echo"<th>plaintext</th>";
echo"<th>account</th>";
echo"</tr>";
	
while ($r = mysqli_fetch_array ($t, MYSQLI_ASSOC))
{
	$pass = $r["pass"];
	$name = $r["name"];
	$mail = $r["mail"];
	$initial = $r["initial"];
	$current = $r["current"];
	$recent = $r["recent"];
	$plaintext = $r["plaintext"];
	$account = $r["account"];

	echo"<tr>";
	echo"<td>$pass</td>";
	echo"<td>$name</td>";
	echo"<td>$mail</td>";
	echo"<td>$initial</td>";
	echo"<td>$current</td>";
	echo"<td>$recent</td>";	
	echo"<td>$plaintext</td>";
	echo"<td>$account</td>";
	echo"</tr>";


};
echo"</table>";

$q = "select * from TT where UCID = '$UCID' and account = $account";
($w = mysqli_query ($db, $q)) or die(mysqli_error($db));
$num = mysqli_num_rows($w);

echo"<table border = 2 width = 30%>";
echo"<tr>";
echo"<th>type</th>";
echo"<th>amount</th>";
echo"<th>date</th>";
echo"<th>mail</th>";
echo"<th>account</th>";
echo"</tr>";
		
while ($v = mysqli_fetch_array ($w, MYSQLI_ASSOC))
{

	$type = $v["type"];
	$amount = $v["amount"];
	$date = $v["date"];
	$mail = $v["mail"];
	$account = $v['account'];

	echo"<tr>";
	echo"<td>$type</td>";
	echo"<td>$amount</td>";
	echo"<td>$date</td>";
	echo"<td>$mail</td>";
	echo"<td>$account</td>";
	echo"</tr>";
};
	echo"</table>";
?>

<meta charset = "UTF-8">

<span id = "demo"></span>
<input type=checkbox id="box" checked> Check to stop
<script>
"use strict"

document.addEventListener("click", resetTimer)

var ptrSpan = document.getElementById("demo");
var ptrBox = document.getElementById("box");

ptrBox.checked
var d, dsec;
var timer1;

function resetTimer()
{
	if (ptrBox.checked) { return;}
	d = new Date();
	dsec = d.getSeconds();
	ptrSpan.innerHTML += "seconds is " + dsec + "<br>" ;
	clearTimeout(timer1);
	timer1 = setTimeout (logout, 4000);
}

function logout()
{
	if (ptrBox.checked) { return;}
	window.location.href = "logout.php"
}

</script>
