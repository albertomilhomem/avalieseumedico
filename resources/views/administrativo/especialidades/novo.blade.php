@extends('layouts.admin')

@section('head')
<title>Área Administrativa - Nova Especialidade</title>
@endsection

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">

        <div class="panel panel-default">
            <div class="panel-heading">
                Nova Especialidade
            </div>

            <div class="panel-body"> 
                @include('common.errors')               
                <!-- New Task Form -->
                <form action="{{ action('Administrativo\EspecialidadeController@store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="txtNome" class="col-sm-3 control-label">Nome</label>

                        <div class="col-sm-6">
                            <input type="text" name="nome" id="txtNome" class="form-control" value="{{ old('nome') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Descrição</label>

                        <div class="col-sm-6">
                            <textarea name="descricao" id="txtEspecialidadeDescricao" class="form-control" value="{{ old('descricao') }}"></textarea> 
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Adicionar Especialidade
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        @if (count($especialidades) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Especialidades
            </div>

            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-sm-9">Nome</th>
                            <th class="col-sm-1 text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($especialidades as $especialidade)
                        <tr>                            
                            <td>{{$especialidade->nome}}</td>
                            <td class="text-center">
                                @if(!count($especialidade->medicos)> 0)
                                <form action="{{ action('Administrativo\EspecialidadeController@destroy', $especialidade->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash"></i> Deletar
                                    </button>
                                </form>
                                @endif
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection