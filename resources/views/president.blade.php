@extends("app")

@section('content')

<div id="wrapper">
    <!-- BEGIN # MODAL LOGIN -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                    <form id="login-form">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="flaticon-add" aria-hidden="true"></span>
                        </button>
                        <div class="modal-body">
                            <input class="form-control" type="text" placeholder="What you are looking for?" required>
                        </div>
                    </form><!-- End # Login Form -->
                </div><!-- End # DIV Form -->
            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->

    <section class="section cb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center tagline-message page-title">
                        <h3>Présentation</h3>

                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-md-6 shop-media">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="image-wrap entry">
                                    <img src="upload/siège.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="upload/siège.jpg" title=""><i
                                                class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                            </div>
                        </div><!-- end row -->

                        <hr class="invis1">

                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="image-wrap entry">
                                    <img src="{{ asset('assets/upload/ouverture_sassou 3.jpg') }}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="{{ asset('assets/upload/ouverture_sassou 3.jpg') }}" title=""><i
                                                class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="image-wrap entry" style="border: radius 25px;">
                                    <img src="{{ asset('assets/upload/kara.jpg') }}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="{{ asset('assets/upload/kara.jpg') }}" title=""><i
                                                class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="image-wrap entry" style="border: radius 25px;">
                                    <img src="{{ asset('assets/upload/escrime.jpg') }}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="{{ asset('assets/upload/escrime.jpg') }}" title=""><i
                                                class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                            </div>
                        </div><!-- end row -->
                        <br>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="image-wrap entry">
                                    <img src="{{ asset('assets/upload/judo.jpg') }}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="{{ asset('assets/upload/judo.jpg') }}" title=""><i
                                                class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="image-wrap entry">
                                    <img src="{{ asset('assets/upload/basket.jpg') }}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="{{ asset('assets/upload/basket.jpg') }}" title=""><i
                                                class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="image-wrap entry" style="border: radius 25px;">
                                    <img src="{{ asset('assets/upload/siège1.jpg') }}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="{{ asset('assets/upload/siège1.jpg') }}" title=""><i
                                                class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                            </div>
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="shop-desc">
                            <h3>siège</h3>
                            <small>Mot du président</small>
                            <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nulla convallis consequat condimentum. In a tincidunt purus. Curabitur facilisis luctus
                                aliquet. Aenean a cursus erat, sit amet interdum arcu. Mauris aliquam magna turpis,
                                lobortis pellentesque velit elementum et. Nulla scelerisque a lorem nec posuere. Nunc
                                convallis posuere tincidunt. Pellentesque a aliquet odio. Integer euismod, enim id
                                lacinia auctor, tortor turpis malesuada enim, in semper turpis magna quis enim.</p>
                            <div class="shop-meta">
                                <a href="page-Gouvernance/Mots du président.pdf"
                                    class="btn btn-primary">Télécharger</a>

                            </div><!-- end shop meta -->
                        </div><!-- end desc -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-12">
                        <div class="shop-extra">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Historique</a></li>
                                <li><a data-toggle="tab" href="#home1">Rôles et Missions</a></li>
                                <li><a data-toggle="tab" href="#home2">Axes Stratégiques</a></li>
                                <li><a data-toggle="tab" href="#menu1">Comité Exécutif</a></li>
                                <li><a data-toggle="tab" href="#menu2">Commissions</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <p>Suspendisse tristique porttitor magna, ac pulvinar libero lobortis at. Quisque
                                        sit amet facilisis eros. Vestibulum id ligula elementum, rutrum nunc sit amet,
                                        vulputate diam. Phasellus finibus mauris leo, quis commodo elit pellentesque
                                        quis. Phasellus a justo in enim maximus dictum nec interdum erat. Integer varius
                                        justo id nunc vulputate scelerisque. Curabitur maximus tristique magna. Nulla ut
                                        laoreet turpis, vel porta mauris. Suspendisse et varius orci, eget ullamcorper
                                        lacus. Duis accumsan odio at elit facilisis semper.</p>

                                    <p>Phasellus finibus mauris leo, quis commodo elit pellentesque quis. Phasellus a
                                        justo in enim maximus dictum nec interdum erat. Integer varius justo id nunc
                                        vulputate scelerisque. Curabitur maximus tristique magna. Nulla ut laoreet
                                        turpis, vel porta mauris. Suspendisse et varius orci, eget ullamcorper lacus.
                                        Duis accumsan odio at elit facilisis semper.</p>
                                </div>
                                <div id="home1" class="tab-pane fade">
                                    <p>Suspendisse tristique porttitor magna, ac pulvinar libero lobortis at. Quisque
                                        sit amet facilisis eros. Vestibulum id ligula elementum, rutrum nunc sit amet,
                                        vulputate diam. Phasellus finibus mauris leo, quis commodo elit pellentesque
                                        quis. Phasellus a justo in enim maximus dictum nec interdum erat. Integer varius
                                        justo id nunc vulputate scelerisque. Curabitur maximus tristique magna. Nulla ut
                                        laoreet turpis, vel porta mauris. Suspendisse et varius orci, eget ullamcorper
                                        lacus. Duis accumsan odio at elit facilisis semper.</p>

                                    <p>Phasellus finibus mauris leo, quis commodo elit pellentesque quis. Phasellus a
                                        justo in enim maximus dictum nec interdum erat. Integer varius justo id nunc
                                        vulputate scelerisque. Curabitur maximus tristique magna. Nulla ut laoreet
                                        turpis, vel porta mauris. Suspendisse et varius orci, eget ullamcorper lacus.
                                        Duis accumsan odio at elit facilisis semper.</p>
                                </div>
                                <div id="home2" class="tab-pane fade">
                                    <p>Suspendisse tristique porttitor magna, ac pulvinar libero lobortis at. Quisque
                                        sit amet facilisis eros. Vestibulum id ligula elementum, rutrum nunc sit amet,
                                        vulputate diam. Phasellus finibus mauris leo, quis commodo elit pellentesque
                                        quis. Phasellus a justo in enim maximus dictum nec interdum erat. Integer varius
                                        justo id nunc vulputate scelerisque. Curabitur maximus tristique magna. Nulla ut
                                        laoreet turpis, vel porta mauris. Suspendisse et varius orci, eget ullamcorper
                                        lacus. Duis accumsan odio at elit facilisis semper.</p>

                                    <p>Phasellus finibus mauris leo, quis commodo elit pellentesque quis. Phasellus a
                                        justo in enim maximus dictum nec interdum erat. Integer varius justo id nunc
                                        vulputate scelerisque. Curabitur maximus tristique magna. Nulla ut laoreet
                                        turpis, vel porta mauris. Suspendisse et varius orci, eget ullamcorper lacus.
                                        Duis accumsan odio at elit facilisis semper.</p>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <h1 style="text-align:center"> BUREAU EXECUTIF</h1>
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center">Noms et Prénoms</th>
                                                <th style="text-align:center">Fonction</th>
                                                <th style="text-align:center">Période</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align:center">Raymond IBATA</td>
                                                <td style="text-align:center">Président</td>
                                                <td style="text-align:center">De 1999 à nos jours</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">André Blaise BOLLE</td>
                                                <td style="text-align:center">1er Vice-Président</td>
                                                <td style="text-align:center">de 2016 à nos jours</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Françoise MAHOUNGOU</td>
                                                <td style="text-align:center">2ème Vice-Président</td>
                                                <td style="text-align:center">De 2016 à nos jours</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Micheline OKEMBA</td>
                                                <td style="text-align:center">3ème Vice-Président</td>
                                                <td style="text-align:center">De 2016 à nos jours</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Jean-Paul NGALOUA</td>
                                                <td style="text-align:center">Secrétaire Général</td>
                                                <td style="text-align:center">De 2009 à nos jours</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Hilaire TOUALANI-NGOUARI</td>
                                                <td style="text-align:center">Trésorier Général</td>
                                                <td style="text-align:center">De 1999 à nos jours</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Léonard BOSSONA</td>
                                                <td style="text-align:center">Directeur Exécutif</td>
                                                <td style="text-align:center">De 2016 à nos jours</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </tbody>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h1 style="text-align:center"> COMMISSIONS</h1>
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center">Nom de Commission</th>
                                                <th style="text-align:center">Responsable</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align:center">Commission Athlètes</td>
                                                <td style="text-align:center">Laury PEMBOUABEKA</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission Femme et Sport</td>
                                                <td style="text-align:center">Thérèse NSONA</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission de Haut-Niveau</td>
                                                <td style="text-align:center">Victor TAMBA</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission Sport pour Tous</td>
                                                <td style="text-align:center">Jean-Claude IBOVI</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission Culture et Education</td>
                                                <td style="text-align:center">Auguste NKOUNKOU</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission Médicale</td>
                                                <td style="text-align:center"> Jacques NGOUONIMBA GOULOU</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission Juridique</td>
                                                <td style="text-align:center"> Fernand Romain ONDONO</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission Ethique</td>
                                                <td style="text-align:center">Jeanne Claudette BOUESSE</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission Marketing et Communication</td>
                                                <td style="text-align:center">¨Pascal AKOUALA GOELOT</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission Finances</td>
                                                <td style="text-align:center">Jacques GAMBOU</td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:center">Commission Sport et Environnement</td>
                                                <td style="text-align:center"> Jean NGANGA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </tbody>
                            </div>
                        </div>
                        <hr class="invis">

                        <form class="big-contact-form row" role="search">
                            <div class="col-md-12">
                                <textarea class="form-control" placeholder="Commentaires..."></textarea>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Entrez votre Nom">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Entrez votre email..">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Envoyez</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- end shop-extra -->
        </div><!-- end col -->
