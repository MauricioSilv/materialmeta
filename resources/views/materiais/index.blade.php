@extends('materialhome')

@section('content-header')

 
	<section class="content-header">
	  <h1>
	    <i class="fa fa-archive"></i> Cadastro de Materiais
	    <small>Gerenciamento de materiais</small>
		<a href="{{ action('MaterialController@create') }}" class="btn pull-right btn-success">
			<i class="fa fa-plus-circle"></i> Criar novo Material
		</a>
	  </h1>
	</section>

@endsection

@section('conteudo')

 <form class="sidebar-form">
        <div class="input-group">
          <input type="text" value="{{ $pesquisa }}" name="pesquisa" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
<div class="panel panel-primary">

	<div class="panel-heading">
		<i class="fa fa-list"></i> Lista de Materiais
	</div>



	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="1%">Código</th>
					<th>Nome</th>
					<th>Estado Atual</th>
					<th>Tipo</th>
					<th>Quantidade</th>
					<th>Marca</th>
					<th width="30%">Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($materiais as $material)
					<tr>
						<td>{{ $material->id }}</td>
						<td>{{ $material->nome }}</td>
						<td>{{ $material->estado_atual }}</td>
						<td>{{ $material->tipo }}</td>
						<td>{{ $material->quantidade }}</td>
						<td>{{ $material->marca }}</td>
						<td>
							<a href="{{action('EmprestimoController@index', $material->id)}}" class="btn btn-success">
								<i class="fa fa-check-square-o "></i> Emprestar
							</a>

							<a href="{{action('MaterialController@edit' ,$material->id)}}" class="btn btn-default">
								<i class="fa fa-edit"></i> Editar
							</a>

							 <form action="{{ action('MaterialController@destroy', $material->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Deletar? A confirmação apagará PERMANENTEMENTE!')) { return true } else {return false };">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"> Excluir</i></button>
                             </form>
						</td>
					</tr>
				@endforeach
			</tbody>
			<tfoot>
				
			</tfoot>
		</table>
	</div>
</div>
@endsection