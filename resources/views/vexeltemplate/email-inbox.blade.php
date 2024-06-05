
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">

@endsection

@section('content')
        
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Email Inbox</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Email Inbox</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Row -->
                        <div class="row">
                            <div class="col-xxl-3 col-lg-6 mail-navigation">
                                <div class="w-100">
                                    <div class="card mb-lg-0">
                                        <div class="mt-4 mx-4 mb-4 text-center">
                                            <a href="{{url('email-compose')}}" class="btn btn-primary btn-lg d-block" data-bs-toggle="modal"
                                            data-bs-target="#emailcompose"><i class="ri-edit-line me-1"></i> Compose</a>
                                        </div>
                                        <div class="inbox-menu">
                                            <div class="list-group list-group-transparent mb-0 mail-inbox">
                                                <a href="javascript:void(0);" class="mail-type list-group-item d-flex align-items-center active mx-4 text-primary">
                                                    <span class="icons"><i class="ri-inbox-archive-line"></i></span> All Mails <span class="ms-auto badge bg-primary bradius">14</span>
                                                </a>
                                                <a href="javascript:void(0);" class="mail-type list-group-item d-flex align-items-center mx-4">
                                                    <span class="icons"><i class="ri-mail-line"></i></span> Inbox <span class="ms-auto badge bg-secondary bradius">14</span>
                                                </a>
                                                <a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
                                                    <span class="icons"><i class="ri-mail-open-line"></i></span> Drafts
                                                </a>
                                                <a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
                                                    <span class="icons"><i class="ri-mail-open-line"></i></span> Spam
                                                </a>
                                                <a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
                                                    <span class="icons"><i class="ri-star-line"></i></span> Starred <span class="ms-auto badge bg-success bradius">03</span>
                                                </a>
                                                <a href="javascript:void(0);" class="list-group-item d-flex align-items-center mx-4">
                                                    <span class="icons"><i class="ri-price-tag-3-line"></i></span> Tags
                                                </a>
                                            </div>
                                            <div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
                                                <div class="accordion accordion-mail mx-4" id="accordionPanelsiconExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="panelsicon-headingOne">
                                                            <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsicon-collapseOne" aria-expanded="true" aria-controls="panelsicon-collapseOne">
                                                                <span class="icons"><i class="ri-arrow-down-line"></i></span>
                                                                More
                                                            </button>
                                                        </h2>
                                                        <div id="panelsicon-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsicon-headingOne">
                                                            <div class="accordion-body">
                                                                <a href="javascript:void(0);" class="list-group-item d-flex align-items-center">
                                                                    <span class="icons"><i class="ri-mail-send-line"></i></span> Sent Mail
                                                                </a>
                                                                <a href="javascript:void(0);" class="list-group-item d-flex align-items-center">
                                                                    <span class="icons"><i class="ri-mail-send-line"></i></span> Archieve
                                                                </a>
                                                                <a href="javascript:void(0);" class="list-group-item d-flex align-items-center">
                                                                    <span class="icons"><i class="ri-mail-send-line"></i></span> Important
                                                                </a>
                                                                <a href="javascript:void(0);" class="list-group-item d-flex align-items-center">
                                                                    <span class="icons"><i class="ri-mail-send-line"></i></span> Sheduled
                                                                </a>
                                                                <a href="javascript:void(0);" class="list-group-item d-flex align-items-center">
                                                                    <span class="icons"><i class="ri-delete-bin-line"></i></span> Trash
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body border-top p-0 py-3">
                                                <div class="list-group list-group-transparent mb-0 mail-inbox mx-4">
                                                    <div class="mb-2">
                                                        <span class="fw-semibold fs-17">Lables</span>
                                                        <button type="button" class="btn btn-sm btn-icon btn-primary-light float-end" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-original-title="Create New Label"><i class="fe fe-plus"></i></button>
                                                    </div>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                        <i class="ri-radio-button-fill text-primary me-2"></i> Friends
                                                    </a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                        <i class="ri-radio-button-fill text-secondary me-2"></i> Family
                                                    </a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                        <i class="ri-radio-button-fill text-success me-2"></i> Social
                                                    </a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                        <i class="ri-radio-button-fill text-info me-2"></i> Office
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body border-top p-0 py-3">
                                                <div class="list-group list-group-transparent mb-0 mail-inbox mx-4">
                                                    <div class="mb-2">
                                                        <span class="fw-semibold fs-17">Quick Access</span>
                                                        <button type="button" class="btn btn-sm btn-icon btn-primary-light float-end" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-original-title="Add More"><i class="fe fe-plus"></i></button>
                                                    </div>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                        <i class="ri-contacts-line text-primary me-2"></i> Contact
                                                    </a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                        <i class="ri-calendar-2-line text-secondary me-2"></i> Shedule
                                                    </a>
                                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center py-2">
                                                        <i class="ri-file-user-line text-success me-2"></i> Files
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 total-mails2">
                                <div class="card">
                                    <div class="total-mails">
                                        <div class="py-3 px-5 d-flex align-items-center border-bottom">
                                            <div class="all-mails">
                                                <input class="form-check-input check-all" type="checkbox" id="checkAll" value="" aria-label="...">
                                            </div>
                                            <div class="flex-fill">
                                                <h6 class="fw-semibold mb-0">All Mails</h6>
                                            </div>
                                            <ul class="unstyled inbox-pagination">
                                                <li><span class="fs-13">1-50 of 234</span></li>
                                                <li>
                                                    <button class="btn btn-icon border btn-sm np-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Starred">
                                                        <i class="fa fa-angle-right pagination-right text-dark transform-arrow"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="btn btn-icon border btn-sm np-btn ms-2 d-lg-none d-block total-mails-close">
                                                        <i class="ri-close-line"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-3 border-bottom">
                                            <div class="input-group">
                                                <input type="text" class="form-control border-end-0" placeholder="Search Email" aria-describedby="button-addon2">
                                                <button class="btn border" type="button" id="button-addon2"><i class="bi bi-search text-muted"></i></button>
                                            </div>
                                        </div>
                                        <div class="mail-messages" id="mail-messages">
                                            <ul class="list-unstyled mb-0">
                                                <li class="user-list">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3 mt-1 user-checkbox">
                                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                        </div>
                                                        <div class="me-1 lh-1">
                                                            <span
                                                                class="avatar avatar-sm rounded-circle me-2 mail-msg-avatar">
                                                                <img src="{{asset('build/assets/images/users/11.jpg')}}" class="rounded-circle" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12">
                                                                <span
                                                                    class="float-end text-muted fw-normal fs-11 d-inline-flex align-items-center"><span class="me-2"><i class="ri-attachment-2 align-middle fs-12"></i></span>1:32PM</span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                            <p class="mail-msg mb-0">
                                                                <span class="d-block mb-0  fw-600 text-truncate">New Project details</span>
                                                                <span
                                                                    class="fs-12 text-muted text-wrap text-truncate">Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit
                                                                    <button class="btn p-0 lh-1 mail-starred true border-0 float-end">
                                                                        <i class="ri-star-fill fs-14"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active user-list">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3 mt-1 user-checkbox">
                                                            <input class="form-check-input" type="checkbox" value="" aria-label="..." checked>
                                                        </div>
                                                        <div class="me-1 lh-1">
                                                            <span
                                                                class="avatar avatar-sm rounded-circle bg-primary me-2 mail-msg-avatar">
                                                                SM
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12">
                                                                    <span
                                                                    class="float-end text-muted fw-normal fs-11">10:27AM</span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                            <p class="mail-msg mb-0">
                                                                <span class="d-block mb-0  fw-600 text-truncate">History of planets are discovered yesterday.</span>
                                                                <span
                                                                    class="fs-12 text-muted text-wrap text-truncate">Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit
                                                                    <span class="badge bg-primary float-end">2</span>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="user-list">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3 mt-1 user-checkbox">
                                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                        </div>
                                                        <div class="me-1 lh-1">
                                                            <span
                                                                class="avatar avatar-sm rounded-circle me-2 mail-msg-avatar">
                                                                <img src="{{asset('build/assets/images/users/10.jpg')}}" class="rounded-circle" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12">
                                                                    <span class="badge bg-success">Promotion</span><span
                                                                    class="float-end text-muted fw-normal fs-11">Yesterday, 10:27AM</span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                            <p class="mail-msg mb-0">
                                                                <span class="d-block mb-0  fw-600 text-truncate">Request for return of item ?</span>
                                                                <span
                                                                    class="fs-12 text-muted text-wrap text-truncate">Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit
                                                                    <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                                        <i class="ri-star-fill fs-14"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="user-list">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3 mt-1 user-checkbox">
                                                            <input class="form-check-input" type="checkbox" value="" aria-label="..." checked>
                                                        </div>
                                                        <div class="me-1 lh-1">
                                                            <span
                                                                class="avatar avatar-sm rounded-circle me-2 mail-msg-avatar">
                                                                <img src="{{asset('build/assets/images/users/10.jpg')}}" class="rounded-circle" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12">
                                                                <span
                                                                    class="float-end text-muted fw-normal fs-11">24 Oct, 5:45PM</span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                            <p class="mail-msg mb-0">
                                                                <span class="d-block mb-0  fw-600 text-truncate">Completion of work is pending</span>
                                                                <span
                                                                    class="fs-12 text-muted text-wrap text-truncate">Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit
                                                                    <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                                        <i class="ri-star-fill fs-14"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="user-list">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3 mt-1 user-checkbox">
                                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                        </div>
                                                        <div class="me-1 lh-1">
                                                            <span
                                                                class="avatar avatar-sm rounded-circle bg-pink me-2 mail-msg-avatar">
                                                                MD
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12">
                                                                <span
                                                                    class="float-end text-muted fw-normal fs-11">12 Sep, 11:24AM</span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                            <p class="mail-msg mb-0">
                                                                <span class="d-block mb-0  fw-600 text-truncate">Most Probable date of project completion</span>
                                                                <span
                                                                    class="fs-12 text-muted text-wrap text-truncate">Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit
                                                                    <button class="btn p-0 lh-1 mail-starred true border-0 float-end">
                                                                        <i class="ri-star-fill fs-14"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="user-list">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3 mt-1 user-checkbox">
                                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                        </div>
                                                        <div class="me-1 lh-1">
                                                            <span
                                                                class="avatar avatar-sm rounded-circle me-2 mail-msg-avatar">
                                                                <img src="{{asset('build/assets/images/users/10.jpg')}}" class="rounded-circle" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12">
                                                                <span class="badge bg-danger">Personal</span><span
                                                                    class="float-end text-muted fw-normal fs-11">11 Sep, 10:32AM</span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                            <p class="mail-msg mb-0">
                                                                <span class="d-block mb-0  fw-600 text-truncate">Personal Mail</span>
                                                                <span
                                                                    class="fs-12 text-muted text-wrap text-truncate">Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit
                                                                    <span class="badge bg-primary float-end">5</span>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="user-list">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3 mt-1 user-checkbox">
                                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                        </div>
                                                        <div class="me-1 lh-1">
                                                            <span
                                                                class="avatar avatar-sm rounded-circle bg-info me-2 mail-msg-avatar">
                                                                <i class="fe fe-bell"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12">
                                                                <span
                                                                    class="float-end text-muted fw-normal fs-11">08 Aug, 08:12AM</span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                            <p class="mail-msg mb-0">
                                                                <span class="d-block mb-0  fw-600 text-truncate">Applying for bank loan?</span>
                                                                <span
                                                                    class="fs-12 text-muted text-wrap text-truncate">Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit
                                                                    <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                                        <i class="ri-star-fill fs-14"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="user-list">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3 mt-1 user-checkbox">
                                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                        </div>
                                                        <div class="me-1 lh-1">
                                                            <span
                                                                class="avatar avatar-sm rounded-circle me-2 mail-msg-avatar">
                                                                <img src="{{asset('build/assets/images/users/10.jpg')}}" class="rounded-circle" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12">
                                                                    <span
                                                                    class="float-end text-muted fw-normal fs-11">16 July, 05:52PM</span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                            <p class="mail-msg mb-0">
                                                                <span class="d-block mb-0  fw-600 text-truncate">Life Insurance Corparation.</span>
                                                                <span
                                                                    class="fs-12 text-muted text-wrap text-truncate">Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit
                                                                    <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                                        <i class="ri-star-fill fs-14"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="user-list">
                                                    <a href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="d-flex align-items-top">
                                                        <div class="me-3 mt-1 user-checkbox">
                                                            <input class="form-check-input" type="checkbox" value="" aria-label="...">
                                                        </div>
                                                        <div class="me-1 lh-1">
                                                            <span
                                                                class="avatar avatar-sm rounded-circle me-2 mail-msg-avatar">
                                                                <img src="{{asset('build/assets/images/users/10.jpg')}}" class="rounded-circle" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-fill">
                                                            <p class="mb-0 fs-12">
                                                                    <span
                                                                    class="float-end text-muted fw-normal fs-11">16 July, 05:52PM</span>
                                                            </p>
                                                            <p class="fs-12 mb-0">
                                                            <p class="mail-msg mb-0">
                                                                <span class="d-block mb-0  fw-600 text-truncate">Life Insurance Corparation.</span>
                                                                <span
                                                                    class="fs-12 text-muted text-wrap text-truncate">Lorem
                                                                    ipsum dolor sit amet consectetur adipisicing elit
                                                                    <button class="btn p-0 lh-1 mail-starred border-0 float-end">
                                                                        <i class="ri-star-fill fs-14"></i>
                                                                    </button>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-lg-6 mails-information">
                                <div class="card">
                                    <div class="mail-info-header d-flex align-items-center flex-wrap">
                                        <div class="me-1">
                                            <span class="avatar avatar-md online me-2 rounded-circle mail-msg-avatar">
                                                <img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-circle" alt="img">
                                            </span>
                                        </div>
                                        <div class="flex-fill">
                                            <h6 class="mb-0 fs-14">Jeremy Taylor</h6>
                                            <span class="text-muted fs-12">jeremytaylor123@gmail.com</span>
                                        </div>
                                        <div class="mail-action-icons">
                                            <button class="btn btn-icon border btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Starred">
                                                <i class="ri-star-line"></i>
                                            </button>
                                            <button class="btn btn-icon border btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive">
                                                <i class="ri-inbox-archive-line"></i>
                                            </button>
                                            <button class="btn btn-icon border btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Report spam">
                                                <i class="ri-spam-2-line"></i>
                                            </button>
                                            <button class="btn btn-icon border btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                            <button class="btn btn-icon border btn-sm ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reply">
                                                <i class="ri-reply-line"></i>
                                            </button>
                                        </div>
                                        <div class="responsive-mail-action-icons">
                                            <div class="dropdown">
                                                <button class="btn btn-icon btn-light btn-wave waves-light waves-effect" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu" style="">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-star-line me-1 align-middle d-inline-block"></i>Starred</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-inbox-archive-line me-1 align-middle d-inline-block"></i>Archive</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-spam-2-line me-1 align-middle d-inline-block"></i>Report Spam</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-1 align-middle d-inline-block"></i>Delete</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-reply-line me-1 align-middle d-inline-block"></i>Reply</a></li>
                                                </ul>
                                            </div>
                                            <button class="btn btn-icon btn-light ms-1 close-button">
                                                <i class="ri-close-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body mail-info-body">
                                        <div class="eamil-body">
                                            <h5 class="fw-semibold">History of planets are discovered yesterday.</h5>
                                            <p>Hello Mr.Json Taylor,</p>
                                            <p class="fs-13 text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                            <p class="fs-13 text-muted"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                            <br>
                                            <p class="mb-0">Thanking you Mr.Json</p>
                                            <p class="mb-0 fs-13 mt-4">
                                                <span class="d-block">Regards,</span>
                                                <span class="d-block">Jeremy Taylor</span>
                                            </p>
                                            <hr>
                                            <div class="email-attch">
                                                <p class="fw-600">Attachments <a href="{{url('filemanager-list')}}" class="float-end">Download All</a></p>
                                            </div>
                                            <div class="mt-2 d-flex mb-3 flex-wrap gap-2">
                                                <a href="javascript:void(0);" class="mail-attachment ms-sm-0 ms-2 border">
                                                    <div class="attachment-icon me-2">
                                                        <span class="avatar rounded-circle avatar-sm bg-info-transparent"><i class="ri-file-pdf-line"></i></span>
                                                    </div>
                                                    <div class="lh-1">
                                                        <p class="mb-2 text-truncate fw-600 text-dark">
                                                            Inquiry_2.21-4.pdf
                                                        </p>
                                                        <p class="mb-0 fs-11 text-muted">
                                                            1.3MB
                                                        </p>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0);" class="mail-attachment ms-2 border">
                                                    <div class="attachment-icon me-2">
                                                        <span class="avatar rounded-circle avatar-sm bg-success-transparent"><i class="ri-file-text-line"></i></span>
                                                    </div>
                                                    <div class="lh-1">
                                                        <p class="mb-2 text-truncate fw-600 text-dark">
                                                            Detail_Project.doc
                                                        </p>
                                                        <p class="mb-0 fs-11 text-muted">
                                                            432MB
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="row attachments-doc">
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 mb-2">
                                                    <div class="border overflow-hidden p-0 br-7">
                                                        <a href="{{url('filemanager-list')}}"><img src="{{asset('build/assets/images/media/8.jpg')}}" class="card-img-top" alt="img"></a>
                                                        <div class="p-3 text-center">
                                                            <a href="{{url('filemanager-list')}}" class="fw-semibold fs-15 text-dark">Image.jpg</a>
                                                            <p class="text-muted.ms-2 mb-0 fs-11">(223 KB)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 mb-2">
                                                    <div class="border overflow-hidden p-0 br-7">
                                                        <a href="{{url('filemanager-list')}}"><img src="{{asset('build/assets/images/media/22.jpg')}}" class="card-img-top" alt="img"></a>
                                                        <div class="p-3 text-center">
                                                            <a href="{{url('filemanager-list')}}" class="fw-semibold fs-15 text-dark">Image2.jpg</a>
                                                            <p class="text-muted.ms-2 mb-0 fs-11">(122 KB)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 mb-2">
                                                    <div class="border overflow-hidden p-0 br-7">
                                                        <a href="{{url('filemanager-list')}}"><img src="{{asset('build/assets/images/media/6.jpg')}}" class="card-img-top" alt="img"></a>
                                                        <div class="p-3 text-center">
                                                            <a href="{{url('filemanager-list')}}" class="fw-semibold fs-15 text-dark">Image3.jpg</a>
                                                            <p class="text-muted.ms-2 mb-0 fs-11">(345 KB)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a class="btn btn-primary mt-1 mb-1" href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
                                        <a class="btn btn-secondary mt-1 mb-1" href="javascript:void(0);"><i class="fa fa-share"></i> Forward</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('modals')
                    <div class="modal fade" id="emailcompose" tabindex="-1" aria-labelledby="emailcomposeLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="emailcomposeLabel">Compose Mail</h6>
                                    <div>
                                        <!-- <a onclick="openFullscreen();" href="#">
                                            <i class="ri-fullscreen-line full-screen-open"></i>
                                        </a> -->
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="modal-body px-4">
                                    <div class="row">
                                        <div class="col-xl-6 mb-2">
                                            <label for="fromMail" class="form-label">From<sup><i class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                            <input type="email" class="form-control" id="fromMail" placeholder="Enter email">
                                        </div>
                                        <div class="col-xl-6 mb-2">
                                            <label class="form-label">To<sup><i class="ri-star-s-fill text-success fs-8"></i></sup></label>
                                            <select class="form-control" name="email" id="email">
                                                <option value="">john123@gmail.com</option>
                                                <option value="br">taylor_angel@gmail.com</option>
                                                <option value="cz"> addieminstra@gmail.com</option>
                                                <option value="de">eileen_dover@gmail.com</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 mb-2">
                                            <label for="mailCC" class="form-label text-dark fw-semibold">Cc</label>
                                            <input type="email" class="form-control" id="mailCC">
                                        </div>
                                        <div class="col-xl-6 mb-2">
                                            <label for="mailBcc" class="form-label text-dark fw-semibold">Bcc</label>
                                            <input type="email" class="form-control" id="mailBcc">
                                        </div>
                                        <div class="col-xl-12 mb-2">
                                            <label for="Subject" class="form-label">Subject</label>
                                            <input type="text" class="form-control" id="Subject" placeholder="Subject">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="col-form-label">Content :</label>
                                            <div class="emailcompose">
                                                <div id="product-features"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection

@section('scripts')
	
	    <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Internal email JS -->
        @vite('resources/assets/js/email-ibox.js')

@endsection
