@extends('layouts.master')

@section('title', 'Edição de um exame')

@section('page-header-content', 'Edição de um exame')

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
	<a href="/exames/{{ $exame->id}}/remove">
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
    <form action="/exames/{{$exame->id}}" method="POST">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="form-group">
	<label for="nome">Nome</label>
	<input name="nome" id="nome" type="text" class="form-control"  value="{{$exame->nome}}">
      </div>
      <div class="form-group">
	<label for="metodo">Método</label>
	<input name="metodo" id="metodo" type="text" class="form-control" value="{{$exame->metodo}}">
      </div>
      <button class="btn btn-primary">Atualizar</button>
    </form>
  </div>
</div>
@endsection
