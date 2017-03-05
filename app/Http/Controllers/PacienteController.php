<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paciente;

class PacienteController extends Controller
{
    //
    public function index() {
    	   $pacientes = Paciente::all();
	   return view('paciente.index', compact('pacientes'));
    }

    public function cria() {
	   return view('paciente.cria');
    }

    public function armazena() {
    	   $this->validate(request(), [
	   'nome' => 'required|min:2|max:255',
	   'cpf' => 'required|min:11|max:11',
	   'email' => 'required|email'
	   ]);
	   Paciente::create(request()->all());
	   return redirect('/pacientes');
    }

    public function show(Paciente $paciente) {
    	   return view('paciente.show', compact('paciente'));
    }

    public function edicao(Paciente $paciente) {
           return view('paciente.edicao', compact('paciente'));
    }

    public function atualiza(Paciente $paciente) {
    	   $this->validate(request(), [
	   'nome' => 'required|min:2|max:255',
	   'cpf' => 'required|min:11|max:11',
	   'email' => 'required|email'
	   ]);
	   $paciente->fill(request()->all());
	   $paciente->save();
	   return redirect("/pacientes/$paciente->id");
    }

    public function remove(Paciente $paciente) {
	   $paciente->delete();
	   return redirect('/pacientes');
    }
}
