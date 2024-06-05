
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
        
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Dashboard</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Start::Row-1 -->
                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="row">
                                    <div class="col-xxl-5 col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1">
                                                                <p class="mb-0">Total Orders</p>
                                                                <span class="fs-5">45</span>
                                                                <span class="fs-12 text-success ms-1"><i
                                                                        class="ti ti-trending-up mx-1"></i>0.5%</span>
                                                            </div>
                                                            <div class="min-w-fit-content ms-3">
                                                                <span
                                                                    class="avatar avatar-md br-5 bg-primary-transparent text-primary">
                                                                    <i class="fe fe-user fs-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1">
                                                                <p class="mb-0">Total Package</p>
                                                                <span class="fs-5">10</span>
                                                                <span class="fs-12 text-secondary ms-1"><i
                                                                        class="ti ti-trending-down mx-1"></i>8.0%</span>
                                                            </div>
                                                            <div class="min-w-fit-content ms-3">
                                                                <span
                                                                    class="avatar avatar-md br-5 bg-secondary-transparent text-secondary">
                                                                    <i class="fe fe-package fs-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1">
                                                                <p class="mb-0">Total Payments</p>
                                                                <span class="fs-5">60</span>
                                                                <span class="fs-12 text-success ms-1"><i
                                                                        class="ti ti-trending-up mx-1"></i>3.5%</span>
                                                            </div>
                                                            <div class="min-w-fit-content ms-3">
                                                                <span
                                                                    class="avatar avatar-md br-5 bg-warning-transparent text-warning">
                                                                    <i class="fe fe-credit-card fs-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start flex-wrap gap-1">
                                                            <div class="flex-grow-1">
                                                                <p class="mb-0">Subscriptions </p>
                                                                <span class="fs-5">10</span>
                                                                <span class="fs-12 text-success ms-1"><i
                                                                        class="ti ti-trending-up mx-1"></i>0.5%</span>
                                                            </div>
                                                            <div class="min-w-fit-content">
                                                                <span class="avatar avatar-md br-5 bg-info-transparent">
                                                                    <i class="fe fe-user-plus fs-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-3 flex-wrap gap-1">
                                                            <span
                                                                class="avatar avatar-md stat-avatar rounded-circle text-bg-warning fs-18 min-w-fit-content me-2">
                                                                <i class="bi bi-bag-check"></i>
                                                            </span>
                                                            <p class="mb-0 flex-grow-1">Total Sales by Unit
                                                            </p>
                                                        </div>
                                                        <span class="fs-5">$12,897</span>
                                                        <span class="fs-12 text-warning ms-1"><i
                                                                class="ti ti-trending-up mx-1"></i>3.5%</span>
                                                        <div class="fw-normal d-flex align-items-center mb-2 mt-4">
                                                            <p class="mb-0 flex-grow-1">Active Sales</p>
                                                            <span>3,274</span>
                                                        </div>
                                                        <div class="progress custom-progress-1" style="height: 5px;">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 50%;" aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer p-0 text-center">
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);"
                                                                class="px-3 py-2 text-warning">View Details <i
                                                                    class="ti ti-external-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="card overflow-hidden">
                                                    <div class="card-body p-0">
                                                        <div class="px-3 pt-3">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span
                                                                    class="avatar avatar-md stat-avatar rounded-circle text-bg-primary fs-18 min-w-fit-content me-2">
                                                                    <i class="bi bi-bar-chart"></i>
                                                                </span>
                                                                <p class="mb-0 flex-grow-1">Total Revenue</p>
                                                            </div>
                                                            <span class="fs-5">$8,889</span>
                                                            <span class="fs-12 text-success ms-1"><i
                                                                    class="ti ti-trending-up mx-1"></i>5.5%</span>
                                                        </div>
                                                        <div id="totalRevenue"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div
                                                        class="card-header d-flex align-items-center justify-content-between border-bottom">
                                                        <h6 class="card-title">Recent Activities </h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <ul class="mb-0 recent-activity">
                                                            <li class="list-item activity-avatar-before info">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="avatar p-1 avatar-md rounded-circle bg-info-transparent min-w-fit-content">
                                                                        <span
                                                                            class="avatar avatar-sm activity-avatar bg-info min-w-fit-content rounded-circle cover-image"><i
                                                                                class="bi bi-briefcase fs-14"></i></span>
                                                                    </div>
                                                                    <div class="ms-3 flex-fill">
                                                                        <p class="mb-0 fs-14">Nile Robetz mentioned a jogh
                                                                            in post</p>
                                                                        <span class="clearfix"></span>
                                                                        <small class="text-muted fs-12 ">Uploaded a new
                                                                            post</small>
                                                                        <span class="clearfix"></span>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <span class="text-muted fs-12 ms-2 text-truncate"><i
                                                                                class="bi bi-clock"></i> 11:17 am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-item activity-avatar-before danger">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="avatar p-1 avatar-md rounded-circle bg-danger-transparent min-w-fit-content">
                                                                        <span
                                                                            class="avatar avatar-sm activity-avatar bg-danger min-w-fit-content rounded-circle cover-image"><i
                                                                                class="bi bi-brightness-high fs-14"></i></span>
                                                                    </div>
                                                                    <div class="ms-3 flex-fill">
                                                                        <p class="mb-0 fs-14">Always look on the bright side
                                                                            of life</p>
                                                                        <span class="clearfix"></span>
                                                                        <small class="text-muted fs-12">Look at the
                                                                            Life</small>
                                                                        <span class="clearfix"></span>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <span class="text-muted fs-12 ms-2 text-truncate"><i
                                                                                class="bi bi-clock"></i> 08:19 am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-item activity-avatar-before success">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="avatar p-1 avatar-md rounded-circle bg-success-transparent min-w-fit-content">
                                                                        <span
                                                                            class="avatar avatar-sm activity-avatar bg-success min-w-fit-content rounded-circle cover-image"><i
                                                                                class="bi bi-peace fs-14"></i></span>
                                                                    </div>
                                                                    <div class="ms-3 flex-fill">
                                                                        <p class="mb-0 fs-14">Peace on earth a wonderful
                                                                            width</p>
                                                                        <span class="clearfix"></span>
                                                                        <small class="text-muted fs-12">Wonderful earth
                                                                            gives a peace</small>
                                                                        <span class="clearfix"></span>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <span class="text-muted fs-12 ms-2 text-truncate"><i
                                                                                class="bi bi-clock"></i> 10:43 am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-item activity-avatar-before warning">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="avatar p-1 avatar-md rounded-circle bg-warning-transparent box-shadow-warning min-w-fit-content">
                                                                        <span
                                                                            class="avatar avatar-sm activity-avatar bg-warning min-w-fit-content rounded-circle cover-image"><i
                                                                                class="bi bi-clock-history fs-14"></i></span>
                                                                    </div>
                                                                    <div class="ms-3 flex-fill">
                                                                        <p class="mb-0 fs-14">A brief history of creation
                                                                        </p>
                                                                        <span class="clearfix"></span>
                                                                        <small class="text-muted fs-12">Create your own
                                                                            history</small>
                                                                        <span class="clearfix"></span>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <span class="text-muted fs-12 ms-2 text-truncate"><i
                                                                                class="bi bi-clock"></i> 07:27 pm</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-item activity-avatar-before danger">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="avatar p-1 avatar-md rounded-circle bg-danger-transparent min-w-fit-content">
                                                                    
                                                                        <span
                                                                            class="avatar avatar-sm activity-avatar bg-danger min-w-fit-content rounded-circle cover-image"><i
                                                                                class="bi bi-brightness-high fs-14"></i></span>
                                                                    </div>
                                                                    <div class="ms-3 flex-fill">
                                                                        <p class="mb-0 fs-14">Always look on the bright side
                                                                            of life</p>
                                                                        <span class="clearfix"></span>
                                                                        <small class="text-muted fs-12">Look at the
                                                                            Life</small>
                                                                        <span class="clearfix"></span>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <span class="text-muted fs-12 ms-2 text-truncate"><i
                                                                                class="bi bi-clock"></i> 08:19 am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-item activity-avatar-before info">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="avatar p-1 avatar-md rounded-circle bg-info-transparent min-w-fit-content">
                                                                        <span
                                                                            class="avatar avatar-sm activity-avatar bg-info min-w-fit-content rounded-circle cover-image"><i
                                                                                class="bi bi-briefcase fs-14"></i></span>
                                                                    </div>
                                                                    <div class="ms-3 flex-fill">
                                                                        <p class="mb-0 fs-14">Nile Robetz mentioned a jogh
                                                                            in post</p>
                                                                        <span class="clearfix"></span>
                                                                        <small class="text-muted fs-12 ">Uploaded a new
                                                                            post</small>
                                                                        <span class="clearfix"></span>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <span class="text-muted fs-12 ms-2 text-truncate"><i
                                                                                class="bi bi-clock"></i> 11:17 am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-item activity-avatar-before primary">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="avatar p-1 avatar-md rounded-circle bg-primary-transparent min-w-fit-content">
                                                                        <span
                                                                            class="avatar avatar-sm activity-avatar bg-primary min-w-fit-content rounded-circle cover-image"><i
                                                                                class="bi bi-broadcast-pin fs-14"></i></span>
                                                                    </div>
                                                                    <div class="ms-3 flex-fill">
                                                                        <p class="mb-0 fs-14">The science of superstitions.
                                                                        </p>
                                                                        <span class="clearfix"></span>
                                                                        <small class="text-muted fs-12">Volume is a
                                                                            superstitions</small>
                                                                        <span class="clearfix"></span>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <span class="text-muted fs-12 ms-2 text-truncate"><i
                                                                                class="bi bi-clock"></i> 10:09 am</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-7 col-xl-12">
                                        <div class="card">
                                            <div class="card-header justify-content-between">
                                                <h6 class="card-title flex-grow-1 text-truncate me-3">Monthly Orders Analytics</h6>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn btn-primary-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="column-basic"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div class="card-header border-bottom justify-content-between">
                                                        <h6 class="card-title flex-grow-1 text-truncate me-3">Best Selling
                                                            Products</h6>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="btn btn-primary-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover card-table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="ps-3">Products</th>
                                                                        <th>Categories</th>
                                                                        <th>Sold</th>
                                                                        <th>Price</th>
                                                                        <th class="pe-3">Earnings</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="ps-3">
                                                                            <div
                                                                                class="d-flex align-items-center position-relative">
                                                                                <a href="javascript:void(0);"
                                                                                    class="stretched-link"
                                                                                    title="recruiter"></a>
                                                                                <div class="img-fluid lh-1">
                                                                                    <span
                                                                                        class="avatar avatar-md avatar-radius cover-image me-2"
                                                                                        data-bs-image-src="{{asset('build/assets/images/shop/21.jpg')}}"></span>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="mb-0">Mony Headphones</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            Gadgets
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="badge rounded-pill bg-primary-transparent">457</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$97</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$74,890</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="ps-3">
                                                                            <div
                                                                                class="d-flex align-items-center position-relative">
                                                                                <a href="javascript:void(0);"
                                                                                    class="stretched-link"
                                                                                    title="recruiter"></a>
                                                                                <div class="img-fluid lh-1">
                                                                                    <span
                                                                                        class="avatar avatar-md avatar-radius cover-image me-2"
                                                                                        data-bs-image-src="{{asset('build/assets/images/shop/22.jpg')}}"></span>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="mb-0">Alarm Clock</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            Fashion
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="badge rounded-pill bg-primary-transparent">876</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$97</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$74,890</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="ps-3">
                                                                            <div
                                                                                class="d-flex align-items-center position-relative">
                                                                                <a href="javascript:void(0);"
                                                                                    class="stretched-link"
                                                                                    title="recruiter"></a>
                                                                                <div class="img-fluid lh-1">
                                                                                    <span
                                                                                        class="avatar avatar-md avatar-radius cover-image me-2"
                                                                                        data-bs-image-src="{{asset('build/assets/images/shop/23.jpg')}}"></span>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="mb-0">Kikon Camera</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            Smart Home
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="badge rounded-pill bg-primary-transparent">432</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$97</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$74,890</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="ps-3">
                                                                            <div
                                                                                class="d-flex align-items-center position-relative">
                                                                                <a href="javascript:void(0);"
                                                                                    class="stretched-link"
                                                                                    title="recruiter"></a>
                                                                                <div class="img-fluid lh-1">
                                                                                    <span
                                                                                        class="avatar avatar-md avatar-radius cover-image me-2"
                                                                                        data-bs-image-src="{{asset('build/assets/images/shop/24.jpg')}}"></span>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="mb-0">Photo Frame</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            Bags
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="badge rounded-pill bg-primary-transparent">234</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$97</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$74,890</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="ps-3">
                                                                            <div
                                                                                class="d-flex align-items-center position-relative">
                                                                                <a href="javascript:void(0);"
                                                                                    class="stretched-link"
                                                                                    title="recruiter"></a>
                                                                                <div class="img-fluid lh-1">
                                                                                    <span
                                                                                        class="avatar avatar-md avatar-radius cover-image me-2"
                                                                                        data-bs-image-src="{{asset('build/assets/images/shop/20.jpg')}}"></span>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="mb-0">DSLR Camera</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            Electronics
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="badge rounded-pill bg-primary-transparent">678</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$97</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$74,890</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="ps-3">
                                                                            <div
                                                                                class="d-flex align-items-center position-relative">
                                                                                <a href="javascript:void(0);"
                                                                                    class="stretched-link"
                                                                                    title="recruiter"></a>
                                                                                <div class="img-fluid lh-1">
                                                                                    <span
                                                                                        class="avatar avatar-md avatar-radius cover-image me-2"
                                                                                        data-bs-image-src="{{asset('build/assets/images/shop/22.jpg')}}"></span>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="mb-0">Alarm Clock</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            Fashion
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="badge rounded-pill bg-primary-transparent">876</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$97</span>
                                                                        </td>
                                                                        <td>
                                                                            <span>$74,890</span>
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
                            <div class="col-xxl-3">
                                <div class="row">
                                    <div class="col-xxl-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card bg-primary tx-fixed-white card-bg-img">
                                                    <div class="card-body position-relative d-flex justify-content-between">
                                                        <div>
                                                            <div class="flex-grow-1">
                                                                <p class="mb-1 fs-18 fw-semibold">Top Sellers of this Week</p>
                                                            </div>
                                                            <p class="mb-1 fs-13 op-8">You have got 5 new offers, Track here<br> the Sales data and best deals here.</p>
                                                            <span class="fs-16">3,531</span>
                                                            <span class="fs-12 op-7 ms-1"><i class="ti ti-trending-up mx-1"></i>0.5%</span>
                                                        </div>
                                                        <div class="min-w-fit-content">
                                                            <span class="avatar avatar-xxl bg-transparent">
                                                                <img src="{{asset('build/assets/images/png/6.png')}}" class="op-7" alt="img">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                                            <div id="ethCoin"></div>
                                                            <div class="min-w-fit-content mb-3">
                                                                <span
                                                                    class="avatar avatar-md br-5 bg-primary-transparent rounded-circle text-primary">
                                                                    <i class="bi bi-briefcase fs-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0">Total Projects</p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="fs-5">60</span>
                                                                <span class="fs-12 text-primary ms-1"><i
                                                                        class="ti ti-trending-down mx-1"></i>8.0%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                                            <div id="ethCoin1"></div>
                                                            <div class="min-w-fit-content mb-3">
                                                                <span
                                                                    class="avatar avatar-md br-5 bg-secondary-transparent rounded-circle text-secondary">
                                                                    <i class="fe fe-airplay fs-18"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="mb-0">Completed Projects</p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="fs-5">40</span>
                                                                <span class="fs-12 text-secondary ms-1"><i
                                                                        class="ti ti-trending-down mx-1"></i>4.0%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <div
                                                        class="card-header border-bottom justify-content-between flex-wrap gap-2">
                                                        <div>
                                                            <h6 class="card-title flex-grow-1 text-truncate me-3 mb-1">Top
                                                                Product Categories</h6>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-primary-light btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                                                View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                            </a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div
                                                            class="d-flex align-items-center avatar-before primary mb-3 flex-wrap gap-2">
                                                            <span
                                                                class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-primary-transparent min-w-fit-content">
                                                                <i class="bi bi-diagram-3"></i>
                                                            </span>
                                                            <div class="ms-3 flex-fill">
                                                                <p class="mb-0 fs-14">Women's Clothing</p>
                                                                <span class="clearfix"></span>
                                                                <small class="text-muted fs-12">Differnt types of
                                                                    clothing</small>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-light text-dark p-2"><i
                                                                        class="bi bi-circle-fill fs-8 me-1 text-primary"></i>40
                                                                    available</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center avatar-before warning mb-3 flex-wrap gap-2">
                                                            <span
                                                                class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-warning-transparent min-w-fit-content">
                                                                <i class="bi bi-cast"></i>
                                                            </span>
                                                            <div class="ms-3 flex-fill">
                                                                <p class="mb-0 fs-14">Phones and Tablets</p>
                                                                <span class="clearfix"></span>
                                                                <small class="text-muted fs-12">All models of phones</small>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-light text-dark p-2"><i
                                                                        class="bi bi-circle-fill fs-8 me-1 text-warning"></i>60
                                                                    available</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center avatar-before indigo mb-3 flex-wrap gap-2">
                                                            <span
                                                                class="avatar avatar-md stat-avatar rounded-circle fs-18 bd-indigo-100 text-indigo min-w-fit-content">
                                                                <i class="bi bi-bag-check"></i>
                                                            </span>
                                                            <div class="ms-3 flex-fill">
                                                                <p class="mb-0 fs-14">Electronics</p>
                                                                <span class="clearfix"></span>
                                                                <small class="text-muted fs-12">Related to all
                                                                    Electronics</small>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-light text-dark p-2"><i
                                                                        class="bi bi-circle-fill fs-8 me-1 text-success"></i>70
                                                                    available</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center avatar-before info mb-3 flex-wrap gap-2">
                                                            <span
                                                                class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-info-transparent min-w-fit-content">
                                                                <i class="bi bi-house-door"></i>
                                                            </span>
                                                            <div class="ms-3 flex-fill">
                                                                <p class="mb-0 fs-14">Home Appliances </p>
                                                                <span class="clearfix"></span>
                                                                <small class="text-muted fs-12">Furnitures,gadgets
                                                                    etc..</small>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-light text-dark p-2"><i
                                                                        class="bi bi-circle-fill fs-8 me-1 text-info"></i>80
                                                                    available</span>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center avatar-before danger mb-0 flex-wrap gap-2">
                                                            <span
                                                                class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-danger-transparent min-w-fit-content">
                                                                <i class="bi bi-house-door"></i>
                                                            </span>
                                                            <div class="ms-3 flex-fill">
                                                                <p class="mb-0 fs-14">Home Appliances </p>
                                                                <span class="clearfix"></span>
                                                                <small class="text-muted fs-12">Furnitures,gadgets
                                                                    etc..</small>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-light text-dark p-2"><i
                                                                        class="bi bi-circle-fill fs-8 me-1 text-info"></i>80
                                                                    available</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header border-bottom justify-content-between">
                                                        <h6 class="card-title flex-grow-1 text-truncate me-3">Order Status
                                                        </h6>
                                                    </div>
                                                    <div class="card-body d-flex justify-content-center">
                                                        <div id="donut-update"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">Product Sales</h3>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="grid-margin">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap mb-0">
                                                    <thead class="border-top">
                                                        <tr>
                                                            <th class="wp-5 border-bottom-0 my-auto text-center">
                                                                <input class="form-check-input check-all"
                                                                    type="checkbox" value="" id="checkebox-sm">
                                                            </th>
                                                            <th class="border-bottom-0">Order no</th>
                                                            <th class="border-bottom-0">Product</th>
                                                            <th class="border-bottom-0">Ratings</th>
                                                            <th class="border-bottom-0">Customer</th>
                                                            <th class="border-bottom-0 text-center">Quantity</th>
                                                            <th class="border-bottom-0">Status</th>
                                                            <th class="border-bottom-0">Price</th>
                                                            <th class="border-bottom-0">Ordered date</th>
                                                            <th class="border-bottom-0">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border-bottom user-list">
                                                            <td class="user-checkbox text-center">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" checked="">
                                                            </td>
                                                            <td class="fs-14 fw-semibold"><a class="text-dark" href="#">#1537890</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm avatar-radius me-2">
                                                                        <img src="{{asset('build/assets/images/shop/1.png')}}" class="avatar-radius" alt="product">
                                                                    </span>
                                                                    A semi minimal chair
                                                                </div>
                                                            </td>
                                                            <td class="fw-semibold fs-15">
                                                                5.0 <span class="text-muted fw-normal fs-12">(90 Mem)</span> <i class="fa fa-star text-warning fs-12"></i>
                                                            </td>
                                                            <td class="fs-14">
                                                                <a class="text-dark"
                                                                    href="javascript:void(0);">Simon Cowall</a>
                                                            </td>
                                                            <td class="text-center">1</td>
                                                            <td><span
                                                                    class="badge badge-sm bg-success-transparent text-success fw-normal fs-11">Shipped</span>
                                                            </td>
                                                            <td class="fs-14 fw-semibold">$4320.29</td>
                                                            <td>
                                                                <span class="me-2">25 Mar 2022</span></td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-1">
                                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i></a>
                                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                            <i class="ri-delete-bin-7-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom user-list">
                                                            <td class="user-checkbox text-center">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="fs-14 fw-semibold text-success"><a
                                                                    class="text-dark" href="#">#1539078</a></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm avatar-radius me-2">
                                                                        <img src="{{asset('build/assets/images/shop/2.png')}}" class="avatar-radius" alt="product">
                                                                    </span>
                                                                    Two type of watch sets
                                                                </div>
                                                            </td>
                                                            <td class="fw-semibold fs-15">
                                                                3.0 <span class="text-muted fw-normal fs-12">(50 Mem)</span> <i class="fa fa-star text-warning fs-12"></i>
                                                            </td>
                                                            <td class="fs-14">
                                                                <a class="text-dark"
                                                                    href="javascript:void(0);">Meisha Kerr</a>
                                                            </td>
                                                            <td class="text-center">2</td>
                                                            <td><span
                                                                    class="badge badge-sm bg-danger-transparent text-danger fw-normal fs-11">Cancelled</span>
                                                            </td>
                                                            <td class="fs-14 fw-semibold">$6745.99</td>
                                                            <td>
                                                                <span class="me-2">25 Mar 2022</span></td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-1">
                                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i></a>
                                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                            <i class="ri-delete-bin-7-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom user-list">
                                                            <td class="user-checkbox text-center">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="fs-14 fw-semibold"><a class="text-dark"
                                                                    href="#">#1539832</a></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm avatar-radius me-2">
                                                                        <img src="{{asset('build/assets/images/shop/4.png')}}" class="avatar-radius" alt="product">
                                                                    </span>
                                                                    Mony layer headphones

                                                                </div>
                                                            </td>
                                                            <td class="fw-semibold fs-15">
                                                                4.5 <span class="text-muted fw-normal fs-12">(65 Mem)</span> <i class="fa fa-star text-warning fs-12"></i>
                                                            </td>
                                                            <td class="fs-14">
                                                                <a class="text-dark"
                                                                    href="javascript:void(0);">Jessica</a>
                                                            </td>
                                                            <td class="text-center">1</td>
                                                            <td><span
                                                                    class="badge badge-sm bg-info-transparent text-info fw-normal fs-11">Under
                                                                    Process</span>
                                                            </td>
                                                            <td class="fs-14 fw-semibold">$1176.89</td>
                                                            <td>
                                                                <span class="me-2">27 Feb 2022</span></td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-1">
                                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i></a>
                                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                            <i class="ri-delete-bin-7-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-bottom user-list">
                                                            <td class="user-checkbox text-center">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="fs-14 fw-semibold"><a class="text-dark" href="#">#1538267</a></td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span class="avatar avatar-sm avatar-radius me-2">
                                                                        <img src="{{asset('build/assets/images/shop/3.png')}}" class="avatar-radius" alt="product">
                                                                    </span>
                                                                    Sportive coloured shoes
                                                                </div>
                                                            </td>
                                                            <td class="fw-semibold fs-15">
                                                                2.5 <span class="text-muted fw-normal fs-12">(15 Mem)</span> <i class="fa fa-star text-warning fs-12"></i>
                                                            </td>
                                                            <td class="fs-14">
                                                                <a class="text-dark"
                                                                    href="javascript:void(0);">Jason Stathman</a>
                                                            </td>
                                                            <td class="text-center">1</td>
                                                            <td><span
                                                                    class="badge badge-sm bg-warning-transparent text-warning fw-normal fs-11">Pending</span>
                                                            </td>
                                                            <td class="fs-14 fw-semibold">$1867.29</td>
                                                            <td>
                                                                <span class="me-2">2 Apr 2022</span>
                                                            </td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-1">
                                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i></a>
                                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                            <i class="ri-delete-bin-7-line"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        <tr class="border-bottom user-list">
                                                            <td class="user-checkbox text-center">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="">
                                                            </td>
                                                            <td class="fs-14 fw-semibold"><a class="text-dark"
                                                                    href="#">#1537890</a></td>
                                                            <td>
                                                                <div class="d-flex align-items-center" >
                                                                    <span class="avatar avatar-sm avatar-radius me-2">
                                                                        <img src="{{asset('build/assets/images/shop/7.png')}}" class="avatar-radius" alt="product">
                                                                    </span>
                                                                    Vayon black shades
                                                                </div>
                                                            </td>
                                                            <td class="fw-semibold fs-15">
                                                                3.5 <span class="text-muted fw-normal fs-12">(36 Mem)</span> <i class="fa fa-star text-warning fs-12"></i>
                                                            </td>
                                                            <td class="fs-14">
                                                                <a class="text-dark"
                                                                    href="javascript:void(0);">Khabib Hussain</a>
                                                            </td>
                                                            <td class="text-center">1</td>
                                                            <td><span
                                                                    class="badge badge-sm bg-success-transparent text-success fw-normal fs-11">Shipped</span>
                                                            </td>
                                                            <td class="fs-14 fw-semibold">$2439.99</td>
                                                            <td>
                                                                <span class="me-2">8 Apr 2022</span></td>
                                                            <td>
                                                                <div class="hstack gap-2 fs-1">
                                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                                        class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                                                        <i class="ri-edit-line"></i></a>
                                                                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                                                            <i class="ri-delete-bin-7-line"></i>
                                                                    </a>
                                                                </div>
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
                        <!-- End::Row-1 -->

                    </div>
                    <!-- CONTAINER END -->

@endsection

@section('scripts')
	
	    <!-- INTERNAL APEXCHART JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Color Picker JS -->
        <script src="{{asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>

        <!-- Checkbox selectall JS -->
        @vite('resources/assets/js/checkbox-selectall.js')

        <!-- INTERNAL INDEX JS -->
        @vite('resources/assets/js/index1.js')

@endsection
