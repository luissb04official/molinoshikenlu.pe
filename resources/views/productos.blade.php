@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-olive fw-bold mb-4 text-center">Catálogo de Productos</h2>

    <div class="row g-4">
        @foreach($productos as $producto)
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 product-card">
                    @if(isset($producto['imagen']) && $producto['imagen'])
                        <div class="image-container position-relative">
                            <img src="{{ asset('img/' . $producto['imagen']) }}" 
                                 class="card-img-top clickable-image" 
                                 alt="{{ $producto['titulo'] }}"
                                 data-bs-toggle="modal" 
                                 data-bs-target="#imageModal"
                                 data-image="{{ asset('img/' . $producto['imagen']) }}"
                                 data-title="{{ $producto['titulo'] }}"
                                 style="cursor: pointer;">
                            <div class="image-overlay">
                                <i class="fas fa-search-plus text-white"></i>
                            </div>
                        </div>
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

<!-- Modal para mostrar imagen ampliada -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0 pb-2">
                <h5 class="modal-title text-olive fw-bold" id="imageModalLabel">Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <img id="modalImage" src="" alt="" class="img-fluid w-100" style="border-radius: 0 0 8px 8px;">
            </div>
        </div>
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

    /* Estilos para el efecto de imagen clickeable */
    .image-container {
        position: relative;
        overflow: hidden;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .image-container:hover .image-overlay {
        opacity: 1;
    }

    .image-overlay i {
        font-size: 2rem;
        transform: scale(0.8);
        transition: transform 0.3s ease;
    }

    .image-container:hover .image-overlay i {
        transform: scale(1);
    }

    .clickable-image {
        transition: transform 0.3s ease;
    }

    .image-container:hover .clickable-image {
        transform: scale(1.05);
    }

    /* Estilos para el modal */
    .modal-content {
        border-radius: 12px;
        overflow: hidden;
    }

    .modal-header {
        background: linear-gradient(135deg, #8b9949 0%, #a0b052 100%);
        color: white !important;
    }

    .modal-header .modal-title {
        color: white !important;
    }

    .modal-header .btn-close {
        filter: invert(1);
    }

    #modalImage {
        max-height: 70vh;
        object-fit: contain;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {

    const clickableImages = document.querySelectorAll('.clickable-image');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('imageModalLabel');
    
    clickableImages.forEach(function(image) {
        image.addEventListener('click', function() {
            const imageUrl = this.getAttribute('data-image');
            const imageTitle = this.getAttribute('data-title');
            
            modalImage.src = imageUrl;
            modalImage.alt = imageTitle;
            modalTitle.textContent = imageTitle;
        });
    });
});
</script>

@endsection
