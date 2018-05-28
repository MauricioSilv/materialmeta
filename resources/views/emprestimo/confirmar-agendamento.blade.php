@extends('materialhome')
@section('conteudo')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<i class="far fa-clock"></i> Agendamento do Material
		</div>
		<div class="panel-body">
			<form method="POST" action="{{ action('AgendamentoController@agendar') }}">
				{!! csrf_field() !!} 

				 <div class="form-group">
					<label>Professor</label>
				<select class="form-control" name="professor_id">
						@foreach($professores as $professor)
							<option value="{{ $professor->id }}">{{ $professor->name }}</option>
						@endforeach
					</select>
			
			</div>
				<div class="form-group">
					<label>Material</label>
					<input type="hidden" name="material_id" value="{{ $material_id }}">
					<input type="text" disabled="disabled" value="{{ $material->nome }}" class="form-control" name="material"/>
				</div>

				<div class="form-group">
					<label>Data</label>
					<input type="date" class="form-control" name="data_agendamento" value="data_agendamento" />
				</div>

				<button class="btn btn-block-mobile btn-success" style="margin-bottom: 4px;">
					<i class="fas fa-check-circle"></i> Registrar Agendamento
				</button>

				<a href="/materiais" class="btn  btn-block-mobile btn-default">
					<i class="fas fa-reply"></i> Voltar para a lista
				</a>
			</form>
		</div>
	</div> 
@endsection