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
	<title>PS5 - JOGOS</title>
</head>
<body>
	<?php include 'header.php';?>
	<div class="games fullvh bg-blue-dark-fade">
		<div class="games-header">
			<h1>JOGOS</h1>
		</div><!-- /.games-header -->
		
		<div class="container">
			<?php 

		        include './php/games.php';
		        $result = GetAllCategories();
		        $list_size = mysqli_num_rows($result);

		        if($list_size > 0) {
		        	while($row = $result->fetch_assoc()) {
		        		PrintCategorySection($row['name']);
		        	}
		        }

		    ?>
		</div><!-- /.container -->		
	</div><!-- /.games .fullvh .bg-blue-dark-fade -->
	<?php include 'footer.php';?>
</body>
</html>