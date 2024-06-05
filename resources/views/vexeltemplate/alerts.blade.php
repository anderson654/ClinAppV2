
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Alerts</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Alerts</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Default alerts</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-primary" role="alert">
                                            Primary alert—At vero eos et accusamus praesentium!
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            Secondary alert—At vero eos et accusamus praesentium!
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            Success alert—At vero eos et accusamus praesentium!
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            Info alert—At vero eos et accusamus praesentium!
                                        </div>
                                        <div class="alert alert-light" role="alert">
                                            A simple light alert—check it out!
                                        </div>
                                        <div class="alert alert-dark" role="alert">
                                            A simple dark alert—check it out!
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            Warning alert—At vero eos et accusamus praesentium!
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            Danger alert—At vero eos et accusamus praesentium!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Dismissing alerts</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-primary" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                        <div class="alert alert-light" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                        <div class="alert alert-dark" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Warning! </strong> Better check yourself, you're not looking too good.
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Link Color alerts</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-primary" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Heads up!</strong> This<a href="javascript:void(0);" class="alert-link"> alert needs your attention,</a> but it's not super important.
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Warning! </strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good.</a>
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Oh snap!</strong> <a href="javascript:void(0);" class="alert-link">Change a few things up </a>and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Alerts with Icons</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-primary" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="fa fa-exclamation me-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="fa fa-frown-o me-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL END -->

                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Alerts With Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-default" role="alert">
                                                        <span class="alert-inner--icon"><i class="fe fe-download"></i></span>
                                                        <span class="alert-inner--text"><strong>Default!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                    </div>
                                                    <div class="alert alert-primary" role="alert">
                                                        <span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
                                                        <span class="alert-inner--text"><strong>Primary!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                    </div>
                                                    <div class="alert alert-success" role="alert">
                                                        <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                                                        <span class="alert-inner--text"><strong>Success!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                    </div>
                                                    <div class="alert alert-info" role="alert">
                                                        <span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
                                                        <span class="alert-inner--text"><strong>Info!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                    </div>
                                                    <div class="alert alert-warning" role="alert">
                                                        <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                                                        <span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                    </div>
                                                    <div class="alert alert-danger mb-0" role="alert">
                                                        <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                                        <span class="alert-inner--text"><strong>Danger!</strong> This is a warning alert—check it out that has an icon too!</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Alert with avatar</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-avatar alert-primary alert-dismissible d-flex align-items-center flex-wrap">
                                                        <span class="avatar avatar-sm brround cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/14.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="alert alert-avatar alert-secondary alert-dismissible d-flex align-items-center flex-wrap">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="avatar avatar-sm brround cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/14.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    </div>
                                                    <div class="alert alert-avatar  alert-success alert-dismissible d-flex align-items-center flex-wrap">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="avatar avatar-sm brround cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    </div>
                                                    <div class="alert alert-avatar  alert-info alert-dismissible d-flex align-items-center flex-wrap">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="avatar avatar-sm brround cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    </div>
                                                    <div class="alert alert-avatar  alert-warning alert-dismissible d-flex align-items-center flex-wrap">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="avatar avatar-sm brround cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/15.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    </div>
                                                    <div class="alert alert-avatar  alert-danger alert-dismissible d-flex align-items-center flex-wrap">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="avatar avatar-sm brround cover-image me-2" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-3 CLOSED -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Alerts with Additional content</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="switch-content">
                                                <div class="alert alert-primary px-0 mb-4" role="alert">
                                                    <div class="px-3">
                                                        <h4 class="alert-heading">Well done!</h4>
                                                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                    </div>
                                                    <hr>
                                                    <div class="px-3">
                                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                                    </div>
                                                </div>
                                                <div class="alert alert-secondary px-0 mb-4" role="alert">
                                                    <div class="px-3">
                                                        <h4 class="alert-heading">Well done!</h4>
                                                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                    </div>
                                                    <hr>
                                                    <div class="px-3">
                                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                                    </div>
                                                </div>
                                                <div class="alert alert-success px-0 mb-4" role="alert">
                                                    <div class="px-3">
                                                        <h4 class="alert-heading">Well done!</h4>
                                                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                    </div>
                                                    <hr>
                                                    <div class="px-3">
                                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Alerts Style</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="card">
                                                        <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-1">
                                                            <div class="d-sm-flex align-items-center">
                                                                <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24"><path fill="#f07f8f" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z"/><circle cx="12" cy="17" r="1" fill="#e62a45"/><path fill="#e62a45" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z"/></svg></span>
                                                                <div>
                                                                    <h4 class="h4 mb-0">Warning</h4>
                                                                    <p class="card-text  text-muted">Are you sure you want to delete 20 items</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <a href="javascript:void(0);" class="btn btn-white me-2 mb-2">cancel</a>
                                                                <a href="javascript:void(0);" class="btn btn-danger me-2 mb-2">delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-1">
                                                            <div class="d-sm-flex align-items-center">
                                                                <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24"><path fill="#fad383" d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z"></path><circle cx="12" cy="16" r="1" fill="#f7b731"></circle><path fill="#f7b731" d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z"></path></svg></span>
                                                                <div>
                                                                    <h4 class="h4 mb-0">Alert</h4>
                                                                    <p class="card-text  text-muted">Are you sure you want to end current services</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <a href="javascript:void(0);" class="btn btn-white me-2 mb-2">Cancel</a>
                                                                <a href="javascript:void(0);" class="btn btn-warning me-2 mb-2">End</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-1">
                                                            <div class="d-sm-flex align-items-center">
                                                                <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 24 24"><path fill="#13bfa6" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99"></path><path fill="#71d8c9" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z"></path></svg></span>
                                                                <div>
                                                                    <h4 class="h4 mb-0">Success</h4>
                                                                    <p class="card-text  text-muted">Sent successfully</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <a href="javascript:void(0);" class="btn btn-success">Close</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-0">
                                                        <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-1">
                                                            <div class="d-sm-flex align-items-center">
                                                                <span class="me-3"><svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" data-name="Layer 1" viewBox="0 0 24 24"><path fill="#05c3fb" d="M12 1.99951a.99974.99974 0 0 0-1 1v2a1 1 0 1 0 2 0v-2A.99974.99974 0 0 0 12 1.99951zM12 17.99951a.99974.99974 0 0 0-1 1v2a1 1 0 0 0 2 0v-2A.99974.99974 0 0 0 12 17.99951zM21 10.99951H19a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM6 11.99951a.99974.99974 0 0 0-1-1H3a1 1 0 0 0 0 2H5A.99974.99974 0 0 0 6 11.99951zM17.19629 8.99951a1.0001 1.0001 0 0 0 .86719.5.99007.99007 0 0 0 .499-.13428l1.73145-1a.99974.99974 0 1 0-1-1.73144l-1.73145 1A.9993.9993 0 0 0 17.19629 8.99951zM6.80371 14.99951a.99936.99936 0 0 0-1.36621-.36572l-1.73145 1a.99974.99974 0 1 0 1 1.73144l1.73145-1A.9993.9993 0 0 0 6.80371 14.99951zM15 6.80371a1.0006 1.0006 0 0 0 1.36621-.36621l1-1.73193a1.00016 1.00016 0 1 0-1.73242-1l-1 1.73193A1 1 0 0 0 15 6.80371zM3.70605 8.36523l1.73145 1a.99007.99007 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572l-1.73145-1a.99974.99974 0 1 0-1 1.73144zM9 17.1958a.99946.99946 0 0 0-1.36621.36621l-1 1.73194a1.00016 1.00016 0 0 0 1.73242 1l1-1.73194A1 1 0 0 0 9 17.1958zM20.294 15.63379l-1.73145-1a.99974.99974 0 1 0-1 1.73144l1.73145 1a.99.99 0 0 0 .499.13428.99977.99977 0 0 0 .501-1.86572zM16.36621 17.562a1.00016 1.00016 0 1 0-1.73242 1l1 1.73194a1.00016 1.00016 0 1 0 1.73242-1z"></path></svg></span>
                                                                <div>
                                                                    <h4 class="h4 mb-0">Processing</h4>
                                                                    <p class="card-text  text-muted">Your process currently in progress</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <a href="javascript:void(0);" class="btn btn-white me-2 mb-2">Cancel</a>
                                                                <a href="javascript:void(0);" class="btn btn-info me-2 mb-2">Stop</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-4 CLOSED -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Outline Alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-outline-primary" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-check-circle me-2 d-inline-flex text-primary" aria-hidden="true"></i><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-outline-secondary" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-user-check me-2 d-inline-flex text-secondary" aria-hidden="true"></i><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-outline-success" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-thumbs-up me-2 d-inline-flex text-success" aria-hidden="true"></i><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-outline-info" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-bell me-2 d-inline-flex text-info" aria-hidden="true"></i><strong>Heads up!</strong> This<a href="javascript:void(0);" class="alert-link"> alert needs your attention,</a> but it's not super important.
                                                    </div>
                                                    <div class="alert alert-outline-warning" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-info me-2 d-inline-flex text-warning" aria-hidden="true"></i><strong>Warning! </strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Solid Colored Alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-solid-primary" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-solid-secondary" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-solid-success" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-solid-info" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-solid-warning" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-exclamation me-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-5 CLOSED -->

                        <!-- ROW-6 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Rounded Alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-primary rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="d-inline-flex lh-1 fe fe-check-circle me-2 text-primary" aria-hidden="true"></i><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-secondary rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="d-inline-flex lh-1 fe fe-user-check me-2 text-secondary" aria-hidden="true"></i><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-success rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="d-inline-flex lh-1 fe fe-thumbs-up me-2 text-success" aria-hidden="true"></i><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-info rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="d-inline-flex lh-1 fe fe-bell me-2 text-info" aria-hidden="true"></i><strong>Heads up!</strong> This<a href="javascript:void(0);" class="alert-link"> alert needs your attention,</a> but it's not super important.
                                                    </div>
                                                    <div class="alert alert-warning rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="d-inline-flex lh-1 fe fe-info me-2 text-warning" aria-hidden="true"></i><strong>Warning! </strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Rounded Solid Colored Alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-solid-primary rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-solid-secondary rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-solid-success rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-solid-info rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-solid-warning rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-exclamation me-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-6 CLOSED -->

                        <!-- ROW-7 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Rounded Alerts Background Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-primary rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon rounded-circle d-inline-flex"><i class="fe fe-check-circle" aria-hidden="true"></i></span><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-secondary rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon rounded-circle d-inline-flex"><i class="fe fe-user-check" aria-hidden="true"></i></span><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-success rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon rounded-circle d-inline-flex"><i class="fe fe-thumbs-up" aria-hidden="true"></i></span><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-info rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon rounded-circle d-inline-flex"><i class="fe fe-bell" aria-hidden="true"></i></span><strong>Heads up!</strong> This<a href="javascript:void(0);" class="alert-link"> alert needs your attention,</a> but it's not super important.
                                                    </div>
                                                    <div class="alert alert-warning rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon rounded-circle d-inline-flex"><i class="fe fe-info" aria-hidden="true"></i></span><strong>Warning! </strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Alerts Background Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-primary " role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon br-5 d-inline-flex"><i class="fe fe-check-circle" aria-hidden="true"></i></span><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-secondary " role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon br-5 d-inline-flex"><i class="fe fe-user-check" aria-hidden="true"></i></span><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-success " role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon br-5 d-inline-flex"><i class="fe fe-thumbs-up" aria-hidden="true"></i></span><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-info " role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon br-5 d-inline-flex"><i class="fe fe-bell" aria-hidden="true"></i></span><strong>Heads up!</strong> This<a href="javascript:void(0);" class="alert-link"> alert needs your attention,</a> but it's not super important.
                                                    </div>
                                                    <div class="alert alert-warning " role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <span class="alert-bg-icon br-5 d-inline-flex"><i class="fe fe-info" aria-hidden="true"></i></span><strong>Warning! </strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-7 CLOSED -->

                        <!-- ROW-8 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Rounded Alerts with shadow</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-primary rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-check-circle me-2 d-inline-flex text-primary" aria-hidden="true"></i><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-secondary rounded-pill shadow-secondary" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-user-check me-2 d-inline-flex text-secondary" aria-hidden="true"></i><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-success rounded-pill shadow-success" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-thumbs-up me-2 d-inline-flex text-success" aria-hidden="true"></i><strong>Well done!</strong> You successfully read <a href="javascript:void(0);" class="alert-link">this important alert message.</a>
                                                    </div>
                                                    <div class="alert alert-info rounded-pill shadow-info" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-bell me-2 d-inline-flex text-info" aria-hidden="true"></i><strong>Heads up!</strong> This<a href="javascript:void(0);" class="alert-link"> alert needs your attention,</a> but it's not super important.
                                                    </div>
                                                    <div class="alert alert-warning rounded-pill shadow-warning" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fe fe-info me-2 d-inline-flex text-warning" aria-hidden="true"></i><strong>Warning! </strong> Better check yourself, you're <a href="javascript:void(0);" class="alert-link">not looking too good.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Rounded gradient Alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="switch-content">
                                                    <div class="alert alert-gradient-primary rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-gradient-secondary rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-gradient-success rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-gradient-info rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-bell-o me-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-gradient-warning rounded-pill" role="alert">
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                                        <i class="fa fa-exclamation me-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-8 CLOSED -->

                        <!-- ROW-9 OPEN -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Alert Styles</h3>
                                    </div>
                                    <div class="card-body switch-content">
                                        <div class="row mt-4">
                                            <div class="col-md-6 col-lg-6 col-xl-3">
                                                <div class="card">
                                                    <div class="card-header border-0">
                                                        <div class="alert-icon-style"><span class="avatar avatar-lg bg-success rounded-circle"><i class="fe fe-check-circle" aria-hidden="true"></i></span></div>
                                                        <div class="card-options">
                                                            <a href="javascript:void(0);" class="card-options-remove text-success z-index1" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <h4 class="fw-semibold mb-1 mt-3">Congratulations</h4>
                                                        <p class="card-text text-muted">Sent successfully</p>
                                                    </div>
                                                    <div class="card-footer text-center border-0 pt-0">
                                                        <div class="row">
                                                            <div class="text-center">
                                                                <a href="javascript:void(0);" class="btn btn-block btn-sm btn-success me-2">Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xl-3">
                                                <div class="card">
                                                    <div class="card-header br-ts-5 br-te-5 border-0 bg-danger-transparent">
                                                        <div class="alert-icon-style"><span class="avatar avatar-lg bg-danger rounded-circle"><i class="fe fe-info" aria-hidden="true"></i></span></div>
                                                        <div class="card-options">
                                                            <a href="javascript:void(0);" class="card-options-remove z-index1 text-danger" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <h4 class="fw-semibold mb-1 mt-3">Warning</h4>
                                                        <p class="card-text text-muted">Are you sure you want to delete 20 items</p>
                                                    </div>
                                                    <div class="card-footer text-center border-0 pt-0">
                                                        <div class="row">
                                                            <div class="text-center">
                                                                <a href="javascript:void(0);" class="btn btn-white me-2">Cancel</a>
                                                                <a href="javascript:void(0);" class="btn btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xl-3">
                                                <div class="card border-top border-info">
                                                    <div class="card-body text-center">
                                                        <a href="javascript:void(0);" class="card-options-remove float-end text-info" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                                        <span class="avatar avatar-lg bg-info rounded-circle"><i class="fe fe-bell" aria-hidden="true"></i></span>
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
                                            <div class="col-md-6 col-lg-6 col-xl-3">
                                                <div class="card">
                                                    <div class="card-header border-0">
                                                        <div class="alert-icon-style"><span class="avatar avatar-lg bg-warning rounded-circle"><i class="fe fe-zap" aria-hidden="true"></i></span></div>
                                                        <div class="card-options">
                                                            <a href="javascript:void(0);" class="card-options-remove z-index1 text-warning" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <h4 class="fw-semibold mb-1 mt-3">Processing</h4>
                                                        <p class="card-text text-muted">Your process currently in progress</p>
                                                    </div>
                                                    <div class="card-footer text-center border-0 bg-warning-transparent br-be-5 br-bs-5">
                                                        <div class="row">
                                                            <div class="text-center">
                                                                <a href="javascript:void(0);" class="btn btn-outline-warning me-2">Cancel</a>
                                                                <a href="javascript:void(0);" class="btn btn-warning">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-9 CLOSED -->

                        <!-- ROW-10 OPEN -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <h3 class="card-title">Live Example Alert</h3>
                                    </div>
                                    <div class="card-body switch-content">
                                        <div id="liveAlertPlaceholder"></div>
                                        <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-10 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Alerts JS -->
        @vite('resources/assets/js/alerts.js')

@endsection
