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
	<title>PS5 - Minha conta</title>
</head>
<body>
	<?php include './php/session_validation.php'; ?>
	<?php include 'header.php'; ?>

	<div class="profile-container light-bg fullvh">
		<div id="side-navbar" class="side-navbar side-menu-closed">
			<nav role="navigation">
				<div class="icon-open-menu">
					<i id="open-menu" class="fa-solid fa-bars"></i>
				</div>

				<div class="header">
					<h3>Perfil</h3>
					<i id="close-menu" class="fa-solid fa-chevron-left"></i>
				</div><!-- /.header -->

				<div class="profile-detail">
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-user fa-stack-1x fa-inverse"></i>
					</span>
					<div id="user_s_name">
						<span>
							<?php echo $_SESSION['name'] ?>
						</span>
						<span>
							<?php echo $_SESSION['email'] ?>
						</span>
					</div>

					<div class="profile-action">
						<a href="">
							<i class="fa-solid fa-pencil"></i>
							Perfil
						</a>
						<a href="./php/logout.php">
							<i class="fa-solid fa-right-from-bracket"></i>
							Sair
						</a>
					</div><!-- /.profile-action -->

				</div><!-- /.profile-detail -->
				
				<div class="menu">
					<ul>
						<li>
							<a href="?link=jogos">
								<i class="fa-solid fa-gamepad"></i>
								<span>Jogos</span>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa-solid fa-cart-shopping"></i>
								<span>Compras</span>
							</a>
						</li>
						<li>
							<a href="">
								<i class="fa-solid fa-clock-rotate-left"></i>
								<span>Historico</span>
							</a>
						</li>
					</ul>
				</div><!-- /.menu -->
			</nav>
		</div><!-- /.side-navbar -->

		<div class="profile-content">
			<?php include './php/profile_content.php'; ?>
		</div><!-- /.profile-content -->
	</div><!-- /.profile-container -->

	<?php include 'footer.php';?>
	<script type="text/javascript" src="./js/profile_menu.js"></script>
</body>
</html>