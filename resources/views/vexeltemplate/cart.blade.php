
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Cart</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">E-Commerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xxl-9 col-xl-12 col-lg-12">
                                <div class="card cart">
                                    <div class="card-header">
                                        <h3 class="card-title">Shopping Cart</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-vcenter text-nowrap">
                                                <thead>
                                                    <tr class="border-top">
                                                        <th>Product</th>
                                                        <th>Title</th>
                                                        <th>Price</th>
                                                        <th class="w-150p">Quantity</th>
                                                        <th>Subtotal</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="">
                                                                <img src="{{asset('build/assets/images/products/9.jpg')}}" alt="" class="cart-img text-center">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            A blue flower bucket
                                                            <p class="mb-0 text-muted">Quantity : 2Kgs</p>
                                                        </td>
                                                        <td class="fw-bold">$568</td>
                                                        <td>
                                                            <div class="product-quantity-container">
                                                                <div class="input-group rounded flex-nowrap">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                    <input type="text" class="form-control form-control-sm text-center w-50p" aria-label="quantity" id="product-quantity1" value="1">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-plus"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$568</td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <a href="javascript:void(0);" class="btn btn-success-light btn-sm fs-13"><i class="fe fe-heart lh-base"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-danger-light btn-sm fs-13"><i class="fe fe-trash-2 lh-base"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="">
                                                                <img src="{{asset('build/assets/images/products/10.jpg')}}" alt="" class="cart-img">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            A New Magnus airpods
                                                            <p class="mb-0 text-muted">Quantity : 1 piece</p>
                                                        </td>
                                                        <td class="fw-bold">$1,027</td>
                                                        <td>
                                                            <div class="product-quantity-container">
                                                                <div class="input-group rounded flex-nowrap">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                    <input type="text" class="form-control form-control-sm text-center w-50p" aria-label="quantity" id="product-quantity2" value="1">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-plus"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$3,082</td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <a href="javascript:void(0);" class="btn btn-success-light btn-sm fs-13"><i class="fe fe-heart lh-base"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-danger-light btn-sm fs-13"><i class="fe fe-trash-2 lh-base"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="">
                                                                <img src="{{asset('build/assets/images/products/8.jpg')}}" alt="" class="cart-img">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Kids T-shirts
                                                            <p class="mb-0 text-muted">Quantity : 3pcs</p>
                                                        </td>
                                                        <td class="fw-bold">$1,589</td>
                                                        <td>
                                                            <div class="product-quantity-container">
                                                                <div class="input-group rounded flex-nowrap">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                    <input type="text" class="form-control form-control-sm text-center w-50p" aria-label="quantity" id="product-quantity3" value="1">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-plus"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$7,945</td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <a href="javascript:void(0);" class="btn btn-success-light btn-sm fs-13"><i class="fe fe-heart lh-base"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-danger-light btn-sm fs-13"><i class="fe fe-trash-2 lh-base"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="">
                                                                <img src="{{asset('build/assets/images/products/7.jpg')}}" alt="" class="cart-img">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Rose Liquid Bottle
                                                            <p class="mb-0 text-muted">Quantity : 1pc</p>
                                                        </td>
                                                        <td class="fw-bold">$1,027</td>
                                                        <td>
                                                            <div class="product-quantity-container">
                                                                <div class="input-group rounded flex-nowrap">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                    <input type="text" class="form-control form-control-sm text-center w-50p" aria-label="quantity" id="product-quantity4" value="1">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-plus"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$3,082</td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <a href="javascript:void(0);" class="btn btn-success-light btn-sm fs-13"><i class="fe fe-heart lh-base"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-danger-light btn-sm fs-13"><i class="fe fe-trash-2 lh-base"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="">
                                                                <img src="{{asset('build/assets/images/products/5.jpg')}}" alt="" class="cart-img">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Hand Picked Camera
                                                            <p class="mb-0 text-muted">Quantity : 1pc</p>
                                                        </td>
                                                        <td class="fw-bold">$1,589</td>
                                                        <td>
                                                            <div class="product-quantity-container">
                                                                <div class="input-group rounded flex-nowrap">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                    <input type="text" class="form-control form-control-sm text-center w-50p" aria-label="quantity" id="product-quantity5" value="1">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-plus"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$7,945</td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <a href="javascript:void(0);" class="btn btn-success-light btn-sm fs-13"><i class="fe fe-heart lh-base"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-danger-light btn-sm fs-13"><i class="fe fe-trash-2 lh-base"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="">
                                                                <img src="{{asset('build/assets/images/products/11.jpg')}}" alt="" class="cart-img">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Green Mike Shoes
                                                            <p class="mb-0 text-muted">Quantity : 1pc</p>
                                                        </td>
                                                        <td class="fw-bold">$3,589</td>
                                                        <td>
                                                            <div class="product-quantity-container">
                                                                <div class="input-group rounded flex-nowrap">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                    <input type="text" class="form-control form-control-sm text-center w-50p" aria-label="quantity" id="product-quantity6" value="1">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-plus"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$3,589</td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <a href="javascript:void(0);" class="btn btn-success-light btn-sm fs-13"><i class="fe fe-heart lh-base"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-danger-light btn-sm fs-13"><i class="fe fe-trash-2 lh-base"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="">
                                                                <img src="{{asset('build/assets/images/products/12.jpg')}}" alt="" class="cart-img">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            Black Sunshade Glasses
                                                            <p class="mb-0 text-muted">Quantity : 1pc</p>
                                                        </td>
                                                        <td class="fw-bold">$609</td>
                                                        <td>
                                                            <div class="product-quantity-container">
                                                                <div class="input-group rounded flex-nowrap">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                    <input type="text" class="form-control form-control-sm text-center w-50p" aria-label="quantity" id="product-quantity7" value="1">
                                                                    <button class="btn btn-icon btn-light input-group-text  product-quantity-plus"><i class="ri-add-line"></i></button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>$1,218</td>
                                                        <td>
                                                            <div class="btn-list">
                                                                <a href="javascript:void(0);" class="btn btn-success-light btn-sm fs-13"><i class="fe fe-heart lh-base"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-danger-light btn-sm fs-13"><i class="fe fe-trash-2 lh-base"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Cart Totals</div>
                                    </div>
                                    <div class="card-body pb-3">
                                        <p class="mb-0 fw-bold">Have a Coupon code ?</p>
                                        <div class="mb-3 mt-2">
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" placeholder="Enter Coupon Code here...">
                                                <span class="input-group-text btn btn-primary">Apply Coupon</span>
                                            </div>
                                        </div>
                                        <div>
                                            <table class="table table-borderless text-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-start fs-16 fw-bold py-2">Sub Total</td>
                                                        <td class="text-end py-2"><span class="fw-bold  ms-auto">$568</span></td>
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
                                                        <td class="text-start fs-18 py-2">Total Bill</td>
                                                        <td class="text-end py-2"><span class="ms-2 fw-bold fs-23">$568</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div>
                                                <a href="{{url('checkout')}}" class="btn btn-success btn-lg btn-block">Proceed to Check out<i class="fa fa-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{url('shop')}}" class="btn btn-secondary btn-lg btn-block"><i class="fa fa-arrow-left me-1"></i>Return to Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Internal Cart JS -->
        @vite('resources/assets/js/cart.js')

@endsection
