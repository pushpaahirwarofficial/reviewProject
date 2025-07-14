@extends('layout.user_app')
@section('usertitle') Edit Company | User Dashboard @endsection
@section('keywords') FINVIEW, Financial , Financial  Review and Comparison @endsection
@section('description') FINVIEW HTML5 Template @endsection
@section('userName')
    @php
        $name1 = session('userData')->name ? session('userData')->name . ' | Edit Company' : 'Default Title';
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
                        <h4 class="page-title">Update Company Details</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('userDashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('listCompany') }}">List company</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$edit_company->company_name}}</li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mt-3">
                                <!-- Add Company Start -->
                                <form class="form-horizontal form-material mx-2" id="addCompanyForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" placeholder="" value="{{ session('userData')->id }}" name="user_id">
                                    <input type="hidden" value="{{ $edit_company->id }}" name="company_id"
                                    class="form-control form-control-line">

                                    <div class="form-group">
                                        <label for="company_name">Company Name</label>
                                        <input type="text" class="form-control form-control-line" name="company_name" placeholder="Enter Company Name" value="{{ $edit_company->company_name }}">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="category">Select Category</label>
                                                <select name="category_id" id="category_id" class="form-control form-control-line">
                                                    <option value="">-- Select Category --</option>
                                                    @if(!empty($category))
                                                        @foreach($category as $cat)
                                                            <option value="{{ $cat->id }}" {{ $edit_company->category_id == $cat->id ? 'selected' : '' }}>
                                                                {{ $cat->category_name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="subtitle">Company Sub Title</label>
                                                <input type="text" class="form-control form-control-line" name="subtitle" placeholder="Enter Company Subtitle" value="{{ $edit_company->company_sub_title }}">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label for="feature_1">Feature 1</label>
                                            <input type="text" name="feature_1" id="feature_1" placeholder="Feature 1" class="form-control form-control-line" value="{{ $edit_company->blank_1 }}">
                                            </div>
                                            <div class="col-md-6">
                                            <label for="feature_2">Feature 2</label>
                                            <input type="text" name="feature_2" id="feature_2" placeholder="Feature 2" class="form-control form-control-line" value="{{ $edit_company->blank_2 }}">
                                            </div> 
                                            <div class="col-md-6">
                                            <label for="feature_3">Feature 3</label>
                                            <input type="text" name="feature_3" id="feature_3" placeholder="Feature 3" class="form-control form-control-line" value="{{ $edit_company->blank_3 }}">
                                            </div>
                                            <div class="col-md-6">
                                            <label for="feature_4">Feature 4</label>
                                            <input type="text" name="feature_4" id="feature_4" placeholder="Feature 4" class="form-control form-control-line" value="{{ $edit_company->blank_4 }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Website Link</label>
                                        <div class="col-md-12">
                                        <input type="text" name="website" id="website" placeholder="https://www.example.com" class="form-control form-control-line" value="{{ $edit_company->website }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Company Description</label>
                                        <div class="col-md-12">
                                        <textarea class="form-control form-control-line" name="description" id="cke_description">{{ $edit_company->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-6">
                                        <label class="col-md-6">Benefits</label>
                                        <textarea class="form-control form-control-line" name="benefit" id="benefit">{{ $edit_company->benefit }}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                        <label class="col-md-6">Terms</label>
                                        <textarea class="form-control form-control-line" name="terms" id="terms">
                                        {{ $edit_company->terms }}
                                        </textarea>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-6">
                                        <label class="col-md-6">Pros</label>
                                        <textarea class="form-control form-control-line" name="pros" id="pros">
                                        {{ $edit_company->pros }}
                                        </textarea>
                                        </div>
                                        <div class="col-md-6">
                                        <label class="col-md-6">Cons</label>
                                        <textarea class="form-control form-control-line" name="cons" id="cons">
                                        {{ $edit_company->cons }}
                                        </textarea>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <img src="{{ asset($edit_company->image_logo ? $edit_company->image_logo : 'default_company.jpg') }}" alt="" width="196" height="120">
                                        <label class="col-md-12">Upload Logo Image</label>
                                        <input type="file" class="form-control form-control-line" name="logo_image" accept=image/*>
                                    </div>

                                    <div class="form-group">
                                    <img src="{{ asset($edit_company->image ? $edit_company->image : 'default_company.jpg') }}" alt="" width="196" height="120">
                                    <label class="col-md-12">Upload Image</label>
                                        <input type="file" class="form-control form-control-line" name="image" accept=image/*>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Update Details</button>
                                            </form>
                                            <a href="{{ route('listCompany') }}" class="btn btn-danger text-white">Cancel</a>
                                            <a href="javascript:void(0)" class="btn btn-warning text-white" onclick="document.getElementById('addCompanyForm').reset();">Reset</a>
                                        </div>
                                    </div>
                                <!-- Add company End -->
                                </div>
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

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script>
    window.onload = function() {
        // Initialize CKEditor with different heights for each field
        CKEDITOR.replace('cke_description', {
            height: 300 // Set the height in pixels
        });
        CKEDITOR.replace('benefit', {
            height: 200 // Set the height in pixels
        });
        CKEDITOR.replace('pros', {
            height: 200 // Set the height in pixels
        });
        CKEDITOR.replace('cons', {
            height: 200 // Set the height in pixels
        });
        CKEDITOR.replace('terms', {
            height: 200 // Set the height in pixels
        });

    };


    $(document).ready(function() {
        $('#addCompanyForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the form from submitting the traditional way

            // Update CKEditor content in each textarea before submitting
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            // Gather form data
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('updateCompany') }}", // Adjust route name accordingly
                type: "POST",
                data: formData,
                contentType: false,  // Required for sending files (if any)
                processData: false,  // Required for FormData
                success: function(response) {
                    if (response.status === 'success') {
                        toastr.success(response.message);
                        window.location.href="{{ route('listCompany') }}";
                    } else {
                        toastr.error(response.message);
                    }
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