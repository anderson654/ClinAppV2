
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Tags</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tags</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Default tag</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <span class="tag">First tag</span>
                                                    <span class="tag">Second tag</span>
                                                    <span class="tag">Third tag</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Link tag</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <a href="javascript:void(0);" class="tag">First tag</a>
                                                    <a href="javascript:void(0);" class="tag">Second tag</a>
                                                    <a href="javascript:void(0);" class="tag">Third tag</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar tag</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-primary-transparent border-primary-2">
                                                        <span class="tag-avatar avatar avatar-sm cover-image rounded-pill" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-secondary-transparent border-secondary-2">
                                                        <span class="tag-avatar avatar avatar-sm cover-image rounded-pill" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span> Secondary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-success-transparent border-success-2">
                                                        <span class="tag-avatar avatar avatar-sm cover-image rounded-pill" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span> Success
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-warning-transparent border-warning-2">
                                                        <span class="tag-avatar avatar avatar-sm cover-image rounded-pill" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span> Warning
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dismissable Tags</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <span class="tag alert tx-fixed-white bg-primary border-primary">
                                                            One
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert tx-fixed-white bg-secondary border-secondary">
                                                            Two
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert tx-fixed-white bg-info border-info">
                                                            Three
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert tx-fixed-white bg-success border-success">
                                                            Four
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert tx-fixed-white bg-warning border-warning ">
                                                            Five
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Transparent Tags</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <span class="tag alert bg-primary-transparent border-primary-2">
                                                            One
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert bg-secondary-transparent border-secondary-2">
                                                            Two
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert bg-info-transparent border-info-2">
                                                            Three
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert bg-success-transparent border-success-2">
                                                            Four
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert bg-warning-transparent border-warning-2">
                                                            Five
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Transparent Tags</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <span class="tag alert bg-transparent tag-outline-primary">
                                                            One
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert bg-transparent tag-outline-secondary">
                                                            Two
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert bg-transparent tag-outline-info">
                                                            Three
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert bg-transparent tag-outline-success">
                                                            Four
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                    <span class="tag alert bg-transparent tag-outline-warning">
                                                            Five
                                                            <a href="javascript:void(0);" class="tag-addon" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Rounded tag Style</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-2">
                                                    <div class="col-lg-3">
                                                        <div class="tags">
                                                            <span class="tag rounded-pill bg-primary tx-fixed-white border-primary">First tag</span>
                                                            <span class="tag rounded-pill bg-secondary tx-fixed-white border-secondary">Second tag</span>
                                                            <span class="tag rounded-pill bg-success tx-fixed-white border-success">Third tag</span>
                                                            <span class="tag rounded-pill bg-info tx-fixed-white border-info">Fourth tag</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="tags">
                                                            <span class="tag rounded-pill bg-primary-transparent border-primary-2">First tag</span>
                                                            <span class="tag rounded-pill bg-danger-transparent border-secondary-2">Second tag</span>
                                                            <span class="tag rounded-pill bg-info-transparent border-info-2">Third tag</span>
                                                            <span class="tag rounded-pill bg-warning-transparent border-warning-2">Fourth tag</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="tags">
                                                            <span class="tag rounded-pill bg-primary-gradient tx-fixed-white border-primary">First tag</span>
                                                            <span class="tag rounded-pill bg-danger-gradient tx-fixed-white border-danger">Second tag</span>
                                                            <span class="tag rounded-pill bg-info-gradient tx-fixed-white border-info">Third tag</span>
                                                            <span class="tag rounded-pill bg-warning-gradient tx-fixed-white border-warning">Fourth tag</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="tags">
                                                            <span class="tag rounded-pill tag-outline-primary">First tag</span>
                                                            <span class="tag rounded-pill tag-outline-danger">Second tag</span>
                                                            <span class="tag rounded-pill tag-outline-pink">Third tag</span>
                                                            <span class="tag rounded-pill tag-outline-success">Fourth tag</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Rounded tag with icon</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-primary-transparent border-primary-2">
                                                        <span class="tag-avatar avatar avatar-sm bg-primary rounded-pill"><i class="fe fe-bell"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-secondary-transparent border-secondary-2">
                                                        <span class="tag-avatar avatar avatar-sm bg-secondary rounded-pill"><i class="fe fe-settings"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-success-transparent border-success-2">
                                                        <span class="tag-avatar avatar avatar-sm bg-success rounded-pill"><i class="fe fe-share-2"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-warning-transparent border-warning-2">
                                                        <span class="tag-avatar avatar avatar-sm bg-warning rounded-pill"><i class="fe fe-user"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-info-transparent border-info-2">
                                                        <span class="tag-avatar avatar avatar-sm bg-info rounded-pill"><i class="fe fe-wifi"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-danger-transparent border-danger-2">
                                                        <span class="tag-avatar avatar avatar-sm bg-danger rounded-pill"><i class="fe fe-airplay"></i></span> Primary
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Solid Rounded tag with icon</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-primary tx-fixed-white border-primary">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-primary rounded-pill"><i class="fe fe-bell"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-secondary tx-fixed-white border-secondary">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-secondary rounded-pill"><i class="fe fe-settings"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-success tx-fixed-white border-success">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-success rounded-pill"><i class="fe fe-user"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-warning tx-fixed-white border-warning">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-warning rounded-pill"><i class="fe fe-share-2"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-info tx-fixed-white border-info">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-info rounded-pill"><i class="fe fe-wifi"></i></span> Primary
                                                    </a>
                                                    <a href="javascript:void(0);" class="tag rounded-pill bg-danger tx-fixed-white border-danger">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-danger rounded-pill"><i class="fe fe-airplay"></i></span> Primary
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dismissable Solid Rounded tag with icon</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <div class="tag rounded-pill bg-primary tx-fixed-white alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-primary rounded-pill"><i class="fe fe-bell"></i></span> Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-white-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                    <div class="tag rounded-pill bg-secondary tx-fixed-white alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-secondary rounded-pill"><i class="fe fe-settings"></i></span> Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-white-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                    <div class="tag rounded-pill bg-success tx-fixed-white alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-success rounded-pill"><i class="fe fe-user"></i></span> Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-white-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                    <div class="tag rounded-pill bg-info tx-fixed-white alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-info rounded-pill"><i class="fe fe-wifi"></i></span> Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-white-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                    <div class="tag rounded-pill bg-pink tx-fixed-white alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-white text-pink rounded-pill"><i class="fe fe-airplay"></i></span> Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-white-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dismissable Rounded tag with icon</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <div class="tag rounded-pill bg-primary-transparent alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-primary rounded-pill"><i class="fe fe-bell"></i></span>
                                                        Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-primary-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                    <div class="tag rounded-pill bg-secondary-transparent alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-secondary rounded-pill"><i class="fe fe-settings"></i></span> Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-secondary-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                    <div class="tag rounded-pill bg-success-transparent alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-success rounded-pill"><i class="fe fe-share-2"></i></span> Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-success-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                    <div class="tag rounded-pill bg-info-transparent alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-info rounded-pill"><i class="fe fe-wifi"></i></span> Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-info-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                    <div class="tag rounded-pill bg-pink-transparent alert">
                                                        <span class="tag-avatar avatar avatar-sm bg-pink rounded-pill"><i class="fe fe-airplay"></i></span> Primary
                                                        <a href="javascript:void(0);" class="tag-addon rounded-pill bg-pink-transparent" data-bs-dismiss="alert" aria-hidden="true"><i class="fe fe-x"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tags Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="tags">
                                                    <span class="tag rounded-pill tag-sm bg-primary tx-fixed-white">First tag</span>
                                                    <span class="tag rounded-pill tag-md bg-secondary tx-fixed-white">Second tag</span>
                                                    <span class="tag rounded-pill tag-lg bg-success tx-fixed-white">Third tag</span>
                                                    <span class="tag rounded-pill tag-xl bg-pink tx-fixed-white">Third tag</span>
                                                    <span class="tag rounded-pill tag-xxl bg-info tx-fixed-white">Third tag</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
