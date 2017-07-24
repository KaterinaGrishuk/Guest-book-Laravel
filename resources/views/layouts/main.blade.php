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

@yield('content')
@section('footer.js')
    <script src='/js/app.js'></script>
    {{--<script src="/js/common.js"></script>--}}
@show
</body>
</html>
