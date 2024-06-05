
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Filemanager-list</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">File Manager</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Filemanager-list</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 -->
                        <div class="row">
                            <h5 class="mb-3 fw-semibold">File-Manager List</h5>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Dropper.pdf</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-2">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/documents/2.png')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Track.mp4</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-2">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/documents/5.png')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Project.XLSX</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-2">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/documents/1.png')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Vexel.zip</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-2">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/documents/4.png')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Project.doc</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-2">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/documents/3.png')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Flyyer.pdf</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-2">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/documents/2.png')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image01.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/04.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image02.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/06.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image03.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/03.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image04.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/01.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image05.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/02.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image06.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/07.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image07.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/02.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image08.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/01.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image09.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/04.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <a><i class="mdi mdi-file fs-18 text-primary"></i> Image10.jpg</a>
                                        <div class="file-dropdown">
                                            <a href="javascript:void(0);" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-start">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bg-light text-center rounded-2">
                                            <img src="{{asset('build/assets/images/media/files/06.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="card-footer py-2 px-4 list-footer">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="javascript:void(0);" class="fs-12 text-dark">20-12-2023, 245MB</a>
                                            <a href="javascript:void(0);" class="text-dark fs-12"
                                            onclick="toggleStar(this)">
                                                <i class="mdi mdi-star-outline fs-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('modals')

                    <!-- File-Details Modal -->
                    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">File Details</h5>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div>
                                                <img src="{{asset('build/assets/images/media/33.jpg')}}" class="rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-xl-7">
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-bold">File Name</td>
                                                            <td>Media Image</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File Size</td>
                                                            <td>11.45GB</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Uploaded date</td>
                                                            <td>03-11-2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Uploaded by</td>
                                                            <td>Michael Starc</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File format</td>
                                                            <td>psd</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Image height</td>
                                                            <td>350px</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Image Width</td>
                                                            <td>350px</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File location</td>
                                                            <td>storage/documents/images/File.psd</td>
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
                    <!-- File-Details Modal -->

@endsection

@section('scripts')
	
	    <!-- Filemanager-list js -->
        <script src="{{asset('build/assets/filemanager-list.js')}}"></script>

@endsection
