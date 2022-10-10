
$(document).ready(function() {


    $(document).on('submit', '#contact_form', function(e) {
        e.preventDefault();
        var identite = $('#identite').val();
        var identite = $('#email').val();
        var tel = $('#tel').val();
        var tel = $('#sujet').val();
        var msg = $('#msg').val();

        if (identite != '' && email != '' && tel != '' && sujet != '' && msg != '') {
            var data = $(this).serialize();

                    Swal.fire({
                        icon: 'success',
                        text: 'Envoyé avec succès !'
                    });
            $.ajax({
                url: "ajout_contact.php",
                method: "POST",
                data: data,
                dataType: "JSON",
                success: function(response) {

                }
            });
            $('#contact_form')[0].reset();
        } else {
            Swal.fire({
                icon: 'error',
                text: 'Remplissez tout le formulaire !'
            })
        };
        /* $('#contact_form')[0].reset(); */
    });
});
