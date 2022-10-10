 <!-- LOADER -->
 <div id="preloader">
     <img class="preloader" src="{{ asset('assets/images/loader.gif') }}" alt="">
 </div><!-- end loader -->
 <!-- END LOADER -->

 <!-- BEGIN # MODAL LOGIN -->
 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
     <div class="modal-dialog">
         <div class="modal-content">
             <!-- Begin # DIV Form -->
             <div id="div-forms">

                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span class="flaticon-add" aria-hidden="true"></span>
                 </button>
                 <div class="modal-body">
                     @include("partials._search")
                 </div>
                 <!-- End # Login Form -->
             </div><!-- End # DIV Form -->
         </div>
     </div>
 </div>
 <!-- END # MODAL LOGIN -->

 <header class="header header-normal">
     <div class="topbar clearfix" style="background: green" ;>
         <div class="container">
             <div class="row-fluid">
                 <div class="col-md-8 col-sm-8 text-left">
                     <p>
                         <strong><i class="fa fa-phone"></i></strong> +242066687032 &nbsp;&nbsp;
                         <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">jpngaloua@gmail.com,</a>
                         <strong><i class="fa fa-map-marker"></i></strong> Rue Bouët-Willaumez Côté/SIAT-Brazzaville
                     </p>
                 </div><!-- end left -->
                 <div class="col-md-4 col-sm-4 hidden-xs text-right">
                     <div class="social">
                         <a class="facebook" href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i
                                 class="fa fa-facebook"></i></a>
                         <a class="twitter" href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i
                                 class="fa fa-twitter"></i></a>
                         <a class="google" href="#" data-tooltip="tooltip" data-placement="bottom"
                             title="Google Plus"><i class="fa fa-google-plus"></i></a>
                         <a class="linkedin" href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i
                                 class="fa fa-linkedin"></i></a>
                         <a class="pinterest" href="#" data-tooltip="tooltip" data-placement="bottom"
                             title="Pinterest"><i class="fa fa-pinterest"></i></a>
                     </div><!-- end social -->
                 </div><!-- end left -->
             </div><!-- end row -->
         </div><!-- end container -->
     </div><!-- end topbar -->

     <div class="container">
         <nav class="navbar navbar-default yamm">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                     aria-expanded="false" aria-controls="navbar">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <div class="logo-normal">
                     <a class="navbar-brand" href="{{ route('app_acceuil') }}"><img
                             src="{{ asset('assets/images/logo-dark.png') }}" alt=""></a>
                 </div>
             </div>

             <div id="navbar" class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">
                     <li class="dropdown hassubmenu">
                     <li><a href="{{ route('app_acceuil') }}">CNOSC</a></li>
                     <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CNOSC <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="#">Historique</a></li>
                            <li><a href="#">Rôles et Missions</a></li>
                            <li><a href="#">Assemblée générale</a></li>
                            <li><a href="#">Comité Exécutif</a></li>
                            <li><a href="#">commissions</a></li>
                            <li><a href="#">Fédérations</a></li>
                            <li><a href="#"> Associations Affinitaires</a></li>
                            <li><a href="#">Partenaires</a></li>
                        </ul>-->
                     </li>

                     <li><a href="{{ route('app_actualite') }}">ACTUALITES</a></li>
                     <li class="dropdown hassubmenu">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                             aria-expanded="false">GOUVERNANCE<span class="fa fa-angle-down"></span></a>
                         <ul class="dropdown-menu" role="menu">
                             <Li><a class="dropdown-item" href="bureauexecutif.html">Bureau exécutif</a></Li>
                             <li><a class="dropdown-item" href="personneladmin.html">Personnel Administratif</a></li>
                             <li><a class="dropdown-item" href="Commission.html">Commission</a></li>
                             <li><a class="dropdown-item" href="Féderation.html">Fédérations</a></li>
                             <li><a class="dropdown-item" href="Associations Affinitaires.html">Associations
                                     Affinitaires</a></li>
                             <li><a class="dropdown-item" href="structuresoustut.html">Structures sous Tutelle</a></li>
                         </ul>
                     </li>
                     {{-- <li class="dropdown hassubmenu">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                             aria-expanded="false">GOUVERNANCE<span class="fa fa-angle-down"></span></a>
                         <ul class="dropdown-menu" role="menu">
                             <Li><a class="dropdown-item" href="{{ route('app_AxesStratiques') }}">Axes Stratiques</a>
                             </Li>
                             <li><a class="dropdown-item"
                                     href="{{ route('app_ReglementInterieurEtStatut') }}">Règlement Intérieur</a>
                             </li>
                             <li><a class="dropdown-item" href="{{ route('app_Organigramme') }}">Organigramme</a></li>
                             <li><a class="dropdown-item" href="{{ route('app_procesVerbaux') }}">Procès Verbaux</a>
                             </li>
                             <li><a class="dropdown-item" href="{{ route('app_RapportsDesMissions') }}">Rapports des
                                     Missions</a></li>
                         </ul>
                     </li> --}}
                     <li class="dropdown hassubmenu">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                             aria-expanded="false">PARTENAIRES<span class="fa fa-angle-down"></span></a>
                         <ul class="dropdown-menu" role="menu">
                             <Li><a class="dropdown-item" href="https://www.facebook.com/105535701780091/photos/a.105535758446752/105636108436717/" target="_blank" rel="noopener noreferrer">Ministère de la jeunesse et des sports</a></Li>
                             <li><a class="dropdown-item" href="https://africaolympic.com/" target="_blank" rel="noopener noreferrer">Association des Comités Nationaux et Olympiques Africains</a></li>
                            {{--  <li><a class="dropdown-item" href="personneladmin.html">ACNOA IV</a></li> --}}
                             <li><a class="dropdown-item" href="http://afcno.org/" target="_blank" rel="noopener noreferrer">Association Francophone des Comités Nationaux Olympiques</a></li>
                             <li><a class="dropdown-item" href="https://olympics.com/cio/vue-d-ensemble" target="_blank" rel="noopener noreferrer">Comité International Olympique</a></li>
                         </ul>
                     </li>
                     {{-- <li class="dropdown hassubmenu">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                             aria-expanded="false">JEUX<span class="fa fa-angle-down"></span></a>
                         <ul class="dropdown-menu" role="menu">
                             <Li><a class="dropdown-item" href="{{ route('app_jeuxOlympEte') }}">Jeux olympiques
                                     d'Eté</a>
                             </Li>
                             <Li><a class="dropdown-item" href="{{ route('app_jeuxOlympJeunes') }}">Jeux olympiques
                                     de la Jeunesse</a></Li>
                             <Li><a class="dropdown-item" href="jeux africains.html">Jeux Africains</a></Li>
                             <Li><a class="dropdown-item" href="jeux africians de la jeunesse.html">Jeux Africains de
                                     Jeunesse</a></Li>
                             <Li><a class="dropdown-item" href="jeux acnoa zone IV.html">Jeux ACNOA Zone IV</a></Li>
                             <Li><a class="dropdown-item" href="jeux de la francophonie.html">Jeux de la
                                     Francophonie</a></Li>

                         </ul>
                     </li> --}}

                     <li class="dropdown hassubmenu">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                             aria-expanded="false">MEDIATHEQUE <span class="fa fa-angle-down"></span></a>
                         <ul class="dropdown-menu" role="menu">
                             <li><a href="{{ route('app_phototheques') }}">Phototèque</a></li>
                             <li><a href="{{ route('app_video') }}">Videothèque</a></li>
                         </ul>
                     </li>
                     <li><a href="{{ route('app_contact') }}">CONTACT</a></li>
                     <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i
                                 class="fa fa-search"></i></a></li>
                 </ul>
             </div>
         </nav><!-- end navbar -->
     </div><!-- end container -->
 </header>

 @if (Route::is('app_acceuil'))

     <section id="home" class="video-section js-height-full">
         <div class="overlay"></div>
         <div class="home-text-wrapper relative container">
             <div class="home-message">
                 <div class="logo-normal">
                     <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/CNO-CGO1.png') }}" alt=""
                             style=" width: 100px; height: 200px; margin-right: -100px;"></a>
                 </div>
                 <p style="text-align: center;">Comité National Olympique et Sportif Congolais</p>
                 <br>
                 <small>Bienvenue sur le Site Officiel du Comité National Olympique et Sportif Congolais. Organisation
                     non Gouvernementale membre du Comité International Olympique depuis 1964.</small>
             </div>
         </div>

     </section>

 @endif
