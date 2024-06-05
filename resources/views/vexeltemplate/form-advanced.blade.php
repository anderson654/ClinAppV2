
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/dropzone/dropzone.css')}}">


        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Form Advanced</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Advanced</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Input File Upload</h3>
                                    </div>
                                    <div class=" card-body row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label class="form-label mt-0">Single File input Upload</label>
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label class="form-label">Multiple files input Upload</label>
                                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-12">
                                            <form method="post" class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Single File Upload</h3>
                                                </div>
                                                <div class=" card-body">
                                                    <div class="form-group mb-0">
                                                        <input type="file" class="single-fileupload" name="filepond" accept="image/png, image/jpeg, image/gif">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xl-6 col-md-12">
                                            <form method="post" class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Multiple File Upload</h3>
                                                </div>
                                                <div class=" card-body">
                                                    <div class="form-group mb-0">
                                                        <input type="file" class="multiple-filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        Dropzone
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <form data-single="true" method="post" action="https://httpbin.org/post" class="dropzone"></form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Color Picker Style1</h3>
                                    </div>
                                    <div class="container">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <div class="theme-container"></div>
                                                    <div class="pickr-container"></div>
                                                </div>
                                                <div>
                                                    <div class="theme-container1"></div>
                                                    <div class="pickr-container1"></div>
                                                </div>
                                                <div>
                                                    <div class="theme-container2"></div>
                                                    <div class="pickr-container2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Default Date picker</div>
                                    </div>
                                    <div class="card-body">
                                        <p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
                                        <div class="wd-200 mg-b-30">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                                </div><input type="text" class="form-control" id="date" placeholder="Choose date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Date Range Picker </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="mg-b-20 mg-sm-b-40">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>
                                        <div class="wd-200 mg-b-30">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <span class="fa fa-calendar tx-16 lh-0 op-6"></span>
                                                </div><input type="text" class="form-control" id="daterange" placeholder="Date range picker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Basic Time picker
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                                </div>
                                                <input type="text" class="form-control" id="timepikcr" placeholder="Choose time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Time Pickr with 24hr Format
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                                </div>
                                                <input type="text" class="form-control" id="timepickr1" placeholder="Choose time in 24hr format">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Time Picker with Limits
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                                </div>
                                                <input type="text" class="form-control" id="limittime" placeholder="choose time min 16:00 to max 22:30">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            DateTimePicker with Limited Time Range
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                                                </div>
                                                <input type="text" class="form-control" id="limitdatetime" placeholder="date with time limit from 16:00 to 22:00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-->

                        <!--Row-->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header d-flex align-items-center justify-content-between">
                                                <h6 class="card-title">Multiple Select</h6>
                                            </div>
                                            <div class="card-body">
                                                <p class="fw-semibold mb-2">Default</p>
                                                <select class="form-control" data-trigger name="choices-multiple-default" id="choices-multiple-default" multiple>
                                                    <option value="Choice 1" selected>Choice 1</option>
                                                    <option value="Choice 2">Choice 4</option>
                                                    <option value="Choice 3">Choice 5</option>
                                                    <option value="Choice 4" disabled>Choice 6</option>
                                                </select>
                                                <p class="fw-semibold mb-2">With Remove Button</p>
                                                <select class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button" multiple>
                                                    <option value="Choice 1" selected>Choice 1</option>
                                                    <option value="Choice 2">Choice 2</option>
                                                    <option value="Choice 3">Choice 3</option>
                                                    <option value="Choice 4">Choice 4</option>
                                                </select>
                                                <p class="fw-semibold mb-2">Option groups</p>
                                                <select class="form-control" name="choices-multiple-groups" id="choices-multiple-groups" multiple>
                                                    <option value="">Choose a city</option>
                                                    <optgroup label="UK">
                                                    <option value="London">London</option>
                                                    <option value="Manchester">Manchester</option>
                                                    <option value="Liverpool">Liverpool</option>
                                                    </optgroup>
                                                    <optgroup label="FR">
                                                    <option value="Paris">Paris</option>
                                                    <option value="Lyon">Lyon</option>
                                                    <option value="Marseille">Marseille</option>
                                                    </optgroup>
                                                    <optgroup label="DE" disabled>
                                                    <option value="Hamburg">Hamburg</option>
                                                    <option value="Munich">Munich</option>
                                                    <option value="Berlin">Berlin</option>
                                                    </optgroup>
                                                    <optgroup label="US">
                                                    <option value="New York">New York</option>
                                                    <option value="Washington" disabled>Washington</option>
                                                    <option value="Michigan">Michigan</option>
                                                    </optgroup>
                                                    <optgroup label="SP">
                                                    <option value="Madrid">Madrid</option>
                                                    <option value="Barcelona">Barcelona</option>
                                                    <option value="Malaga">Malaga</option>
                                                    </optgroup>
                                                    <optgroup label="CA">
                                                    <option value="Montreal">Montreal</option>
                                                    <option value="Toronto">Toronto</option>
                                                    <option value="Vancouver">Vancouver</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Passing Through Options
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <input class="form-control" id="choices-text-preset-values" type="text" value="three" placeholder="This is a placeholder">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Options added via config with no search
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <select class="form-control" name="choices-single-no-search" id="choices-single-no-search">
                                                <option value="0">Zero</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header d-flex align-items-center justify-content-between">
                                                <h6 class="card-title">Single Select</h6>
                                            </div>
                                            <div class="card-body">
                                                <p class="fw-semibold mb-2">Default</p>
                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                    <option value="">This is a placeholder</option>
                                                    <option value="Choice 1">Choice 1</option>
                                                    <option value="Choice 2">Choice 2</option>
                                                    <option value="Choice 3">Choice 3</option>
                                                </select>
                                                <p class="fw-semibold mb-2">Option groups</p>
                                                <select class="form-control" data-trigger name="choices-single-groups" id="choices-single-groups">
                                                    <option value="">Choose a city</option>
                                                    <optgroup label="UK">
                                                        <option value="London">London</option>
                                                        <option value="Manchester">Manchester</option>
                                                        <option value="Liverpool">Liverpool</option>
                                                    </optgroup>
                                                    <optgroup label="FR">
                                                        <option value="Paris">Paris</option>
                                                        <option value="Lyon">Lyon</option>
                                                        <option value="Marseille">Marseille</option>
                                                    </optgroup>
                                                    <optgroup label="DE" disabled>
                                                        <option value="Hamburg">Hamburg</option>
                                                        <option value="Munich">Munich</option>
                                                        <option value="Berlin">Berlin</option>
                                                    </optgroup>
                                                    <optgroup label="US">
                                                        <option value="New York">New York</option>
                                                        <option value="Washington" disabled>Washington</option>
                                                        <option value="Michigan">Michigan</option>
                                                    </optgroup>
                                                    <optgroup label="SP">
                                                        <option value="Madrid">Madrid</option>
                                                        <option value="Barcelona">Barcelona</option>
                                                        <option value="Malaga">Malaga</option>
                                                    </optgroup>
                                                    <optgroup label="CA">
                                                        <option value="Montreal">Montreal</option>
                                                        <option value="Toronto">Toronto</option>
                                                        <option value="Vancouver">Vancouver</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Email Address Only
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <input class="form-control" id="choices-text-email-filter" type="text" placeholder="This is a placeholder">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    Passing Unique Values
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <input class="form-control" id="choices-text-unique-values" type="text" value="child-1, child-2" placeholder="This is a placeholder">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Row-->


                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
        
        <!-- Filepond JS -->
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js')}}"></script>

        <!-- Dropzone JS -->
        <script src="{{asset('build/assets/libs/dropzone/dropzone-min.js')}}"></script>

        <!-- Color Picker JS -->
        @vite('resources/assets/js/color-picker.js')

        <!-- Date & Time Picker JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        
        <!-- FORMELEMENTS JS -->
        @vite('resources/assets/js/formelementadvnced.js')

@endsection
