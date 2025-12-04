@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Header mejorado -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold mb-3" style="color: #8b9949;">
            <i class="fas fa-box-open me-3" style="color: #d67958;"></i>
            Catálogo de Productos
        </h1>
        <p class="lead" style="color: #5a5a5a;">Nutrición especializada para cada tipo de animal</p>
        <div class="d-flex justify-content-center gap-3 mt-4">
            <span class="badge bg-light text-dark px-3 py-2 border">
                <i class="fas fa-certificate me-1" style="color: #8b9949;"></i>
                Certificación SENASA
            </span>
            <span class="badge bg-light text-dark px-3 py-2 border">
                <i class="fas fa-leaf me-1" style="color: #8b9949;"></i>
                100% Natural
            </span>
            <span class="badge bg-light text-dark px-3 py-2 border">
                <i class="fas fa-award me-1" style="color: #8b9949;"></i>
                Calidad Garantizada
            </span>
        </div>
    </div>

    <!-- Filtros por categoría -->
    @if(isset($categorias))
    <div class="text-center mb-4">
        <h5 class="mb-3" style="color: #8b9949;">Filtrar por Categoría:</h5>
        <div class="filter-buttons d-flex justify-content-center flex-wrap gap-2">
            <button class="btn filter-btn active" data-category="all">
                <i class="fas fa-th me-1"></i>Todos
            </button>
            @foreach($categorias as $categoria)
                <button class="btn filter-btn" data-category="{{ strtolower($categoria) }}">
                    @switch($categoria)
                        @case('Aves')
                            <i class="fas fa-dove me-1"></i>
                            @break
                        @case('Bovinos')
                            <i class="fas fa-cow me-1"></i>
                            @break
                        @case('Porcinos')
                            <i class="fas fa-pig me-1"></i>
                            @break
                        @default
                            <i class="fas fa-tag me-1"></i>
                    @endswitch
                    {{ $categoria }}
                </button>
            @endforeach
        </div>
    </div>
    @endif

    <div class="row g-4" id="productos-grid">
        @foreach($productos as $producto)
            <div class="col-lg-4 col-md-6 product-item" data-category="{{ isset($producto['categoria']) ? strtolower($producto['categoria']) : 'general' }}">
                <div class="card border-0 shadow-sm h-100 product-card">
                    @if(isset($producto['categoria']))
                        <div class="category-badge">
                            <span class="badge" style="background: linear-gradient(45deg, #8b9949, #a4b85c);">
                                {{ $producto['categoria'] }}
                            </span>
                        </div>
                    @endif
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
                    <div class="card-body">
                        <h5 class="card-title text-olive fw-bold mb-3">{{ $producto['titulo'] }}</h5>
                        <p class="card-text text-muted mb-3" style="font-size: 0.9rem; line-height: 1.5;">{{ Str::limit($producto['descripcion'], 120) }}</p>
                        
                        @if(isset($producto['beneficios']) && count($producto['beneficios']) > 0)
                            <div class="benefits-preview mb-3">
                                <h6 class="fw-bold" style="font-size: 0.8rem; color: #8b9949;">
                                    <i class="fas fa-star me-1" style="color: #d67958;"></i>Beneficios:
                                </h6>
                                <ul class="list-unstyled mb-0" style="font-size: 0.8rem;">
                                    @foreach(array_slice($producto['beneficios'], 0, 2) as $beneficio)
                                        <li class="text-muted mb-1">
                                            <i class="fas fa-check text-success me-1"></i>{{ $beneficio }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        @if(isset($producto['presentacion']))
                            <div class="mb-3">
                                <small class="text-muted">
                                    <i class="fas fa-box me-1" style="color: #8b9949;"></i>
                                    {{ $producto['presentacion'] }}
                                </small>
                            </div>
                        @endif
                        
                        <div class="text-center">
                            <a href="https://wa.me/51940031589?text=Hola,%20me%20interesa%20el%20producto:%20{{ urlencode($producto['titulo']) }}" 
                               target="_blank" class="btn btn-success btn-sm px-3">
                                <i class="fab fa-whatsapp me-1"></i>Consultar
                            </a>
                        </div>
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
    /* Filtros de categoría */
    .filter-btn {
        border: 2px solid #8b9949;
        color: #8b9949;
        background: white;
        padding: 8px 16px;
        border-radius: 25px;
        transition: all 0.3s ease;
        font-size: 0.85rem;
        margin: 2px;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: linear-gradient(45deg, #8b9949, #a4b85c);
        color: white;
        border-color: #8b9949;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(139, 153, 73, 0.3);
    }

    /* Tarjetas de productos mejoradas */
    .product-card {
        border-radius: 15px;
        transition: all 0.3s ease;
        background-color: #fff;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(139, 153, 73, 0.1);
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        border-color: rgba(139, 153, 73, 0.3);
    }

    .category-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 10;
    }

    .category-badge .badge {
        font-size: 0.7rem;
        padding: 5px 10px;
        border-radius: 20px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .benefits-preview {
        background: rgba(139, 153, 73, 0.05);
        padding: 10px;
        border-radius: 6px;
        border-left: 3px solid #8b9949;
    }

    /* Animaciones de filtrado */
    .product-item {
        transition: all 0.4s ease;
    }

    .product-item.hidden {
        opacity: 0;
        transform: scale(0.8);
        display: none;
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Funcionalidad de imágenes clickeables
    const clickableImages = document.querySelectorAll('.clickable-image');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('imageModalLabel');
    
    if (clickableImages.length > 0 && modalImage) {
        clickableImages.forEach(function(image) {
            image.addEventListener('click', function() {
                const imageUrl = this.getAttribute('data-image');
                const imageTitle = this.getAttribute('data-title');
                
                modalImage.src = imageUrl;
                modalImage.alt = imageTitle;
                modalTitle.textContent = imageTitle;
            });
        });
    }

    // Funcionalidad de filtrado por categorías
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');
    
    if (filterButtons.length > 0) {
        filterButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                
                // Actualizar botones activos
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filtrar productos con animación
                productItems.forEach(function(item) {
                    const itemCategory = item.getAttribute('data-category');
                    
                    if (category === 'all' || itemCategory === category) {
                        item.classList.remove('hidden');
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.classList.add('hidden');
                        }, 300);
                    }
                });
            });
        });
    }

    // Animación de entrada inicial para productos
    productItems.forEach(function(item, index) {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            item.style.transition = 'all 0.5s ease';
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, index * 100);
    });
});
</script>

@endsection
