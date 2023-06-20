<?php
	include_once 'db_connection.php';
	$conn = OpenCon();

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	$user_id = $_SESSION['id'];

	if(isset($_GET['link'])) {
		$link = $_GET['link'];

		if($link == 'hist') {
			$query_hist = "SELECT g.name, h.price, h.updated_date FROM hist_checkout h INNER JOIN games g on g.id = h.game_id WHERE user_id =".$user_id;
			$result_hist = mysqli_query( $conn, $query_hist );
			if( mysqli_num_rows($result_hist) > 0 ) {
				echo '<table class="table">'.
					 	'<tr>'.
					 		'<th scope="col">'.
					 			'Jogo'.
					 		'</th>'.
					 		'<th scope="col">'.
					 			'Preço'.
					 		'</th>'.
					 		'<th scope="col">'.
					 			'Data da Compra'.
					 		'</th>'.
					 	'</tr>'.
					 	'<tbody>';
				while($row_hist = $result_hist->fetch_assoc()) {
					echo '<tr><td>'.
							$row_hist['name'].
						 '</td>'.
						 '<td>'.
						 	$row_hist['price'].
						 '</td>'.
						 '<td>'.
						 	$row_hist['updated_date'].
						 '</td></tr>';
				}
				echo '</tbody></table>';
			}
		} else if($link == 'jogos') {
			$query_hist = "SELECT g.name FROM hist_checkout h INNER JOIN games g on g.id = h.game_id WHERE user_id =".$user_id." GROUP BY h.game_id";
			$result_hist = mysqli_query( $conn, $query_hist );
			if( mysqli_num_rows($result_hist) > 0 ) {
				echo '<table class="table">'.
					 	'<tr>'.
					 		'<th scope="col">'.
					 			'Jogos'.
					 		'</th>'.
					 	'</tr>'.
					 	'<tbody>';
				while($row_hist = $result_hist->fetch_assoc()) {
					echo '<tr><td>'.
							$row_hist['name'].
						 '</td></tr>';
				}
				echo '</tbody></table>';
			}
		}
	} else {		
		$total_games = 0;		
		$query = "SELECT COUNT(*) total FROM hist_checkout WHERE user_id = ".$user_id." GROUP BY game_id";
		$result = mysqli_query( $conn, $query );

		if( mysqli_num_rows($result) > 0 ) {
			$row = $result->fetch_assoc();
			$total_games = $row['total'];
		}

		echo "<div class='container'>".
			 	"<h1>Meu Perfil</h1>".
			 	"<div class='row'>".
					"<div class='prf-card'>".
			 			"<h4>".$total_games."</h4>".
			 			"<h4>JOGOS<h4>".
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
		 					"<a href='?link=hist'>".
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