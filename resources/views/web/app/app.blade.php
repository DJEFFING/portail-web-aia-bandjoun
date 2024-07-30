<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="BkNy-0RTP3JBK_SeUlO_szjeuu50sZ3vJFeVMggvXxA" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UR-AIA BANDJOUN WEB SITE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    {{-- <link href=" {{ asset('asset_web/assets/img/favicon.png') }} " rel="icon"> --}}
    <link href=" {{ asset('asset_web/assets/img/ur-aia.png') }} " rel="icon">
    <link href=" {{ asset('asset_web/assets/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

    <link rel="stylesheet" type="text/css" href=" {{ asset('asset_admin/vendors/styles/core.css') }} ">
    <!-- Vendor CSS Files -->

    <link href=" {{ asset('asset_web/assets/vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/assets/vendor/fontawesome-free/css/all.min.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/assets/vendor/aos/aos.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/assets/vendor/glightbox/css/glightbox.min.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/assets/vendor/swiper/swiper-bundle.min.css') }} " rel="stylesheet">
    <link href=" {{ asset('asset_web/bootstrap-5.0.2-dist/css/bootstrap.min.css') }} " rel="stylesheet">



    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    {{-- <link href=" {{ asset('asset_admin/src/styles/style.css') }} " rel="stylesheet"> --}}
    <link href=" {{ asset('asset_web/assets/css/main.css') }} " rel="stylesheet">

    <style>
        .search_select_box {
            max-width: 400px;
            margin: 50 auto;
        }

        .search_select_box select {
            width: 100px;
        }

        .search_select_box button {
            background-color: #fff !important;
            padding: 15px 25px;
            color: black !important;
        }

        .category-publication-menu {
            height: 95%;
            /* ou une hauteur spécifique */
            max-height: 95%;
            /*ou une valeur maximale de votre choix*/
            overflow-y: auto;
            /* Activer le défilement vertical si le contenu dépasse la hauteur */
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    @include('web.app.layout.header', ['page' => $page])
    <!-- End Header -->


    @yield('content')

    <!-- ======= Footer ======= -->
    @include('web.app.layout.footer')
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Chatbot -->
    <script src="https://cdn.botpress.cloud/webchat/v2/inject.js"></script>
    <script src="https://mediafiles.botpress.cloud/ac055e80-ebd0-4cd9-8304-5b6b753c9208/webchat/v2/config.js"></script>
    <!--END Chatbot  -->

    <!-- Vendor JS Files -->
    <script src=" {{ asset('asset_web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/aos/aos.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/swiper/swiper-bundle.min.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
    <script src=" {{ asset('asset_web/assets/vendor/php-email-form/validate.js') }} "></script>
	<script src="{{ asset('asset_admin/vendors/scripts/search.min.js') }}"></script>
    <script src=" {{ asset('asset_web/selectpiker.js') }} "></script>





    <!-- Template Main JS File -->
    <script src=" {{ asset('asset_web/assets/js/main.js') }} "></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src=" {{ asset('asset_web/bootstrap-5.0.2-dist/js/bootstrap.min.js') }} "></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var images = document.querySelectorAll('#article-content img');
            images.forEach(function(img) {
                img.classList.add('img-fluid'); // Ajouter la classe Bootstrap ici
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    {{-- <script>
    $(document).ready(function(){
        $('.search_select_box select').selectpicker();
    });
</script> --}}

    <script src="{{ asset('asset_admin/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('asset_admin/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('asset_admin/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset_admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset_admin/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('asset_admin/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/scripts/search.min.js') }}"></script>


</body>

</html>
