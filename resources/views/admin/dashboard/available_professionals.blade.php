@extends('layouts.app')
@section('content')

    <style>
        .table {
            background-color: #fff;
            border-radius: 22px;
        }

        #container {
            overflow: auto;
        }

        #container table,
        table td {
            vertical-align: top;
            white-space: nowrap;
        }

    </style>

    <div id="container">
        <table class="table table-hover table-bordered">
            <tr>
                <td rowspan="2"></td>
                @foreach ($dataArray as $value => $key)
                    <th colspan="2">{{ $value }}</th>
                @endforeach
            </tr>
            <tr>
                @foreach ($dataArray as $value => $key)
                    <th scope="col">M</th>
                    <th scope="col">T</th>
                @endforeach
            </tr>
            <tr>
                <th scope="row">services</th>
                @foreach ($dataArray as $value)
                    <td>{{ $value['servicesAM'] }}</td>
                    <td>{{ $value['servicesPM'] }}</td>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Profissionais alocadas</th>
                @foreach ($dataArray as $value)
                    <td>{{ $value['filledSlotsAM'] }}</td>
                    <td>{{ $value['filledSlotsPM'] }}</td>
                @endforeach
            </tr>
            <tr>
                <th scope="row">Slots disponíveis</th>
                @foreach ($dataArray as $value)
                    <td>{{ $value['openSlotsAM'] }}</td>
                    <td>{{ $value['openSlotsPM'] }}</td>
                @endforeach
            </tr>
        </table>
    </div>
@endsection
