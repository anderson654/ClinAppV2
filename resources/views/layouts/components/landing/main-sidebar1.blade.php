            <div class="top sticky">
                <!-- Start::app-sidebar -->
                <aside class="app-sidebar sticky" id="sidebar">

                    <div class="container p-0">
                        <!-- Start::main-sidebar -->
                        <div class="main-sidebar">

                            <!-- Start::nav -->
                            <nav class="main-menu-container nav nav-pills sub-open align-items-center">
                                <div class="landing-logo-container">
                                    <div class="horizontal-logo">
                                        <a href="{{url('index')}}" class="header-logo">
                                            <img src="{{asset('build/assets/images/brand/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                                            <img src="{{asset('build/assets/images/brand/desktop-dark.png')}}" alt="logo" class="desktop-white">
                                        </a>
                                    </div>
                                </div>
                                <div class="slide-left d-none" id="slide-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                                </div>
                                <ul class="main-menu">
                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a class="side-menu__item" href="#home">
                                            <span class="side-menu__label">Home</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="#features" class="side-menu__item">
                                            <span class="side-menu__label">Features</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="#about" class="side-menu__item">
                                            <span class="side-menu__label">About</span>
                                        </a>
                                    </li>

                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">

                                            <span class="side-menu__label me-3">Nested menu</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child2">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child3">
                                                            <li class="slide">
                                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-1</a>
                                                            </li>
                                                            <li class="slide">
                                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->

                                    <li class="slide">
                                        <a href="#clients" class="side-menu__item">
                                            <span class="side-menu__label">Clients</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="#faqs" class="side-menu__item">
                                            <span class="side-menu__label">Faq's</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="#contact" class="side-menu__item">
                                            <span class="side-menu__label">Contact</span>
                                        </a>
                                    </li>
                                    <!-- End::slide -->
                                </ul>
                                <div class="slide-right d-none" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>

                                <div class="d-lg-flex d-none">
                                    <a href="{{url('login')}}" class="btn ripple btn-min w-sm btn-primary me-2 my-auto d-lg-none d-xl-block d-block"
                                        target="_blank">Login
                                    </a>
                                </div>
                            </nav>
                            <!-- End::nav -->

                        </div>
                        <!-- End::main-sidebar -->
                    </div>

                </aside>
                <!-- End::app-sidebar -->
            </div>
			
            <div class="main-demo main-demo-1 overflow-hidden reveal landing-top-header" id="home">
                <div class="container px-sm-0">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-6 text-center my-auto animation-zidex pos-relative landing-main-heading">
                            <h1 class="text- fw-bold tx-fixed-white mt-5">A quick and easy way to build your Business with <span class="text-primary">"Vexel"</span></h1>
                            <p class="pb-3 fs-15 mt-3 tx-fixed-white op-6">
                                Vexel - Now you can use this admin template to design stunning dashboards
                                that will wow your target viewers or users to no end. To create a good and
                                well-structured dashboard,
                                you need to start from scratch with HTML, SCSS, CSS, and JS and with lots of coding,
                                but by using this Vexel-Admin template.</p>

                            <a href="https://themeforest.net/user/spruko/portfolio"
                                target="_blank" class="btn btn-lg ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                                    class="fe fe-play me-2"></i> Get Started
                            </a>
                            <a href="https://themeforest.net/user/spruko/portfolio"
                                class="btn btn-lg ripple btn-min w-lg btn-light mb-3 me-2" target="_blank"><i
                                    class="fe fe-eye me-2 d-inline-flex"></i>Discover More
                            </a>
                        </div>
                    </div>
                </div>
            </div>