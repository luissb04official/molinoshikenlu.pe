@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <!-- Header Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="products-header text-center py-5 px-4 rounded-3" style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%); color: white;">
                <h1 class="display-4 fw-bold mb-3">Catálogo de Productos</h1>
                <p class="lead fs-4 mb-4">Nutrición especializada para cada etapa de vida de tus animales</p>
                <div class="header-stats d-flex justify-content-center gap-4 flex-wrap">
                    <div class="stat-item">
                        <i class="fas fa-box-open fs-3 mb-2"></i>
                        <div class="fw-bold fs-5">{{ count($productos) }}+ Productos</div>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-certificate fs-3 mb-2"></i>
                        <div class="fw-bold fs-5">Calidad SENASA</div>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-leaf fs-3 mb-2"></i>
                        <div class="fw-bold fs-5">100% Natural</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtros por categoría -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="category-filters text-center">
                <h4 class="mb-3" style="color: #645d4d;">Filtrar por Categoría</h4>
                <div class="filter-buttons d-flex justify-content-center flex-wrap gap-2">
                    <button class="btn filter-btn active" data-category="all">
                        <i class="fas fa-th-large me-2"></i>Todos
                    </button>
                    @foreach($categorias as $categoria)
                        <button class="btn filter-btn" data-category="{{ strtolower(str_replace(' ', '-', $categoria)) }}">
                            @switch($categoria)
                                @case('Aves')
                                    <i class="fas fa-dove me-2"></i>
                                    @break
                                @case('Bovinos')
                                    <i class="fas fa-cow me-2"></i>
                                    @break
                                @case('Porcinos')
                                    <i class="fas fa-pig me-2"></i>
                                    @break
                                @case('Especies Menores')
                                    <i class="fas fa-paw me-2"></i>
                                    @break
                                @default
                                    <i class="fas fa-tag me-2"></i>
                            @endswitch
                            {{ $categoria }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Grid de productos -->
    <div class="row g-4" id="productos-grid">
        @foreach($productos as $index => $producto)
            <div class="col-lg-4 col-md-6 product-item" data-category="{{ strtolower(str_replace(' ', '-', $producto['categoria'])) }}">
                <div class="card border-0 shadow-sm h-100 product-card">
                    <!-- Categoria badge -->
                    <div class="category-badge">
                        <span class="badge" style="background: linear-gradient(45deg, #8b9949, #a4b85c);">
                            {{ $producto['categoria'] }}
                        </span>
                    </div>
                    
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
                            <i class="fas fa-box fs-2 text-muted mb-2"></i>
                            <div class="text-center">
                                <div class="fw-bold text-muted">{{ $producto['titulo'] }}</div>
                                <small class="text-muted">Consulta disponibilidad</small>
                            </div>
                        </div>
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title text-olive fw-bold mb-3">{{ $producto['titulo'] }}</h5>
                        <p class="card-text text-muted mb-3" style="font-size: 0.9rem; line-height: 1.4;">
                            {{ Str::limit($producto['descripcion'], 120) }}
                        </p>
                        
                        <!-- Beneficios principales -->
                        @if(isset($producto['beneficios']) && count($producto['beneficios']) > 0)
                            <div class="benefits-preview mb-3">
                                <h6 class="fw-bold text-dark mb-2" style="font-size: 0.85rem;">
                                    <i class="fas fa-star text-warning me-1"></i>Beneficios Principales:
                                </h6>
                                <ul class="list-unstyled mb-0" style="font-size: 0.8rem;">
                                    @foreach(array_slice($producto['beneficios'], 0, 2) as $beneficio)
                                        <li class="text-muted mb-1">
                                            <i class="fas fa-check text-success me-2"></i>{{ $beneficio }}
                                        </li>
                                    @endforeach
                                    @if(count($producto['beneficios']) > 2)
                                        <li class="text-muted">
                                            <i class="fas fa-plus me-2"></i>{{ count($producto['beneficios']) - 2 }} beneficios más...
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        @endif
                        
                        <!-- Información adicional -->
                        <div class="product-info">
                            @if(isset($producto['edad_recomendada']))
                                <div class="info-item d-flex align-items-center mb-2">
                                    <i class="fas fa-clock text-primary me-2" style="font-size: 0.8rem;"></i>
                                    <span style="font-size: 0.8rem; color: #6c757d;">{{ $producto['edad_recomendada'] }}</span>
                                </div>
                            @endif
                            @if(isset($producto['presentaciones']) && count($producto['presentaciones']) > 0)
                                <div class="info-item d-flex align-items-center mb-2">
                                    <i class="fas fa-weight text-info me-2" style="font-size: 0.8rem;"></i>
                                    <span style="font-size: 0.8rem; color: #6c757d;">{{ implode(', ', $producto['presentaciones']) }}</span>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Botón de más información -->
                        <div class="text-center mt-3">
                            <button class="btn btn-outline-primary btn-sm px-4" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productModal{{ $index }}"
                                    style="border-color: #8b9949; color: #8b9949; font-size: 0.85rem;">
                                <i class="fas fa-info-circle me-1"></i>Más Información
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <!-- Call to Action -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="cta-section text-center py-5 px-4 rounded-3" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                <h3 class="mb-3" style="color: #645d4d;">¿Necesitas asesoría personalizada?</h3>
                <p class="lead mb-4">Nuestros especialistas te ayudarán a elegir el alimento perfecto para tus animales</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('contacto') }}" class="btn btn-lg px-4" style="background: linear-gradient(45deg, #8b9949, #a4b85c); color: white;">
                        <i class="fas fa-phone me-2"></i>Contactar Especialista
                    </a>
                    <a href="https://wa.me/51940031589?text=Hola,%20me%20interesa%20conocer%20más%20sobre%20sus%20productos" 
                       target="_blank" class="btn btn-success btn-lg px-4">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modales detallados para cada producto -->
@foreach($productos as $index => $producto)
<div class="modal fade" id="productModal{{ $index }}" tabindex="-1" aria-labelledby="productModalLabel{{ $index }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header" style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%); color: white;">
                <h5 class="modal-title fw-bold" id="productModalLabel{{ $index }}">{{ $producto['titulo'] }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Información principal -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge me-2" style="background: linear-gradient(45deg, #8b9949, #a4b85c);">
                                    {{ $producto['categoria'] }}
                                </span>
                                <span class="text-muted">{{ $producto['edad_recomendada'] }}</span>
                            </div>
                            <p class="lead mb-3">{{ $producto['descripcion'] }}</p>
                        </div>
                        
                        <!-- Beneficios -->
                        @if(isset($producto['beneficios']) && count($producto['beneficios']) > 0)
                        <div class="mb-4">
                            <h6 class="fw-bold mb-3" style="color: #8b9949;">
                                <i class="fas fa-star me-2"></i>Beneficios Principales
                            </h6>
                            <div class="row">
                                @foreach($producto['beneficios'] as $beneficio)
                                <div class="col-md-6 mb-2">
                                    <div class="d-flex align-items-start">
                                        <i class="fas fa-check-circle text-success me-2 mt-1" style="font-size: 0.9rem;"></i>
                                        <span style="font-size: 0.9rem;">{{ $beneficio }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        
                        <!-- Presentaciones disponibles -->
                        @if(isset($producto['presentaciones']) && count($producto['presentaciones']) > 0)
                        <div class="mb-4">
                            <h6 class="fw-bold mb-3" style="color: #8b9949;">
                                <i class="fas fa-box me-2"></i>Presentaciones Disponibles
                            </h6>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($producto['presentaciones'] as $presentacion)
                                    <span class="badge bg-light text-dark px-3 py-2 border">{{ $presentacion }}</span>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        
                        <!-- Información técnica -->
                        <div class="technical-info p-3 rounded-3" style="background-color: #f8f9fa; border-left: 4px solid #8b9949;">
                            <h6 class="fw-bold mb-2" style="color: #8b9949;">
                                <i class="fas fa-flask me-2"></i>Información Técnica
                            </h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <small class="text-muted d-block">Categoría:</small>
                                    <span class="fw-semibold">{{ $producto['categoria'] }}</span>
                                </div>
                                <div class="col-sm-6">
                                    <small class="text-muted d-block">Edad Recomendada:</small>
                                    <span class="fw-semibold">{{ $producto['edad_recomendada'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0">
                <div class="w-100 text-center">
                    <p class="mb-2 text-muted">¿Interesado en este producto?</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="https://wa.me/51940031589?text=Hola,%20me%20interesa%20el%20producto:%20{{ urlencode($producto['titulo']) }}" 
                           target="_blank" class="btn btn-success">
                            <i class="fab fa-whatsapp me-1"></i>Consultar por WhatsApp
                        </a>
                        <a href="{{ route('contacto') }}" class="btn btn-outline-primary">
                            <i class="fas fa-phone me-1"></i>Contactar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

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
    /* Header de productos */
    .products-header {
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .header-stats .stat-item {
        text-align: center;
        min-width: 120px;
    }

    /* Filtros de categoría */
    .filter-btn {
        border: 2px solid #8b9949;
        color: #8b9949;
        background: white;
        padding: 8px 16px;
        border-radius: 25px;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: linear-gradient(45deg, #8b9949, #a4b85c);
        color: white;
        border-color: #8b9949;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(139, 153, 73, 0.3);
    }

    /* Tarjetas de productos */
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
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        border-color: rgba(139, 153, 73, 0.3);
    }

    .category-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 10;
    }

    .category-badge .badge {
        font-size: 0.75rem;
        padding: 6px 12px;
        border-radius: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    .product-card img {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        object-fit: cover;
        height: 220px;
        width: 100%;
    }

    .placeholder-img {
        height: 220px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
    }

    .text-olive {
        color: #8b9949 !important;
    }

    /* Información de beneficios */
    .benefits-preview {
        background: rgba(139, 153, 73, 0.05);
        padding: 12px;
        border-radius: 8px;
        border-left: 3px solid #8b9949;
    }

    .product-info .info-item {
        font-size: 0.85rem;
    }

    /* Efectos de imagen */
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
        background: linear-gradient(135deg, rgba(139, 153, 73, 0.8) 0%, rgba(164, 184, 92, 0.8) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .image-container:hover .image-overlay {
        opacity: 1;
    }

    .image-overlay i {
        font-size: 2.5rem;
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
        transform: scale(1.08);
    }

    /* Modales */
    .modal-content {
        border-radius: 15px;
        border: none;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    }

    .modal-header {
        border-bottom: none;
        padding-bottom: 0;
    }

    .technical-info {
        border: 1px solid rgba(139, 153, 73, 0.2);
    }

    /* CTA Section */
    .cta-section {
        border: 1px solid rgba(139, 153, 73, 0.2);
    }

    /* Animaciones de filtrado */
    .product-item {
        transition: all 0.5s ease;
    }

    .product-item.hidden {
        opacity: 0;
        transform: scale(0.8);
        display: none;
    }

    /* Modo oscuro */
    [data-theme="dark"] .products-header {
        background: linear-gradient(135deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        color: #e0e0e0 !important;
    }

    [data-theme="dark"] .filter-btn {
        background: #2a2a2a;
        color: #a4b85c;
        border-color: #a4b85c;
    }

    [data-theme="dark"] .filter-btn:hover,
    [data-theme="dark"] .filter-btn.active {
        background: linear-gradient(45deg, #a4b85c, #8b9949);
        color: white;
    }

    [data-theme="dark"] .product-card {
        background: #2a2a2a;
        border-color: rgba(164, 184, 92, 0.3);
        color: #e0e0e0;
    }

    [data-theme="dark"] .product-card:hover {
        background: #333333;
        border-color: rgba(164, 184, 92, 0.5);
    }

    [data-theme="dark"] .placeholder-img {
        background: linear-gradient(135deg, #2a2a2a 0%, #1e1e1e 100%);
        color: #b0b0b0;
    }

    [data-theme="dark"] .benefits-preview {
        background: rgba(164, 184, 92, 0.1);
        border-left-color: #a4b85c;
    }

    [data-theme="dark"] .text-muted {
        color: #b0b0b0 !important;
    }

    [data-theme="dark"] .cta-section {
        background: linear-gradient(135deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        border-color: rgba(164, 184, 92, 0.3);
        color: #e0e0e0;
    }

    [data-theme="dark"] .technical-info {
        background: #1e1e1e !important;
        border-color: rgba(164, 184, 92, 0.3);
        color: #e0e0e0;
    }

    [data-theme="dark"] .modal-content {
        background: #2a2a2a;
        color: #e0e0e0;
    }

    [data-theme="dark"] .modal-body {
        background: #2a2a2a;
    }
</style>

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
    
    filterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Actualizar botones activos
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filtrar productos
            productItems.forEach(function(item) {
                const itemCategory = item.getAttribute('data-category');
                
                if (category === 'all' || itemCategory === category) {
                    item.classList.remove('hidden');
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.classList.add('hidden');
                    }, 300);
                }
            });
            
            // Animación de contador
            setTimeout(() => {
                const visibleProducts = document.querySelectorAll('.product-item:not(.hidden)').length;
                console.log(`Mostrando ${visibleProducts} productos de la categoría: ${category}`);
            }, 400);
        });
    });

    // Animación de entrada inicial
    productItems.forEach(function(item, index) {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            item.style.transition = 'all 0.6s ease';
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Contador de productos por categoría
    function updateCategoryCount() {
        filterButtons.forEach(function(button) {
            const category = button.getAttribute('data-category');
            let count = 0;
            
            if (category === 'all') {
                count = productItems.length;
            } else {
                productItems.forEach(function(item) {
                    if (item.getAttribute('data-category') === category) {
                        count++;
                    }
                });
            }
            
            // Agregar contador al botón si no existe
            if (!button.querySelector('.count-badge')) {
                const countBadge = document.createElement('span');
                countBadge.className = 'count-badge ms-1';
                countBadge.style.cssText = 'font-size: 0.7rem; opacity: 0.8;';
                countBadge.textContent = `(${count})`;
                button.appendChild(countBadge);
            }
        });
    }

    // Inicializar contador
    updateCategoryCount();

    // Efecto hover para las tarjetas de productos
    productItems.forEach(function(item) {
        const card = item.querySelector('.product-card');
        if (card) {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        }
    });
});
</script>

@endsection
