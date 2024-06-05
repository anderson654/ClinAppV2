
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Product Details</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">E-Commerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row row-sm">
                                            <div class="col-xl-6 col-lg-12 col-md-12">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="product-carousel">
                                                            <div id="Slider" class="carousel slide border rounded-2" data-bs-ride="false">
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item active"><img src="{{asset('build/assets/images/png/7.png')}}" alt="img" class="img-fluid mx-auto d-block">
                                                                        <div class="text-center btn-list">
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item"> <img src="{{asset('build/assets/images/png/5.png')}}" alt="img" class="img-fluid mx-auto d-block">
                                                                        <div class="text-center btn-list">
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item"> <img src="{{asset('build/assets/images/png/3.png')}}" alt="img" class="img-fluid mx-auto d-block">
                                                                        <div class="text-center btn-list">
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item"> <img src="{{asset('build/assets/images/png/2.png')}}" alt="img" class="img-fluid mx-auto d-block">
                                                                        <div class="text-center btn-list">
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item"> <img src="{{asset('build/assets/images/png/4.png')}}" alt="img" class="img-fluid mx-auto d-block">
                                                                        <div class="text-center btn-list">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix carousel-slider">
                                                            <div id="thumbcarousel" class="carousel slide" data-bs-interval="t">
                                                                <div class="carousel-inner">
                                                                    <ul class="carousel-item active">
                                                                        <li data-bs-target="#Slider" data-bs-slide-to="0" class="thumb active m-2"><img src="{{asset('build/assets/images/png/7.png')}}" alt="img"></li>
                                                                        <li data-bs-target="#Slider" data-bs-slide-to="1" class="thumb m-2"><img src="{{asset('build/assets/images/png/5.png')}}" alt="img"></li>
                                                                        <li data-bs-target="#Slider" data-bs-slide-to="2" class="thumb m-2"><img src="{{asset('build/assets/images/png/3.png')}}" alt="img"></li>
                                                                        <li data-bs-target="#Slider" data-bs-slide-to="3" class="thumb m-2"><img src="{{asset('build/assets/images/png/2.png')}}" alt="img"></li>
                                                                        <li data-bs-target="#Slider" data-bs-slide-to="4" class="thumb m-2"><img src="{{asset('build/assets/images/png/4.png')}}" alt="img"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="details col-xl-6 col-lg-12 col-md-12">
                                                <div class="mt-3">
                                                    <span class="badge bg-secondary mb-2">New Arrival</span>
                                                    <h3 class="fw-semibold">A Navy blue full Sleeve Tshirt for Men</h3>
                                                    <p class="fs-13 text-success mb-1">Today's deal</p>
                                                    <h2>$868 <span class="fs-16 text-muted text-decoration-line-through">$1688</span> <span class="fs-12 text-success">65% Off today</span></h2>
                                                    <div class="mb-3">
                                                        <div class="mb-0 text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <h6>Choose Size</h6>
                                                    <div class="mb-4">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="Radio" id="Radio-sm">
                                                            <label class="form-check-label" for="Radio-sm">
                                                                S
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="Radio" id="Radio-sm1">
                                                            <label class="form-check-label" for="Radio-sm1">
                                                                M
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="Radio" id="Radio-sm2">
                                                            <label class="form-check-label" for="Radio-sm2">
                                                                L
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="Radio" id="Radio-sm3">
                                                            <label class="form-check-label" for="Radio-sm3">
                                                                XL
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="Radio" id="Radio-sm4">
                                                            <label class="form-check-label" for="Radio-sm4">
                                                                XXL
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="Radio" id="Radio-sm5" disabled>
                                                            <label class="form-check-label" for="Radio-sm5">
                                                                XXXL (out of stock)
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <h6>Colors</h6>
                                                    <form class="shop__filter mb-3">
                                                        <div class="row gutters-xs">
                                                            <div class="col-auto">
                                                                <label class="colorinput">
                                                                    <input name="color" type="radio" value="azure"
                                                                        class="colorinput-input" checked>
                                                                    <span class="colorinput-color bg-azure"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <label class="colorinput">
                                                                    <input name="color" type="radio" value="indigo"
                                                                        class="colorinput-input">
                                                                    <span class="colorinput-color bg-indigo"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <label class="colorinput">
                                                                    <input name="color" type="radio" value="purple"
                                                                        class="colorinput-input">
                                                                    <span class="colorinput-color bg-purple"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <label class="colorinput">
                                                                    <input name="color" type="radio" value="pink"
                                                                        class="colorinput-input">
                                                                    <span class="colorinput-color bg-pink"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <label class="colorinput">
                                                                    <input name="color" type="radio" value="red"
                                                                        class="colorinput-input">
                                                                    <span class="colorinput-color bg-red"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <label class="colorinput">
                                                                    <input name="color" type="radio" value="orange"
                                                                        class="colorinput-input">
                                                                    <span class="colorinput-color bg-orange"></span>
                                                                </label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <label class="colorinput">
                                                                    <input name="color" type="radio" value="yellow"
                                                                        class="colorinput-input">
                                                                    <span class="colorinput-color bg-yellow"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="mb-4 btn-list">
                                                        <a href="{{url('checkout')}}" class="btn btn-success w-md d-inline-flex justify-content-center align-items-center"><i class="fe fe-shopping-cart me-1 lh-base"></i> Buy Now</a>
                                                        <a href="{{url('cart')}}" class="btn btn-info w-md d-inline-flex justify-content-center align-items-center"><i class="fe fe-shopping-bag me-1 lh-base"></i> Add to cart</a>
                                                    </div>
                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <h6>Product Description :</h6>
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-nowrap table-sm">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row" class="fw-semibold">
                                                                                    Brand
                                                                                </th>
                                                                                <td>Orange.Inc</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" class="fw-semibold">
                                                                                    Model Name
                                                                                </th>
                                                                                <td>
                                                                                    Orange watch series 4
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" class="fw-semibold">
                                                                                    Color
                                                                                </th>
                                                                                <td>
                                                                                    Raging Brass
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" class="fw-semibold">
                                                                                    Style
                                                                                </th>
                                                                                <td>
                                                                                    GPS
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" class="fw-semibold">
                                                                                    Special Features
                                                                                </th>
                                                                                <td>
                                                                                    Heart rate sensor,GPS,Wifi calling,SAmoled display e.t.c
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Total Price</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless text-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-start fs-16 fw-bold pb-2 pt-0">Sub Total</td>
                                                        <td class="text-end pb-2 pt-0"><span class="fw-bold  ms-auto">$568</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start py-2">Shipping Charges</td>
                                                        <td class="text-end py-2"><span class="fw-bold text-green">0 (Free)</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start py-2">Tax</td>
                                                        <td class="text-end py-2"><span class="fw-bold text-danger">+ $39</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start py-2">Coupon Discount</td>
                                                        <td class="text-end py-2"><span class="fw-bold text-success">- $15%</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start fs-18 pt-2 pb-0">Total Bill</td>
                                                        <td class="text-end pt-2 pb-0"><span class="ms-2 fw-bold fs-23">$607</span></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div>
                                            <a href="{{url('shop')}}" class="btn btn-secondary btn-block"><i class="fa fa-arrow-left me-1"></i> Continue Shopping</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Applicable offers</div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <span class="input-group input-group-sm mb-4">
                                                <input type="text" class="form-control form-control-sm" placeholder="Coupon Code..">
                                                <span class="input-group-text btn btn-primary">Apply</span>
                                            </span>
                                        </div>
                                        <ul>
                                            <li class="d-flex">
                                                <div><svg style="width:20px;height:20px"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#00a5a2"
                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                </svg></div>
                                                <div class="ms-2">
                                                    <p class="text-secondary fw-bold mb-0">Offer Price : 568</p>
                                                    <p>Flat 35% Off, only on the First purchase</p>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div><svg style="width:20px;height:20px"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#00a5a2"
                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                </svg></div>
                                                <div class="ms-2">
                                                    <p class="text-secondary fw-bold mb-0">No cost EMI available</p>
                                                    <p class="mb-0">Offer applicable on any bank's credit cards only.</p>
                                                    <p>EMI starting from 500$ per month</p>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div><svg style="width:20px;height:20px"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#00a5a2"
                                                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                </svg></div>
                                                <div class="ms-2">
                                                    <p>EMI starting from 500$ per month</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-md-12">
                                <div class="card productdesc">
                                    <div class="card-header p-0">
                                        <div class=" tab-menu-heading border-0">
                                            <div class="tabs-menu">
                                                <!-- Tabs -->
                                                <ul class="nav panel-tabs">
                                                    <li><a href="#tab5" class="active" data-bs-toggle="tab">Specifications</a></li>
                                                    <li><a href="#tab7" data-bs-toggle="tab">Features</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="panel panel-primary">
                                            <div class="tabs-menu-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab5">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <td class="fw-bold border-0">Category :</td>
                                                                    <td class="border-0">T-shirt</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold border-0">Color :</td>
                                                                    <td class="border-0">Navy Blue</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold border-0">Brand :</td>
                                                                    <td class="border-0">Tommy Hilfiger</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold border-0">Size :</td>
                                                                    <td class="border-0">L - UK</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold border-0">Material :</td>
                                                                    <td class="border-0">Cotton</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold border-0">Package Dimensions :</td>
                                                                    <td class="border-0">33x22x3cm; 450 Grams</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold border-0">Manufacturer :</td>
                                                                    <td class="border-0">Chokka Production</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold border-0">Best Sellers Rank :</td>
                                                                    <td class="border-0"> #141 in Clothing & Accessories (See Top 100 in Clothing & Accessories)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-bold border-0">Customer Reviews :</td>
                                                                    <td class="border-0">
                                                                        <p class="text-muted float-start me-3">
                                                                            <span class="fa fa-star text-warning"></span>
                                                                            <span class="fa fa-star text-warning"></span>
                                                                            <span class="fa fa-star text-warning"></span>
                                                                            <span class="fa fa-star-half-o text-warning"></span>
                                                                            <span class="fa fa-star-o text-warning"></span>
                                                                            <span class="text-success fw-semibold">(2,076 ratings)</span>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <h4 class="mt-3 fw-semibold">Description :</h4>
                                                        <p class="mb-1 fs-15">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                                            similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                                        <p class="mb-0 fs-15">odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane" id="tab7">
                                                        <ul>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">Asthetic Product - more lively movies and music</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">Long lasting 7,040 mAH battery with fast adaptive charging</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">8 MP Primary Camera, 5 MP Front Facing Camera</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">Seamless apps and gaming experience with Qualcomm Snapdragon 662 processor (4X2.0 GHz+4X1.8 GHz)</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">Long lasting 7,040 mAH battery with fast adaptive charging</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">Asthetic Product - more lively movies and music</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">8 MP Primary Camera, 5 MP Front Facing Camera</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">Seamless apps and gaming experience with Qualcomm Snapdragon 662 processor (4X2.0 GHz+4X1.8 GHz)</span></li>
                                                            <li class="mb-4"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">Seamless apps and gaming experience with Qualcomm Snapdragon 662 processor (4X2.0 GHz+4X1.8 GHz)</span></li>
                                                            <li class="mb-3"><span><svg style="width:20px;height:20px"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#00a5a2"
                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                            </svg></span><span class="ms-2">Customer care :1234 567 678</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane" id="tab8">
                                                        <div class="row p-3">
                                                            <div class="col-xl-1">
                                                                <h2 class="text-warning display-5">4.5</h2>
                                                                <div class="text-warning mb-2">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </div>
                                                                <h6>6 Reviews</h6>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">5 star</p>
                                                                    </div>
                                                                    <div class="col px-0">
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar bg-primary" style="width: 75%;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">1500</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">4 star</p>
                                                                    </div>
                                                                    <div class="col px-0">
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar bg-primary" style="width: 65%;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">1800</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">3 star</p>
                                                                    </div>
                                                                    <div class="col px-0">
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar bg-primary" style="width: 55%;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">1200</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">2 star</p>
                                                                    </div>
                                                                    <div class="col px-0">
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar bg-warning" style="width: 35%;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">750</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">1 star</p>
                                                                    </div>
                                                                    <div class="col px-0">
                                                                        <div class="progress progress-xs">
                                                                            <div class="progress-bar bg-warning" style="width: 15%;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <p class="fw-bold mb-0">150</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row p-3 mt-3">
                                                            <div class="col-xl-4 justify-content-center">
                                                                <div class="row mb-3">
                                                                    <div class="col-xl-2">
                                                                        <span class="avatar avatar-lg rounded-pill cover-image">
                                                                            <img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-circle" alt="img">
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <p class="mb-0 fw-bold">Lunaa Abrec</p>
                                                                        <p class="mb-0 text-muted">August 17, 2022</p>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="text-warning mb-0">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                        <p>Looks Cool and Comfortable</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-xl-2">
                                                                        <span class="avatar avatar-lg rounded-pill cover-image">
                                                                            <img src="{{asset('build/assets/images/users/17.jpg')}}" class="rounded-circle" alt="img">
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <p class="mb-0 fw-bold">Albert Ion</p>
                                                                        <p class="mb-0 text-muted">November 22, 2022</p>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="text-warning mb-0">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                        <p>It's Ok product !!</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-xl-2">
                                                                        <span class="avatar avatar-lg rounded-pill cover-image">
                                                                            <img src="{{asset('build/assets/images/users/5.jpg')}}" class="rounded-circle" alt="img">
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <p class="mb-0 fw-bold">Jaanne Scott</p>
                                                                        <p class="mb-0 text-muted">September 21, 2022</p>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="text-warning mb-0">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                        <p>Good Quality Fabric</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-xl-2">
                                                                        <span class="avatar avatar-lg rounded-pill cover-image">
                                                                            <img src="{{asset('build/assets/images/users/16.jpg')}}" class="rounded-circle" alt="img">
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <p class="mb-0 fw-bold">Jon Fincher</p>
                                                                        <p class="mb-0 text-muted">September 18, 2021</p>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="text-warning mb-0">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                        <p>Good Quality at Reasonable price</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col-xl-2">
                                                                        <span class="avatar avatar-lg rounded-pill cover-image">
                                                                            <img src="{{asset('build/assets/images/users/6.jpg')}}" class="rounded-circle" alt="img">
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <p class="mb-0 fw-bold">Elena Gell</p>
                                                                        <p class="mb-0 text-muted">June 15, 2022</p>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="text-warning mb-0">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                        </div>
                                                                        <p>Sold a Good Product</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Ratings & Reviews</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <div class="me-3">
                                                <a href="javascript:void(0);"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/users/5.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="fw-semibold mt-0 mb-1">Dennis Trexy</h6>
                                                <div class="text-warning mb-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p class="font-13 text-muted">Good Looking.........</p>
                                                <a class="like" href="javascript:;">
                                                    <span class="badge btn-danger-light rounded-pill py-2 px-3">
                                                            <i class="fe fe-heart me-1"></i>56</span>
                                                </a>
                                                <span class="reply" id="16">
                                                        <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media mb-3">
                                            <div class=" me-3">
                                                <a href="javascript:void(0);"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/users/15.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1 fw-semibold">Terrie Boaler</h6>
                                                <div class="text-warning mb-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p class="font-13 text-muted">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p>
                                                <a class="like" href="javascript:;">
                                                    <span class="badge btn-danger-light rounded-pill py-2 px-3">
                                                            <i class="fe fe-heart me-1"></i>56</span>
                                                </a>
                                                <span class="reply" id="6">
                                                        <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left me-1"></i>Reply</span></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media mb-0">
                                            <div class=" me-3">
                                                <a href="javascript:void(0);"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/users/6.jpg')}}"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1 fw-semibold">Adam Cotter</h6>
                                                <div class="text-warning mb-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <p class="font-13 text-muted mb-0">Speed Service and good response from support agents !! </p>
                                            </div>
                                        </div>
                                        <h5 class="mt-4 mb-3 fw-semibold">Write a Review</h5>
                                        <div>
                                            <form class="form-horizontal  m-t-20" action="{{url('index')}}">
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input class="form-control" type="text" required="" placeholder="Rating*">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <textarea class="form-control" rows="5">Your Review*</textarea>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-rounded  waves-effect waves-light">Submit Review</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="row">
                                    <h4 class="fw-bold mb-3">Related Products</h4>
                                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li><a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye"></i></a></li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/9.png')}}" class="w-100 rounded-2" alt="img"></a>
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
                                                    <a href="{{url('cart')}}" class="btn btn-primary"><i class="fe fe-shopping-cart me-2"></i> Add to Cart</a>
                                                    <a class="btn btn-light"><i class="fe fe-share-2 me-2"></i> Share</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li><a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye"></i></a></li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/10.png')}}" class="w-100 rounded-2" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">A Green Half Sleeve Tshirt</h6>
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
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li><a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye">  </i> </a></li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/11.png')}}" class="w-100 rounded-2" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">A Semi Minimal Chair</h6>
                                                            <small class="text-muted">Furnitures</small>
                                                            <h5 class="mt-1">$11,500 <span class="text-muted text-decoration-line-through fs-13">$20,000</span> <span class="text-success fw-semibold fs-14">47% off today</span></h5>
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
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6">
                                                    <ul class="icons">
                                                        <li><a href="{{url('shop-description')}}" class="btn btn-primary"> <i class="fe fe-eye"></i></a></li>
                                                        <li><a href="{{url('cart')}}" class="btn btn-info"><i  class="fe fe-shopping-cart"></i></a></li>
                                                        <li><a href="{{url('wishlist')}}" class="btn btn-danger"><i class="fe fe-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <a href="{{url('shop-description')}}"><img src="{{asset('build/assets/images/shop/13.png')}}" class="w-100 rounded-2" alt="img"></a>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <div>
                                                            <h6 class="mb-0">Casual Comfort Leather Shoes</h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
