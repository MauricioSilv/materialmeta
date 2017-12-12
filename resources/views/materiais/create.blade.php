@extends('materialhome')

@section('conteudo')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-plus"></i> Cadastro de Material
        </div>
        <div class="panel-body">
            <form action="{{ action('MaterialController@store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome"/>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="text" class="form-control" name="quantidade"/>
                </div>
                <div class="form-group">
                    <label>Marca</label>
                    <input type="text" class="form-control" name="marca"/>
                </div>
                <div class="form-group">
                    <label>Estado do Material</label>
                    <select class="form-control" name="estado_id">
                        @foreach($estados as $estado)
                            <option value="{{ $estado->id }}">
                                {{ $estado->estado_atual }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Tipo do Material</label>
                    <select class="form-control" name="tipo_id">
                        @foreach($tipos as $tipo)
                            <option value="{{ $tipo->id }}">
                                {{ $tipo->nome }}
                            </option>
                            
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plus-circle fa-lg"></i> Criar
                </button>
                <a class="btn btn-default pull-right" href="{{ action('MaterialController@index') }}">
                    <i class="fa fa-arrow-left"></i> Voltar para a lista
                </a>
            </form>
        </div>
    </div>
@stop