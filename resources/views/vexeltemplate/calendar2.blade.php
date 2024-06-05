
@extends('layouts.master')

@section('styles')

        <!-- Full Calendar CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/fullcalendar/main.min.css')}}">

@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Full Calendar</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin UI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Full Calendar</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Calender With different Color Events</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <div id="external-events">
                                                    <h4>Draggable Events</h4>
                                                    <div
                                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary">
                                                        <div class="fc-event-main">My Event 1</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary"
                                                        data-class="bg-secondary">
                                                        <div class="fc-event-main">My Event 2</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning"
                                                        data-class="bg-warning">
                                                        <div class="fc-event-main">My Event 3</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-success"
                                                        data-class=" bg-info">
                                                        <div class="fc-event-main">My Event 4</div>
                                                    </div>
                                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger"
                                                        data-class="bg-danger">
                                                        <div class="fc-event-main">My Event 5</div>
                                                    </div>
                                                </div>
                                                <div class="mt-5">
                                                    <h4 class="card-title mb-4">My Schedules</h4>
                                                    <div class="card overflow-hidden">
                                                        <div class="py-2">
                                                            <div class="list-group">
                                                                <div class="list-group-item d-flex pt-3 pb-3 border-0">
                                                                    <div class="me-3 me-xs-0">
                                                                        <div class="calendar-icon icons">
                                                                            <div class="date_time bg-primary-transparent">
                                                                                <span class="date">18</span> <span
                                                                                    class="month">FEB</span> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-1">
                                                                        <div class="h5 fs-14 mb-1">Board meeting
                                                                            Completed</div> <small
                                                                            class="text-muted">attend the company
                                                                            mangers...</small>
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item d-flex pt-3 pb-3 border-0">
                                                                    <div class="me-3 me-xs-0">
                                                                        <div class="calendar-icon icons">
                                                                            <div
                                                                                class="date_time bg-secondary-transparent ">
                                                                                <span class="date">16</span> <span
                                                                                    class="month">FEB</span> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-1">
                                                                        <div class="h5 fs-14 mb-1">Updated the Company
                                                                            Policy</div> <small class="text-muted">some
                                                                            changes &amp; add the terms &amp; conditions
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item d-flex pt-3 pb-3 border-0">
                                                                    <div class="me-3 me-xs-0">
                                                                        <div class="calendar-icon icons">
                                                                            <div
                                                                                class="date_time bg-success-transparent ">
                                                                                <span class="date">17</span> <span
                                                                                    class="month">FEB</span> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-1">
                                                                        <div class="h5 fs-14 mb-1">Office Timings
                                                                            Changed</div> <small class="text-muted">
                                                                            this effetct after March 01st 9:00 Am To
                                                                            5:00 Pm</small>
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item d-flex pt-3 pb-3 border-0">
                                                                    <div class="me-3 me-xs-0">
                                                                        <div class="calendar-icon icons">
                                                                            <div class="date_time bg-info-transparent ">
                                                                                <span class="date">26</span> <span
                                                                                    class="month">JAN</span> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-1">
                                                                        <div class="h5 fs-15 mb-1"> Republic Day
                                                                            Celebrated </div> <small
                                                                            class="text-muted">participate the all
                                                                            employess </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card border p-0 pt-3">
                                                        <div class="card-body pt-3">
                                                            <div class="dropdown pe-0 pt-0">
                                                                <a class="nav-link float-end text-muted"
                                                                    href="javascript:void(0);" data-bs-toggle="dropdown"
                                                                    role="button" aria-haspopup="true"
                                                                    aria-expanded="false"><i
                                                                        class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item"
                                                                        href="javascript:void(0);"><i
                                                                            class="fe fe-edit me-1 d-inline-flex"></i>
                                                                        Schedule Date</a>
                                                                    <a class="dropdown-item"
                                                                        href="javascript:void(0);"><i
                                                                            class="fe fe-trash-2 me-1 d-inline-flex"></i>
                                                                        Delete</a>
                                                                </div>
                                                            </div>
                                                            <h5 class="card-title">New Project</h5>
                                                            <h6 class="card-subtitle mb-3 text-muted">14-10-2021</h6>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-primary btn-sm me-3 mb-2">Urgent</a>
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-danger btn-sm mb-2">Online Meeting</a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="media media-xs overflow-visible">
                                                                <img class="avatar brround avatar-md me-3"
                                                                    src="{{asset('build/assets/images/users/16.jpg')}}"
                                                                    alt="avatar-img">
                                                                <div class="media-body valign-middle">
                                                                    <a href="{{url('profile')}}"
                                                                        class=" fw-semibold text-dark">Mozelle
                                                                        Belt</a><br>
                                                                    <a href="{{url('profile')}}" class="text-muted mb-0"> View
                                                                        client profile</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-9">
                                                <div id='calendar2'></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Moment JS -->
        <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

        <!-- Fullcalendar JS -->
        <script src="{{asset('build/assets/libs/fullcalendar/main.min.js')}}"></script>
        @vite('resources/assets/js/fullcalendar.js')

@endsection
