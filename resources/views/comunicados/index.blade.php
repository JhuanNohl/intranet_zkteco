@extends('layouts.app')

@section('title', 'Comunicados')

@section('content')
    <div class="container-fluid px-4">
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 bg-gradient-primary text-white"
                    style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1 class="display-6 fw-bold mb-2">
                                    <i class="bi bi-megaphone-fill me-2"></i>Comunicados
                                </h1>
                                <p class="mb-0 opacity-75">Avisos, atualizações e informações para todos os colaboradores. | INTRANET</p>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ route('gestao-pessoas') }}" class="btn btn-outline-light">
                                    <i class="bi bi-arrow-left me-2"></i>Voltar
                                </a>
                                @auth
                                    @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('super_admin') || auth()->user()->hasRole('comercial'))
                                        <a href="{{ route('comunicados.create') }}" class="btn btn-outline-light">
                                            <i class="bi bi-plus-circle me-2"></i>Novo Comunicado
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                @if($comunicados->count() > 0)
                    @foreach($comunicados as $comunicado)
                        <div class="card mb-3 border-0 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="card-title fw-bold">{{ $comunicado->titulo }}</h5>
                                        <p class="card-text text-muted">{{ Str::limit($comunicado->conteudo, 150) }}</p>
                                        <small class="text-muted">
                                            <i class="bi bi-calendar-event me-1"></i>
                                            {{ $comunicado->created_at->format('d/m/Y H:i') }}
                                            @if($comunicado->autor)
                                                | Por: <strong>{{ $comunicado->autor }}</strong>
                                            @endif
                                        </small>
                                    </div>
                                    @auth
                                        @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('supervisor'))
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('comunicados.edit', $comunicado) }}" class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-pencil"></i> Editar
                                                </a>
                                                <form action="{{ route('comunicados.destroy', $comunicado) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Tem certeza?')">
                                                        <i class="bi bi-trash"></i> Deletar
                                                    </button>
                                                </form>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Paginação -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $comunicados->links() }}
                    </div>
                @else
                    <div class="alert alert-info text-center">
                        <i class="bi bi-info-circle me-2"></i>Nenhum comunicado disponível no momento.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
