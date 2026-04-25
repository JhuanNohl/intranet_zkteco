@extends('layouts.app')

@section('title', 'Documentos Comerciais')

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
                                    <i class="bi bi-file-earmark-text me-2"></i>Documentos Comerciais
                                </h1>
                            </div>
                            @can('create', App\Models\CommercialDocument::class)
                                <a href="{{ route('commercial.documents.create') }}" class="btn btn-light btn-lg">
                                    <i class="bi bi-plus-circle me-2"></i>Novo Documento
                                </a>
                            @endcan
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
                @include('commercial.documents.partial-list', ['documents' => $documents])
            </div>
        </div>
    </div>
@endsection
