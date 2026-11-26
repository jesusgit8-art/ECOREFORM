<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <title>Soluciones - ECOREFORM</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Hojas de estilo y fuentes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Estilos personalizados -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f6f4ef;
            color: #1f2d24;
            margin: 0;
            padding-top: 72px;
        }

        #mainNav {
            background-color: #064023;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #b7efc5 !important;
            transform: translateY(-2px);
        }

        .hero-soluciones {
            background: linear-gradient(135deg, #064023 0%, #19692c 60%, #2d7a36 100%);
            color: white;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            padding-top: 4.5rem;
            padding-bottom: 5rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(6, 64, 35, 0.15);
        }

        .titulo-soluciones {
            font-size: clamp(2.1rem, 4.5vw, 3.5rem);
            font-weight: 900;
            line-height: 1.15;
            text-transform: uppercase;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
        }

        .paso-card {
            background-color: #ffffff;
            border-radius: 20px;
            border: none;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            border-left: 6px solid #19692c;
        }

        .paso-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(6, 64, 35, 0.1) !important;
        }

        .numero-paso {
            width: 54px;
            height: 54px;
            background: linear-gradient(135deg, #064023 0%, #19692c 100%);
            color: #b7efc5;
            font-weight: 900;
            font-size: 1.4rem;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 6px 15px rgba(6, 64, 35, 0.2);
        }

        #propuestas {
            scroll-margin-top: 90px;
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
        <div class="container">
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarWireframe" aria-controls="navbarWireframe" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarWireframe">
                <ul class="navbar-nav gap-lg-4 text-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('problematica') }}">Problemática</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('flora') }}">Plantas y suelos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active border-bottom border-2 border-light" href="{{ route('solucion') }}">Soluciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold px-3 py-1 border border-light rounded-pill" href="{{ route('nosotros') }}">Sobre nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Encabezado principal -->
    <header class="hero-soluciones text-center">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: rgba(255, 255, 255, 0.15); color: #b7efc5; letter-spacing: 2px;">
                        CBTA No. 35 • Plan de Acción
                    </span>

                    <h1 class="titulo-soluciones mb-4">
                        Soluciones para la problemática en el CBTA No. 35
                    </h1>

                    <a href="#propuestas" class="btn btn-light rounded-pill px-4 py-2 fw-bold" style="color: #064023;">
                        Conocer propuestas ↓
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main id="propuestas" class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Lista de propuestas -->
                    <div class="d-flex flex-column gap-4 mb-5">
                        <!-- Propuesta 1 -->
                        <div class="card paso-card shadow-sm p-4">
                            <div class="card-body d-flex flex-column flex-md-row align-items-start gap-4 p-0">
                                <div class="numero-paso">1</div>
                                <div>
                                    <h2 class="h4 fw-bold mb-2" style="color: #064023;">
                                        Crear y apoyar campañas de concientización
                                    </h2>
                                    <p class="text-secondary mb-0 fs-6" style="line-height: 1.8;">
                                        Realización de campañas mediante carteles, pláticas y folletos acerca de la importancia de la flora y fauna del plantel, invitando a los estudiantes, docentes y personal educativo a reflexionar sobre su entorno y cómo al cuidarlo se obtienen beneficios para la comunidad educativa y para el entorno que nos rodea, llevando a cabo sus actividades de una mejor manera.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Propuesta 2 -->
                        <div class="card paso-card shadow-sm p-4">
                            <div class="card-body d-flex flex-column flex-md-row align-items-start gap-4 p-0">
                                <div class="numero-paso">2</div>
                                <div>
                                    <h2 class="h4 fw-bold mb-2" style="color: #064023;">
                                        Crear y apoyar campañas de plantación de árboles y plantas
                                    </h2>
                                    <p class="text-secondary mb-0 fs-6" style="line-height: 1.8;">
                                        Realización de campañas mediante carteles, pláticas y folletos sobre actividades de cultivo y plantación de árboles y plantas para el cuidado, obteniendo un beneficio para el entorno y comunidad educativa.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Propuesta 3 -->
                        <div class="card paso-card shadow-sm p-4">
                            <div class="card-body d-flex flex-column flex-md-row align-items-start gap-4 p-0">
                                <div class="numero-paso">3</div>
                                <div>
                                    <h2 class="h4 fw-bold mb-2" style="color: #064023;">
                                        Crear y apoyar campañas de limpieza dentro del plantel
                                    </h2>
                                    <p class="text-secondary mb-0 fs-6" style="line-height: 1.8;">
                                        Realización de campañas mediante carteles, pláticas y folletos sobre la limpieza de áreas verdes contaminadas de residuos y basura.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Propuesta 4 -->
                        <div class="card paso-card shadow-sm p-4">
                            <div class="card-body d-flex flex-column flex-md-row align-items-start gap-4 p-0">
                                <div class="numero-paso">4</div>
                                <div>
                                    <h2 class="h4 fw-bold mb-2" style="color: #064023;">
                                        Crear y apoyar campañas sobre el mantenimiento de áreas verdes
                                    </h2>
                                    <p class="text-secondary mb-0 fs-6" style="line-height: 1.8;">
                                        Realización de campañas mediante carteles, pláticas y folletos para incentivar a la comunidad educativa a dar mantenimiento a las áreas verdes del plantel como podría ser cortar el pasto y árboles cuando sus hojas sean muy grandes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Objetivo y periodicidad -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 text-center" style="background-color: #d8f3dc;">
                        <div class="card-body p-0">
                            <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: #064023; color: #b7efc5; letter-spacing: 1.5px;">
                                Seguimiento continuo
                            </span>
                            <h3 class="h4 fw-bold mb-0" style="color: #064023; line-height: 1.6;">
                                Estas actividades tienen como objetivo realizarse en plazos semanales y/o mensuales para el correcto cuidado del plantel beneficiando al entorno y comunidad educativa.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="text-white pt-5 pb-4" style="background-color: #064023;">
        <div class="container">
            <div class="row g-4 pb-4 border-bottom" style="border-color: rgba(255, 255, 255, 0.15) !important;">
                <!-- Identidad del proyecto -->
                <div class="col-lg-5">
                    <span class="badge rounded-pill px-3 py-1 mb-2 text-uppercase fw-bold" style="background-color: rgba(255, 255, 255, 0.15); color: #b7efc5; letter-spacing: 1.5px;">
                        CBTA No. 35
                    </span>
                    <h3 class="h4 fw-bold text-uppercase mb-3" style="color: #d8f3dc;">ECOREFORM</h3>
                    <p class="small mb-0" style="color: rgba(255, 255, 255, 0.8); line-height: 1.7;">
                        Plataforma web impulsada por estudiantes y docentes para informar, concientizar y fomentar la reforestación y el cuidado de la flora y fauna dentro de nuestro plantel.
                    </p>
                </div>

                <!-- Enlaces de navegación -->
                <div class="col-6 col-lg-3 offset-lg-1">
                    <h4 class="h6 fw-bold text-uppercase mb-3" style="color: #b7efc5;">Secciones</h4>
                    <ul class="list-unstyled d-flex flex-column gap-2 small">
                        <li><a href="{{ route('inicio') }}" class="text-white text-decoration-none opacity-75">Inicio</a></li>
                        <li><a href="{{ route('problematica') }}" class="text-white text-decoration-none opacity-75">Problemática</a></li>
                        <li><a href="{{ route('flora') }}" class="text-white text-decoration-none opacity-75">Plantas y suelos</a></li>
                        <li><a href="{{ route('solucion') }}" class="text-white text-decoration-none opacity-75">Soluciones</a></li>
                        <li><a href="{{ route('nosotros') }}" class="text-white text-decoration-none opacity-75">Sobre nosotros</a></li>
                    </ul>
                </div>

                <!-- Información de la iniciativa -->
                <div class="col-6 col-lg-3">
                    <h4 class="h6 fw-bold text-uppercase mb-3" style="color: #b7efc5;">Iniciativa</h4>
                    <p class="small mb-2" style="color: rgba(255, 255, 255, 0.8);">
                        Proyecto Escolar Comunitario (PEC) • Reforestación y Educación Ambiental.
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-light rounded-pill px-3 mt-1">
                        Subir ↑
                    </a>
                </div>
            </div>

            <!-- Derechos de autor -->
            <div class="pt-3 text-center">
                <small style="color: rgba(255, 255, 255, 0.65);">
                    © {{ date('Y') }} EcoReform • Centro de Bachillerato Tecnológico Agropecuario No. 35
                </small>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>