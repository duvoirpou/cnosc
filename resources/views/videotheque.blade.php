@extends("app")

@section('title', 'CNOSC | Vidéothèque')

@section("content")

<section class="section lb p120" style="background-image:url('{{ asset('assets/upload/dak.jpg') }}'); background-size: cover; background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message page-title text-center">
                    <h3 style="color:rgb(245, 245, 245)">VIDEOTHEQUE</h3>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
<br>
<br>
<br>
<br>
<section class="section gb nopadtop">
    <div class="container">
         <div class="row blog-grid shop-grid">
            @foreach ($videotheque as $rows)
                <div class="col-md-3">
                    <div class="course-box shop-wrapper">
                        <div class="image-wrap entry">
                            <iframe style="border-radius:10px;" width="265" height="265" src="{{ $rows->lien }}" frameborder="2" allowfullscreen></iframe>
                        <p style="text-align:center;background-color:white;color:black;border:10px;">Magazine Olympique du 12/06/2021</p>
                        </div>
                    </div><!-- end box -->
                </div><!-- end col -->
                @endforeach


            <br>
            </div><!-- end row -->

            <hr class="invis">

            <div class="row text-center">
                <div class="col-md-12">
                    {{ $videotheque->links('vendor.pagination.bootstrap-4') }}
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</section>

@stop
