<!DOCTYPE html>
<html lang="en">

<head>
    @include('../template/head')
</head>

<body>

    <!-- Header Start -->
    @include('../template/header')
    <!-- Header End -->


    <!-- Main-Content Start -->
     @yield('main-content')
    <!-- Main-Content End -->


    <!-- Footer Start -->
    @include('../template/footer')
    @include('../template/foot')
    <!-- Footer End -->


</body>

</html>