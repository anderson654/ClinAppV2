
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Tabs</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tabs</li>
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
                                    <div class="card-header">
                                        <h3 class="card-title">Tabs style</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="panel panel-primary">
                                            <div class="tab-menu-heading">
                                                <div class="tabs-menu">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs">
                                                        <li><a href="#tab1" class="active" data-bs-toggle="tab">Tab
                                                                1</a></li>
                                                        <li><a href="#tab2" data-bs-toggle="tab">Tab 2</a></li>
                                                        <li><a href="#tab3" data-bs-toggle="tab">Tab 3</a></li>
                                                        <li><a href="#tab4" data-bs-toggle="tab">Tab 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">
                                                        <p>page editors now use Lorem Ipsum as their default model text,
                                                            and a search for 'lorem ipsum' will uncover many web sites
                                                            still in their infancy. Various versions have evolved over
                                                            the years, sometimes
                                                            by accident, sometimes on purpose (injected humour and the
                                                            like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">
                                                        <p> default model text, and a search for 'lorem ipsum' will
                                                            uncover many web sites still in their infancy. Various
                                                            versions have evolved over the years, sometimes by accident,
                                                            sometimes on purpose (injected
                                                            humour and the like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                        <p>over the years, sometimes by accident, sometimes on purpose
                                                            (injected humour and the like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab4">
                                                        <p>page editors now use Lorem Ipsum as their default model text,
                                                            and a search for 'lorem ipsum' will uncover many web sites
                                                            still in their infancy. Various versions have evolved over
                                                            the years, sometimes
                                                            by accident, sometimes on purpose (injected humour and the
                                                            like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tabs with badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="panel panel-primary">
                                            <div class="tab-menu-heading tab-menu-heading-boxed">
                                                <div class="tabs-menu-boxed">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs d-flex flex-wrap">
                                                        <li><a href="#tab25" class="d-flex align-items-center active"
                                                                data-bs-toggle="tab"><span
                                                                    class="badge bg-primary-transparent rounded-circle fs-10 me-2">2</span>Tab
                                                                1</a></li>
                                                        <li><a href="#tab26" class="d-flex align-items-center"
                                                                data-bs-toggle="tab"><span
                                                                    class="badge bg-secondary-transparent rounded-circle fs-10 me-2">2</span>Tab
                                                                2</a></li>
                                                        <li><a href="#tab27" class="d-flex align-items-center"
                                                                data-bs-toggle="tab"><span
                                                                    class="badge bg-secondary-transparent rounded-circle fs-10 me-2">3</span>Tab 3</a></li>
                                                        <li><a href="#tab28" class="d-flex align-items-center"
                                                                data-bs-toggle="tab"><span
                                                                    class="badge bg-success-transparent rounded-circle fs-10 me-2">2</span>Tab
                                                                4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab25">
                                                        <p>page editors now use Lorem Ipsum as their default model text,
                                                            and a search for 'lorem ipsum' will uncover many web sites
                                                            still in their infancy. Various versions have evolved over
                                                            the years, sometimes
                                                            by accident, sometimes on purpose (injected humour and the
                                                            like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab26">
                                                        <p> default model text, and a search for 'lorem ipsum' will
                                                            uncover many web sites still in their infancy. Various
                                                            versions have evolved over the years, sometimes by accident,
                                                            sometimes on purpose (injected
                                                            humour and the like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab27">
                                                        <p>over the years, sometimes by accident, sometimes on purpose
                                                            (injected humour and the like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab28">
                                                        <p>page editors now use Lorem Ipsum as their default model text,
                                                            and a search for 'lorem ipsum' will uncover many web sites
                                                            still in their infancy. Various versions have evolved over
                                                            the years, sometimes
                                                            by accident, sometimes on purpose (injected humour and the
                                                            like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tabs Style</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="panel panel-primary">
                                            <div class=" tab-menu-heading">
                                                <div class="tabs-menu1">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs">
                                                        <li><a href="#tab5" class="d-flex align-items-center active"
                                                                data-bs-toggle="tab"><span
                                                                    class="avatar avatar-sm rounded-circle cover-image me-2"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/5.jpg')}}"
                                                                >
                                                                </span>Tab 1</a></li>
                                                        <li><a href="#tab6" class="d-flex align-items-center"
                                                                data-bs-toggle="tab"><span
                                                                    class="avatar avatar-sm rounded-circle cover-image me-2"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/6.jpg')}}"
                                                                >
                                                                </span>Tab 2</a></li>
                                                        <li><a href="#tab7" class="d-flex align-items-center"
                                                                data-bs-toggle="tab"><span
                                                                    class="avatar avatar-sm rounded-circle cover-image me-2"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/7.jpg')}}"
                                                                >
                                                                </span>Tab 3</a></li>
                                                        <li><a href="#tab8" class="d-flex align-items-center"
                                                                data-bs-toggle="tab"><span
                                                                    class="avatar avatar-sm rounded-circle cover-image me-2"
                                                                    data-bs-image-src="{{asset('build/assets/images/users/8.jpg')}}">
                                                                </span>Tab 4</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body tabs-menu-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab5">
                                                        <p>page editors now use Lorem Ipsum as their default model text,
                                                            and a search for 'lorem ipsum' will uncover many web sites
                                                            still in their infancy. Various versions have evolved over
                                                            the years, sometimes
                                                            by accident, sometimes on purpose (injected humour and the
                                                            like)</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                        <p>'lorem ipsum' will uncover many web sites still in their
                                                            infancy. Various versions have evolved over the years,
                                                            sometimes
                                                            by accident, sometimes on purpose</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab6">
                                                        <p> default model text, and a search for 'lorem ipsum' will
                                                            uncover many web sites still in their infancy. Various
                                                            versions have evolved over the years, sometimes by accident,
                                                            sometimes on purpose (injected
                                                            humour and the like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                        <p>'lorem ipsum' will uncover many web sites still in their
                                                            infancy. Various versions have evolved over the years,
                                                            sometimes
                                                            by accident, sometimes on purpose</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab7">
                                                        <p>over the years, sometimes by accident, sometimes on purpose
                                                            (injected humour and the like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                        <p>'lorem ipsum' will uncover many web sites still in their
                                                            infancy. Various versions have evolved over the years,
                                                            sometimes
                                                            by accident, sometimes on purposelorem ipsum' will uncover
                                                            many web sites still in their infancy. Various versions have
                                                            evolved over the years, sometimes
                                                            by accident, sometimes on purpose</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab8">
                                                        <p>page editors now use Lorem Ipsum as their default model text,
                                                            and a search for 'lorem ipsum' will uncover many web sites
                                                            still in their infancy. Various versions have evolved over
                                                            the years, sometimes
                                                            by accident, sometimes on purpose (injected humour and the
                                                            like</p>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                        <p>'lorem ipsum' will uncover many web sites still in their
                                                            infancy. Various versions have evolved over the years,
                                                            sometimes
                                                            by accident, sometimes on purpose</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pill Tabs style</h3>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                                    role="tab" aria-controls="pills-home"
                                                    aria-selected="true">Home</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-profile" type="button" role="tab"
                                                    aria-controls="pills-profile" aria-selected="false">Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-contact" type="button" role="tab"
                                                    aria-controls="pills-contact" aria-selected="false">Contact</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-disabled" type="button" role="tab"
                                                    aria-controls="pills-disabled" aria-selected="false"
                                                    disabled>Disabled</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab" tabindex="0">
                                                <ul class="list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value=""
                                                                    >
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-info rounded-pill">14</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value=""
                                                                checked="">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-danger rounded-pill">14</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value="">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-success rounded-pill">14</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab" tabindex="0">
                                                <ul class="list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value="" checked="">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-info rounded-pill">14</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value="">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-danger rounded-pill">14</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value=""
                                                                    >
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-success rounded-pill">14</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                aria-labelledby="pills-contact-tab" tabindex="0">
                                                <ul class="list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value="">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-info rounded-pill">14</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value="">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-danger rounded-pill">14</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value=""
                                                                    checked="">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-success rounded-pill">14</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-disabled" role="tabpanel"
                                                aria-labelledby="pills-disabled-tab" tabindex="0">
                                                <ul class="list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value=""
                                                                    id="checkbox1">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-info rounded-pill">14</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value=""
                                                                    checked="">
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-danger rounded-pill">14</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="me-auto d-flex align-items-center">
                                                            <div>
                                                                <input class="form-check-input me-2 mt-0"
                                                                    name="checkbox1" type="checkbox" value=""
                                                                    >
                                                                <label class="form-check-label" for="checkbox1"></label>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bold">Heading</div>
                                                                <p class="mb-0 text-muted">Donec id elit non mi porta
                                                                    gravida at eget metus. Maecenas sed diam eget risus
                                                                    varius blandit.</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-success rounded-pill">14</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-2 CLOSED -->

                        <!-- ROW-3 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div>
                                            <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" class="" alt="logo">
                                        </div>
                                        <ul class="nav nav-pills" id="header-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="header-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#header-home" type="button"
                                                    role="tab" aria-controls="header-home"
                                                    aria-selected="true">Home</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="header-profile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#header-profile" type="button" role="tab"
                                                    aria-controls="header-profile" aria-selected="false">Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="header-contact-tab" data-bs-toggle="pill"
                                                    data-bs-target="#header-contact" type="button" role="tab"
                                                    aria-controls="header-contact" aria-selected="false">Contact</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="header-disabled-tab" data-bs-toggle="pill"
                                                    data-bs-target="#header-disabled" type="button" role="tab"
                                                    aria-controls="header-disabled" aria-selected="false"
                                                    disabled>Disabled</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="header-tabContent">
                                            <div class="tab-pane fade show active" id="header-home" role="tabpanel"
                                                aria-labelledby="header-home-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="header-profile" role="tabpanel"
                                                aria-labelledby="header-profile-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="header-contact" role="tabpanel"
                                                aria-labelledby="header-contact-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="header-disabled" role="tabpanel"
                                                aria-labelledby="header-disabled-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Tabs with Icons</div>
                                        <ul class="nav nav-pills" id="icon-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="icon-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#icon-home" type="button"
                                                    role="tab" aria-controls="icon-home"
                                                    aria-selected="true"><i class="fe fe-home"></i></button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="icon-profile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#icon-profile" type="button" role="tab"
                                                    aria-controls="icon-profile" aria-selected="false"><i class="fe fe-settings"></i></button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="icon-contact-tab" data-bs-toggle="pill"
                                                    data-bs-target="#icon-contact" type="button" role="tab"
                                                    aria-controls="icon-contact" aria-selected="false"><i class="fe fe-airplay"></i></button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="icon-disabled-tab" data-bs-toggle="pill"
                                                    data-bs-target="#icon-disabled" type="button" role="tab"
                                                    aria-controls="icon-disabled" aria-selected="false"
                                                    disabled><i class="fe fe-wifi-off"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="icon-tabContent">
                                            <div class="tab-pane fade show active" id="icon-home" role="tabpanel"
                                                aria-labelledby="icon-home-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="icon-profile" role="tabpanel"
                                                aria-labelledby="icon-profile-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="icon-contact" role="tabpanel"
                                                aria-labelledby="icon-contact-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="icon-disabled" role="tabpanel"
                                                aria-labelledby="icon-disabled-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-3 CLOSED -->

                        <!-- ROW-4 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="footer-tabContent">
                                            <div class="tab-pane fade show active" id="footer-home" role="tabpanel"
                                                aria-labelledby="footer-home-tab" tabindex="0">
                                                <h5 class="fw-bold">Home</h5>
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="footer-profile" role="tabpanel"
                                                aria-labelledby="footer-profile-tab" tabindex="0">
                                                <h5 class="fw-bold">Profile</h5>
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="footer-contact" role="tabpanel"
                                                aria-labelledby="footer-contact-tab" tabindex="0">
                                                <h5 class="fw-bold">Contact</h5>
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="footer-disabled" role="tabpanel"
                                                aria-labelledby="footer-disabled-tab" tabindex="0">
                                                <h5 class="fw-bold">Disabled</h5>
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer justify-content-between d-flex">
                                        <div>
                                            <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" class="" alt="logo">
                                        </div>
                                        <ul class="nav nav-pills" id="footer-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="footer-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#footer-home" type="button"
                                                    role="tab" aria-controls="footer-home"
                                                    aria-selected="true">Home</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="footer-profile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#footer-profile" type="button" role="tab"
                                                    aria-controls="footer-profile" aria-selected="false">Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="footer-contact-tab" data-bs-toggle="pill"
                                                    data-bs-target="#footer-contact" type="button" role="tab"
                                                    aria-controls="footer-contact" aria-selected="false">Contact</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="footer-disabled-tab" data-bs-toggle="pill"
                                                    data-bs-target="#footer-disabled" type="button" role="tab"
                                                    aria-controls="footer-disabled" aria-selected="false"
                                                    disabled>Disabled</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Colored Tabs</div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-pills mb-3 bg-primary-transparent br-5 p-2" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="colored-home-tab" data-bs-toggle="pill" data-bs-target="#colored-home" type="button" role="tab" aria-controls="colored-home" aria-selected="true">Home</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="colored-profile-tab" data-bs-toggle="pill" data-bs-target="#colored-profile" type="button" role="tab" aria-controls="colored-profile" aria-selected="false" tabindex="-1">Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="colored-contact-tab" data-bs-toggle="pill" data-bs-target="#colored-contact" type="button" role="tab" aria-controls="colored-contact" aria-selected="false" tabindex="-1">Contact</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="colored-disabled-tab" data-bs-toggle="pill" data-bs-target="#colored-disabled" type="button" role="tab" aria-controls="colored-disabled" aria-selected="false" disabled="" tabindex="-1">Disabled</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="colored-home" role="tabpanel"
                                                aria-labelledby="colored-home-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="colored-profile" role="tabpanel"
                                                aria-labelledby="colored-profile-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="colored-contact" role="tabpanel"
                                                aria-labelledby="colored-contact-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="colored-disabled" role="tabpanel"
                                                aria-labelledby="colored-disabled-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-4 CLOSED -->

                        <!-- ROW-5 OPEN -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">Rounded Colored Tabs</div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-pills mb-3 bg-primary-transparent rounded-pill p-3 px-5" id="colored-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link rounded-pill active" id="rounded-colored-home-tab" data-bs-toggle="pill" data-bs-target="#rounded-colored-home" type="button" role="tab" aria-controls="rounded-colored-home" aria-selected="true"><i class="fe fe-home me-2 d-inline-flex"></i>Home</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link rounded-pill" id="rounded-colored-profile-tab" data-bs-toggle="pill" data-bs-target="#rounded-colored-profile" type="button" role="tab" aria-controls="rounded-colored-profile" aria-selected="false" tabindex="-1"><i class="fe fe-user me-2 d-inline-flex"></i>Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link rounded-pill" id="rounded-colored-contact-tab" data-bs-toggle="pill" data-bs-target="#rounded-colored-contact" type="button" role="tab" aria-controls="rounded-colored-contact" aria-selected="false" tabindex="-1"><i class="fe fe-settings me-2 d-inline-flex"></i>Settings</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link rounded-pill" id="rounded-colored-disabled-tab" data-bs-toggle="pill" data-bs-target="#rounded-colored-disabled" type="button" role="tab" aria-controls="rounded-colored-disabled" aria-selected="false" disabled="" tabindex="-1"><i class="fe fe-bell-off me-2 d-inline-flex"></i>Disabled</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="colored-tabContent">
                                            <div class="tab-pane fade show active" id="rounded-colored-home" role="tabpanel"
                                                aria-labelledby="rounded-colored-home-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="rounded-colored-profile" role="tabpanel"
                                                aria-labelledby="rounded-colored-profile-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="rounded-colored-contact" role="tabpanel"
                                                aria-labelledby="rounded-colored-contact-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                            <div class="tab-pane fade" id="rounded-colored-disabled" role="tabpanel"
                                                aria-labelledby="rounded-colored-disabled-tab" tabindex="0">
                                                <p>page editors now use Lorem Ipsum as their default model text,
                                                    and a search for 'lorem ipsum' will uncover many web sites
                                                    still in their infancy. Various versions have evolved over
                                                    the years, sometimes
                                                    by accident, sometimes on purpose (injected humour and the
                                                    like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                    aliquyam erat, sed diam voluptua. At vero eos et</p>
                                                <p>'lorem ipsum' will uncover many web sites still in their
                                                    infancy. Various versions have evolved over the years,
                                                    sometimes
                                                    by accident, sometimes on purpose</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Vertical Tab Style</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="nav flex-column nav-pills nav-pills-custom me-3 mb-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fe fe-home d-block mb-1"></i> Home</button>
                                                <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fe fe-user d-block mb-1"></i>Profile</button>
                                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fe fe-message-square d-block mb-1"></i>Messages</button>
                                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fe fe-settings d-block mb-1"></i>Settings</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                                    <ul class="">
                                                        <li class="media media-lg mt-0 border-bottom-0">
                                                            <img class="avatar avatar-xl bradius me-3 mb-3 w-100p h-10" src="{{asset('build/assets/images/media/29.jpg')}}" alt="Generic placeholder image">
                                                            <div class="media-body">
                                                                <h4 class="mt-0 mb-1">Media heading 01</h4>
                                                                <p class="text-muted mb-0 fs-14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                                                                <ul class="list-inline mb-0 pt-3 fs-14">
                                                                    <li class="list-inline-item"><a href="javascript:void(0);">Reply</a></li>
                                                                    <li class="list-inline-item"><a href="javascript:void(0);">Edit</a></li>
                                                                    <li class="list-inline-item"><a href="javascript:void(0);">Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                                    <ul class="list-group list-scroll h-260">
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/1.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Morbi leo risus</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i> Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-pill bg-info">D</span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Dapibus ac facilisis in</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/3.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Morbi leo risus</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Porta ac consectetur ac</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-pill bg-danger-transparent">V</span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Vestibulum at eros</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/1.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Cras justo odio</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-pill bg-info">D</span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Dapibus ac facilisis in</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/3.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Morbi leo risus</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Porta ac consectetur ac</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-pill bg-danger-transparent">V</span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Vestibulum at eros</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                                                    <ul class="list-group list-scroll h-260">
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/1.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Morbi leo risus</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i> Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-pill bg-info">D</span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Dapibus ac facilisis in</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/3.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Morbi leo risus</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Porta ac consectetur ac</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-pill bg-danger-transparent">V</span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Vestibulum at eros</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/1.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Cras justo odio</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-pill bg-info">D</span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Dapibus ac facilisis in</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/3.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Morbi leo risus</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-circle">
                                                                    <img src="{{asset('build/assets/images/users/4.jpg')}}" class="rounded-circle" alt="img">
                                                                </span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Porta ac consectetur ac</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-danger"></i>Offline</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="avatar avatar-md rounded-pill bg-danger-transparent">V</span>
                                                                <div class="ms-3">
                                                                    <p class="mb-0 fs-14">Vestibulum at eros</p>
                                                                    <span class="clearfix"></span>
                                                                    <small class="text-muted fs-12">Classic marinara sauce, authentic</small>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="badge bg-light text-dark p-2"><i class="bi bi-circle-fill fs-8 me-1 text-success"></i>Online</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                                                    <p>page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
                                                    <p>page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-5 CLOSED -->

                        <!-- ROW-6 OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Vertical Tabs</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="nav flex-column nav-pills me-3 mb-2" id="vertical-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link text-start active" id="vertical-home-tab" data-bs-toggle="pill" data-bs-target="#vertical-home" type="button" role="tab" aria-controls="vertical-home" aria-selected="true"><i class="fe fe-home me-2 d-inline-flex"></i> Home</button>
                                                <button class="nav-link text-start" id="vertical-profile-tab" data-bs-toggle="pill" data-bs-target="#vertical-profile" type="button" role="tab" aria-controls="vertical-profile" aria-selected="false"><i class="fe fe-user me-2 d-inline-flex"></i> Profile</button>
                                                <button class="nav-link text-start" id="vertical-disabled-tab" data-bs-toggle="pill" data-bs-target="#vertical-disabled" type="button" role="tab" aria-controls="vertical-disabled" aria-selected="false" disabled><i class="fe fe-bell-off me-2 d-inline-flex"></i> Disabled</button>
                                                <button class="nav-link text-start" id="vertical-messages-tab" data-bs-toggle="pill" data-bs-target="#vertical-messages" type="button" role="tab" aria-controls="vertical-messages" aria-selected="false"><i class="fe fe-message-square me-2 d-inline-flex"></i> Messages</button>
                                                <button class="nav-link text-start" id="vertical-settings-tab" data-bs-toggle="pill" data-bs-target="#vertical-settings" type="button" role="tab" aria-controls="vertical-settings" aria-selected="false"><i class="fe fe-settings me-2 d-inline-flex"></i> Settings</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="tab-content" id="vertical-tabContent">
                                                    <div class="tab-pane fade show active" id="vertical-home" role="tabpanel" aria-labelledby="vertical-home-tab" tabindex="0">
                                                        <div class="media media-lg mt-0">
                                                            <img class=" avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/28.jpg')}}" alt="Generic placeholder image">
                                                            <div class="media-body">
                                                                <h4 class="mt-0 fw-bold">The point of using Lorem Ipsum</h4>
                                                                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                            </div>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="vertical-profile" role="tabpanel" aria-labelledby="vertical-profile-tab" tabindex="0">
                                                        <div class="media media-lg mt-0">
                                                            <img class=" avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/3.jpg')}}" alt="Generic placeholder image">
                                                            <div class="media-body">
                                                                <h4 class="mt-0 fw-bold">The point of using Lorem Ipsum</h4>
                                                                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                            </div>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="vertical-disabled" role="tabpanel" aria-labelledby="vertical-disabled-tab" tabindex="0">
                                                        <div class="media media-lg mt-0">
                                                            <img class=" avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/4.jpg')}}" alt="Generic placeholder image">
                                                            <div class="media-body">
                                                                <h4 class="mt-0 fw-bold">The point of using Lorem Ipsum</h4>
                                                                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                            </div>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="vertical-messages" role="tabpanel" aria-labelledby="vertical-messages-tab" tabindex="0">
                                                        <div class="media media-lg mt-0">
                                                            <img class=" avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/5.jpg')}}" alt="Generic placeholder image">
                                                            <div class="media-body">
                                                                <h4 class="mt-0 fw-bold">The point of using Lorem Ipsum</h4>
                                                                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                            </div>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,</p>
                                                    </div>
                                                    <div class="tab-pane fade" id="vertical-settings" role="tabpanel" aria-labelledby="vertical-settings-tab" tabindex="0">
                                                        <div class="media media-lg mt-0">
                                                            <img class=" avatar avatar-xl bradius me-3 mb-4 w-100p h-10" src="{{asset('build/assets/images/media/6.jpg')}}" alt="Generic placeholder image">
                                                            <div class="media-body">
                                                                <h4 class="mt-0 fw-bold">The point of using Lorem Ipsum</h4>
                                                                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                            </div>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-6 CLOSED -->

                        <!-- ROW-7 OPEN -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Data-tabs Style
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-area">
                                            <ul class="nav nav-tabs justify-content-center tab-style-3 gap-3" id="myTab2"
                                                role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active home d-flex align-items-center" id="home-tab" data-bs-toggle="tab"
                                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                                        aria-controls="home-tab-pane" aria-selected="true">
                                                        <span>Shopping Cart</span></button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link about d-flex" id="profile-tab" data-bs-toggle="tab"
                                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                                        aria-controls="profile-tab-pane" aria-selected="false">
                                                        <span>Delivery Address</span></button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link services d-flex" id="contact-tab" data-bs-toggle="tab"
                                                        data-bs-target="#contact-tab-pane" type="button" role="tab"
                                                        aria-controls="contact-tab-pane" aria-selected="false">
                                                        <span>Payment Method</span></button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link order d-flex" id="order-tab" data-bs-toggle="tab"
                                                        data-bs-target="#order-tab-pane" type="button" role="tab"
                                                        aria-controls="order-tab-pane" aria-selected="false">
                                                        <span>Confirmation</span></button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active fs-13 text-muted" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                    <div class="row">
                                                        <div class="col-xxl-5 col-xl-12">
                                                            <div class="card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="d-sm-flex d-block align-items-start mb-4 p-3 border br-5">
                                                                        <div class="me-3 mb-sm-0 mb-2">
                                                                            <span class="avatar avatar-xxl br-5">
                                                                                <img src="{{asset('build/assets/images/products/3.jpg')}}" class="br-5" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="w-100">
                                                                            <p class="fw-semibold fs-15  mb-2">Wireless Earphones with mic, Enhanced bass with 9.2mm Dynamic Drivers.</p>
                                                                            <p class="mb-0">Brand:<span class="fw-semibold ms-2">Gooba</span></p>
                                                                            <p class="text-muted fs-14">Color:<span class="fw-semibold ms-2">Foggy White</span></p>
                                                                            <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap">
                                                                                <div class="mb-sm-0 mb-2">
                                                                                    <span class="fs-16 fw-bold ">$124.99</span>
                                                                                    <!-- <span class="badge bg-secondary-transparent ms-2"><i class="ri-truck-line me-1"></i>Free Shipping</span> -->
                                                                                </div>
                                                                                <div class="handle-counter">
                                                                                    <button type="button" class="counter-minus btn btn-white lh-2 shadow-none product-quantity-minus" >
                                                                                        <i class="fe fe-minus text-muted"></i>
                                                                                    </button>
                                                                                    <input type="text" value="2" class="qty">
                                                                                    <button type="button" class="counter-plus btn btn-white lh-2 shadow-none rounded-0 product-quantity-plus">
                                                                                        <i class="fe fe-plus text-muted"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="btn btn-outline-danger">
                                                                                        <i class="ti ti-trash me-1 d-inline-flex"></i>Remove
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-sm-flex d-block align-items-start mb-4 p-3 border br-5">
                                                                        <div class="me-3 mb-sm-0 mb-2">
                                                                            <span class="avatar avatar-xxl br-5">
                                                                                <img src="{{asset('build/assets/images/products/4.jpg')}}" class="br-5" alt="">
                                                                            </span>
                                                                        </div>
                                                                        <div class="w-100">
                                                                            <p class="fw-semibold fs-15  mb-2">Fashion Women's Corduroy Buttoned Down Pocket Shirts.</p>
                                                                            <p class="mb-0">Brand:<span class=" fw-semibold ms-2">Chokka</span></p>
                                                                            <p class="text-muted fs-14 mb-3">Color:<span class=" fw-semibold ms-2">Pink,Grey,Orange</span></p>
                                                                            <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap">
                                                                                <div class="mb-sm-0 mb-2">
                                                                                    <span class="fs-16 fw-bold ">$324.99</span>
                                                                                </div>
                                                                                <div class="handle-counter">
                                                                                    <button type="button" class="counter-minus btn btn-white lh-2 shadow-none product-quantity-minus" >
                                                                                        <i class="fe fe-minus text-muted"></i>
                                                                                    </button>
                                                                                    <input type="text" value="2" class="qty">
                                                                                    <button type="button" class="counter-plus btn btn-white lh-2 shadow-none rounded-0 product-quantity-plus">
                                                                                        <i class="fe fe-plus text-muted"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <button class="btn btn-outline-danger">
                                                                                    <i class="ti ti-trash me-1 d-inline-flex"></i>Remove
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-xl-6">
                                                            <div class="card shadow-none border">
                                                                <div class="card-body">
                                                                    <div class="p-3 fs-14 br-5">
                                                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                                                            <p class="">Items Total Price</p>
                                                                            <p class="">$446.98</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                                                            <p class="">Value Added Tax(Vat)</p>
                                                                            <p class="text-danger">$24.49</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                                                            <p class="">Additional Discount</p>
                                                                            <p class="text-success">-$34.49</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                                                            <p class="">Coupon Discount</p>
                                                                            <p class="">-$4.49</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                                                            <p class="">Shipping Charges</p>
                                                                            <p class="text-success">$59.79</p>
                                                                        </div>
                                                                        <div class="d-flex align-items-center justify-content-between  text-primary fs-17 fw-600">
                                                                            <p class="">Total Price <small class="text-muted">(Vat Included)</small></p>
                                                                            <p class="">$531.26</p>
                                                                        </div>
                                                                        <div class="bg-warning-transparent p-3 rounded-3">
                                                                            <a href="#" class="text-warning d-flex justify-content-between flex-wrap">
                                                                                <span><i class="bi bi-gift me-2"></i>Apply Discount Code</span>
                                                                                <span><i class="bi bi-arrow-right"></i></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <p class="mb-0">2 items in the cart</p>
                                                                        <button class="btn btn-primary">Proceed</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-xxl-3 col-xl-6">
                                                            <div class="card shadow-none border">
                                                                <div class="card-body counter-content">
                                                                    <div class="text-center mb-4">
                                                                        <img src="{{asset('build/assets/images/png/1.png')}}" alt="img" width="280" class="img-fluid">
                                                                    </div>
                                                                    <div class="bg-primary-gradient tx-fixed-white p-4 br-5">
                                                                        <span class="badge bg-secondary fs-10 me-2">Hurry Up!</span>
                                                                        <span>Only we have two days</span>
                                                                        <div class="mt-1">
                                                                            <span class="tx-fixed-white fs-20 pe-2"><i class="bi bi-calendar-day"></i></span>
                                                                            <span class="h6 tx-fixed-white">02 Days 23 Hrs 59 Mins 43 Secs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade fs-13 text-muted" id="profile-tab-pane"
                                                    role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                                    <h6 class="mb-4 fw-semibold">Select Delivery Address</h6>
                                                    <div class="mb-4">
                                                        <button class="btn btn-primary-light d-flex align-items-center justify-content-center fs-14 fw-semibold"><i class="ti ti-circle-plus fs-20 me-1"></i>Add New Address</button>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-md-3 col-sm-12">
                                                                    <div class="p-3 mb-3 br-5 border">
                                                                        <p class="fs-14 fw-bold fs-15 mb-1">
                                                                            <i class="ti ti-home-2 fs-18 me-1 d-inline-flex"></i>Home
                                                                        </p>
                                                                        <p class="mb-1 fw-semibold fs-13 mb-3">Alex Klitchsko- +91-2132-1234</p>
                                                                        <p class="mb-0 text-muted">
                                                                            444 Rowe Crossroad, Kohlerborough, Massach, 92389-3067,764.251.8770,1-579-220-2849
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-12">
                                                                    <div class="p-3 mb-3 br-5 border border-primary bg-light">
                                                                        <p class="fs-14 fw-bold fs-15 mb-1 text-primary">
                                                                            <i class="ti ti-home-2 fs-18 me-1 d-inline-flex"></i>Hostel
                                                                        </p>
                                                                        <p class="mb-1 fw-semibold fs-13 mb-3">Alex Klitchsko- +91-2132-1234</p>
                                                                        <p class="mb-0 text-muted">
                                                                            444 Rowe Crossroad, Kohlerborough, Massach, 92389-3067,764.251.8770,1-579-220-2849
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-12">
                                                                    <div class="p-3 mb-3 br-5 border">
                                                                        <p class="fs-14 fw-bold fs-15 mb-1">
                                                                            <i class="ti ti-home-2 fs-18 me-1 d-inline-flex"></i>Office
                                                                        </p>
                                                                        <p class="mb-1 fw-semibold fs-13 mb-3">Alex Klitchsko- +91-2132-1234</p>
                                                                        <p class="mb-0 text-muted">
                                                                            444 Rowe Crossroad, Kohlerborough, Massach, 92389-3067,764.251.8770,1-579-220-2849
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-12">
                                                                    <div class="p-3 mb-3 br-5 border">
                                                                        <p class="fs-14 fw-bold fs-15 mb-1">
                                                                            <i class="ti ti-building-skyscraper fs-18 me-1 d-inline-flex"></i>Work
                                                                        </p>
                                                                        <p class="mb-1 fw-semibold fs-13 mb-3">Alex Klitchsko- +91-2132-1234</p>
                                                                        <p class="mb-0 text-muted">
                                                                            6937 Smith Harbor, Southaven, Louisiana, 57814-0428,933.222.5711,1-608-479-3758
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12 mt-4">
                                                                    <div class="bg-light p-2">
                                                                        <p class="text-muted fw-semibold fs-13 mb-0 d-flex align-items-center">
                                                                            <i class="ri-information-line fs-22 me-1"></i>If you choose another city delivery charges may differ.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end mt-4">
                                                            <button class="btn btn-sm btn-primary me-2 d-flex align-items-center">Back To Cart</button>
                                                            <button class="btn btn-sm btn-secondary d-flex align-items-center">Proceed To Payment</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade fs-13 text-muted payment-method" id="contact-tab-pane"
                                                    role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                                    <h6 class="mb-4 text-dark fw-semibold">Select Payment Method</h6>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <ul class="list-group">
                                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                                    <div class="custom-control custom-radio">
                                                                        <input class="custom-control-input" name="list-radio" id="customRadio1" type="radio">
                                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio1">
                                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span><span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="form-check-label" for="customRadio1"><img src="{{asset('build/assets/images/payments/bitcoin-dark.svg')}}" alt="" class="br-5"></label>
                                                                </li>
                                                                <li class="list-group-item d-flex align-items-center justify-content-between bg-primaru-tran">
                                                                    <div class="custom-control custom-radio">
                                                                        <input class="custom-control-input" name="list-radio" id="customRadio2" type="radio" checked="">
                                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio2">
                                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span><span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="form-check-label" for="customRadio2"><img src="{{asset('build/assets/images/payments/amazon-dark.svg')}}" alt="" class="br-5"></label>
                                                                </li>
                                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                                    <div class="custom-control custom-radio">
                                                                        <input class="custom-control-input" name="list-radio" id="customRadio3" type="radio">
                                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio3">
                                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span><span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="form-check-label" for="customRadio3"><img src="{{asset('build/assets/images/payments/discover-dark.svg')}}" alt="" class="br-5"></label>
                                                                </li>
                                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                                    <div class="custom-control custom-radio">
                                                                        <input class="custom-control-input" name="list-radio" id="customRadio4" type="radio">
                                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio4">
                                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span><span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="form-check-label" for="customRadio4"><img src="{{asset('build/assets/images/payments/sepa-dark.svg')}}" alt="" class="br-5"></label>
                                                                </li>
                                                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                                                    <div class="custom-control custom-radio">
                                                                        <input class="custom-control-input" name="list-radio" id="customRadio5" type="radio">
                                                                        <label class="cursor-pointer d-block custom-control-label" for="customRadio5">
                                                                            <span class="mb-0 d-block">Dapibus ac facilisis in</span><span class="fs-12 text-muted">Classic marinara sauce, authentic old-world pepperoni</span>
                                                                        </label>
                                                                    </div>
                                                                    <label class="form-check-label" for="customRadio5"><img src="{{asset('build/assets/images/payments/paymill-dark.svg')}}" alt="" class="br-5"></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="bg-danger-transparent-2 text-danger br-3 mb-4" role="alert">Please Enter Valid Details</div>
                                                            <div class="form-group">
                                                                <label class="form-label">Card Holder Name</label>
                                                                <input type="text" class="form-control" placeholder="First Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Card number</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Search for...">
                                                                    <span class="input-group-text input-text-color">
                                                                            <i class="fa fa-cc-visa text-muted"></i> &nbsp; <i class="fa fa-cc-amex text-muted"></i> &nbsp;
                                                                            <i class="fa fa-cc-mastercard text-muted"></i>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Expiration</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control" placeholder="MM" name="Month">
                                                                            <input type="number" class="form-control" placeholder="YY" name="Year">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                                                        <input type="number" class="form-control" required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn  btn-lg btn-primary">Confirm</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade fs-13 text-muted" id="order-tab-pane"
                                                    role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                                    <div class="row justify-content-center mt-5">
                                                        <div class="col-lg-4">
                                                            <div class="card shadow-none border">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-7 CLOSED-->

                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Internal Cart JS -->
        @vite('resources/assets/js/cart.js')

@endsection
