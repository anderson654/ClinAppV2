
@extends('layouts.master')

@section('styles')

        <!-- Notifications Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/awesome-notifications/style.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Notification</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Notification</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Notification</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary" id="basic">Basic Notification</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Info Notification</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-info" id="info">Info Notification</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Success Notification</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-success" id="success">Success Notification</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Warning Notification</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-warning" id="warning">Warning Notification</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Error Notification</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-danger" id="error">Error Notification</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Confirmation Notification</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary" id="confirm">Notification</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Async Block With Error Notification</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary"  id="async">Notification</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Async Block With Success Notification</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="btn-list">
                                                <button type="button" class="btn btn-primary"  id="async-block">Notification</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Rating JS -->
        <script src="{{asset('build/assets/libs/awesome-notifications/index.var.js')}}"></script>
        @vite('resources/assets/js/notifications.js')

@endsection
