
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
                        <h1 class="page-title">Blog Post</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Extention</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Add New Post</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 mt-0 form-label">Blog Title :</label>
                                            <div class="">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label">Categories :</label>
                                            <div class="">
                                                <select class="form-control" name="Category" id="Category">
                                                    <option value="">Select</option>
                                                    <option value="br">Technology</option>
                                                    <option value="cz">Travel</option>
                                                    <option value="de">Food</option>
                                                    <option value="pl">Fashion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="col-md-3 form-label">Author Name:</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="">
                                                    <label class="col-md-3 form-label">Author Email:</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Row -->
                                        <div class="row">
                                            <label class="col-md-3 form-label mb-4">Blog Description :</label>
                                            <div class="mb-2">
                                                <div id="product-features"></div>
                                            </div>
                                        </div>
                                        <!--End Row-->

                                        <div class="form-group mb-0">
                                            <label class="col-md-3 form-label mb-4">File Upload :</label>
                                            <input type="file" class="product-Images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <a href="javascript:void(0);" class="btn btn-primary">Create Post</a>
                                        <a href="javascript:void(0);" class="btn btn-default">Discard</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Recent Posts</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <div class="d-flex overflow-visible">
                                                <a aria-label="anchor" href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/05.jpg')}}"></a>
                                                <div class="ps-4 flex-column">
                                                    <span class="badge bg-primary-transparent mb-1">Lifestyle</span>
                                                    <h6 class="mb-0 fw-semibold"><a href="{{url('blog-details')}}">Generator on the Internet..</a></h6>
                                                    <div class="text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est...</div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-4">
                                                <a aria-label="anchor" href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/10.jpg')}}"></a>
                                                <div class="ps-4 flex-column">
                                                    <span class="badge bg-secondary-transparent mb-1">Business</span>
                                                    <h6 class="mb-0 fw-semibold"><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h6>
                                                    <div class="text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est...</div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-4">
                                                <a aria-label="anchor" href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/11.jpg')}}"></a>
                                                <div class="ps-4 flex-column">
                                                    <span class="badge bg-success-transparent mb-1">Travel</span>
                                                    <h6 class="mb-0 fw-semibold"><a href="{{url('blog-details')}}">Generator on the Internet..</a></h6>
                                                    <div class="text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est...</div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-4">
                                                <a aria-label="anchor" href="{{url('blog-details')}}" class="card-aside-column br-5 cover-image" data-bs-image-src="{{asset('build/assets/images/media/files/06.jpg')}}"></a>
                                                <div class="ps-4 flex-column">
                                                    <span class="badge bg-info-transparent mb-1">Meeting</span>
                                                    <h6 class="mb-0 fw-semibold"><a href="{{url('blog-details')}}">Voluptatem quia voluptas...</a></h6>
                                                    <div class="text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Professional Blog Writers</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="">
                                            <div class="d-flex overflow-visible">
                                                <img class="avatar bradius avatar-xl me-3" src="{{asset('build/assets/images/users/1.jpg')}}" alt="avatar-img">
                                                <div class="media-body valign-middle">
                                                    <a href="{{url('profile')}}" class="h6 fw-semibold">Simon Sais</a>
                                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-4">
                                                <img class="avatar bradius avatar-xl me-3" src="{{asset('build/assets/images/users/3.jpg')}}" alt="avatar-img">
                                                <div class="media-body valign-middle">
                                                    <a href="{{url('profile')}}" class="h6 fw-semibold">Cherry Blossom</a>
                                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-4">
                                                <img class="avatar bradius avatar-xl me-3" src="{{asset('build/assets/images/users/5.jpg')}}" alt="avatar-img">
                                                <div class="media-body valign-middle">
                                                    <a href="{{url('profile')}}" class="h6 fw-semibold">Ivan Notheridiya</a>
                                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-4">
                                                <img class="avatar bradius avatar-xl me-3" src="{{asset('build/assets/images/users/15.jpg')}}" alt="avatar-img">
                                                <div class="media-body valign-middle">
                                                    <a href="{{url('profile')}}" class="h6 fw-semibold">Manny Jah</a>
                                                    <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Filepond JS -->
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

        <!-- Internal blog-post JS -->
        @vite('resources/assets/js/blog-post.js')

@endsection
