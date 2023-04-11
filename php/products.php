<?php 
	include 'db_connection.php';

	function GetAllProducts() {
		$conn = OpenCon();
		$query = "SELECT id, name, img_url, description, price FROM products";
		$result = mysqli_query($conn, $query);

		CloseCon($conn);
		return $result;
	}

	function AllProductsHtml() {
		$result = GetAllProducts();
		$list_size = mysqli_num_rows($result);

		if($list_size > 0) {
			echo '<h1>JOGOS EM DESTAQUE</h1>'.
				 '<div id="carouselHomeGames" class="carousel" data-bs-ride="carousel">'.
					'<div class="carousel-inner w-100">';
			$first = true;
			while ($row = $result->fetch_assoc()) {
				
				if($first) {
					echo '<div class="carousel-item active">';
				} else {
					echo '<div class="carousel-item">';
				}
				echo '<div class="card">'.
						'<img class="d-block w-100" src="'.$row['img_url'].'">'.
						'<div class="card-body">'.
							'<h4 class="card-title">'.$row['name'].'</h4>'.
							'<p class="card-text">'.$row['description'].'</p>'.
						'</div>'.
					 '</div>'.
				'</div>';
				$first = false;
		    }
		    echo '</div>'.
		    	 '<button class="carousel-control-prev" type="button" data-bs-target="#carouselHomeGames" data-bs-slide="prev">'.
					'<span class="carousel-control-prev-icon" aria-hidden="true"></span>'.
					'<span class="visually-hidden">Previous</span>'.
				 '</button>'.
				 '<button class="carousel-control-next" type="button" data-bs-target="#carouselHomeGames" data-bs-slide="next">'.
					'<span class="carousel-control-next-icon" aria-hidden="true"></span>'.
					'<span class="visually-hidden">Next</span>'.
				 '</button>'.
		    	'</div>';
		} else {
			echo '<p>NENHUM JOGO DISPONÍVEL</p>';
		}
	}
	
?>