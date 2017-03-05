@extends('layouts.master')

@section('title', 'Médicos')

@section('page-header-content', 'Médicos')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/medicos/cria">
	  Adicionar um médico
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
	  <th>CRM</th>
	  <th>Email</th>
	  <th></th>
	  <th></th>
	  <th></th>
	</tr>
      </thead>
      <tbody>
	@foreach($medicos as $medico)
	<tr>
	  <td>{{ $medico->id }}</td>
	  <td>{{ $medico->nome }}</td>
	  <td>{{ $medico->crm }}</td>
	  <td>{{ $medico->email }}</td>
	  <td>
	    <a href="/medicos/{{ $medico->id }}">
	      Visualizar
	    </a>
	  </td>
	  <td>
	    <a href="/medicos/{{ $medico->id }}/edicao">
	      Editar
	    </a>
	  </td>
	  <td>
	    <a href="/medicos/{{ $medico->id }}/remove">
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
