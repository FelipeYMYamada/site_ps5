$(document).ready(function () {
	var game_id = localStorage.getItem("game_id");
	$.ajax({
		type: "POST",
		url: "php/checkout_load_product.php",
		data: {
			game_id: game_id
		},
		cache: false,
		success: function(data) {
			$("#game-info").html(data);
		},
		error: function(xhr, status, error) {
			console.error(xhr);
		}
	});
});

$('#cancel-product').click(function() {
	localStorage.removeItem("game_id");
	window.location.href='http://localhost/site_ps5/profile.php';
});