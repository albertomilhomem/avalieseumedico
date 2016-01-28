@extends('layouts.admin')

@section('head')
<title>Área Administrativa - Nova Clinica</title>
@endsection

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Nova Clinica
            </div>

            <div class="panel-body">

                @include('common.errors')

                <!-- New Task Form -->
                <form action="{{ action('Administrativo\ClinicaController@store')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="txtClinicaNome" class="col-sm-3 control-label">Nome</label>

                        <div class="col-sm-6">
                            <input type="text" name="nome" id="txtClinicaNome" class="form-control" value="{{ old('nome') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtClinicaTelefone" class="col-sm-3 control-label">Telefone</label>

                        <div class="col-sm-6">
                            <input type="text" name="telefone" id="txtClinicaTelefone" class="form-control" value="{{ old('telefone') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtClinicaRua" class="col-sm-3 control-label">Rua</label>

                        <div class="col-sm-6">
                            <input type="text" name="rua" id="txtClinicaRua" class="form-control" value="{{ old('rua') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtClinicaBairro" class="col-sm-3 control-label">Bairro</label>

                        <div class="col-sm-6">
                            <input type="text" name="bairro" id="txtClinicaBairro" class="form-control" value="{{ old('bairro') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtClinicaNumero" class="col-sm-3 control-label">Número</label>

                        <div class="col-sm-6">
                            <input type="text" name="numero" id="txtClinicaNumero" class="form-control" value="{{ old('numero') }}">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Adicionar Clinica
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-sm-offset-1 col-sm-10">

        @if (count($clinicas) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Clinicas
            </div>

            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-sm-4">Nome</th>
                            <th class="col-sm-2">Telefone</th>
                            <th class="col-sm-2">Rua</th>
                            <th class="col-sm-1">Bairro</th>
                            <th class="col-sm-1">Número</th>
                            <th class="col-sm-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clinicas as $clinica)
                        <tr>

                            <td>{{$clinica->nome}}</td>
                            <td>{{$clinica->telefone}}</td>
                            <td>{{$clinica->rua}}</td>
                            <td>{{ $clinica->bairro }}</td>
                            <td>{{ $clinica->numero }}</td>
                            <td>
                                @if(!count($clinica->medicos)> 0)
                                <form action="{{ action('Administrativo\ClinicaController@destroy', $clinica->id) }}" method="POST">
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