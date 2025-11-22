<footer class="site-footer mt-5" style="color:#fff; border:0; box-shadow:none;">
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
                    <a href="https://www.facebook.com/profile.php?id=61580257386332" target="_blank" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
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
    /* Footer con colores adaptativos según el tema */
    .site-footer { 
        color: #fff !important;
        border: 0 !important; 
        box-shadow: none !important; 
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    /* Footer en modo claro - color marrón original */
    [data-theme="light"] .site-footer {
        background-color: #645d4d !important;
    }

    /* Footer en modo oscuro - diseño mejorado */
    [data-theme="dark"] .site-footer {
        background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%) !important;
        border-top: 2px solid #333 !important;
        box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.3) !important;
    }

    .site-footer * {
        color: inherit !important;
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

    .site-footer .text-olive,
    .site-footer h5 { 
        color: #8b9949 !important; 
    }

    /* Mejoras específicas para modo oscuro */
    [data-theme="dark"] .site-footer .text-olive,
    [data-theme="dark"] .site-footer h5 {
        color: #a4b85c !important;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    }

    [data-theme="dark"] .site-footer a {
        color: #e0e0e0 !important;
    }

    [data-theme="dark"] .site-footer a:hover {
        color: #a4b85c !important;
        text-shadow: 0 0 8px rgba(164, 184, 92, 0.3);
    }

    [data-theme="dark"] .site-footer .text-white {
        color: #f5f5f5 !important;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    [data-theme="dark"] .site-footer .text-white-50 {
        color: rgba(255, 255, 255, 0.7) !important;
    }

    [data-theme="dark"] .site-footer .contact-info,
    [data-theme="dark"] .site-footer .contact-info a {
        color: rgba(255, 255, 255, 0.9) !important;
    }

    /* Efecto de brillo sutil en el logo para modo oscuro */
    [data-theme="dark"] .site-footer img {
        filter: brightness(1.1) contrast(1.05);
        transition: filter 0.3s ease;
    }

    [data-theme="dark"] .site-footer img:hover {
        filter: brightness(1.2) contrast(1.1);
    }

    /* Efecto decorativo sutil para modo oscuro */
    [data-theme="dark"] .site-footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent 0%, #a4b85c 50%, transparent 100%);
        opacity: 0.6;
    }

    /* Mejora en los iconos de redes sociales para modo oscuro */
    [data-theme="dark"] .site-footer .fab {
        color: #e0e0e0 !important;
        transition: all 0.3s ease;
    }

    [data-theme="dark"] .site-footer .fab:hover {
        color: #a4b85c !important;
        transform: scale(1.1);
        text-shadow: 0 0 10px rgba(164, 184, 92, 0.4);
    }

    /* Separadores sutiles entre secciones en modo oscuro */
    [data-theme="dark"] .site-footer .col-md-3:not(:last-child),
    [data-theme="dark"] .site-footer .col-md-4:not(:last-child),
    [data-theme="dark"] .site-footer .col-md-2:not(:last-child) {
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }

    @media (max-width: 768px) {
        [data-theme="dark"] .site-footer .col-md-3,
        [data-theme="dark"] .site-footer .col-md-4,
        [data-theme="dark"] .site-footer .col-md-2 {
            border-right: none !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
    }

    .site-footer .contact-info,
    .site-footer .contact-info a {
        color: rgba(255, 255, 255, 0.85) !important;
        text-decoration: none !important; 
    }

    .site-footer .text-white {
        color: #ffffff !important;
    }

    .site-footer .text-white-50 {
        color: rgba(255, 255, 255, 0.5) !important;
    }

</style>

