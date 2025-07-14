
<?php $__env->startSection('pagetitle'); ?> FINVIEW - Financial  Review and Comparison Website Template <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> FINVIEW, Financial , Financial  Review and Comparison <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> FINVIEW HTML5 Template <?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s"> Reviews</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Reviews</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                    <img src="<?php echo e(asset('assets/images/reviews_banner.png')); ?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- loan-reviews page start -->
    <section class="loan-reviews loan-reviews--tertiary section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-9 col-xxl-4 btn_sticky">
                    <div class="d-inline-block d-xxl-none mb-4">
                        <button class="sidebar_btn"> <i class="bi bi-layout-text-sidebar"></i> <span>Sidebar Filter</span></button>    
                    </div>
                    <div class="sidebar-filter cus_scrollbar sidebar-xxl-fixed">
                        <div class="sidebar-filter__part">
                            <h4 class="sidebar-filter__title">Filter</h4>
                        </div>
                        <div class="sidebar-filter__part">
                            <form method="POST" id="filter_search" class="filter__search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" required>
                                    <button type="submit" class="search_icon"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-filter__part">
                            <h5 class="sidebar-filter__part-title">Types of Loan Categories</h5>
                            <ul class="query">
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_personal" id="queryPersonal" checked>
                                        <label for="queryPersonal">Personal Loan</label>
                                    </div>
                                    <div class="query_value">586</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="mortgage_loan" id="querypersonal" checked>
                                        <label for="querypersonal">Mortgage Loan</label>
                                    </div>
                                    <div class="query_value">145</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_student" id="queryStudent" checked>
                                        <label for="queryStudent">Student Loan</label>
                                    </div>
                                    <div class="query_value">546</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_business" id="queryBusiness" checked>
                                        <label for="queryBusiness">Business Loan</label>
                                    </div>
                                    <div class="query_value">625</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_home" id="queryHome" checked checked>
                                        <label for="queryHome">Home Equity Loan</label>
                                    </div>
                                    <div class="query_value">415</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_debt" id="queryDebt" checked>
                                        <label for="queryDebt">Debt Consolidation Loan</label>
                                    </div>
                                    <div class="query_value">642</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_construction" id="queryConstruction" checked>
                                        <label for="queryConstruction">Construction Loan</label>
                                    </div>
                                    <div class="query_value">255</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_equipment" id="queryEquipment" checked>
                                        <label for="queryEquipment">Equipment Loan</label>
                                    </div>
                                    <div class="query_value">142</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_medical" id="queryMedical" checked>
                                        <label for="queryMedical">Medical Loan</label>
                                    </div>
                                    <div class="query_value">325</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_wedding" id="queryWedding" checked>
                                        <label for="queryWedding">Wedding Loan</label>
                                    </div>
                                    <div class="query_value">652</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_vacation" id="queryVacation" checked>
                                        <label for="queryVacation">Vacation Loan</label>
                                    </div>
                                    <div class="query_value">415</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_renovation" id="queryRenovation" checked>
                                        <label for="queryRenovation">Renovation Loan</label>
                                    </div>
                                    <div class="query_value">745</div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-filter__part">
                            <h5 class="sidebar-filter__part-title">Pricing scale</h5>
                            
                            <!-- price-range -->
                            <div class="sidebar-cat__price-range">
                                <div class="range-slider">
                                    <div class="slider-track"></div>
                                    <input type="range" min="0" max="10000" value="1000" id="range-slider-1"
                                        oninput="slideOne()">
                                    <input type="range" min="0" max="10000" value="9000" id="range-slider-2"
                                        oninput="slideTwo()">
                                </div>
                                
                                <div class="price-values">
                                    $<span id="min-value">0</span> - $<span id="max-value"> 100000 </span>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-filter__part">
                            <h5 class="sidebar-filter__part-title">How Many Time For Loan !</h5>
                            <ul class="query">
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_time" id="queryTime" checked>
                                        <label for="queryTime">1-3 Days</label>
                                    </div>
                                    <div class="query_value">125</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_time2" id="queryTime2" checked>
                                        <label for="queryTime2">1 Week</label>
                                    </div>
                                    <div class="query_value">152</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_time3" id="queryTime3" checked>
                                        <label for="queryTime3">1-3 Weeks</label>
                                    </div>
                                    <div class="query_value">265</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_time4" id="queryTime4" checked>
                                        <label for="queryTime4">1-3 Days</label>
                                    </div>
                                    <div class="query_value">125</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_time5" id="queryTime5" checked>
                                        <label for="queryTime5">1 Month</label>
                                    </div>
                                    <div class="query_value">453</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_time6" id="queryTime6" checked>
                                        <label for="queryTime6">2-3 Months</label>
                                    </div>
                                    <div class="query_value">324</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_time7" id="queryTime7" checked>
                                        <label for="queryTime7">6 -Months</label>
                                    </div>
                                    <div class="query_value">286</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_time8" id="queryTime8" checked>
                                        <label for="queryTime8">Less then Year</label>
                                    </div>
                                    <div class="query_value">286</div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-filter__part">
                            <h5 class="sidebar-filter__part-title">Star Category</h5>
                            <ul class="query">
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="radio" id="queryStar5" name="radio-group" checked>
                                        <label for="queryStar5" class="gap-2"><i class="bi bi-star-fill"></i> 5 Star</label>
                                    </div>
                                    <div class="query_value">2456</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="radio" id="queryStar4" name="radio-group">
                                        <label for="queryStar4" class="gap-2"><i class="bi bi-star-fill"></i> 4 Star</label>
                                    </div>
                                    <div class="query_value">3254</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="radio" id="queryStar3" name="radio-group" >
                                        <label for="queryStar3" class="gap-2"><i class="bi bi-star-fill"></i> 3 Star</label>
                                    </div>
                                    <div class="query_value">2564</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="radio" id="queryStar2" name="radio-group" >
                                        <label for="queryStar2" class="gap-2"><i class="bi bi-star-fill"></i> 2 Star</label>
                                    </div>
                                    <div class="query_value">1544</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="radio" id="queryStar1" name="radio-group" >
                                        <label for="queryStar1" class="gap-2"><i class="bi bi-star-fill"></i> 1 Star</label>
                                    </div>
                                    <div class="query_value">965</div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-filter__part">
                            <h5 class="sidebar-filter__part-title">Location</h5>
                            <ul class="query">
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_all" id="queryAll" checked>
                                        <label for="queryAll">All Country</label>
                                    </div>
                                    <div class="query_value">9595645</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_australia" id="queryAustralia" checked>
                                        <label for="queryAustralia">Australia</label>
                                    </div>
                                    <div class="query_value">5456</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_delhi" id="queryDelhi" checked>
                                        <label for="queryDelhi">Delhi</label>
                                    </div>
                                    <div class="query_value">6565</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_germany" id="queryGermany" checked>
                                        <label for="queryGermany">Germany</label>
                                    </div>
                                    <div class="query_value">4554</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_hamburg" id="queryHamburg" checked>
                                        <label for="queryHamburg">Hamburg</label>
                                    </div>
                                    <div class="query_value">7474</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_india" id="queryIndia" checked>
                                        <label for="queryIndia">India</label>
                                    </div>
                                    <div class="query_value">4457</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_pakistan" id="queryPakistan" checked>
                                        <label for="queryPakistan">Pakistan</label>
                                    </div>
                                    <div class="query_value">663</div>
                                </li>
                                <li class="query__list">
                                    <div class="query__label">
                                        <input type="checkbox" name="query_usa" id="queryUSA" checked>
                                        <label for="queryUSA">USA</label>
                                    </div>
                                    <div class="query_value">5885</div>
                                </li>
                            </ul>
                        </div>                    
                        <button type="submit" class="btn_theme">Reset Filters<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </div>
                </div>
                <div class="col-12 col-lg-11 col-xl-9 col-xxl-8">

                    <div class="d-flex flex-column gap-4">

                    <?php if(!empty($company_list)): ?>
                    <?php $__currentLoopData = $company_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="loan-reviews_card card wow fadeInUp" data-wow-duration="0.8s">
                            <div class="loan-reviews__part-one">
                                <div class="loan-reviews__thumb">
                                <?php if(!empty($company->image)): ?>
                                    <img src="<?php echo e(asset($company->image)); ?>" alt="image" style="width:196px; height:120px">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/images/company/default_company.jpg')); ?>" alt="image" style="width:196px; height:120px">
                                <?php endif; ?>
                                </div>
                                <div class="loan-reviews__review">
                                    <p class="rating"> <?php echo e(avgStars($company->id)); ?></p>
                                    <div class="d-flex gap-2 flex-column">
                                        <div class="star_review">
                                        <?php echo starsView($company->id); ?>

                                        </div>
                                        <p class="fs-small">Average Review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-reviews__part-two">
                                <div class="reviews-heading">
                                    <h4 class="reviews-heading__title"><?php echo e($company->company_name); ?></h4>
                                    <p class="reviews-heading__content"><?php echo e($company->company_sub_title); ?></p>
                                </div>
                                <div class="reviews-inner">
                                    <ul>
                                        <li><i class="bi bi-check2-circle"></i> <?php echo e($company->blank_1); ?></li>
                                        <li><i class="bi bi-check2-circle"></i> <?php echo e($company->blank_2); ?></li>
                                        <li><i class="bi bi-check2-circle"></i> <?php echo e($company->blank_3); ?></li>
                                        <li><i class="bi bi-check2-circle"></i> <?php echo e($company->blank_4); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="loan-reviews__part-three">
                                <div class="btn-group">
                                    <a href="<?php echo e(!empty($company->website) ? $company->website : ''); ?>" target="_blank" class="btn_theme btn_theme_active">Visit Site<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="<?php echo e(url('review-details/'. categorySlug($company->category_id).'/'. $company->company_slug)); ?>" class="btn_theme">Read More<i class="bi bi-arrow-up-right"></i><span></span></a>
                                    <a href="<?php echo e(route('faq')); ?>" class="conditions_apply"> Terms & Conditions Apply</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation" class="nav_pagination wow fadeInUp" data-wow-duration="0.8s">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">
                                        <span class="prev-icon"></span>
                                    </a></li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link three_dots_box" href="#">
                                        <span class="three-dots"> </span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">
                                        <span class="next-icon"></span>
                                    </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- loan-reviews end -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Laravel\reviewProject\resources\views/frontend/review.blade.php ENDPATH**/ ?>