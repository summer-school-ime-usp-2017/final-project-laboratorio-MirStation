@extends('layouts.master')

@section('title', 'Pacientes')

@section('page-header-content', 'Pacientes')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/pacientes/cria">
	  <span class="glyphicon glyphicon-plus"></span>
	  Pacientes
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <table class="table table-striped">
      <thead>
	<tr>
	  <th>Id</th>
	  <th>Nome</th>
	  <th>CPF</th>
	  <th>Email</th>
	  <th>Visualizar</th>
	  <th>Editar</th>
	  <th>Remover</th>
	</tr>
      </thead>
      <tbody>
	@foreach($pacientes as $paciente)
	<tr>
	  <td>{{ $paciente->id }}</td>
	  <td>{{ $paciente->nome }}</td>
	  <td>{{ $paciente->cpf }}</td>
	  <td>{{ $paciente->email }}</td>
	  <td>
	    <a href="/pacientes/{{ $paciente->id }}">
	      <span class="glyphicons glyphicons-eye-open"></span>
	      Visualizar
	    </a>
	  </td>
	  <td>
	    <a href="/pacientes/{{ $paciente->id }}/edicao">
	      <span class="glyphicons glyphicons-pencil"></span>
	      Editar
	    </a>
	  </td>
	  <td>
	    <a href="/pacientes/{{ $paciente->id }}/remove">
	      <span class="glyphicons glyphicons-bin"></span>
	      Remover
	    </a>
	  </td>
	</tr>
	@endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
