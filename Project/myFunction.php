<style> td{color:red;}</style>
<style> tr:nth-child(even) {background-color: lightgray;} </style>

<?php

function GET($fieldname, &$flag){
	global $db ;
	$v = $_GET [$fieldname];
	$v = trim ( $v );
	if ($v == "") 
	  { $flag = true ; echo "<br><br>$fieldname is empty." ; return  ;} ;
	#$v = mysqli_real_escape_string ($db, $v );
	#echo "<br><br>$fieldname is $v."  ;
	return $v; 
}

function deposit($ucid, $amount, $mail, $db){
	$s = "Update AA SET recent=NOW(), current=current+'$amount' where UCID = '$ucid'";
	print "<br>SQL Update statement is: $s<br>"; 
	($t = mysqli_query ( $db,  $s   ) )  or die( mysqli_error($db) );
	echo "<br>SQL update AA statement was transmitted for execution<br><br>";
	
	$s = "Insert into TT values('$ucid', 'D', '$amount', NOW(), '$mail')";
	print "<br>SQL insert statement is: $s<br>"; 
	($t = mysqli_query ( $db,  $s   ) )  or die( mysqli_error($db) );
	echo "<br>SQL statement was transmitted for execution<br><br>";
}

function authenticate($UCID, $pass, $db){
	$s = "select * from AA where UCID = '$UCID'";
	($t = mysqli_query($db, $s)) or die (mysqli_error($db));
	$r = mysqli_fetch_array ($t, MYSQLI_ASSOC);
	if (password_verify($pass, $r["pass"])) 
	{
		if($UCID = $r["UCID"])
		{
			return True;
		}
	}
	else
	{
		return False;
	}
}

function display($UCID, $number, $output, $db){
	$s = "select * from TT where UCID = '$UCID'";
	($t = mysqli_query ($db, $s)) or die(mysqli_error($db));
	

	echo"<table border = 2 width = 30%>";
	echo"<tr>";
	echo"<th>type</th>";
	echo"<th>amount</th>";
	echo"<th>date</th>";
	echo"<th>mail</th>";
	echo"</tr>";
		
	while ($r = mysqli_fetch_array ($t, MYSQLI_ASSOC))
	{
		while($number>0){
		$type = $r["type"];
		$amount = $r["amount"];
		$date = $r["date"];
		$mail = $r["mail"];

		echo"<tr>";
		echo"<td>$type</td>";
		echo"<td>$amount</td>";
		echo"<td>$date</td>";
		echo"<td>$mail</td>";
		echo"</tr>";
		$output = $output + "Deposit type: '$type', Amount: '$amount', 
			Date of Transaction: '$date'\n";
		$number = $number -1;
		};
	};
	echo"</table>";
	return $output; 
}

function insert($UCID, $pass, $name, $mail, $initial, $db){
	$s = "insert into AA values('$ucid', '$password', '$name', '$mail', '$initial', '$current', NOW(), '$plaintext')";
}
function enough($UCID, $amount, $db){
	$s = "select * from AA where UCID='$UCID' and current >= '$amount'";
	($t = mysqli_query($db, $s)) or die(mysqli_error($db));
	$num = mysqli_num_rows($t);
	if ($num == 0) {
		echo "Not enough for withdrawl";
		return false;
	}
	else{ 
		return true;
	};
}

function withdraw($UCID, $amount, $mail, $db){
	$s = "Update AA SET recent=NOW(), current=current-'$amount' where UCID = '$UCID'";
	print "<br>SQL Update statement is: $s<br>"; 
	($t = mysqli_query ( $db,  $s   ) )  or die( mysqli_error($db) );
	echo "<br>SQL update AA statement was transmitted for execution<br><br>";
	
	$s = "Insert into TT values('$UCID', 'W', '$amount', NOW(), '$mail')";
	print "<br>SQL insert statement is: $s<br>"; 
	($t = mysqli_query ( $db,  $s   ) )  or die( mysqli_error($db) );
	echo "<br>SQL statement was transmitted for execution<br><br>";
}
	
?>
