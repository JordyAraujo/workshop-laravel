@extends('layout')

@section('cabecalho')
    Materiais
@endsection

@section('conteudo')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif
    <a href="{{ route('form_material')}}" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($materiais as $material)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $material->nome }}
                <form method="post"
                    action="/materiais/{{ $material->id }}"
                    onsubmit="return confirm('Remover o material {{ $material->nome }}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