</div><!-- end row -->
<hr class="invis">
<div class="related-products">
    <div class="text-widget">
        <h3 style="text-align:center;">Bureau Exécutif</h3>
    </div><!-- end title -->
    <div class="row blog-grid shop-grid">
        <div class="col-md-3">
            <div class="course-box shop-wrapper">
                <div class="image-wrap entry">
                    <img src="{{ asset('assets/upload/rayib2.jpg') }}" alt="" class="img-responsive">
                    <div class="magnifier">
                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                    </div>
                </div>
                <!-- end image-wrap -->
                <div class="text-center course-details shop-box">
                    <h4>
                        <a href="shop-single.html" title="">Raymond IBATA</a>
                        <small>président</small>
                    </h4>
                </div>
                <!-- end details -->
                <div class="clearfix course-footer">
                </div><!-- end footer -->
            </div><!-- end box -->
        </div><!-- end col -->

        <div class="col-md-3">
            <div class="course-box shop-wrapper">
                <div class="image-wrap entry">
                    <img src="{{ asset('assets/upload/bollé.jpg') }}" alt="" class="img-responsive">
                    <div class="magnifier">
                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                    </div>
                </div>
                <!-- end image-wrap -->
                <div class="text-center course-details shop-box">
                    <h4>
                        <a href="shop-single.html" title="">André Blaise BOLLE</a>
                        <small>1er Vice-Président</small>
                    </h4>
                </div>
                <!-- end details -->
                <div class="clearfix course-footer">
                </div><!-- end footer -->
            </div><!-- end box -->
        </div><!-- end col -->

        <div class="col-md-3">
            <div class="course-box shop-wrapper">
                <div class="image-wrap entry">
                    <img src="{{ asset('assets/upload/françoise.jpg') }}" alt="" class="img-responsive">
                    <div class="magnifier">
                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                    </div>
                </div>
                <!-- end image-wrap -->
                <div class="text-center course-details shop-box">
                    <h4>
                        <a href="shop-single.html" title="">Françoise MAHOUNGOU</a>
                        <small>2ème Vice-Président</small>
                    </h4>
                </div>
                <!-- end details -->
                <div class="clearfix course-footer">
                </div><!-- end footer -->
            </div><!-- end box -->
        </div><!-- end col -->

        <div class="col-md-3">
            <div class="course-box shop-wrapper">
                <div class="image-wrap entry">
                    <img src="{{ asset('assets/upload/michelle.jpg') }}" alt="" class="img-responsive">
                    <div class="magnifier">
                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                    </div>
                </div>
                <!-- end image-wrap -->
                <div class="text-center course-details shop-box">
                    <h4>
                        <a href="shop-single.html" title="">Micheline OKEMBA</a>
                        <small>4ème Vice-Président</small>
                    </h4>
                </div>
                <!-- end details -->
                <div class="clearfix course-footer">
                </div><!-- end left -->
            </div><!-- end footer -->
        </div><!-- end box -->
    </div><!-- end col -->
