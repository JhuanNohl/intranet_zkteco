@extends('layouts.app')

@section('title', 'Produtos')

@section('content')

    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-gradient-primary text-white"
                style="background: linear-gradient(135deg, #474B4F 0%, #7AC143 100%);">
                <div class="card-body py-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 fw-bold mb-2">
                                <i class="bi bi-briefcase-fill me-2"></i>Produtos
                            </h1>
                            <p class="mb-0 opacity-75">ZKTeco | INTRANET</p>
                        </div>
                        <div class="text-end">
                            <i class="bi bi-graph-up display-1 opacity-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection