@extends('layouts.app')

@section('content')
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: ;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #fff;
}
.table {
    text-align: initial;  
}
.hist{
    overflow-y:scroll;
    max-height:380px;
}

</style>
    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>
    


    {!! Form::model($professional, ['method' => 'PUT', 'files'=>true, 'route' => ['admin.professionals.update', $professional->id]], ) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>

			<div class="panel-body">
			<!-- Avatar -->
	<div class="row">
									
				<div class="row">
                    <div class="col-xs-4">
                        <div class="card">
                            <div class="card-body ">
    
                                <label for="upload_avatar">Foto da Professional</label>
									<div class="row">
										@if($professional->professional->avatar == null)
											<img src="{{ asset('/imagens/no_avatar.jpeg')  }}" alt="Avatar profissional" width="160px" heigth="160px" class="img-circulo">
										@else
											
											<img src="{{ asset('/imagens/'.$professional->professional->avatar) }}" alt="Avatar profissional" width="160px" heigth="160px" class="img-circulo">
										@endif
									</div>
									<div class="row">&nbsp;</div>
									<div class="form-group form-inline">
       									<label for="upload_avatar"></label>
        									<input type="file" id="upload_avatar" class="btn btn-success form-control" name="avatar"/>
											<input class="btn btn-danger" type="submit" value="Atualizar">
    								</div>
                       		</div>
						</div>
					</div>
				</div>
				</form>
				</div>
				<div class="row">&nbsp;</div>
				<!-- Fim Avatar -->
				
				<div class="col-xs-12 form-group">
				
                    {!! Form::label('status', trans('abrigosoftware.users.fields.status').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('status', 0) !!}
                    {!! Form::checkbox('status', 1, old('status', old('status'))) !!}
                   
					<p class="help-block"></p>
                    @if($errors->has('status'))
                        <p class="help-block">
                            {{ $errors->first('status') }}
                        </p>
                    @endif
					
	
  <!-- Motivo Cancelamento Cliente Faxina -->

  <div class="row">
                    <div class="col-xs-6">
                        <div class="card">
                            <div class="card-body form-group">
    
                                <label for="cbo_reason">Motivo do Cancelamento</label>
                                    <select name="opt_reason" id="cbo_reason" class="form-control form-group">
                                        <option value="" disabled selected>Selecione um motivo !</option>
                                        @foreach($reasons as $reason)
                                            <option value="{{ $reason->id }}">{{ $reason->id }} - {{ $reason->description }}</option>
                                        @endforeach
                                    </select>
                                    <label for="cancel_submit">Descrição do Cancelamento</label> 
                                        <input class="btn btn-warning" type="submit" id="cancel_submit" value="Salvar" style="
                                        margin-bottom: 7px;
                                        border-left-width: 0px;
                                        margin-left: 5px;">
                                    
                                    <textarea class="form-control" name="cancel_description" id="txtarea_cancel_reason" cols="30" rows="10" style="width:100%;"> </textarea>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card hist">
                            <div class="card-body">
                                <h4 class="card-title"><b>Histórico de observações</b></h4>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">Data</th>
                                        <th scope="col">Quem</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">observacão</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                @foreach($cancel_history as $history)
                                    <tr>
                                    <td>{{ $history->created_at->format('Y-m-d H:i') }}</td>
                                    <td>{{ $history->infoOperador?$history->infoOperador->name : 'vazio'}}</td>
                                    <td>{{ $history->motivos->description }}</td>
                                    <td>{{ $history->observation }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                             </table>                                                              
                            </div>
                        </div>
                    </div>
                </div>
      
          <!-- Fim motivo de Cancelamento Cliente Faxina -->


					</div>
                </div>

				

				<div class="row">
					<div class="form-group col-md-8">
						<label for="neighborhood">Nome</label>
						<input type="text" class="form-control" name="name"  value="{{$professional->professional->name}}" id="name" placeholder="Informe o Nome">
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-8">
						<label for="neighborhood">Email</label>
						<input  type="email" class="form-control" name="email"  value="{{$professional->email}}" id="email" placeholder="Informe o Email" disabled>
					</div>	
				</div>
				<div class="row">
						<div class="form-group col-md-8">
							<label for="neighborhood">Senha</label>
							<input type="text" class="form-control" name="password"  id="password" placeholder="Informe uma senha">
						</div>
				</div>
				<div class="row">
						<div class="form-group col-md-8">
							<label for="neighborhood">CPF</label>
							<input type="text" class="form-control"  value="{{$professional->professional->cpf}}"  name="cpf"  id="password" placeholder="Informe o CPF">
						</div>
				</div>
				<div class="row">
						<div class="form-group col-md-8">
							<label for="neighborhood">Data de Nascimento</label>
							<input type="text" class="form-control" name="birthdate"  value="{{$professional->professional->birthdate or ''}}" id="birthdate" placeholder="Informe a data de nascimento">
						</div>
				</div>
				<div class="row">
						<div class="form-group col-md-8">
							<label for="neighborhood">Sexo</label>
							<input type="text" class="form-control" name="gender"  value="{{$professional->professional->gender or ''}}" id="gender" placeholder="Informe o sexo">
						</div>
				</div>
				<div class="row">
						<div class="form-group col-md-8">
							<label for="neighborhood">Telefone</label>
							<input type="text" class="form-control" name="phone"  value="{{$professional->contact->phone or ''}}" id="phone" placeholder="Informe o telefone">
						</div>
				</div>
				<div class="row">
						<div class="form-group col-md-8">
							<label for="neighborhood">Rua</label>
							<input type="text" class="form-control" name="street"  value="{{$professional->address->street or ''}}" id="street" readonly placeholder="Informe a rua">
						</div>
				</div>
				<div class="row">
						<div class="form-group col-md-8">
							<label for="neighborhood">Número</label>
							<input type="number" class="form-control" name="number"  value="{{$professional->address->number or ''}}" id="number" readonly placeholder="Informe o numero da sua residência">
						</div>
				</div>
				
				<div class="row">
					<div class="form-group col-md-8">
						<label for="neighborhood">Bairro</label>
						<input type="text" class="form-control" name="neighborhood"  value="{{$professional->address->neighborhood or ''}}" readonly id="neighborhood" placeholder="Informe o bairro">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="zip">CEP</label>
						<input type="text" class="form-control" name="zip"  value="{{$professional->address->zip or ''}}" id="zip" readonly placeholder="Informe o CEP">
					</div>
			   </div>
			   <div class="row">
					<div class="form-group col-md-4">
						<label for="zip">Complemento</label>
						<input type="text" class="form-control" name="complement"  value="{{$professional->address->complement or ''}}" id="complement" readonly placeholder="Informe o Complemento do endereço">
					</div>
			   </div>
			   <div class="row">
					<div class="col-xs-12 form-group">
						{!! Form::label('city', 'Cidade:', ['class' => 'control-label']) !!}<span class="text-muted"> </span><br>
									
						@isset($professional->address->city->title)	  
						  <td>{!! Form::label('city', $professional->address->city->title, ['class' => 'form-control', 'placeholder' => '']) !!}
							 {!! Form::text('city', $professional->address->city->id, ['class' => 'form-control hidden', 'placeholder' => '']) !!}</td>
						 @endisset
						 @empty($professional->address->city->title)
							  <td> Sem informação </td>	
						 @endempty
					</div>
				</div>
				{{--  <!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				  Alterar Cidade
				</button>  --}}
			 
			 <br><hr>
			@if($bank_account)
			<div class="row col-xs-12">
			
				
				<div class="row">
					<div class="col-xs-12 form-group">
						{!! Form::label('banks_cod', 'Banco'.'*', ['class' => 'control-label']) !!}
						{!! Form::select('bank_cod_id', $bank_cods, old('bank_cod_id', $bank_account->bank_cod_id), ['class' => 'form-control select2', 'required' => '']) !!}
						
						<p class="help-block"></p>
						@if($errors->has('banks_cod'))
							<p class="help-block">
								{{ $errors->first('banks_cod') }}
							</p>
						@endif
					</div>
				</div>
				<div class="form-group">
					<label for="agencia">Agência</label>
					<input type="number" class="form-control" name="agencia" placeholder="Digite a Agência" value="{{$bank_account->agencia}}" required>
				</div>
				<div class="row">
					<div class="form-group col-md-10">
						<label for="conta">Conta</label>
						<input type="number" class="form-control" name="conta" placeholder="Digite a Conta" value="{{$bank_account->conta}}" required>
					</div>
					<div class="form-group col-md-2">
						<label for="digito">Dígito</label>
						<input type="number" class="form-control" name="digito" placeholder="Dígito" value="{{$bank_account->digito}}" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="type_account">Tipo de Conta</label>
					<select class="form-control" name="type_account" required>
						<option value="Conta corrente" {{$bank_account->type_account == "Conta corrente" ? 'selected' : '' }}>Conta corrente</option>
						<option value="Conta poupança" {{$bank_account->type_account == "Conta poupança" ? 'selected' : '' }}>Conta poupança</option>
						<option value="Conta salário" {{$bank_account->type_account == "Conta salário" ? 'selected' : '' }}>Conta salário</option>
						<option value="Conta digital" {{$bank_account->type_account == "Conta digital" ? 'selected' : '' }}>Conta digital</option>
						<option value="Conta universitária" {{$bank_account->type_account == "Conta universitária" ? 'selected' : '' }}>Conta universitária</option>
					</select>
				</div>
			</div>
			@else
				
			<div class="row col-xs-12">
				<div class="row">
					<div class="col-xs-12 form-group">
						{!! Form::label('banks_cod', 'Banco'.'*', ['class' => 'control-label']) !!}
						{!! Form::select('bank_cod_id', $bank_cods, ['class' => 'form-control select2', 'required' => '']) !!}
							<p class="help-block"></p>
						@if($errors->has('bank_cod_id'))
							<p class="help-block">
								{{ $errors->first('bank_cod_id') }}
							</p>
						@endif
					</div>
				</div>
				<div class="form-group">
					<label for="agencia">Agência</label>
					<input type="number" class="form-control" name="agencia" placeholder="Digite a Agência" required>
				</div>
				<div class="row">
					<div class="form-group col-md-10">
						<label for="conta">Conta</label>
						<input type="number" class="form-control" name="conta" placeholder="Digite a Conta" required>
					</div>
					<div class="form-group col-md-2">
						<label for="digito">Dígito</label>
						<input type="number" class="form-control" name="digito" placeholder="Dígito" required>
					</div>
				</div>
			
				<div class="form-group">
					<label for="type_account">Tipo de Conta</label>
					<select class="form-control" name="type_account" required>
						<option value="Conta corrente">Conta corrente</option>
						<option value="Conta poupança">Conta poupança</option>
						<option value="Conta salário">Conta salário</option>
						<option value="Conta digital">Conta digital</option>
						<option value="Conta universitária">Conta universitária</option>
					</select>
				</div>
			</div>
			@endif
			
			<!-- Dados MEI -->
			<h4>
				<center>
					<b>DADOS MEI NFE</b>
				</center>
			</h4>
			<div class="form-group col-md-4">
					<label for="mei">CNPJ</label>
					<input type="number" class="form-control" name="mei" placeholder="CNPJ 07759376000123" value="{{ $professional->professional->mei }}"
					<center>
				</div>
				<div class="row">
					<div class="form-group col-md-5">
						<label for="mei_user">Usuário</label>
						<center>
						<input type="text" class="form-control" name="mei_user" placeholder="Clin239" value="{{ $professional->professional->mei_user }}" >
					</div>
					<div class="form-group col-md-2">
						<label for="mei_passwd">Senha</label>
						<input type="text" class="form-control" name="mei_passwd" placeholder="Arr2xk" value="{{ $professional->professional->mei_passwd }}" >
					</div>
				</div>
				<!-- Fim Dados MEI -->
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('has_products', trans('abrigosoftware.users.fields.has_products').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('has_products', 0) !!}
                    {!! Form::checkbox('has_products', 1, old('has_products', old('has_products'))) !!}
                    <p class="help-block"></p>
                    @if($errors->has('has_products'))
                        <p class="help-block">
                            {{ $errors->first('has_products') }}
                        </p>
                    @endif
                </div>
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
					{!! Form::label('segunda', trans('abrigosoftware.users.fields.segunda').'',['class' => 'control-label']) !!}
                    {!! Form::hidden('segunda', 0) !!}
                    {!! Form::checkbox('segunda', 1, old($dayofweek->segunda, $dayofweek->segunda )) !!}
                    <p class="help-block"></p>
                    @if($errors->has('segunda'))
                        <p class="help-block">
                            {{ $errors->first('segunda') }}
                        </p>
                    @endif
                </div>				
			</div>			 
				<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('terca', trans('abrigosoftware.users.fields.terca').'',['class' => 'control-label']) !!}
                    {!! Form::hidden('terca', 0) !!}
                    {!! Form::checkbox('terca', 1, old($dayofweek->terca, $dayofweek->terca )) !!}
                    <p class="help-block"></p>
                    @if($errors->has('terca'))
                        <p class="help-block">
                            {{ $errors->first('terca') }}
                        </p>
                    @endif
                </div>				
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('quarta', trans('abrigosoftware.users.fields.quarta').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('quarta', 0) !!}
                    {!! Form::checkbox('quarta', 1, old($dayofweek->quarta, $dayofweek->quarta )) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quarta'))
                        <p class="help-block">
                            {{ $errors->first('quarta') }}
                        </p>
                    @endif
				</div>	
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('quinta', trans('abrigosoftware.users.fields.quinta').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('quinta', 0) !!}
                    {!! Form::checkbox('quinta', 1, old($dayofweek->quinta, $dayofweek->quinta )) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quinta'))
                        <p class="help-block">
                            {{ $errors->first('quinta') }}
                        </p>
                    @endif
                </div>	
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('sexta', trans('abrigosoftware.users.fields.sexta').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('sexta', 0) !!}
                    {!! Form::checkbox('sexta', 1, old($dayofweek->sexta, $dayofweek->sexta )) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sexta'))
                        <p class="help-block">
                            {{ $errors->first('sexta') }}
                        </p>
                    @endif
                </div>
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('sabado', trans('abrigosoftware.users.fields.sabado').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('sabado', 0) !!}
                    {!! Form::checkbox('sabado', 1, old($dayofweek->sabado, $dayofweek->sabado )) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sabado'))
                        <p class="help-block">
                            {{ $errors->first('sabado') }}
                        </p>
                    @endif
                </div>	
			</div>

			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('domingo', trans('abrigosoftware.users.fields.domingo').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('domingo', 0) !!}
                    {!! Form::checkbox('domingo', 1, old($dayofweek->domingo, $dayofweek->domingo )) !!}
                    <p class="help-block"></p>
                    @if($errors->has('domingo'))
                        <p class="help-block">
                            {{ $errors->first('domingo') }}
                        </p>
                    @endif
                </div>           
			</div>
		<div>
    </div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Alterar Cidade</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			 <div class="modal-body">						
							<div class="row">
								<div class="col-xs-12 form-group">					
									{!! Form::label('state', 'Estado ', ['class' => 'control-label']) !!}<span class="text-muted"> (Obrigatório)</span>
									{!! Form::select('state', $states, old('state'), ['class' => 'form-control', 'placeholder' => '']) !!}
									
									 <p class="help-block"></p>
									@if($errors->has('state'))
										<p class="help-block">
											{{ $errors->first('state') }}
										</p>
									@endif
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 form-group">
									{!! Form::label('city', 'Cidades:', ['class' => 'control-label']) !!}<span class="text-muted"> </span><br>
									
									{!! Form::select('city', [], old('city')) !!}
										
									
								 <p class="help-block"></p>
									@if($errors->has('city'))
										<p class="help-block">
											{{ $errors->first('city') }}
										</p>
									@endif
								</div>
							</div>
					  </div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			{!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-danger']) !!}
		  </div>
		</div>
	  </div>
	</div>
    {!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript') 
<!-- validacao cancelamento -->
<script>
$('input[name=status]').change(function(){
if($('input[name=status]').is(':checked')){
        $('#cancel_submit').prop('disabled', false);
		$('#cbo_reason').prop('required', false);
    } else {	
        $('#cancel_submit').prop('disabled', true);
		$('#cbo_reason').prop('required', true);
        
		alert(' Favor preenchcer a descrição para o desligamento da profissional !! ');

    }
	
});

$('textarea[name=cancel_description]').change('keydown', function() {
		let tam = $(this).val();
		console.log(tam.length);
		if(tam.length >= 10){
			$('#cancel_submit').prop('disabled', false);
		}else{
			alert('favor informar uma descrição com no min. 10 caracters');
			$('textarea[name=cancel_description]').focus();
		}
	});
</script>

<!-- Fim Validacao cancelamento -->
<script type="text/javascript">
        $('select[name=state]').change(function () {
            var idState = $(this).val();
            $.get('/admin/get-cities/' + idState, function (cities) {
                $('select[name=city]').empty();
                $.each(cities, function (key, value) {
                    $('select[name=city]').append('<option value=' + value.id + '>' + value.city + '</option>');
                });
            });
        });
    </script>
	<script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.date').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
            });
            
        });
    </script>
@endsection
