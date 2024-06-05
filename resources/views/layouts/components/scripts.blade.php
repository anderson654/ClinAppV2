
        <!-- Scroll To Top -->
        <div class="scrollToTop">
           <span class="arrow"><i class="fa fa-angle-up fs-20"></i></span>
        </div>
        <!-- Scroll To Top -->

        <div id="responsive-overlay"></div>

        <!-- Popper JS -->
        <script src="{{asset('build/assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

        <!-- Bootstrap JS -->
        <script src="{{asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Node Waves JS-->
        <script src="{{asset('build/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- Simplebar JS -->
        <script src="{{asset('build/assets/libs/simplebar/simplebar.min.js')}}"></script>
        @vite('resources/assets/js/simplebar.js')

        <!-- Color Picker JS -->
        <script src="{{asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>

        @yield('scripts')
