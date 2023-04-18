<?php 
	include 'db_connection.php';

	function GetAllGames() {
		$conn = OpenCon();
		$query = "SELECT id, name, img_url, description, price FROM games";
		$result = mysqli_query($conn, $query);

		CloseCon($conn);
		return $result;
	}

	function GetRecentRelease5Games() {
		$conn = OpenCon();
		$query = "SELECT id, name, img_url, description, price FROM games ORDER BY release_date DESC LIMIT 5";
		$result = mysqli_query($conn, $query);

		CloseCon($conn);
		return $result;
	}

	function GetAllCategories() {
		$conn = OpenCon();
		$query = "SELECT * FROM category ;";
		$result = mysqli_query($conn, $query);

		CloseCon($conn);
		return $result;
	}

	function GetGameByCategory($category) {
		$conn = OpenCon();
		$query = "SELECT g.id, g.name, g.img_url, g.description, g.price FROM games g ".
					"INNER JOIN games_category gc ON gc.game_id = g.id ".
					"INNER JOIN category c ON c.id = gc.category_id ".
					"WHERE c.name = '".$category."';";
		$result = mysqli_query($conn, $query);

		CloseCon($conn);
		return $result;
	}

	function PrintCategorySection($name) {
		$result = GetGameByCategory($name);
		$list_size = mysqli_num_rows($result);

		if($list_size > 0) {
			echo '<div class="games-category-container">'.
				  	'<h1>'.$name.'</h1>'.
				  	'<div class="row">';

			while($row = $result->fetch_assoc()) {
				echo '<div class="card-col">'.
						'<div class="card">'.
							'<img class="d-block" src="'.$row['img_url'].'">'.
							'<div class="card-body">'.
								'<h3>'.$row['name'].'</h3>'.
								'<p class="card-text">'.$row['description'].'</p>'.
							'</div>'.
						'</div>'.
					 '</div>';
			}
			echo '</div></div>';
		}
	}

	function AllGamesHtml() {
		$result = GetAllGames();
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