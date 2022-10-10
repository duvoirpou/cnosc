@extends("app")

@section('content')

    <section class="section db p120"
        style="background-image:url('{{ asset('assets/upload/hbd.jpg') }}'); background-size: cover; background-repeat: no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message page-title text-center">
                        <h3>Article</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section gb nopadtop">
        <div class="container">
            <div class="boxed">
                <div class="row">
                    <div class="col-md-8">
                        <div class="content blog-list">
                            <div class="blog-wrapper clearfix">
                                <div class="blog-meta">
                                    <h3><a href="#" title="">{{ $recup->titre }}</a></h3>
                                    <ul class="list-inline">
                                        <li>Posté le {{ $recup->date }} </li>
                                        <li><span>posté par</span> <a href="#">{{ $recup->auteur }}</a></li>
                                    </ul>
                                </div><!-- end blog-meta -->

                                <div class="blog-media">
                                    <img src="{{ asset('images') }}/{{ $recup->photo }}" alt=""
                                        class="img-responsive img-rounded">
                                </div><!-- end media -->

                                <div class="blog-desc-big">
                                    <p class="lead">{{ $recup->libelle }}</p>
                                    <p style="text-align: justify;">{{ $recup->corps }}</p>

                                    {{-- <p  style="text-align: justify;">Le Congo fait partie des meilleurs pays africains au classement général du handball féminin, car les Diables rouges ont fait le beau temps de ce sport autour de la décennie 1980-1990.  Avec quatre CAN dans leur palmarès (1979, 1981, 1983 et 1985), quatre fois finaliste (1976, 1992, 1998 et 2000) puis à deux reprises troisième (2006 et 2008), les Congolaises sont déterminées à remporter ce match pour commencer avec assurance leur deuxième match, contre l’Angola, le 13 juin.</p>
                                <p  style="text-align: justify;">Après le désistement de l’Algérie, le Congo ne jouera que deux matchs dans la phase de poule. Selon la gardienne des Diables rouges, l’équipe est en forme et les joueuses sont prêtes à se déchainer pour défendre l’image de la République du Congo.</p>
                                <blockquote class="text-center">
                                    « Nous sommes prêtes, nous jouerons sans pression. Notre détermination est sans faille », a-t-elle déclaré.
                                </blockquote>

                                <p style="text-align: justify;">Même si les adversaires des protégées du président Ayessa Ndinga Yengué ont un curriculum vitae quasi vide dans cette compétition, il est nécessaire de prendre ce match au sérieux puisque le Cap-Vert n’a certes pas encore atteint le carré d’as dans cette compétition, mais ce pays est actuellement en plein expansion.</p>

                                <p style="text-align: justify;">Pour permettre à un plus grand nombre de suivre le match, la rencontre Congo-Cap-Vert sera diffusée en direct sur les chaînes de télévision camerounaises à savoir CRTV et CRTV Sport, disponibles sur les bouquets Canal+.</p> --}}

                                    <hr class="invis">

                                    {{-- <div class="tags-widget">
                                    <ul class="list-inline">
                                        <li><a href="#">FECOHAND</a></li>
                                        <li><a href="#">MSEP</a></li>
                                        <li><a href="#">CAB</a></li>
                                        <li><a href="#">CNOSC</a></li>
                                    </ul>
                                </div> --}}
                                    <!-- end list-widget -->

                                </div><!-- end desc -->
                            </div><!-- end blog -->
                        </div><!-- end content -->

                        {{-- <div class="authorbox">
                        <div class="site-publisher clearfix">
                            <img src="upload/people_10.jpeg" alt="" class="img-responsive img-circle">
                            <a href="single-agency.html" title=""><h4><small>about</small> <span>Martin Martines</span></h4></a>
                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth.</p>

                            <div class="authorbox-social">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                </ul><!-- end list -->
                            </div><!-- end share -->
                        </div><!-- end publisher -->
                    </div><!-- end details --> --}}

                        {{-- <div class="content boxed-comment clearfix">
                        <h3 class="small-title">3 Commentaires</h3>
                        <div class="comments-list">
                            <div class="media">
                                <p class="pull-right"><small>5 days ago</small></p>
                                <a class="media-left" href="#">
                                    <img src="upload/people_12.jpeg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading user_name">Baltej Singh</h4>
                                    <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                </div>
                            </div>
                            <div class="media">
                                <p class="pull-right"><small>5 days ago</small></p>
                                <a class="media-left" href="#">
                                    <img src="upload/people_11.jpeg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">

                                    <h4 class="media-heading user_name">Baltej Singh</h4>
                                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro.</p>

                                    <p>Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                </div>
                            </div>
                            <div class="media last-child">
                                <p class="pull-right"><small>5 days ago</small></p>
                                <a class="media-left" href="#">
                                    <img src="upload/people_04.jpeg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">

                                    <h4 class="media-heading user_name">Baltej Singh</h4>
                                    <p>Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end content --> --}}

                        {{-- <div class="content boxed-comment clearfix">
                        <h3 class="small-title">Ajouter un commentaire</h3>
                        <form class="big-contact-form">
                            <div class="col-md-4">
                                <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nom">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <input type="text" class="form-control" name="website" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="votre Commentaires" class="form-control"></textarea>
                                <button class="btn btn-primary" type="submit">Postez le Commentaire</button>
                            </div>
                        </form>
                    </div><!-- end content --> --}}

                    </div><!-- end col -->

                    @include("partials._content_right")

                </div><!-- end row -->
            </div><!-- end boxed -->
        </div><!-- end container -->
    </section>

@endsection
