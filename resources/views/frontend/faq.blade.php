@extends('layout.app')
@section('pagetitle') FINVIEW - Financial  Review and Comparison Website Template @endsection
@section('keywords') FINVIEW, Financial , Financial  Review and Comparison @endsection
@section('description') FINVIEW HTML5 Template @endsection

@section('main-content')

    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">FAQs</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/faq_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- faq start -->
    <section class="section faq-section wow fadeInUp" data-wow-duration="0.8s" id="faqa">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <div class="section__header">
                        <p class="section__header-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/images/title_vector.png" alt="vector">Frequently Asked Questions</p>
                        <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Find Answers to Common Questions</h2>
                        <p class="section__header-content wow fadeInDown" data-wow-duration="0.8s">We've compiled a list of frequently asked questions to provide you with quick and helpful answers. If you have a question that is not addressed below</p>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-between gy-4 gy-lg-0">
                <div class="col-12 col-lg-6 col-xxl-6">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-1" aria-expanded="true" aria-controls="faq-accordion-1"> 
                                    How do I apply for a loan through your platform?
                                </button>
                            </h5>
                            <div id="faq-accordion-1" class="accordion-collapse collapse show" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-2" aria-expanded="true" aria-controls="faq-accordion-2"> 
                                    What types of loans do you review and compare?
                                </button>
                            </h5>
                            <div id="faq-accordion-2" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-3" aria-expanded="true" aria-controls="faq-accordion-3"> 
                                    Can I trust the information provided on your website?
                                </button>
                            </h5>
                            <div id="faq-accordion-3" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-4" aria-expanded="true" aria-controls="faq-accordion-4"> 
                                    Do you offer financial advice or recommendations?
                                </button>
                            </h5>
                            <div id="faq-accordion-4" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-5" aria-expanded="true" aria-controls="faq-accordion-5"> 
                                    How do I apply for a loan through your platform?
                                </button>
                            </h5>
                            <div id="faq-accordion-5" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xxl-6">
                    <div class="accordion wow fadeInUp" data-wow-duration="0.8s" id="faq2">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-accordion-1" aria-expanded="true" aria-controls="faq2-accordion-1"> 
                                    Can I get a loan with bad credit?
                                </button>
                            </h5>
                            <div id="faq2-accordion-1" class="accordion-collapse collapse" data-bs-parent="#faq2">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-accordion-2" aria-expanded="true" aria-controls="faq2-accordion-2"> 
                                    Are there any fees associated with taking out a loan?
                                </button>
                            </h5>
                            <div id="faq2-accordion-2" class="accordion-collapse collapse" data-bs-parent="#faq2">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-accordion-3" aria-expanded="true" aria-controls="faq2-accordion-3"> 
                                    What happens if I miss a loan payment?
                                </button>
                            </h5>
                            <div id="faq2-accordion-3" class="accordion-collapse collapse" data-bs-parent="#faq2">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-accordion-4" aria-expanded="true" aria-controls="faq2-accordion-4"> 
                                    Can I repay my loan early?
                                </button>
                            </h5>
                            <div id="faq2-accordion-4" class="accordion-collapse collapse" data-bs-parent="#faq2">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-accordion-5" aria-expanded="true" aria-controls="faq2-accordion-5"> 
                                    Can I refinance my existing loan?
                                </button>
                            </h5>
                            <div id="faq2-accordion-5" class="accordion-collapse collapse" data-bs-parent="#faq2">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Absolutely. We strive to provide reliable and up-to-date information. Our team follows strict editorial guidelines to ensure the accuracy and integrity of our content. However,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq end -->

    <!-- Loan Solution start -->
    <section class="loan-solution section">
        <div class="container position-relative">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-xxl-between align-items-center">
                <div class="col-12 col-lg-6 col-xxl-6">
                    <div class="section__content ms-xl-4 ms-xl-0">
                        <span class="section__content-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/images/title_vector.png" alt="vector"> Start Your Loan Search Today</span>
                        <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s">Find the Perfect Loan Solution for Your Financial Needs</h2>
                        <a href="{{ route('contactUs') }}" class="btn_theme btn_theme_active mt-3 wow fadeInDown" data-wow-duration="0.8s">Contact Us <i class="bi bi-arrow-up-right"></i><span></span></a>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-xxl-5">
                    <div class="loan-solution__thumb unset-xxl wow fadeInDown" data-wow-duration="0.8s">
                        <img src="assets/images/loan_solution.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Loan Solution end -->

    <!-- Client Testimonials start -->
    <section class="testimonials testimonials--secondary section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-xxl-5">
                    <div class="section__header">
                        <span class="section__header-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"><img src="assets/images/title_vector.png" alt="vector">Client Testimonials</span>
                        <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Success Stories Shared by Our Customers</h2>
                        <p class="section__header-content wow fadeInDown" data-wow-duration="0.8s">Feel free to customize the text with actual client testimonials, ensuring you have their permission to use their names and occupations</p>
                    </div>
                </div>
            </div>
            <div class="row">            
                <div class="col-12">
                    <div class="testimonials-secondary_slider wow fadeInUp" data-wow-duration="0.8s">
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <div class="star_review mb-3">
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-half star-active"></i>
                                </div>
                                <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. </p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/images/testimonials.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Balogh Imre</h5>
                                    <p class="author__desi">Account Executive</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <div class="star_review mb-3">
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-half star-active"></i>
                                </div>
                                <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. </p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Kende Attila</h5>
                                    <p class="author__desi">President of Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <div class="star_review mb-3">
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-half star-active"></i>
                                </div>
                                <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. </p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/images/testimonials3.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Eleanor Pena</h5>
                                    <p class="author__desi">Medical Assistant</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card--custom">
                            <div class="testimonials__author-review">
                                <div class="star_review mb-3">
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-fill star-active"></i>
                                    <i class="bi bi-star-half star-active"></i>
                                </div>
                                <p class="text-start">Our satisfied clients have experienced success with our services and loan recommendations. </p>
                            </div>
                            <div class="testimonials__author">
                                <div class="author__thumg">
                                    <img src="assets/images/testimonials2.png" alt="">
                                </div>
                                <div class="author__content">
                                    <h5 class="author__title">Eleanor Pena</h5>
                                    <p class="author__desi">President of Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="slider-navigation wow fadeInRight" data-wow-duration="1.2s">
                        <button class="prev-testimonials pagination-button">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        
                        <button class="next-testimonials pagination-button">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Testimonials end -->

@endsection