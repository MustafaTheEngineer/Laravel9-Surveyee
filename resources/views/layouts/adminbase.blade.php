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
        @include('admin.header')
    
        @yield('content')
    
        @include('admin.footer')
    </div>

    @yield('js')
</body>
</html>