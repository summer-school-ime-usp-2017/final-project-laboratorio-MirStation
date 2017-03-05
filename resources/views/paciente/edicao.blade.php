@extends('layouts.master')

@section('title', 'Edição de um paciente')

@section('page-header-content', 'Edição de um paciente')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/pacientes">
	  Pacientes
	</a>
      </div>
      <div class="panel-body">
	<a href="/pacientes/{{ $paciente->id}}/remove">
	  Remover
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
    <form action="/pacientes/{{$paciente->id}}" method="POST">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="form-group">
	<label for="nome">Nome</label>
	<input name="nome" id="nome" type="text" class="form-control"  value="{{$paciente->nome}}">
      </div>
      <div class="form-group">
	<label for="cpf">CPF</label>
	<input name="cpf" id="cpf" type="text" class="form-control" value="{{$paciente->cpf}}">
      </div>
      <div class="form-group">
	<label for="email">Email</label>
	<input name="email" id="email" type="text" class="form-control" value="{{$paciente->email}}">
      </div>
      <button class="btn btn-primary">Atualizar</button>
    </form>
  </div>
</div>
@endsection
