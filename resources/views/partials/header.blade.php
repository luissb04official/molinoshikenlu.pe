<header class="site-header" style="background: #ffffff; border-top: 6px solid #8b9949;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: transparent;">
        <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Molinos Hikenlu" width="64" height="64" class="me-2">
                <div class="ms-3">
                    <strong class="d-block text-uppercase" style="color:#645d4d;">MOLINOS HIKENLU EIRL</strong>
                    <small style="color: rgba(100,93,77,0.75);">Nutrición que impulsa tu producción</small>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}" style="color:#645d4d;">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}" style="color:#645d4d;">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('productos') }}" style="color:#645d4d;">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}" style="color:#645d4d;">Contacto</a></li>
                </ul>
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
        color: #645d4d !important;
    }
    .nav-link:hover {
        color: #d67958 !important; 
    }

    .site-header {
        box-shadow: 0 1px 6px rgba(0,0,0,0.03);
    }
</style>
