<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request )
    {
        $series = Series::all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->forget('mensagem.sucesso');
        return view('series.index',compact('series'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function show($id)
    {
        $series =  Series::Find($id);
        //dd($series);
        return view('series.show')->with('series',$series);
    }


    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $series = Series::create($request->all());
        return to_route('series.index')->with('mensagem.sucesso',"Série {$series->name} inserida com sucesso!");
        
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('series',$series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->name = $request->name;
        $series->director = $request->director;
        $series->category = $request->category;
        $series->save();
        return to_route('series.index')->with('mensagem.sucesso', "Série {$series->name} atualizada com sucesso!" );
    }

    public function destroy(Series $series)
    {
        $series->delete();
        return to_route('series.index')->with('mensagem.sucesso',"Série {$series->name} excluída com sucesso!");
    }




}
