<?php 
	if(isset($_GET['link'])) {
		echo($_GET['link']);
	} else {
		echo "<div class='container'>".
			 	"<h1>Meu Perfil</h1>".
			 	"<div class='row'>".
					"<div class='prf-card'>".
			 			"<h4>0</h4>".
			 			"<h4>JOGOS<h4>".
					"</div>".
					"<div class='prf-card'>".
						"<h4>0</h4>".
						"<h4>ACESSÓRIOS<h4>".
			 		"</div>".
		 		"</div>".
		 		"<div class='prf-links'>".
		 			"<div class='row'>".
		 				"<div class='col-sx-12 col-md-4'>".
		 					"<a href='?link=jogos'>".
				 				"<div class='prf-link-card'>".
				 					"<i class='fa-solid fa-gamepad'></i>".
				 					"<span>JOGOS</span>".
				 				"</div>".
			 				"</a>".
		 				"</div>".
		 				"<div class='col-sx-12 col-md-4'>".
		 					"<a href='?link=jogos'>".
				 				"<div class='prf-link-card'>".
				 					"<i class='fa-solid fa-cart-shopping'></i>".
				 					"<span>COMPRAS</span>".
				 				"</div>".
			 				"</a>".
		 				"</div>".
		 				"<div class='col-sx-12 col-md-4'>".
		 					"<a href='?link=jogos'>".
				 				"<div class='prf-link-card'>".
				 					"<i class='fa-solid fa-clock-rotate-left'></i>".
				 					"<span>HISTÓRICO</span>".
				 				"</div>".
			 				"</a>".
		 				"</div>".
		 			"</div>".
		 		"</div>".
			 "</div>";
	}
?>