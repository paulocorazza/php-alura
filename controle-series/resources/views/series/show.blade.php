<x-layout title="Detalhes da Série {{ $serie->nome }}">
<div class="form-group">
    <label for="nome" class="form-label">Nome:</label>
    <p>{{ $serie->nome }}</p>
    <labek for="diretor" class="form-label">Diretor:</labek>
    <p>{{ $serie->diretor }}</p>
    <label for="categoria" class="form-label">Categoria:</label>
    <p>{{ $serie->categoria }}</´>
</div>
</x-layout>