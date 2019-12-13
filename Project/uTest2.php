<?php
session_start();
include 'https://web.njit.edu/~jbb26/IT202/Project/uValidation.php';
?>

<?php 
if(isset($_SESSION['pass'])&&$_SESSION['pass']!=""){  
?>
<html>
<a href ="uLogout.php"> Logout </a>
<head>

<title> Bank App</title>

<style type="text/css">

.container{

width:90%;

border: 1px solid black;

padding: 10px;

}

.accInfo{

border:1px solid black;

}

.container ul{

list-style:none;

padding:10px;

margin:10px;

}

.container li{

display: block;

padding: 15px;

border:1px solid solid black;

margin-bottom: 30px;

border-radius: 3px;

}



</style>

<script src="scrip.js"></script>

</head>

<body>

<h1> Banking App </h1>

<div class="container">

<form>

<ul>

<li class="accInfo">

<label>Account Summary and Details </label>

<table cellpadding="5">

<tr>

<td>

Name:

<input type="text" name="accountinfo" id="accountinfo" value="">

</td>

<td>

Account Type:<br>

<input type="radio" name="acctype" value="1" checked> Saving

<input type="radio" name="acctype" value="2"> Checking

</td>

</tr>

</table>

</li>

<li class="transInfo">

<label>Transactions</label>

<table cellpadding="5" >

<tr>

<td>

Amount

<input type="text" name="amntinfo" id="amntinfo" value="">

</td>

<td>

Transfer From

<select name="transFrm" id="transFrm">

<option value="0"> </option>

<option value="1">Saving</option>

<option value="2">Checking</option>

</select>

Transfer To

<select name="transTo" id="transTo">

<option value="0"> </option>

<option value="1">Saving</option>

<option value="2">Checking</option>

</select><br>

</td>

</tr>

<tr>

<td colspan="2">

<div style="padding-top:10px;">

<span style="padding-right:15%;"><button type="button" name="deposit" id="deposit" style="padding:5px;" onclick="return depositAmt();" >Deposit</button></span>

<span style="padding-right:15%;"><button type="button" name="withdrw" id="withdrw" style="padding:5px;" onclick="return withdrawAmt();">Withdraw</button></span>

<span style="padding-right:15%;"><button type="button" name="tranfr" id="tranfr" style="padding:5px;" onclick="return transferAmt();" >Transfer</button></span>

<span style=""><button type="button" name="viewTrans" id="viewTrans" style="padding:5px;" onclick="return viewTransaction();">View Transaction</button></span>

</div>

</td>

</tr>

</table>

</li>

<li class="accInfo">

<label for="viewTransInfo"> View Transactions </label>

<div id="accDesc">

Name: - <br>

Account: - <br>

 Balance: $1000.00 <br>

<table cellpadding="2" cellpadding="2" border="1" width="100%">

<tr>

<th>Description</th>

<th>Amount</th>

<th>Balance</th>

</tr>

<tr>

<td colspan="3" align="center">No transaction found</td>

</tr>

</table>

</div>

</li>

</ul>

</form>

</div>

</body>

</html>
<?php 
}
else{
    echo "Access Denide. Must log in.";
    
}
?>
