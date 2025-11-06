<footer class="site-footer mt-5" style="background:#645d4d; color:#fff; border:0; box-shadow:none;">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="{{ route('inicio') }}" class="d-flex align-items-center mb-3 text-white text-decoration-none">
                    <img src="{{ asset('img/logo.png') }}" alt="Molinos Hikenlu" width="56" height="56" class="me-2">
                    <div>
                        <strong class="d-block">MOLINOS HIKENLU EIRL</strong>
                        <small class="d-block text-white-50">Nutrición que impulsa tu producción</small>
                    </div>
                </a>
                <p class="small text-white-50">Productos balanceados y soluciones nutricionales para aves, cerdos, vacunos y más. Calidad y servicio en Huaral.</p>
            </div>

            <div class="col-md-3 mb-4">
                <h5 class="text-olive">Contacto</h5>
                <ul class="list-unstyled mt-3 contact-info">
                    <li><strong>RUC:</strong> 20614323206</li>
                    <li><strong>Teléfono:</strong> <a href="tel:940031589">940 031 589</a></li>
                    <li><strong>Correo:</strong> <a href="mailto:molinosraquel.adm@gmail.com">molinosraquel.adm@gmail.com</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5 class="text-olive">Enlaces</h5>
                <ul class="list-unstyled mt-3">
                    <li><a href="{{ route('inicio') }}" class="text-white">Inicio</a></li>
                    <li><a href="{{ route('nosotros') }}" class="text-white">Nosotros</a></li>
                    <li><a href="{{ route('productos') }}" class="text-white">Productos</a></li>
                    <li><a href="{{ route('contacto') }}" class="text-white">Contacto</a></li>
                </ul>
            </div>

            <div class="col-md-2 mb-4">
                <h5 class="text-olive">Síguenos</h5>
                <div class="mt-3">
                    <a href="https://fb.com/MolinosHikenlu" target="_blank" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <small class="text-white-50">&copy; {{ date('Y') }} MOLINOS HIKENLU EIRL · Todos los derechos reservados · Av. Estación S/N - Huaral</small>
            </div>
        </div>
    </div>
</footer>

<style>
    .site-footer { 
        border: 0 !important; 
        box-shadow: none !important; 
    }

    .site-footer .list-unstyled li { 
        border: 0 none !important; 
    }

    .site-footer a { 
        outline: 0 !important; 
        color: #cfcfcf !important;
        text-decoration: none !important; 
        transition: color 0.3s ease;
    }

    .site-footer a:hover { 
        color: #f1f1f1ff !important;
    }

    .site-footer a:focus { 
        box-shadow: none !important; 
    }

    .text-olive { 
        color: #8b9949 !important; 
    }

    .site-footer .contact-info,
    .site-footer .contact-info a {
        color: rgba(255, 255, 255, 0.85) !important;
        text-decoration: none !important; 
    }
</style>

