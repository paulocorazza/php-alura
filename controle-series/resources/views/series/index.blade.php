<x-layout title="series">
    <h1 class="text-center mt-4">Séries</h1>
    <a href="{{ route('series.create') }}" class="btn btn-success mb-2">Criar serie</a>
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset
    <table class="table table-hover table-bordered">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Diretor</th>
            <th>Categoria</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($series as $series)
            <tr>
                <th scope="row">{{ $series->id }}</th>
                <td>{{ $series->name }}</td>
                <td>{{ $series->director }}</td>
                <td>{{ $series->category }}</td>
                <td>{{ $series->created_at }}</td>
                <td>{{ $series->updated_at }}</td>
                <td>
                    <form action="{{ route('series.destroy', $series->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger mt-2"><i class ="fa fa-trash"></i> Excluir</button>
                    </form>
                    <span class="d-flex mt-2">
                        <a href="{{ route('series.edit', $series->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Editar</a>
                    </span>
                    {{-- <p></p> --}}
                    <span class="d-flex mt-2">
                        <a href="{{ route('series.show', $series->id) }}" class="btn btn-secondary btn-sm"><i class="fa fa-magnifying-glass"></i> Detalhes</a>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://kit.fontawesome.com/bf4bc90827.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("document").ready(function () {
                    setTimeout(function () {
                        $("div.alert").remove();
                    }, 5000); // 5 secs
                });
    </script>
</x-layout>