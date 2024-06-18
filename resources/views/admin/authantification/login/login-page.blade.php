<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('asset_admin/vendors/images/apple-touch-icon.png') }} ">
    <link rel="icon" type="image/png" sizes="32x32"
        href=" {{ asset('asset_admin/vendors/images/favicon-32x32.png') }} ">
    <link rel="icon" type="image/png" sizes="16x16"
        href=" {{ asset('asset_admin/vendors/images/favicon-16x16.png') }} ">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('asset_admin/vendors/styles/core.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('asset_admin/vendors/styles/icon-font.min.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('asset_admin/vendors/styles/style.css') }} ">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="#">
                    <img src="{{ asset('asset_web/assets/img/ur-aia.png') }}" style="height: 100px"  alt="" class="dark-logo">
                    <img src="{{ asset('asset_web/assets/img/ur-aia.png') }}" style="height: 100px"  alt="" class="light-logo">
                    <h1  class="dark-logo">AIA</h1>
                    <h1  class="light-logo">AIA</h1>
                </a>
            </div>
        </div>
    </div>

    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src=" {{ asset('asset_admin/vendors/images/login-page-img.png') }} " alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To UR-IAI</h2>
                        </div>

                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session()->get('error') }}</div>
                        @endif

                        <form action="{{ route('admin.login') }}" method="POST">
                            @csrf

                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg" name="email"
                                    placeholder="Email">

                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            @error('email')
                                <div class="text text-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror

                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" name="password"
                                    placeholder="**********">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>

                            @error('password')
                                <div class=" text text-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror

                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password"><a href="forgot-password.html">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <!--
           use code for form submit
           <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
          -->
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src=" {{ asset('asset_admin/vendors/scripts/core.js') }} "></script>
    <script src=" {{ asset('asset_admin/vendors/scripts/script.min.js') }} "></script>
    <script src=" {{ asset('asset_admin/vendors/scripts/process.js') }} "></script>
    <script src=" {{ asset('asset_admin/vendors/scripts/layout-settings.js') }} "></script>
</body>

</html>
