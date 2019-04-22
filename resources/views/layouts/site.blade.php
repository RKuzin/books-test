<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
@yield('css')
<!-- Scripts -->
    @yield('js')
</head>
<body class="page">
@section('header')
    <header class="header page__header">

    </header>
@show

@yield('content')

@section('footer')
    <footer class="footer footer_{{app()->getLocale()}} page__footer">

    </footer>
@show
@section('js')

@endsection
</body>
</html>