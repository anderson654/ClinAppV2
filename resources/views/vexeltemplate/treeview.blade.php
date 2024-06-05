
@extends('layouts.master')

@section('styles')

        <!-- Treeview Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/js-treeview/treeview.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Treeview</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Treeview</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mg-b-20">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-title">Treeview</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="row">
                                                <!-- col -->
                                                <div class="col-lg-4">
                                                    <div id="tree" class="text-base font-semibold text-gray-600 dark:text-white/70"></div>
                                                </div>
                                                <!-- /col -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW CLOSED -->
                    </div>
                    <!-- CONTAINER END -->

@endsection

@section('scripts')
	
	    <!-- Treeview JS -->
        <script src="{{asset('build/assets/libs/js-treeview/treeview.min.js')}}"></script>
        @vite('resources/assets/js/treeview.js')

@endsection
