@extends('layouts.app')

@section('content')

    <h2 style="margin-top:0px;">@yield('title')</h2>

    <div class="row" style="margin-top:15px;">

        {{--Sidebar--}}
        <div class="col-sm-12 col-lg-3">
            <a href="{{ route('admin.messenger.create') }}" class="btn btn-primary btn-group-justified">Nova mensagem</a>

            <div class="list-group" style="margin-top:8px;">
                <a href="{{ route('admin.messenger.index') }}" class="list-group-item">Todas</a>
                @php($unread = App\MessengerTopic::unreadInboxCount())
                <a href="{{ route('admin.messenger.inbox') }}" class="list-group-item {{ ($unread > 0 ? 'unread' : '') }}">
                    Inbox
                    {{ ($unread > 0 ? '('.$unread.')' : '') }}
                </a>
                <a href="{{ route('admin.messenger.outbox') }}" class="list-group-item">Enviadas</a>
            </div>
        </div>


        {{--Main content--}}
        <div class="col-sm-12 col-lg-9">
            @yield('messenger-content')
        </div>
    </div>

@stop