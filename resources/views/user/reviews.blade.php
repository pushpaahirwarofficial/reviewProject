@extends('layout.user_app')
@section('usertitle') User Dashboard @endsection
@section('keywords') FINVIEW, Financial , Financial  Review and Comparison @endsection
@section('description') FINVIEW HTML5 Template @endsection
@section('userName')
    @php
        $name1 = session('userData')->name ? session('userData')->name . ' | Add Review' : 'Default Title';
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
                        <h4 class="page-title">{{ strtoupper(session('userData')->name) }} REVIEW</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('userDashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Review</li>
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Review</h4>
                                <div class="mt-3">

                                <!-- Add Review Start -->
                                <form class="form-horizontal form-material mx-2" id="reviewForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" placeholder="" value="{{ session('userData')->id }}" name="user_id"
                                    class="form-control form-control-line">
                                    <div class="form-group">
                                        <label class="col-md-12">Select Category</label>
                                        <div class="col-md-12">
                                            <select name="category" id="category" class="form-control form-control-line">
                                                <option value="">-- Select Category --</option>
                                                @if(!empty($category))
                                                @foreach($category as $cat)
                                                <option value="{{$cat->id}}">{{ $cat->category_name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Select Company</label>
                                        <div class="col-md-12">
                                            <select name="company" id="company" class="form-control form-control-line">
                                                <option value="" disabled selected>-- Select Company --</option>                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Add Review</label>
                                        <div class="col-md-12">
                                            <textarea rows="6" class="form-control form-control-line" name="review" placeholder="Write review."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Give Stars</label>
                                        <div class="col-md-12">
                                            <select name="stars" id="stars" class="form-control form-control-line">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Add Review</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Add Review End -->

                                <!-- Update Review Start -->
                                <form class="form-horizontal form-material mx-2" id="reviewUpdateForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" placeholder="" value="{{ session('userData')->id }}" name="user_id"
                                    class="form-control form-control-line">
                                    <div class="form-group">
                                        <label class="col-md-12">Select Category</label>
                                        <div class="col-md-12">
                                            <select name="edit_category" id="edit_category" class="form-control form-control-line">
                                                <option value="">-- Select Category --</option>
                                                @if(!empty($category))
                                                @foreach($category as $cat)
                                                <option value="{{$cat->id}}">{{ $cat->category_name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Select Company</label>
                                        <div class="col-md-12">
                                            <select name="edit_company" id="edit_company" class="form-control form-control-line">

                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Add Review</label>
                                        <div class="col-md-12">
                                            <textarea rows="6" class="form-control form-control-line" name="edit_review" placeholder="Write review." id="edit_review"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Give Stars</label>
                                        <div class="col-md-12">
                                            <select name="edit_stars" id="edit_stars" class="form-control form-control-line">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Update Review</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Update Review End -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-1">My Reviews</h5>
                                <div class="mt-3 text-center">
                                    <div style="overflow-x: auto; text-align:center;">
                                        <table id="reviewsTable" class="display responsive nowrap" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-wrap">SNO.</th>
                                                    <th class="text-center text-wrap">Category</th>
                                                    <th class="text-center text-wrap">Company</th>
                                                    <th class="text-center text-wrap">Review</th>
                                                    <th class="text-center text-wrap">Total Stars</th>
                                                    <th class="text-center text-wrap">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php  $count = 1;  @endphp
                                                @if(!empty($user_reviews))
                                                @foreach ($user_reviews as $review)
                                                <tr class="review-item-{{ $review->id }}">
                                                    <td class="text-center text-wrap">{{ $count++ }}</td>
                                                    <td class="text-center text-wrap">
                                                        @if(!empty($category))
                                                        @foreach($category as $cat)
                                                        @if($cat->id==$review->category_id)
                                                            {{ $cat->category_name }}
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                    </td>
                                                    <td class="text-center text-wrap">
                                                        @if(!empty($company))
                                                        @foreach($company as $com)
                                                        @if($com->id==$review->company_id)
                                                            {{ $com->company_name }}
                                                        @endif
                                                        @endforeach
                                                        @endif
                                                    </td>
                                                    <td class="text-center text-wrap">{{ $review->description }}</td>
                                                    <td class="text-center text-wrap">{{ $review->total_star }}</td>
                                                    <td class="text-center text-wrap">
                                                        <!-- View Link -->
                                                         @php 
                                                            $companySlug = companySlug($review->company_id);
                                                            $categorySlug = categorySlug($review->category_id);
                                                         @endphp
                                                         <a href="javascript:void(0);" class="btn view-btn" onclick="viewReview('{{ $categorySlug }}', '{{ $companySlug }}')">
                                                         <i class="mdi mdi-eye" style="color:blue; font-size:25px;"></i>
                                                        </a>

                                                        <!-- Edit Link -->
                                                        <!-- <a href="javascript:void(0);" class="btn edit-btn" onclick="editReview({{ $review->id }})">
                                                            <i class="mdi mdi-pencil" style="color:green; font-size:25px;"></i>
                                                        </a> -->

                                                        <!-- Delete Link -->
                                                        <a href="javascript:void(0);" class="btn delete-btn" onclick="deleteReview({{ $review->id }})">
                                                            <i class="mdi mdi-delete" style="color:red; font-size:25px;"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
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

    <!-- jQuery for AJAX -->
    <script type="text/javascript">
        $(document).ready(function() {
            // On category change
            $('#category').on('change', function() {
                var categoryId = $(this).val();

                if (categoryId) {
                    // Make AJAX request to get companies based on selected category
                    $.ajax({
                        url: '{{ route('get.companies') }}',
                        type: 'GET',
                        data: { category_id: categoryId },
                        success: function(data) {
                            // Clear previous options in the company dropdown
                            $('#company').empty();
                            $('#company').append('<option value="" selected>-- Select Company-- </option>');

                            // Populate the company dropdown with new options
                            $.each(data, function(key, company) {
                                $('#company').append('<option value="' + company.id + '">' + company.company_name + '</option>');
                            });
                        },
                        error: function() {
                            // Handle error if any
                            alert('Error fetching companies.');
                        }
                    });
                } else {
                    // If no category is selected, clear the company dropdown
                    $('#company').empty();
                    $('#company').append('<option value="" selected>-- Select Company --</option>');
                }
            });


            // AJAX form submission
            $('#reviewUpdateForm').hide();
            $('#reviewForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                
                var formData = $(this).serialize(); // Get the form data

                $.ajax({
                    url: '{{ route('addReview') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#reviewForm')[0].reset(); // Reset the form
                        toastr.success(response.message);
                        window.location.href="{{ route('userReview') }}";

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

    <script>

        function editReview(id) {
            $('#reviewUpdateForm').toggle();
            if ($('#reviewUpdateForm').is(':visible')) {
                $('#reviewForm').hide();
            } else {
                $('#reviewForm').show();
            }
            $.ajax({
                    url: "{{ route('editReview') }}",
                    type: 'GET',
                    data: {
                        id:id
                    },
                    success: function(response) {
                        if (response.status == 201) {
                            $('#reviewUpdateForm #edit_review').val(response.reviewData.description);
                            $('#reviewUpdateForm #edit_stars').val(response.reviewData.total_star);
                            $('#reviewUpdateForm #edit_category').val(response.reviewData.category_id);
                            for (i = 0; i < response.company_data.length; i++) {
                                $('#reviewUpdateForm #edit_company').append('<option value="' + response.company_data[i].id + '">' + response.company_data[i].company_name + '</option>');
                            }
                            console.log(response.company_data);
                        }
                    },
                    error: function(xhr) {
                        toastr.error('An error occurred while deleting the record.');
                    }
                });
            
        }
        
        function viewReview(slug1, slug2) {
            var url = "{{ url('review-details') }}/" + slug1 + "/" + slug2;
            window.location.href = url;
        }

            

        function deleteReview(id) {
            // Ask for confirmation
            if (confirm('Are you sure you want to delete this record?')) {
                $.ajax({
                    url: "{{ url('user/delete-review') }}/" + id,
                    type: 'DELETE', // Use DELETE method for deletion
                    data: {
                        _token: "{{ csrf_token() }}" // Include CSRF token
                    },
                    success: function(response) {
                        if (response.status == 201) {
                            toastr.success(response.message);
                            window.location.href = "{{ route('userReview') }}";
                        }
                    },
                    error: function(xhr) {
                        toastr.error('An error occurred while deleting the record.');
                    }
                });
            }
        }


    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#reviewsTable').DataTable({
                responsive: true
            });
        });
    </script>

