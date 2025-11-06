@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-olive fw-bold mb-4 text-center">Catálogo de Productos</h2>

    <div class="row g-4">
        @foreach($productos as $producto)
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 product-card">
                    @if(isset($producto['imagen']) && $producto['imagen'])
                        <img src="{{ asset('img/' . $producto['imagen']) }}" 
                             class="card-img-top" 
                             alt="{{ $producto['titulo'] }}">
                    @else
                        <div class="placeholder-img d-flex align-items-center justify-content-center">
                            <span class="text-muted">Imagen no disponible</span>
                        </div>
                    @endif
                    <div class="card-body text-center">
                        <h5 class="card-title text-olive fw-semibold">{{ $producto['titulo'] }}</h5>
                        <p class="card-text text-secondary">{{ $producto['descripcion'] }}</p>
                        @if(isset($producto['precio']))
                            <p class="fw-bold text-success">{{ $producto['precio'] }}</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .product-card {
        border-radius: 12px;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        background-color: #fff;
    }

    .product-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .product-card img {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        object-fit: cover;
        height: 200px;
    }

    .placeholder-img {
        height: 200px;
        background-color: #f0f2f5;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        font-weight: 500;
    }

    .text-olive {
        color: #7a8b3a !important;
    }
</style>
@endsection
