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
        <div class="form-group">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" @isset($nome) value="{{ $nome }}" @endisset>
        </div>
        <div class="form-group">
            <label for="diretor" class="form-label">Diretor:</label>
            <input type="text" class="form-control" name="diretor" id="diretor" @isset($diretor) value="{{ $diretor }}" @endisset> 
        </div>
        <div class="form-group">
            <label for="categoria" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="categoria" @isset($categoria) value="{{ $categoria }}" @endisset>
        </div>
        
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>

</form>