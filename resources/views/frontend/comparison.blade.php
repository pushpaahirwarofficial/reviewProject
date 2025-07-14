@extends('layout.app')
@section('pagetitle') Comparison | Financial Loan Review and Comparison Website Template @endsection
@section('keywords') FINVIEW, Financial Loan, Financial Loan Review and Comparison @endsection
@section('description') FINVIEW HTML5 Template @endsection

@section('main-content')

    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s"> Comparison</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Comparison</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/loan_comparison_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

   <!-- Loan Comparison start -->
   <section class="loan-comparison section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="loan-comparison__table">
                        <h4 class="sloan-comparison__title wow fadeInUp" data-wow-duration="0.8s"> Comparison</h4>
                        <table>
                            <tr>
                                <th>Features</th>
                                <th>Bank A</th>
                                <th>Credit Union B</th>
                                <th>Online Lender C</th>
                            </tr>
                            <tr>
                                <td>Types</td>
                                <td>Personal, Mortgage</td>
                                <td>Personal, Auto</td>
                                <td>Personal, Business</td>
                            </tr>
                            <tr>
                                <td>Interest Rates</td>
                                <td>5.5% - 7.2%</td>
                                <td>4.8% - 6.5%</td>
                                <td>6.2% - 8.5%</td>
                            </tr>
                            <tr>
                                <td>Loan Amount Range</td>
                                <td>$5,000 - $100,000</td>
                                <td>$2,000 - $50,000</td>
                                <td>$1,000 - $250,000</td>
                            </tr>
                            <tr>
                                <td>Repayment Term</td>
                                <td>1 - 10 years</td>
                                <td>1 - 7 years</td>
                                <td>1 - 15 years</td>
                            </tr>
                            <tr>
                                <td>Eligibility Criteria</td>
                                <td>Credit score above 650</td>
                                <td>Membership, credit score 600</td>
                                <td>Credit score 550, business revenue</td>
                            </tr>
                            <tr>
                                <td>Application Process</td>
                                <td>In-person or online</td>
                                <td>In-person or online</td>
                                <td>Online only</td>
                            </tr>
                            <tr>
                                <td>Customer Support</td>
                                <td>SupportPhone, Email, Branches</td>
                                <td>Phone, Email, Branches</td>
                                <td>Online Chat, Email</td>
                            </tr>
                            <tr>
                                <td>Additional Fees</td>
                                <td>Origination fee, Late payment fee</td>
                                <td>Membership fee, Late payment fee</td>
                                <td>Origination fee, Prepayment penalty</td>
                            </tr>
                            <tr>
                                <td>Customer Reviews</td>
                                <td>
                                    <div class="star_review">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="star_review">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="star_review">
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-fill star-active"></i>
                                        <i class="bi bi-star-half star-active"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="btn_theme">Visit Site <i class="bi bi-arrow-up-right"></i><span></span></a>
                                </td>
                                <td>
                                    <a href="#" class="btn_theme">Visit Site <i class="bi bi-arrow-up-right"></i><span></span></a>
                                </td>
                                <td>
                                    <a href="#" class="btn_theme">Visit Site <i class="bi bi-arrow-up-right"></i><span></span></a>
                                </td>
                                <td>
                                    <a href="#" class="btn_theme">Visit Site <i class="bi bi-arrow-up-right"></i><span></span></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Loan Comparison end -->

@endsection