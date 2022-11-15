<x-layout title="Detalhes da Série {{ $series->name }}">
<div class="form-group">
    <label for="name" class="form-label">Nome:</label>
    <p>{{ $series->name }}</p>
    <labek for="diretor" class="form-label">Diretor:</labek>
    <p>{{ $series->director }}</p>
    <label for="categoria" class="form-label">Categoria:</label>
    <p>{{ $series->category }}</´>
</div>
</x-layout>