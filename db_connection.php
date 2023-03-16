<?php 

	function OpenCon()
	{
		$db_host = "localhost";
		$db_user = "root";
	 	$db_password = "";
	 	$db = "ps5_site";

	 	$conn = new mysqli($db_host, $db_user, $db_password, $db) or die("Connection failed: %s\n". $conn -> error);
	 	return $conn;
	}

	function CloseCon($conn)
	{
		$conn -> close();
	}

?>