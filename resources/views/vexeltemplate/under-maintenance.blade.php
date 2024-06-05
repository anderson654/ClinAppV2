
@extends('layouts.custom-master1')

@section('styles')



@endsection

@section('content')
	
                <!-- CONTAINER OPEN -->
                <div class="container">
                    <div class="row text-center mx-auto">
                        <div class="col-lg-8 col-sm-12 center-block align-items-center construction">
                            <div class="tx-fixed-white">
                                <div class="card-body p-0">
                                    <h1 class="display-4 mb-3 fw-semibold">Under Maintenance</h1>
                                    <p class="mb-2 op-8">The page you're looking for is currently under maintenance and we will be back soon.</p>
                                    <div class="row mt-4 gy-xxl-0 gy-3 mb-5" id="timer"></div>
                                    <div class="mt-4">
                                        <button class="btn btn-icon btn-primary rounded-pill border-0" type="button">
												<span class="btn-inner--icon"><i class="fa fa-facebook"></i></span>
											</button>
                                        <button class="btn btn-icon btn-primary rounded-pill border-0" type="button">
												<span class="btn-inner--icon"><i class="fa fa-google"></i></span>
											</button>
                                        <button class="btn btn-icon btn-primary rounded-pill border-0" type="button">
												<span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
											</button>
                                        <button class="btn btn-icon btn-primary rounded-pill border-0" type="button">
												<span class="btn-inner--icon"><i class="fa fa-linkedin"></i></span>
										</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Internal Under Maintenance JS -->
        <script src="{{asset('build/assets/under-maintenance.js')}}"></script>

@endsection
