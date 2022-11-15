<x-layout title="Editar série {{ $series->name }} ">
    <a href="{{ route('series.index') }}" class="btn btn-dark btn-sm mt-4" >Voltar</a>
    <h1>Editar Série - {{ $series->name }} </h1>
    <x-series.form :action="route('series.update', $series->id )" :name="$series->name" :director="$series->director" :category="$series->category"/>
</x-layout>