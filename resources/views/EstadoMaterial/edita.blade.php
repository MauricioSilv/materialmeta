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

 <section class="content">
        <div class="container-fluid">
            <div class="">
                <div class="col-lg-12 col-m12 col-sm-12 col-xs-12">
                    <div class"">
                        <div class="header">
            <form action="{{ action('EstadoMaterialController@update', $estados->id) }}" method="POST">
            	 {!! method_field('PUT') !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Estado Atual</label>
                    <input type="text" class="form-control" name="estado_atual"/>
                </div>
             
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plus-circle fa-lg"></i> Salvar
                </button>
                <a class="btn btn-default pull-right" href="{{ action('EstadoMaterialController@index') }}">
                    <i class="fa fa-arrow-left"></i> Voltar para a lista
                </a>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</section>
@stop