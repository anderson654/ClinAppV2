
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Pagination</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pagination</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 START -->
                        <div class="row">
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic pagination</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                                </nav>
                                            <!-- pagination-wrapper -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pagination with icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                    </li>
                                                </ul>
                                                </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Active Pagination</h3>
                                    </div>
                                    <div class="card-body ">
                                        <div class="card-content">
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item disabled">
                                                        <a class="page-link">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active" aria-current="page">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- pagination-wrapper -->
                                </div>
                                <!-- section-wrapper -->
                            </div>
                        </div>
                        <!-- ROW-1 END -->

                        <!-- ROW-2 START -->
                        <div class="row">
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Disable Pagination</h3>
                                    </div>
                                    <div class="card-body ">
                                        <div class="card-content">
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item disabled">
                                                    <span class="page-link">Previous</span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active" aria-current="page">
                                                    <span class="page-link">2</span>
                                                    </li>
                                                    <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                                </nav>
                                        </div>
                                    </div>
                                    <!-- pagination-wrapper -->
                                </div>
                                <!-- section-wrapper -->
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Rounded Pagination</h3>
                                    </div>
                                    <div class="card-body ">
                                        <div class="card-content">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination rounded-pagination">
                                                    <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                    </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                    </a>
                                                    </li>
                                                </ul>
                                                </nav>
                                        </div>
                                    </div>
                                    <!-- pagination-wrapper -->
                                </div>
                                <!-- section-wrapper -->
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Radius Pagination</h3>
                                    </div>
                                    <div class="card-body ">
                                        <div class="card-content">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination radius-pagination">
                                                    <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                    </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#"><i class="fe fe-more-horizontal"></i></a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                    </a>
                                                    </li>
                                                </ul>
                                                </nav>
                                        </div>
                                    </div>
                                    <!-- pagination-wrapper -->
                                </div>
                                <!-- section-wrapper -->
                            </div>
                        </div>
                        <!-- ROW-2 END -->

                        <!-- ROW-3 START -->
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Colored Paginations</h3>
                                    </div>
                                    <div class="card-body ">
                                        <div class="card-content">
                                            <div class="row gy-3">
                                                <div class="col-xl-3">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination primary-pagination">
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                            </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><i class="fe fe-more-horizontal"></i></a></li>
                                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                            </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="col-xl-3">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination secondary-pagination">
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                            </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><i class="fe fe-more-horizontal"></i></a></li>
                                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                            </a>
                                                            </li>
                                                        </ul>
                                                        </nav>
                                                </div>
                                                <div class="col-xl-3">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination success-pagination">
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                            </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><i class="fe fe-more-horizontal"></i></a></li>
                                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                            </a>
                                                            </li>
                                                        </ul>
                                                        </nav>
                                                </div>
                                                <div class="col-xl-3">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination info-pagination">
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                            </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><i class="fe fe-more-horizontal"></i></a></li>
                                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                            <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                            </a>
                                                            </li>
                                                        </ul>
                                                        </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pagination-wrapper -->
                                </div>
                                <!-- section-wrapper -->
                            </div>
                        </div>
                        <!-- ROW-3 END-->

                        <!-- ROW-4 START -->
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pagination Alignments</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                    <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <br>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                    <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <br>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                    <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pagination Sizing</h3>
                                    </div>
                                    <div class="card-body ">
                                        <div class="card-content d-sm-flex d-block justify-content-between">
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-lg mb-xs-0 mb-2">
                                                    <li class="page-item active" aria-current="page">
                                                    <span class="page-link">1</span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                </ul>
                                            </nav>
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-sm">
                                                    <li class="page-item active" aria-current="page">
                                                    <span class="page-link">1</span>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                                </ul>
                                                </nav>
                                        </div>
                                    </div>
                                    <!-- pagination-wrapper -->
                                </div>
                                <!-- section-wrapper -->
                            </div>
                        </div>
                        <!-- ROW-4 END-->

                        <!-- ROW-5 START -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dotted Paginations</h3>
                                    </div>
                                    <div class="card-body ">
                                        <div class="card-content">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination dotted-pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                                    <li class="page-item"><a class="page-link active" href="javascript:void(0);"></a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- pagination-wrapper -->
                                </div>
                            </div>
                        </div>
                        <!-- ROW-5 END -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
