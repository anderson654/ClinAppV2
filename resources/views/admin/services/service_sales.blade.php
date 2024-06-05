<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="pull-left">Histórico de vendas de faxinas</h1>
        <hr>
        <br>
        <table id="salesTable" class="hover">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Nome</th>
                    <th>Serviço ID</th>
                    <th>Data</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach ($serviceSales as $index => $item)
                    @php
                    $user = App\User::where('id', $item->user_id)->get()->first();
                    $service = App\Service::where('id', $item->service_id)->whereIn('status_id', [3,4])->get()->first();
                    $data = \Carbon\Carbon::parse($service?$service->created_at:NULL)->format("d/m/y H:i");
                    @endphp
                    @if ($service)
                    <tr>
                        <td>{{ $item->user_id}}</td>
                        <td>{{ $user->name}}</td>
                        <td><a href="{!! url('admin/services', ['id' => $item->service_id]) !!}">{{ $service->id}}</a></td>
                        <td>{{ $data}}</td>
                        <td>{{ $service->value}}</td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<script>  
    $(document).ready(function() {
        $('#salesTable').DataTable({
            "pagingType": "full_numbers"
        });
        $('.dataTables_length').addClass('bs-select');
    });

</script>
