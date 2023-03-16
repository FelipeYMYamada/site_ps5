<?php 
	include 'db_connection.php';
	$conn = OpenCon();

	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$query = "SELECT 1 FROM USER WHERE email = '".$email."' AND pssw = '".$senha."'";
	$result = mysqli_query($conn, $query);
	
	if( mysqli_num_rows($result) > 0)
	{
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
	}
	else
	{
		unset ($_SESSION['login']);
  		unset ($_SESSION['senha']);
  		echo 'usuario nao encontrado';
	}

	CloseCon($conn);
?>