<x-layout title="series">
    <h1>Séries</h1>
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Criar serie</a>
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset
    <table class="table table-hover table-bordered">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($series as $serie)
            <tr>
                <th scope="row">{{ $serie->id }}</th>
                <td>{{ $serie->nome }}</td>
                <td>{{ $serie->created_at }}</td>
                <td>{{ $serie->updated_at }}</td>
                <td>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("document").ready(function () {
            setTimeout(function () {
                $("div.alert").remove();
            }, 5000); // 5 secs

        });
    </script>
</x-layout>