<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exame;

class ExameController extends Controller
{
    //
    public function index() {
    	   $exames = Exame::all();
	   return view('exame.index', compact('exames'));
    }

    public function cria() {
	   return view('exame.cria');
    }

    public function armazena() {
    	   $this->validate(request(), [
	   'nome' => 'required|min:2|max:255',
	   'metodo' => 'required|min:5|max:255'
	   ]);
	   Exame::create(request()->all());
	   return redirect('/exames');
    }

    public function show(Exame $exame) {
    	   return view('exame.show', compact('exame'));
    }

    public function edicao(Exame $exame) {
           return view('exame.edicao', compact('exame'));
    }

    public function atualiza(Exame $exame) {
    	   $this->validate(request(), [
	   'nome' => 'required|min:2|max:255',
	   'metodo' => 'required|min:5|max:255'
	   ]);
	   $exame->fill(request()->all());
	   $exame->save();
	   return redirect("/exames/$exame->id");
    }

    public function remove(Exame $exame) {
	   $exame->delete();
	   return redirect('/exames');
    }
}
