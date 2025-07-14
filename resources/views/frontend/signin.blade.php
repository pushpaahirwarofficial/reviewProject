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
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Sign In</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign In</li>
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

                <!-- signin start -->
                    <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form me-lg-4 me-xxl-0">
                        @csrf
                        <h3 class="sign-up__title">Welcome Back!</h3>
                        <p class="sign-up__sub-title mb_40">Sign in to your account and join us</p>
                        <div class="sign-up__form-part">
                            <div class="input-single">
                                <label class="label" for="email">Enter Your Email ID</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email...">
                            </div>
                            <div class="input-single">
                                <label class="label" for="password">Enter Your Password</label>
                                <div class="input-pass">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password...">
                                    <span class="password-eye-icon"></span>
                                </div>
                            </div>
                            <div class="fs-small forget-pass text-end" id="forgetPassword">Forget password</div>
                        </div>
                        <p class="have_account">Do you have an account? <a href="{{ route('signup') }}" class="signin">Signup</a></p>
                        <span id="msg"></span> 
                        <button type="submit" class="btn_theme mt_32" name="submit" id="submit">Sign In<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                <!-- signin end -->

                <!-- forget password start -->
                    <form method="POST" autocomplete="off" id="forgetPasswordForm" class="sign-up__form me-lg-4 me-xxl-0">
                        @csrf
                        <h3 class="sign-up__title">Welcome Back!</h3>
                        <p class="sign-up__sub-title mb_40">Reset Your New Password</p>
                        <div class="sign-up__form-part">
                            <div class="input-single">
                                <label class="label" for="email">Enter Your Email ID</label>
                                <input type="text" class="form-control" name="email" id="email_send" placeholder="Enter Your Email...">
                            </div>
                            <div class="fs-small forget-pass text-end" id="goBackForSignin">Go Back for Signin</div>
                        </div>
                        <span id="msg"></span> 
                        <button type="submit" class="btn_theme mt_32" name="submit" id="submit_send">Send Message<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                <!-- forget password end -->

                <!-- otp start -->
                    <form method="POST" autocomplete="off" id="otpForm" class="sign-up__form me-lg-4 me-xxl-0">
                        @csrf
                        <h3 class="sign-up__title">Welcome Back!</h3>
                        <div class="sign-up__form-part">
                            <div class="input-single">
                                <label class="label" for="password">Enter Your OTP</label>
                                <div class="input-pass">
                                    <input type="text" class="form-control" name="email1" id="email1" readonly>
                                    <input type="otp" class="form-control" name="otp" id="otp" placeholder="Enter Your OTP...">
                                </div>
                            </div>
                            <div class="fs-small forget-pass text-end" id="goBackForOtp">Go Back</div>
                        </div>
                        <span id="msg"></span> 
                        <button type="submit" class="btn_theme mt_32" name="submit" id="submit_otp">Send OTP<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                <!-- otp end -->

                <!-- new password start -->
                    <form method="POST" autocomplete="off" id="newPasswordForm" class="sign-up__form me-lg-4 me-xxl-0">
                        @csrf
                        <h3 class="sign-up__title">Welcome Back!</h3>
                        <div class="sign-up__form-part">
                            <div class="input-single">
                                <label class="label" for="email">Enter Your New Password</label>
                                <input type="passowrd" class="form-control" name="new_pass" id="new_pass" placeholder="Enter Your New Password...">
                                <span class="password-eye-icon"></span>
                            </div>
                            <div class="input-single">
                                <label class="label" for="email">Enter Your Confirmed Password</label>
                                <input type="passowrd" class="form-control" name="confirm_pass" id="confirm_pass" placeholder="Enter Your confirm Password...">
                                <span class="password-eye-icon"></span>
                            </div>
                            <div class="fs-small forget-pass text-end" id="goBack">Go Back for Signin</div>
                        </div>
                        <span id="msg"></span> 
                        <button type="submit" class="btn_theme mt_32" name="submit" id="submit_pass">Reset Password<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                <!-- new password end -->

                </div>
                <div class="col-12 col-sm-7 col-lg-5 col-xxl-5">
                    <div class="sign-up__thumb previewShapeY unset-xxl">
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
                url: "{{ route('login') }}", // Route defined in web.php
                method: "POST",
                data: $(this).serialize(), // Serialize the form data
                success: function(response) {
                    $('#submit').attr('disabled', false);
                    $('#frmContactus')[0].reset(); // Reset the form on success
                    toastr.success(response.message); 
                    window.location.href = "{{ route('userDashboard') }}"; // Replace with your target route
                },
                error: function(response) {
                    $('#submit').attr('disabled', false);
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

    $(document).ready(function() {
        $('#forgetPassword').on('click', function() {
            $('#frmContactus').hide(); // Show or hide the form
            $('#forgetPasswordForm').show(); // Show or hide the form
            $('#otpForm').hide(); // Show or hide the form
            $('#newPasswordForm').hide(); // Show or hide the form
        });
    });

    $(document).ready(function() {
        $('#goBackForSignin').on('click', function() {
            $('#frmContactus').show(); // Show or hide the form
            $('#forgetPasswordForm').hide(); // Show or hide the form
            $('#otpForm').hide(); // Show or hide the form
            $('#newPasswordForm').hide(); // Show or hide the form
        });
    });

    $(document).ready(function() {
        $('#goBackForOtp').on('click', function() {
            $('#frmContactus').hide(); // Show or hide the form
            $('#forgetPasswordForm').show(); // Show or hide the form
            $('#otpForm').hide(); // Show or hide the form
            $('#newPasswordForm').hide(); // Show or hide the form

        });
    });

    $(document).ready(function() {
        $('#goBack').on('click', function() {
            $('#frmContactus').show(); // Show or hide the form
            $('#forgetPasswordForm').hide(); // Show or hide the form
            $('#otpForm').hide(); // Show or hide the form
            $('#newPasswordForm').hide(); // Show or hide the form

        });
    });


    $(document).ready(function() {
        $('#forgetPasswordForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            $('#submit_send').attr('disabled', true);
            $.ajax({
                url: "{{ route('sendOtp') }}", // Route defined in web.php
                method: "POST",
                data: $(this).serialize(), // Serialize the form data
                success: function(response) {
                    $('#submit_send').attr('disabled', false);
                    $('#forgetPasswordForm')[0].reset(); // Reset the form on success
                    toastr.success(response.message); 
                    $('#forgetPasswordForm').hide(); // Show or hide the form
                    $('#otpForm').show(); // Show or hide the form
                    $('#email1').val(response.email_id);
                },
                error: function(response) {
                    $('#submit_send').attr('disabled', false);
                    let errors = response.responseJSON.errors;
                    if (response.status === 422) {
                        let errors = response.responseJSON.errors;
                        $.each(errors, function(field, messages) {
                            toastr.error(messages[0]); // Display first error message for each field
                        });
                    } else {
                        toastr.error('An Email Id not exist.'); // Display a generic error message
                    }

                }
            });
        });
    });


    $(document).ready(function() {
        $('#otpForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            $('#submit_otp').attr('disabled', true);
            $.ajax({
                url: "{{ route('verifyOtp') }}", // Route defined in web.php
                method: "POST",
                data: $(this).serialize(), // Serialize the form data
                success: function(response) {
                    $('#submit_otp').attr('disabled', false);
                    $('#otpForm')[0].reset(); // Reset the form on success
                    toastr.success(response.message); 
                    $('#otpForm').hide(); // Show or hide the form
                    $('#newPasswordForm').show(); // Show or hide the form
                },
                error: function(response) {
                    $('#submit_otp').attr('disabled', false);
                    let errors = response.responseJSON.errors;
                    if (response.status === 422) {
                        let errors = response.responseJSON.errors;
                        $.each(errors, function(field, messages) {
                            toastr.error(messages[0]); // Display first error message for each field
                        });
                    } else {
                        toastr.err('An Email Id not exist.'); // Display a generic error message
                    }

                }
            });
        });
    });


    $(document).ready(function() {
        $('#newPasswordForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            $('#submit_pass').attr('disabled', true);
            $.ajax({
                url: "{{ route('resetPassword') }}", // Route defined in web.php
                method: "POST",
                data: $(this).serialize(), // Serialize the form data
                success: function(response) {
                    if(response.status == 'success') {
                        $('#submit_pass').attr('disabled', false);
                        $('#newPasswordForm')[0].reset(); // Reset the form on success
                        toastr.success(response.message); 
                        $('#otpForm').hide(); // Show or hide the form
                        $('#newPasswordForm').hide(); // Show or hide the form
                        $('#frmContactus').show(); // Show or hide the form
                    } else {
                        $('#submit_pass').attr('disabled', false);
                        $('#newPasswordForm')[0].reset(); // Reset the form on success
                        toastr.error(response.message); 
                        $('#otpForm').hide(); // Show or hide the form
                        $('#newPasswordForm').show(); // Show or hide the form
                    }

                },
                error: function(response) {
                    $('#submit_pass').attr('disabled', false);
                    let errors = response.responseJSON.errors;
                    if (response.status === 422) {
                        let errors = response.responseJSON.errors;
                        $.each(errors, function(field, messages) {
                            toastr.error(messages[0]); // Display first error message for each field
                        });
                    } else {
                        toastr.error('Something went wrong.'); // Display a generic error message
                    }

                }
            });
        });
    });

</script>

