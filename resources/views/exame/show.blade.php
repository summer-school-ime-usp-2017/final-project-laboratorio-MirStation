@extends('layouts.master')

@section('title', 'Detalhes de um exame')

@section('page-header-content', 'Detalhes de um exame')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
	<h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
	<a href="/exames">
	  Exames
	</a>
      </div>
      <div class="panel-body">
	<a href="/exames/{{$exame->id}}/edicao">
	  Editar
	</a>
      </div>
      <div class="panel-body">
	<a href="/exames/{{$exame->id}}/remove">
	  Remover
	</a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-primary">

      <div class="panel-heading"><strong>Exame</strong></div>

      <ul class="list-group">
	<li class="list-group-item">{{ $exame->nome }}</li>
	<li class="list-group-item">{{ $exame->metodo }}</li>
      </ul>
    </div>
  </div>
</div>
@endsection
