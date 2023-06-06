<?php  
	include 'db_connection.php';

	$conn = OpenCon();
	$id = $_GET['game'];

	$query = 'SELECT name, img_url, price, description FROM games WHERE id = '.$id.';';
	$result = mysqli_query($conn, $query);

	$list_size = mysqli_num_rows($result);

	if($list_size > 0) {
		while ($row = $result->fetch_assoc()) {
			echo '<h1>'.$row['name'].'</h1>'.
			     '<div class="game-container">'.
			     	'<div class="game-row">'.
			     		'<img src="'.$row['img_url'].'">'.
			     		'<div class="game-details">'.
			     			'<p><b>Descrição:</b></p>'.
			     			'<p>'.$row['description'].'</p>'.
			     			'<span><b>R$ </b>'.$row['price'].'</span>'.
			     			'<button id="buy-product"><i class="fa-solid fa-cart-shopping"></i> COMPRAR</button>'.
			     		'</div>'.
			     	'</div>'.
			     '</div>';
		}
	} else {
		echo '<div class="game-not-found">'.
				'<img src="./img/404.svg" alt="404"/>'.
				'<h1>Ops Erro</h1>'.
				'<p>Jogo não encontrado!</p>'.
			 '</div>';
	}

	CloseCon($conn);

?>