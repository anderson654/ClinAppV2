
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Avatars</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Avatars</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar Shapes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-3">
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                            <span class="avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                            <span class="avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                            <span class="avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/1.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/2.jpg')}}"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar Status Indicator</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-3">
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                    <span class="avatar-status bg-primary"></span>
                                                            </span>
                                                            <span class="avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                    <span class="avatar-status bg-red"></span>
                                                            </span>
                                                            <span class="avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                    <span class="avatar-status bg-green"></span>
                                                            </span>
                                                            <span class="avatar cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                    <span class="avatar-status bg-yellow"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                    <span class="avatar-status bg-primary"></span>
                                                            </span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                    <span class="avatar-status bg-red"></span>
                                                            </span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                    <span class="avatar-status bg-green"></span>
                                                            </span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                    <span class="avatar-status bg-yellow"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                    <span class="avatar-status bg-primary"></span>
                                                            </span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                    <span class="avatar-status bg-red"></span>
                                                            </span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                    <span class="avatar-status bg-green"></span>
                                                            </span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                    <span class="avatar-status bg-yellow"></span>
                                                            </span>
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
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Label Avatar Status Indicator</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-3">
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar bg-primary">B<span class="avatar-status bg-success"></span></span>
                                                            <span class="avatar bg-secondary">L<span class="avatar-status bg-success"></span></span>
                                                            <span class="avatar bg-success-transparent">K<span class="avatar-status bg-success"></span></span>
                                                            <span class="avatar bg-info-transparent">M<span class="avatar-status bg-info"></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar avatar-radius bg-success">N<span class="avatar-status bg-success"></span></span>
                                                            <span class="avatar avatar-radius bg-info">T<span class="avatar-status bg-success"></span></span>
                                                            <span class="avatar avatar-radius bg-primary-transparent">P<span class="avatar-status bg-primary"></span></span>
                                                            <span class="avatar avatar-radius bg-secondary-transparent">Q<span class="avatar-status bg-secondary"></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar rounded-circle bg-azure">R<span class="avatar-status bg-success"></span></span>
                                                            <span class="avatar rounded-circle bg-pink">S<span class="avatar-status bg-success"></span></span>
                                                            <span class="avatar rounded-circle bg-primary-transparent">U<span class="avatar-status bg-primary"></span></span>
                                                            <span class="avatar rounded-circle bg-danger-transparent">T<span class="avatar-status bg-danger"></span></span>
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
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Stacked Avatars</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-3">
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list avatar-list-stacked">
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span>
                                                            <span class="avatar avatar-radius bg-primary">+8</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list avatar-list-stacked">
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span>
                                                            <span class="avatar rounded-circle bg-primary">+8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Stacked Avatars with Pull up styles</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-3">
                                                    <div class="col-lg-4">
                                                        <p class="fs-14">Pull-Up Avatars</p>
                                                        <div class="avatar-list avatar-list-stacked">
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="fs-14">Avatars with Tooltip</p>
                                                        <div class="avatar-list avatar-list-stacked">
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Taylor John"></span>
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Json"></span>
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Jooliee"></span>
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Rossine"></span>
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/11.jpg')}}" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-original-title="Raahulk"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="fs-14">Stacked Avatars with shapes</p>
                                                        <div class="avatar-list avatar-list-stacked">
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar rounded-circle avatar-pullup bg-azure">R</span>
                                                            <span class="avatar avatar-radius cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar avatar-radius bg-pink avatar-pullup">P</span>
                                                            <span class="avatar rounded-circle cover-image avatar-pullup" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}"></span>
                                                            <span class="avatar rounded-circle bg-primary avatar-pullup">+8</span>
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
                        <!-- ROW-2 OPEN -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-3">
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar avatar-radius bg-primary"><i class="bi bi-bell fs-15"></i></span>
                                                            <span class="avatar avatar-radius bg-secondary"><i class="bi bi-cast fs-15"></i></span>
                                                            <span class="avatar avatar-radius bg-success"><i class="bi bi-headset fs-15"></i></span>
                                                            <span class="avatar avatar-radius bg-info"><i class="bi bi-lightning-charge fs-15"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar rounded-circle bg-azure"><i class="bi bi-star fs-15"></i></span>
                                                            <span class="avatar rounded-circle bg-pink"><i class="bi bi-trash fs-15"></i></span>
                                                            <span class="avatar rounded-circle bg-warning"><i class="bi bi-share fs-15"></i></span>
                                                            <span class="avatar rounded-circle bg-danger"><i class="bi bi-stopwatch fs-15"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar rounded-circle bg-primary-transparent"><i class="bi bi-trophy fs-15"></i></span>
                                                            <span class="avatar rounded-circle bg-secondary-transparent"><i class="bi bi-volume-up-fill fs-15"></i></span>
                                                            <span class="avatar rounded-circle bg-success-transparent"><i class="bi bi-whatsapp fs-15"></i></span>
                                                            <span class="avatar rounded-circle bg-info-transparent"><i class="bi bi-upload fs-15"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar Icons with badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-3">
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar rounded-circle bg-azure"><i class="bi bi-facebook fs-15"></i><span class="rounded-pill avatar-badge bg-red">6</span></span>
                                                            <span class="avatar rounded-circle bg-pink"><i class="bi bi-twitter fs-15"></i><span class="rounded-pill avatar-badge bg-red">2</span></span>
                                                            <span class="avatar rounded-circle bg-warning"><i class="bi bi-instagram fs-15"></i><span class="rounded-pill avatar-badge bg-red">9</span></span>
                                                            <span class="avatar rounded-circle bg-danger"><i class="bi bi-envelope fs-15"></i><span class="rounded-pill avatar-badge bg-red">7</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="avatar-list">
                                                            <span class="avatar rounded-circle bg-primary-transparent"><i class="bi bi-trophy fs-15"></i><span class="rounded-pill avatar-badge bg-red">5</span></span>
                                                            <span class="avatar rounded-circle bg-secondary-transparent"><i class="bi bi-volume-up-fill fs-15"></i><span class="rounded-pill avatar-badge bg-red">4</span></span>
                                                            <span class="avatar rounded-circle bg-success-transparent"><i class="bi bi-whatsapp fs-15"></i><span class="rounded-pill avatar-badge bg-red">8</span></span>
                                                            <span class="avatar rounded-circle bg-info-transparent"><i class="bi bi-upload fs-15"></i><span class="rounded-pill avatar-badge bg-red">6</span></span>
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
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar with Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-3">
                                                    <div class="col-lg-6">
                                                        <div class="avatar-list">
                                                            <span class="avatar avatar-md avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}">
                                                                <span class="rounded-pill avatar-badge bg-primary fs-10">3</span></span>
                                                            <span class="avatar avatar-md avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                    <span class="rounded-pill avatar-badge bg-secondary fs-10">1</span>
                                                            </span>
                                                            <span class="avatar avatar-md avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                <span class="rounded-pill avatar-badge bg-red fs-10">4</span>
                                                            </span>
                                                            <span class="avatar avatar-md avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                <span class="rounded-pill avatar-badge bg-green fs-10">6</span>
                                                            </span>
                                                            <span class="avatar avatar-md avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                <span class="rounded-pill avatar-badge bg-yellow fs-10">4</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="avatar-list">
                                                            <span class="avatar avatar-md rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}">
                                                                <span class="rounded-pill avatar-badge bg-primary fs-10">3</span></span>
                                                            <span class="avatar avatar-md rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                    <span class="rounded-pill avatar-badge bg-secondary fs-10">1</span>
                                                            </span>
                                                            <span class="avatar avatar-md rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                <span class="rounded-pill avatar-badge bg-red fs-10">4</span>
                                                            </span>
                                                            <span class="avatar avatar-md rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                <span class="rounded-pill avatar-badge bg-green fs-10">6</span>
                                                            </span>
                                                            <span class="avatar avatar-md rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                <span class="rounded-pill avatar-badge bg-yellow fs-10">4</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar with icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="row gy-3">
                                                    <div class="col-lg-6">
                                                        <div class="avatar-list">
                                                            <span class="avatar avatar-xl avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/21.jpg')}}">
                                                                <span class="rounded-pill avatar-icons bg-primary"><i class="fe fe-camera"></i></span></span>
                                                            <span class="avatar avatar-xl avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                <span class="rounded-pill avatar-icons bg-secondary"><i class="fe fe-bookmark"></i></span>
                                                            </span>
                                                            <span class="avatar avatar-xl avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                <span class="rounded-pill avatar-icons bg-red"><i class="fe fe-eye"></i></span>
                                                            </span>
                                                            <span class="avatar avatar-xl avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                <span class="rounded-pill avatar-icons bg-green"><i class="fe fe-message-square"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="avatar-list">
                                                            <span class="avatar avatar-xl rounded-pill cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                                                <span class="rounded-pill avatar-icons bg-secondary"><i class="fe fe-arrow-down"></i></span>
                                                            </span>
                                                            <span class="avatar avatar-xl rounded-pill cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                                <span class="rounded-pill avatar-icons bg-red"><i class="fe fe-lock"></i></span>
                                                            </span>
                                                            <span class="avatar avatar-xl rounded-pill cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                                <span class="rounded-pill avatar-icons bg-green"><i class="fe fe-camera"></i></span>
                                                            </span>
                                                            <span class="avatar avatar-xl rounded-pill cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}">
                                                                <span class="rounded-pill avatar-icons bg-yellow"><i class="fe fe-bell"></i></span>
                                                            </span>
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
                        <!-- ROW-3 OPEN -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar size</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-radius avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                                    <span class="avatar avatar-radius cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"></span>
                                                    <span class="avatar avatar-radius avatar-md cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
                                                    <span class="avatar avatar-radius avatar-lg cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                    <span class="avatar avatar-radius avatar-xl cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                                    <span class="avatar avatar-radius avatar-xxl cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Rounded Avatar sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="avatar-list">
                                                    <span class="avatar rounded-pill avatar-sm cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                                    <span class="avatar rounded-pill cover-image" data-bs-image-src="{{asset('build/assets/images/users/3.jpg')}}"></span>
                                                    <span class="avatar rounded-pill avatar-md cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"></span>
                                                    <span class="avatar rounded-pill avatar-lg cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"></span>
                                                    <span class="avatar rounded-pill avatar-xl cover-image" data-bs-image-src="{{asset('build/assets/images/users/4.jpg')}}"></span>
                                                    <span class="avatar rounded-pill avatar-xxl cover-image" data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-3 OPEN -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Label Avatar Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-xs avatar-radius bg-danger-transparent">XS</span>
                                                    <span class="avatar avatar-sm avatar-radius bg-success-transparent">SM</span>
                                                    <span class="avatar avatar-md avatar-radius bg-info-transparent">MD</span>
                                                    <span class="avatar avatar-lg avatar-radius bg-secondary-transparent">LG</span>
                                                    <span class="avatar avatar-xl avatar-radius bg-pink-transparent">XL</span>
                                                    <span class="avatar avatar-xxl avatar-radius bg-primary-transparent">XXL</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Rounded Label Avatar Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-xs rounded-pill bg-danger-transparent">XS</span>
                                                    <span class="avatar avatar-sm rounded-pill bg-success-transparent">SM</span>
                                                    <span class="avatar avatar-md rounded-pill bg-info-transparent">MD</span>
                                                    <span class="avatar avatar-lg rounded-pill bg-secondary-transparent">LG</span>
                                                    <span class="avatar avatar-xl rounded-pill bg-pink-transparent">XL</span>
                                                    <span class="avatar avatar-xxl rounded-pill bg-primary-transparent">XXL</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-3 OPEN -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Background Label Avatar Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-xs avatar-radius bg-danger">XS</span>
                                                    <span class="avatar avatar-sm avatar-radius bg-success">SM</span>
                                                    <span class="avatar avatar-md avatar-radius bg-info">MD</span>
                                                    <span class="avatar avatar-lg avatar-radius bg-secondary">LG</span>
                                                    <span class="avatar avatar-xl avatar-radius bg-pink">XL</span>
                                                    <span class="avatar avatar-xxl avatar-radius bg-primary">XXL</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-lg-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Background Rounded Label Avatar Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="card-content">
                                                <div class="avatar-list">
                                                    <span class="avatar avatar-xs rounded-pill bg-danger">XS</span>
                                                    <span class="avatar avatar-sm rounded-pill bg-success">SM</span>
                                                    <span class="avatar avatar-md rounded-pill bg-info">MD</span>
                                                    <span class="avatar avatar-lg rounded-pill bg-secondary">LG</span>
                                                    <span class="avatar avatar-xl rounded-pill bg-pink">XL</span>
                                                    <span class="avatar avatar-xxl rounded-pill bg-primary">XXL</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-3 OPEN -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
