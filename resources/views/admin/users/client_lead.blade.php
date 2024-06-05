@extends('layouts.app')

@section('content')
    <h3 class="page-title">Leads agendamento comercial</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Empresa</th>
                        <th>Trabalho</th>
                        <th>Tipo de endereço</th>
                        <th>Tamanho aproximado</th>
                        <th>Serviço</th>

                        <th>&nbsp;Ações</th>
                    </tr>
                </thead>
                    @if(count($leads))
                        @foreach ($leads as $lead)
                            <tr>
                                <td field-key='title'>{{$lead->name}}</td>
                                <td field-key='title'>{{$lead->phone}}</td>
                                <td field-key='title'>{{$lead->email}}</td>
                                <td field-key='title'>{{$lead->company}}</td>
                                <td field-key='title'>{{$lead->office}}</td>
                                <td field-key='title'>{{$lead->address_type}}</td>
                                <td field-key='title'>{{$lead->approximate_size}}</td>
                                <td field-key='title'>{{$lead->service}}</td>
                                <td><a href="{{route('api.deletLeadComercial',$lead->id)}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">excluir</a></td>
                            </tr>
                        @endforeach
                    @endif
                <tbody>
                    
                </tbody>
            </table>
        </div>

    </div>
@stop

@section('javascript')
    <script type="text/javascript">
       
    </script>
@endsection