</div><!-- end row -->
<div class="row blog-grid shop-grid">
    <div class="col-md-3">
        <div class="course-box shop-wrapper">
            <div class="image-wrap entry">
                <img src="{{ asset('assets/upload/jpn.jpg') }}" alt="" class="img-responsive">
                <div class="magnifier">
                    <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                </div>
            </div>
            <!-- end image-wrap -->
            <div class="text-center course-details shop-box">
                <h4>
                    <a href="shop-single.html" title="">Jean-paul NGALOUA</a>
                    <small>Secrétaire Général</small>
                </h4>
            </div>
            <!-- end details -->
            <div class="clearfix course-footer">
            </div><!-- end footer -->
        </div><!-- end box -->
    </div><!-- end col -->

    <div class="col-md-3">
        <div class="course-box shop-wrapper">
            <div class="image-wrap entry">
                <img src="{{ asset('assets/upload/tgh.jpg') }}" alt="" class="img-responsive">
                <div class="magnifier">
                    <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                </div>
            </div>
            <!-- end image-wrap -->
            <div class="text-center course-details shop-box">
                <h4>
                    <a href="shop-single.html" title="">Hilaire TOUALANI-NGOUARI</a>
                    <small>Trésorier Général</small>
                </h4>
            </div>
            <!-- end details -->
            <div class="clearfix course-footer">
            </div><!-- end footer -->
        </div><!-- end box -->
    </div><!-- end col -->

    <div class="col-md-3">
        <div class="course-box shop-wrapper">
            <div class="image-wrap entry">
                <img src="{{ asset('assets/upload/leo.jpg') }}" alt="" class="img-responsive">
                <div class="magnifier">
                    <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                </div>
            </div>
            <!-- end image-wrap -->
            <div class="text-center course-details shop-box">
                <h4>
                    <a href="shop-single.html" title="">Léonard BOSSONA</a>
                    <small>Directeur Exécutif</small>
                </h4>
            </div>
            <!-- end details -->
            <div class="clearfix course-footer">
            </div><!-- end footer -->
        </div><!-- end box -->
    </div><!-- end col -->

    <div class="col-md-3">
        <div class="course-box shop-wrapper">
            <div class="image-wrap entry">
                <img src="{{ asset('assets/upload/louis.jpg') }}" alt="" class="img-responsive">
                <div class="magnifier">
                    <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                </div>
            </div>
            <!-- end image-wrap -->
            <div class="text-center course-details shop-box">
                <h4>
                    <a href="shop-single.html" title="">Louis NGAMI</a>
                    <small>Attaché à la Communication</small>
                </h4>
            </div>
            <!-- end details -->
            <div class="clearfix course-footer">
            </div><!-- end footer -->
        </div><!-- end box -->
    </div><!-- end col -->
</div><!-- end related -->
</section>

@endsection
