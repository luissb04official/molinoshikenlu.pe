@extends('layouts.app')

@section('content')
    <!-- Hero Section de Productos -->
    <div class="products-hero position-relative overflow-hidden mb-5" style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%); min-height: 250px; border-radius: 20px;">
        <!-- Elementos decorativos de fondo -->
        <div class="hero-decoration position-absolute" style="top: -30px; right: -30px; width: 150px; height: 150px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.6;"></div>
        <div class="hero-decoration position-absolute" style="bottom: -20px; left: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.4;"></div>
        
        <div class="container-fluid h-100">
            <div class="row align-items-center h-100 py-4">
                <div class="col-12 text-center">
                    <div class="hero-content">
                        <h1 class="display-5 text-white fw-bold mb-3">
                            <i class="fas fa-boxes me-3"></i>Nuestros Productos
                        </h1>
                        <p class="lead text-white mb-4">Producción animal de calidad garantizada</p>
                        
                        <div class="hero-badges d-flex justify-content-center flex-wrap gap-3 mt-4">
                            <div class="hero-badge">
                                <div class="badge-content-enhanced px-4 py-3 rounded-pill shadow-lg">
                                    <i class="fas fa-award me-2 fs-5" style="color: #d67958;"></i>
                                    <span class="fw-bold fs-6" style="color: #1a202c;">Calidad Garantizada</span>
                                </div>
                            </div>
                            <div class="hero-badge">
                                <div class="badge-content-enhanced px-4 py-3 rounded-pill shadow-lg">
                                    <i class="fas fa-certificate me-2 fs-5" style="color: #8b9949;"></i>
                                    <span class="fw-bold fs-6" style="color: #1a202c;">SENASA Certificado</span>
                                </div>
                            </div>
                            <div class="hero-badge">
                                <div class="badge-content-enhanced px-4 py-3 rounded-pill shadow-lg">
                                    <i class="fas fa-shipping-fast me-2 fs-5" style="color: #d67958;"></i>
                                    <span class="fw-bold fs-6" style="color: #1a202c;">Entrega Rápida</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido de Productos -->
    <div class="container py-4">
        <!-- Filtros de Categorías -->
        <div class="filters-section mb-5">
            <h3 class="text-olive mb-4 text-center">
                <i class="fas fa-filter me-2"></i>Categorías de Productos
            </h3>
            <div class="category-filters d-flex justify-content-center flex-wrap gap-2 mb-4">
                <button class="filter-btn active" data-category="all">
                    <i class="fas fa-th-large me-2"></i>Todos
                </button>
                <button class="filter-btn" data-category="aves">
                    <i class="fas fa-kiwi-bird me-2"></i>Aves
                </button>
                <button class="filter-btn" data-category="bovinos">
                    <i class="fas fa-cow me-2"></i>Bovinos
                </button>
                <button class="filter-btn" data-category="porcinos">
                    <i class="fas fa-pig me-2"></i>Porcinos
                </button>
                <button class="filter-btn" data-category="suplementos">
                    <i class="fas fa-pills me-2"></i>Suplementos
                </button>
            </div>
        </div>

        <!-- Grid de Productos -->
        <div class="row g-4" id="productos-grid">
            @foreach($productos as $producto)
                <div class="col-lg-4 col-md-6 product-item" data-category="{{ $producto['categoria'] ?? 'general' }}">
                    <div class="product-card h-100 rounded-4 shadow-sm border-0 position-relative overflow-hidden">
                        <!-- Badge de Categoría -->
                        <div class="category-badge position-absolute" style="top: 15px; right: 15px; z-index: 10;">
                            <span class="badge rounded-pill px-3 py-2" style="background: rgba(139, 153, 73, 0.9); color: white; font-weight: 600;">
                                {{ ucfirst($producto['categoria'] ?? 'Producto') }}
                            </span>
                        </div>
                        
                        @if(isset($producto['imagen']) && $producto['imagen'])
                            <div class="image-container position-relative">
                                <img src="{{ asset('img/' . $producto['imagen']) }}" 
                                     class="product-image w-100 clickable-image" 
                                     alt="{{ $producto['titulo'] }}"
                                     data-bs-toggle="modal" 
                                     data-bs-target="#imageModal"
                                     data-image="{{ asset('img/' . $producto['imagen']) }}"
                                     data-title="{{ $producto['titulo'] }}"
                                     style="cursor: pointer; height: 250px; object-fit: cover;">
                                <div class="image-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus text-white fs-2"></i>
                                </div>
                            </div>
                        @else
                            <div class="placeholder-img d-flex align-items-center justify-content-center bg-light" style="height: 250px;">
                                <div class="text-center text-muted">
                                    <i class="fas fa-image fs-1 mb-2"></i>
                                    <p class="mb-0">Imagen no disponible</p>
                                </div>
                            </div>
                        @endif
                        
                        <div class="card-body p-4">
                            <h5 class="product-title mb-3 fw-bold" style="color: #8b9949;">
                                {{ $producto['titulo'] }}
                            </h5>
                            <p class="product-description text-secondary mb-3" style="line-height: 1.6;">
                                {{ $producto['descripcion'] }}
                            </p>
                            
                            @if(isset($producto['beneficios']) && is_array($producto['beneficios']))
                                <div class="benefits-section mb-3">
                                    <h6 class="benefits-title mb-2" style="color: #d67958; font-size: 0.9rem;">
                                        <i class="fas fa-check-circle me-1"></i>Beneficios:
                                    </h6>
                                    <ul class="benefits-list list-unstyled mb-0">
                                        @foreach(array_slice($producto['beneficios'], 0, 3) as $beneficio)
                                            <li class="benefit-item mb-1">
                                                <i class="fas fa-leaf me-2" style="color: #8b9949; font-size: 0.8rem;"></i>
                                                <span style="font-size: 0.85rem;">{{ $beneficio }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            @if(isset($producto['precio']))
                                <div class="price-section mt-3 pt-3 border-top">
                                    <p class="product-price fw-bold mb-0" style="color: #d67958; font-size: 1.1rem;">
                                        <i class="fas fa-tag me-1"></i>{{ $producto['precio'] }}
                                    </p>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Footer de la tarjeta -->
                        <div class="card-footer bg-transparent border-0 p-4 pt-0">
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/51940031589?text=Hola,%20me%20interesa%20el%20producto:%20{{ $producto['titulo'] }}" 
                                   target="_blank" 
                                   class="btn btn-success rounded-pill fw-semibold py-2">
                                    <i class="fab fa-whatsapp me-2"></i>Consultar Producto
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Mensaje cuando no hay productos -->
        <div id="no-products" class="text-center py-5" style="display: none;">
            <div class="empty-state">
                <i class="fas fa-search fs-1 text-muted mb-3"></i>
                <h4 class="text-muted">No se encontraron productos</h4>
                <p class="text-secondary">Prueba con otra categoría</p>
            </div>
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
    /* Hero Section */
    .hero-content h1 {
        text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
    }
    
    .hero-content p {
        text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
    }
    
    /* Badges del Hero */
    .badge-content-enhanced {
        backdrop-filter: blur(8px);
        border: 2px solid rgba(139, 153, 73, 0.4);
        transition: all 0.2s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        background: rgba(255, 255, 255, 0.95) !important;
    }
    
    .hero-badge:hover .badge-content-enhanced {
        border-color: rgba(139, 153, 73, 0.7);
        background: rgba(255, 255, 255, 0.98) !important;
    }
    
    /* Filtros de Categorías */
    .filter-btn {
        background: rgba(248, 250, 252, 0.9);
        border: 2px solid rgba(139, 153, 73, 0.2);
        color: #2d3748;
        padding: 12px 24px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .filter-btn:hover {
        background: rgba(139, 153, 73, 0.1);
        border-color: rgba(139, 153, 73, 0.4);
        transform: translateY(-2px);
    }
    
    .filter-btn.active {
        background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%);
        color: white;
        border-color: #8b9949;
        box-shadow: 0 4px 15px rgba(139, 153, 73, 0.3);
    }
    
    /* Tarjetas de Productos */
    .product-card {
        background: rgba(255, 255, 255, 0.98);
        border: 1px solid rgba(139, 153, 73, 0.1);
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }
    
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(139, 153, 73, 0.2);
        border-color: rgba(139, 153, 73, 0.3);
    }
    
    /* Imágenes de Productos */
    .image-container {
        position: relative;
        overflow: hidden;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
    }
    
    .product-image {
        transition: transform 0.4s ease;
    }
    
    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(139, 153, 73, 0.8), rgba(214, 121, 88, 0.8));
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .image-container:hover .image-overlay {
        opacity: 1;
    }
    
    .image-container:hover .product-image {
        transform: scale(1.1);
    }
    
    /* Badge de Categoría */
    .category-badge .badge {
        font-size: 0.75rem;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    /* Contenido de la Tarjeta */
    .product-title {
        font-size: 1.25rem;
        line-height: 1.4;
    }
    
    .product-description {
        font-size: 0.95rem;
    }
    
    /* Sección de Beneficios */
    .benefits-section {
        background: rgba(139, 153, 73, 0.05);
        padding: 12px;
        border-radius: 8px;
        border-left: 3px solid #8b9949;
    }
    
    .benefits-title {
        font-weight: 600;
        margin-bottom: 8px;
    }
    
    .benefit-item {
        font-size: 0.85rem;
        color: #4a5568;
        display: flex;
        align-items: center;
    }
    
    /* Precio */
    .product-price {
        font-size: 1.2rem;
    }
    
    /* Botón de Consulta */
    .btn-success {
        background: linear-gradient(135deg, #25D366 0%, #20b358 100%);
        border: none;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }
    
    .btn-success:hover {
        background: linear-gradient(135deg, #20b358 0%, #1a9a4a 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
    }
    
    /* Modal */
    .modal-content {
        border-radius: 16px;
        border: none;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }
    
    .modal-header {
        background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%);
        border: none;
        padding: 1.5rem;
    }
    
    .modal-title {
        color: white !important;
        font-weight: 700;
    }
    
    .btn-close {
        filter: brightness(0) invert(1);
        opacity: 0.8;
    }
    
    .btn-close:hover {
        opacity: 1;
    }
    
    #modalImage {
        max-height: 70vh;
        object-fit: contain;
    }
    
    /* Estado Vacío */
    .empty-state i {
        opacity: 0.3;
    }
    
    /* Animaciones de Filtro */
    .product-item {
        transition: all 0.4s ease;
    }
    
    .product-item.hidden {
        opacity: 0;
        transform: scale(0.8);
        pointer-events: none;
    }
    
    /* Modo Oscuro */
    [data-theme="dark"] .badge-content-enhanced {
        background: rgba(25, 25, 25, 0.95) !important;
        border-color: rgba(164, 184, 92, 0.8) !important;
    }
    
    [data-theme="dark"] .badge-content-enhanced span {
        color: #f5f5f5 !important;
    }
    
    [data-theme="dark"] .filter-btn {
        background: rgba(42, 42, 42, 0.9);
        color: #e0e0e0;
        border-color: rgba(164, 184, 92, 0.3);
    }
    
    [data-theme="dark"] .filter-btn:hover {
        background: rgba(164, 184, 92, 0.2);
    }
    
    [data-theme="dark"] .product-card {
        background: rgba(30, 30, 30, 0.95);
        border-color: rgba(164, 184, 92, 0.2);
        color: #e0e0e0;
    }
    
    [data-theme="dark"] .product-title {
        color: #a4b85c !important;
    }
    
    [data-theme="dark"] .benefits-section {
        background: rgba(164, 184, 92, 0.1);
        border-left-color: #a4b85c;
    }
    
    [data-theme="dark"] .benefit-item {
        color: #b0b0b0;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .hero-badges {
            flex-direction: column;
            gap: 1rem !important;
            align-items: center;
        }
        
        .badge-content-enhanced {
            min-width: 250px;
            text-align: center;
        }
        
        .category-filters {
            flex-direction: column;
            align-items: center;
        }
        
        .filter-btn {
            min-width: 200px;
            text-align: center;
        }
        
        .product-card {
            margin-bottom: 2rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Funcionalidad del Modal de Imágenes
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
    
    // Funcionalidad de Filtros
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');
    const noProductsMessage = document.getElementById('no-products');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remover clase active de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Agregar clase active al botón clickeado
            this.classList.add('active');
            
            const category = this.getAttribute('data-category');
            let visibleCount = 0;
            
            productItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                
                if (category === 'all' || itemCategory === category) {
                    item.style.display = 'block';
                    item.classList.remove('hidden');
                    visibleCount++;
                    
                    // Animación de entrada
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.classList.add('hidden');
                    
                    // Animación de salida
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
            
            // Mostrar/ocultar mensaje de "no productos"
            if (visibleCount === 0) {
                noProductsMessage.style.display = 'block';
            } else {
                noProductsMessage.style.display = 'none';
            }
        });
    });
    
    // Animación inicial de carga
    productItems.forEach((item, index) => {
        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, index * 100);
    });
});
</script>

@endsection
