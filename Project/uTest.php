<html>
<head>	
	<title> Bank </title>
	
</head>

<body>

<div class = "container">
	
	<h2> Depoit and Withdraw </h2>
	
	<?php
	
		//$amount = 0;
	
	
		if(isset($_POST['button1'])){
			$amount = $amount + $_POST[depoAmount];
			echo $amount; //remove
			}
		
		if(isset($_POST['button2'])){
			$amount = $amount - $_POST[withdrawAmount];
			echo $amount; //remove
			}
			
			
	
	?>
	
	<form method = "post">
		<input type = "text" name = "depoAmount" value DepoAmount"/>
		<input type = "submit" name = "button1" value = "Deposit"/>
		
		<input type = "text" name = "withdrawAmount" value DepoAmount"/>
		<input type = "submit" name = "button2" value = "Withdraw"/>
		
	</form>
</div>
