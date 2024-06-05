
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Wishlist</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">E-Commerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <h6 class="mb-0 fw-semibold">Showing 1-8 of 45 results</h6>
                                            </div>
                                            <div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search here..." aria-label="Text input with 2 dropdown buttons">
                                                    <a href="javascript:void(0);" class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-xxl-5">
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete" ><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/9.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">A White Table Lamp</h6>
                                                <small class="text-muted">Electronics</small>
                                                <h5 class="mt-1">$852 <span class="text-muted text-decoration-line-through fs-13">$1700</span> <span class="text-success fw-semibold fs-14">50% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-secondary">SALE!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary "><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light "><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete"><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/10.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">A Green Sleeve Tshirt</h6>
                                                <small class="text-muted">Clothes</small>
                                                <h5 class="mt-1">$950 <span class="text-muted text-decoration-line-through fs-13">$1900</span> <span class="text-success fw-semibold fs-14">59% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success">DEAL!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete"><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/11.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">A Semi Minimal Chair</h6>
                                                <small class="text-muted">Furnitures</small>
                                                <h5 class="mt-1">$1,150 <span class="text-muted text-decoration-line-through fs-13">$2,000</span> <span class="text-success fw-semibold fs-14">47% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success">DEAL!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete"><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/13.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">Casual Leather Shoes</h6>
                                                <small class="text-muted">Footwear</small>
                                                <h5 class="mt-1">$2,200 <span class="text-muted text-decoration-line-through fs-13">$3,500</span> <span class="text-success fw-semibold fs-14">35% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success">DEAL!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete"><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/12.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">Fashion 3D Sun Glasses</h6>
                                                <small class="text-muted">Fashion</small>
                                                <h5 class="mt-1">$990 <span class="text-muted text-decoration-line-through fs-13">$1100</span> <span class="text-success fw-semibold fs-14">19% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success">DEAL!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete"><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/14.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">A Brown Men's Hoodie</h6>
                                                <small class="text-muted">Fashion</small>
                                                <h5 class="mt-1">$1,500 <span class="text-muted text-decoration-line-through fs-13">$1,900</span> <span class="text-success fw-semibold fs-14">35% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-danger">SALE!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete"><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/15.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">Three Water Bottles</h6>
                                                <small class="text-muted">Stationary</small>
                                                <h5 class="mt-1">$500 <span class="text-muted text-decoration-line-through fs-13">$600</span> <span class="text-success fw-semibold fs-14">10% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success">DEAL!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete"><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/16.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">A Brown Women Bag</h6>
                                                <small class="text-muted">Stationary</small>
                                                <h5 class="mt-1">$800 <span class="text-muted text-decoration-line-through fs-13">$1,700</span> <span class="text-success fw-semibold fs-14">40% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-danger">SALE!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete"><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/18.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">Soundtrack Headsets</h6>
                                                <small class="text-muted">Gadgets</small>
                                                <h5 class="mt-1">$900 <span class="text-muted text-decoration-line-through fs-13">$1,800</span> <span class="text-success fw-semibold fs-14">50% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success">DEAL!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-6 col-lg-6 col-sm-6 wishlist-product">
                                <div class="product-grid card">
                                    <div class="card-body">
                                        <div>
                                            <ul class="icons-wishlist">
                                                <li><a href="javascript:void(0);" class="btn btn-danger btn-delete"><i class="fe fe-trash-2"></i></a></li>
                                            </ul>
                                            <div>
                                                <img src="{{asset('build/assets/images/shop/19.png')}}" class="w-100 rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-0">Men's Red Tshirt</h6>
                                                <small class="text-muted">Fashions</small>
                                                <h5 class="mt-1">$650 <span class="text-muted text-decoration-line-through fs-13">$1,700</span> <span class="text-success fw-semibold fs-14">40% off today</span></h5>
                                                <div class="mb-0 text-warning">
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star text-warning"></i>
                                                    <i class="fa fa-star-half-o text-warning"></i>
                                                    <i class="fa fa-star-o text-warning"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="badge bg-danger">SALE!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer btn-list text-center p-3">
                                        <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                        <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <div class="mb-5">
                            <ul class="pagination mb-0">
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
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- CUSTOM JS -->
        @vite('resources/assets/js/wishlist.js')

@endsection
