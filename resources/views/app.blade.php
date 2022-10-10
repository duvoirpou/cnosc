<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Meta -->
    <title>@yield('title', 'CNOSC')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/cno-cgo.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.jpg') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">

    <link rel="manifest" href="{{ asset('assets/manifest.json') }}">
    <!-- Custom & Default Styles -->
    {{-- bootstrap3.4 --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <!-- sweetalert2 -->
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/dist/sweetalert2.min.css') }}">

    {{-- vuejs
    <script src="{{ asset('assets/vuejs2/development_version/vue.js') }}"></script> --}}
    <!-- Favicon -->


    <!--[if lt IE 9]>
  <script src="js/vendor/html5shiv.min.js"></script>
  <script src="js/vendor/respond.min.js"></script>
 <![endif]-->

    <style type="text/css">
        #slider {
            overflow: hidden;
        }

        #slider figure {
            position: relative;
            width: 75%;
            margin: 0;
            left: 0;
            animation: 20s slider infinite;
        }

        #slider figure img {
            width: 12%;
            float: left;
        }

        @keyframes slider {
            0% {
                left: 0%;
            }

            20% {
                left: -10%;
            }

            25% {
                left: -20%;
            }

            45% {
                left: -25%;
            }

            50% {
                left: -30%;
            }

            70% {
                left: -50%;
            }

            75% {
                left: -70%;
            }

            95% {
                left: -75%;
            }

            98% {
                left: -80%;
            }

            100% {
                left: -100%;
            }
        }

    </style>

    @livewireStyles

</head>

<body>
    <div id="app">
        @include('partials._menu')

        @yield('content')

        @include("partials._footer")
    </div>

    {{-- <script>
        var app = new Vue({
            el: "#app",
            data: {

            }
        })
    </script> --}}


    @livewireScripts

    <!-- jQuery Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
    <script src="{{ asset('assets/js/animate.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="{{ asset('assets/js/videobg.js') }}"></script>

    <script>
        jQuery(document).ready(function($) {
            var Video_back = new video_background($("#home"), {
                "position": "absolute", //Follow page scroll
                "z-index": "-1",        //Behind everything
                "loop": true,           //Loop when it reaches the end
                "autoplay": true,       //Autoplay at start
                "muted": true,          //Muted at start
                "mp4":"{{ asset('assets/upload/preview.mp4') }}" ,     //Path to video mp4 format
                "ogg":"{{ asset('assets/upload/preview.ogg') }}" ,     //Path to video ogg format
                "webm":"{{ asset('assets/upload/preview.webm') }}" ,     //Path to video webm format
                "video_ratio": 1.7778,              // width/height -> If none provided sizing of the video is set to adjust
                "fallback_image": "{{ asset('assets/images/dummy.png') }}",   //Fallback image path
                "priority": "html5"             //Priority for html5 (if set to flash and tested locally will give a flash security error)
            });
        });
    </script>

    <script src="{{ asset('assets/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script> --}}

    {{-- @if ($message = Session::get('success'))

        <script>
            Swal.fire({
                icon: 'success',
                text: '{!! Session::get('success') !!}'
            });
        </script>

    @endif

    @if ($errors->any())

        <script>
            Swal.fire({
                icon: 'error',
                text: 'Veuillez remplir tout le formulaire svp ! '
            });
        </script>

    @endif --}}
    <script>
        $(document).ready(function() {

            $(document).on('submit', '#newsletter', function(e) {
                e.preventDefault();
                var email = $('#mail').val();

                if (email != '') {
                    var data = $(this).serialize();


                    $.ajax({
                        url: "{{ route('newsletters.store') }}",
                        method: "POST",
                        data: data,
                        dataType: "JSON",
                        success: function(response) {

                        }
                    });
                    Swal.fire({
                        icon: "success",
                        text: "Envoyé avec succès !"
                    });
                    /* Swal.fire({
                        icon: "{!! Session::get('icon') !!}",
                        text: "{{ Session::get('rapport') }}"
                    }); */
                    $('#newsletter')[0].reset();
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: 'Saisissez votre adresse mail !'
                    })
                };
                /* $('#contact_form')[0].reset(); */
            });
            /* end Newsletter */


            /* Contact */

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
                        url: "{{ route('contacts.store') }}",
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
            /* end Contact */



            /* end */
        });
    </script>
</body>

</html>
