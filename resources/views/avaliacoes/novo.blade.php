@extends('layouts.default')

@section('head')
<title>Avalie Seu Médico - Nova Avaliação</title>
@endsection

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="alert alert-info">
            <p><strong>LEMBRE-SE!</strong> Não é permitido comentarios ofensivos.</p>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Nova Avaliação - <strong>{{$medico->nome}}</strong>
            </div>

            <div class="panel-body">
                @include('common.errors')
                <!-- New Task Form -->
                <form action="{{ action('AvaliacaoController@store') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <input type="hidden" name="medico_id" value="{{ $medico->id }}">

                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="ddlNota" class="col-sm-3 control-label">Nota</label>

                        <div class="col-sm-6">
                            <select class="form-control" name="nota" id="ddlNota">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option> 
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="txtComentario" class="col-sm-3 control-label">Comentário</label>

                        <div class="col-sm-6">
                            <textarea name="comentario" id="txtComentario" class="form-control" value="{{ old('task') }}"></textarea>
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Avaliar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection