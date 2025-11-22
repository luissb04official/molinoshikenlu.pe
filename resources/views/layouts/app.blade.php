<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Molinos Hikenlu - Nutrición que impulsa tu producción</title>
    <meta name="description" content="Molinos Hikenlu EIRL - Especialistas en nutrición animal. Producimos alimentos balanceados de alta calidad para aves, cerdos, vacunos y más. Ubicados en Huaral.">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
        :root {
            --olive: #8b9949;
            --brown: #645d4d;
            --terra: #d67958;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: #333;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }
        
        .bg-olive { background-color: var(--olive) !important; }
        .text-olive { color: var(--olive) !important; }
        .text-terra { color: var(--terra) !important; }
        .text-brown { color: var(--brown) !important; }
        .border-terra { border-color: var(--terra) !important; }
        
        .btn-terra {
            background-color: var(--terra);
            color: white;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-terra:hover {
            background-color: #c56847;
            color: white;
            transform: translateY(-2px);
        }
        
        .feature-card {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--terra) !important;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                text-align: center;
            }
            
            .contact-info {
                justify-content: center;
            }
        }

        /* Botón flotante de WhatsApp */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: white;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .whatsapp-float:hover {
            background-color: #20c157;
            color: white;
            transform: scale(1.1);
            box-shadow: 2px 2px 8px #999;
        }
        
        .whatsapp-float i {
            margin-top: 2px;
        }
        
        @media screen and (max-width: 767px) {
            .whatsapp-float {
                width: 55px;
                height: 55px;
                bottom: 20px;
                right: 20px;
                font-size: 26px;
            }
        }

        /* Botón flotante "Ir arriba" */
        .scroll-to-top {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 30px;
            left: 30px;
            background: linear-gradient(135deg, #8b9949, #a4b85c);
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 20px;
            box-shadow: 0 4px 15px rgba(139, 153, 73, 0.3);
            z-index: 1000;
            transition: all 0.3s ease;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(100px);
        }
        
        .scroll-to-top.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .scroll-to-top:hover {
            background: linear-gradient(135deg, #a4b85c, #b8c96d);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(139, 153, 73, 0.4);
        }
        
        .scroll-to-top:active {
            transform: translateY(-1px);
        }
        
        @media screen and (max-width: 767px) {
            .scroll-to-top {
                width: 45px;
                height: 45px;
                bottom: 20px;
                left: 20px;
                font-size: 18px;
            }
        }

        [data-theme="dark"] .scroll-to-top {
            background: linear-gradient(135deg, #4a5568, #6b7280);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        [data-theme="dark"] .scroll-to-top:hover {
            background: linear-gradient(135deg, #6b7280, #9ca3af);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        /* Sistema de Modo Oscuro/Claro */
        [data-theme="dark"] {
            --bg-primary: #1a1a1a;
            --bg-secondary: #2d2d2d;
            --bg-tertiary: #404040;
            --text-primary: #ffffff;
            --text-secondary: #e0e0e0;
            --text-muted: #b0b0b0;
            --border-color: #555555;
            --shadow: rgba(255, 255, 255, 0.1);
        }

        [data-theme="light"] {
            --bg-primary: #ffffff;
            --bg-secondary: #f8f9fa;
            --bg-tertiary: #e9ecef;
            --text-primary: #333333;
            --text-secondary: #6c757d;
            --text-muted: #6c757d;
            --border-color: #dee2e6;
            --shadow: rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: var(--bg-primary);
            color: var(--text-primary);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .theme-toggle {
            background: var(--bg-secondary);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 8px 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .theme-toggle:hover {
            background: var(--bg-tertiary);
            border-color: rgba(139, 153, 73, 0.4);
        }

        .theme-switch {
            position: relative;
            width: 40px;
            height: 20px;
            background: #8b9949;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .theme-switch::before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            background: white;
            border-radius: 50%;
            top: 2px;
            left: 2px;
            transition: all 0.3s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        [data-theme="dark"] .theme-switch {
            background: #4a5568;
        }

        [data-theme="dark"] .theme-switch::before {
            transform: translateX(20px);
        }

        .theme-icon {
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .theme-icon.sun {
            color: #ffa500;
        }

        .theme-icon.moon {
            color: #6495ed;
        }

        [data-theme="dark"] .theme-icon.sun {
            opacity: 0.5;
        }

        [data-theme="dark"] .theme-icon.moon {
            opacity: 1;
        }

        [data-theme="light"] .theme-icon.sun {
            opacity: 1;
        }

        [data-theme="light"] .theme-icon.moon {
            opacity: 0.5;
        }

        /* Aplicar tema a elementos específicos */
        .navbar {
            background-color: var(--bg-primary) !important;
            border-bottom: 1px solid var(--border-color);
        }

        .card {
            background-color: var(--bg-secondary);
            border-color: var(--border-color);
            color: var(--text-primary);
        }

        .feature-card {
            background-color: var(--bg-secondary) !important;
            color: var(--text-primary);
        }

        .modal-content {
            background-color: var(--bg-secondary);
            color: var(--text-primary);
        }

        .text-muted {
            color: var(--text-muted) !important;
        }

        .site-footer {
            background-color: var(--bg-tertiary) !important;
        }

        .theme-toggle:focus-within {
            outline: 2px solid rgba(139, 153, 73, 0.3);
            outline-offset: 2px;
        }

        @media (max-width: 991px) {
            .theme-toggle {
                margin-left: 0 !important;
                margin-top: 15px;
                padding: 6px 10px;
                align-self: flex-end;
            }
            
            .theme-switch {
                width: 45px;
                height: 22px;
            }
            
            .theme-switch::before {
                width: 18px;
                height: 18px;
            }
            
            [data-theme="dark"] .theme-switch::before {
                transform: translateX(23px);
            }
        }

        @media (max-width: 768px) {
            .theme-toggle {
                padding: 5px 8px;
            }
            
            .theme-switch {
                width: 40px;
                height: 20px;
            }
            
            .theme-switch::before {
                width: 16px;
                height: 16px;
            }
            
            [data-theme="dark"] .theme-switch::before {
                transform: translateX(20px);
            }
            
            .theme-icon {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body data-theme="light">
    @include('partials.header')

    <main class="container my-5">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.me/message/T63D3PUW7F2HA1" class="whatsapp-float" target="_blank" title="Contáctanos por WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Botón flotante "Ir arriba" -->
    <button class="scroll-to-top" id="scrollToTop" title="Ir arriba" onclick="scrollToTop()">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Sistema de Modo Oscuro/Claro Simple
        function toggleTheme() {
            const body = document.body;
            const currentTheme = body.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            body.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        }

        // Cargar tema guardado al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.body.setAttribute('data-theme', savedTheme);
        });

        // Detectar preferencia del sistema
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches && !localStorage.getItem('theme')) {
            document.body.setAttribute('data-theme', 'dark');
        }

        // Escuchar cambios en la preferencia del sistema
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
            if (!localStorage.getItem('theme')) {
                document.body.setAttribute('data-theme', e.matches ? 'dark' : 'light');
            }
        });

        // Funcionalidad del botón "Ir arriba"
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Mostrar/ocultar botón según scroll
        window.addEventListener('scroll', function() {
            const scrollButton = document.getElementById('scrollToTop');
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            if (scrolled > 300) {
                scrollButton.classList.add('show');
            } else {
                scrollButton.classList.remove('show');
            }
        });

        // Inicializar estado del botón al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            const scrollButton = document.getElementById('scrollToTop');
            if (window.pageYOffset <= 300) {
                scrollButton.classList.remove('show');
            }
        });
    </script>
</body>
</html>
