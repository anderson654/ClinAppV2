@extends('admin.messenger.template')

@section('title', 'Nova mensagem')

@section('messenger-content')

    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => ['admin.messenger.store'], 'method' => 'POST', 'novalidate', 'class' => 'stepperForm validate']) !!}

            @include('admin.messenger.form-partials.fields')

            {!! Form::submit('Enviar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop