@extends('layouts.app')
@section('content')
    <h3 class="page-title">@lang('abrigosoftware.subscriptions.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.subscriptions.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_create')
        </div>
        
        <div class="panel-body">


            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('service_type_id', trans('abrigosoftware.subscriptions.fields.service-type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('service_type_id', $service_types, old('service_type_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('service_type_id'))
                        <p class="help-block">
                            {{ $errors->first('service_type_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('service_category_id', trans('abrigosoftware.subscriptions.fields.service-category').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('service_category_id', $service_categories, old('service_category_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('service_category_id'))
                        <p class="help-block">
                            {{ $errors->first('service_category_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('client_id', trans('abrigosoftware.subscriptions.fields.client').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('client_id', $clients, old('client_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('client_id'))
                        <p class="help-block">
                            {{ $errors->first('client_id') }}
                        </p>
                    @endif
                </div>
            </div>
			
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('status_id', trans('abrigosoftware.subscriptions.fields.status').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('status_id'))
                        <p class="help-block">
                            {{ $errors->first('status_id') }}
                        </p>
                    @endif
                </div>
            </div>
			 <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('value_service', 'Valor de Cada service*', ['class' => 'control-label']) !!}
                    {!! Form::text('value_service', old('value_service'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('value_service'))
                        <p class="help-block">
                            {{ $errors->first('value_service') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="panel panel-default">
				<div class="panel-heading">
					Escolha os itens adicionais
				</div>
				<div class="panel-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Item Adicional</th>
							</tr>
						</thead>
						 <tbody id="itens-adicionais">
							<tr data-index="1">
							<td>
							{!! Form::select('additionals[1][id]', $additionals, old('additionals[1][id]', isset($field) ? $field->value: ''), ['class' => 'form-control select2']) !!}
							
							</td>
								<td class='col-md-6'>
									@foreach(old('additionals', []) as $index => $data)
											@include('admin.agendamento_admin.additionals_row', [
												'index' => $index
											])
										@endforeach
										<p class="help-block"></p>
									@if($errors->has('additionals'))
										<p class="help-block">
											{{ $errors->first('additionals') }}
										</p>
									@endif
								</td>
								
							</tr>
							
						 </tbody>
					</table>
					<a href="#" class="btn btn-success pull-right add-new">Adicionar Item Adicional</a>
				</div>
			</div>
            <div class="panel panel-default">
				<div class="panel-heading">
					Informe o tempo total de cada service e a Quantidade de vagas
				</div>
				<div class="panel-body">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>{!! Form::label('total_time', trans('abrigosoftware.services.fields.total-time').'*', ['class' => 'control-label']) !!}</th>
								<th> Quantidade de Vagas</th>
							</tr>
						</thead>
						 <tbody id="itens-adicionais">
							<tr data-index="1">
									
								<td class='col-md-3 align-items-center'>
									<div class="form-group multiple-form-group input-group">
                
										 <span class="input-group-btn">
													<button type="button" class="btn btn-danger btn-removeTotalTime">-</button>
										</span>
									   
										<input type="number" value="1" name="total_time" id="total_time" class="form-control" style="font-size:large;text-align:center;">
											
										
										<span class="input-group-btn">
											<button type="button" class="btn btn-success btn-addTotalTime">+</button>
										</span>
									</div>
								 
								</td>
								<td class='col-md-3 align-items-center '>
									<div class="form-group2 multiple-form-group input-group">
                
										 <span class="input-group-btn">
													<button type="button" class="btn btn-danger btn-removeEmployees">-</button>
										</span>
									   
										<input type="number" value="1" name="qt_employees" id="qt_employees" class="form-control" style="font-size:large;text-align:center;">
											
										
										<span class="input-group-btn">
											<button type="button" class="btn btn-success btn-addEmployees">+</button>
										</span>
									</div>
								 
								</td>
							</tr>							
						 </tbody>
					</table>					
				</div>
			</div>
            
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('startDay', trans('Escolha o dia de renovação da Assinatura').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('startDay', old('startDay'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('startDay'))
                        <p class="help-block">
                            {{ $errors->first('startDay') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('startTime', 'Horário de inicio das services*', ['class' => 'control-label']) !!}
                    {!! Form::text('startTime', old('startTime'), ['class' => 'form-control time', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('startTime'))
                        <p class="help-block">
                            {{ $errors->first('startTime') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('products_included', trans('abrigosoftware.services.fields.products-included').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('products_included', 0) !!}
                    {!! Form::checkbox('products_included', 1, old('products_included', old('products_included'))) !!}
                    <p class="help-block"></p>
                    @if($errors->has('products_included'))
                        <p class="help-block">
                            {{ $errors->first('products_included') }}
                        </p>
                    @endif
                </div>
            </div>
		    <div class="row">
                <div class="col-xs-12 form-group">
                    Dias Da semana
                </div>
            </div>
			
				<div class="form-check">
					@if($segunda == 1)
						<input type="checkbox" class="form-check-input" value="1" name="segunda" id="segunda" checked>
					@else
						<input type="checkbox" class="form-check-input" value="1" name="segunda" id="segunda">
					@endif
					
					<label class="form-check-label" for="segunda">segunda</label>
			   </div>
			   <div class="form-check">
					@if($terca == 1)
						<input type="checkbox" class="form-check-input" value="1" name="terca" id="terca" checked>
					@else
						<input type="checkbox" class="form-check-input" value="1" name="terca" id="terca">
					@endif
					
					<label class="form-check-label" for="terca">terca</label>
			   </div>
			   <div class="form-check">
					@if($quarta == 1)
						<input type="checkbox" class="form-check-input" value="1"  name="quarta"  id="quarta" checked>
					@else
						<input type="checkbox" class="form-check-input" value="1" name="quarta"  id="quarta">
					@endif
					
					<label class="form-check-label" for="quarta">quarta</label>
			   </div>
			   <div class="form-check">
					@if($quinta == 1)
						<input type="checkbox" class="form-check-input" value="1"  name="quinta"  id="quinta" checked>
					@else
						<input type="checkbox" class="form-check-input" value="1" name="quinta"  id="quinta">
					@endif
					
					<label class="form-check-label" for="quinta">quinta</label>
			   </div>
			   <div class="form-check">
					@if($sexta == 1)
						<input type="checkbox" class="form-check-input" value="1"  name="sexta"  id="sexta" checked>
					@else
						<input type="checkbox" class="form-check-input" value="1" name="sexta"  id="sexta">
					@endif
					
					<label class="form-check-label" for="sexta">sexta</label>
			   </div>
				
				
				<div class="form-check">
					@if($sabado == 1)
						<input type="checkbox" class="form-check-input" value="1"  name="sabado"  id="sabado" checked>
					@else
						<input type="checkbox" class="form-check-input" value="1" name="sabado"  id="sabado">
					@endif
					
					<label class="form-check-label" for="sabado">Sabado</label>
			   </div>
			   
				<div class="form-check">
					@if($domingo == 1)
						<input type="checkbox" class="form-check-input" value="1"  name="domingo"  id="domingo" checked>
					@else
						<input type="checkbox" class="form-check-input" value="1" name="domingo"  id="domingo">
					@endif
					
					<label class="form-check-label" for="Domingo">Domingo</label>
			   </div>
			 
			
			
        </div>
	</div>


    {!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


@section('javascript')
    @parent

    
<script type="text/javascript">

    $(function () {
		var $city = 1;
		
		$('.select').on("change",function(event1){
			
			$value1 = event1.currentTarget.value;
	
			
			$("#valor").val($value1);
				
		});
		
		
		$("#valor").val($city);
	});
	
 </script>

<script>
(function ($) {
	$(function () {
		
		
		 
		var $days_payments = 1;
		
        var addDays_payments = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            
            var $formGroupClone = $formGroup;			
          
			$days_payments += 1;
            $formGroupClone.find('input').val($days_payments);
        };

        var removeDays_payments = function (event) {
            event.preventDefault();

             var $formGroup = $(this).closest('.form-group');
            
            var $formGroupClone = $formGroup;
			
            if($days_payments > 1){
				$days_payments -= 1;
			}
            $formGroupClone.find('input').val($days_payments);
            
        };
        $(document).on('click', '.btn-addDays_payments', addDays_payments);
        $(document).on('click', '.btn-removeDays_payments', removeDays_payments);

    });
	
	
	
    $(function () {
		
		
		 
		var $total_time = 1;
		
        var addTotalTime = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            
            var $formGroupClone = $formGroup;			
          
			$total_time += 1;
            $formGroupClone.find('input').val($total_time);
        };

        var removeTotalTime = function (event) {
            event.preventDefault();

             var $formGroup = $(this).closest('.form-group');
            
            var $formGroupClone = $formGroup;
			
            if($total_time > 1){
				$total_time -= 1;
			}
            $formGroupClone.find('input').val($total_time);
            
        };
        $(document).on('click', '.btn-addTotalTime', addTotalTime);
        $(document).on('click', '.btn-removeTotalTime', removeTotalTime);

    });
	
    $(function () {
		var $qt_employees = 1;
		
        var addEmployees = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group2');
            
            var $formGroupClone = $formGroup;			
          
			$qt_employees += 1;
            $formGroupClone.find('input').val($qt_employees);
        };

        var removeEmployees = function (event) {
            event.preventDefault();

             var $formGroup = $(this).closest('.form-group2');
            
            var $formGroupClone = $formGroup;
			
            if($qt_employees > 1){
				$qt_employees -= 1;
			}
            $formGroupClone.find('input').val($qt_employees);
            
        };
        $(document).on('click', '.btn-addEmployees', addEmployees);
        $(document).on('click', '.btn-removeEmployees', removeEmployees);

    });
})(jQuery);
</script>

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
                      
            $('.datetime').datetimepicker({
                date:moment(""),
				format:"DD",
				sideBySide: true,
				
            });
            
        });
    </script>
	 <script>
        $(function(){
                      
            $('.time').datetimepicker({
                date:moment(""),
				format:"HH:mm",
				sideBySide: true,
				
            });
            
        });
    </script>
   <script>
        $('.add-new').click(function () {
            var tableBody = $(this).parent().find('tbody');
            var template = $('#' + tableBody.attr('id') + '-template').html();
            var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
            if (isNaN(lastIndex)) {
                lastIndex = 0;
            }
            tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
            return false;
        });
        $(document).on('click', '.remove', function () {
            var row = $(this).parentsUntil('tr').parent();
            row.remove();
            return false;
        });
        </script>
		{{--<script>
        $("#selectbtn-assigned_to").click(function(){
            $("#selectall-assigned_to > option").prop("selected","selected");
            $("#selectall-assigned_to").trigger("change");
        });
        $("#deselectbtn-assigned_to").click(function(){
            $("#selectall-assigned_to > option").prop("selected","");
            $("#selectall-assigned_to").trigger("change");
        });
		</script>--}}
@stop