<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SMS - Dashboard</title>
        <meta name="description" content="SMS">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon.png')}}">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{asset('admin/vendors/css/base/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendors/css/base/elisyam-1.5-dark.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/owl-carousel/owl.theme.min.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('admin/css/bootstrap-select/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/datatables/datatables.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/toast.css')}}">
        <!-- Tweaks for older IEs-->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        @yield('css')
        <style>
            .td-actions i {
                background: transparent;
                color: #aea9c3;
                font-size: 1.6rem;
                padding: .5rem;
                border-radius: 50%;
                transition: all 0.4s ease
            }

            .td-actions i.edit:hover,
            .td-actions i.more:hover {
                background: rgba(0, 165, 63, 0.8);
                color: #fff
            }

            .td-actions i.delete:hover {
                background: #e76c90;
                color: #fff
            }
        </style>
    </head>

    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="{{asset('admin/img/logo-2.png')}}" alt="logo" class="loader-logo">
                <div class="spinner"></div>
            </div>
        </div>
