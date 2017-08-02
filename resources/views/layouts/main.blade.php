<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Гостевая книга')</title>
    @section('css')
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" type="text/css" href="/libs/font-awesome/css/font-awesome.min.css">
    @show
</head>
<body>
<h1>{{$title}}</h1>
<hr>
@if(Auth::guest())
    <div class="auth"><a href="{{route('login')}}">Войти</a></div>
@else
    <div class="auth"><a href="">Вы зашли как - {{$user->name}}</a></div>
@endif

@yield('content')
@section('footer.js')
    <script src='/js/app.js'></script>
    {{--<script src="/js/common.js"></script>--}}
@show
</body>
</html>
