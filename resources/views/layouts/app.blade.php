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
    </style>
</head>
<body>
    @include('partials.header')

    <main class="container my-5">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
