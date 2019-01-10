<!DOCTYPE html>
<html>
<head>
		<title>Phonebook</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-slim.min.js"></script>
		<script src="js/popper.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	<style>
body {
background-image: url("image/bg.jpg");}
	</style>
</head>


<body>
<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-4">
		<form method="post" action="signup.php"> 
			<div class="container"><br><br>
			<center><h2><strong><font color="white" face="arial">REGISTER</font></strong></h2></center><br>
			  <font color="white" face="arial"><label for="validationDefaultUsername">Username:</font></label>
			  <input type="text" class="form-control" id="Username" placeholder="Username" name="Username" required>
			  <font color="white" face="arial"><label for="validationDefaultPassword">Password:</font></label>
			  <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" required>
			  <font color="white" face="arial"><label for="validationDefaultUsername">First Name:</font></label> 
			  <input type="text" class="form-control" id="Firstname" placeholder="Firstname" name="Firstname" required>
			  <font color="white" face="arial"><label for="validationDefaultUsername">Last Name:</font></label> 
			  <input type="text" class="form-control" id="Lastname" placeholder="Lastname" name="Lastname" required>
			  <font color="white" face="arial"><label for="validationDefaultEmail">Email:</font></label>
			  <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>
			  <br>
			  <center><input class="btn btn-primary" type="submit" value="Register"></button></center>
			  </div>
			  <br><center><h6><font color="white" face="arial">Already have an account? <a href="login.php">Login</a></font></h6></center>
		</form>
	</div>
</div>
</body>
</html>

