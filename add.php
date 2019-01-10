<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Mobile_Number = $_POST['Mobile_Number'];
	
	if(!empty($Name) && !empty($Email) && !empty($Mobile_Number)) {
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "haziel";
		
		// create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}else {
			$SELECT = "SELECT Mobile_number From list Where Mobile_number = ? Limit 1";
			$INSERT = "INSERT Into list (Name, Email, Mobile_Number) values(?, ?, ?)";
			
			//prepare statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $Mobile_Number);
			$stmt->execute();
			$stmt->bind_result($Mobile_Number);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if ($rnum==0) {
				$stmt->close();
				
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sss", $Name, $Email, $Mobile_Number);
				$stmt->execute();
				$_SESSION['message'] = "You are now logged in";
				$_SESSION['Name'] = $Name;
				header("location: home.php");
			}else {
				echo "Someone already this number";
			}
			$stmt->close();
			$conn->close();
		}
	}else {
		echo "All field are required";
		die();
	}

?>