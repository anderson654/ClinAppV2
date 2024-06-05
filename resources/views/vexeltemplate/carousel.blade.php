
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Carousel</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Carousel</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Default Carousel</h3>
                                    </div>
                                    <div class="card-body h-100">
                                        <div id="carousel-default" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/19.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/21.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/20.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/22.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/23.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Carousel with indicators</h3>
                                    </div>
                                    <div class="card-body h-100">
                                        <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-bs-target="#carousel-indicators" data-bs-slide-to="0" class="active"></li>
                                                <li data-bs-target="#carousel-indicators" data-bs-slide-to="1"></li>
                                                <li data-bs-target="#carousel-indicators" data-bs-slide-to="2"></li>
                                                <li data-bs-target="#carousel-indicators" data-bs-slide-to="3"></li>
                                                <li data-bs-target="#carousel-indicators" data-bs-slide-to="4"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/24.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/25.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/1.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/2.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/3.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Carousel with controls</h3>
                                    </div>
                                    <div class="card-body h-100">
                                        <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/4.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/5.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/6.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/7.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/8.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carousel-controls" role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-controls" role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Carousel with captions</h3>
                                    </div>
                                    <div class="card-body h-100">
                                        <div id="carousel-captions" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/9.jpg')}}" data-bs-holder-rendered="true">
                                                    <div class="carousel-item-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>Slide label</h3>
                                                        <p>Secure other greater pleasures</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/10.jpg')}}" data-bs-holder-rendered="true">
                                                    <div class="carousel-item-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>Slide label</h3>
                                                        <p>Secure other greater pleasures</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/11.jpg')}}" data-bs-holder-rendered="true">
                                                    <div class="carousel-item-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>Slide label</h3>
                                                        <p>Secure other greater pleasures</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/12.jpg')}}" data-bs-holder-rendered="true">
                                                    <div class="carousel-item-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>Slide label</h3>
                                                        <p>Secure other greater pleasures</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/13.jpg')}}" data-bs-holder-rendered="true">
                                                    <div class="carousel-item-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>Slide label</h3>
                                                        <p>Secure other greater pleasures</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carousel-captions" role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-captions" role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Carousel with custom indicators</h3>
                                    </div>
                                    <div class="card-body h-100">
                                        <div id="carousel-indicators1" class="carousel slide" data-bs-ride="carousel">
                                            <ol class="carousel-indicators carousel-indicators1">
                                                <li data-bs-target="#carousel-indicators1" data-bs-slide-to="0" class="active"></li>
                                                <li data-bs-target="#carousel-indicators1" data-bs-slide-to="1"></li>
                                                <li data-bs-target="#carousel-indicators1" data-bs-slide-to="2"></li>
                                                <li data-bs-target="#carousel-indicators1" data-bs-slide-to="3"></li>
                                                <li data-bs-target="#carousel-indicators1" data-bs-slide-to="4"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/14.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/15.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/16.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/17.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/18.jpg')}}" data-bs-holder-rendered="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Crossfade</h3>
                                    </div>
                                    <div class="card-body h-100">
                                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/14.jpg')}}" data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/15.jpg')}}" data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/17.jpg')}}" data-bs-holder-rendered="true">
                                            </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Individual .carousel-item interval</h3>
                                    </div>
                                    <div class="card-body h-100">
                                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/24.jpg')}}" data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/25.jpg')}}" data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/1.jpg')}}" data-bs-holder-rendered="true">
                                            </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Disable touch swiping</h3>
                                    </div>
                                    <div class="card-body h-100">
                                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                                            <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/3.jpg')}}" data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/4.jpg')}}" data-bs-holder-rendered="true">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/5.jpg')}}" data-bs-holder-rendered="true">
                                            </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dark variant</h3>
                                    </div>
                                    <div class="card-body h-100">
                                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/5.jpg')}}" data-bs-holder-rendered="true">
                                                <div class="carousel-caption d-none d-md-block tx-fixed-white">
                                                <h5>First slide label</h5>
                                                <p>Some representative placeholder content for the first slide.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/6.jpg')}}" data-bs-holder-rendered="true">
                                                <div class="carousel-caption d-none d-md-block tx-fixed-white">
                                                <h5>Second slide label</h5>
                                                <p>Some representative placeholder content for the second slide.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 br-5" alt="" src="{{asset('build/assets/images/media/6.jpg')}}" data-bs-holder-rendered="true">
                                                <div class="carousel-caption d-none d-md-block tx-fixed-white">
                                                <h5>Third slide label</h5>
                                                <p>Some representative placeholder content for the third slide.</p>
                                                </div>
                                            </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
