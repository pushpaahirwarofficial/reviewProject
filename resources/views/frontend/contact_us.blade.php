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
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">contact Us</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/contact_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
   
    <!-- contact start -->
    <section class="sign-up contact section">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-7 col-xxl-8">
                    <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form wow fadeInDown" data-wow-duration="0.8s">
                        <h3 class="contact__title wow fadeInDown" data-wow-duration="0.8s">Get in touch with us.</h3>
                        <div class="sign-up__form-part">
                            <div class="input-group">
                                <div class="input-single">
                                    <label class="label" for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name..." required>
                                </div>
                                <div class="input-single">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email..." required>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-single">
                                    <label class="label" for="phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Your Number..." required>
                                </div>
                                <div class="input-single">
                                    <label class="label">Country</label>
                                    <select class="form-control cus-sel-active">
                                        <option data-display="Country...">Country...</option>
                                        <option value="1">United States</option>
                                        <option value="2">Australia</option>
                                        <option value="4">Canada</option>
                                        <option value="4">France</option>
                                      </select>
                                </div>
                            </div>
                            <div class="input-single">
                                <label class="label" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="8" placeholder="Enter Your Message..." required></textarea>
                            </div>
                        </div>
                        <span id="msg"></span> 
                        <button type="submit" class="btn_theme btn_theme_active mt_40 " name="submit" id="submit">Send Message <i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                </div>
                <div class="col-12 col-lg-5 col-xxl-4">
                    <div class="more-help wow fadeInUp" data-wow-duration="0.8s">
                        <h3 class="contact__title wow fadeInUp" data-wow-duration="0.8s">Need more help?</h3>
                        <div class="more-help__content">
                            <div class="card card--small">
                                <div class="card--small-icon">
                                    <i class="bi bi-telephone"></i> 
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Call Now</h5>
                                    <div class="gap-1 flex-column">
                                        <a href="tel:+1234567891" class="card--small-call">(123) 456-7891</a>
                                        <a href="tel:+1234567891" class="card--small-call">(907) 456-7891</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--small">
                                <div class="card--small-icon">
                                    <i class="bi bi-envelope-open"></i> 
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Email Address</h5>
                                    <div class="gap-1 flex-column">
                                        <a href="https://pixner.net/cdn-cgi/l/email-protection#21484f474e614459404c514d440f424e4c" class="card--small-call"><span class="__cf_email__" data-cfemail="61080f070e210419000c110d044f020e0c">[email&#160;protected]</span></a>
                                        <a href="https://pixner.net/cdn-cgi/l/email-protection#a1c8cfc7cee1c4d9c0ccd1cdc48fc2cecc" class="card--small-call"><span class="__cf_email__" data-cfemail="f891969e97b89d80999588949dd69b9795">[email&#160;protected]</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--small">
                                <div class="card--small-icon">
                                    <i class="bi bi-geo-alt"></i> 
                                </div>
                                <div class="card--small-content">
                                    <h5 class="card--small-title">Location</h5>
                                    <div class="gap-1 flex-column">
                                        <p>Royal Ln. Mesa, New Jersey 45463</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->   


@endsection