<x-layout title="series">
    <h1>Séries</h1>
    <a href="/series/create" class="btn btn-dark mb-2">Criar serie</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
        </thead>
        <tbody>
            @foreach ($series as $serie)
            <tr>
                <th scope="row">{{ $serie->id }}</th>
                <td>{{ $serie->nome }}</td>
                <td>{{ $serie->created_at }}</td>
                <td>{{ $serie->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>