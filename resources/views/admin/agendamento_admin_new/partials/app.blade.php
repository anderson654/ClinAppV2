<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.agendamento_admin_new.partials.head')
    @yield('csshead')
</head>

<style>
    .btn {
        border-radius: 8px;
    }

    .btn:active {
        transform: scale(0.90);
    }

</style>


<body class="hold-transition skin-black-light sidebar-mini">

    <div id="wrapper">

        @include('partials.topbar')
        @include('partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                @if (isset($siteTitle))
                    <h3 class="page-title">
                        {{ $siteTitle }}
                    </h3>
                @endif

                <div class="row">
                    <div class="col-md-12">

                        @if (Session::has('message'))
                            <div class="alert alert-info">
                                <p>{{ Session::get('message') }}</p>
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        @if ($errors->count() > 0)
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @yield('content')

                    </div>
                </div>
            </section>
        </div>
    </div>

    {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
    <button type="submit">Logout</button>
    {!! Form::close() !!}

    @include('partials.javascripts')
</body>

</html>
