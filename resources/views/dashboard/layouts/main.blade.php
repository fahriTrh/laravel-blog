<!doctype html>
<html lang="en">

<!-- Mirrored from getbootstrap.com/docs/5.1/examples/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 18:04:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link rel="canonical" href="index.html">



    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../../assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="../../assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../../assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="../../assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="../../assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>
</head>
<body>

    @include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('dashboard.layouts.sidebar')
    @yield('container')
  </div>
</div>
    <script src="/js/bootstrap.bundle.min.js" ></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"></script><script src="dashboard.js"></script>
</body>

<!-- Mirrored from getbootstrap.com/docs/5.1/examples/dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 18:04:21 GMT -->
</html>