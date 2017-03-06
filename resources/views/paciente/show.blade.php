@extends('layouts.master')

@section('title', 'Detalhes de um paciente')

@section('page-header-content', 'Detalhes de um paciente')

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
	<a href="/pacientes/{{$paciente->id}}/edicao">
	  Editar
	</a>
      </div>
      <div class="panel-body">
	<a href="/pacientes/{{$paciente->id}}/remove">
	  Remover
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-primary">

      <div class="panel-heading"><strong>Paciente</strong></div>

      <ul class="list-group">
	<li class="list-group-item">{{ $paciente->nome }}</li>
	<li class="list-group-item">{{ $paciente->cpf }}</li>
	<li class="list-group-item">{{ $paciente->email }}</li>
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
	  <th>Médico</th>
	  <th>Exames</th>
	</tr>
      </thead>
      <tbody>
	@foreach($pedidos as $pedido)
	<tr>
	  <td>{{ $pedido->id }}</td>
	  <td>{{ $pedido->medico->nome }}</td>
	  <td>
	  <ul>
	  @foreach($pedido->exames as $exame)
	  <li>{{$exame->pivot->exame_nome}}</li>
	  @endforeach
	  </ul>
	  </td>
	</tr>
	@endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
