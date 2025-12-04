@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="hero-about text-center py-5 px-4 rounded-3" style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%); color: white;">
                <h1 class="display-4 fw-bold mb-3">Conoce Molinos Hikenlu EIRL</h1>
                <p class="lead fs-4">Más de una década transformando la nutrición animal en Huaral y toda la región</p>
                <div class="mt-4">
                    <span class="badge bg-light text-dark fs-6 me-3 px-3 py-2">RUC: 20614323206</span>
                    <span class="badge bg-light text-dark fs-6 px-3 py-2">Fundada en 2010</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-5">
        <!-- Historia y Trayectoria -->
        <div class="col-lg-8">
            <div class="content-section">
                <h2 class="section-title mb-4">
                    <i class="fas fa-history me-3" style="color: #8b9949;"></i>
                    Nuestra Trayectoria
                </h2>
                
                <div class="timeline-content">
                    <p class="lead text-muted mb-4">
                        MOLINOS HIKENLU EIRL nació en 2010 con una visión clara: revolucionar la nutrición animal 
                        en la provincia de Huaral y expandir nuestro alcance a toda la región de Lima.
                    </p>
                    
                    <div class="story-content">
                        <p class="mb-4">
                            Iniciamos nuestras operaciones con equipamiento de última generación y un equipo de 
                            profesionales especializados en nutrición animal. Desde nuestros primeros días, 
                            nos enfocamos en comprender las necesidades específicas de cada especie y desarrollar 
                            fórmulas que maximicen tanto el bienestar animal como la rentabilidad de nuestros clientes.
                        </p>
                        
                        <p class="mb-4">
                            A través de los años, hemos construido relaciones sólidas con productores pecuarios, 
                            granjas familiares y empresas agropecuarias de todo tipo. Nuestro compromiso con la 
                            innovación nos ha llevado a desarrollar más de 15 líneas de productos especializados.
                        </p>
                        
                        <p class="mb-4">
                            Ubicados estratégicamente en Av. Estación S/N, Huaral, contamos con modernas 
                            instalaciones de producción que nos permiten mantener los más altos estándares 
                            de calidad y satisfacer la creciente demanda de nuestros productos.
                        </p>
                    </div>
                </div>

                <!-- Logros y Certificaciones -->
                <div class="achievements mt-5">
                    <h3 class="section-subtitle mb-4">
                        <i class="fas fa-trophy me-2" style="color: #d67958;"></i>
                        Logros y Reconocimientos
                    </h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="achievement-card p-3 rounded-3 border">
                                <i class="fas fa-certificate text-warning fs-3 mb-2"></i>
                                <h5>Certificación SENASA</h5>
                                <p class="text-muted mb-0">Registro sanitario vigente para todos nuestros productos</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="achievement-card p-3 rounded-3 border">
                                <i class="fas fa-users text-info fs-3 mb-2"></i>
                                <h5>+500 Clientes Satisfechos</h5>
                                <p class="text-muted mb-0">Productores que confían en nuestra calidad</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="achievement-card p-3 rounded-3 border">
                                <i class="fas fa-industry text-success fs-3 mb-2"></i>
                                <h5>Instalaciones Modernas</h5>
                                <p class="text-muted mb-0">Equipos de última generación para la producción</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="achievement-card p-3 rounded-3 border">
                                <i class="fas fa-leaf text-primary fs-3 mb-2"></i>
                                <h5>Sostenibilidad</h5>
                                <p class="text-muted mb-0">Prácticas responsables con el medio ambiente</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar con información corporativa -->
        <div class="col-lg-4">
            <div class="sidebar-content">
                <!-- Misión -->
                <div class="info-card mb-4 p-4 rounded-3" style="background: linear-gradient(145deg, #f8f9fa 0%, #e9ecef 100%);">
                    <h3 class="section-subtitle mb-3">
                        <i class="fas fa-bullseye me-2" style="color: #8b9949;"></i>
                        Misión
                    </h3>
                    <p class="mb-0">
                        Proveer soluciones nutricionales innovadoras y de alta calidad que optimicen 
                        la productividad, salud y bienestar de los animales de producción, contribuyendo 
                        al desarrollo sostenible del sector agropecuario nacional mediante la excelencia 
                        en el servicio y el compromiso con nuestros clientes.
                    </p>
                </div>

                <!-- Visión -->
                <div class="info-card mb-4 p-4 rounded-3" style="background: linear-gradient(145deg, #f8f9fa 0%, #e9ecef 100%);">
                    <h3 class="section-subtitle mb-3">
                        <i class="fas fa-eye me-2" style="color: #d67958;"></i>
                        Visión
                    </h3>
                    <p class="mb-0">
                        Ser reconocidos como la empresa líder en nutrición animal a nivel regional, 
                        destacando por nuestra innovación constante, calidad superior de productos, 
                        responsabilidad ambiental y el impacto positivo en la rentabilidad de 
                        nuestros clientes.
                    </p>
                </div>

                <!-- Valores -->
                <div class="info-card mb-4 p-4 rounded-3" style="background: linear-gradient(145deg, #f8f9fa 0%, #e9ecef 100%);">
                    <h3 class="section-subtitle mb-3">
                        <i class="fas fa-heart me-2" style="color: #8b9949;"></i>
                        Nuestros Valores
                    </h3>
                    <div class="values-list">
                        <div class="value-item d-flex align-items-center mb-3">
                            <div class="value-icon me-3">
                                <i class="fas fa-star" style="color: #d67958;"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Excelencia</h6>
                                <small class="text-muted">Calidad superior en cada producto</small>
                            </div>
                        </div>
                        <div class="value-item d-flex align-items-center mb-3">
                            <div class="value-icon me-3">
                                <i class="fas fa-handshake" style="color: #d67958;"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Compromiso</h6>
                                <small class="text-muted">Dedicación total con nuestros clientes</small>
                            </div>
                        </div>
                        <div class="value-item d-flex align-items-center mb-3">
                            <div class="value-icon me-3">
                                <i class="fas fa-balance-scale" style="color: #d67958;"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Transparencia</h6>
                                <small class="text-muted">Honestidad en todas nuestras operaciones</small>
                            </div>
                        </div>
                        <div class="value-item d-flex align-items-center mb-3">
                            <div class="value-icon me-3">
                                <i class="fas fa-cogs" style="color: #d67958;"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Innovación</h6>
                                <small class="text-muted">Mejora continua y desarrollo tecnológico</small>
                            </div>
                        </div>
                        <div class="value-item d-flex align-items-center mb-3">
                            <div class="value-icon me-3">
                                <i class="fas fa-leaf" style="color: #d67958;"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Sostenibilidad</h6>
                                <small class="text-muted">Respeto y cuidado del medio ambiente</small>
                            </div>
                        </div>
                        <div class="value-item d-flex align-items-center">
                            <div class="value-icon me-3">
                                <i class="fas fa-users" style="color: #d67958;"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Servicio</h6>
                                <small class="text-muted">Atención personalizada y asesoría experta</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información de contacto rápida -->
                <div class="contact-quick p-4 rounded-3" style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%); color: white;">
                    <h4 class="mb-3">
                        <i class="fas fa-phone-alt me-2"></i>
                        Contáctanos
                    </h4>
                    <div class="contact-info">
                        <p class="mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Av. Estación S/N, Huaral - Lima
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <a href="tel:940031589" class="text-white text-decoration-none">940 031 589</a>
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:molinosraquel.adm@gmail.com" class="text-white text-decoration-none">molinosraquel.adm@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos adicionales -->
<style>
    .section-title {
        color: #645d4d;
        font-size: 2.2rem;
        font-weight: 700;
        border-bottom: 3px solid #8b9949;
        padding-bottom: 10px;
    }

    .section-subtitle {
        color: #645d4d;
        font-size: 1.5rem;
        font-weight: 600;
    }

    .achievement-card {
        text-align: center;
        transition: all 0.3s ease;
        background: white;
    }

    .achievement-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .info-card {
        border: 1px solid rgba(139, 153, 73, 0.2);
        transition: all 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .value-item {
        transition: all 0.3s ease;
    }

    .value-item:hover {
        transform: translateX(5px);
    }

    /* Modo oscuro */
    [data-theme="dark"] .section-title {
        color: #e0e0e0;
        border-color: #a4b85c;
    }

    [data-theme="dark"] .section-subtitle {
        color: #d0d0d0;
    }

    [data-theme="dark"] .achievement-card {
        background: #2a2a2a;
        border-color: rgba(164, 184, 92, 0.3);
        color: #e0e0e0;
    }

    [data-theme="dark"] .info-card {
        background: linear-gradient(145deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        border-color: rgba(164, 184, 92, 0.3);
        color: #e0e0e0;
    }

    [data-theme="dark"] .text-muted {
        color: #b0b0b0 !important;
    }

    [data-theme="dark"] .timeline-content p,
    [data-theme="dark"] .story-content p {
        color: #c0c0c0;
    }
</style>
@endsection
