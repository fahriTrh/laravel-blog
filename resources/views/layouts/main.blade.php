<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{$title}}</title>
</head>
<body>
    @include('partials.nav')
    <div class="container">
        @yield('container')
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>