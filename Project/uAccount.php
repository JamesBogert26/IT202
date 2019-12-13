<?php
session_start();
?>

<html>
<head>
<title> Home Page </title>

</head>
<body>
	
	<a href ="uLogout.php"> Logout </a>
	
	<h1> Welcome <?php echo $_SESSION['name']; ?> </h1>
	


<form>


Amount :<input type=text name=amounttext><br/>

<input type=submit name=depositButton   value=Deposite ><br/>

<input type=submit name=WithdrawButton   value=Withdraw ><br/>


</form>

<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Sent to</th> 
    <th>Amount</th>
  </tr>
  <tr>
    <td><?php echo $_SESSION['name']; ?></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>	
	
</body>

</html>
