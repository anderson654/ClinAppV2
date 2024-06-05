
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Accordion</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Accordion</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 OPEN -->
                        <div class="row ">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Default Accordion</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="panel-group" id="accordion" role="tablist"
                                            aria-multiselectable="true">
                                            <div class="panel panel-default active">
                                                <div class="panel-heading " role="tab" id="headingOne1">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-bs-toggle="collapse"
                                                            data-bs-parent="#accordion" href="#collapse1"
                                                            aria-expanded="true" aria-controls="collapse1">

                                                            Collapsible Group Item #1
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                        put a bird
                                                        on it squid single-origin coffee nulla assumenda shoreditch et.
                                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                        vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                        synth nesciunt you probably haven't heard of them accusamus
                                                        labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default mt-2">
                                                <div class="panel-heading" role="tab" id="headingTwo2">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                            data-bs-parent="#accordion" href="#collapse2"
                                                            aria-expanded="false" aria-controls="collapse2">

                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                        put a bird
                                                        on it squid single-origin coffee nulla assumenda shoreditch et.
                                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                        vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                        synth nesciunt you probably haven't heard of them accusamus
                                                        labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default mt-2">
                                                <div class="panel-heading" role="tab" id="heading3">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                            data-bs-parent="#accordion" href="#collapse3"
                                                            aria-expanded="false" aria-controls="collapse3">

                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="panel-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                        put a bird
                                                        on it squid single-origin coffee nulla assumenda shoreditch et.
                                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                        vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                        synth nesciunt you probably haven't heard of them accusamus
                                                        labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- PANEL-GROUP -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Always Open Accordion</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="accordion" id="accordionPanelsStayOpenExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseOne"
                                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                        Accordion Item #1
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseOne"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        shown by default, until the collapse plugin adds the appropriate
                                                        classes that we use to style each element. These classes control
                                                        the overall appearance, as well as the showing and hiding via
                                                        CSS transitions. You can modify any of this with custom CSS or
                                                        overriding our default variables. It's also worth noting that
                                                        just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseTwo"
                                                        aria-expanded="false"
                                                        aria-controls="panelsStayOpen-collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingTwo">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseThree"
                                                        aria-expanded="false"
                                                        aria-controls="panelsStayOpen-collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseThree"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingThree">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Closed Accordion</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="accordion accordion-secondary" id="accordionSecondaryExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSecondaryOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseSecondaryOne" aria-expanded="true"
                                                        aria-controls="collapseSecondaryOne">
                                                        Accordion Item #1
                                                    </button>
                                                </h2>
                                                <div id="collapseSecondaryOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingSecondaryOne"
                                                    data-bs-parent="#accordionSecondaryExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                                        default, until the collapse plugin adds the appropriate classes that we
                                                        use to style each element. These classes control the overall appearance,
                                                        as well as the showing and hiding via CSS transitions. You can modify
                                                        any of this with custom CSS or overriding our default variables. It's
                                                        also worth noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSecondaryTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSecondaryTwo"
                                                        aria-expanded="false" aria-controls="collapseSecondaryTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="collapseSecondaryTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSecondaryTwo"
                                                    data-bs-parent="#accordionSecondaryExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                                        default, until the collapse plugin adds the appropriate classes that we
                                                        use to style each element. These classes control the overall appearance,
                                                        as well as the showing and hiding via CSS transitions. You can modify
                                                        any of this with custom CSS or overriding our default variables. It's
                                                        also worth noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSecondaryThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSecondaryThree"
                                                        aria-expanded="false" aria-controls="collapseSecondaryThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="collapseSecondaryThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingSecondaryThree"
                                                    data-bs-parent="#accordionSecondaryExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                                        default, until the collapse plugin adds the appropriate classes that we
                                                        use to style each element. These classes control the overall appearance,
                                                        as well as the showing and hiding via CSS transitions. You can modify
                                                        any of this with custom CSS or overriding our default variables. It's
                                                        also worth noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-2 CLOSED OPEN -->

                        <!-- ROW-2 OPEN -->
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Accordion with Checkbox</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="accordion" role="tablist" id="accordionPanelscheckboxExample">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="panelscheckbox-headingOne">
                                                    <div class="accordion-button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelscheckbox-collapseOne"
                                                        aria-expanded="true" role="tab" aria-controls="panelscheckbox-collapseOne">
                                                        <input class="form-check-input me-2 mt-0" name="checkbox1"
                                                            type="checkbox" value="" id="checkbox1" checked>
                                                        <label class="form-check-label" for="checkbox1">
                                                            <span class="mb-0">Accordion Item #1</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="panelscheckbox-collapseOne"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="panelscheckbox-headingOne">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        shown by default, until the collapse plugin adds the appropriate
                                                        classes that we use to style each element. These classes control
                                                        the overall appearance, as well as the showing and hiding via
                                                        CSS transitions. You can modify any of this with custom CSS or
                                                        overriding our default variables. It's also worth noting that
                                                        just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="panelscheckbox-headingTwo">
                                                    <div class="accordion-button collapsed"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelscheckbox-collapseTwo"
                                                        aria-expanded="false" role="tab"
                                                        aria-controls="panelscheckbox-collapseTwo">
                                                        <input class="form-check-input me-2 mt-0" name="checkbox2"
                                                            type="checkbox" value="" id="checkbox2">
                                                        <label class="form-check-label" for="checkbox2">
                                                            <span class="mb-0">Accordion Item #2</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="panelscheckbox-collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="panelscheckbox-headingTwo">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="panelscheckbox-headingThree">
                                                    <div class="accordion-button collapsed"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelscheckbox-collapseThree"
                                                        aria-expanded="false" role="tab"
                                                        aria-controls="panelscheckbox-collapseThree">
                                                        <input class="form-check-input me-2 mt-0" name="checkbox3"
                                                            type="checkbox" value="" id="checkbox3">
                                                        <label class="form-check-label" for="checkbox3">
                                                            <span class="mb-0">Accordion Item #3</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="panelscheckbox-collapseThree"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="panelscheckbox-headingThree">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="panelscheckbox-headingFour">
                                                    <div class="accordion-button collapsed"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelscheckbox-collapseFour"
                                                        aria-expanded="false" role="tab"
                                                        aria-controls="panelscheckbox-collapseFour">
                                                        <input class="form-check-input me-2 mt-0" name="checkbox4"
                                                            type="checkbox" value="" id="checkbox4">
                                                        <label class="form-check-label" for="checkbox4">
                                                            <span class="mb-0">Accordion Item #4</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="panelscheckbox-collapseFour"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="panelscheckbox-headingFour">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-sm-12 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Accordion with Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="accordion" id="accordionPanelsiconExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsicon-headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsicon-collapseOne" aria-expanded="true"
                                                        aria-controls="panelsicon-collapseOne">
                                                        <i class="fe fe-grid me-1"></i>
                                                        Accordion Item #1
                                                    </button>
                                                </h2>
                                                <div id="panelsicon-collapseOne"
                                                    class="accordion-collapse collapse show"
                                                    aria-labelledby="panelsicon-headingOne">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        shown by default, until the collapse plugin adds the appropriate
                                                        classes that we use to style each element. These classes control
                                                        the overall appearance, as well as the showing and hiding via
                                                        CSS transitions. You can modify any of this with custom CSS or
                                                        overriding our default variables. It's also worth noting that
                                                        just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsicon-headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsicon-collapseTwo" aria-expanded="false"
                                                        aria-controls="panelsicon-collapseTwo">
                                                        <i class="fe fe-edit me-1"></i>
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="panelsicon-collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsicon-headingTwo">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsicon-headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsicon-collapseThree" aria-expanded="false"
                                                        aria-controls="panelsicon-collapseThree">
                                                        <i class="fe fe-headphones me-1"></i>
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="panelsicon-collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsicon-headingThree">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsicon-headingFour">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsicon-collapseFour" aria-expanded="false"
                                                        aria-controls="panelsicon-collapseFour">
                                                        <i class="fe fe-database me-1"></i>
                                                        Accordion Item #4
                                                    </button>
                                                </h2>
                                                <div id="panelsicon-collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsicon-headingFour">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-2 CLOSED OPEN -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
