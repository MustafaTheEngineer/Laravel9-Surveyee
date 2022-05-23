<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Fontfaces CSS-->
    <link href="{{asset('adminAssets')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('adminAssets')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('adminAssets')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('adminAssets')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{asset('adminAssets')}}/css/theme.css" rel="stylesheet" media="all">
    <title>@yield('title')</title>

    <style>
        .page-wrapper{
            overflow: unset;
            padding-bottom: 50vh !important;
        }
    </style>
</head>
<body class="animsition">
    <div class="page-wrapper">
        @yield('content')
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('adminAssets')}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('adminAssets')}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('adminAssets')}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{asset('adminAssets')}}/vendor/wow/wow.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('adminAssets')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('adminAssets')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('adminAssets')}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{asset('adminAssets')}}/js/main.js"></script>
</body>
</html>