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
	<title>PS5 - Cadastro</title>
</head>
<body class="signup-bd">
	<?php include 'header.php';?>

	<div class="signup bg-blue-dark-fade fullvh">
		<div class="container">
			<h1>Cadastre-se</h1>

			<span id="message"></span>

			<form id="signup-form" name="signup-form">
				<div class="form-group">
					<label for="fullname">Nome completo</label>
					<input id="fullname" name="fullname" type="text" class="form-control" required maxlength="150">
				</div><!-- /.form-group -->

				<div class="form-group">
					<label for="cpf">CPF</label>
					<input id="cpf" name="cpf" type="text" class="form-control" required maxlength="12">
				</div><!-- /.form-group -->

				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" name="email" type="email" class="form-control" required maxlength="120">
				</div><!-- /.form-group -->

				<div class="form-group">
					<label for="phonenumber">Telefone</label>
					<input id="phonenumber" name="phonenumber" type="text" class="form-control" required maxlength="14">
				</div><!-- /.form-group -->

				<section class="password-confirmation">
					<div class="form-group">
						<label for="password_inp">Senha</label>
						<input id="password_inp" name="password" type="password" class="form-control" required maxlength="120">
						<i class="fas fa-eye" id="password" tabindex="0"></i>
					</div><!-- /.form-group -->

					<div class="form-group">
						<label for="password2_inp">Confirmar Senha</label>
						<input id="password2_inp" name="password2" type="password" class="form-control" required maxlength="120">
						<i class="fas fa-eye" id="password2" tabindex="0"></i>
					</div><!-- /.form-group -->
				</section><!-- /.password-confirmation -->

				<input id="submit" type="button" value="Cadastrar" class="btn" />
				<a href="login.php" class="btn">Cancelar</a>
			</form>
		</div><!-- /.container -->
	</div><!-- /.signup -->

	<?php include 'footer.php';?>

	<div class="signup-popover">
		<div class="card">
			<i class="fa-regular fa-face-smile-wink"></i>
			<h1 class="mb-4">CADASTRO REALIZADO COM SUCESSO!</h1>
			<a href="login.php" class="btn">ACESSAR MINHA CONTA</a>
		</div><!-- /.card -->
	</div><!-- /.signup-popover -->


	<script type="text/javascript" src="./js/signup.js"></script>
</body>
</html>