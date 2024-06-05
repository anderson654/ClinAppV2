@extends('layouts.app')

@section('content')

    <div class="row">

        @if (Session::has('admin-mensagem-sucesso'))
            <div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>
        @endif

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-olive">
                <div class="inner">
                    <h3>{{ $qtSubscriptionsToday }}</h3>

                    <p>Qtde de Assinaturas a renovar hoje</p>
                </div>
                <div class="icon">
                    <i class="fa fa-check-circle"></i>
                </div>
                <a href="{{ route('admin.subscriptions.renewSubscriptions') }}" class="small-box-footer">
                    <h2 style="display: flex; align-items:center; justify-content:center; gap: 12px;">Renovar Todas <i
                            class="fa fa-arrow-circle-right"></i></h2>
                </a>
            </div>
        </div><!-- ./col -->


        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-ch-red">
                <div class="inner">
                    <h3>{{ $qtSubscriptionsTomorrow }}</h3>

                    <p>Qtde de assinaturas a renovar amanhã</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default box-solid collapsed-box" id="box-widget">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                {!! Form::open(['method' => 'GET', 'id' => 'search-form']) !!}
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <p style="font-weight: bold;">Data de renovação</p>
                            <div class="col-md-4">
                                {!! Form::label('startDay', 'Dia de renovação: ', ['class' => 'control-label']) !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    {!! Form::text('startDay', old('startDay'), ['class' => 'form-control date-day', 'placeholder' => '']) !!}
                                </div>
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">

                            <div class="col-md-5">
                                <div class="input-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="active" id="active" value="1">
                                        <label class="form-check-label" for="active"> - Ativas</label>
                                    </div>
                                </div>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <div class="col-md-5">
                                <div class="input-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="canceleds" id="canceleds"
                                            value="1">
                                        <label class="form-check-label" for="canceleds"> - Canceladas</label>
                                    </div>
                                </div>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <div class="col-md-5">
                                <div class="input-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="pauseds" id="pauseds"
                                            value="1">
                                        <label class="form-check-label" for="pauseds"> - Pausadas</label>
                                    </div>
                                </div>
                                <p class="help-block"></p>
                            </div>
                        </div>

                        <div class="col-md-4 form-group">
                            <div class="col-md-5">
                                <div class="input-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="renewalFailed"
                                            id="renewalFailed" value="1">
                                        <label class="form-check-label" for="renewalFailed"> - Falha na renovação</label>
                                    </div>
                                </div>
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="box-footer">
                    {!! Form::submit('Pesquisar', ['class' => 'btn btn-primary pull-right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="panel panel-default">


            <div class="panel-body table-responsive">
                <table class="table table-bordered table-striped ajaxTable @can('subscription_delete') dt-select @endcan">
                    <thead>
                        <tr>
                            @can('subscription_delete')
                                <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                            @endcan
                            <th>ID</th>
                            <th>@lang('abrigosoftware.subscriptions.fields.service-type')</th>
                            <th>@lang('abrigosoftware.subscriptions.fields.service-category')</th>
                            <th>Valor de cada service</th>
                            <th>@lang('abrigosoftware.subscriptions.fields.status')</th>
                            <th>@lang('abrigosoftware.services.fields.client')</th>
                            <th>@lang('abrigosoftware.subscriptions.fields.products-included')</th>
                            <th>@lang('abrigosoftware.subscriptions.fields.startTime')</th>
                            <th>@lang('abrigosoftware.subscriptions.fields.startDay')</th>
                            <th>Qtde profissionais serviço</th>

                            <th>&nbsp;</th>

                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    @stop

    @section('javascript')
        <script>
            {{-- @can('subscription_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.subscriptions.mass_destroy') }}';
        @endcan --}}
            $(document).ready(function() {
                window.dtDefaultOptions.ajax =
                    '{!! route('admin.subscriptions.list_renew_subscriptions') !!}?startDay={{ request('startDay') }}&active={{ request('active') }}&canceleds={{ request('canceleds') }}&pauseds={{ request('pauseds') }}&renewalFailed={{ request('renewalFailed') }}';
                window.dtDefaultOptions.columns = [
                    @can('subscription_delete')
                        {
                            data: 'massDelete',
                            name: 'id',
                            searchable: false,
                            sortable: false
                        },
                    @endcan {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'service_type.title',
                        name: 'service_type.title'
                    },
                    {
                        data: 'service_category.title',
                        name: 'service_type.title'
                    },
                    {
                        data: 'value_service',
                        name: 'value_service'
                    },
                    {
                        data: 'status.title',
                        name: 'status.title'
                    },
                    {
                        data: 'user.name',
                        name: 'user.name'
                    },
                    {
                        data: 'products_included',
                        name: 'products_included'
                    },
                    {
                        data: 'startTime',
                        name: 'startTime'
                    },
                    {
                        data: 'startDay',
                        name: 'startDay'
                    },
                    {
                        data: 'qt_employees',
                        name: 'qt_employees'
                    },

                    {
                        data: 'actions',
                        name: 'actions',
                        searchable: false,
                        sortable: false
                    }
                ];
                processAjaxTables();
            });
        </script>
        <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
        <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
        <script>
            $(function() {
                moment.updateLocale('{{ App::getLocale() }}', {
                    week: {
                        dow: 1
                    } // Monday is the first day of the week
                });

                $('.date').datetimepicker({
                    format: "{{ config('app.date_format_moment') }}",
                    locale: "{{ App::getLocale() }}",
                });
                $('.date-day').datetimepicker({
                    format: "D",
                    locale: "{{ App::getLocale() }}",
                });
                $('.date-month').datetimepicker({
                    format: "M",
                    locale: "{{ App::getLocale() }}",
                });
                $('.date-year').datetimepicker({
                    format: "YYYY",
                    locale: "{{ App::getLocale() }}",
                });

            });
        </script>

    @stop
