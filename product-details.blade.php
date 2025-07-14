<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ $product->title }}
	</title>
	<meta name="description" content="{{ $product->description }}">
	<meta name="keyword" content="{{ $product->keyword }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- =========================
        Loding All Stylesheet
    ============================== -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/rateyo.css') }}">
	<link rel="stylesheet" href="{{ asset('css/lightslider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/megamenu.css') }}">

	<!-- Loding Main Theme Style -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Header Loding JS Script -->
	<script src="{{ asset('js/modernizr.js') }}"></script>
</head>

<style>
.wd-shop-btn:hover {
    background: #232f3e;
    color:white;
    border: 0;
    font-size: 18px;
    font-weight: 700;
    padding: 11px 21px;
    border: 1px solid;
    border-color: transparent;
}
@media (max-width: 768px) {
    .wd-since-month canvas, .wd-since-day canvas, .wd-since-year canvas {
        width: 67px !important;
        height: 67px !important;
    }
}
       .price-history-section .total-price {
        position: absolute;
        top: 12px;
        left: 49px;
        transform: translate(-50%, 50%);
        font-size: 18px;
        color: #0065cd;
        font-weight: 300;
    }
/* Base styles for both circles */
.circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 10px;
    margin-bottom: 20px;
}

/* Specific styling for the first circle */
.wd-since-day {
    
}

/* Specific styling for the second circle */
.main-price {
  
}

.since-price {
    margin: 0;
    font-size: 12px;
}

/* For larger screens (Desktop) */
@media (min-width: 768px) {
    .price-box {
        position: relative;
    }
  

    .second-circle {
        position: absolute;
        top: 58%;
        left: 17%;
    }
}

