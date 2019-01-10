<?php
include('process.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: home.php"); // Redirecting To Profile Page
}
?> 
<!DOCTYPE html>
<html>
<head>
<title>login form</title>
   <meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<body><center><br><br>
<form method="post" action="login.php"> 
    <div class="loginbox">
    <img src="image/2.jpg" class="">
        <h1>Phonebook</h1>
        <form name="login" onsubmit="return validation()">
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password">
			<br><br><input type="submit" class="btn btn-danger" name="submit"><br>
			<br><p>You dont have an account yet? <a href="signupp.php"><br><br>Signup here!</a></p>
          
        </form>
</div>
</body>
</form>
</head>
</html>