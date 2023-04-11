<?php 
	include 'db_connection.php';
	$conn = OpenCon();

	$name = $_POST['name'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$password = $_POST['password'];

	$query_check = "SELECT 1 FROM USER WHERE email = '".$email."';";
	$result_check = mysqli_query($conn, $query_check);
	
	if( mysqli_num_rows($result_check) > 0)
	{
		echo false;
	} else {
		$query = "INSERT INTO `user` (name, cpf, email, phone_number, pssw) VALUES('".$name."', '".$cpf."', '".$email."', '".$phone_number."', '".$password."');";
		$result = mysqli_query($conn, $query);
		echo true;
	}

	CloseCon($conn);
?>