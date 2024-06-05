@extends('layouts.app')

@section('content')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
	
<form action="/admin/available_list/" method="post" action="csrf_field()">
		{{ csrf_field() }}

    <h3 class="page-title">Profissionais Disponíveis</h3>
	
	
	<br><br><br>
		<div class="container">
		  <div class="row">
			<div class="col-sm-4">
				<div class="row">
				  <div class="col-xs-9 form-group">
						{!! Form::label('start_time', trans('abrigosoftware.services.fields.start-time').'*', ['class' => 'control-label']) !!}
						{!! Form::text('start_time', old('start_time'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
						<p class="help-block"></p>
						@if($errors->has('start_time'))
							<p class="help-block">
								{{ $errors->first('start_time') }}
							</p>
						@endif
					</div>
				</div>
				<div class="row">
					<div class="col-xs-9 form-group">
							{!! Form::label('end_time', trans('abrigosoftware.services.fields.end-time').'*', ['class' => 'control-label']) !!}
							{!! Form::text('end_time', old('end_time'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
							<p class="help-block"></p>
							@if($errors->has('end_time'))
								<p class="help-block">
									{{ $errors->first('end_time') }}
								</p>
							@endif
					</div>
				</div>
				
				<div class="row">	

					<br>
					
					<button type="submit" class="btn btn-primary btn-lg btn-block">Ver disponíveis</button>
					
				</div>
				<br> <br> <br> 
				<div>
					<h3><strong>Inicio:  {{$start_time}}   
					
					<br><br><br>
					
					Fim:  {{$end_time}}</strong><h3>
					<br>
			
					
				</div>
				 
			</div>
			<div class="col-sm-8">
				
								
				<div>
					<h1>Listagem de profissionais disponíveis:</h1>
 
 
					@forelse ($users as $user)
		
					<li>{{ $user->name }}</li>
			
					@empty
		
					<p>Nenhuma profissional disponível</p>
			
					@endforelse
			
				</div> 
			</div>
			<br>
		  </div>
		 
		 
		  
		</div>
	  </br>
	
     <hr>
	 
	 
	 
	<div id='calendar'></div>
	
</form>

@stop

@section('javascript')
    @parent
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/locale/pt-br.js'></script>
	
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
				locale: 'pt-br',
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay,listMonth'
				},
                // put your options and callbacks here
                {{--events : [
                        @foreach($events as $event)
                        @if($event->due_date)
                    {
                        title : '{{ $event->name }}',
                        start : '{{ \Carbon\Carbon::createFromFormat(config('app.date_format'),$event->due_date)->format('Y-m-d') }}',
                        url : '{{ url('tasks').'/'.$event->id.'/edit' }}'
                    },
                        @endif
                    @endforeach
                ]--}}
				events: function(start, end, timezone, callback) {
					jQuery.ajax({
						url: '{{route('admin.AvailableProfessionals.getAvailablesList')}}',
						type: 'POST',
						dataType: 'json',
						data: {
							_token: window._token,
							start: start.format(),
							end: end.format()
						},
						success: function(doc) {
							var events = [];
							if(doc){
								$.each( doc, function(key, r ) {
									console.log(r);
									events.push({
										id: r.id,
										title: r.name,
										start: r.start_time.date,
										end: r.end_time
									});
								});
							}
							callback(events);
						}
					});
				}
            })
        });
    </script>
	
	<script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.datetime').datetimepicker({
                format: "{{ config('app.datetime_format_moment') }}",
                locale: "{{ App::getLocale() }}",
                sideBySide: true,
				
            });
            
        });
    </script>
            
@stop
