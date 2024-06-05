]@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.trainings.title')</h3>
    
    {!! Form::model($training, ['method' => 'PUT', 'route' => ['admin.trainings.update', $training->id]]) !!}
	
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('abrigosoftware.as_name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
				 <div class="col-xs-12 form-group">
                    {!! Form::label('duration', trans('abrigosoftware.trainings.fields.duration').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('duration', old('duration'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('duration'))
                        <p class="help-block">
                            {{ $errors->first('duration') }}
                        </p>
                    @endif
                </div>
				<div class="col-xs-12 form-group">
                    {!! Form::label('video_id', trans('abrigosoftware.trainings.fields.video_id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('video_id', old('video_id'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('video_id'))
                        <p class="help-block">
                            {{ $errors->first('video_id') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
						{!! Form::label('status_id', trans('abrigosoftware.services.fields.status') . '*', ['class' => 'control-label']) !!}
						{!! Form::select('status_id', ['Desativado', 'Ativo'], old('status_id'), ['class' => 'form-control select2', 'required' => '']) !!}
						<p class="help-block"></p>
						@if ($errors->has('status_id'))
							<p class="help-block">
								{{ $errors->first('status_id') }}
							</p>
						@endif
				</div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('lifetime', trans('abrigosoftware.trainings.fields.lifetime').' '.trans('abrigosoftware.as_days').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('lifetime', old('lifetime'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lifetime'))
                        <p class="help-block">
                            {{ $errors->first('lifetime') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('mandatory', trans('abrigosoftware.trainings.fields.mandatory').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('mandatory', ['Não', 'Sim'], old('mandatory'), ['class' => 'form-control select2', 'required' => '']) !!}
					  <p class="help-block"></p>
                    @if($errors->has('mandatory'))
                        <p class="help-block">
                            {{ $errors->first('mandatory') }}
                        </p>
                    @endif
                </div>
				
				
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('training_category_id', trans('abrigosoftware.as_category').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('training_category_id',  $category,  old('training_category_id'),  ['class' => 'form-control select2', 'required' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('training_category_id'))
                        <p class="help-block">
                            {{ $errors->first('training_category_id') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('prerequisite_training_id', trans('abrigosoftware.trainings.fields.prerequisite').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('prerequisite_training_id', $release_order, old('prerequisite_training_id'),  ['class' => 'form-control select2', 'placeholder' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('prerequisite_training_id'))
                        <p class="help-block">
                            {{ $errors->first('prerequisite_training_id') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('author_user_id', trans('abrigosoftware.trainings.fields.author').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('author_user_id',  $author,  old('author_user_id'),  ['class' => 'form-control select2', 'required' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('author_user_id'))
                        <p class="help-block">
                            {{ $errors->first('author_user_id') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('responsable_user_id', trans('abrigosoftware.trainings.fields.responsable').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('responsable_user_id',  $responsable,  old('responsable_user_id'),  ['class' => 'form-control select2', 'required' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('responsable_user_id'))
                        <p class="help-block">
                            {{ $errors->first('responsable_user_id') }}
                        </p>
                    @endif
                </div>
			
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
	
	@if($count_questions > 0 )
		
		@foreach ($questions as $question) 						  
			<div class="row">							
					<div class="col-xs-12">
						<div class="box">				
							<div class="box-body table-responsive no-padding">
								<table class="table">
									<thead>
										<tr>                      
											<th>@lang('abrigosoftware.trainings.fields.question')</th>
											<th>@lang('abrigosoftware.trainings.fields.answer_a')</th>
											<th>@lang('abrigosoftware.trainings.fields.answer_b')</th>
											<th>@lang('abrigosoftware.trainings.fields.answer_c')</th>
											<th>@lang('abrigosoftware.trainings.fields.answer_d')</th>
											<th>@lang('abrigosoftware.trainings.fields.right_answer')</th>
										</tr>
									</thead>
									<tbody>								
										<tr>
											<td>{{$question->question}}</td>					  
											<td>{{$question->answer_a}}</td>	
											<td>{{$question->answer_b}}</td>	
											<td>{{$question->answer_c or '-'}}</td>	
											<td>{{$question->answer_d or '-'}}</td>	
											<td>{{$question->right_answer or '-'}}</td>	
											<td>
												@can('trainings_delete')
													{!! Form::open(array(
														'style' => 'display: inline-block;',
														'method' => 'DELETE',
														'onsubmit' => "return confirm('".trans("abrigosoftware.as_are_you_sure")."');",
														'route' => ['admin.training.deleteQuestion', $question->id])) !!}
													{!! Form::submit(trans('abrigosoftware.as_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
													{!! Form::close() !!}
												@endcan
											</td>
										</tr>
									</tbody>
								</table>
								
							</div>           
						</div>
					</div>
				</div>
			
			
		@endforeach
	@endif
	@if($count_questions < 4 )
		<p>
		
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal">
				@lang('abrigosoftware.trainings.fields.newQuestion')
			</button>        
		</p>
	@endif
   

    <!-- Button trigger modal -->
	

	<!-- Modal -->
	<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="ModalLabel">@lang('abrigosoftware.trainings.fields.newQuestion')</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <form method="POST" action="{{ route('admin.trainings.createQuestions', $training->id) }}">
					{{ csrf_field() }}
			    <div class="modal-body">
					<div class="col-xs-12 form-group">
				
						{!! Form::label('question', trans('abrigosoftware.trainings.fields.question').'*', ['class' => 'control-label']) !!}
						{!! Form::text('question', old('question'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    
						 <p class="help-block"></p>
						@if($errors->has('question'))
							<p class="help-block">
								{{ $errors->first('question') }}
							</p>
						@endif
					</div>
					<div class="col-xs-12 form-group">
				
						{!! Form::label('answer_a', trans('abrigosoftware.trainings.fields.answer_a').'*', ['class' => 'control-label']) !!}
						{!! Form::text('answer_a', old('answer_c'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    
						 <p class="help-block"></p>
						@if($errors->has('answer_a'))
							<p class="help-block">
								{{ $errors->first('answer_c') }}
							</p>
						@endif
					</div>
						
					<div class="col-xs-12 form-group">
				
						{!! Form::label('answer_b', trans('abrigosoftware.trainings.fields.answer_b').'*', ['class' => 'control-label']) !!}
						{!! Form::text('answer_b', old('answer_b'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    
						 <p class="help-block"></p>
						@if($errors->has('answer_b'))
							<p class="help-block">
								{{ $errors->first('answer_b') }}
							</p>
						@endif
					</div>
					<div class="col-xs-12 form-group">
				
						{!! Form::label('answer_c', trans('abrigosoftware.trainings.fields.answer_c').'*', ['class' => 'control-label']) !!}
						{!! Form::text('answer_c', old('answer_c'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    
						 <p class="help-block"></p>
						@if($errors->has('answer_c'))
							<p class="help-block">
								{{ $errors->first('answer_c') }}
							</p>
						@endif
					</div>
					<div class="col-xs-12 form-group">
				
						{!! Form::label('answer_d', trans('abrigosoftware.trainings.fields.answer_d').'*', ['class' => 'control-label']) !!}
						{!! Form::text('answer_d', old('answer_d'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    
						 <p class="help-block"></p>
						@if($errors->has('answer_d'))
							<p class="help-block">
								{{ $errors->first('answer_d') }}
							</p>
						@endif
					</div>
					
					<div class="col-xs-12 form-group">
                    {!! Form::label('right_answer', trans('abrigosoftware.trainings.fields.author').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('right_answer',  ['a','b','c','d'], ['class' => 'form-control select2', 'required' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('right_answer'))
                        <p class="help-block">
                            {{ $errors->first('right_answer') }}
                        </p>
                    @endif
                </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('abrigosoftware.as_close')</button>
				<button type="submit" class="btn btn-success check" id="btn-atualizar">@lang('abrigosoftware.trainings.fields.newQuestion')</button></center>			
			  </div>
		</form>
		</div>
	  </div>
	</div>
@stop

