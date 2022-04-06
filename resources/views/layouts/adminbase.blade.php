<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <title>@yield('title')</title>
</head>
<body>
    <div class="page-wrapper">
        @include('admin.header')
    
        @yield('content')
    
    
        @include('admin.footer')

    </div>

    @yield('js')
</body>
</html>