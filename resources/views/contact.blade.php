@extends('app')

@section('title', 'CNOSC | Contact')

@section('content')

<section class="section db p120" style="background-image:url('{{ asset('assets/upload/foot.jpg')}}'); background-size: cover; background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message page-title text-center">
                    <h3 style="color: rgb(1, 19, 1);">CONTACT</h3>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section gb nopadtop">
    <div class="container">
        <div class="boxed boxedp4">

            <div id="map" class="wow slideInUp">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.786532072824!2d15.291013813374645!3d-4.261712496902055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a33b8e7b54e8d%3A0x124aed1c9170a818!2sSIAT%20SA!5e0!3m2!1sfr!2scd!4v1623708152065!5m2!1sfr!2scd"
                    width="1050" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    style="text-align: center;"></iframe>
            </div>

            <div class="row contactv2 text-center">
                <div class="col-md-4">
                    <div class="small-box">
                        <i class="flaticon-email wow fadeIn"></i>
                        <h4>Nous-contacter</h4>
                        <small>Phone: +242066687032</small>
                        <p><a href="mail:to">jpngaloua@gmail.com</a></p>
                    </div><!-- end small-box -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="small-box">
                        <i class="flaticon-map-with-position-marker wow fadeIn"></i>
                        <h4>Visiter Notre Siège</h4>
                        <small>Rue Bouët-Willaumez </small>
                        <small>Côté/SIAT-Brazzaville</small>
                        <p><a href="#">Géolocaliser sur la carte</a></p>
                    </div><!-- end small-box -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="small-box">
                        <i class="flaticon-share wow fadeIn"></i>
                        <h4>Nous suivre sur les réseaux sociaux</h4>
                        <small>Twitter: @Cnosc</small>
                        <small>Facebook: facebook.com/cnosc</small>
                        <p><a href="#">Email Newsletter</a></p>
                    </div><!-- end small-box -->
                </div><!-- end col -->
            </div><!-- end contactv2 -->

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title text-center">
                        <h3>Formulaire de Contact</h3>
                        <p>vous avez une préoccupation, une suggestion, vous pouvez nous écrire</p>
                    </div><!-- end title -->

                    <form action="{{ route("contacts.store") }}" method="POST" class="big-contact-form" role="search" id="contact_form">
                        @csrf
                        <input type="text" class="form-control" id="identite" name="identite" placeholder="Entrez votre nom...">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email..">
                        <input type="text" class="form-control" id="tel" name="tel" placeholder="votre n° de téléphone..">
                        <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Sujet...">
                        <textarea class="form-control" id="msg" name="msg" placeholder="ecrivez votre message ici.."></textarea>
                        <input type="hidden" name="action" id="action" />
                        <?php
                        $tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
                        $date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
                        $mois = $tab_mois[date("n")];
                        $d = date('j') . ' ' . $mois . ' ' . date('Y') . ' ' . date('H') . 'h ' . date('i') . 'm ' . date('s') . 's ';
                        $date_en = date('Y') . '-' .  date('m') . '-' . date('j');
                        $annee = date('Y');

                        echo '<input type="text" name="date_message" value="' . $date_en . '" hidden/>';
                        echo '<input type="text" name="mois_message" value="' . $mois . '" hidden/>';
                        echo '<input type="text" name="annee_message" value="' . $annee . '" hidden/>';
                        ?>
                        <button type="submit" class="btn btn-primary">Envoyez</button>
                    </form>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>

@stop
