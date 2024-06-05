@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.trainings.title') </h3>
    
    <p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal">
			@lang('abrigosoftware.as_add_new')
		</button>
        
    </p>
   

    <!-- Button trigger modal -->
	

	<!-- Modal -->
	<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="ModalLabel">@lang('abrigosoftware.trainings.fields.create_new')</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <form method="PUT" action="{{ route('admin.trainings.create') }}">
					{{ csrf_field() }}
			  <div class="modal-body">
				<div class="col-xs-12 form-group">
				
						{!! Form::label('training_category_id', trans('abrigosoftware.as_category').'*', ['class' => 'control-label']) !!}
						{!! Form::select('training_category_id',  $category,  ['class' => 'form-control select2', 'required' => '']) !!}
						 <p class="help-block"></p>
						@if($errors->has('training_category_id'))
							<p class="help-block">
								{{ $errors->first('training_category_id') }}
							</p>
						@endif
					</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('abrigosoftware.as_close')</button>
				<button type="submit" class="btn btn-success check" id="btn-atualizar">@lang('abrigosoftware.trainings.fields.create_new')</button></center>			
			  </div>
		</form>
		</div>
	  </div>
	</div>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($trainings) > 0 ? 'datatable' : '' }} @can('trainings_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('trainings_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('abrigosoftware.as_name')</th>
						<th>@lang('abrigosoftware.trainings.fields.duration')</th>
						<th>@lang('abrigosoftware.as_statuses')</th>
						<th>@lang('abrigosoftware.trainings.fields.lifetime')</th>
						<th>@lang('abrigosoftware.as_category')</th>	
						<th>@lang('abrigosoftware.trainings.fields.mandatory')</th>					
						<th>@lang('abrigosoftware.trainings.fields.release_order')</th>
						<th>@lang('abrigosoftware.trainings.fields.prerequisite')</th>
						<th>@lang('abrigosoftware.trainings.fields.author')</th>
						<th>@lang('abrigosoftware.trainings.fields.responsable')</th>
                        
						<th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($trainings) > 0)
                        @foreach ($trainings as $training)
                            <tr data-entry-id="{{ $training->id }}">
                                @can('trainings_delete')
                                <td></td>
                                @endcan

                                <td field-key='title'>{{ $training->name }}</td>
								<td> {{$training->duration}}</td>
								<td> {{$training->status_id == 1 ? 'Ativo' : 'Desativado'}}</td>
								<td> {{$training->lifetime}} @lang('abrigosoftware.as_days')</td>
								<td> {{$training->training_category->title}}</td>
								<td> {{$training->mandatory == 1 ? 'Sim' : 'Não'}}</td>								
                                <td> {{$training->release_order}}</td>
								<td> {{$training->prerequisite->name or '-'}}</td>
								<td> {{$training->author->name or '-'}}</td>
								<td> {{$training->responsable->name or '-'}}</td>
								<td>
                                    @can('trainings_view')
                                    <a href="{{ route('admin.trainings.show',[$training->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                    @endcan
                                    @can('trainings_edit')
                                    <a href="{{ route('admin.trainings.edit',[$training->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
                                    @endcan
                                   
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('abrigosoftware.as_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
