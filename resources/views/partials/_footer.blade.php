

    <section>
        <div id="slider" style="background-color: white; width: 100%">
            <figure style="width: 100%">
                <img src="{{ asset('assets/images/coca-cola.jpg') }}">
                <img src="{{ asset('assets/images/down.jpg') }}">
                <img src="{{ asset('assets/images/intel.jpg') }}">
                <img src="{{ asset('assets/images/omega.jpg') }}">
                <img src="{{ asset('assets/images/toyota.jpg') }}">
                <img src="{{ asset('assets/images/samsung.jpg') }}">
                <img src="{{ asset('assets/images/visa.jpg') }}">
                <img src="{{ asset('assets/images/brigstone.jpg') }}">
            </figure>
        </div>
    </section>

<footer class="section footer noover">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="widget clearfix">
                    <h3 class="widget-title">Abonnez-vous à notre Newsletter</h3>
                    <div class="newsletter-widget">
                        <p>Vous pouvez nous écrire partout et à n'importe quel moment.
                        <form action="{{ route('newsletters.store') }}" method="POST" class="form-inline" role="search" id="newsletter">
                            @csrf
                            <div class="form-1">
                                <input type="text" class="form-control" name="mail" id="mail" placeholder="Entrer  votre email ici..">
                                <input type="hidden" name="action" id="action" />
                                <?php
                                $tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
                                $date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
                                $mois = $tab_mois[date("n")];
                                $d = date('j') . ' ' . $mois . ' ' . date('Y') . ' ' . date('H') . 'h ' . date('i') . 'm ' . date('s') . 's ';
                                $date_en = date('Y') . '-' .  date('m') . '-' . date('j');
                                $annee = date('Y');

                                echo '<input type="text" name="date_newsletter" value="' . $date_en . '" hidden/>';
                                echo '<input type="text" name="mois_newsletter" value="' . $mois . '" hidden/>';
                                echo '<input type="text" name="annee_newsletter" value="' . $annee . '" hidden/>';
                                ?>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                            </div>
                        </form>
                        <img src="images/payments.png" alt="" class="img-responsive">
                    </div><!-- end newsletter -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-3">
                <div class="widget clearfix">
                    <h3 class="widget-title">Devenir Sponsor</h3>
                    <p>vous souhaitez soutenir la promotion des valeurs olympiques, cliquez-ici.</p>
                    <a href="#" class="readmore">Devenir Sponsor</a>
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-3">
                <div class="widget clearfix">
                    <h3 class="widget-title">Sports populaires</h3>
                    <div class="tags-widget">
                        <ul class="list-inline">
                            <li style="color:green"><a href="#">Football</a></li>
                            <li><a href="#">Basketball</a></li>
                            <li><a href="#">Handball</a></li>
                            <li><a href="#">Judo</a></li>
                            <li><a href="#">Athlétisme</a></li>
                            <li><a href="#">Cyclisme</a></li>
                            <li><a href="#">Karaté</a></li>
                            <li><a href="#">Taekwendo</a></li>
                            <li><a href="#">Boxe</a></li>
                            <li><a href="#">Boxe des Pharaons</a></li>
                        </ul>
                    </div><!-- end list-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-2 col-md-2">
                <div class="widget clearfix">
                    <h3 class="widget-title">Liens</h3>
                    <div class="list-widget">
                        <ul>
                            <li><a href="#">Cnosc</a></li>
                            <li><a href="#">Actualités</a></li>
                            <li><a href="#">Gouvernance</a></li>
                            <li><a href="#">Jeux</a></li>
                            <li><a href="#">Médiathèque</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!-- end list-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights" style="height:100px;">
    <div class="container">
        <div class="clearfix">
            <marquee>copyright2021©Powerdesigncom</marquee>
            </ul>
        </div>
    </div>
</div>
