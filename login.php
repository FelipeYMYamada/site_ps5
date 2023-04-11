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
	<title>PS5 - Login</title>
</head>
<body>
	<?php include 'header.php';?>

	<div class="login fullvh">
		<div class="login-card">
			<form method="POST" action="./php/authentication.php" id="login-form" name="login-form">
				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" name="email" type="email" class="form-control" required>
				</div><!-- /.form-group -->

				<div class="form-group mb-4">
					<label for="password">Senha</label>
					<input id="password" name="password" type="password" class="form-control" required>
				</div><!-- /.form-group -->

				<input type="submit" value="Login" class="btn mb-2" />
			</form>
			<a href="signup.php" class="btn">Cadastrar</a>
		</div><!-- /. login-card -->
	</div><!-- /.login -->

	<?php include 'footer.php';?>
</body>
</html>