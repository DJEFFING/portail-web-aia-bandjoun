<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UpConstruction Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href=" {{ asset('asset_web/assets/img/favicon.png') }} " rel="icon">
    <link href=" {{ asset('asset_web/assets/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href=" {{ asset('asset_web/assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/assets/vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/assets/vendor/fontawesome-free/css/all.min.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/assets/vendor/aos/aos.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/assets/vendor/glightbox/css/glightbox.min.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/assets/vendor/swiper/swiper-bundle.min.css') }} " rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=" {{ asset('asset_web/assets/css/main.css') }} " rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('web.app.layout.header',["page"=>$page])
    <!-- End Header -->


    @yield('content')

    <!-- ======= Footer ======= -->
    @include('web.app.layout.footer')
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src=" {{ asset('asset_web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/aos/aos.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/swiper/swiper-bundle.min.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/php-email-form/validate.js') }} "></script>

    <!-- Template Main JS File -->
    <script src=" {{ asset('asset_web/assets/js/main.js') }} "></script>

</body>

</html>
