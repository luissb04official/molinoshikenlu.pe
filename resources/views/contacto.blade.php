@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="pe-lg-4">
                <h2 class="h1 mb-4" style="color: #645d4d;">Contacto</h2>
                <p class="mb-4 text-muted fs-6">¿Tienes alguna pregunta sobre nuestros productos? Estamos aquí para ayudarte.</p>

                @if(session('success'))
                    <div class="alert alert-success border-0 bg-success bg-opacity-10">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contacto.enviar') }}" class="contact-form p-4 rounded-3 shadow-sm">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label contact-label">Nombre completo</label>
                        <input type="text" name="nombre" class="form-control contact-input @error('nombre') is-invalid @enderror" 
                               value="{{ old('nombre') }}" placeholder="Ingresa tu nombre">
                        @error('nombre') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label contact-label">Correo electrónico</label>
                        <input type="email" name="correo" class="form-control contact-input @error('correo') is-invalid @enderror" 
                               value="{{ old('correo') }}" placeholder="ejemplo@correo.com">
                        @error('correo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label contact-label">Mensaje</label>
                        <textarea name="mensaje" rows="4" class="form-control contact-input @error('mensaje') is-invalid @enderror" 
                                  placeholder="¿En qué podemos ayudarte?">{{ old('mensaje') }}</textarea>
                        @error('mensaje') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <button class="btn btn-terra btn-lg px-5">
                        <i class="fas fa-paper-plane me-2"></i>
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="contact-info-wrapper">
                <div class="location-card p-4 rounded-3 shadow-sm mb-4">
                    <h3 class="h4 mb-4 location-title">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Ubicación
                    </h3>
                    <div class="map-container rounded-3 overflow-hidden mb-4" style="height: 400px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.013367034953!2d-77.20662542394476!3d-11.09799888931755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9106df1d58f8e475%3A0x83478f8e88f83c68!2sAv.%20Estaci%C3%B3n%2C%20Huaral%2015201%2C%20Per%C3%BA!5e0!3m2!1ses!2s!4v1699322161234!5m2!1ses!2s"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="contact-item d-flex align-items-center">
                                <div class="icon-container bg-olive p-3 rounded-circle me-3">
                                    <i class="fas fa-location-dot text-white"></i>
                                </div>
                                <div>
                                    <h4 class="h6 mb-1 contact-item-title">Dirección</h4>
                                    <p class="mb-0 contact-item-text">Av. Estación S/N - Huaral</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item d-flex align-items-center">
                                <div class="icon-container bg-olive p-3 rounded-circle me-3">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div>
                                    <h4 class="h6 mb-1 contact-item-title">Teléfono</h4>
                                    <a href="tel:940031589" class="text-decoration-none contact-phone-link">940 031 589</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="additional-info p-4 rounded-3">
                    <h3 class="h5 mb-4 additional-info-title">Información adicional</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope me-3 additional-icon"></i>
                                <div>
                                    <small class="additional-label d-block">Correo electrónico</small>
                                    <a href="mailto:molinosraquel.adm@gmail.com" class="text-decoration-none additional-link">
                                        molinosraquel.adm@gmail.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-facebook me-3 additional-icon"></i>
                                <div>
                                    <small class="additional-label d-block">Facebook</small>
                                    <a href="https://www.facebook.com/profile.php?id=61580257386332" target="_blank" class="text-decoration-none additional-link">
                                        MolinosHikenlu
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-building me-3 additional-icon"></i>
                                <div>
                                    <small class="additional-label d-block">RUC</small>
                                    <span class="additional-text">20614323206</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-clock me-3 additional-icon"></i>
                                <div>
                                    <small class="additional-label d-block">Horario de atención</small>
                                    <span class="additional-text">Lun - Sáb: 8:00 - 18:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Formulario de contacto */
.contact-form {
    background-color: white;
    border: 1px solid rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

[data-theme="dark"] .contact-form {
    background: linear-gradient(145deg, #3a3a3a 0%, #2d2d2d 100%);
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
}

/* Etiquetas del formulario */
.contact-label {
    color: inherit;
    transition: color 0.3s ease;
}

[data-theme="dark"] .contact-label {
    color: #e0e0e0;
    font-weight: 500;
}

/* Campos de entrada */
.contact-input {
    border: 1px solid rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    background-color: white;
}

.contact-input:focus {
    border-color: #a7b85bff;
    box-shadow: 0 0 0 0.2rem rgba(139, 153, 73, 0.25);
}

[data-theme="dark"] .contact-input {
    background-color: #404040;
    border-color: rgba(255, 255, 255, 0.2);
    color: #e0e0e0;
}

[data-theme="dark"] .contact-input:focus {
    background-color: #454545;
    border-color: #a4b85c;
    color: #f0f0f0;
    box-shadow: 0 0 0 0.2rem rgba(164, 184, 92, 0.25);
}

[data-theme="dark"] .contact-input::placeholder {
    color: #b0b0b0;
}

/* Botón enviar */
.btn-terra {
    background-color: #d67958;
    color: white;
    transition: all 0.3s ease;
}

.btn-terra:hover {
    background-color: #c56847;
    color: white;
    transform: translateY(-2px);
}

[data-theme="dark"] .btn-terra:hover {
    box-shadow: 0 6px 20px rgba(214, 121, 88, 0.4);
}

/* Tarjeta de ubicación */
.location-card {
    background-color: white;
    transition: all 0.3s ease;
}

[data-theme="dark"] .location-card {
    background: linear-gradient(145deg, #3a3a3a 0%, #2d2d2d 100%);
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
}

/* Título de ubicación */
.location-title {
    color: #8b9949;
    transition: color 0.3s ease;
}

[data-theme="dark"] .location-title {
    color: #a4b85c;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
}

/* Items de contacto */
.contact-item-title {
    color: inherit;
    transition: color 0.3s ease;
}

[data-theme="dark"] .contact-item-title {
    color: #e0e0e0;
}

.contact-item-text {
    color: inherit;
    transition: color 0.3s ease;
}

[data-theme="dark"] .contact-item-text {
    color: #c0c0c0;
}

.contact-phone-link {
    color: #000;
    transition: color 0.3s ease;
}

[data-theme="dark"] .contact-phone-link {
    color: #a4b85c !important;
}

[data-theme="dark"] .contact-phone-link:hover {
    color: #b8c96d !important;
    text-shadow: 0 0 8px rgba(164, 184, 92, 0.3);
}

/* Íconos de contacto */
.bg-olive {
    background-color: #8b9949;
    transition: all 0.3s ease;
}

[data-theme="dark"] .bg-olive {
    background: linear-gradient(145deg, #a4b85c 0%, #8b9949 100%);
    box-shadow: 0 4px 15px rgba(164, 184, 92, 0.3);
}

.contact-item .icon-container {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Contenedor del mapa */
.map-container {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}

[data-theme="dark"] .map-container {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
    border: 2px solid rgba(255, 255, 255, 0.1);
}

/* Información adicional */
.additional-info {
    background-color: rgba(139,153,73,0.12);
    border: 1px solid rgba(139,153,73,0.25);
    transition: all 0.3s ease;
}

[data-theme="dark"] .additional-info {
    background: linear-gradient(145deg, rgba(164, 184, 92, 0.15) 0%, rgba(139, 153, 73, 0.1) 100%);
    border: 1px solid rgba(164, 184, 92, 0.3);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

.additional-info-title {
    color: #8b9949;
    transition: color 0.3s ease;
}

[data-theme="dark"] .additional-info-title {
    color: #a4b85c;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
}

.additional-icon {
    color: #8b9949;
    transition: all 0.3s ease;
}

[data-theme="dark"] .additional-icon {
    color: #a4b85c;
    text-shadow: 0 0 8px rgba(164, 184, 92, 0.3);
}

.additional-label {
    color: #6c757d;
    transition: color 0.3s ease;
}

[data-theme="dark"] .additional-label {
    color: #b0b0b0;
}

.additional-link {
    color: #000;
    transition: color 0.3s ease;
}

[data-theme="dark"] .additional-link {
    color: #e0e0e0 !important;
}

[data-theme="dark"] .additional-link:hover {
    color: #a4b85c !important;
    text-shadow: 0 0 8px rgba(164, 184, 92, 0.3);
}

.additional-text {
    color: inherit;
    transition: color 0.3s ease;
}

[data-theme="dark"] .additional-text {
    color: #e0e0e0;
}

/* Título principal */
[data-theme="dark"] .container h2 {
    color: #e0e0e0;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

[data-theme="dark"] .container p {
    color: #c0c0c0;
}

/* Alertas de éxito */
[data-theme="dark"] .alert-success {
    background-color: rgba(40, 167, 69, 0.2) !important;
    border-color: rgba(40, 167, 69, 0.3) !important;
    color: #90ee90 !important;
}
</style>
@endsection
