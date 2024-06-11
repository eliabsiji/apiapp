<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">


<!-- Mirrored from themesbrand.com/steex/layouts/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jun 2023 02:56:46 GMT -->
<head>

    <meta charset="utf-8">
    <title>Fashion-Hub - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('steex/layouts/assets/images/favicon.ico')}}">

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- jsvectormap css -->
    <link href="{{ asset('steex/layouts/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Layout config Js -->
    <script src="{{asset('steex/layouts/assets/js/layout.js/')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('steex/layouts/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('steex/layouts/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{asset('steex/layouts/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="{{asset('steex/layouts/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

@include('inc.sidebar')


<div class="page-wrapper">

    @include('inc.navbar')

    @yield('content')

@include('inc.footer')

