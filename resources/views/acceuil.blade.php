@extends('app')

@section('title', 'CNOSC | Accueil')

@section('content')


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="custom-module">
                        <img src="{{ asset('assets/upload/siège.jpg') }}" alt="" class="img-responsive wow slideInLeft"
                            style=" width:350px; height:400px; border-radius: 10px;">
                    </div><!-- end module -->
                </div><!-- end col -->
                <div class="col-md-8">
                    <div class="custom-module p40l">
                        <h2 Style="text-align:center">PRESENTATION</h2>

                        <p style="text-align:justify;">Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus.
                            Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed
                            nisi eleifend, fermentum orci amet, iaculis libero.</p>

                        <hr class="invis">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                <ul class="check">
                                    <li>Historique</li>


                                </ul><!-- end check -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="check">
                                    <li>Rôles & Missions</li>


                                </ul><!-- end check -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                <ul class="check">
                                    <li>Comité Exécutif</li>


                                </ul><!-- end check -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                <ul class="check">
                                    <li>commissions</li>


                                </ul><!-- end check -->
                            </div><!-- end col-lg-4 -->
                        </div><!-- end row -->

                        <hr class="invis">

                        <div class="btn-wrapper" style="text-align: center" ;>
                            <a href="{{ route('app_president') }}" class="btn btn-primary">Lire Plus</a>
                        </div>

                    </div><!-- end module -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class="section gb">
        <div class="container">
            <div class="text-center section-title">
                <h3>Actualités</h3>
                <p>Suivez en temps réel, l'actualité du CNOSC et du monde Sportif.</p>
            </div><!-- end title -->

            <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                @foreach ($actualites as $row)
                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="{{ asset('images') }}/{{ $row->photo }}" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    {{-- <small>Post récent</small> --}}
                                    <a href="{{ route('article.show', $row->id_actualite) }}" title=""
                                        style="text-align: center;">{{ $row->titre }}</a>
                                </h4>
                                <p>{{ $row->libelle }}</p>
                                <br />
                                <h4><a href="{{ route('article.show', $row->id_actualite) }}"
                                        class="button btn btn-primary" style="text-align: right;">Lire
                                        Plus</a></h4>
                            </div><!-- end details -->
                            <div class="clearfix course-footer">
                                <div class="pull-left">
                                    <ul class="list-inline">

                                        <?php
                                        $date = date_create($row->date);
                                        ?>

                                        <li><a><i class="fa fa-calendar"></i>{{ date_format($date, 'd-m-Y') }}</a></li>
                                        <li><a><i class="fa fa-clock-o"></i> {{ $row->heure }}.</a></li>
                                    </ul>
                                </div><!-- end left -->
                                <div class="pull-right">
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->
                @endforeach
            </div><!-- end row -->
            <hr class="invis">
            <div class="text-center section-button">
                {{ $actualites->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div><!-- end container -->
    </section>

    <section class="section db">
        <div class="container-fluid" style="background-color: #000000;">
            <div class="container" style="padding: 100px 0px 100px 0px;">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">22</h4>
                            <h3><i class="flaticon-black"> </i><a href="Féderation.html" style="color: white">Fédérations</a></h3>
                            <p>les fédérations constituent une force pour le mouvement Olympique Congolais</p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">6</h4>
                            <h3><i class="flaticon-sport"></i><a href="Associations Affinitaires.html" style="color: white">Associations
                                    Affinitaires</a></h3>
                            <p>les associations sont pour autant des Partenaires essentiels pour la vie de notre Olympisme
                            </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">12</h4>
                            <h3><i class="flaticon-year"></i><a href="commissions.html" style="color: white">Commissions</a></h3>
                            <p style="text-align:justify;">les commissions nous permettent de mettre en action les axes
                                stratégiques que nous nous sommes fixés pour l'olympide 2016-2020 </p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div><!-- end container -->
        <br />
        <div class="container">
            <div class="text-center section-title">
                <h3>Photos</h3>
                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien
                    iaculis. Donec consectetur accumsan arcu, sit amet fringilla ex ultricies.</p>
            </div><!-- end title -->
            <div class="row">
                @foreach ($phototheque as $rows)
                    <div class="col-lg-4 col-md-12 shop-media">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="{{ asset('images') }}/{{ $rows->photo }}" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <a rel="prettyPhoto[inline]" href="{{ asset('images') }}/{{ $rows->photo }}" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                        </div><!-- end blog -->
                    </div><!-- end col -->
                @endforeach
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="text-center section-title">
            <h3></h3>
        </div><!-- end title -->
    </section>


@endsection
