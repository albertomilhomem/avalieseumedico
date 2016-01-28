@extends('layouts.admin')

@section('head')
<title>Área Administrativa - Novo Médico</title>
@endsection

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Novo Médico
            </div>

            <div class="panel-body">
                @include('common.errors')

                <!-- New Task Form -->
                <form action="{{ action('Administrativo\MedicoController@store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="txtNome" class="col-sm-3 control-label">Nome</label>

                        <div class="col-sm-6">
                            <input type="text" name="nome" id="txtNome" class="form-control" value="{{ old('task') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ddlEspecialidade" class="col-sm-3 control-label">Especialidade</label>

                        <div class="col-sm-6">
                            <select class="form-control" name="especialidade_id" id="ddlEspecialidade">
                                @foreach($especialidades as $especialidade)

                                <option value="{{ $especialidade->id }}">{{$especialidade->nome}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ddlClinica" class="col-sm-3 control-label">Clinica</label>

                        <div class="col-sm-6">
                            <select class="form-control" name="clinica_id" id="ddlClinica">
                                @foreach($clinicas as $clinica)

                                <option value="{{ $clinica->id }}">{{$clinica->nome}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Adicionar Médico
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        @if (count($medicos) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Médicos
            </div>

            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-sm-5">Nome</th>
                            <th class="col-sm-5">Clinica</th>
                            <th class="col-sm-1">Especialidade</th>
                            <th class="col-sm-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($medicos as $medico)
                        <tr>
                            <td>{{$medico->nome}}</td>
                            <td>{{$medico->clinica->nome}}</td>
                            <td>{{$medico->especialidade->nome}}</td>
                            <td class="text-center">
                            @if(count($medico->avaliacoes) == 0)
                                <form action="{{ action('Administrativo\MedicoController@destroy', $medico->id) }}" method="POST">
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