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

                <form method="POST" action="{{ route('contacto.enviar') }}" class="contact-form bg-white p-4 rounded-3 shadow-sm">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre completo</label>
                        <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" 
                               value="{{ old('nombre') }}" placeholder="Ingresa tu nombre">
                        @error('nombre') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="correo" class="form-control @error('correo') is-invalid @enderror" 
                               value="{{ old('correo') }}" placeholder="ejemplo@correo.com">
                        @error('correo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mensaje</label>
                        <textarea name="mensaje" rows="4" class="form-control @error('mensaje') is-invalid @enderror" 
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
                <div class="location-card bg-white p-4 rounded-3 shadow-sm mb-4">
                    <h3 class="h4 mb-4" style="color: #8b9949;">
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
                                    <h4 class="h6 mb-1">Dirección</h4>
                                    <p class="mb-0">Av. Estación S/N - Huaral</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item d-flex align-items-center">
                                <div class="icon-container bg-olive p-3 rounded-circle me-3">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div>
                                    <h4 class="h6 mb-1">Teléfono</h4>
                                    <a href="tel:940031589" class="text-decoration-none text-dark">940 031 589</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="additional-info bg-olive bg-opacity-10 p-4 rounded-3" style="background-color: rgba(139,153,73,0.12); border: 1px solid rgba(139,153,73,0.25);">
                    <h3 class="h5 mb-4" style="color: #ffffffff;">Información adicional</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope me-3" style="color: #ffffffff;"></i>
                                <div>
                                    <small class="text-muted d-block">Correo electrónico</small>
                                    <a href="mailto:molinosraquel.adm@gmail.com" class="text-decoration-none text-dark">
                                        molinosraquel.adm@gmail.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-facebook me-3" style="color: #ffffffff;"></i>
                                <div>
                                    <small class="text-muted d-block">Facebook</small>
                                    <a href="https://fb.com/MolinosHikenlu" target="_blank" class="text-decoration-none text-dark">
                                        fb.com/MolinosHikenlu
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-building me-3" style="color: #ffffffff;"></i>
                                <div>
                                    <small class="text-muted d-block">RUC</small>
                                    <span>20614323206</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-clock me-3" style="color: #ffffffff;"></i>
                                <div>
                                    <small class="text-muted d-block">Horario de atención</small>
                                    <span>Lun - Sáb: 8:00 - 18:00</span>
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
.contact-form {
    border: 1px solid rgba(0,0,0,0.1);
}

.contact-form .form-control {
    border: 1px solid rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.contact-form .form-control:focus {
    border-color: #a7b85bff;
    box-shadow: 0 0 0 0.2rem rgba(139, 153, 73, 0.25);
}

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

.bg-olive {
    background-color: #bdce74ff;
}

.contact-item .icon-container {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.map-container {
    box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1);
}

.additional-info {
    border: 1px solid rgba(255, 255, 255, 0.2);
}
</style>
@endsection
