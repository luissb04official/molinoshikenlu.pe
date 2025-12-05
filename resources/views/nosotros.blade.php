@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section position-relative overflow-hidden mb-5" style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%); min-height: 300px; border-radius: 20px;">
        <!-- Elementos decorativos de fondo -->
        <div class="hero-decoration position-absolute" style="top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.6;"></div>
        <div class="hero-decoration position-absolute" style="bottom: -30px; left: -30px; width: 150px; height: 150px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.4;"></div>
        
        <div class="container-fluid h-100">
            <div class="row align-items-center h-100 py-5">
                <div class="col-12 text-center">
                    <div class="hero-content">
                        <h1 class="display-4 text-white fw-bold mb-3">
                            <i class="fas fa-industry me-3"></i>Molinos Hikenlu EIRL
                        </h1>
                        <p class="lead text-white mb-4 fs-5">Más de una década nutriendo el futuro agropecuario</p>
                        
                        <div class="hero-badges d-flex justify-content-center flex-wrap gap-3 mt-5">
                            <div class="hero-badge">
                                <div class="badge-content-enhanced px-4 py-3 rounded-pill shadow-lg">
                                    <i class="fas fa-calendar-alt me-2 fs-5" style="color: #8b9949;"></i>
                                    <span class="fw-semibold fs-6" style="color: #1a202c; text-shadow: none;">Desde 2010</span>
                                </div>
                            </div>
                            <div class="hero-badge">
                                <div class="badge-content-enhanced px-4 py-3 rounded-pill shadow-lg">
                                    <i class="fas fa-certificate me-2 fs-5" style="color: #d67958;"></i>
                                    <span class="fw-semibold fs-6" style="color: #1a202c; text-shadow: none;">RUC: 20614323206</span>
                                </div>
                            </div>
                            <div class="hero-badge">
                                <div class="badge-content-enhanced px-4 py-3 rounded-pill shadow-lg">
                                    <i class="fas fa-map-marker-alt me-2 fs-5" style="color: #8b9949;"></i>
                                    <span class="fw-semibold fs-6" style="color: #1a202c; text-shadow: none;">Huaral, Lima</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <!-- Nuestra Trayectoria -->
            <section class="mb-5">
                <h2 class="section-title text-olive mb-4 d-flex align-items-center">
                    <i class="fas fa-history me-3 fs-3" style="color: #d67958;"></i>
                    Nuestra Trayectoria
                </h2>
                
                <div class="timeline-container">
                    <div class="timeline-item mb-4">
                        <div class="timeline-card p-4 rounded-3 shadow-sm position-relative">
                            <div class="timeline-year">
                                <span class="badge bg-gradient-primary px-3 py-2">2010</span>
                            </div>
                            <h4 class="timeline-title mb-3" style="color: #8b9949;">
                                <i class="fas fa-seedling me-2"></i>Fundación
                            </h4>
                            <p class="timeline-content" style="line-height: 1.7;">
                                <span class="fw-semibold" style="color: #8b9949;">MOLINOS HIKENLU EIRL</span> inicia operaciones con una visión clara: 
                                revolucionar la nutrición animal en la provincia de <span class="fw-semibold">Huaral</span> y expandirse 
                                por toda la región de Lima. Comenzamos con equipamiento moderno y un equipo especializado.
                            </p>
                        </div>
                    </div>
                    
                    <div class="timeline-item mb-4">
                        <div class="timeline-card p-4 rounded-3 shadow-sm position-relative">
                            <div class="timeline-year">
                                <span class="badge bg-gradient-success px-3 py-2">2015</span>
                            </div>
                            <h4 class="timeline-title mb-3" style="color: #8b9949;">
                                <i class="fas fa-chart-line me-2"></i>Expansión
                            </h4>
                            <p class="timeline-content" style="line-height: 1.7;">
                                Ampliamos nuestras instalaciones y desarrollamos <span class="fw-semibold">15+ líneas de productos</span> 
                                especializados. Construimos relaciones sólidas con productores pecuarios, granjas familiares 
                                y empresas agropecuarias de todo tipo.
                            </p>
                        </div>
                    </div>
                    
                    <div class="timeline-item mb-4">
                        <div class="timeline-card p-4 rounded-3 shadow-sm position-relative">
                            <div class="timeline-year">
                                <span class="badge bg-gradient-warning px-3 py-2">2020</span>
                            </div>
                            <h4 class="timeline-title mb-3" style="color: #8b9949;">
                                <i class="fas fa-award me-2"></i>Certificación
                            </h4>
                            <p class="timeline-content" style="line-height: 1.7;">
                                Obtenemos la <span class="fw-semibold">certificación SENASA</span> y alcanzamos la marca de 
                                <span class="fw-semibold">500+ clientes satisfechos</span>. Implementamos procesos de calidad 
                                más rigurosos y tecnología de punta en nuestra producción.
                            </p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-card p-4 rounded-3 shadow-sm position-relative">
                            <div class="timeline-year">
                                <span class="badge bg-gradient-info px-3 py-2">2024</span>
                            </div>
                            <h4 class="timeline-title mb-3" style="color: #8b9949;">
                                <i class="fas fa-star me-2"></i>Liderazgo
                            </h4>
                            <p class="timeline-content" style="line-height: 1.7;">
                                Nos consolidamos como <span class="fw-semibold">líderes regionales</span> en nutrición animal. 
                                Ubicados estratégicamente en <span class="fw-semibold">Av. Estación S/N, Huaral</span>, mantenemos 
                                los más altos estándares de calidad con instalaciones modernas.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Misión, Visión y Valores -->
            <section>
                <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                        <div class="mvv-card h-100 p-4 rounded-4 shadow-sm position-relative overflow-hidden">
                            <div class="card-bg-pattern position-absolute top-0 end-0 opacity-25">
                                <i class="fas fa-bullseye" style="font-size: 4rem; color: #8b9949;"></i>
                            </div>
                            <h3 class="card-title mb-3" style="color: #8b9949;">
                                <i class="fas fa-bullseye me-2"></i>Misión
                            </h3>
                            <p class="card-text" style="line-height: 1.7;">
                                Proveer <span class="fw-semibold" style="color: #8b9949;">soluciones nutricionales de alta calidad</span> 
                                que contribuyan a la productividad y salud de los animales, apoyando el desarrollo del sector agropecuario.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="mvv-card h-100 p-4 rounded-4 shadow-sm position-relative overflow-hidden">
                            <div class="card-bg-pattern position-absolute top-0 end-0 opacity-25">
                                <i class="fas fa-eye" style="font-size: 4rem; color: #d67958;"></i>
                            </div>
                            <h3 class="card-title mb-3" style="color: #8b9949;">
                                <i class="fas fa-eye me-2"></i>Visión
                            </h3>
                            <p class="card-text" style="line-height: 1.7;">
                                Ser reconocidos como <span class="fw-semibold" style="color: #8b9949;">líderes regionales en nutrición animal</span> 
                                por nuestra calidad, innovación y servicio al cliente.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Valores -->
                <div class="values-section">
                    <h3 class="section-title mb-4" style="color: #8b9949;">
                        <i class="fas fa-heart me-2"></i>Nuestros Valores
                    </h3>
                    <div class="row g-3">
                        <div class="col-md-3 col-sm-6">
                            <div class="value-card text-center p-4 rounded-3 h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-gem fs-1" style="color: #8b9949;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #2d3748;">Calidad</h5>
                                <p class="value-desc small mb-0">Excelencia en cada producto</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="value-card text-center p-4 rounded-3 h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-handshake fs-1" style="color: #d67958;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #2d3748;">Compromiso</h5>
                                <p class="value-desc small mb-0">Dedicación total al cliente</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="value-card text-center p-4 rounded-3 h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-search fs-1" style="color: #8b9949;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #2d3748;">Transparencia</h5>
                                <p class="value-desc small mb-0">Honestidad en cada proceso</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="value-card text-center p-4 rounded-3 h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-users fs-1" style="color: #d67958;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #2d3748;">Servicio</h5>
                                <p class="value-desc small mb-0">Atención personalizada</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="sidebar-sticky sticky-top" style="top: 100px;">
                <!-- Información de Contacto -->
                <div class="contact-sidebar rounded-4 shadow-sm p-4 mb-4 position-relative overflow-hidden" 
                     style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%);">
                    <!-- Elementos decorativos -->
                    <div class="contact-decoration position-absolute" style="top: -20px; right: -20px; width: 80px; height: 80px; 
                                                                          background: rgba(255,255,255,0.1); border-radius: 50%; 
                                                                          animation: float 6s ease-in-out infinite;"></div>
                    <div class="contact-decoration position-absolute" style="bottom: -15px; left: -15px; width: 60px; height: 60px; 
                                                                          background: rgba(255,255,255,0.1); border-radius: 50%; 
                                                                          animation: float 8s ease-in-out infinite reverse;"></div>
                    
                    <h4 class="text-white mb-4 d-flex align-items-center">
                        <i class="fas fa-phone me-2"></i>Contáctanos
                    </h4>
                    
                    <div class="contact-items">
                        <div class="contact-item mb-3 p-3 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-white fs-5 me-3"></i>
                                <div>
                                    <small class="text-white-50">Dirección</small>
                                    <div class="text-white fw-semibold">Av. Estación S/N, Huaral - Lima</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-item mb-3 p-3 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-phone text-white fs-5 me-3"></i>
                                <div>
                                    <small class="text-white-50">Teléfono</small>
                                    <div class="text-white fw-semibold">940 031 589</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-item mb-4 p-3 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-white fs-5 me-3"></i>
                                <div>
                                    <small class="text-white-50">Email</small>
                                    <div class="text-white fw-semibold">molinosraquel.adm@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-actions mt-4 d-flex flex-column gap-3 align-items-center">
                        <a href="https://wa.me/51940031589?text=Hola,%20me%20interesa%20conocer%20más%20sobre%20Molinos%20Hikenlu" 
                           target="_blank" class="btn btn-whatsapp px-5 py-3 rounded-pill fw-semibold" style="min-width: 200px;">
                            <i class="fab fa-whatsapp me-2 fs-5"></i>
                            WhatsApp
                        </a>
                        <a href="{{ route('contacto') }}" class="btn btn-formulario px-5 py-3 rounded-pill fw-semibold" style="min-width: 200px;">
                            <i class="fas fa-envelope me-2"></i>
                            Formulario
                        </a>
                    </div>
                </div>
                
                <!-- Estadísticas -->
                <div class="stats-card-enhanced rounded-4 shadow-sm p-4 mb-4">
                    <h5 class="mb-4" style="color: #8b9949;">
                        <i class="fas fa-chart-bar me-2"></i>Nuestros Números
                    </h5>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-item-enhanced text-center p-3 rounded-3">
                                <div class="stat-number fs-4 fw-bold" style="color: #8b9949;">15+</div>
                                <div class="stat-label small">Años de experiencia</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-item-enhanced text-center p-3 rounded-3">
                                <div class="stat-number fs-4 fw-bold" style="color: #d67958;">500+</div>
                                <div class="stat-label small">Clientes satisfechos</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-item-enhanced text-center p-3 rounded-3">
                                <div class="stat-number fs-4 fw-bold" style="color: #8b9949;">15+</div>
                                <div class="stat-label small">Líneas de productos</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-item-enhanced text-center p-3 rounded-3">
                                <div class="stat-number fs-4 fw-bold" style="color: #d67958;">100%</div>
                                <div class="stat-label small">Certificado SENASA</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Call to Action -->
                <div class="cta-card rounded-4 shadow-sm p-4 text-center">
                    <h5 class="mb-3" style="color: #8b9949;">
                        <i class="fas fa-shopping-cart me-2"></i>¿Interesado en nuestros productos?
                    </h5>
                    <p class="mb-4">Descubre nuestra amplia gama de productos nutricionales para animales.</p>
                    <a href="{{ route('productos') }}" class="btn btn-cta-productos px-4 py-2 rounded-pill fw-semibold">
                        <i class="fas fa-shopping-cart me-2"></i>
                        Ver Productos
                    </a>
                </div>
            </div>
        </div>
    </div>

