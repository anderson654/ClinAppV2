@extends('layouts.app')
@section('content')
    <link href="{{ asset('/adminlte/css/custom.css') }}" rel="stylesheet">

    <div class="container">
        <div class="prof-data">
            <h3 class="pull">{{ $professional->name }}</h3>
            <br>
            <form action="{{ url('admin/trainings/update_professional', ['id' => $professional->id]) }}" method="POST">

                {{-- csrf token --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                {{-- Nome e email --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">@lang('abrigosoftware.as_name')</label>
                            <input type="name" class="form-control" id="name" name="name"
                                value='{{ $professional->name }}' required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="control-label">@lang('abrigosoftware.as_email')</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value={{ $professional->email }} disabled>
                        </div>
                    </div>
                </div>

                {{-- CPF e telefone --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cpf">@lang('abrigosoftware.users.fields.cpf')</label>
                            <input type="cpf" class="form-control" id="cpf" name="cpf" value={{ $professional->cpf }}
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone" class="control-label">@lang('abrigosoftware.as_phone')</label>
                            <input type="phone" class="form-control" id="phone" name="phone"
                                value={{ $professional->phone }} required>
                        </div>
                    </div>
                </div>

                {{-- Cidade e state --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state" class="control-label">@lang('abrigosoftware.users.fields.state')</label>
                            <select type="state" class="form-control" id="state" name="state" required>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->state }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">@lang('abrigosoftware.users.fields.city')</label>
                            <select type="city" class="form-control" id="city" name="city" required>
                                @foreach ($states as $state)
                                    @foreach ($state->cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->title }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                {{-- active --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="zip" class="control-label">@lang('abrigosoftware.users.fields.zip')</label>
                            <input type="zip" class="form-control" name="zip" value="{{ $professional->zip }}"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="status" name="status"
                                @if ($professional->status == 1) checked @endif>
                            <label class="custom-control-label" for="status">Ativa</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <nav>
                            <ul class="cf">
                                <li>
                                    <a class="dropdown" href="#">Progresso de treinamento</a>
                                    <ul>
                                        <li>
                                            <a href="#">Profissionalismo</a>
                                            @php
                                                $count = 0;
                                                $width = 0;
                                                $result = 0;
                                                if (!empty($completed_training_professionalism)) {
                                                    foreach ($completed_training_professionalism as $ctp) {
                                                        $count += 1;
                                                    }
                                                    $result = "$count/$completed_training_professionalism_count";
                                                    $width = ($count / $completed_training_professionalism_count) * 100;
                                                    if ($result == 0) {
                                                        $result = 'N/A';
                                                    }
                                                }
                                            @endphp
                                            <div class="progress">
                                                <div @if ($result == 'N/A') class = "progress-bar progress-bar-striped progress-bar-animated bg-warning textblack" @endif @if ($width <= 30) class="progress-bar progress-bar-striped progress-bar-animated bg-warning textmid" @elseif ($width <= 70) class="progress-bar progress-bar-striped progress-bar-animated bg-success" @elseif ($width <= 100) class="progress-bar progress-bar-striped progress-bar-animated bg-sucess textmid" @endif role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{ $width }}%">
                                                    {{ $result }}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Técnicas de limpeza</a>
                                            @php
                                                $count2 = 0;
                                                $width2 = 0;
                                                $result2 = 0;
                                                if (!empty($completed_training_techniques)) {
                                                    foreach ($completed_training_techniques as $ctt) {
                                                        $count2 += 1;
                                                    }
                                                    $result2 = "$count2/$completed_training_techniques_count";
                                                    $width2 = ($count2 / $completed_training_techniques_count) * 100;
                                                    if ($result2 == 0) {
                                                        $result2 = 'N/A';
                                                    }
                                                }
                                            @endphp
                                            <div class="progress">
                                                <div @if ($result2 == 'N/A') class = "progress-bar progress-bar-striped progress-bar-animated bg-warning textblack" @endif @if ($width2 <= 30) class="progress-bar progress-bar-striped progress-bar-animated bg-warning textmid" @elseif ($width2 <= 70) class="progress-bar progress-bar-striped progress-bar-animated bg-success textmid" @elseif ($width2 <= 100) class="progress-bar progress-bar-striped progress-bar-animated bg-sucess textmid" @endif role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{ $width2 }}%">
                                                    {{ $result2 }}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Desenvolvimento pessoal</a>
                                            @php
                                                $count3 = 0;
                                                $width3 = 0;
                                                $result3 = 0;
                                                if (!empty($completed_training_personal)) {
                                                    foreach ($completed_training_personal as $ctpe) {
                                                        $count3 += 1;
                                                    }
                                                    $result3 = "$count3/$completed_training_personal_count";
                                                    $width3 = ($count3 / $completed_training_personal_count) * 100;
                                                    if ($result3 == 0) {
                                                        $result3 = 'N/A';
                                                    }
                                                }
                                            @endphp
                                            <div class="progress">
                                                <div @if ($result3 == 'N/A') class = "progress-bar progress-bar-striped progress-bar-animated bg-warning textblack" @endif @if ($width3 <= 30) class="progress-bar progress-bar-striped progress-bar-animated bg-warning textmid" @elseif ($width3 <= 70) class="progress-bar progress-bar-striped progress-bar-animated bg-success textmid" @elseif ($width3 <= 100) class="progress-bar progress-bar-striped progress-bar-animated bg-sucess textmid" @endif role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{ $width3 }}%">
                                                    {{ $result3 }}
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Finança pessoal</a>
                                            @php
                                                $count4 = 0;
                                                $width4 = 0;
                                                $result4 = 0;
                                                if (!empty($completed_training_finance)) {
                                                    foreach ($completed_training_finance as $ctf) {
                                                        $count4 += 1;
                                                    }
                                                    $result4 = "$count4/$completed_training_finance_count";
                                                    $width4 = ($count4 / $completed_training_finance_count) * 100;
                                                    if ($result4 == 0) {
                                                        $result4 = 'N/A';
                                                    }
                                                }
                                            @endphp
                                            <div class="progress">
                                                <div @if ($result4 == 'N/A') class = "progress-bar progress-bar-striped progress-bar-animated bg-warning textblack" @endif @if ($width4 <= 30) class="progress-bar progress-bar-striped progress-bar-animated bg-warning textmid" @elseif ($width4 <= 70) class="progress-bar progress-bar-striped progress-bar-animated bg-success textmid" @elseif ($width4 <= 100) class="progress-bar progress-bar-striped progress-bar-animated bg-sucess textmid" @endif role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{ $width4 }}%">
                                                    {{ $result4 }}
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <br>

                {{-- subsmit --}}
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn sm pull-left">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
