<?php


session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['Username']) || empty($_POST['Password'])) {
$error = "Username or Password is invalid!";
}
else
{
// Define $username and $password
$Username = $_POST['Username'];
$Password = $_POST['Password'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "haziel");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT Username, Password from signup where Username=? AND Password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $Username, $Password);
$stmt->execute();
$stmt->bind_result($Username, $Password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $Username; // Initializing Session
          header("location: home.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid!";
     }
mysqli_close($conn); // Closing Connection
}
}
?>