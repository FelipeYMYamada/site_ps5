<?php
	include 'db_connection.php';
	$conn = OpenCon();

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	$card_full_name = $_POST['card_full_name'];
	$card_nr = $_POST['card_number'];
	$card_exp = $_POST['card_expiration'];
	$card_cvc = $_POST['card_cvc'];
	$card_save_info = $_POST['card_save_info'];
	$user_id = $_SESSION['id'];
	$game_id = $_POST['game_id'];

	$query_card = "INSERT INTO user_card (cd_name, cd_number, cd_exp, cd_cvc, updated_date, save_info, user_id) VALUES ".
				  "('".$card_full_name."', ".$card_nr.", '".$card_exp."', '".$card_cvc."', now(), true, ".$user_id.");";

	$result = mysqli_query( $conn, $query_card );
	if( $result ) 
	{
		$last_id = mysqli_insert_id($conn);
		$query_game_price = "SELECT price FROM games WHERE id = ".$game_id;
		$result_price = mysqli_query($conn, $query_game_price);
		if( mysqli_num_rows($result_price) > 0 ) {
			$row_price = $result_price->fetch_assoc();
			$price = $row_price['price'];

			$query_checkout = "INSERT INTO hist_checkout (game_id, price, user_card_id, updated_date, user_id) VALUES ($game_id, $price, $last_id, now(), $user_id)";
			$result_checkout = mysqli_query($conn, $query_checkout);
			if( $result_checkout ) {
				echo json_encode(true);
			} else {
				echo json_encode(false);
			}
		}

	} else {
		echo json_encode(false);
	}
	
	CloseCon($conn);
	
?>