<style>
    /* Animaciones flotantes */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    /* Hero section */
    .hero-content h1 {
        text-shadow: 2px 2px 8px rgba(0,0,0,0.3) !important;
    }
    
    .hero-content p {
        text-shadow: 1px 1px 4px rgba(0,0,0,0.3) !important;
    }
    
    /* Badges en hero - Diseño sólido */
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
    
    /* Botones de acción mejorados */
    .btn-whatsapp {
        background: linear-gradient(135deg, #25D366 0%, #20b358 100%);
        color: white;
        border: none;
        box-shadow: 0 1px 4px rgba(37, 211, 102, 0.2);
        transition: all 0.2s ease;
    }
    
    .btn-whatsapp:hover {
        background: linear-gradient(135deg, #20b358 0%, #1a9a4a 100%);
        color: white;
        opacity: 0.95;
    }
    
    .btn-formulario {
        background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(248,249,250,0.9) 100%);
        color: #2d3748;
        border: 2px solid rgba(255,255,255,0.3);
        box-shadow: 0 1px 4px rgba(0,0,0,0.1);
        transition: all 0.2s ease;
    }
    
    .btn-formulario:hover {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        color: #8b9949;
        border-color: rgba(139, 153, 73, 0.6);
        opacity: 0.95;
    }
    
    /* Timeline */
    .timeline-year {
        position: absolute;
        top: -10px;
        right: 20px;
        z-index: 10;
    }
    
    .timeline-card {
        background: rgba(255,255,255,0.95);
        border: 1px solid rgba(139, 153, 73, 0.2);
        transition: all 0.3s ease;
        border-left: 4px solid #8b9949;
    }
    
    .timeline-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(139,153,73,0.2);
        border-left-color: #d67958;
    }
    
    /* Cards de Misión/Visión */
    .mvv-card {
        background: rgba(255,255,255,0.95);
        border: 1px solid rgba(139, 153, 73, 0.2);
        transition: all 0.3s ease;
    }
    
    .mvv-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(139,153,73,0.15);
        border-color: rgba(139, 153, 73, 0.3);
    }
    
    /* Valores */
    .value-card {
        background: rgba(248, 250, 252, 0.8);
        border: 2px solid rgba(139, 153, 73, 0.1);
        transition: all 0.3s ease;
        backdrop-filter: blur(5px);
    }
    
    .value-card:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.95);
        border-color: rgba(139, 153, 73, 0.3);
        box-shadow: 0 10px 25px rgba(139,153,73,0.2);
    }
    
    /* Estadísticas */
    .stats-card-enhanced {
        background: rgba(248, 250, 252, 0.9);
        border: 1px solid rgba(139, 153, 73, 0.2);
    }
    
    .stat-item-enhanced {
        background: rgba(139, 153, 73, 0.1);
        border: 1px solid rgba(139, 153, 73, 0.2);
        transition: all 0.3s ease;
    }
    
    .stat-item-enhanced:hover {
        background: rgba(139, 153, 73, 0.2);
        transform: scale(1.05);
    }
    
    /* CTA */
    .cta-card {
        background: rgba(248, 250, 252, 0.9);
        border: 1px solid rgba(139, 153, 73, 0.2);
    }
    
    /* Botón CTA Productos */
    .btn-cta-productos {
        background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%);
        color: white;
        border: none;
        box-shadow: 0 1px 4px rgba(139, 153, 73, 0.2);
        transition: all 0.2s ease;
    }
    
    .btn-cta-productos:hover {
        background: linear-gradient(135deg, #7a8740 0%, #93a653 100%);
        color: white;
        opacity: 0.95;
    }
    
    /* Sidebar */
    .contact-sidebar {
        backdrop-filter: blur(10px);
    }
    
    /* Modo Oscuro */
    [data-theme="dark"] .cta-card p {
        color: #b0b0b0 !important;
    }
    
    /* Badges en modo oscuro */
    [data-theme="dark"] .badge-content-enhanced {
        background: rgba(25, 25, 25, 0.95) !important;
        border-color: rgba(164, 184, 92, 0.8) !important;
    }
    
    [data-theme="dark"] .badge-content-enhanced span {
        color: #f5f5f5 !important;
        font-weight: 700 !important;
    }
    
    [data-theme="dark"] .hero-badge:hover .badge-content-enhanced {
        border-color: rgba(164, 184, 92, 0.9) !important;
        background: rgba(25, 25, 25, 0.98) !important;
    }
    
    /* Botones en modo oscuro */
    [data-theme="dark"] .btn-formulario {
        background: linear-gradient(135deg, rgba(42, 42, 42, 0.9) 0%, rgba(30, 30, 30, 0.9) 100%);
        color: #e0e0e0;
        border-color: rgba(164, 184, 92, 0.3);
    }
    
    [data-theme="dark"] .btn-formulario:hover {
        background: linear-gradient(135deg, #2a2a2a 0%, #1e1e1e 100%);
        color: #a4b85c;
        border-color: rgba(164, 184, 92, 0.5);
    }
    
    [data-theme="dark"] .btn-cta-productos {
        background: linear-gradient(135deg, #a4b85c 0%, #8b9949 100%);
    }
    
    [data-theme="dark"] .btn-cta-productos:hover {
        background: linear-gradient(135deg, #b5c96d 0%, #9caa5a 100%);
    }
    
    /* Timeline en modo oscuro */
    [data-theme="dark"] .timeline-card {
        background: rgba(42, 42, 42, 0.9) !important;
        border-color: rgba(164, 184, 92, 0.3) !important;
        color: #e0e0e0;
    }
    
    [data-theme="dark"] .timeline-card:hover {
        border-left-color: rgba(164, 184, 92, 0.6) !important;
        background: rgba(42, 42, 42, 0.95) !important;
    }
    
    /* MVV Cards en modo oscuro */
    [data-theme="dark"] .mvv-card {
        background: linear-gradient(145deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        border-color: rgba(164, 184, 92, 0.3) !important;
        color: #e0e0e0;
    }
    
    [data-theme="dark"] .value-card {
        background: linear-gradient(145deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        border-color: rgba(164, 184, 92, 0.3) !important;
        color: #e0e0e0;
    }
    
    [data-theme="dark"] .value-desc {
        color: #b0b0b0 !important;
    }
    
    [data-theme="dark"] .stats-card-enhanced {
        background: linear-gradient(145deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        border-color: rgba(164, 184, 92, 0.3) !important;
        color: #e0e0e0;
    }
    
    [data-theme="dark"] .stat-item-enhanced {
        background: rgba(164, 184, 92, 0.1) !important;
        border-color: rgba(164, 184, 92, 0.2) !important;
        color: #e0e0e0;
    }
    
    [data-theme="dark"] .cta-card {
        background: linear-gradient(145deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        border-color: rgba(164, 184, 92, 0.3) !important;
        color: #e0e0e0;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .hero-badges {
            flex-direction: column;
            gap: 1.5rem !important;
            align-items: center;
        }
        
        .badge-content-enhanced {
            min-width: 240px;
            text-align: center;
            padding: 0.75rem 1.5rem !important;
        }
        
        .section-title {
            font-size: 1.5rem;
        }
        
        .sidebar-sticky {
            position: relative;
            top: auto;
        }
        
        .contact-actions {
            width: 100%;
        }
        
        .btn-whatsapp, .btn-formulario {
            min-width: 240px !important;
        }
    }
</style>
    
@endsection
