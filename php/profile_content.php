<?php 
	if(isset($_GET['link'])) {
		echo($_GET['link']);
	} else {
		echo "<h1>Meu Perfil</h1>".
			 "<h2>Olá ".$_SESSION['name']."</h2>";
	}
?>