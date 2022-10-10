@extends('app')

@section('title', 'CNOSC | Actualités')

@section('content')

<section class="section db p120"
    style="background-image:url('{{ asset('assets/upload/hbd012.jpg') }}');  background-size: cover; background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message page-title text-center">
                    <h3 style="color:black">ACTUALITES</h3>
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
                            @if (request()->input())
                            <div class="blog-meta">
                                <div class="alert alert-info" role="alert">
                                    <h6>{{ $articles->total() }} résultat(s) pour la recherche "<span class="text-danger">{{ request()->q }}</span>"</h6>
                                </div>

                            </div>
                            @endif

                            @foreach ($articles as $row)
                                <?php
                                $date = date_create($row->date);
                                ?>
                                <div class="blog-meta">
                                    <h3><a href="{{ route('article.show', $row->id_actualite) }}"
                                            title="">{{ $row->titre }}</a></h3>
                                    <ul class="list-inline">
                                        <li>Posté le {{ date_format($date, 'd-m-Y') }} </li>
                                        <li><span>posté par</span> <a href="#">{{ $row->auteur }}</a></li>
                                    </ul>
                                </div><!-- end blog-meta -->

                                <div class="blog-media">
                                    <a href="{{ route('article.show', $row->id_actualite) }}" title=""><img
                                            src="{{ asset('images') }}/{{ $row->photo }}" alt=""
                                            class="img-responsive img-rounded"></a>
                                </div><!-- end media -->

                                <div class="blog-desc-big">
                                    <p class="lead">{{ $row->libelle }}</p>
                                    <p style="text-align:justify">
                                        {{ substr($row->corps, 0, 350) }}&hellip;
                                    </p>
                                    <a href="{{ route('article.show', $row->id_actualite) }}"
                                        class="btn btn-primary">Lire plus</a>
                                </div><!-- end desc -->
                                <br>
                            @endforeach
                        </div><!-- end blog -->
                    </div><!-- end content -->

                    <div class="row">
                        <div class="col-md-12">
                            {{ $articles->links('vendor.pagination.bootstrap-4') }}
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="sidebar col-md-4">
                    <div class="widget clearfix">
                        <div class="banner-widget">
                            <img src="{{ asset('assets/upload/banner.jpg') }}" alt=""
                                class="img-responsive img-rounded">
                        </div>
                    </div>

                    <div class="widget clearfix">
                        <h3 class="widget-title">Articles</h3>
                        <div class="post-widget">
                            <div class="media">
                                <img src="{{ asset('assets/upload/blog_small_01.jpg') }}" alt=""
                                    class="img-responsive alignleft img-rounded">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="/blogSingle">Manuel d'éducation Sportive</a>
                                    </h5>
                                    <div class="blog-meta">
                                        <ul class="list-inline">
                                            <li>il ya 4 jours</li>
                                            <li><span>posté par</span> <a href="#">Louis NGAMI</a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->
                                </div>
                            </div>
                            <div class="media">
                                <img src="{{ asset('assets/upload/blog_small_01.jpg') }}" alt=""
                                    class="img-responsive alignleft img-rounded">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="/blogSingle">Axes stratégiques</a></h5>
                                    <div class="blog-meta">
                                        <ul class="list-inline">
                                            <li>il ya 4 jours</li>
                                            <li><span>posté par</span> <a href="#">Louis NGAMI</a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->
                                </div>
                            </div>
                            <div class="media">
                                <img src="{{ asset('assets/upload/blog_small_01.jpg') }}" alt=""
                                    class="img-responsive alignleft img-rounded">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="/blogSingle">Reglement Intérieur CNOSC</a>
                                    </h5>
                                    <div class="blog-meta">
                                        <ul class="list-inline">
                                            <li>il ya 4 jours</li>
                                            <li><span>posté par</span> <a href="#">Louis NGAMI</a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->
                                </div>
                            </div>

                            <div class="media">
                                <img src="{{ asset('assets/upload/blog_small_02.jpg') }}" alt=""
                                    class="img-responsive alignleft img-rounded">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="/blogSingle">Compte rendu de l'AG du
                                            18/06/2021</a></h5>
                                    <div class="blog-meta">
                                        <ul class="list-inline">
                                            <li>il ya 4 jours</li>
                                            <li><span>posté par</span> <a href="#">Louis NGAMI</a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->
                                </div>
                            </div>

                            <div class="media">
                                <img src="{{ asset('assets/upload/blog_small_03.jpg') }}" alt=""
                                    class="img-responsive alignleft img-rounded">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="/blogSingle">Rapport Module I: cours pour
                                            Dirigéants Sportifs</a></h5>
                                    <div class="blog-meta">
                                        <ul class="list-inline">
                                            <li>il ya 4 jours</li>
                                            <li><span>posté par</span> <a href="#">Louis NGAMI</a></li>
                                        </ul>
                                    </div><!-- end blog-meta -->
                                </div>
                            </div>
                        </div><!-- end post-widget -->
                    </div><!-- end widget -->

                    {{-- <div class="widget clearfix">
                        <h3 class="widget-title">Abonnez-vous à la Newsletter</h3>
                        <div class="newsletter-widget">
                            <p>inscrivez-vous pour recevoir par mail nos actualités</a>.</p>
                            <form class="form-inline" role="search">
                                <div class="form-1">
                                    <input type="text" class="form-control" placeholder="Entrez votre mail.">
                                    <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-paper-plane-o"></i></button>
                                </div>
                            </form>
                        </div><!-- end newsletter -->
                    </div><!-- end widget --> --}}
                    <br>
                    <div class="widget clearfix">
                        <iframe style="border-radius:10px;" width="325" height="350"
                            src="https://www.youtube.com/embed/_m9Zu2b33Lg" frameborder="0"
                            allowfullscreen></iframe><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3 class="widget-title">Fédérations Sportives</h3>
                        <br>
                        <br>
                        <div class="tags-widget">
                            <ul class="list-inline">
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Cyclisme</a></li>
                                <li><a href="#">Athlétisme</a></li>
                                <li><a href="#">Handball</a></li>
                                <li><a href="#">Basketball</a></li>
                                <li><a href="#">Escrime</a></li>
                                <li><a href="#">Karaté</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Badminton</a></li>
                                <li><a href="#">Lutte</a></li>
                                <li><a href="#">Haltérophilie</a></li>
                                <li><a href="#">Taekwendo</a></li>
                            </ul>
                        </div><!-- end list-widget -->
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <iframe style="border-radius: 10px;"
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fhttps%3A%2F%2Fwww.facebook.com%2FComit%25C3%25A9-National-Olympique-et-Sportif-Congolais-CNOSC-664753697332701&tabs=timeline&width=325&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="325" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end row -->
        </div><!-- end boxed -->
    </div><!-- end container -->
</section>

@stop
