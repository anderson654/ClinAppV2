<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
@extends('layouts.app')
@section('content')

    <style scoped>
        .table,
        svg {
            background: white;
            border-radius: 19px;
            box-shadow: 3px 3px #dedede;
        }

        .btn {
            border-radius: 19px;
        }

        #profTable_filter input {
            border: none;
            border-radius: 19px;
            margin: 10px
        }

    </style>

    {{--  <h2 class="pull-left">
        Gestão de profissionais EduClin
    </h2>

    <div id="perf_div"></div>

    {!! $lava->render('ColumnChart', 'Dashboard', 'perf_div', true) !!}

    <br>  --}}

    <table id="profTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cidade</th>                
                <th scope="col">Ativa</th>
                <th scope="col">Treinamentos concluídos</th>
                <th scope="col">Dt. Criação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($professionals as $prof)
                <tr>
                    <th scope="row">{{ $prof->id }}</th>
                    <td>{{ $prof->name }}</td>
                    <td>{{ $prof->address->city->title or 'N/A' }}</td>
                 
                    <td>
                        @if ($prof->status == null || $prof->status == 0)
                            <i class="fa fa-times" aria-hidden="true" style="color: red"></i>
                        @else
                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                        @endif
                    </td>
                    <td>
                        @php
                            $count = 0;
                            if (!empty($prof->CompletedTrainings)) {
                                foreach ($prof->CompletedTrainings as $ct) {
                                    $count += 1;
                                }
                            }
                        @endphp
                        {{ $count . '/' . $countAllTrainings }}
                    </td>
                    <td>{{ \Carbon\Carbon::parse($prof->created_at)->format('d/m/Y') }}</td>
                    <td>
                        <a type="button" href="{{ url('admin/trainings/invite_professional', ['id' => $prof->id]) }}"
                            class="btn btn-success btn-sm" @if ($prof->status == null || $prof->status == 0 || $prof->address->city_id == null || $prof->address->city_id == 0 || $prof->address->state_id == null || $prof->address->state_id == 0 || $prof->address->zip == null) disabled @endif>Aprovar</a>
                        <a type="button" href="{{ url('admin/trainings/show_professional', $prof->id) }}"
                            class="btn btn-primary btn-sm" href="#">Visualizar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#profTable').DataTable({
                'order': [6, 'asc'],
                "columnDefs": [{
                    "className": "dt-center",
                    "targets": "_all"
                }]
            });
        });
    </script>
@endsection
