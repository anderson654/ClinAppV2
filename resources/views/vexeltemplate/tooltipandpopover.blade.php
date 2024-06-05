
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Tooltip and Popover</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tooltip and Popover</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Tooltips start -->
                        <h1 class="fs-18 fw-semibold mb-4">Tooltips</h1>
                        <!-- Start:: row-1 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Tooltip Directions
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Tooltip on top">
                                            Tooltip on top
                                            </button>
                                            <button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Tooltip on right">
                                                Tooltip on right
                                            </button>
                                            <button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Tooltip on bottom">
                                                Tooltip on bottom
                                            </button>
                                            <button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Tooltip on left">
                                                Tooltip on left
                                            </button>
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
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Colored Tooltips
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-primary btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary"
                                                data-bs-placement="top" title="Primary Tooltip">
                                                Primary Tooltip
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-secondary"
                                                data-bs-placement="right" title="Secondary Tooltip">
                                                Secondary Tooltip
                                            </button>
                                            <button type="button" class="btn btn-warning btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-warning"
                                                data-bs-placement="bottom" title="Warning Tooltip">
                                                Warning Tooltip
                                            </button>
                                            <button type="button" class="btn btn-info btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-info"
                                                data-bs-placement="left" title="Info Tooltip">
                                                Info Tooltip
                                            </button>
                                            <button type="button" class="btn btn-success btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-success"
                                                data-bs-placement="top" title="Success Tooltip">
                                                Success Tooltip
                                            </button>
                                            <button type="button" class="btn btn-danger btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-danger"
                                                data-bs-placement="bottom" title="Danger Tooltip">
                                                Danger Tooltip
                                            </button>
                                            <button type="button" class="btn btn-light btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-light"
                                                data-bs-placement="bottom" title="Light Tooltip">
                                                Light Tooltip
                                            </button>
                                            <button type="button" class="btn btn-dark text-white btn-wave" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
                                                data-bs-placement="bottom" title="Dark Tooltip">
                                                Dark Tooltip
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                        <!-- Start:: row-3 -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Tooltips on links
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-0">
                                            Hover on the link to view the <a href="javascript:void(0);"
                                                data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Link Tooltip" class="text-primary">Tooltip</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            With an SVG's
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Home" data-bs-custom-class="tooltip-primary" class="me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg>
                                        </a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Message" data-bs-custom-class="tooltip-secondary" class="me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-secondary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg>
                                        </a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Add User" data-bs-custom-class="tooltip-warning" class="me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-warning" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M20,9V6h-2v3h-3v2h3v3h2v-3h3V9H20z M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6 c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2S7,9.1,7,8C7,6.9,7.9,6,9,6z M15.39,14.56C13.71,13.7,11.53,13,9,13c-2.53,0-4.71,0.7-6.39,1.56 C1.61,15.07,1,16.1,1,17.22V20h16v-2.78C17,16.1,16.39,15.07,15.39,14.56z M15,18H3v-0.78c0-0.38,0.2-0.72,0.52-0.88 C4.71,15.73,6.63,15,9,15c2.37,0,4.29,0.73,5.48,1.34C14.8,16.5,15,16.84,15,17.22V18z"/></g></svg>
                                        </a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Send File" data-bs-custom-class="tooltip-info" class="me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-info" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4.01 6.03l7.51 3.22-7.52-1 .01-2.22m7.5 8.72L4 17.97v-2.22l7.51-1M2.01 3L2 10l15 2-15 2 .01 7L23 12 2.01 3z"/></svg>
                                        </a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Action" data-bs-custom-class="tooltip-success" class="me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-success" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Tooltip For Images
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Julien kerr" data-bs-custom-class="tooltip-primary" class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}">
                                            <span class="avatar-status bg-primary"></span>
                                        </a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Mexico roy" data-bs-custom-class="tooltip-primary" class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/9.jpg')}}">
                                                <span class="avatar-status bg-red"></span>
                                        </a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" title="KIn devid" data-bs-custom-class="tooltip-primary" class="avatar rounded-circle cover-image" data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}">
                                                <span class="avatar-status bg-green"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->
                        <!-- Tooltips End -->

                        <!-- Popovers start -->
                        <h2 class="fs-18 fw-semibold mb-4">Popovers</h2>
                        <!-- Start:: row-1 -->
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Default Popovers
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
                                                data-bs-toggle="popover" data-bs-placement="top" title="Popover Top"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                                Top
                                            </a>
                                            <a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
                                                data-bs-toggle="popover" data-bs-placement="right" title="Popover Right"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                                Right</a>
                                            <a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
                                                data-bs-toggle="popover" data-bs-placement="bottom" title="Popover Bottom"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                                Bottom</a>
                                            <a tabindex="0" class="btn btn-outline-primary btn-wave" role="button"
                                                data-bs-toggle="popover" data-bs-placement="left" title="Popover Left"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover
                                                Left</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Colored Headers
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-outline-primary btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="top" data-bs-custom-class="header-primary"
                                                title="Color Header" data-bs-content="Popover with primary header.">
                                                Header Primary
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary btn-wave"
                                                data-bs-toggle="popover" data-bs-placement="right"
                                                data-bs-custom-class="header-secondary" title="Color Header"
                                                data-bs-content="Popover with secondary header.">
                                                Header Secondary
                                            </button>
                                            <button type="button" class="btn btn-outline-info btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="bottom" data-bs-custom-class="header-info"
                                                title="Color Header" data-bs-content="Popover with info header.">
                                                Header Info
                                            </button>
                                            <button type="button" class="btn btn-outline-warning btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="left" data-bs-custom-class="header-warning"
                                                title="Color Header" data-bs-content="Popover with warning header.">
                                                Header Warning
                                            </button>
                                            <button type="button" class="btn btn-outline-success btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="top" data-bs-custom-class="header-success"
                                                title="Color Header" data-bs-content="Popover with success header.">
                                                Header Success
                                            </button>
                                            <button type="button" class="btn btn-outline-danger btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="top" data-bs-custom-class="header-danger"
                                                title="Color Header" data-bs-content="Popover with danger header.">
                                                Header Danger
                                            </button>
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
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Colored Popovers
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-primary btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="top" data-bs-custom-class="popover-primary"
                                                title="Color Background" data-bs-content="Popover with primary background.">
                                                Primary
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-wave"
                                                data-bs-toggle="popover" data-bs-placement="right"
                                                data-bs-custom-class="popover-secondary" title="Color Background"
                                                data-bs-content="Popover with secondary background.">
                                                Secondary
                                            </button>
                                            <button type="button" class="btn btn-info btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="bottom" data-bs-custom-class="popover-info"
                                                title="Color Background" data-bs-content="Popover with info background.">
                                                Info
                                            </button>
                                            <button type="button" class="btn btn-warning btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="left" data-bs-custom-class="popover-warning"
                                                title="Color Background" data-bs-content="Popover with warning background.">
                                                Warning
                                            </button>
                                            <button type="button" class="btn btn-success btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="top" data-bs-custom-class="popover-success"
                                                title="Color Background" data-bs-content="Popover with success background.">
                                                Success
                                            </button>
                                            <button type="button" class="btn btn-danger btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="right" data-bs-custom-class="popover-danger"
                                                title="Color Background" data-bs-content="Popover with danger background.">
                                                Danger
                                            </button>
                                            <button type="button" class="btn btn-teal btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="bottom" data-bs-custom-class="popover-teal"
                                                title="Color Background" data-bs-content="Popover with teal background.">
                                                Teal
                                            </button>
                                            <button type="button" class="btn btn-purple btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="left" data-bs-custom-class="popover-purple"
                                                title="Color Background" data-bs-content="Popover with purple background.">
                                                Purple
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                        <!-- Start:: row-3 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Light Popovers
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-primary-light btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="top" data-bs-custom-class="popover-primary-light"
                                                title="Light Background" data-bs-content="Popover with light primary background.">
                                                Primary
                                            </button>
                                            <button type="button" class="btn btn-secondary-light btn-wave"
                                                data-bs-toggle="popover" data-bs-placement="right"
                                                data-bs-custom-class="popover-secondary-light" title="Light Background"
                                                data-bs-content="Popover with light secondary background.">
                                                Secondary
                                            </button>
                                            <button type="button" class="btn btn-info-light btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="bottom" data-bs-custom-class="popover-info-light"
                                                title="Light Background" data-bs-content="Popover with light info background.">
                                                Info
                                            </button>
                                            <button type="button" class="btn btn-warning-light btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="left" data-bs-custom-class="popover-warning-light"
                                                title="Light Background" data-bs-content="Popover with light warning background.">
                                                Warning
                                            </button>
                                            <button type="button" class="btn btn-success-light btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="top" data-bs-custom-class="popover-success-light"
                                                title="Light Background" data-bs-content="Popover with light success background.">
                                                Success
                                            </button>
                                            <button type="button" class="btn btn-danger-light btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="right" data-bs-custom-class="popover-danger-light"
                                                title="Light Background" data-bs-content="Popover with light danger background.">
                                                Danger
                                            </button>
                                            <button type="button" class="btn btn-teal-light btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="bottom" data-bs-custom-class="popover-teal-light"
                                                title="Light Background" data-bs-content="Popover with light teal background.">
                                                Teal
                                            </button>
                                            <button type="button" class="btn btn-purple-light btn-wave" data-bs-toggle="popover"
                                                data-bs-placement="left" data-bs-custom-class="popover-purple-light"
                                                title="Light Background" data-bs-content="Popover with light purple background.">
                                                Purple
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->

                        <!-- Start:: row-4 -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Dismissible Popovers
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-wrap justify-content-between">
                                        <a tabindex="0" class="btn btn-primary m-1" role="button"
                                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" title="Dismissible popover"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover Dismiss
                                        </a>
                                        <a tabindex="0" class="btn btn-secondary m-1" role="button"
                                            data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="right" title="Dismissible popover"
                                            data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover Dismiss
                                        </a>
                                        <a tabindex="0" class="btn btn-info m-1" role="button" data-bs-toggle="popover"
                                            data-bs-trigger="focus" data-bs-placement="bottom" title="Dismissible popover"
                                            data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover Dismiss
                                        </a>
                                        <a tabindex="0" class="btn btn-warning m-1" role="button" data-bs-toggle="popover"
                                            data-bs-trigger="focus" data-bs-placement="left" title="Dismissible popover"
                                            data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover Dismiss
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Disabled Popover
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                                        data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                        <button class="btn btn-primary" type="button" disabled>Disabled
                                            button</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Icon Popovers
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a class="me-4" href="javascript:void(0);" data-bs-toggle="popover"
                                                data-bs-placement="top" data-bs-custom-class="popover-primary" data-bs-content="This popover is used to provide details about this icon.">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg>
                                        </a>
                                        <a class="me-4" href="javascript:void(0);" data-bs-toggle="popover"
                                                data-bs-placement="left" data-bs-custom-class="popover-secondary" data-bs-content="This popover is used to provide information about this icon.">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-secondary" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-4 -->
                        <!-- Popovers end -->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
