@extends('layouts.app')


@section('content')
<div style="overflow-x:auto;">
    <br><br><br>




    @if (isset($users))

    <h3>Lista de Profissionais</h3>
    {{-- @if (Session::has('admin-mensagem-sucesso'))
	            <div class="card-panel green"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>
@endif
@if (Session::has('admin-mensagem-error'))
<div class="card-panel red"><strong>{{ Session::get('admin-mensagem-error') }}<strong></div>
@endif --}}



<table class="table table-hover">
    <tr>
        <th>Nome do Parceiro</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Cidade que trabalha</th>
        <th>Status</th>
        <th></th>
        <th> </th>

    </tr>
    </thead>
    @foreach ($users as $user)
    <tbody>
        <tr>
            <td>{{ $user->name}}</td>
            <td>{{ $user->phonecontact}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->work_city}}</td>
            <td><b>
                    @if ($user->status == 1)
                    Ativo
                    @else
                    Desativado

                    @endif


                </b></td>
            <td> <a class="btn btn-primary btn-sm" href="/profissional-new/detalhe/ {{$user->id}}"
                    role="button">Detalhes</a></td>
            <td> <a class="btn btn-success btn-sm" href="/profissional-new/toapprove/ {{$user->id}}"
                    role="button">Aprovar</a>
            </td>





        </tr>
        @endforeach
    </tbody>
</table>
</div>


@endif
</div>
</div>

@endsection