
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Toasts</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Toasts</li>
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
                                        <div class="card-title">
                                            <h3 class="card-title">Live Toasts</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <button type="button" class="btn btn-primary" id="liveToastBtn">Show live
                                                toast</button>
                                        </div>
                                        <div class="toast-container position-fixed top-0 end-0 p-3">
                                            <div id="liveToast" class="toast" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header text-default">
                                                    <img class="bd-placeholder-img rounded me-2" src="{{asset('build/assets/images/brand/favicon.ico')}}" alt="...">
                                                    <strong class="me-auto">Vexel</strong>
                                                    <small>11 mins ago</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Basic Toasts</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                <div class="toast-header">
                                                    <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <small>11 mins ago</small>
                                                    <button aria-label="Close" class="btn-close fs-20" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Translucent Toasts</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                <div class="toast-header">
                                                    <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <small>11 mins ago</small>
                                                    <button aria-label="Close" class="btn-close fs-20" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN  -->
                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Custom content Toasts</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-6 mt-1">
                                                <div class="toast align-items-center show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                    <div class="d-flex">
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                        <button aria-label="Close" class="btn-close fs-20 ms-auto mt-2 pe-2" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6 mt-1">
                                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                    <div class="toast-body">
                                                        Hello, world! This is a toast message.
                                                        <div class="mt-2 pt-2 border-top">
                                                            <button type="button" class="btn btn-primary btn-sm">Take action</button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Color Toasts</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="toast align-items-center tx-fixed-white bg-primary border-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                    <div class="d-flex">
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                        <button aria-label="Close" class="btn-close fs-20 ms-auto mt-2 pe-2 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2 mt-md-0">
                                                <div class="toast align-items-center tx-fixed-white bg-secondary border-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                    <div class="d-flex">
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                        <button aria-label="Close" class="btn-close fs-20 ms-auto mt-2 pe-2 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="toast align-items-center tx-fixed-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                    <div class="d-flex">
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                        <button aria-label="Close" class="btn-close fs-20 ms-auto mt-2 pe-2 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="toast align-items-center tx-fixed-white bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                    <div class="d-flex">
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                        <button aria-label="Close" class="btn-close fs-20 ms-auto mt-2 pe-2 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Toasts Styles</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="row gy-3">
                                                <div class="col-lg-6 col-xl-3 col-sm-6">
                                                    <div class="toast show bg-primary tx-fixed-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                        <div class="toast-header flex-wrap">
                                                            <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="" class="me-2" height="18">
                                                            <strong class="me-auto text-primary">Bootstrap</strong>
                                                            <small>11 mins ago</small>
                                                            <button aria-label="Close" class="btn-close fs-20" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-3 col-sm-6">
                                                    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                        <div class="toast-header bg-info tx-fixed-white flex-wrap   ">
                                                            <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                            <strong class="me-auto">Bootstrap</strong>
                                                            <small>11 mins ago</small>
                                                            <button aria-label="Close" class="btn-close fs-20 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-3 col-sm-6">
                                                    <div class="toast toast-border-secondary bg-secondary-transparent align-items-center show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                        <div class="d-flex">
                                                            <div class="toast-body d-flex flex-wrap">
                                                                <span class="avatar avatar-md avatar-radius bg-secondary me-2"><i class="bi bi-bell fs-15"></i></span>
                                                                <div>
                                                                    <h6 class="mb-0">Header Toast</h6>
                                                                    <p class="mb-0 fs-14">Hello, world! This is a toast message.</p>
                                                                </div>
                                                            </div>
                                                            <button aria-label="Close" class="btn-close fs-20 ms-auto mt-2 pe-2" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-3 col-sm-6">
                                                    <div class="toast toast-border-success align-items-center show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                        <div class="d-flex">
                                                            <div class="toast-body d-flex flex-wrap">
                                                                <span class="avatar avatar-md rounded-pill bg-success me-2"><i class="bi bi-headset fs-15"></i></span>
                                                                <div>
                                                                    <h6 class="mb-0">Header Toast</h6>
                                                                    <p class="mb-0 text-muted fs-14">Hello, world! This is a toast message.</p>
                                                                </div>
                                                            </div>
                                                            <button aria-label="Close" class="btn-close fs-20 ms-auto mt-2 pe-2" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-3 CLOSED -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Top Toasts Alignments</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary" id="topleftToastBtn">Top Left</button>
                                                <button type="button" class="btn btn-secondary" id="topcenterToastBtn">Top Center</button>
                                                <button type="button" class="btn btn-success" id="toprightToastBtn">Top Right</button>
                                                <button type="button" class="btn btn-info" id="topfullwidthToastBtn">Top Full Width</button>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed top-0 start-0 p-3">
                                            <div id="topleft-Toast" class="toast border-0" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-primary tx-fixed-white">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
                                            <div id="topcenter-Toast" class="toast border-0" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-secondary tx-fixed-white">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed top-0 end-0 p-3">
                                            <div id="topright-Toast" class="toast border-0" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-success tx-fixed-white">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed top-0 end-0 start-0 w-100 p-3">
                                            <div id="topfullwidth-Toast" class="toast border-0 w-100" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-info tx-fixed-white">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Bottom Toasts Alignments</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-info-light" id="bottomleftToastBtn">Bottom Left</button>
                                                <button type="button" class="btn btn-success-light" id="bottomcenterToastBtn">Bottom Center</button>
                                                <button type="button" class="btn btn-primary-light" id="bottomrightToastBtn">Bottom Right</button>
                                                <button type="button" class="btn btn-danger-light" id="bottomfullwidthToastBtn">Full Width</button>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed bottom-0 start-0 p-3">
                                            <div id="bottomleft-Toast" class="toast border-0 bg-info-transparent backdropfilter-20" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-info-transparent">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 text-info" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3">
                                            <div id="bottomcenter-Toast" class="toast border-0 bg-success-transparent backdropfilter-20" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-success-transparent">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 text-success" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                            <div id="bottomright-Toast" class="toast border-0 bg-primary-transparent backdropfilter-20" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-primary-transparent">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 text-primary" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed bottom-0 end-0 start-0 w-100 p-3">
                                            <div id="bottomfullwidth-Toast" class="toast border-0 bg-danger-transparent backdropfilter-20 w-100" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-danger-transparent">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 text-danger" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Middle Toasts Alignments</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-outline-primary" id="middleleftToastBtn">Middle Left</button>
                                                <button type="button" class="btn btn-outline-secondary" id="middlecenterToastBtn">Middle Center</button>
                                                <button type="button" class="btn btn-outline-success" id="middlerightToastBtn">Middle Right</button>
                                                <button type="button" class="btn btn-outline-info" id="middlefullwidthToastBtn">Full Width</button>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed top-50 start-0 translate-middle-y p-3">
                                            <div id="middleleft-Toast" class="toast border-primary bg-primary-transparent backdropfilter-20" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-primary tx-fixed-white">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed top-50 start-50 translate-middle">
                                            <div id="middlecenter-Toast" class="toast border-secondary bg-secondary-transparent backdropfilter-20" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-secondary tx-fixed-white">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed top-50 end-0 translate-middle-y p-3">
                                            <div id="middleright-Toast" class="toast border-success bg-success-transparent backdropfilter-20" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-success tx-fixed-white">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toast-container position-fixed top-50 start-50 translate-middle w-100">
                                            <div id="middlefullwidth-Toast" class="toast border-info w-100 bg-info-transparent backdropfilter-20" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-header toast-header bg-info tx-fixed-white">
                                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="" class="me-2" height="18">
                                                    <strong class="me-auto">Bootstrap</strong>
                                                    <button aria-label="Close" class="btn-close fs-20 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="toast-body">
                                                    Your,toast message here.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-4 CLOSED -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Stacking Toasts</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-4 bg-light border">
                                            <div class="toast-container position-static">
                                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                    <div class="toast-header">
                                                        <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="" class="me-2" height="18">
                                                        <strong class="me-auto">Bootstrap</strong>
                                                        <small class="text-muted">just now</small>
                                                        <button aria-label="Close" class="btn-close fs-20" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        See? Just like this.
                                                    </div>
                                                </div>
                                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                    <div class="toast-header">
                                                        <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="" class="me-2" height="18">
                                                        <strong class="me-auto">Bootstrap</strong>
                                                        <small class="text-muted">2 secs ago</small>
                                                        <button aria-label="Close" class="btn-close fs-20" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Heads up, toasts will stack automatically
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Placement Toast</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-4 bg-light border">
                                            <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100 h-180">
                                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                                    <div class="toast-header">
                                                        <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="" class="me-2" height="18">
                                                        <strong class="me-auto">Bootstrap</strong>
                                                        <small>11 mins ago</small>
                                                        <button aria-label="Close" class="btn-close fs-20" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="toast-body">
                                                        Hello, world! This is a toast message.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-5 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Toast JS -->
        @vite('resources/assets/js/toast.js')

@endsection
