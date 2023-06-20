<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="style/style.css" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"crossorigin="anonymous"></script>
	<script
	src="https://code.jquery.com/jquery-3.6.4.min.js"
	integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
	crossorigin="anonymous"></script>
	<title>PS5 - Finalizar Compra</title>
</head>
<body>
	<?php 
		include 'php/session_validation.php';
	?>
	<div class="checkout-cnt fullvh">
		<div class="container">
			<h1>Finalizar Compra</h1>
			<div id="game-info"></div>
			<form id="checkout-form">
				<div class="form-group">
					<label for="card_full_name">Nome Completo:</label>
					<input id="card_full_name" type="number" name="card_full_name" class="form-control" maxlength="120" required>
				</div><!-- /.form-group -->

				<div class="form-group">
					<label for="card_number">Número do cartão:</label>
					<input id="card_number" type="number" name="card_number" class="form-control" maxlength="50" required>
				</div><!-- /.form-group -->
				
				<div class="row">
					<div class="col-sx-12 col-md-3">
						<div class="form-group">
							<label for="card_expiration">Validade:</label>
							<input id="card_expiration" type="text" onkeypress="return isNumber(event)" name="card_expiration" class="form-control" placeholder="00/00" maxlength="5" required>
						</div><!-- /.form-group -->
					</div>
					<div class="col-sx-12 col-md-2">
						<div class="form-group">
							<label for="card_cvc">CVC:</label>
							<input id="card_cvc" type="text" onkeypress="return isNumber(event)" name="card_cvc" class="form-control" placeholder="000" maxlength="3" required>
						</div><!-- /.form-group -->
					</div>
				</div><!-- /.row -->

				<div class="form-check">
				  <input id="card_save_info" name="card_save_info" class="form-check-input" type="checkbox">
				  <label class="form-check-label" for="card_save_info">
				    Salvar informações
				  </label>
				</div>

				<button type="button" id="buy-product" class="buy-product">Finalizar Compra</button>
				<button type="button" id="cancel-product" class="cancel-product">Cancelar Compra</button>
			</form>
		</div><!-- /.container -->
	</div><!-- /.checkout-cnt -->

	<?php include 'footer.php';?>

	<script type="text/javascript" src="./js/checkout.js"></script>
</body>
</html>