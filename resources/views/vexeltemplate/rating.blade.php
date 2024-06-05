
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Ratings</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin Ui</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ratings</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                    <div class="card-title">
                                            Basic Rater
                                    </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="text-center">
                                                <p class="fs-14 fw-semibold">Give your rating for fast Delivery</p>
                                                <div id="rater-basic"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            5 star rater with steps
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="text-center">
                                                <p class="fs-14 fw-600">Dont forget to rate the product :</p>
                                                <div id="rater-steps"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Custom messages
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="text-center">
                                                <p class="fs-14 fw-600">Your rating is much appreciated👏 :</p>
                                                <div id="custom-messages"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Unlimited number of stars readOnly
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="text-center">
                                                <p class="fs-14 fw-600">Thanks for rating :</p>
                                                <div id="stars-unlimited"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            5 Star rater with custom isBusyText and simulated backend
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="text-center">
                                                <p class="fs-14 fw-600">Thanks for rating :</p>
                                                <div id="stars-busytext"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            On hover event
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="text-center">
                                                <p class="fs-14 fw-600">Please give your valuable rating :</p>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div id="stars-hover"></div>
                                                    <span class="live-rating badge bg-primary-transparent ms-3">
                                                        1
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Clear/reset rater
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="text-center">
                                                <p class="fs-14 fw-600">Thank You so much for your support :</p>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div id="rater-reset"></div>
                                                    <button class="btn btn-sm btn-danger-light ms-3" id="rater-reset-button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset">
                                                        Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Rater JS -->
        <script src="{{asset('build/assets/libs/rater-js/index.js')}}"></script>
        @vite('resources/assets/js/ratings.js')

@endsection
