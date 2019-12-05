<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Neon is a Laravel Responsive Bootstrap 4 Admin Dashboard Template">
        <meta name="keywords" content="admin, admin template, admin panel, dashboard template, laravel, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
        <meta name="author" content="Themesbox">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- Start CSS -->   
        @yield('style')
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <style>
        .highlight{
            display: none;
            }
        .highlight-back{
            display: block;
            }
            </style>
        <!-- End CSS -->
        
    </head>
    <body class="xp-vertical">
        <!-- Start XP Container -->
        <main id="app">
            <div id="xp-container">     
                <!-- Start XP Leftbar -->
                @include('layouts.leftbar')
                <!-- End XP Leftbar -->
                <!-- Start XP Rightbar -->
                @include('layouts.rightbar')          
                @yield('content')
                <!-- End XP Rightbar -->  
            </div>
        </main>
        <!-- End XP Container -->
        
        <!-- Start JS -->
        <script src="{{ asset('js/app.js') }}"></script> 
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/7b00c31d1c.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="http://xpanthersolutions.com/html/neon/laravel/vertical/assets/plugins/chartist-js/chartist.min.js"></script>
        <script src="http://xpanthersolutions.com/html/neon/laravel/vertical/assets/plugins/chartist-js/chartist-plugin-tooltip.min.js"></script>
        <script src="http://xpanthersolutions.com/html/neon/laravel/vertical/assets/js/init/chartistjs-init.js"></script>
        
        @yield('script')
        <!-- Main JS -->
      
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <!-- End JS -->
        
    </body>
</html>    