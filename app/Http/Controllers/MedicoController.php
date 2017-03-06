<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Medico;
use App\Pedido;
use App\Paciente;
use App\Exame;

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

    public function pedido(Medico $medico) {
    	   $pacientes = Paciente::all();
	   $exames = Exame::all();
	   return view('medico.pedido',compact('medico','pacientes','exames'));
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

    public function armazenaPedido(Medico $medico) {
    	   // $exames = request()->service;
	   // dd($exames);
    	   $pedido = new Pedido();
	   $pedido->paciente_id = request()->paciente_id;
	   $pedido->medico_id = request()->medico_id;
	   $pedido->save();
	   return redirect("/medicos/$medico->id");
    }

    public function show(Medico $medico) {
    	   $pedidos = Pedido::where('medico_id',$medico->id)->get();
    	   return view('medico.show', compact('medico','pedidos'));
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
