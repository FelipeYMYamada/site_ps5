<?php 
	include 'db_connection.php';
	$conn = OpenCon();
	
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "SELECT id, name, email FROM USER WHERE email = '".$email."' AND pssw = '".$password."';";
	$result = mysqli_query($conn, $query);
	
	if( mysqli_num_rows($result) > 0)
	{
		$row = $result->fetch_assoc();

		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $email;

		echo true;
	}
	else
	{
		unset ($_SESSION['id']);
  		unset ($_SESSION['name']);
  		unset ($_SESSION['email']);
  		echo false;
	}

	CloseCon($conn);
?>