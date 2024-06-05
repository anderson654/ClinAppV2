
@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Search</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Search</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-lg-9 col-xxl-6">
                                                <div class="d-flex align-items-center mb-4">
                                                        <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="">

                                                    <div class="input-group ms-2">
                                                        <input type="text" class="form-control border-end-0" placeholder="Search ..." value="Search...">
                                                        <button class="input-group-text bg-transparent border-start-0 text-muted">
                                                            <i class="fe fe-mic text-muted" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="input-group-text bg-transparent border-start-0 text-muted">
                                                            <i class="fe fe-camera text-muted" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="input-group-text bg-transparent border-start-0   border-end text-muted">
                                                            <i class="fe fe-search text-muted" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-xxl-6">
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-icon btn-outline-light rounded-circle me-2">
                                                        <i class="fe fe-settings"></i>
                                                    </button>
                                                    <button class="btn btn-icon btn-outline-light rounded-circle me-2">
                                                        <i class="fe fe-grid"></i>
                                                    </button>
                                                    <div class="my-auto">
                                                        <a href="#" id="userprofile" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <img src="{{asset('build/assets/images/users/3.jpg')}}" alt="img" width="32" height="32" class="rounded-circle">
                                                        </a>
                                                        <ul class="dropdown-menu overflow-hidden mt-3" aria-labelledby="userprofile">
                                                            <li class="bg-primary p-3 mb-2">
                                                                <div class="d-flex align-items-center w-100">
                                                                    <div class="me-3">
                                                                        <img class="avatar rounded-circle" src="{{asset('build/assets/images/users/3.jpg')}}" alt="img">
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="fs-15 tx-fixed-white font-weight-semibold mb-0">Json Taylor</h6>
                                                                        <span class="tx-fixed-white op-8 fs-11">Web Designer</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li><a class="dropdown-item d-inline-flex" href="{{url('profile')}}"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                                                            <li><a class="dropdown-item d-inline-flex" href="{{url('index')}}"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Dashboard</a></li>
                                                            <li><a class="dropdown-item d-inline-flex border-block-end" href="{{url('blog-post')}}"><i class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Posts & Activities</a></li>
                                                            <li><a class="dropdown-item d-inline-flex" href="{{url('settings')}}"><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings & Privacy</a></li>
                                                            <li><a class="dropdown-item d-inline-flex border-block-end" href="{{url('faq')}}"><i class="ti ti-help fs-18 me-2 op-7"></i>Help Center</a></li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item d-inline-flex" href="{{url('login')}}"><i class="ti ti-user-plus fs-18 me-2 op-7"></i>Add Another Account</a></li>
                                                            <li><a class="dropdown-item d-inline-flex" href="{{url('login')}}"><i class="ti ti-power fs-18 me-2 op-7"></i>Sign Out</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="tabs-menu search-tabs">
                                                    <ul class="nav panel-tabs">
                                                        <li><a href="#tab5" class="active d-flex align-items-center" data-bs-toggle="tab"><i class="fe fe-search fs-13 me-2 d-inline-flex"></i> All Results</a></li>
                                                        <li><a href="#tab6" data-bs-toggle="tab" class="text-dark d-flex align-items-center"><i class="fe fe-image fs-13 me-2 d-inline-flex"></i> Images</a></li>
                                                        <li><a href="#tab7" data-bs-toggle="tab" class="text-dark d-flex align-items-center"><i class="fe fe-book-open fs-13 me-2 d-inline-flex"></i> Books</a></li>
                                                        <li><a href="#tab8" data-bs-toggle="tab" class="text-dark d-flex align-items-center"><i class="fe fe-film fs-13 me-2 d-inline-flex"></i> News</a></li>
                                                        <li><a href="#tab9" data-bs-toggle="tab" class="text-dark d-flex align-items-center"><i class="fe fe-video fs-13 me-2 d-inline-flex"></i> Videos</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-5">
                                        <p class="text-muted mb-0 ps-3">About 12,546,90000 results (0.56 Seconds)</p>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="mb-2">
                                                                <a href="https://spruko.com/demo/templist/" target="_blank" class="h5 text-dark">Templist – HTML5 Digital Marketplace Template by ...</a>
                                                            </div>
                                                            <a href="https://spruko.com/demo/templist/" target="_blank" class="text-primary">https://www.spruko.com/demo/templist</a>
                                                            <p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                                                dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-2">
                                                                <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="h5 text-dark"><i class="fe fe-image fs-15"></i> Images For "Vexel Solutions Pvt Ltd"</a>
                                                            </div>
                                                            <div class="tags my-3">
                                                                <a href="javascript:void(0);" class="tag rounded-pill bg-primary-transparent">
                                                                    <span class="tag-avatar avatar avatar-sm cover-image rounded-pill" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span> Valex
                                                                </a>
                                                                <a href="javascript:void(0);" class="tag rounded-pill bg-secondary-transparent">
                                                                    <span class="tag-avatar avatar avatar-sm cover-image rounded-pill" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span> Vexel
                                                                </a>
                                                                <a href="javascript:void(0);" class="tag rounded-pill bg-success-transparent">
                                                                    <span class="tag-avatar avatar avatar-sm cover-image rounded-pill" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"></span> Spruha
                                                                </a>
                                                                <a href="javascript:void(0);" class="tag rounded-pill bg-warning-transparent">
                                                                    <span class="tag-avatar avatar avatar-sm cover-image rounded-pill" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span> Dayone
                                                                </a>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <a href="{{asset('build/assets/images/media/files/05.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/files/05.jpg')}}" alt="image" class="br-5">
                                                                    </a>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <a href="{{asset('build/assets/images/media/files/06.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/files/06.jpg')}}" alt="image" class="br-5">
                                                                    </a>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <a href="{{asset('build/assets/images/media/files/07.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/files/07.jpg')}}" alt="image" class="br-5">
                                                                    </a>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <a href="{{asset('build/assets/images/media/files/08.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                        <img src="{{asset('build/assets/images/media/files/08.jpg')}}" alt="image" class="br-5">
                                                                    </a>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="search-images">
                                                                        <img class="img-responsive br-5 mb-3 op-2" src="{{asset('build/assets/images/media/files/01.jpg')}}" alt="Thumb-1">
                                                                        <a href="#" class="view-all-search tx-fixed-white fs-16 fw-600">View All</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-2">
                                                                <a href="https://www.spruko.com/demo/spruha/spruha/HTML/index.html" target="_blank" class="h5 text-dark">Spruha template related Images</a>
                                                            </div>
                                                            <div class="tags mb-2">
                                                                <span class="tag">
                                                            background
                                                            <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                        </span>
                                                                <span class="tag">
                                                            admin template
                                                            <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                        </span>
                                                                <span class="tag">
                                                            UX designs
                                                            <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                        </span>
                                                                <span class="tag">
                                                            Presentation
                                                            <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                        </span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <a href="https://spruko.com/demo/spruha/" target="_blank" class="h5 text-dark">Spruha - Bootstrap HTML Dashboard Template</a>
                                                            </div>
                                                            <a href="https://spruko.com/demo/spruha/" target="_blank" class="text-primary">https://www.spruko.com/demo/spruha/html/</a>
                                                            <p class="text-muted mt-2 mb-1">Treal Template included in 30 versions. In the demo 30 versions is shown in 4 floders. And In the final each version has single floder corresponding to that ...</p>
                                                            <p class="text-muted  mb-2">Tags: admin, admin dashboard, admin panel, admin template, backend, bootstrap, bootstrap 4, clean, dashboard, flat, jquery, modern, premium admin templates ...</p>
                                                            <div>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);" class="me-4 d-inline-block"> (48) Reviews</a>
                                                                <a href="javascript:void(0);" class="fw-semibold">USD-$24</a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-2">
                                                                <a href="https://spruko.com/demo/zanex/" target="_blank" class="h5 text-dark">Zanex Website Templates from ThemeForest</a>
                                                            </div>
                                                            <a href="https://spruko.com/demo/zanex/" target="_blank" class="text-primary">https://spruko.com/demo/zanex/html/</a>
                                                            <p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                                                dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                            <div>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);" class="me-4 d-inline-block"> (18) Reviews</a>
                                                                <a href="javascript:void(0);" class="fw-semibold">USD-$12</a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="mb-2">
                                                                <a href="https://spruko.com/demo/gowell/" target="_blank" class="h5 text-dark">Gowell - Travel HTML Template</a>
                                                            </div>
                                                            <a href="https://spruko.com/demo/gowell/" target="_blank" class="text-primary">https://www.spruko.com/demo/gowell/html/</a>
                                                            <p class="text-muted mt-2 mb-1"> Gowell - Travel HTML Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
                                                            <p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim
                                                                ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                                                nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                                            <div>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                                <a href="javascript:void(0);" class="me-4 d-inline-block"> (18) Reviews</a>
                                                                <a href="javascript:void(0);" class="fw-semibold">USD-$12</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex gap-3 align-items-center mb-4">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="mb-1">Vexel Solutions</h5>
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <p class="text-muted mb-0">4.8</p>
                                                                        <div class="text-yellow">
                                                                            <i class="bi bi-star-fill"></i>
                                                                            <i class="bi bi-star-fill"></i>
                                                                            <i class="bi bi-star-fill"></i>
                                                                            <i class="bi bi-star-fill"></i>
                                                                            <i class="bi bi-star-fill"></i>
                                                                        </div>
                                                                        <p class="text-muted mb-0">80 reviews</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="btn-list">
                                                                <a class="btn btn-default btn-sm" href="javascript:void(0);" role="button">Website</a>
                                                                <a class="btn btn-default btn-sm" href="javascript:void(0);" role="button">Contact</a>
                                                                <a class="btn btn-default btn-sm" href="javascript:void(0);" role="button">Location</a>
                                                            </div>
                                                            <div class="my-4">
                                                                <div class="d-flex mb-3">
                                                                    <div>
                                                                        <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2" href="javascript:void(0);"><i class="fe fe-mail"></i></a>
                                                                    </div>
                                                                    <div class="ms-2">
                                                                        <p class="fs-13 fw-600 mb-0">Email</p>
                                                                        <p class="fs-12 text-muted">gracie435@gmail.com.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex mb-3 mt-2">
                                                                    <div>
                                                                        <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2" href="javascript:void(0);"><i class="fe fe-map-pin"></i></a>
                                                                    </div>
                                                                    <div class="ms-2">
                                                                        <p class="fs-13 fw-600 mb-0">Address</p>
                                                                        <p class="fs-12 text-muted">2nd street,houston texas,united states.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex mb-3">
                                                                    <div>
                                                                        <a class="nav-link border rounded-pill avatar avatar-sm bg-light me-2" href="javascript:void(0);"><i class="fe fe-clock"></i></a>
                                                                    </div>
                                                                    <div class="ms-2">
                                                                        <p class="fs-13 fw-600 mb-0">Open Hours</p>
                                                                        <p class="fs-12 text-muted">24/7</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="fs-15 fw-600 mt-3 mb-2">Related Products
                                                                    <span class="float-end fs-12"><a href="javascript:void(0);" class="text-underline"><u>View All</u></a></span>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <a href="{{asset('build/assets/images/media/files/01.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/files/01.jpg')}}" alt="image" class="br-5">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <a href="{{asset('build/assets/images/media/files/02.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/files/02.jpg')}}" alt="image" class="br-5">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <a href="{{asset('build/assets/images/media/files/03.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/files/03.jpg')}}" alt="image" class="br-5">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <a href="{{asset('build/assets/images/media/files/04.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/files/04.jpg')}}" alt="image" class="br-5">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <a href="{{asset('build/assets/images/media/files/05.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/files/05.jpg')}}" alt="image" class="br-5">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <a href="{{asset('build/assets/images/media/files/06.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/files/06.jpg')}}" alt="image" class="br-5">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <a href="{{asset('build/assets/images/media/files/07.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/files/07.jpg')}}" alt="image" class="br-5">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <a href="{{asset('build/assets/images/media/files/08.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                            <img src="{{asset('build/assets/images/media/files/08.jpg')}}" alt="image" class="br-5">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fs-15 fw-600 mt-3 mb-2">Related Tags</div>
                                                            <div class="tags">
                                                                <a href="javascript:void(0);" class="tag">Development</a>
                                                                <a href="javascript:void(0);" class="tag">Design</a>
                                                                <a href="javascript:void(0);" class="tag">Technology</a>
                                                                <a href="javascript:void(0);" class="tag">Popular</a>
                                                                <a href="javascript:void(0);" class="tag">Codiegniter</a>
                                                                <a href="javascript:void(0);" class="tag">JavaScript</a>
                                                                <a href="javascript:void(0);" class="tag">Bootstrap</a>
                                                                <a href="javascript:void(0);" class="tag">PHP</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <div class="demo-gallery card">
                                                <div class="card-body">
                                                    <div class="row mb-4 gy-3">
                                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4">
                                                            <div class="d-flex align-items-center border rounded-pill">
                                                                <span class="avatar avatar-md rounded-circle cover-image avatar-pullup me-2" data-bs-image-src="{{asset('build/assets/images/media/files/02.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Jooliee"></span>
                                                                <p class="mb-0">Admin Template</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4">
                                                            <div class="d-flex align-items-center border rounded-pill">
                                                                <span class="avatar avatar-md rounded-circle cover-image avatar-pullup me-2" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Jooliee"></span>
                                                                <p class="mb-0">Personal</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4">
                                                            <div class="d-flex align-items-center border rounded-pill">
                                                                <span class="avatar avatar-md rounded-circle cover-image avatar-pullup me-2" data-bs-image-src="{{asset('build/assets/images/media/files/03.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Jooliee"></span>
                                                                <p class="mb-0">Task</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4">
                                                            <div class="d-flex align-items-center border rounded-pill">
                                                                <span class="avatar avatar-md rounded-circle cover-image avatar-pullup me-2" data-bs-image-src="{{asset('build/assets/images/media/files/04.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Jooliee"></span>
                                                                <p class="mb-0">Job Search</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4">
                                                            <div class="d-flex align-items-center border rounded-pill">
                                                                <span class="avatar avatar-md rounded-circle cover-image avatar-pullup me-2" data-bs-image-src="{{asset('build/assets/images/media/files/05.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Jooliee"></span>
                                                                <p class="mb-0">Dashboard</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4">
                                                            <div class="d-flex align-items-center border rounded-pill">
                                                                <span class="avatar avatar-md rounded-circle cover-image avatar-pullup me-2" data-bs-image-src="{{asset('build/assets/images/media/files/06.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Jooliee"></span>
                                                                <p class="mb-0">Website</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="lightgallery" class="list-unstyled row">
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/1.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/1.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/2.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/2.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/3.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/3.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/4.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/4.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/5.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/5.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/6.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/6.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/7.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/7.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/8.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/8.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/9.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/9.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-xl-0 mb-md-0 mb-4 border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/10.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/10.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-4 mb-md-0 mb-xl-0  border-bottom-0">
                                                            <a href="{{asset('build/assets/images/media/11.jpg')}}" class="glightbox card br-5" data-gallery="gallery1">
                                                                <img src="{{asset('build/assets/images/media/11.jpg')}}" alt="image" class="br-5">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab7">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-2">
                                                        <a href="javascript:void(0);" class="h5 text-dark">Zendash - Bootstrap HTML Dashboard Template</a>
                                                    </div>
                                                    <a href="https://spruko.com/demo/zendash/" target="_blank" class="text-primary">https://www.spruko.com/demo/zendash/html/</a>
                                                    <p class="text-muted mt-2 mb-1">Treal Template included in 30 versions. In the demo 30 versions is shown in 4 floders. And In the final each version has single floder corresponding to that ...</p>
                                                    <p class="text-muted  mb-2">Tags: admin, admin dashboard, admin panel, admin template, backend, bootstrap, bootstrap 4, clean, dashboard, flat, jquery, modern, premium admin templates ...</p>
                                                    <div>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);" class="me-4 d-inline-block"> (48) Reviews</a>
                                                        <a href="javascript:void(0);" class="fw-semibold">USD-$24</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-2">
                                                        <a href="javascript:void(0);" class="h5 text-dark">Zendash template related Images</a>
                                                    </div>
                                                    <div class="tags mb-2">
                                                        <span class="tag">
                                                    background
                                                    <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                </span>
                                                        <span class="tag">
                                                    admin template
                                                    <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                </span>
                                                        <span class="tag">
                                                    UX designs
                                                    <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                </span>
                                                        <span class="tag">
                                                    Presentation
                                                    <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                </span>
                                                    </div>
                                                    <div class="mb-2">
                                                        <a href="javascript:void(0);" class="h5 text-dark">Zendash - Bootstrap HTML Dashboard Template</a>
                                                    </div>
                                                    <a href="https://spruko.com/demo/zendash/" target="_blank" class="text-primary">https://www.spruko.com/demo/zendash/html/</a>
                                                    <p class="text-muted mt-2 mb-1">Treal Template included in 30 versions. In the demo 30 versions is shown in 4 floders. And In the final each version has single floder corresponding to that ...</p>
                                                    <p class="text-muted  mb-2">Tags: admin, admin dashboard, admin panel, admin template, backend, bootstrap, bootstrap 4, clean, dashboard, flat, jquery, modern, premium admin templates ...</p>
                                                    <div>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);" class="me-4 d-inline-block"> (48) Reviews</a>
                                                        <a href="javascript:void(0);" class="fw-semibold">USD-$24</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-2">
                                                        <a href="javascript:void(0);" class="h5 text-dark">Eduserv Website Templates from ThemeForest</a>
                                                    </div>
                                                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="text-primary">https://spruko.com/demo/eduserv/html/</a>
                                                    <p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                                        dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <div>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);" class="me-4 d-inline-block"> (18) Reviews</a>
                                                        <a href="javascript:void(0);" class="fw-semibold">USD-$12</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-2">
                                                        <a href="javascript:void(0);" class="h5 text-dark">HostOne – Web Hosting HTML Creative Responsive Clean Template</a>
                                                    </div>
                                                    <a href="https://spruko.com/demo/hostone/" target="_blank" class="text-primary">https://www.spruko.com/demo/hostone/html/</a>
                                                    <p class="text-muted mt-2 mb-1"> HostOne - Web Hosting HTML Creative Responsive Clean Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
                                                    <p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim
                                                        ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                                        nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                                    <div>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);" class="me-4 d-inline-block"> (18) Reviews</a>
                                                        <a href="javascript:void(0);" class="fw-semibold">USD-$12</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-2">
                                                        <a href="javascript:void(0);" class="h5 text-dark">Zendash template related Images</a>
                                                    </div>
                                                    <div class="tags mb-2">
                                                        <span class="tag">
                                                    background
                                                    <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                </span>
                                                        <span class="tag">
                                                    admin template
                                                    <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                </span>
                                                        <span class="tag">
                                                    UX designs
                                                    <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                </span>
                                                        <span class="tag">
                                                    Presentation
                                                    <a href="javascript:void(0);" class="tag-addon"><i class="fe fe-x"></i></a>
                                                </span>
                                                    </div>
                                                    <div class="mb-2">
                                                        <a href="javascript:void(0);" class="h5 text-dark">Zendash - Bootstrap HTML Dashboard Template</a>
                                                    </div>
                                                    <a href="https://spruko.com/demo/zendash/" target="_blank" class="text-primary">https://www.spruko.com/demo/zendash/html/</a>
                                                    <p class="text-muted mt-2 mb-1">Treal Template included in 30 versions. In the demo 30 versions is shown in 4 floders. And In the final each version has single floder corresponding to that ...</p>
                                                    <p class="text-muted  mb-2">Tags: admin, admin dashboard, admin panel, admin template, backend, bootstrap, bootstrap 4, clean, dashboard, flat, jquery, modern, premium admin templates ...</p>
                                                    <div>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);" class="me-4 d-inline-block"> (48) Reviews</a>
                                                        <a href="javascript:void(0);" class="fw-semibold">USD-$24</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-2">
                                                        <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="h5 text-dark">Eduserv Website Templates from ThemeForest</a>
                                                    </div>
                                                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="text-primary">https://spruko.com/demo/eduserv/html/</a>
                                                    <p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                                        dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <div>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);" class="me-4 d-inline-block"> (18) Reviews</a>
                                                        <a href="javascript:void(0);" class="fw-semibold">USD-$12</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-2">
                                                        <a href="https://spruko.com/demo/hostone/" target="_blank" class="h5 text-dark">HostOne – Web Hosting HTML Creative Responsive Clean Template</a>
                                                    </div>
                                                    <a href="https://spruko.com/demo/hostone/" target="_blank" class="text-primary">https://www.spruko.com/demo/hostone/html/</a>
                                                    <p class="text-muted mt-2 mb-1"> HostOne - Web Hosting HTML Creative Responsive Clean Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
                                                    <p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim
                                                        ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                                        nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                                    <div>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);" class="me-4 d-inline-block"> (18) Reviews</a>
                                                        <a href="javascript:void(0);" class="fw-semibold">USD-$12</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab9">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-2">
                                                        <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="h5 text-dark">Eduserv Website Templates from ThemeForest</a>
                                                    </div>
                                                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="text-primary">https://spruko.com/demo/eduserv/html/</a>
                                                    <p class="text-muted mt-2 mb-2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                                        dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                                    <div>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);" class="me-4 d-inline-block"> (18) Reviews</a>
                                                        <a href="javascript:void(0);" class="fw-semibold">USD-$12</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-2">
                                                        <a href="https://spruko.com/demo/hostone/" target="_blank" class="h5 text-dark">HostOne – Web Hosting HTML Creative Responsive Clean Template</a>
                                                    </div>
                                                    <a href="https://spruko.com/demo/hostone/" target="_blank" class="text-primary">https://www.spruko.com/demo/hostone/html/</a>
                                                    <p class="text-muted mt-2 mb-1"> HostOne - Web Hosting HTML Creative Responsive Clean Template by sprukosoft HostOne -HTML Templates is a Clean, Simple Responsive Template Design.</p>
                                                    <p class="text-muted  mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim
                                                        ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                                        nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                                    <div>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);"><i class="fa fa-star-o text-yellow fs-16"></i></a>
                                                        <a href="javascript:void(0);" class="me-4 d-inline-block"> (18) Reviews</a>
                                                        <a href="javascript:void(0);" class="fw-semibold">USD-$12</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="mb-5">
                                        <ul class="pagination justify-content-start">
                                            <li class="page-item page-prev disabled">
                                                <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                                            <li class="page-item page-next">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- CONTAINER CLOSE -->

@endsection

@section('scripts')
	
	    <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')

@endsection
