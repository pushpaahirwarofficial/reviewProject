@extends('layout.app')
@section('pagetitle') FINVIEW - Financial Loan Review and Comparison Website Template @endsection
@section('keywords') FINVIEW, Financial Loan, Financial Loan Review and Comparison @endsection
@section('description') FINVIEW HTML5 Template @endsection

@section('main-content')


    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Reviews - {{ $company_single->company_name }}</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('review-list/' . categorySlug($company_single->category_id)) }}">{{ categorySlug($company_single->category_id) }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $company_single->company_name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="{{ asset('assets/images/reviews_banner.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- loan-reviews-details start -->
    <section class="reviews-details section">
        <div class="container ">
            <div class="row">
                <div class="col-12 col-xl-8 order-1 order-xl-0">
                    <div class="reviews-details__area">
                        <div class="reviews-details__part wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews loan-reviews--quaternary wow fadeInUp" data-wow-duration="0.8s">
                                <div class="loan-reviews_card card">
                                    <div class="loan-reviews__part-one">
                                        <div class="loan-reviews__thumb">
                                            @if(!empty($company_single->image))
                                            <img src="{{ asset($company_single->image)}}" alt="image" style="width:196px; height:120px">
                                            @else
                                            <img src="{{ asset('assets/images/company/default_company.jpg')}}" alt="image" style="width:196px; height:120px">
                                            @endif
                                        </div>
                                        <div class="loan-reviews__review">
                                            <p class="rating"> {{ avgStars($company_single->id) }}</p>
                                            <div class="d-flex gap-2 flex-column">
                                                <div class="star_review">
                                                <p>{!! starsView($company_single->id) !!}</p>
                                                </div>
                                                <p class="fs-small">Average Review</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="loan-reviews__part-two">
                                        <div class="reviews-heading">
                                            <h4 class="reviews-heading__title">{{ $company_single->company_name }}</h4>
                                            <p class="reviews-heading__content">{{ $company_single->company_sub_title }}</p>
                                        </div>
                                        <div class="reviews-inner">
                                            <ul>
                                                <li><i class="bi bi-check2-circle"></i> {{ $company_single->blank_1 }}</li>
                                                <li><i class="bi bi-check2-circle"></i> {{ $company_single->blank_2 }}</li>
                                                <li><i class="bi bi-check2-circle"></i> {{ $company_single->blank_3 }}</li>
                                                <li><i class="bi bi-check2-circle"></i> {{ $company_single->blank_4 }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if(!empty($company_single->description))
                            <div class="section__content wow fadeInUp" data-wow-duration="0.8s">
                            <p>{!! $company_single->description !!}</p>
                            </div>
                            @endif

                            @if(!empty($company_single->terms))
                            <div class="card charges__card flex-column flex-xxl-row wow fadeInUp" data-wow-duration="0.8s">
                            <p>{!! $company_single->terms !!}</p>
                            </div>
                            @endif

                            @if(!empty($company_single->terms))
                            <div class="repayment section__content wow fadeInUp" data-wow-duration="0.8s">
                                <h3 class="section__content-title">Terms & Conditions</h3>
                                <div class="section__content-inner-list">
                                <p>{!! $company_single->terms !!}</p>
                                </div>
                            </div>
                            @endif
                            
                            @if(!empty($company_single->pros) || !empty($company_single->cons))
                            <div class="card pro__card wow fadeInUp" data-wow-duration="0.8s">
                            @if(!empty($company_single->pros))
                                <div class="pro__part">
                                    <h4 class="gap-6 mb-4"><i class="bi bi-check-circle-fill"></i> pro</h4>
                                    <p>{!! $company_single->pros !!}</p>
                                </div>
                            @endif
                            @if(!empty($company_single->cons))
                                <div class="pro__part free">
                                    <h4 class="gap-6 mb-4"><i class="bi bi-x-circle-fill"></i> Cons</h4>
                                    <p>{!! $company_single->cons !!}</p>
                                </div>
                            @endif
                            </div>
                            @endif
                        </div>
    
                        <div class="reviews-details__part wow fadeInUp" data-wow-duration="0.8s">
                            <div class="average-reviews">
                                <h4 class="average-reviews__title">Average Reviews</h4>
                                <div class="gap-9 flex-wrap flex-md-nowrap average-reviews__content">
                                    <div class="average-reviews__card">
                                        <p class="average-reviews__count"><span class="headingTwo">{{ avgStars($company_single->id) }}</span>/5</p>
                                        <div class="star_review">
                                        <p>{!! starsView($company_single->id) !!}</p>
                                        </div>
                                        <p>{{ sumStars($company_single->id) }} Rating</p>
                                    </div>
                                    <div class="progress-area">
                                        <div class="progress-area__part">
                                            <span class="gap-1">5 <i class="bi bi-star-fill star-active"></i></span>
                                            <div class="prog-bar">
                                                <div class="prog-percentage" style="max-width:90%"></div>
                                            </div>
                                            <span>90%</span>
                                        </div>
                                        <div class="progress-area__part">
                                            <span class="gap-1">4 <i class="bi bi-star-fill star-active"></i></span>
                                            <div class="prog-bar">
                                                <div class="prog-percentage" style="max-width:75%"></div>
                                            </div>
                                            <span>75%</span>
                                        </div>
                                        <div class="progress-area__part">
                                            <span class="gap-1">3 <i class="bi bi-star-fill star-active"></i></span>
                                            <div class="prog-bar">
                                                <div class="prog-percentage" style="max-width:67%"></div>
                                            </div>
                                            <span>67%</span>
                                        </div>
                                        <div class="progress-area__part">
                                            <span class="gap-1">2 <i class="bi bi-star-fill star-active"></i></span>
                                            <div class="prog-bar">
                                                <div class="prog-percentage" style="max-width:44%"></div>
                                            </div>
                                            <span>44%</span>
                                        </div>
                                        <div class="progress-area__part">
                                            <span class="gap-1">1 <i class="bi bi-star-fill star-active"></i></span>
                                            <div class="prog-bar">
                                                <div class="prog-percentage" style="max-width:21%"></div>
                                            </div>
                                            <span>21%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="comments-area">
                                <div class="space_between">
                                    <h4>All Reviews</h4>
                                    <div class="gap-2 comments-title">
                                        <p class="sort_by">Sort By : </p>
                                        <select class="form-control cus-sel-active">
                                            <option data-display="new">new</option>
                                            <option value="1">recent</option>
                                            <option value="2">old</option>
                                        </select>
                                    </div>
                                </div>

                                @if(!empty($all_reviews))
                                @foreach($all_reviews as $all)
                                <div class="author__content wow fadeInUp" data-wow-duration="0.8s">
                                    <p class="author__submit-time">{{ $all->updated_at->format('M d, Y') }} <i class="bi bi-dot"></i> {{ $all->updated_at->format('h:i a') }} </p>
                                    <div class="author__text">
                                        <div class="star_review">
                                        @if (!empty($all->total_star))
                                            @for ($i = 0; $i < $all->total_star; $i++)
                                                <i class="bi bi-star-fill star-active"></i>
                                            @endfor
                                            @for ($j = 0; $j < 5-$all->total_star; $j++)
                                                <i class="bi bi-star star-active"></i>
                                            @endfor
                                        @else
                                            @for ($k = 0; $k < 5; $k++)
                                                <i class="bi bi-star star-active"></i>
                                            @endfor
                                        @endif
                                        </div>
                                        <p>{{ $all->description }}</p>  
                                    </div>
                                    <div class="gap-7">
                                        <div class="author__thumbs">
                                            @if(!empty(getUsers($all->user_id)->image))
                                            <img src="{{ asset(getUsers($all->user_id)->image)}}" style="height:60px; width:60px;" alt="image">
                                            @else
                                            <img src="{{ asset('assets/userpanel/assets/images/users/default_user.jpg')}}" style="height:60px; width:60px;" alt="image">
                                            @endif
                                        </div>

                                        <div class="author__info">
                                            <h5 class="author__name">{{ getUsers($all->user_id)->name }}</h5>
                                            <p>Software engineer</p>
                                        </div>
                                    </div>
                                    <div class="feedback">
                                        <div class="gap-9 feedback__content">
                                            <a href="javascript:void(0)" class="like">
                                                <i class="bi bi-hand-thumbs-up"></i>178
                                            </a>
                                            <a href="javascript:void(0)" class="reply">
                                                <i class="bi bi-chat-left-text"></i>Reply
                                            </a>
                                        </div>
                                        <div class="reply__content">
                                            <div class="gap-7">
                                                <div class="author__thumbs">
                                                    <img src="{{ asset('assets/images/author2.png')}}" alt="Author">
                                                </div>
                                                <form method="POST" class="reply__form">
                                                    <div >
                                                        <input type="text" class="form-control" name="reply__text" placeholder="Join the discussion..." required>
                                                        <button type="submit" class="d-none" name="reply__submit">Submit</button>
                                                    </div>
                                                    <span id="reply__commentsMsg"></span> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif

                            </div>

                            @if(!empty(session('userData')))
                            <div class="container">
                                <form method="POST" autocomplete="off" id="insertReview" class="sign-up__form me-lg-4 me-xxl-0 wow fadeInUp" data-wow-duration="0.8s">
                                    @csrf
                                    <input type="hidden" name="user_id" id="user_id" value="{{ session('userData')->id }}">
                                    <input type="hidden" name="category" id="category_id" value="{{ $company_single->category_id }}">
                                    <input type="hidden" name="company" id="company_id" value="{{ $company_single->id }}">

                                    <div class="sign-up__form-part">
                                        <div class="input-single">
                                            <textarea class="form-control" name="review" id="review" placeholder="Write your review..." rows="5"></textarea>
                                        </div>
                                        <div class="input-single mt-2">
                                            <select name="stars" id="stars" class="form-control">
                                                <option value="" disabled selected>Give Stars</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-end mt_32">
                                        <button type="submit" class="btn_theme" name="submit" id="submit">Submit<span></span></button>
                                    </div>

                                </form>
                            </div>
                            @endif

                            <div class="d-flex justify-content-start">
                            <div class="section__cta text-start mt_40">
                                <a href="{{ route('review') }}" class="btn_theme btn_theme_active">See All Reviews <i class="bi bi-arrow-up-right"></i><span></span></a>
                            </div>&nbsp;&nbsp;

                            @if(empty(session('userData')))
                            <div class="section__cta text-start mt_40">
                                <a href="{{ route('signin') }}" class="btn_theme btn_theme_active">Add Review <i class="bi bi-plus"></i><span></span></a>
                            </div>
                            @endif
                            </div>
                        </div>
                        <div class="reviews-details__part wow fadeInUp" data-wow-duration="0.8s">
                            <div class="faq-section" id="faqa">
                                <div class="accordion" id="faq">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-1" aria-expanded="true" aria-controls="faq-accordion-1"> 
                                                How do I apply for a loan through your platform?
                                            </button>
                                        </h5>
                                        <div id="faq-accordion-1" class="accordion-collapse collapse" data-bs-parent="#faq">
                                            <div class="accordion-body">
                                                <p class="mb-0">
                                                    The interest rate depends on several factors, including the type of loan, the borrower's creditworthiness, and current market conditions. Interest rates can be fixed (remain constant) or variable (fluctuate over time).
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
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-3" aria-expanded="true" aria-controls="faq-accordion-3"> 
                                                Can I trust the information provided on your website?
                                            </button>
                                        </h5>
                                        <div id="faq-accordion-3" class="accordion-collapse collapse show" data-bs-parent="#faq">
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
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 btn_sticky">
                    <div class="d-inline-block d-xl-none mb-4">
                        <button class="sidebar_btn"> <i class="bi bi-layout-text-sidebar"></i> <span>Loan Info</span></button>    
                    </div>
                    <div class="sidebar sidebar_fixed sidebar-xl-fixed cus_scrollbar">
                        <div class="sidebar__part">
                            <h4 class="sidebar__part-title">Applying For Review</h4>
                            <div class="minimum-loan mb-4">
                                <p class="minimum-loan__title">Company Details</p>
                            </div>
                            <ul>
                                <li><i class="bi bi-check2-circle"></i>Chat Support</li>
                                <li><i class="bi bi-check2-circle"></i>Ebility 24/7</li>
                                <li><i class="bi bi-check2-circle"></i>Company Register</li>
                                <li><i class="bi bi-check2-circle"></i>Location</li>
                                <li><i class="bi bi-check2-circle"></i>Review and Submit</li>
                            </ul>
                            <div class="text-center mt_40">
                                <a href="{{ !empty($company_single->website) ? $company_single->website : '' }}" target="_blank" class="btn_theme btn_theme_active w-100">Visit Site <i class="bi bi-arrow-up-right"></i><span></span></a>
                                <p class="d-flex align-items-center justify-content-center mt_12"> <i class="bi bi-dot"> </i>Terms & Conditions Apply</p>
                                <div class="gap-3 mt-4 justify-content-center">
                                    <a href="#" class="btn_theme social_box btn_bg_white"> <i class="bi bi-heart"></i> <span></span> </a>    
                                    <a href="#" class="btn_theme social_box btn_bg_white"> <i class="bi bi-arrow-left-right"></i> <span></span> </a>    
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__part">
                            <h4 class="sidebar__part-title">Share with</h4>
                            <div class="social mt_32">
                                <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-facebook"></i><span></span></a>
                                <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-twitter"></i><span></span></a>
                                <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-pinterest"></i><span></span></a>
                                <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-twitch"></i><span></span></a>
                                <a href="#" class="btn_theme social_box btn_bg_white"><i class="bi bi-skype"></i><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- loan-reviews-details end -->

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    $(document).ready(function(){
        $('#insertReview').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                
                var formData = $(this).serialize(); // Get the form data

                $.ajax({
                    url: '{{ route('addReview') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#insertReview')[0].reset(); // Reset the form
                        toastr.success(response.message);
                        window.location.reload();
                    },
                    error: function(response) {
                        let errors = response.responseJSON.errors;
                        if (response.status === 422) {
                            let errors = response.responseJSON.errors;
                            $.each(errors, function(field, messages) {
                                toastr.error(messages[0]); // Display first error message for each field
                            });
                        } else {
                            toastr.error('An unexpected error occurred.'); // Display a generic error message
                        }
                    }
                });
            });
    });
</script>