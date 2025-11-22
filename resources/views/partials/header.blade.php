<header class="site-header" style="background: var(--bg-primary); border-top: 6px solid #8b9949;">
    <nav class="navbar navbar-expand-lg" style="background: transparent;">
        <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Molinos Hikenlu" width="64" height="64" class="me-2">
                <div class="ms-3">
                    <strong class="d-block text-uppercase" style="color: var(--text-primary);">MOLINOS HIKENLU EIRL</strong>
                    <small style="color: var(--text-secondary);">Nutrición que impulsa tu producción</small>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}" style="color: var(--text-primary);">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}" style="color: var(--text-primary);">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('productos') }}" style="color: var(--text-primary);">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}" style="color: var(--text-primary);">Contacto</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Toggle de Modo Oscuro/Claro -->
        <div class="theme-toggle-container">
            <div class="theme-toggle">
                <i class="fas fa-sun theme-icon sun"></i>
                <div class="theme-switch" onclick="toggleTheme()"></div>
                <i class="fas fa-moon theme-icon moon"></i>
            </div>
        </div>
    </nav>
</header>

<style>
    .navbar-brand img {
        transition: transform 0.2s ease-in-out;
    }

    .navbar-brand:hover img {
        transform: scale(1.05);
    }

    .nav-link {
        color: var(--text-primary) !important;
    }
    .nav-link:hover {
        color: var(--accent-color) !important; 
    }

    .site-header {
        box-shadow: var(--shadow-light);
    }

    .navbar-toggler {
        border-color: var(--text-secondary);
    }

    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.25rem var(--text-secondary);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='#{to-rgb(var(--text-primary))}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Contenedor del toggle posicionado absolutamente */
    .theme-toggle-container {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        z-index: 1001;
    }

    .theme-toggle {
        margin: 0 !important;
    }

    @media (max-width: 991px) {
        .theme-toggle-container {
            right: 10px;
        }
    }
</style>
        </div>
    </nav>
</header>

<style>
    .navbar-brand img {
        transition: transform 0.2s ease-in-out;
    }

    .navbar-brand:hover img {
        transform: scale(1.05);
    }

    .nav-link {
        color: var(--text-primary) !important;
    }
    .nav-link:hover {
        color: var(--accent-color) !important; 
    }

    .site-header {
        box-shadow: var(--shadow-light);
    }

    .navbar-toggler {
        border-color: var(--text-secondary);
    }

    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.25rem var(--text-secondary);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='#{to-rgb(var(--text-primary))}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .theme-toggle {
        margin-left: 120px !important;
        margin-right: -10px;
        position: relative;
    }

    @media (max-width: 991px) {
        .navbar .d-flex.ms-auto {
            order: 3;
            margin-top: 10px;
        }
        
        .theme-toggle {
            margin-left: 0 !important;
        }
    }
</style>
