@extends('layouts.app')

@section('content')
    <div class="row g-4">
        <div class="col-md-8">
            <div class="content-card p-4 rounded-3 shadow-sm" style="background: linear-gradient(145deg, #fff 0%, #f8f9fa 100%); border-left: 4px solid #8b9949;">
                <h2 class="text-olive mb-4">
                    <i class="fas fa-history me-3" style="color: #d67958;"></i>
                    Nuestra Historia
                </h2>
                <p class="lead mb-4" style="color: #5a5a5a; line-height: 1.7;">
                    <span class="fw-bold" style="color: #8b9949;">MOLINOS HIKENLU EIRL</span> nace en <span class="fw-semibold">2010</span> con la visión de proporcionar productos nutricionales que ayuden a potenciar la producción animal en la región. Con más de <span class="fw-semibold">una década de experiencia</span> en la industria, trabajamos con estándares de calidad y equipos especializados.
                </p>

                <h3 class="mt-4 mb-3" style="color: #8b9949;">
                    <i class="fas fa-bullseye me-2" style="color: #d67958;"></i>
                    Misión
                </h3>
                <p class="mb-4" style="color: #5a5a5a; line-height: 1.6;">Proveer soluciones nutricionales de <span class="fw-semibold">alta calidad</span> que contribuyan a la productividad y salud de los animales, apoyando el desarrollo del sector agropecuario.</p>

                <h3 class="mt-4 mb-3" style="color: #8b9949;">
                    <i class="fas fa-eye me-2" style="color: #d67958;"></i>
                    Visión
                </h3>
                <p class="mb-4" style="color: #5a5a5a; line-height: 1.6;">Ser reconocidos como <span class="fw-semibold">líderes regionales</span> en nutrición animal por nuestra calidad, innovación y servicio al cliente.</p>

                <h3 class="mt-4 mb-3" style="color: #8b9949;">
                    <i class="fas fa-heart me-2" style="color: #d67958;"></i>
                    Valores
                </h3>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-star me-2" style="color: #d67958;"></i><span class="fw-semibold">Calidad</span> - Excelencia en cada producto</li>
                    <li class="mb-2"><i class="fas fa-handshake me-2" style="color: #d67958;"></i><span class="fw-semibold">Compromiso</span> - Dedicación con nuestros clientes</li>
                    <li class="mb-2"><i class="fas fa-balance-scale me-2" style="color: #d67958;"></i><span class="fw-semibold">Transparencia</span> - Honestidad en nuestras operaciones</li>
                    <li><i class="fas fa-users me-2" style="color: #d67958;"></i><span class="fw-semibold">Servicio</span> - Atención personalizada</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-sidebar">
                <div class="contact-card p-4 rounded-3 shadow-sm mb-4" style="background: linear-gradient(135deg, #8b9949 0%, #a4b85c 100%); color: white;">
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
                            <a href="tel:940031589" class="text-white text-decoration-none fw-semibold">940 031 589</a>
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:molinosraquel.adm@gmail.com" class="text-white text-decoration-none">molinosraquel.adm@gmail.com</a>
                        </p>
                    </div>
                </div>
                
                <div class="stats-card p-4 rounded-3 shadow-sm" style="background: linear-gradient(145deg, #fff 0%, #f8f9fa 100%); border: 1px solid rgba(139, 153, 73, 0.2);">
                    <h5 class="mb-3" style="color: #8b9949;">
                        <i class="fas fa-chart-line me-2"></i>
                        Nuestra Trayectoria
                    </h5>
                    <div class="stat-item d-flex justify-content-between mb-2">
                        <span style="color: #5a5a5a;">Años de experiencia:</span>
                        <span class="fw-bold" style="color: #8b9949;">14+</span>
                    </div>
                    <div class="stat-item d-flex justify-content-between mb-2">
                        <span style="color: #5a5a5a;">Clientes satisfechos:</span>
                        <span class="fw-bold" style="color: #8b9949;">500+</span>
                    </div>
                    <div class="stat-item d-flex justify-content-between">
                        <span style="color: #5a5a5a;">Productos disponibles:</span>
                        <span class="fw-bold" style="color: #8b9949;">15+</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    .content-card {
        transition: all 0.3s ease;
    }
    .content-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
    }
    .contact-card {
        transition: all 0.3s ease;
    }
    .contact-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2) !important;
    }
    .stats-card {
        transition: all 0.3s ease;
    }
    .stats-card:hover {
        transform: translateY(-2px);
        border-color: rgba(139, 153, 73, 0.4) !important;
    }
    /* Modo oscuro */
    [data-theme="dark"] .content-card {
        background: linear-gradient(145deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        border-left-color: #a4b85c !important;
        color: #e0e0e0;
    }
    [data-theme="dark"] .stats-card {
        background: linear-gradient(145deg, #2a2a2a 0%, #1e1e1e 100%) !important;
        border-color: rgba(164, 184, 92, 0.3) !important;
        color: #e0e0e0;
    }
</style>
    
@endsection
