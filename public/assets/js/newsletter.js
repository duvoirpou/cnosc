$(document).ready(function() {


    $(document).on('submit', '#newsletter', function(e) {
        e.preventDefault();
        var email = $('#mail').val();

        if (email != '') {
            var data = $(this).serialize();

                    Swal.fire({
                        icon: 'success',
                        text: 'Envoyé avec succès !'
                    });
            $.ajax({
                url: "http://127.0.0.1:8000/App/Http/Controllers/NewsletterController/newsletters.store",
                method: "POST",
                data: data,
                dataType: "JSON",
                success: function(response) {

                }
            });
            $('#newsletter')[0].reset();
        } else {
            Swal.fire({
                icon: 'error',
                text: 'Saisissez votre adresse mail !'
            })
        };
        /* $('#contact_form')[0].reset(); */
    });
    });
