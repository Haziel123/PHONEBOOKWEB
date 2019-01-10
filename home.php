<?php
	include('session.php');
	
	if(!isset($_SESSION['login_user'])) {
		header("location: Login.php");
	}
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `list` WHERE CONCAT(`id`, `Name`, `Email`, `Mobile_Number`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `list`";
		$search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "haziel");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Abogaa</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<body>

	<div class="box">
	<div class="bg-modal">
	</div>
	<div class="modal-form">
		<img src="image/2.jpg">
		<form>
			<input type="text" class="ha" placeholder="First Name" required>
			<input type="text" class="ha" placeholder="Last Name" required>
			<input type="number" class="ha" placeholder="Mobile Number" required>
			<button>Save</button>
			<button>Cancel</button>
		</form>
	</div><br>
	
  <h1></h1>
	<hr>
	<a href="logout.php">
	<input type="submit" class="ah" onclick="" value="Logout">
	</a>
	<a href="home.php">
	<input type="submit" class="ah" onclick="" value="Delete">
	</a>
	<a href="edit.php">
	<input type="submit" class="ah" onclick="" value="Edit">
	</a>
	<a href="plus.php">
	<input type="submit" class="ah" onclick="" value="New Contact">
	</a>
	<br>
	<br>
	<br>
<table>
  <tr>
	<th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
	<th>Action</th>
  </tr>
  <?php while($row = mysqli_fetch_array($search_result)):?>
  <tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Email'];?></td>
	<td><?php echo $row['Mobile_Number'];?></td>
	<td><a href="edit.html"><img src="image/2.png"></a> <img src="image/1.png"></td>  
  </tr>
  <?php endwhile;?>
</table>

</div>

</head>
</html>
</body>
</html>
</body>