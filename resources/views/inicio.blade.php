@extends('layouts.app')

@section('content')
<div class="hero-section position-relative overflow-hidden mb-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5">
                <h1 class="display-4 fw-bold mb-4" style="color: #d67958; font-family: 'Montserrat', sans-serif;">
                    Nutrición Balanceada para cada Animal
                </h1>
                <p class="lead mb-4" style="font-size: 1.2rem; line-height: 1.6;">
                    En <span class="fw-semibold">Molinos Hikenlu</span> entendemos que cada animal es único. 
                    Por eso, desarrollamos alimentos especializados que garantizan un crecimiento saludable y 
                    una producción óptima.
                </p>

                <div class="productos-section p-4 mb-4" style="background-color: rgba(139, 153, 73, 0.95); border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <h2 class="h4 text-white mb-4">¿Qué Alimentos Producimos?</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2" style="color: #d67958;"></i>
                                <span class="text-white">Alimento para Pollos</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2" style="color: #d67958;"></i>
                                <span class="text-white">Alimento para Patos</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2" style="color: #d67958;"></i>
                                <span class="text-white">Alimento para Gallos</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle me-2" style="color: #d67958;"></i>
                                <span class="text-white">Alimento Vacuno</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2" style="color: #d67958;"></i>
                                <span class="text-white">Alimento para Cerdos</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2" style="color: #d67958;"></i>
                                <span class="text-white">Alimento para Cuyes</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-plus-circle me-2" style="color: #d67958;"></i>
                                <span class="text-white">¡Y mucho más!</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-info">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-olive p-2 rounded-circle me-3">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <span class="fs-5">Av. Estación S/N - Huaral</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-olive p-2 rounded-circle me-3">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <a href="tel:940031589" class="fs-5 text-decoration-none" style="color: #645d4d;">940 031 589</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="position-relative">
                    <div class="image-container" style="border: 8px solid #d67958; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                        <img src="{{ asset('img/produccion-animal.jpg') }}" alt="Producción animal en Molinos Hikenlu" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;">
                    </div>
                    <div class="quality-badge position-absolute" style="background: #8b9949; color: white; padding: 15px; border-radius: 50%; width: 120px; height: 120px; display: flex; align-items: center; justify-content: center; text-align: center; right: -30px; bottom: -30px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                        <div>
                            <i class="fas fa-award mb-1" style="font-size: 24px;"></i>
                            <p class="mb-0" style="font-size: 14px;">Calidad<br>Garantizada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="features-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card p-4 h-100 rounded-lg shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-certificate fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3 feature-title">Control de Calidad Riguroso</h3>
                    <p class="feature-text mb-0">Implementamos estrictos controles en cada etapa de producción, 
                    seleccionando cuidadosamente las mejores materias primas para garantizar un producto final de excelencia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 h-100 rounded-lg shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3 feature-title">Asesoría Personalizada</h3>
                    <p class="feature-text mb-0">Nuestro equipo de expertos está disponible para brindarte orientación 
                    técnica y ayudarte a elegir la mejor solución nutricional para tus animales.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 h-100 rounded-lg shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-flask fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3 feature-title">Innovación Constante</h3>
                    <p class="feature-text mb-0">Investigamos y desarrollamos continuamente nuevas fórmulas para 
                    mejorar el rendimiento y bienestar de los animales, adaptándonos a las necesidades del mercado.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Sección de características con temas adaptativos */
    .features-section {
        background-color: #f8f9fa;
        transition: background-color 0.3s ease;
    }

    [data-theme="dark"] .features-section {
        background: linear-gradient(135deg, #2a2a2a 0%, #1e1e1e 100%);
    }

    /* Tarjetas de características en modo claro */
    .feature-card {
        background-color: white;
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
    }

    /* Tarjetas de características en modo oscuro */
    [data-theme="dark"] .feature-card {
        background: linear-gradient(145deg, #3a3a3a 0%, #2d2d2d 100%);
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
    }

    [data-theme="dark"] .feature-card:hover {
        background: linear-gradient(145deg, #404040 0%, #333333 100%);
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6) !important;
        border-color: rgba(164, 184, 92, 0.3);
    }

    /* Iconos */
    .feature-icon {
        color: #8b9949;
        transition: all 0.3s ease;
    }

    [data-theme="dark"] .feature-icon {
        color: #a4b85c;
        text-shadow: 0 0 10px rgba(164, 184, 92, 0.3);
    }

    [data-theme="dark"] .feature-card:hover .feature-icon {
        color: #b8c96d;
        text-shadow: 0 0 15px rgba(164, 184, 92, 0.5);
        transform: scale(1.1);
    }

    /* Títulos */
    .feature-title {
        color: #645d4d;
        transition: all 0.3s ease;
    }

    [data-theme="dark"] .feature-title {
        color: #e0e0e0;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    [data-theme="dark"] .feature-card:hover .feature-title {
        color: #f0f0f0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    /* Texto descriptivo */
    .feature-text {
        color: #6c757d;
        transition: color 0.3s ease;
    }

    [data-theme="dark"] .feature-text {
        color: #b0b0b0;
    }

    [data-theme="dark"] .feature-card:hover .feature-text {
        color: #c0c0c0;
    }

    /* Efecto de brillo sutil en modo oscuro */
    [data-theme="dark"] .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, #a4b85c 50%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    [data-theme="dark"] .feature-card:hover::before {
        opacity: 0.6;
    }

    /* Efecto de partículas sutiles para modo oscuro */
    [data-theme="dark"] .features-section::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: radial-gradient(circle at 25% 25%, rgba(164, 184, 92, 0.1) 1px, transparent 1px),
                          radial-gradient(circle at 75% 75%, rgba(164, 184, 92, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
        opacity: 0.3;
        pointer-events: none;
    }
</style>

<div class="cta-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-4" style="color: #645d4d;">¿Necesitas asesoría sobre alimentación animal?</h2>
                <p class="lead mb-4">Nuestros expertos están listos para ayudarte a elegir la mejor nutrición para tus animales.</p>
                <a href="{{ route('contacto') }}" class="btn btn-lg px-5" style="background-color: #d67958; color: white;">
                    Contáctanos
                    <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection
