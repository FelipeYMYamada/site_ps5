$(document).ready(function () {
	$('#buy-product').click( function() {
		var url_params = new URLSearchParams(window.location.search);
		if(url_params.has('game')) {
			localStorage.setItem("game_id", url_params.get('game'));
			window.location.href="http://localhost/site_ps5/checkout.php";
		}
		else {
			console.log('Erro');	
		}
	});
});