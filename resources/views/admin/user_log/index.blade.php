@extends('layouts.app')
@section('content')

    <style scoped>
        .logTable,
        svg {
            background: white;
            border-radius: 19px;
            box-shadow: 3px 3px #dedede;
        }

        .btn {
            border-radius: 19px;
        }

        #logTable_filter input {
            border: none;
            border-radius: 19px;
            margin: 10px
        }

        .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
        }

    </style>

    @php
    $roles = [0 => 'Admin', '1' => 'Admin', '2' => 'Moderador', 3 => 'Profissional', 4 => 'Cliente', 5 => 'Treinamento'];
    @endphp

    <table id="logTable" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <th scope="row">{{ $log->user ? $log->user->id : 'vazio' }}</th>
                    <td>{{ $log->user ? $log->user->name : 'vazio' }}</td>
                    <td>{{ $roles[4] }}</td>
                    <td><button type="button" onclick="openHistory(this)" class="btn btn-primary btn-show"
                            data-id="{{ $log->user_id }}">@lang('abrigosoftware.as_view')</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="logModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logModalTitle">Histórico</h5>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Ação</th>
                                <th scope="col">Alvo</th>
                                <th scope="col">Data</th>
                            </tr>
                        </thead>
                        <tbody class="log">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="deleteRows()" class="btn btn-secondary"
                        data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#logTable').DataTable({
                'order': [0, 'asc'],
                "columnDefs": [{
                    "className": "dt-center",
                    "targets": "_all"
                }]
            });
        });

        async function openHistory(btn) {

            const list = document.querySelector('#logModal .modal-body tbody')

            // fetch to get user system log
            const id = btn.getAttribute('data-id')
            await fetch(window.location + '/' + id)
                .then(response => response.text())
                .then(data => JSON.parse(data))
                .then(data => data.forEach((value, key) => {

                    //create TR
                    let tr = document.createElement('tr')
                    list.appendChild(tr)

                    //create TD 1
                    let td1 = document.createElement('td')
                    let tdNode1 = document.createTextNode(value.log)
                    td1.appendChild(tdNode1)
                    tr.appendChild(td1)

                    //create TD 2
                    let td2 = document.createElement('td')
                    let tdNode2 = document.createTextNode(value.target_user == null ? 'N/A' : value.target_user)
                    td2.appendChild(tdNode2)
                    tr.appendChild(td2)

                    //create TD 3
                    let td3 = document.createElement('td')
                    let tdNode3 = document.createTextNode(value.created_at)
                    td3.appendChild(tdNode3)
                    tr.appendChild(td3)

                }))

            $('#logModal').modal({
                backdrop: 'static',
                keyboard: false
            });
            $('#logModal').modal('show')
        }

        function deleteRows() {
            tbody = document.querySelector('tbody.log')
            rows = document.querySelectorAll('tbody.log tr');
            rows.forEach((value, key) => {
                tbody.removeChild(value)
            })
        }
    </script>
@endsection
