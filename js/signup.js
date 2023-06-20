$(document).ready(function () {

    $('.fa-eye').click( function() {
        var id = $(this).attr('id');
        var target = id + '_inp';

        $(this).toggleClass("fa-eye fa-eye-slash");
        var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
        $('#' + target).attr("type", type);
    });


    $('#submit').click( function() {

        var form_validade = $("#signup-form").validate().form();

        if(form_validade) {
            var fullname = $('#fullname').val();
            var cpf = $('#cpf').val();
            var email = $('#email').val();
            var phone_number = $('#phonenumber').val();
            var password = $('#password_inp').val();
            var password2 = $('#password2_inp').val();
        
            if(password != password2) {
                $('#message').css('display', 'block').text('Senha diferente!');
                ScrollToId('#message');
            } else {            
                $.ajax({
                    type: "POST",
                    url: "php/signup.php",
                    data: {
                        name: fullname,
                        cpf: cpf,
                        email: email,
                        phone_number: phone_number,
                        password: password
                    },
                    cache: false,
                    success: function(data) {
                        if(data) {
                            $('#signup-form')[0].reset();
                            $('.signup-popover').css('display', 'block');
                        } else {
                            $('#message').css('display', 'block').text('Email já cadastrado!');
                            ScrollToId('#message');
                        }                
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
            }
        }

    });
});

function ScrollToId($id) {
    console.log($id);
    $('html, body').animate({
        scrollTop: $($id).offset().top
    }, 500);
}
