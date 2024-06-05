@extends('layouts.layout-coupon')
@section('pagina_titulo', 'Editar cupom')

@section('pagina_conteudo')
	<div class="container">
		<div class="row">
			<h3>Editar cupom "{{ $registro->nome }}"</h3>
			<form method="POST" action="{{ route('admin.coupons.update', $registro->id) }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}

				@include('admin.discount_coupon._form')

				<button type="submit" class="btn blue">Atualizar</button>
			</form>
		</div>
	</div>
@endsection