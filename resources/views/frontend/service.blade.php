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
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Category</h1> 
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item">pages</li>
                                <li class="breadcrumb-item active" aria-current="page">Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/service_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    
    <!-- feature start -->
    <section class="feature feature--tertiary section">
        <div class="container">

            <div class="row g-3 g-sm-2 g-md-3 g-xxl-4">
            @if(!empty($category))
            @foreach($category as $cat)
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="card card--custom wow fadeInUp" data-wow-duration="0.8s">
                        <div class="card__icon">
                            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.3334 44.8858H7.73639C6.34245 44.8858 5.22729 43.7707 5.22729 42.3767V28.7161C5.22729 27.3222 6.34245 26.207 7.73639 26.207H15.3334C15.7515 26.207 16.0303 26.4858 16.0303 26.904V44.1889C16.0303 44.607 15.7515 44.8858 15.3334 44.8858ZM7.73639 27.601C7.10911 27.601 6.62123 28.0889 6.62123 28.7161V42.3767C6.62123 43.004 7.10911 43.4919 7.73639 43.4919H14.6364V27.601H7.73639Z" fill="#074C3E"/>
                                <path d="M37.985 31.1554H36.5911C36.1729 31.1554 35.8941 30.8766 35.8941 30.4585C35.8941 30.0403 36.1729 29.7615 36.5911 29.7615H37.985C38.8911 29.7615 39.6577 28.9948 39.6577 28.0888C39.6577 27.1827 38.8911 26.416 37.985 26.416H24.2547C24.0456 26.416 23.8365 26.2766 23.6971 26.1373C23.5577 25.9282 23.5577 25.7191 23.6274 25.51C24.6032 23.21 24.9517 21.3282 24.6729 19.6554V19.5857C24.6729 17.216 22.9305 15.2645 20.6305 14.9857C20.0729 20.3524 18.4699 25.0221 15.7517 29.2039C15.5426 29.5524 15.1244 29.6221 14.7759 29.413C14.4274 29.2039 14.3577 28.7857 14.5668 28.4373C17.285 24.3251 18.8183 19.6554 19.2365 14.2191C19.2365 13.8706 19.585 13.5918 19.9335 13.5918C23.279 13.5918 25.9971 16.31 25.9971 19.5857C26.2062 21.2585 25.9971 23.0706 25.2305 25.1615H37.9153C39.6577 25.1615 40.982 26.4857 40.982 28.2282C41.0517 29.8312 39.7274 31.1554 37.985 31.1554Z" fill="#074C3E"/>
                                <path d="M37.2879 35.8951H35.894C35.4758 35.8951 35.197 35.6163 35.197 35.1981C35.197 34.7799 35.4758 34.5011 35.894 34.5011H37.2879C38.194 34.5011 38.9607 33.7344 38.9607 32.8284C38.9607 31.9223 38.194 31.1557 37.2879 31.1557C36.8697 31.1557 36.591 30.8769 36.591 30.4587C36.591 30.0405 36.8697 29.7617 37.2879 29.7617C39.0304 29.7617 40.3546 31.086 40.3546 32.8284C40.3546 34.5708 39.0304 35.8951 37.2879 35.8951Z" fill="#074C3E"/>
                                <path d="M36.5213 40.6333H35.1274C34.7092 40.6333 34.4304 40.3545 34.4304 39.9364C34.4304 39.5182 34.7092 39.2394 35.1274 39.2394H36.5213C37.4274 39.2394 38.1941 38.4727 38.1941 37.497C38.1941 36.4515 37.6365 35.8939 36.5213 35.8939C36.1031 35.8939 35.8244 35.6152 35.8244 35.197C35.8244 34.7788 36.1031 34.5 36.5213 34.5C38.3334 34.5 39.5183 35.5455 39.588 37.3576V37.7061C39.4486 39.3091 38.1244 40.6333 36.5213 40.6333Z" fill="#074C3E"/>
                                <path d="M35.8243 45.3033H19.1667C18.2607 45.3033 17.494 45.0942 16.7273 44.7458L15.0546 43.9094C14.7061 43.77 14.5667 43.3518 14.7758 43.0033C14.9152 42.6548 15.3334 42.5154 15.6819 42.7245L17.3546 43.5609C17.9122 43.8397 18.5395 43.9791 19.2364 43.9791H35.894C36.8001 43.9791 37.5667 43.2124 37.5667 42.3064C37.5667 41.4003 36.8001 40.6336 35.894 40.6336C35.4758 40.6336 35.197 40.3548 35.197 39.9367C35.197 39.5185 35.4758 39.2397 35.894 39.2397C37.6364 39.2397 38.9607 40.5639 38.9607 42.3064C38.891 43.9791 37.5667 45.3033 35.8243 45.3033ZM12.8243 41.9579H8.4334C8.01522 41.9579 7.73643 41.6791 7.73643 41.2609C7.73643 40.8427 8.01522 40.5639 8.4334 40.5639H12.8243C13.2425 40.5639 13.5213 40.8427 13.5213 41.2609C13.5213 41.6791 13.2425 41.9579 12.8243 41.9579ZM24.8819 11.5003C24.7425 11.5003 24.6031 11.5003 24.5334 11.4306L21.9546 9.89727L19.1667 11.2215C18.9576 11.3609 18.6092 11.2912 18.4001 11.1518C18.191 11.0124 18.1213 10.7336 18.191 10.4548L18.8879 7.45787L16.797 5.29727C16.5879 5.08817 16.5182 4.80939 16.6576 4.6003C16.7273 4.32151 17.0061 4.18211 17.2152 4.11242L20.2122 3.76393L21.6061 1.11545C21.7455 0.83666 22.0243 0.697266 22.2334 0.697266C22.5122 0.697266 22.7213 0.83666 22.8607 1.11545L24.1152 3.90333L27.1122 4.4609C27.391 4.5306 27.6001 4.66999 27.6698 4.94878C27.7395 5.22757 27.6698 5.50636 27.4607 5.64575L25.2304 7.66696L25.5789 10.7336C25.5789 11.0124 25.5092 11.2912 25.3001 11.4306C25.1607 11.4306 25.0213 11.5003 24.8819 11.5003ZM21.9546 8.36393C22.094 8.36393 22.2334 8.36393 22.3031 8.43363L23.9758 9.47908L23.697 7.45787C23.697 7.24878 23.7667 6.96999 23.9061 6.8306L25.4395 5.57605L23.4879 5.22757C23.2789 5.15787 23.0698 5.01848 23.0001 4.80939L22.1637 2.99727L21.2576 4.73969C21.1182 4.94878 20.9789 5.08818 20.7001 5.08818L18.7485 5.29727L20.1425 6.69121C20.2819 6.8306 20.3516 7.10939 20.3516 7.31848L19.9334 9.26999L21.7455 8.43363C21.7455 8.36393 21.8849 8.36393 21.9546 8.36393ZM13.2425 15.8215C13.1031 15.8215 12.9637 15.8215 12.894 15.7518L10.3152 14.2185L7.52734 15.5427C7.31825 15.6821 6.96976 15.6124 6.76067 15.473C6.55158 15.3336 6.48188 15.0548 6.55158 14.7761L7.24855 11.8488L5.15764 9.61848C4.94855 9.40939 4.94855 9.1306 5.01825 8.92151C5.01825 8.57302 5.22734 8.36393 5.50613 8.36393L8.57279 8.08515L9.96673 5.43666C10.1061 5.22757 10.3849 5.08818 10.594 5.08818C10.8728 5.08818 11.0819 5.22757 11.2213 5.50636L12.4758 8.29424L15.4728 8.85181C15.7516 8.92151 15.9607 9.0609 16.0304 9.33969C16.1001 9.61848 16.0304 9.89727 15.8213 10.0367L13.591 12.1276L13.9395 15.1245C13.9395 15.4033 13.8698 15.6821 13.6607 15.8215C13.5213 15.7518 13.3819 15.8215 13.2425 15.8215ZM10.3152 12.6851C10.4546 12.6851 10.594 12.6851 10.6637 12.7548L12.3364 13.8003L12.1273 11.8488C12.1273 11.6397 12.197 11.4306 12.3364 11.2215L13.8001 9.89727L11.8485 9.54878C11.6395 9.47908 11.4304 9.33969 11.3607 9.1306L10.5243 7.31848L9.61825 9.0609C9.47885 9.26999 9.33946 9.40939 9.06067 9.40939L7.03946 9.61848L8.4334 11.0821C8.57279 11.2215 8.64249 11.5003 8.57279 11.7094L8.15461 13.5912L9.96673 12.7548C10.1061 12.6851 10.2455 12.6851 10.3152 12.6851ZM36.8001 15.8215C36.6607 15.8215 36.5213 15.8215 36.4516 15.7518L33.8728 14.2185L31.1546 15.5427C30.9455 15.6821 30.597 15.6124 30.4576 15.473C30.2485 15.3336 30.1789 15.0548 30.1789 14.7761L30.8061 11.8488L28.7152 9.61848C28.5061 9.40939 28.5061 9.1306 28.5758 8.92151C28.6455 8.64272 28.9243 8.50333 29.1334 8.50333L32.1304 8.22454L33.594 5.57605C33.7334 5.36696 33.9425 5.22757 34.2213 5.22757C34.5001 5.22757 34.7092 5.43666 34.8485 5.64575L36.0334 8.43363L39.0304 8.99121C39.3092 9.0609 39.5182 9.2003 39.5879 9.47908C39.6576 9.75787 39.5879 10.0367 39.3789 10.1761L37.1485 12.267L37.497 15.2639C37.497 15.5427 37.4273 15.8215 37.2182 15.9609C37.0789 15.7518 36.9395 15.8215 36.8001 15.8215ZM33.8728 12.6851C34.0122 12.6851 34.1516 12.6851 34.2213 12.7548L35.894 13.8003L35.6849 11.8488C35.6849 11.6397 35.7546 11.4306 35.894 11.2215L37.3576 9.89727L35.4061 9.54878C35.197 9.47908 34.9879 9.33969 34.9182 9.1306L34.1516 7.31848L33.1758 9.0609C33.0364 9.26999 32.897 9.40939 32.6182 9.40939L30.6667 9.61848L32.0607 11.0821C32.2001 11.2215 32.2698 11.5003 32.2001 11.7094L31.7819 13.5912L33.594 12.7548C33.6637 12.6851 33.8031 12.6851 33.8728 12.6851Z" fill="#074C3E"/>
                            </svg>                            
                        </div>
                        @php
                            $slug = $cat->category_slug; // Ensure this is set
                        @endphp

                        <div class="card__content">
                            <h4 class="card__title"><a href="{{ url('category-details/' . $cat->category_slug) }}">{{ $cat->category_name }}</a></h4>
                            <p class="fs-small"> Provide comprehensive and unbiased reviews of various types of s, including personal s</p>
                            <a href="{{ url('category-details/' . $cat->category_slug) }}" class="btn_theme social_box">
                                <i class="bi bi-arrow-up-right"></i>
                                <span></span>
                            </a>

                        </div>
                    </div>
                </div>
            @endforeach
            @endif
            </div>

            <div class="row">
                <div class="col-12">
                    <nav aria-label="Page navigation" class="nav_pagination" data-wow-duration="0.8s">
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
    </section>
    <!-- feature end -->



@endsection


