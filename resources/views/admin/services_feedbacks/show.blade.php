@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.services-feedbacks.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('abrigosoftware.services-feedbacks.fields.service')</th>
                            <td field-key='service'>{{ $services_feedback->service->id or '' }}</td>
                        </tr>
						 <tr>
                            <th>@lang('abrigosoftware.clients.fields.name') Cliente</th>
                            <td field-key='service'>{{ $client->name}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services-feedbacks.fields.text')</th>
                            <td field-key='text'>{!! $services_feedback->text !!}</td>
                        </tr>
                        <tr>
                            <th>Estrelas</th>
                            <td field-key='evaluate'>{!! $services_feedback->evaluate !!}</td>
                        </tr>
						 <tr>
                            <th>Nome Profissional</th>
                            <td field-key='service'>{{ $professional->name}}</td>
                        </tr>
						 <tr>
                            <th>DATA</th>
                            <td field-key='evaluate'>{!! $services_feedback->created_at !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.services_feedbacks.index') }}" class="btn btn-default">@lang('abrigosoftware.as_back_to_list')</a>
        </div>
    </div>
@stop


