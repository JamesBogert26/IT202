<html>
<head>	
	<title> user login and registration </title>
	
	
	
</head>
<body>


<div class = "container">
	
	<h2> Login </h2>
	<form action = "uValidation.php" method = "post">
		<div class ="form-group">
			<label> Username </label>
			<input type = "text" name="user" class = "form-control" required>
		</div>
		<div class = "form-group">
			<label>Password</label>
			<input type ="password" name="password" class="form-control" required>
		</div>
			<button type ="submit" class="btn btn-primary"> Login </button>
	</form>
</div>
	
	<h2> Register </h2>
	<form action = "uRegistration.php" method = "post">
		<div class ="form-group">
			<label>Username</label>
			<input type ="text" name="user" class="form-control" required>
		</div>
		<div class = "form-group">
			<label> Password </label>
			<input type = "password" name="password" class= "form-control" required>
		</div>
			<button type ="submit" class= "btn btn-primary"> Register </button>
	</form>
		
	

</body>
</html>
