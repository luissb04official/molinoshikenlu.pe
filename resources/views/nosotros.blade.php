@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero-about mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="hero-banner text-center py-5 px-4 position-relative overflow-hidden" 
                     style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 50%, #8b9949 100%); 
                            border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.2);">
                    <div class="hero-content position-relative z-3">
                        <h1 class="display-4 fw-bold mb-3 text-white" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.3);">
                            <i class="fas fa-industry me-3" style="color: #fff; filter: drop-shadow(0 0 10px rgba(255,255,255,0.3));"></i>
                            Molinos Hikenlu EIRL
                        </h1>
                        <p class="lead fs-3 mb-4 text-white" style="text-shadow: 1px 1px 4px rgba(0,0,0,0.3);">
                            Más de una década nutriendo el futuro agropecuario
                        </p>
                        <div class="hero-badges d-flex justify-content-center flex-wrap gap-3 mt-5">
                            <div class="hero-badge">
                                <div class="badge-content-enhanced px-5 py-4 rounded-pill shadow-lg">
                                    <i class="fas fa-calendar-alt me-3 fs-4" style="color: #8b9949;"></i>
                                    <span class="fw-bold fs-5" style="color: #1a202c; text-shadow: none;">Desde 2010</span>
                                </div>
                            </div>
                            <div class="hero-badge">
                                <div class="badge-content-enhanced px-5 py-4 rounded-pill shadow-lg">
                                    <i class="fas fa-certificate me-3 fs-4" style="color: #d67958;"></i>
                                    <span class="fw-bold fs-5" style="color: #1a202c; text-shadow: none;">RUC: 20614323206</span>
                                </div>
                            </div>
                            <div class="hero-badge">
                                <div class="badge-content-enhanced px-5 py-4 rounded-pill shadow-lg">
                                    <i class="fas fa-map-marker-alt me-3 fs-4" style="color: #8b9949;"></i>
                                    <span class="fw-bold fs-5" style="color: #1a202c; text-shadow: none;">Huaral, Lima</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Elementos decorativos -->
                    <div class="hero-decoration">
                        <div class="floating-element" style="position: absolute; top: 20%; left: 10%; width: 60px; height: 60px; 
                                                             background: rgba(255,255,255,0.1); border-radius: 50%; 
                                                             animation: float 6s ease-in-out infinite;"></div>
                        <div class="floating-element" style="position: absolute; top: 60%; right: 15%; width: 40px; height: 40px; 
                                                             background: rgba(255,255,255,0.1); border-radius: 50%; 
                                                             animation: float 8s ease-in-out infinite reverse;"></div>
                        <div class="floating-element" style="position: absolute; bottom: 20%; left: 20%; width: 30px; height: 30px; 
                                                             background: rgba(214, 121, 88, 0.3); border-radius: 50%; 
                                                             animation: float 7s ease-in-out infinite;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-4">
    <div class="row g-5">
        <div class="col-lg-8">
            <!-- Historia Expandida -->
            <div class="content-section mb-5">
                <div class="section-header mb-4">
                    <h2 class="section-title position-relative">
                        <i class="fas fa-history me-3" style="color: #d67958;"></i>
                        Nuestra Trayectoria
                        <div class="title-underline"></div>
                    </h2>
                </div>
                
                <div class="timeline-container">
                    <div class="timeline-item mb-4">
                        <div class="timeline-card p-4 rounded-3 shadow-sm position-relative">
                            <div class="timeline-year">
                                <span class="badge bg-gradient-primary px-3 py-2">2010</span>
                            </div>
                            <h4 class="timeline-title mb-3" style="color: #8b9949;">
                                <i class="fas fa-rocket me-2"></i>Fundación
                            </h4>
                            <p class="timeline-content" style="line-height: 1.7;">
                                <span class="fw-bold" style="color: #8b9949;">MOLINOS HIKENLU EIRL</span> inicia operaciones con una visión clara: 
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
            </div>

            <!-- Misión, Visión y Valores en Cards Separadas -->
            <div class="mvv-section">
                <div class="row g-4 mb-5">
                    <!-- Misión -->
                    <div class="col-md-6">
                        <div class="mvv-card mission-card h-100 p-4 rounded-3 shadow-sm position-relative overflow-hidden">
                            <div class="card-icon mb-3">
                                <div class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle" 
                                     style="width: 60px; height: 60px; background: linear-gradient(135deg, #8b9949, #a4b85c);">
                                    <i class="fas fa-bullseye text-white fs-3"></i>
                                </div>
                            </div>
                            <h3 class="card-title mb-3" style="color: #8b9949; font-weight: 700;">
                                Misión
                            </h3>
                            <p class="card-content" style="line-height: 1.7; font-size: 1rem;">
                                Proveer <span class="highlight">soluciones nutricionales innovadoras</span> y de alta calidad que 
                                optimicen la productividad, salud y bienestar de los animales de producción, contribuyendo 
                                al <span class="highlight">desarrollo sostenible</span> del sector agropecuario nacional mediante 
                                la excelencia en el servicio.
                            </p>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                    
                    <!-- Visión -->
                    <div class="col-md-6">
                        <div class="mvv-card vision-card h-100 p-4 rounded-3 shadow-sm position-relative overflow-hidden">
                            <div class="card-icon mb-3">
                                <div class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle" 
                                     style="width: 60px; height: 60px; background: linear-gradient(135deg, #d67958, #e68a6b);">
                                    <i class="fas fa-eye text-white fs-3"></i>
                                </div>
                            </div>
                            <h3 class="card-title mb-3" style="color: #8b9949; font-weight: 700;">
                                Visión
                            </h3>
                            <p class="card-content" style="line-height: 1.7; font-size: 1rem;">
                                Ser reconocidos como la <span class="highlight">empresa líder en nutrición animal</span> 
                                a nivel regional, destacando por nuestra innovación constante, calidad superior, 
                                responsabilidad ambiental y el <span class="highlight">impacto positivo</span> en la 
                                rentabilidad de nuestros clientes.
                            </p>
                            <div class="card-decoration"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Valores Corporativos -->
                <div class="values-section">
                    <div class="section-header mb-4 text-center">
                        <h3 class="section-title position-relative d-inline-block">
                            <i class="fas fa-heart me-3" style="color: #d67958;"></i>
                            Nuestros Valores Corporativos
                            <div class="title-underline"></div>
                        </h3>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-lg-4 col-md-6">
                            <div class="value-card p-3 rounded-3 shadow-sm h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-star fs-2" style="color: #d67958;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #8b9949;">Excelencia</h5>
                                <p class="value-desc mb-0" style="font-size: 0.9rem; line-height: 1.5;">Calidad superior en cada producto y proceso</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="value-card p-3 rounded-3 shadow-sm h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-handshake fs-2" style="color: #d67958;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #8b9949;">Compromiso</h5>
                                <p class="value-desc mb-0" style="font-size: 0.9rem; line-height: 1.5;">Dedicación total con nuestros clientes</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="value-card p-3 rounded-3 shadow-sm h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-balance-scale fs-2" style="color: #d67958;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #8b9949;">Transparencia</h5>
                                <p class="value-desc mb-0" style="font-size: 0.9rem; line-height: 1.5;">Honestidad en todas nuestras operaciones</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="value-card p-3 rounded-3 shadow-sm h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-cogs fs-2" style="color: #d67958;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #8b9949;">Innovación</h5>
                                <p class="value-desc mb-0" style="font-size: 0.9rem; line-height: 1.5;">Mejora continua y desarrollo tecnológico</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="value-card p-3 rounded-3 shadow-sm h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-leaf fs-2" style="color: #d67958;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #8b9949;">Sostenibilidad</h5>
                                <p class="value-desc mb-0" style="font-size: 0.9rem; line-height: 1.5;">Respeto y cuidado del medio ambiente</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="value-card p-3 rounded-3 shadow-sm h-100">
                                <div class="value-icon mb-3">
                                    <i class="fas fa-users fs-2" style="color: #d67958;"></i>
                                </div>
                                <h5 class="value-title mb-2" style="color: #8b9949;">Servicio</h5>
                                <p class="value-desc mb-0" style="font-size: 0.9rem; line-height: 1.5;">Atención personalizada y asesoría experta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="sidebar-sticky">
                <!-- Contact Card Mejorada -->
                <div class="contact-card-enhanced mb-4 p-4 rounded-4 shadow-lg position-relative overflow-hidden" 
                     style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 50%, #8b9949 100%); color: white;">
                    <div class="contact-content position-relative z-2">
                        <h4 class="mb-4 d-flex align-items-center">
                            <div class="icon-bg me-3 d-flex align-items-center justify-content-center rounded-circle" 
                                 style="width: 50px; height: 50px; background: rgba(255,255,255,0.2);">
                                <i class="fas fa-phone-alt text-white"></i>
                            </div>
                            <span>Contáctanos</span>
                        </h4>
                        
                        <div class="contact-items">
                            <div class="contact-item mb-3 p-3 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt me-3 fs-5"></i>
                                    <div>
                                        <div class="fw-semibold">Dirección</div>
                                        <small class="opacity-90">Av. Estación S/N, Huaral - Lima</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="contact-item mb-3 p-3 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-phone me-3 fs-5"></i>
                                    <div>
                                        <div class="fw-semibold">Teléfono</div>
                                        <a href="tel:940031589" class="text-white text-decoration-none">
                                            <small class="opacity-90">940 031 589</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="contact-item mb-3 p-3 rounded-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-envelope me-3 fs-5"></i>
                                    <div>
                                        <div class="fw-semibold">Email</div>
                                        <a href="mailto:molinosraquel.adm@gmail.com" class="text-white text-decoration-none">
                                            <small class="opacity-90">molinosraquel.adm@gmail.com</small>
                                        </a>
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
                    
                    <!-- Elementos decorativos -->
                    <div class="contact-decoration position-absolute" style="top: -20px; right: -20px; width: 80px; height: 80px; 
                                                                          background: rgba(255,255,255,0.1); border-radius: 50%; 
                                                                          animation: float 8s ease-in-out infinite;"></div>
                </div>
                
                <!-- Stats Card Mejorada -->
                <div class="stats-card-enhanced p-4 rounded-4 shadow-sm mb-4">
                    <h5 class="mb-4 d-flex align-items-center" style="color: #8b9949;">
                        <div class="icon-bg me-3 d-flex align-items-center justify-content-center rounded-circle" 
                             style="width: 45px; height: 45px; background: linear-gradient(135deg, #8b9949, #a4b85c);">
                            <i class="fas fa-chart-line text-white"></i>
                        </div>
                        <span>Nuestros Logros</span>
                    </h5>
                    
                    <div class="stats-grid">
                        <div class="stat-item-enhanced mb-3 p-3 rounded-3 shadow-sm">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt me-3" style="color: #d67958;"></i>
                                    <span style="font-size: 0.9rem;">Experiencia</span>
                                </div>
                                <div class="stat-number fw-bold" style="color: #8b9949; font-size: 1.2rem;">14+ años</div>
                            </div>
                        </div>
                        
                        <div class="stat-item-enhanced mb-3 p-3 rounded-3 shadow-sm">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-users me-3" style="color: #d67958;"></i>
                                    <span style="font-size: 0.9rem;">Clientes</span>
                                </div>
                                <div class="stat-number fw-bold" style="color: #8b9949; font-size: 1.2rem;">500+</div>
                            </div>
                        </div>
                        
                        <div class="stat-item-enhanced mb-3 p-3 rounded-3 shadow-sm">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-box me-3" style="color: #d67958;"></i>
                                    <span style="font-size: 0.9rem;">Productos</span>
                                </div>
                                <div class="stat-number fw-bold" style="color: #8b9949; font-size: 1.2rem;">15+</div>
                            </div>
                        </div>
                        
                        <div class="stat-item-enhanced p-3 rounded-3 shadow-sm">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-award me-3" style="color: #d67958;"></i>
                                    <span style="font-size: 0.9rem;">Calidad</span>
                                </div>
                                <div class="stat-number fw-bold" style="color: #8b9949; font-size: 1.2rem;">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Card -->
                <div class="cta-card p-4 rounded-4 shadow-sm text-center" style="background: linear-gradient(145deg, #f8f9fa 0%, #e9ecef 100%); border: 2px solid rgba(139, 153, 73, 0.2);">
                    <h6 class="mb-3" style="color: #8b9949;">¿Necesitas más información?</h6>
                    <p class="small mb-3" style="color: #5a5a5a;">Contáctanos para conocer más sobre nuestros productos y servicios</p>
                    <a href="{{ route('productos') }}" class="btn btn-cta-productos px-4 py-2 rounded-pill fw-semibold">
                        <i class="fas fa-shopping-cart me-2"></i>
                        Ver Productos
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Animación flotante para elementos decorativos */
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Hero Section */
    .hero-banner {
        position: relative;
        overflow: hidden;
    }
    
    .hero-badge {
        animation: fadeInUp 0.6s ease-out;
    }
    
    .hero-badge:nth-child(2) { animation-delay: 0.2s; }
    .hero-badge:nth-child(3) { animation-delay: 0.4s; }
    
    /* Secciones principales - Ambos modos */
    .section-title {
        color: #8b9949 !important;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    
    .title-underline {
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #d67958, #8b9949);
        border-radius: 2px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.2);
    }
    
    /* Mejoras generales de texto */
    .hero-content h1 {
        text-shadow: 2px 2px 8px rgba(0,0,0,0.4) !important;
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
    
    /* Timeline - Modo Claro */
    .timeline-card {
        background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        border: 1px solid rgba(139, 153, 73, 0.15);
        border-left: 4px solid #8b9949;
        transition: all 0.3s ease;
        position: relative;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }
    
    .timeline-card:hover {
        transform: translateX(10px) translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        border-left-color: #d67958;
        background: linear-gradient(145deg, #ffffff 0%, #f0f4f0 100%);
    }
    
    .timeline-title {
        color: #8b9949 !important;
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }
    
    .timeline-content {
        color: #4a5568 !important;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    .timeline-year .badge {
        position: absolute;
        top: -10px;
        right: 20px;
        font-size: 0.8rem;
    }
    
    .timeline-title {
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
    }
    
    .timeline-content {
        color: #5a5a5a;
        font-size: 0.95rem;
    }
    
    /* Cards de Misión y Visión - Modo Claro */
    .mvv-card {
        background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        border: 1px solid rgba(139, 153, 73, 0.15);
        transition: all 0.4s ease;
        position: relative;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }
    
    .mvv-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        border-color: rgba(139, 153, 73, 0.4);
        background: linear-gradient(145deg, #ffffff 0%, #f0f4f0 100%);
    }
    
    .mvv-card .card-content {
        color: #4a5568 !important;
    }
    
    .mvv-card .card-title {
        color: #8b9949 !important;
    }
    
    .mvv-card .highlight {
        background: linear-gradient(120deg, #8b9949, #a4b85c);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 600;
    }
    
    .card-decoration {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, rgba(139, 153, 73, 0.1), rgba(214, 121, 88, 0.1));
        border-radius: 50%;
        transition: all 0.3s ease;
    }
    
    .mvv-card:hover .card-decoration {
        transform: scale(1.5) rotate(180deg);
        opacity: 0.8;
    }
    
    /* Cards de Valores - Modo Claro */
    .value-card {
        background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        border: 1px solid rgba(139, 153, 73, 0.15);
        transition: all 0.3s ease;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    }
    
    .value-card:hover {
        transform: translateY(-5px) rotateY(5deg);
        box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        border-color: rgba(139, 153, 73, 0.4);
        background: linear-gradient(145deg, #ffffff 0%, #f0f4f0 100%);
    }
    
    .value-title {
        color: #8b9949 !important;
        font-weight: 600;
    }
    
    .value-desc {
        color: #6b7280 !important;
    }
    
    .value-icon {
        transition: all 0.3s ease;
    }
    
    .value-card:hover .value-icon {
        transform: scale(1.2) rotate(-10deg);
    }
    
    /* Sidebar */
    .sidebar-sticky {
        position: sticky;
        top: 100px;
    }
    
    .contact-card-enhanced {
        transition: all 0.4s ease;
        position: relative;
    }
    
    .contact-card-enhanced:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 50px rgba(139, 153, 73, 0.3) !important;
    }
    
    .contact-item {
        transition: all 0.3s ease;
    }
    
    .contact-item:hover {
        background: rgba(255,255,255,0.2) !important;
        transform: scale(1.02);
    }
    
    /* Stats Cards - Modo Claro */
    .stats-card-enhanced {
        background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        border: 1px solid rgba(139, 153, 73, 0.2);
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    }
    
    .stats-card-enhanced:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        background: linear-gradient(145deg, #ffffff 0%, #f0f4f0 100%);
    }
    
    .stats-card-enhanced h5 {
        color: #8b9949 !important;
    }
    
    .stat-item-enhanced {
        background: rgba(139, 153, 73, 0.08);
        border: 1px solid rgba(139, 153, 73, 0.15);
        transition: all 0.3s ease;
    }
    
    .stat-item-enhanced:hover {
        background: rgba(139, 153, 73, 0.15);
        transform: scale(1.03);
        border-color: rgba(139, 153, 73, 0.3);
    }
    
    .stat-item-enhanced span:first-child {
        color: #4a5568 !important;
    }
    
    .stat-number {
        color: #8b9949 !important;
    }
    
    /* CTA Card - Modo Claro */
    .cta-card {
        background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        border: 2px solid rgba(139, 153, 73, 0.2);
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    }
    
    .cta-card:hover {
        transform: translateY(-2px);
        border-color: rgba(139, 153, 73, 0.4) !important;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        background: linear-gradient(145deg, #ffffff 0%, #f0f4f0 100%);
    }
    
    .cta-card h6 {
        color: #8b9949 !important;
    }
    
    .cta-card p {
        color: #6b7280 !important;
    }
    
    /* Modo Oscuro */
    [data-theme="dark"] .hero-banner {
        background: linear-gradient(135deg, #2a2a2a 0%, #1a4c2e 50%, #2a2a2a 100%) !important;
    }
    
    [data-theme="dark"] .timeline-card {
        background: linear-gradient(145deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        border-color: rgba(164, 184, 92, 0.3) !important;
        border-left-color: #a4b85c !important;
        color: #e0e0e0;
    }
    
    [data-theme="dark"] .timeline-content {
        color: #c0c0c0 !important;
    }
    
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
    
    [data-theme="dark"] .cta-card p {
        color: #b0b0b0 !important;
    }
    
    /* Badges en modo oscuro */
    [data-theme="dark"] .badge-content-enhanced {
        background: rgba(30, 30, 30, 0.95) !important;
        border-color: rgba(164, 184, 92, 0.8) !important;
    }
    
    [data-theme="dark"] .badge-content-enhanced span {
        color: #f0f0f0 !important;
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
    
    /* Responsive */
    @media (max-width: 768px) {
        .hero-badges {
            flex-direction: column;
            gap: 1.5rem !important;
            align-items: center;
        }
        
        .badge-content-enhanced {
            min-width: 280px;
            text-align: center;
            padding: 1rem 2rem !important;
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
            min-width: 280px !important;
        }
    }
</style>
    
@endsection
