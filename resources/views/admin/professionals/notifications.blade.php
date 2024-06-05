@extends('layouts.app')
@section('content')

    <style>
        p {
            margin: 0;
        }

        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .d-flex h2 {
            display: inline;
        }

        .fluid-row {
            padding: 16px;
            /* border-radius: 10px; */
            background-color: #ecf0f5;
        }

    </style>

    <div class="d-flex">
        <h2 class="bold">Controle de notificações</h2>
        <button class="btn btn-primary" style="height: 50%" data-toggle="modal" data-target="#newNotification">Nova
            notificação</button>
    </div>
    <br>

    <!-- Modal -->
    <div class="modal fade" id="newNotification" tabindex="-1" role="dialog" aria-labelledby="newNotification"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newNotificationLabel">Criar nova notificação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.professionals.storeNotification') }}" method="post"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <textarea class="form-control" name="message" id="message" cols="90%" rows="10"
                            placeholder="Insira a mensagem"></textarea>
                        <br>
                        <input type="file" name="img_name" id="img_name" accept=".img,.png,.jpg">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <ul class="list-group">
        @foreach ($notifications as $index => $notification)
            @php
                $count = \App\Notification::where('ntf_control_id', $notification->id)->count();
                $viewed = \App\Notification::where('ntf_control_id', $notification->id)
                    ->where('viewed', 1)
                    ->count();
            @endphp
            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-{{ $index }}" data-toggle="detail-{{ $index }}">
                    <div class="col-xs-12">
                        <p class="col-md-1 bold">{{ $notification->id }}</p>
                        <p class="col-md-8">{{ $notification->message }}</p>
                        <p class="col-md-2">
                            {{ \Carbon\Carbon::parse($notification->created_at)->format('d/m/Y H:i') }}</p>
                        <div class="col-md-1"><i class="fa fa-chevron-down pull-right"></i></div>
                    </div>
                </div>
                <div id="detail-{{ $index }}">
                    <br>
                    <div class="fluid-row">
                        <div class="d-flex col-md-6">
                            <p>Enviado para</p>
                            <p>{{ $count }} profissionais</p>
                        </div>
                        <div class="d-flex col-md-6">
                            <p>Visto por</p>
                            <p>{{ $viewed }} profissionais</p>
                        </div>
                        <br>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

@endsection
