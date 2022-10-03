<x-layout title="Editar série {{ $serie->nome }} ">
    <a href="{{ route('series.index') }}" class="btn btn-dark btn-sm mt-4" >Voltar</a>
    <h1>Editar Série - {{ $serie->nome }} </h1>
    <x-series.form :action="route('series.update', $serie->id )" :nome="$serie->nome" :diretor="$serie->diretor" :categoria="$serie->categoria"/>
</x-layout>