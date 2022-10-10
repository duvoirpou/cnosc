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
                    @livewire("actu-list")
                </div><!-- end col -->

                @include("partials._content_right")

            </div><!-- end row -->
        </div><!-- end boxed -->
    </div><!-- end container -->
</section>

@stop