/* Responsive styles for mobile */
@media (max-width: 767px) {
    /* Reset the positioning for the second circle to stack vertically */
    .price-box {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .second-circle {
        position: relative;
        top: unset;
        left: unset;
        margin-top: 20px;
    }

    /* Adjust circle size for smaller screens */
    .circle {
        width: 80px;
        height: 80px;
        margin: 10px;
    }

    .since-price {
        font-size: 10px; /* Adjust text size for mobile */
    }
}


/* Responsive styles for mobile */
@media (max-width: 767px) {
    .second-circle {
        position: absolute!important;
       top: 27% !important;
        left: 58% !important;
    }

    /* Optionally, you can adjust the circle size on mobile */
    .circle {
        width: 80px;
        height: 80px;
    }

    .since-price {
        font-size: 10px; /* Adjust text size for mobile */
    }
}

@media (max-width: 768px) {
    .wd-since-month canvas, .wd-since-day canvas, .wd-since-year canvas {
        width: 93px !important;
        height: 93px !important;
    }
}
</style>

<body>
	@include('include/header')
	<!-- =========================
        Product Details Section
    ============================== -->
	<section class="product-details">
		<div class="container">
			<div class="row">
				<div class="col-12 p0">
					<div class="page-location">
					
					</div>
				</div>
				<div class="col-12 product-details-section" style="height: 400px !important;">
					<!-- ====================================
				        Product Details Gallery Section
				    ========================================= -->
					<div class="row">
						<div class="product-gallery col-12 col-md-12 col-lg-6">
							<!-- ====================================
						        Single Product Gallery Section
						    ========================================= -->
							<div class="row">
								<div class="col-md-12 product-slier-details" style="padding-left: 0px;">
									<ul id="lightSlider" style="height: 400px !important;">
										<li data-thumb="{{ asset($product->{'product_page_img'}) }}">
											<img class="figure-img img-fluid" src="{{ asset($product->{'product_page_img'}) }}" alt="product-img" style="max-height: 400px;  height: auto;" />
										</li>
									
									</ul>
								</div>
							</div>
						</div>
						<div class="col-6 col-12 col-md-12 col-lg-6">
							<div class="product-details-gallery">
								<div class="list-group">
									<h1 class="list-group-item-heading product-title">
										{{ $product->product_name }}
									</h1>
									<div class="media">
										<div class="media-left media-middle">
											<div class="rating">
												<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="media-body">
											<p>3.7/5 <span class="product-ratings-text"> -1747 Ratings</span></p>
										</div>
									</div>
								</div>
								<div class="list-group content-list">
									<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 100% Original product</p>
									
								</div>
							</div>
							<div class="product-store row">
								<div class="col-12 ">
									<div class="row">
									
										<!-- <div class="col-5 store-border-price text-center">
											<div class="price">
												<p>$234</p>
											</div>
										</div> -->
										<div class="col-4 ">
											<a href="{!! $product->url !!}" target="_blank" class="btn btn-primary wd-shop-btn pull-right">
												Buy it now
											</a>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="wd-tab-section">
						<div class="bd-example bd-example-tabs">
							<ul class="nav nav-pills mb-3 wd-tab-menu" id="pills-tab" role="tablist">
								<li class="nav-item col-6 col-md">
									<a class="nav-link active" id="description-tab" data-toggle="pill" href="#description-section" role="tab" aria-controls="description-section" aria-expanded="true">Description</a>
								</li>
								<li class="nav-item col-6 col-md">
									<a class="nav-link" id="full-specifiction-tab" data-toggle="pill" href="#full-specifiction" role="tab" aria-controls="full-specifiction" aria-expanded="false">Full Specifiction</a>
								</li>
								<li class="nav-item col-6 col-md">
									<a class="nav-link" id="reviews-tab" data-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-expanded="false">Reviews</a>
								</li>
								<!--<li class="nav-item col-6 col-md">-->
								<!--	<a class="nav-link" id="price-history-tab" data-toggle="pill" href="#price-history" role="tab" aria-controls="price-history" aria-expanded="false">Price History</a>-->
								<!--</li>-->
							</ul>
						<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade active show" id="description-section" role="tabpanel" aria-labelledby="description-tab" aria-expanded="true">
									<div class="product-tab-content">
										<!-- <h4 class="description-title">{{ $product->{'title'} }}</h4> -->
										{!! $product->custom_content !!}

									</div>
									</div>
							<div class="tab-pane fade" id="full-specifiction">
                                            <div class="row">
    											<div class="col-12 col-md-7">
    												<h2 class="specifiction-title">Specifiction</h2>
    												<ul class="list-group specifiction-list">
    													<li class="list-group-item">Brand Name : <span>Asus</span></li>
    													<li class="list-group-item">Google Play: <span>Yes</span></li>
    													<li class="list-group-item">Talk Time: <span>4-6h</span></li>
    													<li class="list-group-item">Size: <span>154.6x75.2x8.35mm</span></li>
    													<li class="list-group-item">Feature: <span>Gravity Response,MP3
    															Playback,Touchscreen,GPS</span></li>
    													<li class="list-group-item">CPU: <span>Octa Core</span></li>
    													<li class="list-group-item">ROM: <span>16G</span></li>
    													<li class="list-group-item">Release Date : <span>2018</span></li>
    													<li class="list-group-item">Unlock Phones: <span>Yes</span></li>
    													<li class="list-group-item">Battery Type: <span>Not Detachable</span>
    													</li>
    													<li class="list-group-item">Display Resolution: <span>1920x1080</span>
    													</li>
    													<li class="list-group-item">Battery Capacity(mAh): <span>4000mAh</span>
    													</li>
    													<li class="list-group-item">CPU Manufacturer: <span>Qualcomm</span></li>
    													<li class="list-group-item">SlotsDesign: <span>Bar</span></li>
    												</ul>
										    	</div>

                                            </div>
							</div>
							<div class="tab-pane fadereviews-section" id="reviews">
								<div class="row">
									<div class="col-12">
									
										<div class="reviews-market">
											<div class="reviews-title text-center">
											<hr>
												<h3>Ratings and Reviews From Market</h3>
											<hr>
											</div>
										
											<div class="review-our-product text-left row">
												<div class="col-12 col-lg-6 reviews-title">
													<h3>Review to our Blurb</h3>
												</div>
												<div class="col-12 col-lg-6 text-right display-none-md">
													<div class="filter">
														<div class="btn-group" role="group">
															<div class="d-flex">
																<p>View as:</p>
																<button id="btnGroupDropwdreview" type="button" class="btn btn-secondary dropdown-toggle filter-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	New
																</button>
																<div class="dropdown-menu" aria-labelledby="btnGroupDropwdreview" style="position: absolute; transform: translate3d(50px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
																	<a class="dropdown-item" href="#">Camara</a>
																	<a class="dropdown-item" href="#">Joystick</a>
																</div>
															</div>
														</div>
														<button type="button" class="btn btn-primary btn-sm add-review-btn">Add your
															review</button>
													</div>
												</div>
											</div>

											<!-- 
										=================================
										Review Comment Section
										=================================
									-->
											<div class="review-comment-section">
												<div class="row">
													<div class="col-12 col-md-12 col-lg-12 col-xl-8">
														<div class="reviews-title leave-opinion">
															<h3>Leave your Opinion here</h3>
														</div>
														<form id="review-form" method="GET">
														  @csrf
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="first" class="color-black">Name
																			*</label>
																		<input type="text" class="form-control" placeholder="" id="first" name="first">
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="form-group">
																		<label for="last" class="color-black">Email
																			*</label>
																		<input type="email" class="form-control" placeholder="" id="last" name="email">
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="form-group">
																		<label for="last" class="color-green">Prons</label>
																		<textarea class="form-control col-md-12" id="exampleFormControlTextarea1" name="pros" placeholder="Write your Opinion here ... "></textarea>
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="form-group">
																		<label for="exampleFormControlTextarea2" class="color-red">Cons</label>
																		<textarea class="form-control col-12" id="exampleFormControlTextarea2" name="cons" placeholder="Write your Opinion here ... "></textarea>
																	</div>
																</div>

																<!--<div class="col-12 col-md-12 product-rating-area">-->
																<!--	<div class="product-rating-ph">-->
																<!--		<div class="rating-area">-->
																<!--			<div class="d-flex justify-content-between">-->
																<!--				<p>Company</p>-->
																<!--				<div class="rating">-->
																<!--					<a href="#"><i class="fa fa-star cat-1" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-2" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-3" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-4" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-5" aria-hidden="true"></i></a>-->
																<!--				</div>-->
																<!--			</div>-->
																<!--			<div class="rating-slider-1"></div>-->
																<!--		</div>-->
																<!--		<div class="rating-area">-->
																<!--			<div class="d-flex justify-content-between">-->
																<!--				<p>Price</p>-->
																<!--				<div class="rating">-->
																<!--					<a href="#"><i class="fa fa-star cat-2-1" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-2-2" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-2-3" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-2-4" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-2-5" aria-hidden="true"></i></a>-->
																<!--				</div>-->
																<!--			</div>-->
																<!--			<div class="rating-slider-2"></div>-->
																<!--		</div>-->
																<!--		<div class="rating-area">-->
																<!--			<div class="d-flex justify-content-between">-->
																<!--				<p>Quantity</p>-->
																<!--				<div class="rating">-->
																<!--					<a href="#"><i class="fa fa-star cat-3-1" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-3-2" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-3-3" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-3-4" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-3-5" aria-hidden="true"></i></a>-->
																<!--				</div>-->
																<!--			</div>-->
																<!--			<div class="rating-slider-3"></div>-->
																<!--		</div>-->
																<!--		<div class="rating-area">-->
																<!--			<div class="d-flex justify-content-between">-->
																<!--				<p>Marketing</p>-->
																<!--				<div class="rating">-->
																<!--					<a href="#"><i class="fa fa-star cat-4-1" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-4-2" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-4-3" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-4-4" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-4-5" aria-hidden="true"></i></a>-->
																<!--				</div>-->
																<!--			</div>-->
																<!--			<div class="rating-slider-4"></div>-->
																<!--		</div>-->
																<!--		<div class="rating-area">-->
																<!--			<div class="d-flex justify-content-between">-->
																<!--				<p>Review</p>-->
																<!--				<div class="rating">-->
																<!--					<a href="#"><i class="fa fa-star cat-5-1" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-5-2" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-5-3" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-5-4" aria-hidden="true"></i></a>-->
																<!--					<a href="#"><i class="fa fa-star cat-5-5" aria-hidden="true"></i></a>-->
																<!--				</div>-->
																<!--			</div>-->
																<!--			<div class="rating-slider-5"></div>-->
																<!--		</div>-->
																<!--	</div>-->
																<!--</div>-->

																<div class="col-md-12">
																	<button type="submit" class="btn btn-primary review-comment"><i class="fa fa-check" aria-hidden="true"></i> Post
																		Review</button>
																</div>
															</div>
														</form>
													</div>

													<!--<div class="col-12 col-md-12 col-lg-12 col-xl-4 product-rating-area">-->
													<!--	<div class="product-rating-list product-rating-desktop">-->
													<!--		<div class="rating-area">-->
													<!--			<div class="d-flex justify-content-between">-->
													<!--				<p>Company</p>-->
													<!--				<div class="rating">-->
													<!--					<a href="#"><i class="fa fa-star cat-1" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-2" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-3" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-4" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-5" aria-hidden="true"></i></a>-->
													<!--				</div>-->
													<!--			</div>-->
													<!--			<div class="rating-slider-1"></div>-->
													<!--		</div>-->
													<!--		<div class="rating-area">-->
													<!--			<div class="d-flex justify-content-between">-->
													<!--				<p>Price</p>-->
													<!--				<div class="rating">-->
													<!--					<a href="#"><i class="fa fa-star cat-2-1" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-2-2" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-2-3" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-2-4" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-2-5" aria-hidden="true"></i></a>-->
													<!--				</div>-->
													<!--			</div>-->
													<!--			<div class="rating-slider-2"></div>-->
													<!--		</div>-->
													<!--		<div class="rating-area">-->
													<!--			<div class="d-flex justify-content-between">-->
													<!--				<p>Quality</p>-->
													<!--				<div class="rating">-->
													<!--					<a href="#"><i class="fa fa-star cat-3-1" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-3-2" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-3-3" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-3-4" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-3-5" aria-hidden="true"></i></a>-->
													<!--				</div>-->
													<!--			</div>-->
													<!--			<div class="rating-slider-3"></div>-->
													<!--		</div>-->
													<!--		<div class="rating-area">-->
													<!--			<div class="d-flex justify-content-between">-->
													<!--				<p>Marketing</p>-->
													<!--				<div class="rating">-->
													<!--					<a href="#"><i class="fa fa-star cat-4-1" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-4-2" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-4-3" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-4-4" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-4-5" aria-hidden="true"></i></a>-->
													<!--				</div>-->
													<!--			</div>-->
													<!--			<div class="rating-slider-4"></div>-->
													<!--		</div>-->
													<!--		<div class="rating-area">-->
													<!--			<div class="d-flex justify-content-between">-->
													<!--				<p>Review</p>-->
													<!--				<div class="rating">-->
													<!--					<a href="#"><i class="fa fa-star cat-5-1" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-5-2" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-5-3" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-5-4" aria-hidden="true"></i></a>-->
													<!--					<a href="#"><i class="fa fa-star cat-5-5" aria-hidden="true"></i></a>-->
													<!--				</div>-->
													<!--			</div>-->
													<!--			<div class="rating-slider-5"></div>-->
													<!--		</div>-->
													<!--	</div>-->
													<!--</div>-->
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade specifiction-section" id="price-history">
										<div class="row">
											<div class="col-12 col-md-5">
												<h2 class="specifiction-title">Specifiction</h2>
												<ul class="list-group specifiction-list">
													<li class="list-group-item">Brand Name : <span>Asus</span></li>
													<li class="list-group-item">Google Play: <span>Yes</span></li>
													<li class="list-group-item">Talk Time: <span>4-6h</span></li>
													<li class="list-group-item">Size: <span>154.6x75.2x8.35mm</span></li>
													<li class="list-group-item">Feature: <span>Gravity Response,MP3
															Playback,Touchscreen,GPS</span></li>
													<li class="list-group-item">CPU: <span>Octa Core</span></li>
													<li class="list-group-item">ROM: <span>16G</span></li>
													<li class="list-group-item">Release Date : <span>2018</span></li>
													<li class="list-group-item">Unlock Phones: <span>Yes</span></li>
													<li class="list-group-item">Battery Type: <span>Not Detachable</span>
													</li>
													<li class="list-group-item">Display Resolution: <span>1920x1080</span>
													</li>
													<li class="list-group-item">Battery Capacity(mAh): <span>4000mAh</span>
													</li>
													<li class="list-group-item">CPU Manufacturer: <span>Qualcomm</span></li>
													<li class="list-group-item">SlotsDesign: <span>Bar</span></li>
												</ul>
											</div>
											<div class="col-12 col-md-7 price-history-section">
												<h2 class="price-history-title">Price History</h2>
												<p class="price-history-subtitle">Percent Change In Price</p>
												<div class="col-12">
													<div class="row">
														<div class="col-12 col-md-12 col-lg-12 col-xl-4 price-history-box">
                                                            <div class="row price-box" style="position: relative; padding-left: 45px;">
                                                                <div class="col-7 col-lg-2 col-xl-5 p0">
                                                                    <div class="wd-since-month">
                                                                        <strong class="total-price">52%</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7 col-lg-6 col-lg-7 p0 second-circle" style="position: absolute; top: 58%; left: 34%;">
                                                                    <div class="main-price">
                                                                        <strong>52.06%</strong>
                                                                        <p class="since-price">Last Month</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

														<div class="col-12 col-md-12 col-lg-12 col-xl-4 price-history-box">
                                                            <div class="row price-box" style="position: relative; padding-left: 45px;">
                                                                <div class="col-7 col-lg-2 col-xl-5 p0">
                                                                    <div class="wd-since-month">
                                                                        <strong class="total-price">10%</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7 col-lg-6 col-lg-7 p0 second-circle" style="position: absolute; top: 58%; left: 34%;">
                                                                    <div class="main-price">
                                                                        <strong>20.06%</strong>
                                                                        <p class="since-price">Last 10 days</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
															<div class="col-12 col-md-12 col-lg-12 col-xl-4 price-history-box">
                                                            <div class="row price-box" style="position: relative; padding-left: 45px;">
                                                                <div class="col-7 col-lg-2 col-xl-5 p0">
                                                                    <div class="wd-since-month">
                                                                        <strong class="total-price">25%</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-7 col-lg-6 col-lg-7 p0 second-circle" style="position: absolute; top: 58%; left: 34%;">
                                                                    <div class="main-price">
                                                                        <strong>25.06%</strong>
                                                                        <p class="since-price">Last Month</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
													</div>
												</div>

											
											</div>
										
										</div>


									</div>
									<section id="product-ebay">
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<div class="section-title-center text-left">
														<h2 class="title pl-0">Related Products</h2>
													</div>
												</div>

                                        <div class="row" id="">
                                            @foreach ($relatedProducts as $relatedProduct)
                                            <div class="col-md-4 col-sm-6 mb-4">
                                                <figure class="figure product-box" data-wow-delay="0ms">
                                                    <div class="product-box-img">
                                                        <a href="javascript:void(0)">
                                                            <img src="{{ asset($relatedProduct->{'quick_view_img_1'}) }}" class="figure-img img-fluid" alt="Product Img">
                                                        </a>
                                                    </div>
                                                    <div class="quick-view-btn">
                                                        <div class="compare-btn">
                                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#quickViewModal1"><i class="fa fa-eye" aria-hidden="true"></i> Quick view</button>
                                                        </div>
                                                    </div>
                                                    <figcaption class="figure-caption text-center">
                                                        <span class="badge badge-secondary wd-badge text-uppercase">New</span>
                                                        <div class="wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="price-start">
                                                            <p>Price start from <strong class="active-color"><u>$80.00</u> -
                                                                <u>$75.00</u></strong></p>
                                                        </div>
                                                        <div class="content-excerpt">
                                                            <p><a href="javascript:void(0)">{{ $relatedProduct->product_name }}</a></p>
                                                        </div>
                                                        <div class="rating">
                                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="compare-btn">
                                                            <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-exchange" aria-hidden="true"></i> Add to compare</a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            @endforeach
                                        </div>
												

											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>



	</section>





	<!-- =========================
        Footer Section
    ============================== -->
	@include('include/footer')
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('js/jquery.nav.js') }}"></script>
	<!-- <script src="{{ asset('js/jquery.nicescroll.js') }}"></script> -->
	<script src="{{ asset('js/jquery.rateyo.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('js/mobile.js') }}"></script>
	<script src="{{ asset('js/lightslider.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/circle-progress.min.js') }}"></script>
	<script src="{{ asset('js/waypoints.min.js') }}"></script>

	<script src="{{ asset('js/simplePlayer.js') }}"></script>

	<script src="{{ asset('js/main.js') }}"></script>

<script>

  $(document).ready(function () {
    // Capture form submission
    $('#review-form').on('submit', function (e) {
      e.preventDefault(); // Prevent default form submission

      // Send AJAX request
      $.ajax({
        url: "{{ route('advertiser.postReview') }}", // Replace with your route
        type: 'GET',
        data: $('#review-form').serialize(),
        success: function (response) {
          alert('Review submitted successfully!');
          console.log(response);
        },
        error: function (xhr, status, error) {
          alert('An error occurred while submitting the review.');
          console.error(error);
        }
      });
    });
  });
  
</script>
	

	
</body>

</html>