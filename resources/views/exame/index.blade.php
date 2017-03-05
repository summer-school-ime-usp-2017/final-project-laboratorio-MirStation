@extends('layouts.master')

@section('title', 'Exames')

@section('page-header-content', 'Exames')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/exames/cria">
	  Adicionar um exame
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
	  <th>Método</th>
	  <th></th>
	  <th></th>
	  <th></th>
	</tr>
      </thead>
      <tbody>
	@foreach($exames as $exame)
	<tr>
	  <td>{{ $exame->id }}</td>
	  <td>{{ $exame->nome }}</td>
	  <td>{{ $exame->metodo }}</td>
	  <td>
	    <a href="/exames/{{ $exame->id }}">
	      Visualizar
	    </a>
	  </td>
	  <td>
	    <a href="/exames/{{ $exame->id }}/edicao">
	      Editar
	    </a>
	  </td>
	  <td>
	    <a href="/exames/{{ $exame->id }}/remove">
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
