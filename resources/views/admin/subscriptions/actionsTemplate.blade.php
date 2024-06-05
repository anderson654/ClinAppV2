@can($gateKey . 'view')
    <a href="{{ route($routeKey . '.show', $row->id) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
@endcan
@can($gateKey . 'edit')
    <a href="{{ route($routeKey . '.edit', $row->id) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
@endcan
@if($row->status_id == 4)
    @can($gateKey . 'aprove')
        {!! Form::open([
            'style' => 'display: inline-block;',
            'method' => 'POST',
            'onsubmit' => "return confirm('" . trans('abrigosoftware.as_are_you_sure') . "');",
            'route' => [$routeKey . '.aproveSubscription', $row->id],
        ]) !!}
        {!! Form::submit(trans('Aprovar'), ['class' => 'btn btn-xs btn-warning']) !!}
        {!! Form::close() !!}
    @endcan   
@endif
