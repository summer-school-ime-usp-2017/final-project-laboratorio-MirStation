@extends('layouts.master')

@section('title', 'Cadastro de um pedido')

@section('page-header-content', 'Cadastro de um pedido')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/medicos/{{$medico->id}}">
	  Voltar
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">

    @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
	@foreach ($errors->all() as $message)
	<li>{{ $message }}</li>
	@endforeach
      </ul>
    </div>
    @endif

    <form action="/medicos/{{$medico->id}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
	<label for="paciente">Paciente</label>
	<select name="paciente_id" class="form-control">
	  @foreach($pacientes as $paciente)
	  <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
	  @endforeach
	</select>
      </div>
      <div class="form-group">
	<label for="medico">Médico</label>
	<select name="medico_id" class="form-control">
	  <option value="{{$medico->id}}">{{$medico->nome}}</option>
	</select>
      </div>
      <div class="form-group">
	<label for="exame">Exames</label>
	@foreach($exames as $exame)
	<br>
	<input type="checkbox" name="service[]" value="{{$exame->id}}"> {{$exame->nome}}
	@endforeach
      </div>
      <button class="btn btn-primary">Salvar</button>
    </form>
  </div>
</div>

@endsection

