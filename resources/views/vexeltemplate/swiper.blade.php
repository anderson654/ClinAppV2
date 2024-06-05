
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Swiper Js</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Swiper Js</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Start::row-1 -->
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Basic Swiper
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper swiper-basic">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/01.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/02.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/03.jpg')}}" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Swiper With Navigation
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper swiper-navigation">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/04.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/05.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/06.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Swiper with Pagination
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper pagination">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/11.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/12.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/13.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Dynamic Pagination
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper pagination-dynamic">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/14.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/15.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/16.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Pagination With Progress
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper pagination-progress">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/17.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/18.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/19.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Pagination Fraction
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper pagination-fraction">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/27.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/28.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/29.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Custom Paginatioin
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper custom-pagination">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/34.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/35.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/36.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Scrollbar Swiper
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper scrollbar-swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/01.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/02.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/03.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-scrollbar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Vertical Swiper
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper vertical swiper-vertical">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/04.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/05.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/06.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Mouse Wheel Control
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper vertical vertical-mouse-control">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/07.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/01.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/files/09.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Keyboard Control
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper keyboard-control">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/16.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/17.jpg')}}" alt=""></div>
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/18.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Nested Swiper</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper swiper-horizontal1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="{{asset('build/assets/images/media/19.jpg')}}" alt=""></div>
                                            <div class="swiper-slide">
                                                <div class="swiper vertical swiper-vertical1">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/11.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/12.jpg')}}" alt=""></div>
                                                    <div class="swiper-slide"><img src="{{asset('build/assets/images/media/13.jpg')}}" alt=""></div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/14.jpg')}}" alt=""></div>
                                            <div class="swiper-slide"><img src="{{asset('build/assets/images/media/15.jpg')}}" alt=""></div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Effect Cube
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper swiper-effect-cube">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{asset('build/assets/images/media/16.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('build/assets/images/media/17.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('build/assets/images/media/18.jpg')}}" alt="img">
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Effect Fade
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper swiper-fade">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{asset('build/assets/images/media/19.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('build/assets/images/media/11.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('build/assets/images/media/12.jpg')}}" alt="img">
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Effect Flip
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper swiper-flip">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="{{asset('build/assets/images/media/27.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('build/assets/images/media/28.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="{{asset('build/assets/images/media/29.jpg')}}" alt="img">
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

                        <!-- Start:: row-2 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Effect Coverflow
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="swiper swiper-overflow">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/11.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/12.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/13.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/14.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/15.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/16.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/17.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/18.jpg')}}" alt="img">
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                        <!-- Start:: row-3 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Thumbs Gallery
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper swiper-preview">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img class="img-fluid rounded-3" src="{{asset('build/assets/images/media/files/01.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid rounded-3" src="{{asset('build/assets/images/media/files/02.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid rounded-3" src="{{asset('build/assets/images/media/files/03.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid rounded-3" src="{{asset('build/assets/images/media/files/04.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid rounded-3" src="{{asset('build/assets/images/media/files/05.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid rounded-3" src="{{asset('build/assets/images/media/files/06.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid rounded-3" src="{{asset('build/assets/images/media/files/07.jpg')}}" alt="img">
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                        <div class="swiper swiper-view">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/11.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/12.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/13.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/14.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/15.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/16.jpg')}}" alt="img">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img class="img-fluid" src="{{asset('build/assets/images/media/17.jpg')}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Internal Swiper JS -->
        @vite('resources/assets/js/swiper.js')

@endsection
