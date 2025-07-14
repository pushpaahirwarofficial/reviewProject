<!DOCTYPE html>
<html lang="en">

<head>
    @include('../template/user_head')
</head>

<body>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">

    <!-- Header Start -->
    @include('../template/user_header')
    <!-- Header End -->

    <!-- Side Start -->
    @include('../template/user_sidebar')
    <!-- Side End -->

    <!-- Main-Content Start -->
     @yield('main-content')
    <!-- Main-Content End -->


    <!-- Footer Start -->
    @include('../template/user_footer')
    
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    @include('../template/user_foot')
    <!-- Footer End -->


</body>

</html>