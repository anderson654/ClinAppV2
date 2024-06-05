
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

        <!-- Filepond CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Add Product</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">E-Commerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 -->
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add New Product</div>
                                    </div>
                                    <div class="card-body">
                                        <label class="fw-semibold">Product Name</label>
                                        <div>
                                            <input type="text" class="form-control" id="input-placeholder" placeholder="Enter product Name">
                                        </div>
                                        <label class="mt-4 fw-semibold">Product Description</label>
                                        <div class="">
                                            <div id="product-features">
                                                <p>It is a long established fact that a reader will be distracted by the <b>readable content</b> of a page when looking at its layout. <a href="#">Read More</a></p>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less<span style="background-color: rgb(255, 231, 156); color: #000;"> normal distribution </span>of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            
                                            </div>
                                        </div>
                                        <h6 class="fw-semibold mt-4">Upload Product</h6>
                                        <div>
                                            <input type="file" class="product-Images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                        </div>
                                        <div>
                                            <h6 class="fw-semibold mt-4">General Informatioon</h6>
                                            <div class="row mt-3">
                                                <div class="col-xl-6">
                                                    <div>
                                                        <label class="fw-semibold">Category</label>
                                                        <select class="form-control" name="Category" id="Category">
                                                            <option value="">Select</option>
                                                            <option value="1">Fashions</option>
                                                            <option value="2">Electronics</option>
                                                            <option value="3">Accessories</option>
                                                            <option value="4">Furnitures</option>
                                                            <option value="5">Pharmacy</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div>
                                                        <label>Brand</label>
                                                        <select class="form-control" name="Brands" id="Brands">
                                                            <option value="">Choose one</option>
                                                            <option value="1">Bitter Drum</option>
                                                            <option value="2">Empty Plate</option>
                                                            <option value="3">Distinct</option>
                                                            <option value="4">Getaway</option>
                                                            <option value="5">Dizzy Crow</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div>
                                                        <label class="form-label">Size</label>
                                                        <select class="form-control" name="Sizes" id="Sizes">
                                                            <option value="">Choose one</option>
                                                                <option value="1">S</option>
                                                                <option value="2">M</option>
                                                                <option value="3">L</option>
                                                                <option value="4">XL</option>
                                                                <option value="5">XXL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div>
                                                        <label class="form-label">Color</label>
                                                        <select class="form-control" name="Color" id="Color">
                                                            <option value="">Choose one</option>
                                                            <option value="1">Red</option>
                                                            <option value="2">White</option>
                                                            <option value="3">Black</option>
                                                            <option value="4">Yellow</option>
                                                            <option value="5">Green</option>
                                                            <option value="6">Blue</option>
                                                            <option value="7">Pink</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Cost</label>
                                                    <div class="input-group">
                                                        <button class="btn btn-light" type="button">$</button>
                                                        <input type="text" class="form-control" placeholder="0.000 /-" aria-label="Example text with button addon">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Discount</label>
                                                    <div class="input-group">
                                                        <button class="btn btn-light" type="button">%</button>
                                                        <input type="text" class="form-control" placeholder="0.000 /-" aria-label="Example text with button addon"  >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="fw-semibold mt-4">Publishing Status</h6>
                                            <div class="row mt-3">
                                                <div class="col-xl-6">
                                                    <label class="fw-semibold" for="publish-date">Published Date</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-text tx-fixed-white"> <i class="ri-calendar-line"></i> </div>
                                                            <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="publish-time" >Published Time</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-text tx-fixed-white"> <i class="ri-time-line"></i> </div>
                                                            <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div>
                                                        <label class="form-label">Status</label>
                                                        <select class="form-control" name="status" id="status">
                                                            <option value="">Choose one</option>
                                                            <option value="1">Choose One</option>
                                                            <option value="2">Published</option>
                                                            <option value="2">Scheduled</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div>
                                                        <label class="form-label">Visibility</label> 
                                                        <select class="form-control" name="Visibility" id="Visibility">
                                                            <option value="">Choose one</option>
                                                            <option value="1">Choose One</option>
                                                            <option value="2">Public</option>
                                                            <option value="2">Private</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="float-end btn-list">
                                            <a href="javascript:void(0);" class="btn btn-light">Discard</a>
                                            <a href="javascript:void(0);" class="btn btn-primary">Add Product</a>
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

        <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Color Picker JS -->
        <script src="{{asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>
	
	    <!-- Filepond JS -->
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.j')}}s"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

        <!-- Date & Time Picker JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- Internal Add Products JS -->
        @vite('resources/assets/js/add-products.js')

@endsection
