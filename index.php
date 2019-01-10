<?php
	include('session.php');
	
	if(!isset($_SESSION['login_user'])) {
		header("location: login.php");
	}
?>
<DOCTYPE!>
<html>
<head>
	<title>PhoneBook</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
	<body>
			<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="#">
				<img src="image/5.png"s width="30" height="30" class="d-inline-block align-top" alt="">
				Phonebook
			</a>
		</nav>
		<br><br><br>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <center><img class="d-block w-50" src="image/slide.jpg" alt="First slide"></center>
    </div>
    <div class="carousel-item">
     <center><img class="d-block w-50" src="image/slide2.jpg" alt="Second slide"></center>
    </div>
    <div class="carousel-item">
     <center><img class="d-block w-50" src="image/slide3.png" alt="Third slide"></center>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	</div><br><br>
	<center><a class="btn btn-primary btn-lg" href="login.php" role="button">Get started!</a></center>
</body>
</html>