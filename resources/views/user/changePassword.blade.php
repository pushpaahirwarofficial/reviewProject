@extends('layout.user_app')
@section('usertitle') User Dashboard @endsection
@section('keywords') FINVIEW, Financial , Financial  Review and Comparison @endsection
@section('description') FINVIEW HTML5 Template @endsection
@section('userName')
    @php
        $name1 = session('userData')->name ? session('userData')->name . ' | Change Password' : 'Default Title';
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
                        <h4 class="page-title">CHANGE PASSWORD</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('userDashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
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
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row">
                <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" id="updatePassword">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Recent Password</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" placeholder="Enter Recent Password"
                                                class="form-control form-control-line" name="recent_password" id="recent-password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="new-password" class="col-md-12">New Password</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" placeholder="Enter New Password"
                                                class="form-control form-control-line" name="new_password"
                                                id="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password" class="col-md-12">Confirm Password</label>
                                        <div class="col-md-12">
                                            <input type="text" value="" placeholder="Enter Confirm Password"
                                                class="form-control form-control-line" name="confirm_password"
                                                id="confirm-password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Change Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
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
        $('#updatePassword').on('submit', function(e) {
            e.preventDefault(); 
            $.ajax({
                url: '{{ route("updatePassword") }}', 
                type: 'POST',
                data: $('#updatePassword').serialize(),
                success: function(response) {
                    if(response.status == 'success') {
                        toastr.success(response.message);
                        window.location.href = "{{ route('userDashboard') }}"; 
                    } else {
                        toastr.error(response.error);
                    }
                },
                error: function(response) {
                    let errors = response.responseJSON.errors;
                        if (response.status == 422) {
                            let errors = response.responseJSON.errors;
                            $.each(errors, function(field, messages) {
                                toastr.error(messages[0]); // Display first error message for each field
                            });
                        } 
                }
            });
        });
    });
</script>
