@extends('layouts.app')
@section('content')
    <style>
        .table {
            background-color: #fff;
            border-radius: 22px
        }

    </style>

    <table id="leadsTable" class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Data simulação</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>Status</th>
                <th>Contato</th>
                <th>Ações</th>
                <th>Simulação</th>
                <th>De onde veio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leads as $lead)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($lead->created_at)->format('d/m/Y H:i') }}</td>
                    <td>{{ $lead->client->name or 'N/A' }}</td>
                    <td>{{ $lead->contact->phone or 'Vazio' }}</td>
                    <td>{{ $lead->address ? $lead->address->city_title : '----------' }}</td>
                    {{-- <td>{{ $lead->address->address->city->title or 'N/A' }}</td> --}}
                    <td>{{ $lead->lead_status->title or 'Vazio' }}</td>
                    <td>
                        {{-- target="_blank"
                            href="https://api.whatsapp.com/send?phone=55{{ $lead->contact->phone }}&text=Olá {{ $lead->client->name }}, você fez uma simulação em nosso site, para contração de diarista e limpeza para o seu escritório, e não finalizou o seu agendamento. Ficou alguma duvida? Algo em que eu possa lhe Ajudar?" --}}
                        <a class="btn btn-success btn-sm whatsapp" data-toggle="modal" data-target="#leadsModal"
                            data-name="{{ $lead->client->name or '' }}" data-phone="{{ $lead->contact->phone }}"
                            data-id="{{ $lead->id }}">
                            <i class="fa fa-whatsapp"></i>
                            Whatsapp
                        </a>
                        <button class="btn btn-danger btn-sm email" data-toggle="modal" data-target="#leadsModal"
                            data-name="{{ $lead->client->name or '' }}" data-phone="{{ $lead->contact->phone }}"
                            disabled>
                            <i class="fa fa-envelope-o"></i> E-mail
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-service="{{ $lead }}"
                            onclick="redirect(this)"><i class="fa fa-book"></i> Agendar</button>
                        <a class="btn btn-danger btn-sm lost" data-toggle="modal" data-target="#reasonModal"
                            data-id="{{ $lead->id }}">
                            <i class="fa fa-times"></i> Perdido
                        </a>
                    </td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#leadsModal" data-service="{{ $lead }}"
                            style="font-weight: bold" class="details">VER</a>
                    </td>
                    <td>{{ $lead->whoScheduled->name or 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="leadsModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="color: white">
                    <h5 class="modal-title">
                        <i class="fa fa-whatsapp"></i>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #fff">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary dismiss">Fechar</a>
                    <a type="button" class="btn btn-primary send">Enviar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="reasonModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="get">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #efefef">
                        <h5 class="modal-title">
                            <i class="fa fa-times"></i> Escolha o motivo
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <select name="reason" id="reason" class="form-control" style="width: 50%">
                            @foreach ($reasons as $reason)
                                <option value="{{ $reason->id }}">{{ $reason->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary send">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('./adminlte/js/view_leads.js') }}"></script>
@endsection
