<?php
session_start();
include 'https://web.njit.edu/~jbb26/IT202/Project/uValidation.php';
?>

<?php 
if(isset($_SESSION['pass'])&&$_SESSION['pass']!=""){  //MUltiple session val better
?>
<div id="temp1"></div>





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

<?php 
}
else{
    echo "Access Denide!";
    //redirect to login page or just display message 
}
?>
