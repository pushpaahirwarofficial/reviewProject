@extends('layout.app')
@section('pagetitle') Page Not Found @endsection
@section('keywords') Page Not Found @endsection
@section('description') Page Not Found @endsection

@section('main-content')

    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">404 Error Page</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">404 Error Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/error_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- error page start -->
    <section class="error-page text-center section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-xxl-8">
                    <div class="error-page__thumb wow fadeInDown" data-wow-duration="0.8s">
                        <img src="assets/images/error_page.png" alt="images">
                    </div>
                </div>
                <div class="col-12 col-md-8 col-xxl-6">
                    <div class="section__content mt-5">
                        <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Oops! Page Not Found</h2> 
                        <p class=" wow fadeInDown" data-wow-duration="0.8s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="{{ route('index') }}" class="btn_theme btn_theme_active mt_40  wow fadeInUp" data-wow-duration="0.8s">Back To Home<i class="bi bi-arrow-up-right"></i><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error page end -->     

@endsection