<?php 
	include 'db_connection.php';
	$conn = OpenCon();

	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$query = "SELECT id, name, email  FROM USER WHERE email = '".$email."' AND pssw = '".$senha."'";
	$result = mysqli_query($conn, $query);
	
	if( mysqli_num_rows($result) > 0)
	{
		$row = $result->fetch_assoc();

		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $email;
		header('Location: ../profile.php');
	}
	else
	{
		unset ($_SESSION['login']);
  		unset ($_SESSION['senha']);
  		echo 'usuario nao encontrado';
	}

	CloseCon($conn);
?>