<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Medico;

class MedicoController extends Controller
{
    //
    public function index() {
    	   $medicos = Medico::all();
	   return view('medico.index', compact('medicos'));
    }

    public function cria() {
	   return view('medico.cria');
    }

    public function armazena() {
    	   $this->validate(request(), [
	   'nome' => 'required|min:2|max:255',
	   'crm' => 'required|min:7|max:7',
	   'email' => 'required|email'
	   ]);
	   Medico::create(request()->all());
	   return redirect('/medicos');
    }

    public function show(Medico $medico) {
    	   return view('medico.show', compact('medico'));
    }

    public function edicao(Medico $medico) {
           return view('medico.edicao', compact('medico'));
    }

    public function atualiza(Medico $medico) {
    	   $this->validate(request(), [
	   'nome' => 'required|min:2|max:255',
	   'crm' => 'required|min:7|max:7',
	   'email' => 'required|email'
	   ]);
	   $medico->fill(request()->all());
	   $medico->save();
	   return redirect("/medicos/$medico->id");
    }

    public function remove(Medico $medico) {
	   $medico->delete();
	   return redirect('/medicos');
    }
}
