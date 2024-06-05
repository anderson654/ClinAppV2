
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Terms</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Extension</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Terms</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <div class="container">
                            <!-- ROW-1 OPEN -->
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-center align-items-center m-2">
                                                <img class="me-2 w-40p" src="{{asset('build/assets/images/icons/1.png')}}" alt="">
                                                <div>
                                                    <h5 class="mb-0"><b>Terms Of Services</b></h5>
                                                    <p class="mb-0 text-muted">Last Updated Jan 27, 2023</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="d-lg-flex d-block">
                                                <div class="p-4 border-end w-100">
                                                    <div class="nav flex-column nav-pills ms-3" id="vertical-tab" role="tablist" aria-orientation="vertical">
                                                        <button class="nav-link text-start active" id="vertical-terms-tab" data-bs-toggle="pill" data-bs-target="#vertical-terms" type="button" role="tab" aria-controls="vertical-terms" aria-selected="true"><i class="bi bi-gear me-2"></i> General Terms and Conditions</button>
                                                        <button class="nav-link text-start" id="vertical-accept-tab" data-bs-toggle="pill" data-bs-target="#vertical-accept" type="button" role="tab" aria-controls="vertical-accept" aria-selected="false"><i class="bi bi-person-check me-2"></i> Acceptable Use Policy</button>
                                                        <button class="nav-link text-start" id="vertical-cancellation-tab" data-bs-toggle="pill" data-bs-target="#vertical-cancellation" type="button" role="tab" aria-controls="vertical-cancellation" aria-selected="false"><i class="bi bi-x-circle me-2"></i> Cancellation Policy</button>
                                                        <button class="nav-link text-start" id="vertical-privacy-tab" data-bs-toggle="pill" data-bs-target="#vertical-privacy" type="button" role="tab" aria-controls="vertical-privacy" aria-selected="false"><i class="bi bi-shield-check me-2"></i> Privacy Policy</button>
                                                        </div>
                                                </div>
                                                <div class="p-4">
                                                    <div class="tab-content terms" id="vertical-tabContent">
                                                        <div class="tab-pane fade show active" id="vertical-terms" role="tabpanel" aria-labelledby="vertical-terms-tab" tabindex="0">
                                                            <h5><b> Terms :</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Using Our Services</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Privacy policy</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Copyright </b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>

                                                        </div>
                                                        <div class="tab-pane fade terms" id="vertical-accept" role="tabpanel" aria-labelledby="vertical-accept-tab" tabindex="0">
                                                            <h5><b> Terms :</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Using Our Services</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Privacy policy</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>

                                                        </div>
                                                        <div class="tab-pane fade terms" id="vertical-cancellation" role="tabpanel" aria-labelledby="vertical-cancellation-tab" tabindex="0">
                                                            <h5><b> Terms :</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Using Our Services</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Privacy policy</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Copyright </b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                        </div>
                                                        <div class="tab-pane fade terms" id="vertical-privacy" role="tabpanel" aria-labelledby="vertical-privacy-tab" tabindex="0">
                                                            <h5><b> Terms :</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Using Our Services</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Privacy policy</b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                            <h5><b>Copyright </b></h5>
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                                                truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="form-check d-inline-block">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Send a copy on my email
                                                </label>
                                            </div>
                                            <div class="float-end d-inline-block btn-list">
                                                <a class="btn btn-primary">Decline</a>
                                                <a class="btn btn-secondary">Agree and Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-1 CLOSE -->
                        </div>

                    </div>
                    <!-- CONTAINER CLOSE -->

@endsection

@section('scripts')
	
	

@endsection
