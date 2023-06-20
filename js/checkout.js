function isNumber(e) {
    e = (e) ? e : window.event;
    var charCode = e.keyCode;
    if(e.target.id == 'card_expiration') {
	    if(e.target.value.length == 2 ){
	    	e.target.value=e.target.value + '/';
	    	return true;  	
	    } else {
	    	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
	        	return false;
	    	}
	    }
	} else {
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
	        return false;
	    }
	}
    return true;
}

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

	$('#buy-product').click(function() {
		var form_validade = $("#checkout-form").validate().form();
		if(form_validade) {
			var cd_name = $('#card_full_name').val();
            var cd_nr = $('#card_number').val();
            var cd_exp = $('#card_expiration').val();
            var cd_cvc = $('#card_cvc').val();

            if($('#card_save_info').is(':checked')) {
            	var cd_save_info = true;
            } else {
            	var cd_save_info = false;
            }

            console.log(game_id);

            $.ajax({
				type: "POST",
				url: "php/checkout.php",
				dataType: 'json',
				data: {
					card_full_name: cd_name,
					card_number: cd_nr,
					card_expiration: cd_exp,
					card_cvc: cd_cvc,
					card_save_info: cd_save_info,
					game_id: game_id
				},
				cache: false,
				success: function(data) {
					if(data) {
						window.location.href='http://localhost/site_ps5/profile.php';
					} else {
						console.log('erro');
					}
				},
				error: function(xhr, status, error) {
					console.error(error);
				}
			});
		}
	});

	$('#cancel-product').click(function() {
		localStorage.removeItem("game_id");
		window.location.href='http://localhost/site_ps5/profile.php';
	});

	

});
