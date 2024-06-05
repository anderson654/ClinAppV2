@extends('layouts.layout') 

<br><br><br><br>
	


<form action="/agendamento/checkout/{{$service->id}}" method="post" action="csrf_field()">
						{{ csrf_field() }}
						

 
<div class="container-fluid">
	<div class="row no-gutters">
	
	<body onload="disableDays()"/>
	
		<!-- Inicio Radio dia Semana --> 
		<div class="col-md-9" align="left">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-9 justify-content-center">
					<div align="center">
							
						<p><h4 style="color:#e6b21f;text-align:center;">Escolha o dia da semana que deseja o Serviço</h4></p>
				
						<div class="btn-group-toggle flex-wrap " data-toggle="buttons">
					
					
							<label class="btn btn-outline-primary active">
								<input  type='radio' name='diasemana' value="1" id="segunda" checked onfocus="disableDays();">
								 <H4> Segunda </H4>
							</label>
							
							<label class="btn btn-outline-primary">
							  <input type='radio' name='diasemana' value="2" id="terca" onfocus="disableDays();">
							 <H4> Terça-Feira </H4>
							</label>
							
							<label class="btn btn-outline-primary">
							  <input type='radio' name='diasemana' value="3"  id="quarta" onfocus="disableDays();">
							  <H4> Quarta-Feira </H4>
							</label>
						
							<label class="btn btn-outline-primary">
							  <input type='radio' name='diasemana' value="4"  id="quinta" onfocus="disableDays();">
							  <H4> Quinta-Feira </H4>
							</label>					
						
							<label class="btn btn-outline-primary">
							  <input type='radio' name='diasemana' value="5"  id="Sexta" onfocus="disableDays();">
							  <H4> Sexta-Feira </H4>
							</label>
							
							<label class="btn btn-outline-primary">
							  <input type='radio' name='diasemana' value="6"  id="Sabado" onfocus="disableDays();">
							  <H4> Sabado </H4>
							</label>
							
							<label class="btn btn-outline-primary">
							  <input type='radio' name='diasemana' value="0"  id="Domingo" onfocus="disableDays();">
							  <H4> Domingo </H4>
							</label>			
					
						</div>
					</div>			
				</div>
				<div class="col-md-1">
				</div>
			</div> </br><!--fim div row> -->
				
				<div class="container">
					<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4 form-group">
							{!! Form::label('start_date', trans('abrigosoftware.services.fields.start-time').'*', ['class' => 'control-label']) !!}
							{!! Form::text('start_date', old('start_date'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
							
							<p class="help-block"></p>
							@if($errors->has('start_time'))
								<p class="help-block">
									{{ $errors->first('start_time') }}
								</p>
							@endif
						</div>
						
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<div id="datetime"></div>
								</div>
							</div>
						</div>
						
						<div class="col-md-5">
						
							<div align="center">
							
								<p><h4 style="color:#e6b21f;text-align:center;">Escolha o horário de início</h4></p>
				
								<div class="btn-group-toggle flex-wrap " data-toggle="buttons">
									
									@if ( $service->total_time == 7 || $service->total_time == 8 || $service->total_time == 9 
									   || $service->total_time == 14 || $service->total_time == 15 || $service->total_time == 16 || $service->total_time == 17 || $service->total_time == 18
									   || $service->total_time > 21 )
									   
										<label class="btn btn-outline-primary active">
											<input  type='radio' name='start_time' value="8:00" id="800" checked>
											<H4> 8:00 </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="8:30" id="830">
											<H4> 8:30 </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="9:00"  id="900">
										  <H4> 9:00 </H4>
										</label>
									
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="9:30"  id="930">
										  <H4> 9:30 </H4>
										</label>					
									
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="10:00"  id="1000">
										  <H4> 10:00 </H4>
										</label>								
											
														
									@elseif ( $service->total_time == 6 || $service->total_time == 12 || $service->total_time == 13 )
										
										<label class="btn btn-outline-primary">
											<input  type='radio' name='start_time' value="8:00" id="800" checked>
											<H4> 8:00 </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="8:30" id="830">
										 <H4> 8:30 </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="9:00"  id="900">
										  <H4> 9:00 </H4>
										</label>
									
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="9:30"  id="930">
										  <H4> 9:30 </H4>
										</label>					
									
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="10:00"  id="1000">
										  <H4> 10:00 </H4>
										</label>								
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="11:00"  id="1100" >
										  <H4> 11:00 </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="12:00"  id="1200">
										  <H4> 12:00 </H4>
										</label>

										
									@else 
												
										<label class="btn btn-outline-primary">
											<input  type='radio' name='start_time' value="8:00" id="800" checked>
											<H4> 8:00 </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="8:30" id="830">
										 <H4> 8:30 </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="9:00"  id="900">
										  <H4> 9:00 </H4>
										</label>
									
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="9:30"  id="930">
										  <H4> 9:30 </H4>
										</label>					
									
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="10:00"  id="1000">
										  <H4> 10:00 </H4>
										</label>								
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="11:00"  id="1100" >
										  <H4> 11:00 </H4>
										</label>
										
										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="12:00"  id="1200">
										  <H4> 12:00 </H4>
										</label>

										<label class="btn btn-outline-primary">
										  <input type='radio' name='start_time' value="13:30"  id="1230">
										  <H4> 13:30 </H4>
										</label>
									@endif

								</div>
							</div>
						</div>
					
					</div>
				</div>
			<div class="row">	
				<div class="col-md-11" align="center">
					<br>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Finalizar Agendamento</button>
					
				</div>	
				<div class="col-md-1">
				</div>
			</div>
				
		<!-- Fim coluna  -->
		<div  id="div-esquerda-valores" class="col-sm-3">

			
			  <p><h3 style="color:#e6b21f;text-align:center;"></p>
				@if ( $service->service_type_id == 1 )
					
					Faxina Residencial Comum
					
				@elseif ( $service->service_type_id == 2 )
					
					Faxina Residencial Express
					
				@else 
					
					Faxina Residencial Alto Brilho
				@endif
					
				
				</h3></p>
				<p><h5 style="color:#;text-align:center;">
							
				@if ( $service->address_type_id == 1 )
				
					<span id="iconTypehouse" class="fas fa-building"></span>
				
				@elseif ( $service->address_type_id == 2 )
				
					<span id="iconTypehouse" class="fas fa-home"></span>

				@endif
				
				
				@if ( $service->qt_bedrooms == 1 )
					
					1 Quarto
				
				@else
										
					{{$service->qt_bedrooms}} Quartos e 
					
				@endif
				
				@if ( $service->qt_bathrooms == 1 )
						1 Banheiro
				@else
					{{$service->qt_bathrooms}} Banheiros 
				
				@endif	
				
				
				

				<p><h3 style="color:#e6b21f;text-align:center;">Tempo Recomendado</h3>
					
				<h5 style="color:#00000;text-align:center;">
				<i class="fas fa-hourglass-start"></i>
				{{$service->total_time}} horas</h5></p>
								
				<p><h5 style="color:#e6b21f;text-align:center;">ATENÇÃO</h5></p>
				<h6 style="color:#;text-align:center;">
				<?php 
					if ( $service->total_time <= 9 ) {
						
						echo "Lhe atenderemos com 1 (UMA)  profissional";
					
					}elseif ( $service->total_time <= 18 ) {
						
						echo "Lhe atenderemos com 2 (DUAS) profissionais";
						
					}elseif ( $service->total_time <= 27 ) {
						
						echo "Lhe atenderemos com 3 (TRÊS) profissionais";
						
					}elseif ( $service->total_time <= 36 ) {
						
						echo "Lhe atenderemos com 4 (DUAS) profissionais";
						
					}else  
						
						echo "Lhe atenderemos com 5 (CINCO) profissionais";	
					?>
				
				
				
				<p><strong><h3 style="color:#e6b21f;text-align:center;">Valor de cada faxina</h3></strong></p>
				<p><h6 style="color:#;text-align:center;">
				@if ( $service->products_included == 1 ) 
					Com todos os produtos inclusos
				@else 
					Sem os produtos
				@endif
				</h6></p>
				
				<p><h4 style="color:#;text-align:center;">
				</h4></p>
							
				<p><h3 style="color:#1e4de8;text-align:center;"><strong>
				POR {{$service->total_value}},00</h3><strong></p>
				
				
				<strong><h3 style="color:#e6b21f;text-align:center;">			
				<span style="color:#000000;" id="iconRecorrencia" class="fas fa-history"></span>
				@if ( $service->service_category_id == 3 )
				
					Assinatura Semanal
				
				@elseif ( $service->service_category_id == 2 )
				
					Assinatura Quinzenal
					
				@else 
					
					Faxina Avulsa
					
				@endif	</h3></strong></span>
				
				
				

		</div>
		
		<div class="mobile fixed-top">
			
		</div>
		
	</div>	
	
</div>


@section('javascript')
    @parent
	
	<script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script> 
 
function disableDays() {	

 
	
 $(function(){
			
			
			var weekDisable = document.querySelector('input[name="diasemana"]:checked').value;
			
				if (  weekDisable == 0 ) {
					
					daysDisabled =[1,2,3,4,5,6];
					
				}else if ( weekDisable == 1 ) {
					
							daysDisabled = [0,2,3,4,5,6];
					
				}else if ( weekDisable == 2) {
					
							daysDisabled = [0,1,3,4,5,6];

				}else if ( weekDisable == 3 ) {
					
							daysDisabled = [0,1,2,4,5,6];

				}else if ( weekDisable == 4 ) {
					
							daysDisabled = [0,1,2,3,5,6];

				}else if ( weekDisable == 5 ) {
					
							daysDisabled = [0,1,2,3,4,6];

				}else if ( weekDisable == 6 ) {
					
							daysDisabled = [0,1,2,3,4,5];			
				}			
			
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 }, // Monday is the first day of the week
				daysOfWeekHighlighted: "0"
            });
			
            $('.datetime').data('DateTimePicker').destroy();
			
            $('.datetime').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
                sideBySide: true,
				minDate: new Date(new Date().getTime() + (2 * 24 * 60 * 60 * 1000)),//desabilta as proximas 48 horas para não agendar
				inline: true,
				sideBySide: true,
				daysOfWeekDisabled: daysDisabled
            });			
        });
}
</script>

 <script>
  $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 }, // Monday is the first day of the week
				daysOfWeekHighlighted: "0"
            });
            
            $('.datetime').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
                sideBySide: true,
				minDate: new Date(new Date().getTime() + (2 * 24 * 60 * 60 * 1000)),//desabilta as proximas 48 horas para não agendar
				inline: true,
				sideBySide: true
            });
			
        });

</script>

@stop
   
	
<style type="text/css">



#div-esquerda-valores{
  position:fixed;
  z-index:999; 
  right:25px; 
  top:118px;
  overflow:hidden;
  border:1px dashed #CCC;
  padding:6px;
  background-color: #F2F2F2;
  border-radius: 60px;
	.form-group {
				margin-bottom: 0;
			}

	
}	


@media only screen and (max-width: 400px) {
    .mobile-hide{ display: none !important; }
    }
    @media only screen and (max-width: 400px) {
    .mobile{ display: inline !important; }
    }
    @media only screen and (min-width: 500px) {
    .desktop-hide{ display: none !important; }
    }


</style>
