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
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Sign Up</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/signin_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
  
    <!-- sign-up start -->
    <section class="sign-up section">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form me-lg-4 me-xxl-0 wow fadeInUp" data-wow-duration="0.8s">
                        @csrf
                        <h3 class="sign-up__title wow fadeInUp" data-wow-duration="0.8s">Let’s Get Started!</h3>
                        <p class="sign-up__sub-title mb_40">Please enter your email address to join us</p>
                        <div class="sign-up__form-part">
                            <div class="input-group">
                                <div class="input-single">
                                    <label class="label" for="fname">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name..." >
                                </div>
                                <div class="input-single">
                                    <label class="label" for="lname">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name..." >
                                </div>
                            </div>
                            <div class="input-single">
                                <label class="label" for="email">Enter Your Email ID</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email..." >
                            </div>
                            <div class="input-single">
                                <label class="label" for="password">Enter Your Password</label>
                                <div class="input-pass">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password..." >
                                    <span class="password-eye-icon"></span>
                                </div>
                            </div>
                        </div>
                        <p class="have_account mt_24">Do you have an account? <a href="{{ route('signin') }}" class="signin">Signin</a></p>
                        <span id="msg"></span> 
                        <button type="submit" class="btn_theme mt_32" name="submit" id="submit">Sign Up<i class="bi bi-arrow-up-right"></i><span></span></button> 
                    </form>
                </div>
                <div class="col-12 col-sm-7 col-lg-5 col-xxl-5">
                    <div class="sign-up__thumb previewShapeY unset-xxl wow fadeInDown" data-wow-duration="0.8s">
                        <img src="assets/images/sign_up.png" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign-up end -->   

@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#frmContactus').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            $('#submit').attr('disabled', true);
            $.ajax({
                url: "{{ route('registration') }}", // Route defined in web.php
                method: "POST",
                data: $(this).serialize(), // Serialize the form data
                success: function(response) {
                    $('#submit').attr('disabled', false);
                    $('#frmContactus')[0].reset(); // Reset the form on success
                    toastr.success(response.message); 
                    // Optionally, display a success message
                    window.location.href = "{{ route('signin') }}"; // Replace with your target route
                },
                error: function(response) {
                    $('#submit').attr('disabled', false);
                    let errors = response.responseJSON.errors;
                    if (response.status === 422) {
                        let errors = response.responseJSON.errors;
                        $.each(errors, function(field, messages) {
                            // Assuming `field` is in the format 'key' and messages is an array
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
