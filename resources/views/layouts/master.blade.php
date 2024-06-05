<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" loader="disable">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="vexel – Laravel Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin panel template, admin dashboard template, admin panel, bootstrap admin template, dashboard, laravel, bootstrap dashboard, admin dashboard, admin panel laravel template, laravel framework, admin laravel, laravel admin panel.">

		<!-- TITLE -->
        <title>Vexel – Laravel Bootstrap 5 Admin &amp; Dashboard Template </title>

        <!-- Favicon -->
        <link rel="icon" href="{{asset('build/assets/images/brand/favicon.ico')}}" type="image/x-icon">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/iconfonts/icons.css')}}" rel="stylesheet">

        <!-- Main Theme Js -->
        <script src="{{asset('build/assets/main.js')}}"></script>

        @include('layouts.components.styles')

        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss' ])
      
        @yield('styles')

    </head>

    <body class="app sidebar-mini">

        <!-- Switcher -->
        @include('layouts.components.switcher')
        <!-- End switcher -->

        <!-- GLOBAL-LOADER -->
        <div id="loader">
            <img src="{{asset('build/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- Main-Header -->
                @include('layouts.components.main-header')
                <!-- End Main-Header -->

                <!--Main-Sidebar-->
                @include('layouts.components.main-sidebar')
                <!-- End Main-Sidebar-->

                <!--app-content open-->
                <div class="main-content app-content mt-0">

                    @yield('content')

                </div>
                <!-- END APP-CONTENT -->
                
            </div>
            <!--app-content closed-->

            <!-- Country-selector modal -->
            @include('layouts.components.modal')
            <!-- End Country-selector modal -->

            <!-- Footer opened -->
            @include('layouts.components.footer')
            <!-- End Footer -->

            @yield('modals')  

        </div>    
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        @include('layouts.components.scripts')
        
        <!-- Sticky JS -->
        <script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- APP JS-->
		@vite('resources/js/app.js')       
        <!-- END SCRIPTS -->

    </body> 

</html>
