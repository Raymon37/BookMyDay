<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>
<header>
    @include('partials.header')
</header>
<br>
    @include('partials.navbar')
<br>    
    @yield('content')
    <!--container.//-->
<footer>
    @include('partials.footer')
</footer>   
</body>
</html>
