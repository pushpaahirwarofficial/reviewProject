@extends('layout.user_app')
@section('usertitle') User Dashboard @endsection
@section('keywords') FINVIEW, Financial , Financial  Review and Comparison @endsection
@section('description') FINVIEW HTML5 Template @endsection
@section('userName')
    @php
        $name1 = session('userData')->name ? session('userData')->name . ' | My Listed Companies' : 'Default Title';
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
                        <h4 class="page-title">My Listed Companies</h4>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <a href="{{ route('addCompany') }}" class="btn btn-primary">Add Company <i class="mdi mdi-plus"></i></a>
                                </div>
                                <div class="mt-3 text-center">
                                    <div style="overflow-x: auto; text-align:center;">
                                        <table id="reviewsTable" class="display responsive nowrap" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center text-wrap">SNO.</th>
                                                    <th class="text-center text-wrap">Category</th>
                                                    <th class="text-center text-wrap">Company</th>
                                                    <th class="text-center text-wrap">Rating</th>
                                                    <th class="text-center text-wrap">Average Stars</th>
                                                    <th class="text-center text-wrap">Created Date</th>
                                                    <th class="text-center text-wrap">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php  $count = 1;  @endphp
                                                @if(!empty($company))
                                                @foreach ($company as $company)
                                                <tr class="company-item-{{ $company->id }}">
                                                    <td class="text-center text-wrap">{{ $count++ }}</td>
                                                    <td class="text-center text-wrap">
                                                            {{ categoryData($company->category_id)->category_name }}
                                                    </td>
                                                    <td class="text-center text-wrap">
                                                            {{ $company->company_name }}
                                                    </td>
                                                    <td class="text-center text-wrap">{{ totalStars($company->id) }}</td>
                                                    <td class="text-center text-wrap">{{ avgStars($company->id) }}</td>
                                                    <td class="text-center text-wrap">{{ $company->updated_at->format('d, M, Y') }}</td>
                                                    <td class="text-center text-wrap">
                                                        <!-- View Link -->
                                                        @php 
                                                            $companySlug = companySlug($company->id);
                                                            $categorySlug = categorySlug($company->category_id);
                                                         @endphp
                                                         <a href="javascript:void(0);" class="btn view-btn" onclick="viewCompany('{{ $categorySlug }}', '{{ $companySlug }}')">
                                                         <i class="mdi mdi-eye" style="color:blue; font-size:25px;"></i>
                                                        </a>

                                                        <!-- Edit Link -->
                                                        <a href="{{ url('user/edit-company/' . $company->id) }}" class="btn edit-btn">
                                                            <i class="mdi mdi-pencil" style="color:green; font-size:25px;"></i>
                                                        </a>


                                                        <!-- Delete Link -->
                                                        <a href="javascript:void(0);" class="btn delete-btn" onclick="deleteCompany({{ $company->id }})">
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#reviewsTable').DataTable({
                responsive: true
            });
        });


        function deleteCompany(id) {
            // Ask for confirmation
            if (confirm('Are you sure you want to delete this company?')) {
                $.ajax({
                    url: "{{ url('user/delete-company') }}/" + id,
                    type: 'DELETE', // Use DELETE method for deletion
                    data: {
                        _token: "{{ csrf_token() }}" // Include CSRF token
                    },
                    success: function(response) {
                        if (response.status == 201) {
                            toastr.success(response.message);
                            window.location.href = "{{ route('listCompany') }}";
                        }
                    },
                    error: function(xhr) {
                        toastr.error('An error occurred while deleting the record.');
                    }
                });
            }
        }

        function editCompany(id) {
            // Ask for confirmation
                $.ajax({
                    url: "{{ url('user/edit-company') }}/" + id,
                    type: 'GET', 
                    success: function(response) {
                        if (response.status == 201) {
                            console.log(response);
                            window.location.href = "{{ url('user/edit-company') }}/" + id;
                        }
                    },
                    error: function(xhr) {
                        toastr.error('An error occurred while editing the record.');
                    }
                });
            }
        

        function viewCompany(slug1, slug2) {
            var url = "{{ url('review-details') }}/" + slug1 + "/" + slug2;
            window.location.href = url;
        }

    </script>