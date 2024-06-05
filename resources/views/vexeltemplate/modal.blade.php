
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
        
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Modal</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modal</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 START -->
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Modal</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Launch demo modal
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Varying modal content</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content btn-list">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputModal" data-bs-whatever="@fat">Open modal for @fat</button>
                                            <button type="button" class="btn btn-primary text-start" data-bs-toggle="modal" data-bs-target="#inputModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- ROW-1 END -->

                            <!-- ROW-2 START -->
                        <div class="row">
                            <div class="col-sm-6 col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Static backdrop Modals</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                Launch static backdrop modal
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Alert Modals</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content btn-list">
                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#delete">Delete</button>
                                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#info-modal">Info</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Modal Sizes</h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="card-content btn-list">
                                            <button class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#smallmodal">Small Modal</button>
                                            <button class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#largemodal">large Modal</button>
                                            <button class="btn btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#extralargemodal">Extralarge Modal</button>
                                            <button class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#scrollingmodal">Scrolling Modal</button>
                                            <button class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#fullscreenmodal">Fullscreen Modal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 END -->

                        <!-- ROW-3 START -->
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Toggle Between Modals</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle"
                                                role="button">Open first modal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tooltips and popovers</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalPopovers">
                                                Launch demo Modal
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-3 END -->

                        <!-- ROW-4 START -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" id="modal5">
                                    <div class="card-header border-bottom-0">
                                        <div class="card-title">
                                            Modal Animation Effects
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-primary d-grid mb-3" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8">Scale</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-secondary d-grid mb-3"
                                                    data-bs-effect="effect-slide-in-right" data-bs-toggle="modal"
                                                    href="#modaldemo8">Slide In Right</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-danger d-grid mb-3"
                                                    data-bs-effect="effect-slide-in-bottom" data-bs-toggle="modal"
                                                    href="#modaldemo8">Slide In Bottom</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-warning d-grid mb-3"
                                                    data-bs-effect="effect-newspaper" data-bs-toggle="modal"
                                                    href="#modaldemo8">Newspaper</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-success d-grid mb-3"
                                                    data-bs-effect="effect-fall" data-bs-toggle="modal"
                                                    href="#modaldemo8">Fall</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-info d-grid mb-3"
                                                    data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal"
                                                    href="#modaldemo8">Flip Horizontal</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-primary d-grid mb-3"
                                                    data-bs-effect="effect-flip-vertical" data-bs-toggle="modal"
                                                    href="#modaldemo8">Flip Vertical</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-secondary d-grid mb-3"
                                                    data-bs-effect="effect-super-scaled" data-bs-toggle="modal"
                                                    href="#modaldemo8">Super Scaled</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-danger d-grid mb-3"
                                                    data-bs-effect="effect-sign" data-bs-toggle="modal"
                                                    href="#modaldemo8">Sign</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-warning d-grid mb-3"
                                                    data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal"
                                                    href="#modaldemo8">Rotate Bottom</a>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-3">
                                                <a class="modal-effect btn btn-outline-success d-grid mb-3"
                                                    data-bs-effect="effect-rotate-left" data-bs-toggle="modal"
                                                    href="#modaldemo8">Rotate Left</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-4 END -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('modals')
                    <!-- Basic Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                            </div>
                            <div class="modal-body">
                            ...
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                        </div>
                    
                        <!--Static Backdrop Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                            </div>
                            <div class="modal-body">
                            ...
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                        </div>
                        </div>
                    
                        <!-- BASIC MODAL -->
                        <div class="modal fade" id="modaldemo1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close"
                                            data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Why We Use Electoral College, Not Popular Vote</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                            distribution of letters, as opposed to
                                            using 'Content here, content here', making it look like readable English.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary">Save changes</button> <button class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- SMALL MODAL -->
                        <div class="modal fade" id="modaldemo2">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title">Notice</h6><button aria-label="Close" class="btn-close"
                                            data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                                            when looking at its layout.</p>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button class="btn btn-primary">Save changes</button> <button class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- LARGE MODAL -->
                        <div class="modal fade" id="modaldemo3">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close"
                                            data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Why We Use Electoral College, Not Popular Vote</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                            distribution of letters, as opposed to
                                            using 'Content here, content here', making it look like readable English.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary">Save changes</button> <button class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- MODAL ALERT MESSAGE -->
                        <div class="modal fade" id="modaldemo4">
                            <div class="modal-dialog modal-dialog-centered text-center " role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-body text-center p-4 pb-5">
                                        <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                                                aria-hidden="true">&times;</span></button>
                                        <i class="icon icon-check fs-70 text-success lh-1 my-5 d-inline-block"></i>
                                        <h4 class="text-success tx-semibold">Congratulations!</h4>
                                        <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration.</p><button aria-label="Close" class="btn btn-success pd-x-25"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modaldemo5">
                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-body text-center p-4 pb-5">
                                        <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                                                aria-hidden="true">&times;</span></button>
                                        <i class="icon icon-close fs-70 text-danger lh-1 my-5 d-inline-block"></i>
                                        <h4 class="text-danger">Error: Cannot process your entry!</h4>
                                        <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25"
                                            data-bs-dismiss="modal">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Delete Modal-->
                        <div class="modal fade" id="delete">
                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-body p-4 pb-5">
                                        <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"><span
                                                aria-hidden="true">&times;</span></button>
                                        <h5>Delete Media</h5>
                                        <p class="">Are You sure you want to delete img.jpg_001 file.?</p>
                                        <div class="card shadow-none text-start bg-secondary-transparent border-start border-secondary">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                                                            viewBox="0 0 24 24">
                                                            <path fill="#f07f8f"
                                                                d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z">
                                                            </path>
                                                            <circle cx="12" cy="17" r="1" fill="#e62a45"></circle>
                                                            <path fill="#e62a45"
                                                                d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"></path>
                                                        </svg></span>
                                                    <div>
                                                        <p class="mb-0">Warning</p>
                                                        <p class="card-text">By Deleting this media trashed media also deleted
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-list">
                                            <button class="btn btn-light" data-bs-dismiss="modal">Cancel</button><button
                                                class="btn btn-danger">Delete Media</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Success Modal-->
                        <div class="modal fade" id="info-modal">
                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-body p-4 pb-5">
                                        <button aria-label="Close" class="btn-close position-absolute" data-bs-dismiss="modal"
                                            style="z-index: 9;"></button>
                                        <div class="card shadow-none mb-0">
                                            <div class="card-body text-center">
                                                <a href="javascript:void(0);" class="card-options-remove float-end"></a>
                                                <span class="avatar avatar-lg bg-info rounded-circle"><i class="fe fe-bell"
                                                        aria-hidden="true"></i></span>
                                                <h4 class="fw-semibold mb-1 mt-3">Alert</h4>
                                                <p class="card-text text-muted">Are you sure you want to end current services</p>
                                            </div>
                                            <div class="card-footer text-center border-0 pt-0">
                                                <div class="row">
                                                    <div class="text-center">
                                                        <a href="javascript:void(0);" class="btn btn-block btn-sm btn-info me-2">Done</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Toggle modal-->
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                            tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Show a second modal and hide this one with the button below.
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open
                                            second modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
                            tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Hide this modal and show the first with the button below.
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                                            first</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Popover Modals -->
                        <div class="modal fade" id="exampleModalPopovers">
                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close"
                                            data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        <h6 class="fw-semibold">Popover in a modal</h6>
                                        <p>This <a href="javascript:void(0);" role="button" class="btn btn-secondary" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="Popover body content is set in this attribute.">button</a> triggers a
                                            popover on click.</p>
                                        <hr>
                                        <h6 class="fw-semibold">Tooltips in a modal</h6>
                                        <p><a href="#" data-bs-toggle="tooltip" title="Tooltip">This link</a> and <a href="#"
                                                data-bs-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary">Save changes</button> <button class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- MODAL EFFECTS -->
                        <div class="modal fade" id="modaldemo8">
                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close"
                                            data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Why We Use Electoral College, Not Popular Vote</h6>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                            distribution of letters, as opposed to
                                            using 'Content here, content here', making it look like readable English.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary">Save changes</button> <button class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="modal  fade" id="smallmodal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg " role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="extralargemodal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="scrollingmodal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                            laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                            mollit anim id est laborum..</p>
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                                            born and I will give you a complete account of the system, and expound the actual teachings of
                                            the great explorer of the truth, the master-builder
                                            of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who do not know how to pursue pleasure rationally encounter consequences that
                                            are extremely painful. Nor again is
                                            there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but
                                            because occasionally circumstances occur in which toil and pain can procure him some great
                                            pleasure. To take a trivial example, which
                                            of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But
                                            who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying
                                            consequences, or one who avoids a pain
                                            that produces no resultant pleasure?</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                                            demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                                            foresee the pain and trouble that are bound
                                            to ensue; and equal blame belongs to those who fail in their duty through weakness of will,
                                            which is the same as saying through shrinking from toil and pain. These cases are perfectly
                                            simple and easy to distinguish. In a free hour,
                                            when our power of choice is untrammelled and when nothing prevents our being able to do what we
                                            like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances
                                            and owing to the claims of duty or
                                            the obligations of business it will frequently occur that pleasures have to be repudiated and
                                            annoyances accepted. The wise man therefore always holds in these matters to this principle of
                                            selection: he rejects pleasures to secure
                                            other greater pleasures, or else he endures pains to avoid worse pains.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="fullscreenmodal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-fullscreen" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button class="btn-close me-1" data-bs-dismiss="modal" aria-label="Close">
                                            
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="inputModalLabel">New message</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

@endsection

@section('scripts')
	
	    <!-- Modal JS -->
        @vite('resources/assets/js/modal.js')

@endsection
