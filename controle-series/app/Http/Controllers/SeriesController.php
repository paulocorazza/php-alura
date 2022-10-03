<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request )
    {
        $series = Serie::query()->orderBy('id')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');
        return view('series.index',compact('series'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function show($id)
    {
        $serie =  Serie::Find($id);
        return view('series.show')->with('serie',$serie);
    }


    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Serie::create($request->all());
        return to_route('series.index')->with('mensagem.sucesso',"Série {$serie->nome} inserida com sucesso!");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie',$series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->nome = $request->nome;
        $series->diretor = $request->diretor;
        $series->categoria = $request->categoria;
        $series->save();
        return to_route('series.index')->with('mensagem.sucesso', "Série {$series->nome} atualizada com sucesso!" );
    }

    public function destroy(Serie $series)
    {
        $series->delete();
        return to_route('series.index')->with('mensagem.sucesso',"Série {$series->nome} excluída com sucesso!");
    }




}
