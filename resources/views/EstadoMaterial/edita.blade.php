@extends('materialhome')
 @section('content-header')
    <section class="content-header">
      <h1>
        <i class="fa fa-edit"></i> Editar Estado dos Materiais
        <small>Gerenciamento de materiais</small>
      </h1>
    </section>
@endsection
@section('conteudo')
@if($errors->count())
 <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-edit"></i> Editar Material
            </div>
            <div class="panel-body">
            <form action="{{ action('EstadoMaterialController@update', $estados->id) }}" method="POST">
            	 {!! method_field('PUT') !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Estado Atual</label>
                    <input type="text" class="form-control" name="estado_atual" value="{{ is_null(old('estado_atual')) ? $estados->estado_atual : old('estado_atual') }}" />
                </div>
             
                <button type="submit" style="margin-bottom: 4px;" class="btn  btn-block-mobile btn-success">
                    <i class="fa fa-plus-circle fa-lg"></i> Salvar
                </button>
                <a class="btn btn-block-mobile btn-default pull-right" href="{{ action('EstadoMaterialController@index') }}">
                    <i class="fas fa-reply"></i> Voltar para a lista
                </a>
            </form>
        </div>
    </div>
@stop