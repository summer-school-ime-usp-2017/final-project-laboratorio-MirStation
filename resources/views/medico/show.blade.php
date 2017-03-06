@extends('layouts.master')

@section('title', 'Detalhes de um médico')

@section('page-header-content', 'Detalhes de um médico')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/medicos">
	  Médicos
	</a>
      </div>
      <div class="panel-body">
	<a href="/medicos/{{$medico->id}}/edicao">
	  Editar
	</a>
      </div>
      <div class="panel-body">
	<a href="/medicos/{{$medico->id}}/remove">
	  Remover
	</a>
      </div>
      <div class="panel-body">
	<a href="/medicos/{{$medico->id}}/pedido">
	  Fazer pedido
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-primary">

      <div class="panel-heading"><strong>Médico</strong></div>

      <ul class="list-group">
	<li class="list-group-item">{{ $medico->nome }}</li>
	<li class="list-group-item">{{ $medico->crm }}</li>
	<li class="list-group-item">{{ $medico->email }}</li>
      </ul>
    </div>
  </div>
  <div class="col-md-6">
       <div class="panel panel-primary">
       <div class="panel-heading">Pedidos</div>
       <table class="table table-striped">
       <thead>
	<tr>
	  <th>Id</th>
	  <th>Paciente</th>
	  <th>Médico</th>
	  <th>Exames</th>
	</tr>
      </thead>
      <tbody>
	@foreach($pedidos as $pedido)
	<tr>
	  <td>{{ $pedido->id }}</td>
	  <td>{{ $pedido->paciente->nome }}</td>
	  <td>{{ $pedido->medico->nome }}</td>
	</tr>
	@endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
