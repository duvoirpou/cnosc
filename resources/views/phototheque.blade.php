@extends('app')

@section('title', 'CNOSC | Photothèque')

@section('content')

<section class="section lb p120" style="background-image:url('{{ asset('assets/upload/hbd16.jpg') }}'); background-size: cover; background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message page-title text-center">
                    <h3 style="color:black">PHOTOTHEQUE</h3>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
<br><br><br><br>
<section class="section gb nopadtop">
    <div class="container">
        <div class="row blog-grid shop-grid">
            @foreach ($phototheque as $rows)
            <div class="col-md-3">
                <div class="course-box shop-wrapper">
                    <div class="image-wrap entry">
                        <img src="{{ asset('images') }}/{{ $rows->photo }}" alt="" class="img-responsive">
                        <div class="magnifier">
                            <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                        </div>
                    </div>
                </div><!-- end box -->
            </div><!-- end col -->
            @endforeach

        </div><!-- end row -->

        <hr class="invis">

        <div class="row text-center">
            <div class="col-md-12">
                {{ $phototheque->links('vendor.pagination.bootstrap-4') }}
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</div><!-- end container -->
</section>

@stop
