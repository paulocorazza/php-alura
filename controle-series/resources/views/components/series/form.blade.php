 <form action="{{ $action  }}" method="POST">
    @csrf
    @isset($name)
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
            <input type="text" class="form-control" name="name" id="name" @isset($name) value="{{ $name }}" @endisset>
        </div>
        <div class="form-group">
            <label for="diretor" class="form-label">Diretor:</label>
            <input type="text" class="form-control" name="director" id="director" @isset($director) value="{{ $director }}" @endisset> 
        </div>
        <div class="form-group">
            <label for="categoria" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="category" id="category" @isset($category) value="{{ $category }}" @endisset>
        </div>
        
    </div>
    @if (Route::current()->getName() != 'series.edit')
    <button type="submit" class="btn btn-success">Adicionar</button>
    @else
    <button type="submit" class="btn btn-success">Atualizar</button>
    @endif
</form>