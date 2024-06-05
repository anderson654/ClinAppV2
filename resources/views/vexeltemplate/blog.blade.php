
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Blog</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Extention</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN-->
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                        <a aria-label="anchor" href="{{url('blog-details')}}" class="stretched-link"></a>
                                        <div class="card custom-card overlay-card overflow-auto">
                                            <img src="{{asset('build/assets/images/media/files/04.jpg')}}" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 justify-content-end">
                                                <div class="card-footer border-top-0 tx-fixed-white overflow-auto">
                                                    <h4>Voluptatem quia voluptas.</h4>
                                                    <p class="op-9">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</p>
                                                    <h6 class="fw-semibold mb-0 badge p-2 fs-12 bg-white2">3 Hours ago</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-3">
                                        <a aria-label="anchor" href="{{url('blog-details')}}" class="stretched-link"></a>
                                        <div class="card custom-card overlay-card">
                                            <img src="{{asset('build/assets/images/media/files/02.jpg')}}" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 justify-content-end">
                                                <div class="card-img-overlay d-flex flex-column p-0 justify-content-end">
                                                    <div class="card-footer border-top-0 tx-fixed-white">
                                                        <h5>Became a Identity Crisis</h5>
                                                        <button type="button" class="btn tx-fixed-white btn-sm">Read More <i class="fe fe-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a aria-label="anchor" href="{{url('blog-details')}}" class="stretched-link"></a>
                                        <div class="card custom-card  overlay-card">
                                            <img src="{{asset('build/assets/images/media/files/07.jpg')}}" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 justify-content-end">
                                                <div class="card-footer border-top-0 tx-fixed-white">
                                                    <h5>Building New Marketcap</h5>
                                                    <button type="button" class="btn tx-fixed-white btn-sm">Read More <i class="fe fe-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-3">
                                        <a aria-label="anchor" href="{{url('blog-details')}}" class="stretched-link"></a>
                                        <div class="card custom-card overlay-card">
                                            <img src="{{asset('build/assets/images/media/files/05.jpg')}}" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 justify-content-end">
                                                <div class="card-footer border-top-0 tx-fixed-white">
                                                    <h5>Mobile Delivery Gap</h5>
                                                    <button type="button" class="btn tx-fixed-white btn-sm">Read More <i class="fe fe-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <a aria-label="anchor" href="{{url('blog-details')}}" class="stretched-link"></a>
                                        <div class="card custom-card overlay-card">
                                            <img src="{{asset('build/assets/images/media/files/06.jpg')}}" class="card-img" alt="...">
                                            <div class="card-img-overlay d-flex flex-column p-0 justify-content-end">
                                                <div class="card-footer border-top-0 tx-fixed-white">
                                                    <h5>Web Components</h5>
                                                    <button type="button" class="btn tx-fixed-white btn-sm">Read More <i class="fe fe-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="position-relative">
                                                <a href="{{url('blog-details')}}"><img class="card-img-top" src="{{asset('build/assets/images/media/files/02.jpg')}}" alt="How do you know she is a witch?"><span class="badge bg-success rounded-pill blog-badge">Travel</span></a>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <h5><a href="{{url('blog-details')}}">Generator on the Internet..</a></h5>
                                                <div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
                                                <div class="d-flex align-items-center pt-5 mt-auto">
                                                    <div class="avatar  brround avatar-md me-3 cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></div>
                                                    <div>
                                                        <a href="{{url('profile')}}" class="fw-bold">Carol Paige</a>
                                                        <small class="d-block text-muted">1 days ago</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="icon d-inline-block text-muted"><i class="fe fe-heart me-1 rounded-circle p-2 bg-light text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="position-relative">
                                                <a href="{{url('blog-details')}}"><img class="card-img-top" src="{{asset('build/assets/images/media/files/05.jpg')}}" alt="How do you know she is a witch?"><span class="badge bg-secondary rounded-pill blog-badge">Fashion</span></a>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <h5><a href="{{url('blog-details')}}">Lorem ipsum dolor sit consectetur</a></h5>
                                                <div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
                                                <div class="d-flex align-items-center pt-5 mt-auto">
                                                    <div class="avatar  brround avatar-md me-3 cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></div>
                                                    <div>
                                                        <a href="{{url('profile')}}" class="fw-bold">Anna Ogden</a>
                                                        <small class="d-block text-muted">2 days ago</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="icon d-inline-block text-muted"><i class="fe fe-heart me-1 rounded-circle p-2 bg-light text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="position-relative">
                                                <a href="{{url('blog-details')}}"><img class="card-img-top" src="{{asset('build/assets/images/media/files/08.jpg')}}" alt="How do you know she is a witch?"><span class="badge bg-primary rounded-pill blog-badge">Ecommerce</span></a>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <h5><a href="{{url('blog-details')}}">Night Sky is pleasent to watch.</a></h5>
                                                <div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
                                                <div class="d-flex align-items-center pt-5 mt-auto">
                                                    <div class="avatar  brround avatar-md me-3 cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></div>
                                                    <div>
                                                        <a href="{{url('profile')}}" class="fw-bold">Fiona Hodges</a>
                                                        <small class="d-block text-muted">6 days ago</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="icon d-inline-block text-muted"><i class="fe fe-heart me-1 rounded-circle p-2 bg-light text-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="input-group me-2">
                                                <input type="text" class="form-control border-end-0" placeholder="Search ...">
                                                <button type="button"  aria-label="button" class="btn input-group-text btn-primary tx-fixed-white border-start-0">
                                                    <i class="fe fe-search" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Recent Posts</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <div class="d-flex overflow-visible align-items-center">
                                                <a aria-label="anchor" href="{{url('blog-details')}}" class="avatar avatar-xxl br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/05.jpg')}}"></a>
                                                <div class="ps-4 flex-column">
                                                    <span class="badge bg-primary-transparent mb-1">Lifestyle</span>
                                                    <h6 class="mb-0"><a href="{{url('blog-details')}}">Generator on the Internet..</a></h6>
                                                    <div class="text-muted">Excepteur sint occaecat....</div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible align-items-center mt-4">
                                                <a aria-label="anchor" href="{{url('blog-details')}}" class="avatar avatar-xxl br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/10.jpg')}}"></a>
                                                <div class="ps-4 flex-column">
                                                    <span class="badge bg-secondary-transparent mb-1">Business</span>
                                                    <h6 class="mb-0"><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h6>
                                                    <div class="text-muted">Excepteur sint occaecat....</div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible align-items-center mt-4">
                                                <a aria-label="anchor" href="{{url('blog-details')}}" class="avatar avatar-xxl br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/11.jpg')}}"></a>
                                                <div class="ps-4 flex-column">
                                                    <span class="badge bg-success-transparent mb-1">Travel</span>
                                                    <h6 class="mb-0"><a href="{{url('blog-details')}}">Generator on the Internet..</a></h6>
                                                    <div class="text-muted">Excepteur sint occaecat....</div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible align-items-center mt-4">
                                                <a aria-label="anchor" href="{{url('blog-details')}}" class="avatar avatar-xxl br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/06.jpg')}}"></a>
                                                <div class="ps-4 flex-column">
                                                    <span class="badge bg-info-transparent mb-1">Meeting</span>
                                                    <h6 class="mb-0"><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h6>
                                                    <div class="text-muted">Excepteur sint occaecat....</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card bg-primary text-white card-bg-img">
                                    <div class="card-body">
                                        <h5 class="tx-fixed-white">NEVER MISS A POST !</h5>
                                        <p class="tx-fixed-white">Signup for free to get the latest posts.</p>
                                        <div class="input-group">
                                            <input class="form-control border-0" placeholder="Enter your email id" type="text">
                                            <a href="javascript:void(0);" class="btn btn-secondary">Subscribe<i class="fa fa-paper-plane ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED-->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
