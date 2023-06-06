$(document).ready(function () {
	$('#login').click( function() {
		var form_validade = $("#login-form").validate().form();

		if(form_validade) {
			var game_id = localStorage.getItem("game_id");
			var email = $('#email').val();
	        var password = $('#password').val();

			$.ajax({
				type: "POST",
				url: "php/authentication.php",
				data: {
					email: email,
					password: password
				},
				cache: false,
				success: function(data) {
					if( data ) {
						if( game_id == null ) {
							window.location.href='http://localhost/site_ps5/profile.php';
						} else {
							window.location.href='http://localhost/site_ps5/checkout.php';
						}
					} else {
						$('#message').css('display', 'block').text('E-mail ou senha estão incorretas');
					}
				},
				error: function(xhr, status, error) {
					console.error(xhr);
				}
			});
		}
	});
});