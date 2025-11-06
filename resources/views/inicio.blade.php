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

<section class="features-section py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card p-4 h-100 bg-white rounded-lg shadow-sm">
                    <div class="feature-icon mb-3" style="color: #8b9949;">
                        <i class="fas fa-certificate fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3" style="color: #645d4d;">Control de Calidad Riguroso</h3>
                    <p class="text-muted mb-0">Implementamos estrictos controles en cada etapa de producción, 
                    seleccionando cuidadosamente las mejores materias primas para garantizar un producto final de excelencia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 h-100 bg-white rounded-lg shadow-sm">
                    <div class="feature-icon mb-3" style="color: #8b9949;">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3" style="color: #645d4d;">Asesoría Personalizada</h3>
                    <p class="text-muted mb-0">Nuestro equipo de expertos está disponible para brindarte orientación 
                    técnica y ayudarte a elegir la mejor solución nutricional para tus animales.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card p-4 h-100 bg-white rounded-lg shadow-sm">
                    <div class="feature-icon mb-3" style="color: #8b9949;">
                        <i class="fas fa-flask fa-2x"></i>
                    </div>
                    <h3 class="h5 mb-3" style="color: #645d4d;">Innovación Constante</h3>
                    <p class="text-muted mb-0">Investigamos y desarrollamos continuamente nuevas fórmulas para 
                    mejorar el rendimiento y bienestar de los animales, adaptándonos a las necesidades del mercado.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
