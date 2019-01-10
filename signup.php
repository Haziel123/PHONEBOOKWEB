<?php
$Username = filter_input(INPUT_POST, 'Username');
$Password = filter_input(INPUT_POST, 'Password');
$Firstname = filter_input(INPUT_POST, 'Firstname');
$Lastname = filter_input(INPUT_POST, 'Lastname');
$Email = filter_input(INPUT_POST, 'Email');
if (!empty($Username)){
	if (!empty($Password)){
		if (!empty($Firstname)){
			if (!empty($Lastname)){
				if (!empty($Email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "haziel";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO signup (Username,Password,Firstname,Lastname,Email)
  values ('$Username','$Password','$Firstname','$Lastname','$Email')";
  if ($conn->query($sql)){
    header("location: login.php");
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Email should not be empty";
  die();
}
}
else{
  echo "Last Name should not be empty";
  die();
}
}
else{
  echo "First Name should not be empty";
  die();
}
 }
 else{
  echo "Password should not be empty";
  die();
 }
 }
else{
  echo "Username should not be empty";
  die();
}
?>