@extends('layouts.master')

@section('title', 'Cadastro de um médico')

@section('page-header-content', 'Cadastro de um médico')

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

    <form action="/medicos" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
	<label for="nome">Nome</label>
	<input type="text" class="form-control" name="nome" id="nome" />
      </div>
      <div class="form-group">
	<label for="crm">CRM</label>
	<input type="text" class="form-control" name="crm" id="crm" />
      </div>
      <div class="form-group">
	<label for="email">Email</label>
	<input type="text" class="form-control" name="email" id="email" />
      </div>
      <button class="btn btn-primary">Salvar</button>
    </form>
  </div>
</div>

@endsection
