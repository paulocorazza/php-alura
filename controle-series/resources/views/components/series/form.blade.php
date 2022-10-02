 <form action="{{ $action  }}" method="POST">
    @csrf
    @isset($nome)
    @method('PUT')
    @endisset
    <div class="pb-8">
        @if($errors->any())
        <div class="alert alert-danger">
            <p>Tem algo errado....</p>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" @isset($nome) value="{{ $nome }}" @endisset>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>