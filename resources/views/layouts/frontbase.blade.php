<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @yield('head')
</head>

<body class="animsition">
    @include('home.header')

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('home.footer')

    @yield('js')
</body>

</html>
