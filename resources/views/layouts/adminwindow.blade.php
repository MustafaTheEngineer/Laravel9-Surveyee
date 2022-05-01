<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <title>@yield('title')</title>

    <style>
        .page-wrapper{
            overflow: unset;
        }
    </style>
</head>
<body class="animsition">
    <div class="page-wrapper">
        @yield('content')
    </div>

    @yield('js')
</body>
</html>