@extends('layouts.app')

@section('content')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <h3 class="page-title">Calendário de Faxinas</h3>

    <div id='calendar'></div>
    
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
						url: '{{route('admin.all_clens_calendar.filter')}}',
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
										start: r.start_time,
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
@stop
