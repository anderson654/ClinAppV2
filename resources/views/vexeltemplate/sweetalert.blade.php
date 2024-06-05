
@extends('layouts.master')

@section('styles')

        <!-- Sweetalerts CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Sweet Alert</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                
                        <!-- Start:: row-1 -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Basic Alert
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="basic-alert">Basic Alert</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Title With Text Under
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="alert-text">Title With Text</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            With Text,Error Icon & Footer
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="alert-footer">Alert Footer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-1 -->

                        <!-- Start:: row-2 -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Alert With Long Window
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="long-window">Long Window Here</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Custom HTML Description
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="alert-description">Custom HTML Alert</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Alert With Multiple Buttons
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="three-buttons">Multiple Buttons</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                        <!-- Start:: row-3 -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Custom Positioned Dialog Alert
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="alert-dialog">Alert Dialog</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Confirm Alert
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="alert-confirm">Confirm Alert</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Alert With Parameters
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="alert-parameter">Alert Parameters</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->

                        <!-- Start:: row-4 -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Alert With Image
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="alert-image">Image Alert</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Alert With Image
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="alert-custom-bg">Custom Alert</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Auto Close Alert
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <button class="btn btn-outline-primary" id="alert-auto-close">Auto Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-4 -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Sweetalerts JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        @vite('resources/assets/js/sweet-alert.js')

@endsection
