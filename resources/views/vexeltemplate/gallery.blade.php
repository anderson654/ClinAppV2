
@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Gallery</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- GALLERY DEMO OPEN -->
                        <div class="demo-gallery card">
                            <div class="card-header d-sm-flex d-block">
                                <ul class="nav nav-pills nav-tabs-header mb-0 d-sm-flex d-block" role="tablist">
                                    <li class="nav-item m-1">
                                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#images" aria-selected="true">Images</a>
                                    </li>
                                    <li class="nav-item m-1">
                                        <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                        href="#albums" aria-selected="true">Albums</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active fs-13" id="images"
                                        role="tabpanel">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label h6" for="flexCheckChecked">
                                                Today
                                            </label>
                                        </div>
                                        <ul class="list-unstyled row lightgallery">
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/2.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/3.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/4.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/4.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/5.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/5.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/6.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/6.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="form-check my-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                            <label class="form-check-label h6" for="flexCheckChecked1">
                                                Yesterday
                                            </label>
                                        </div>
                                        <ul class="list-unstyled row lightgallery">
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/7.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/7.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/8.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/8.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/9.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/9.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/10.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/10.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/11.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/11.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/12.jpg')}}" class="glightbox card br-5 search-images" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/12.jpg')}}" alt="image" class="br-5">
                                                    <span class="view-all-search fs-16 fw-bold">+267</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="form-check my-4">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                            <label class="form-check-label h6" for="flexCheckChecked2">
                                                20 Jan 2023
                                            </label>
                                        </div>
                                        <ul class="list-unstyled row lightgallery gy-3">
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/2.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/3.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/4.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/4.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/5.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/5.jpg')}}" alt="image" class="br-5">
                                                </a>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/6.jpg')}}" class="glightbox card br-5 search-images" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/6.jpg')}}" alt="image" class="br-5">
                                                    <span class="view-all-search fs-16 fw-bold">+5</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fs-13" id="albums"
                                        role="tabpanel">
                                        <h6 class="mb-4">Albums :</h6>
                                        <ul class="list-unstyled row lightgallery">
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                </a>
                                                <h6 class="text-center mb-0">Recent Photos</h6>
                                                <p class="text-center mb-0 mb-3 text-muted">440 Items</p>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                </a>
                                                <h6 class="text-center mb-0">Recent Photos</h6>
                                                <p class="text-center mb-0 mb-3 text-muted">440 Items</p>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                </a>
                                                <h6 class="text-center mb-0">Recent Photos</h6>
                                                <p class="text-center mb-0 mb-3 text-muted">440 Items</p>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                </a>
                                                <h6 class="text-center mb-0">Recent Photos</h6>
                                                <p class="text-center mb-0 mb-3 text-muted">440 Items</p>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                </a>
                                                <h6 class="text-center mb-0">Recent Photos</h6>
                                                <p class="text-center mb-0 mb-3 text-muted">440 Items</p>
                                            </li>
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2">
                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                </a>
                                                <h6 class="text-center mb-0">Recent Photos</h6>
                                                <p class="text-center mb-0 mb-3 text-muted">440 Items</p>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h6 class="my-4">Other Albums :</h6>
                                                <div class="card border shadow-none">
                                                    <div class="card-body">
                                                        <ul class="list-unstyled row row-cols-2 lightgallery">
                                                            <li class="col-6 px-1 border-bottom-0">
                                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                                </a>
                                                            </li>
                                                            <li class="col-6 px-1 border-bottom-0">
                                                                <a href="{{asset('build/assets/images/media/2.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="image" class="br-5">
                                                                </a>
                                                            </li>
                                                            <li class="col-6 px-1 border-bottom-0">
                                                                <a href="{{asset('build/assets/images/media/3.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="image" class="br-5">
                                                                </a>
                                                            </li>
                                                            <li class="col-6 px-1 border-bottom-0">
                                                                <a href="{{asset('build/assets/images/media/4.jpg')}}" class="glightbox card br-5 search-images" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/4.jpg')}}" alt="image" class="br-5">
                                                                    <span class="view-all-search fs-16 fw-bold">+3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <h6 class="my-4">Social Albums :</h6>
                                                <div class="card border shadow-none">
                                                    <div class="card-body">
                                                        <ul class="list-unstyled row row-cols-2 lightgallery">
                                                            <li class="col-6 px-1 border-bottom-0">
                                                                <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                                </a>
                                                            </li>
                                                            <li class="col-6 px-1 border-bottom-0">
                                                                <a href="{{asset('build/assets/images/media/2.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="image" class="br-5">
                                                                </a>
                                                            </li>
                                                            <li class="col-6 px-1 border-bottom-0">
                                                                <a href="{{asset('build/assets/images/media/3.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="image" class="br-5">
                                                                </a>
                                                            </li>
                                                            <li class="col-6 px-1 border-bottom-0">
                                                                <a href="{{asset('build/assets/images/media/4.jpg')}}" class="glightbox card br-5 search-images" data-gallery="gallery1">
                                                                    <img src="{{asset('build/assets/images/media/4.jpg')}}" alt="image" class="br-5">
                                                                    <span class="view-all-search fs-16 fw-bold">+5</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-6 col-sm-4 col-md-4 col-xl-2 mb-5 border-bottom-0" data-responsive=".{{asset('build/assets/images/media/1.jpg')}}" data-src=".{{asset('build/assets/images/media/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                <a href="javascript:void(0);" class="btn btn-secondary-light d-inline-flex justify-content-center mb-2 w-100">
                                                <i class="fe fe-trash me-1 lh-base"></i>Trash Bin
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-primary-light d-block">
                                                    <i class="fe fe-check-circle me-1"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- GALLERY DEMO CLOSED -->

                        <!-- PAGINATION OPEN -->
                        <div class=" row mb-5">
                            <div class=" col-md-6 mt-1 d-none d-md-block">1 - 10 of 234 photos</div>
                            <div class=" col-md-6">
                                <div class=" float-end">
                                    <ul class=" pagination">
                                        <li class=" page-item page-prev disabled">
                                            <a class=" page-link" href="javascript:void(0);">Prev</a>
                                        </li>
                                        <li class=" page-item active"><a class=" page-link" href=" #">1</a></li>
                                        <li class=" page-item"><a class=" page-link" href=" #">2</a></li>
                                        <li class=" page-item"><a class=" page-link" href=" #">3</a></li>
                                        <li class=" page-item"><a class=" page-link" href=" #">4</a></li>
                                        <li class=" page-item"><a class=" page-link" href=" #">5</a></li>
                                        <li class=" page-item page-next">
                                            <a class=" page-link" href=" #">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- PAGINATION CLOSED -->
                    </div>
                    <!-- container closed -->

@endsection

@section('scripts')
	
	    <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')

@endsection
