@extends('layouts.app')

@section('title', 'Admin - Treinamentos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1><i class="bi bi-link-45deg me-2"></i>Gerenciar Treinamentos</h1>
        <a href="{{ route('admin.treinamentos.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Novo Link
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Ordem</th>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>URL</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($treinamentos as $item)
                        <tr>
                            <td>{{ $item->ordem }}</td>
                            <td>{{ $item->titulo }}</td>
                            <td><span class="badge bg-secondary">{{ $item->categoria }}</span></td>
                            <td><small class="text-muted">{{ Str::limit($item->url, 50) }}</small></td>
                            <td>
                                @if($item->ativo)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.treinamentos.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.treinamentos.destroy', $item->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Remover este treinamento?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection