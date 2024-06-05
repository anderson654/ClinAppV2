
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Form-editor</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form-editor</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid"><!-- Start:: row-1 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Quill Snow Editor
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="editor">
                                            <h4><b class="ql-size-large">Quill Snow</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                            <p><br></p>
                                            <ol>
                                                <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                                <li class="">This is quill snow editor.</li>
                                                <li class="">Easy to customize and flexible.</li>
                                            </ol>
                                            <p><br></p>
                                            <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-1 -->
        
                        <!-- Start:: row-2 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Quill Bubble Editor
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="editor1">
                                            <h4><b class="ql-size-large">Quill Bubble</b> is a free, open source <a href="https://github.com/quilljs/quill/" target="_blank">Quill Editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/" target="_blank">modular architecture</a> and expressive API, it is completely customizable to fit any need.</h4>
                                            <p><br></p>
                                            <ol>
                                                <li class="ql-size-normal">Write text select and edit with multiple options.</li>
                                                <li class="">This is quill bubble editor.</li>
                                                <li class="">Easy to customize and flexible.</li>
                                            </ol>
                                            <p><br></p>
                                            <h4>Quill officially supports a standard toolbar theme <a href="https://github.com/quilljs/quill/" target="_blank">"Snow"</a> and a floating tooltip theme <a href="https://github.com/quilljs/quill/" target="_blank">"Bubble"</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('modals')

                    <!-- File-Details Modal -->
                    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">File Details</h5>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div>
                                                <img src="{{asset('build/assets/images/media/33.jpg')}}" class="rounded-2" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-xl-7">
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-bold">File Name</td>
                                                            <td>Media Image</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File Size</td>
                                                            <td>11.45GB</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Uploaded date</td>
                                                            <td>03-11-2022</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Uploaded by</td>
                                                            <td>Michael Starc</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File format</td>
                                                            <td>psd</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Image height</td>
                                                            <td>350px</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">Image Width</td>
                                                            <td>350px</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">File location</td>
                                                            <td>storage/documents/images/File.psd</td>
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
                    <!-- File-Details Modal -->

@endsection

@section('scripts')
	
	    <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Internal Quill JS -->
        @vite('resources/assets/js/quill-editor.js')

@endsection
