<?php 
	include 'db_connection.php';
	$conn = OpenCon();
	try {
		$game_id = $_POST['game_id'];
		$query = 'SELECT name, img_url, price, description FROM games WHERE id = '.$game_id.';';
		$result = mysqli_query($conn, $query);

		if( mysqli_num_rows($result) > 0)
		{
			$row = $result->fetch_assoc();
			echo '<h3>Você está comprando:</h3>'.
				 '<div class="card-game">'.
				  	'<img src="'.$row['img_url'].'">'.
				  	'<div class="info">'.
				  		'<span class="title">'.$row['name'].'</span>'.
				  		'<span class="label">Descrição:</span>'.
				  		'<span class="description">'.$row['description'].'</span>'.
				  		'<span class="price">R$ '.$row['price'].'</span>'.
				  	'</div>'.
				 '</div>';

		} else {
			echo 'ERROR';
		}
	} catch(Exception $e) {
		echo 'erro';
	}
?>