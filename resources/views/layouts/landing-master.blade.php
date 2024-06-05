<!doctype html>
<html lang="en"  dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-theme-mode="light" data-header-styles="light" data-menu-styles="light">

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

        @include('layouts.components.landing.styles')
        
        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss' ])

        @yield('styles')


    </head>

    <body class="app ltr landing-page">

        <!-- Switcher -->
        @include('layouts.components.landing.switcher')
        <!-- End switcher -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- Main-Header -->
                @include('layouts.components.landing.main-header')
                <!-- End Main-Header -->

                <!-- Main-Sidebar -->
                @include('layouts.components.landing.main-sidebar')
                <!-- End Main-Sidebar -->

                <!--app-content open-->
                <div class="main-content mt-0">
                    <div class="main-content app-content">
                        <div class="main-container">

                            @yield('content')

                        </div>
                    </div>
                </div>
                <!--app-content closed-->
                
            </div>
            <!--app-content closed-->

            <!-- Footer opened -->
            @include('layouts.components.landing.footer')
            <!-- End Footer -->

            @yield('modals')  

        </div>    
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        @include('layouts.components.landing.scripts')        
      
    </body> 

</html>
