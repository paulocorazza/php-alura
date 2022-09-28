<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SeriesController extends Controller
{
    public function index()
    {
        //padrão com facade DB
        //$series = DB::select("SELECT nome FROM series"); 
        //padrao com eloquent ORM
        $series = Serie::query()->orderBy('nome')->get();
        return view('series.index',compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        //padrão com facade DB
        //DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
        return redirect('/series');
         
    }


}
