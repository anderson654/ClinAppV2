@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>
        <div class="panel-body">
            <div class="col-md-6">
                {!! Form::open(['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}
                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::label('name', trans('abrigosoftware.users.fields.name') . '*', ['class' => 'control-label']) !!}
                        {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if ($errors->has('name'))
                            <p class="help-block">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>
                    <div class="col-md-6 form-group">
                        {!! Form::label('email', trans('abrigosoftware.users.fields.email') . '*', ['class' => 'control-label']) !!}
                        {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                        <p class="help-block"></p>
                        @if ($errors->has('email'))
                            <p class="help-block">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::label('cpf', trans('abrigosoftware.users.fields.cpf') . '', ['class' => 'control-label']) !!}
                        {!! Form::text('cpf', $user->client->cpf, ['class' => 'form-control cpf', 'placeholder' => '']) !!}
                        <p class="help-block"></p>
                        @if ($errors->has('cpf'))
                            <p class="help-block">
                                {{ $errors->first('cpf') }}
                            </p>
                        @endif
                    </div>
                    <div class="col-md-6 form-group">
                        @if ($contacts)
                            @if ($contacts != null)
                                @foreach ($contacts as $contact)
                                    {!! Form::label('phone', trans('abrigosoftware.users.fields.phone') . '', ['class' => 'control-label']) !!}
                                    <br>
                                    <input type="text" class="form-control sp_celphones" name="phone[]"
                                        value="{{ $contact->phone }}" id="" placeholder="Informe o telefone">
                                    <input type="text" class="form-control" style="display: none;" name="phone_id[]"
                                        value="{{ $contact->id }}" id="" placeholder="Informe o telefone">
                                    <p class="help-block"></p>
                                    <button type="button" class="btn btn-danger pull-right" data-toggle="modal"
                                        data-target="#{{ $contact->phone }}">
                                        Excluir
                                    </button>
                                    <p class="help-block"></p>
                                    <!-- modal confirm -->
                                    <div class="modal fade" id="{{ $contact->phone }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Realmente deseja excluir este número de telefone</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Fechar</button>
                                                    <button type="submit" class="btn btn-danger"
                                                        formaction="{{ route('admin.deletPhone', [$contact->id, $user->id]) }}"
                                                        style="margin:5px" formmethod="GET">Excluir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- fim modal confirm -->
                                @endforeach
                            @else
                                {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            @endif
                        @else
                            {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                        @endif
                        <!-- //phone -->

                        <label id="new-contacts" class="control-label" style="width:100%; opacity:0;">CPF</label>
                        <div class="editPhone remove" style="display:none;">
                            <label for="editPhone">Novo telefone</label>
                            <input type="text" class="form-control sp_celphones" name="phone1" value="" id="newPhone"
                                placeholder="Informe o telefone">
                            <p class="help-block"></p>
                            <button type="submit" class="btn btn-success pull-right"
                                formaction="{{ route('admin.savePhoneOrUpdate', [$user->id]) }}" style=""
                                formmethod="GET">Salvar</button>
                            <span id="editPhoneValue" style="display:none;">0</span>

                            <p class="help-block"></p>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="editPhone()">Novo contato</button>
                        @if ($errors->has('phone'))
                            <p class="help-block">
                                {{ $errors->first('phone') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    @if (isset($observacoes))
                        <div class="col-xs-12 form-group">
                            <label for="observacoes" class="control-label">Observações</label>
                            <textarea class="form-control" placeholder="" colw="10" rows="5" name="observacoes" cols="50"
                                id="observacoes">{{ $observacoes }}</textarea>
                            <p class="help-block"></p>
                        </div>
                    @else
                        <div class="col-xs-12 form-group">
                            {!! Form::label('observacoes', 'Observações', ['class' => 'control-label']) !!}
                            {!! Form::textarea('observacoes', old('observacoes'), ['class' => 'form-control', 'placeholder' => '', 'colw' => '10', 'rows' => '5']) !!}
                            <p class="help-block"></p>
                            @if ($errors->has('observacoes'))
                                <p class="help-block">
                                    {{ $errors->first('observacoes') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                {!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
            <div class="col-md-6">
                <div class="row">

                    <div>
                        @if (strlen($addresses) > 2)
                            <div class="row">
                                <div class="col-xs-12 form-group">
                                    <label class="control-label">Endereço</label>
                                    @foreach ($addresses as $index => $address)
                                        <li class="list-group-item">
                                            <div class="row toggle" id="dropdown-detail-1"
                                                data-toggle="detail-{{ $index }}">
                                                <div class="col-xs-12">
                                                    Endereço {{ $index + 1 }}
                                                </div>
                                                <div><i class="fa fa-chevron-down pull-right mr-10"></i></div>
                                            </div>
                                            <div id="detail-{{ $index }}">
                                                <hr>
                                                </hr>
                                                <div class="container" style="width: 100%">
                                                    <div class="fluid-row">
                                                        <form method="POST">
                                                            {{ csrf_field() }}
                                                            <label for="zip">CEP</label>
                                                            <input type="text" name="zip" id="zip" class="form-control"
                                                                value="{{ $address->zip }}">
                                                            <label for="street">Rua</label>
                                                            <input type="text" name="street" id="street"
                                                                class="form-control" value="{{ $address->street }}">
                                                            <label for="number">Número</label>
                                                            <input type="text" name="number" id="number"
                                                                class="form-control" value="{{ $address->number }}">
                                                            <label for="complement">Complemento</label>
                                                            <input type="text" name="complement" id="complement"
                                                                class="form-control"
                                                                value="{{ $address->complement }}">
                                                            <label for="neighborhood">Bairro</label>
                                                            <input type="text" name="neighborhood" id="neighborhood"
                                                                class="form-control"
                                                                value="{{ $address->neighborhood }}">
                                                            <input type="hidden" value="{{ $address->id }}"
                                                                name="address_id">
                                                            <label for="city">Cidade</label>
                                                            <select type="text" name="city" id="city" class="form-control"
                                                                required>
                                                                <option value="null">Selecione a Cidade</option>
                                                                @foreach ($cities as $index => $city)
                                                                    <option value="{{ $index }}" name="city"
                                                                        id="city"
                                                                        @if ($index == $address->city_id) selected @endif>
                                                                        {{ $city }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <hr>
                                                            <button type="submit" class="btn btn-secondary pull-right"
                                                                formaction="{{ route('admin.addressDestroy') }}"
                                                                style="margin:5px">Excluir</button>
                                                            {{-- <button type="submit" class="btn btn-success pull-right"
                                                                formaction="{{ route('admin.addressUpdate') }}"
                                                                style="margin:5px">Editar</button> --}}
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary form-control" data-toggle="modal"
                                    data-target="#newAddressModal" style="margin-top: 4%">Novo endereço</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="newAddressModal" tabindex="-1" role="dialog" aria-labelledby="newAddressLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('admin.newClientAddress') }}" id="newAddressForm"
                            name="newAddressForm">
                            <div class="modal-body">
                                {{-- The id's starting with "na" means New Address --}}
                                {{ csrf_field() }}
                                <label for="naZip">CEP</label>
                                <input type="text" name="zip" id="naZip" class="form-control zip"
                                    onkeyup="getAddressCep(this)" placeholder="EX: 00000-000" required>
                                <label for="naStreet">Rua</label>
                                <input type="text" name="street" id="naStreet" class="form-control" required readonly>
                                <label for="naNumber">Número</label>
                                <input type="text" name="number" id="naNumber" class="form-control" required>
                                <label for="naComplement">Complemento</label>
                                <input type="text" name="complement" id="naComplement" class="form-control">
                                <label for="naNeighborhood">Bairro</label>
                                <input type="text" name="neighborhood" id="naNeighborhood" class="form-control" required
                                    readonly>
                                <label for="naCity">Cidade</label>
                                <input type="text" name="city" id="naCity" class="form-control" required readonly>
                                {{-- <select type="text" name="city" id="naCity" class="form-control" required>
                                    <option value="null">Selecione a cidade</option>
                                    @foreach ($cities as $index => $city)
                                        <option value="{{ $index }}"> {{ $city }} </option>
                                    @endforeach
                                </select> --}}
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="uf" id="uf" value="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        @stop

        @section('javascript')

            <script type="text/javascript">
                $('select[name=state]').change(function() {
                    var idState = $(this).val();
                    $.get('/admin/get-cities/' + idState, function(cities) {
                        $('select[name=city]').empty();
                        $.each(cities, function(key, value) {
                            $('select[name=city]').append('<option value=' + value.id + '>' + value
                                .city + '</option>');
                        });
                    });
                });
            </script>
            <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
            <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
            <script>
                $(function() {
                    moment.updateLocale('{{ App::getLocale() }}', {
                        week: {
                            dow: 1
                        } // Monday is the first day of the week
                    });

                    $('.date').datetimepicker({
                        format: "{{ config('app.date_format_moment') }}",
                        locale: "{{ App::getLocale() }}",
                    });

                });

                function getAddressCep(data) {
                    if (data.value.length == 9) {
                        const zip = parseInt(data.value.replace('-', ''));
                        const url = `https://viacep.com.br/ws/${zip}/json`
                        loadingCep();
                        $.get(url, (json) => {
                            // console.log(json);
                            $('#naStreet').val(json.logradouro)
                            $('#naNeighborhood').val(json.bairro)
                            $('#naCity').val(json.localidade)
                            $('#uf').val(json.uf)

                        })
                    } else {
                        replaceCep();
                    }
                }

                function loadingCep() {
                    $('#naStreet').val("Carregando...")
                    $('#naNeighborhood').val("Carregando...")
                    $('#naCity').val("Carregando...")
                }

                function replaceCep() {
                    $('#naStreet').val("")
                    $('#naNeighborhood').val("")
                    $('#naCity').val("")
                }

                function editPhone() {
                    var editPhone = document.querySelectorAll('.remove');

                    editPhoneValue = document.getElementById("editPhoneValue").innerText;
                    editPhone.forEach(element => {
                        if (editPhoneValue == "0") {
                            element.setAttribute("style", "");
                            document.getElementById("editPhoneValue").innerText = "1";
                            document.getElementById("new-contacts").style.display = "none";

                        } else {
                            element.setAttribute("style", "display:none;");
                            document.getElementById("editPhoneValue").innerText = "0"
                            document.getElementById("new-contacts").style.display = "block";

                        }
                    })
                }
            </script>
        @endsection
