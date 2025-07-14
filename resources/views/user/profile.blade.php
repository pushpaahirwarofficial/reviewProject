@extends('layout.user_app')
@section('usertitle') User Profile @endsection
@section('keywords') FINVIEW, Financial , Financial  Review and Comparison @endsection
@section('description') FINVIEW HTML5 Template @endsection
@section('userName')
    @php
        $name1 = session('userData')->name ? session('userData')->name . ' | User Profile' : 'Default Title';
    @endphp
    {{ $name1 }}
@endsection

@section('main-content')

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">{{ strtoupper($userData->name) }} PROFILE</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('userDashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> 
                                <img src="{{ $userData->image ? asset($userData->image) : asset('assets/userpanel/assets/images/users/default_user.jpg') }}"
                                class="rounded-circle" width="150" />

                                    <h4 class="card-title mt-2">{{ strtoupper($userData->name) }}</h4>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="mdi mdi-eye"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><a href="mailto:{{ $userData->email }}">{{ $userData->email }}</a></h6> <small class="text-muted pt-4 db">Phone</small>
                                <h6><a href="tel:+{{ $userData->phone }}">{{ $userData->phone }}</a></h6> <small class="text-muted pt-4 db">Website</small>
                                <h6><a href="{{ $userData->website }}" target="_blank">{{ $userData->website }}</a></h6>
                                <div class="map-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                        width="100%" height="150" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div> <small class="text-muted pt-4 db">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><a href="https://www.facebook.com/" target="_blank" style="color:white;"><i class="mdi mdi-facebook"></i></a></button>
                                <button class="btn btn-circle btn-secondary"><a href="https://www.twitter.com/" target="_blank" style="color:white;"><i class="mdi mdi-twitter"></i></a></button>
                                <button class="btn btn-circle btn-secondary"><a href="https://www.youtube.com/" target="_blank" style="color:white;"><i class="mdi mdi-youtube-play"></i></a></button>
                                <button class="btn btn-circle btn-secondary"><a href="https://www.linkedin.com/" target="_blank" style="color:white;"><i class="mdi mdi-linkedin"></i></a></button>
                                <button class="btn btn-circle btn-secondary"><a href="https://www.instagram.com/" target="_blank" style="color:white;"><i class="mdi mdi-instagram"></i></a></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" id="profileForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ strtoupper($userData->name) }}" placeholder="Test User"
                                                class="form-control form-control-line" name="example-name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="{{ $userData->email }}"
                                                class="form-control form-control-line" name="example-email"
                                                id="example-email" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" value="{{ $userData->phone }}" name="example-phone" placeholder="12 3456 7890" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">About</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="example-about" placeholder="Write about us.">{{ $userData->about }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Website</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="https://www.example.com" value="{{ $userData->website }}" name="example-website"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Upload Profile Picture</label>
                                        <div class="col-md-12">
                                            <input type="file" name="example-profile" accept="image/*"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->


@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
        $(document).ready(function() {
            $('#profileForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the form from submitting the traditional way

                var formData = new FormData(this); // Create a FormData object from the form

                $.ajax({
                    url: '{{ route("updateData") }}', // Your route
                    type: 'POST',
                    data: formData,
                    contentType: false, // Required for file uploads
                    processData: false, // Required for file uploads
                    success: function(response) {
                        toastr.success(response.message);
                        window.location.href = "{{ route('profile') }}"; // Replace with your target route
 
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
