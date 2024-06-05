@extends('layouts.app')

@section('content')

    <h3 class="page-title">Conta Bancária</h3>

    <div class="panel panel-default" style="padding: 20px;">
        <form action="{{ url('admin/create/bank_account/') }}" method="post">
            {{ csrf_field() }}
            
            @if($bank_account)
                @include('admin.bank_account.fields_edit')
            @else
                @include('admin.bank_account.fields_create')
            @endif
        </form>
    </div>
@stop

@section('javascript') 

@endsection

