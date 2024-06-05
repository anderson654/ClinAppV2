
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/gridjs/theme/mermaid.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Grid-js-tables</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Grid-js-tables</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->
                    
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Start::row-1 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Basic Table
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="grid-example1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->
        
                        <!-- Start:: row-2 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Table With Pagination
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="grid-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->
                        
                        <!-- Start:: row-3 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Table With Search
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="grid-search"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->
        
                        <!-- Start:: row-4 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Table Sorting
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="grid-sorting"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-4 -->
        
                        <!-- Start:: row-5 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Table Loading
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="grid-loading"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-5 -->
        
                        <!-- Start:: row-6 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Wide Table 
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="grid-wide"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-6 -->
        
                        <!-- Start:: row-7 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Fixed Header
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="grid-header-fixed"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-7 -->
        
                        <!-- Start:: row-8 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Hidden Columns
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="grid-hidden-column"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-8 -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Grid JS -->
        <script src="{{asset('build/assets/libs/gridjs/gridjs.umd.js')}}"></script>

        <!-- Internal Grid JS -->
        @vite('resources/assets/js/grid.js')

@endsection
