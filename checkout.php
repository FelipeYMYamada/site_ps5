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
			<form>
				<label for="card-full-name">Nome Completo:</label>
				<input id="card-full-name" type="text" name="card-full-name" class="form-control">

				<label for="card-number">Número do cartão:</label>
				<input id="card-number" type="number" name="card-number" class="form-control">
				
				<div class="row">
					<div class="col-sx-12 col-md-3">
						<label for="card-expiration">Validade:</label>
						<input id="card-expiration" type="text" name="card-expiration" class="form-control">
					</div>
					<div class="col-sx-12 col-md-2">
						<label for="card-cvc">CVC:</label>
						<input id="card-cvc" type="text" name="card-cvc" class="form-control">
					</div>
				</div><!-- /.row -->

				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
				  <label class="form-check-label" for="flexCheckDefault">
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