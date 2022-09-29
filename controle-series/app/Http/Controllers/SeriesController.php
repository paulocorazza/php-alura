<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;


class SeriesController extends Controller
{
    public function index(Request $request )
    {
        //padrão com facade DB
        //$series = DB::select("SELECT nome FROM series"); 

        //padrao com eloquent ORM
        $series = Serie::query()->orderBy('id')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');
        return view('series.index',compact('series'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function edit()
    {

    }

    public function store(Request $request)
    {
        
        //$nomeSerie = $request->input('nome');
        //$serie = new Serie();
        //$serie->nome = $nomeSerie; 
        //$serie->save();
        //padrão com facade DB
        //DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);


        $serie = Serie::create($request->all());
        //$request->session()->flash('mensagem.sucesso',"Série {$serie->nome} inserida com sucesso");
        //return view('series.index',compact('series'))->with('mensagemSucesso', $mensagemSucesso);
        return to_route('series.index')->with('mensagem.sucesso',"Série {$serie->nome} inserida com sucesso!");
         
    }

    public function destroy(Serie $series)
    {
        $series->delete();
        //$request->session()->flash('mensagem.sucesso',"Série {$series->nome} excluída com sucesso!");
        return to_route('series.index')->with('mensagem.sucesso',"Série {$series->nome} excluída com sucesso!");
    }


}
