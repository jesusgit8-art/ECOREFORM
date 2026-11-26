<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <title>Sobre nosotros - ECOREFORM</title>
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
            padding-top: 80px;
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

        .hero-nosotros {
            background-color: #f6f4ef;
            padding-top: 4rem;
            padding-bottom: 3rem;
            position: relative;
        }

        .titulo-nosotros {
            font-size: clamp(2.3rem, 5vw, 3.8rem);
            font-weight: 900;
            color: #064023;
            line-height: 1.1;
            text-transform: uppercase;
        }

        .card-creditos {
            background: linear-gradient(135deg, #064023 0%, #19692c 100%);
            color: white;
            border-radius: 24px;
            border: none;
            box-shadow: 0 15px 35px rgba(6, 64, 35, 0.18);
        }

        .tech-slot {
            background-color: #f6f4ef;
            border: 2px dashed #b7efc5;
            border-radius: 16px;
            padding: 1.25rem 0.75rem;
            text-align: center;
            transition: all 0.25s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .tech-slot:hover {
            border-style: solid;
            border-color: #19692c;
            background-color: #ffffff;
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(6, 64, 35, 0.08);
        }

        .tech-slot img {
            width: 56px;
            height: 56px;
            object-fit: contain;
            margin-bottom: 0.65rem;
        }

        .bg-crema-suave {
            background-color: #efede6 !important;
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
                        <a class="nav-link" href="{{ route('solucion') }}">Soluciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold px-3 py-1 border border-light rounded-pill bg-white text-success" style="color: #064023 !important;" href="{{ route('nosotros') }}">Sobre nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Encabezado principal -->
    <header class="hero-nosotros text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023; letter-spacing: 2px;">
                        Equipo y Créditos • EcoReform
                    </span>

                    <h1 class="titulo-nosotros mb-3">
                        ¡Somos CBTA 35!
                    </h1>

                    <h2 class="h5 fw-semibold text-secondary mb-0">
                        Consulta información sobre los desarrolladores de esta web
                    </h2>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main>
        <!-- Sección 1: Información del desarrollador e institución -->
        <section class="pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="card card-creditos p-4 p-lg-5 text-center">
                            <div class="card-body p-0">
                                <span class="badge rounded-pill px-3 py-1 mb-3 text-uppercase fw-bold" style="background-color: rgba(255,255,255,0.15); color: #b7efc5; letter-spacing: 1.5px;">
                                    Ficha Técnica del Proyecto
                                </span>

                                <p class="fs-5 mb-2" style="color: rgba(255,255,255,0.85);">
                                    Desarrollado por:
                                </p>
                                <h3 class="h2 fw-bold text-uppercase mb-4" style="color: #ffffff; letter-spacing: 0.5px;">
                                    Márquez Pérez Jesús Daniel
                                </h3>

                                <div class="p-3 rounded-4 mb-4 mx-auto" style="background-color: rgba(255,255,255,0.1); max-width: 600px;">
                                    <p class="fw-bold fs-5 mb-0" style="color: #d8f3dc;">
                                        Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario"
                                    </p>
                                </div>

                                <p class="fs-5 mb-0" style="color: rgba(255,255,255,0.92);">
                                    <strong>Docente:</strong> Mariano Sánchez Reyes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 2: Herramientas de desarrollo -->
        <section class="py-5 bg-white">
            <div class="container py-3">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <span class="badge rounded-pill px-3 py-2 mb-2 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023;">
                            Stack Tecnológico
                        </span>
                        <h2 class="display-6 fw-bold text-uppercase mb-2" style="color: #064023;">
                            Herramientas de Desarrollo
                        </h2>
                        <p class="text-muted">
                            Tecnologías empleadas para el diseño, programación y construcción de la plataforma EcoReform.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Frameworks -->
                    <div class="col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f6f4ef;">
                            <div class="card-body p-0">
                                <h3 class="h5 fw-bold text-uppercase text-center mb-4 pb-2 border-bottom" style="color: #064023; border-color: #d8f3dc !important;">
                                    Frameworks
                                </h3>
                                <div class="row g-3">
                                    <!-- Laravel -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/laravel.png') }}" alt="Laravel">
                                            <span class="small fw-bold" style="color: #064023;">Laravel</span>
                                        </div>
                                    </div>
                                    <!-- Bootstrap 5 -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/bootstrap.png') }}" alt="Bootstrap 5">
                                            <span class="small fw-bold" style="color: #064023;">Bootstrap 5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lenguajes -->
                    <div class="col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f6f4ef;">
                            <div class="card-body p-0">
                                <h3 class="h5 fw-bold text-uppercase text-center mb-4 pb-2 border-bottom" style="color: #064023; border-color: #d8f3dc !important;">
                                    Lenguajes
                                </h3>
                                <div class="row g-3">
                                    <!-- HTML5 -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/html.png') }}" alt="HTML5">
                                            <span class="small fw-bold" style="color: #064023;">HTML5</span>
                                        </div>
                                    </div>
                                    <!-- CSS3 -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/css.png') }}" alt="CSS3">
                                            <span class="small fw-bold" style="color: #064023;">CSS3</span>
                                        </div>
                                    </div>
                                    <!-- JavaScript -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/js.png') }}" alt="JavaScript">
                                            <span class="small fw-bold" style="color: #064023;">JavaScript</span>
                                        </div>
                                    </div>
                                    <!-- PHP -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/php.png') }}" alt="PHP">
                                            <span class="small fw-bold" style="color: #064023;">PHP</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Programas y Herramientas -->
                    <div class="col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f6f4ef;">
                            <div class="card-body p-0">
                                <h3 class="h5 fw-bold text-uppercase text-center mb-4 pb-2 border-bottom" style="color: #064023; border-color: #d8f3dc !important;">
                                    Programas
                                </h3>
                                <div class="row g-3">
                                    <!-- VS Code -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/vscode.png') }}" alt="VS Code">
                                            <span class="small fw-bold" style="color: #064023;">VS Code</span>
                                        </div>
                                    </div>
                                    <!-- Git -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/git.png') }}" alt="Git">
                                            <span class="small fw-bold" style="color: #064023;">Git</span>
                                        </div>
                                    </div>
                                    <!-- GitHub -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/github.png') }}" alt="GitHub">
                                            <span class="small fw-bold" style="color: #064023;">GitHub</span>
                                        </div>
                                    </div>
                                    <!-- Node.js -->
                                    <div class="col-6">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/nodejs.png') }}" alt="Node.js">
                                            <span class="small fw-bold" style="color: #064023;">Node.js</span>
                                        </div>
                                    </div>
                                    <!-- Composer -->
                                    <div class="col-12">
                                        <div class="tech-slot">
                                            <img src="{{ asset('/images/tech/composer.png') }}" alt="Composer">
                                            <span class="small fw-bold" style="color: #064023;">Composer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 3: Fuentes de información -->
        <section class="py-5 bg-crema-suave">
            <div class="container py-3">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <span class="badge rounded-pill px-3 py-2 mb-2 text-uppercase fw-bold" style="background-color: #064023; color: #b7efc5;">
                                Bibliografía y Referencias
                            </span>
                            <h2 class="display-6 fw-bold text-uppercase mb-0" style="color: #064023;">
                                Fuentes de información
                            </h2>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <!-- Fuente 1 -->
                            <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                                <div class="card-body p-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                    <div>
                                        <p class="fw-bold mb-1" style="color: #064023;">
                                            Universidad de Europa. Deforestación: causas, consecuencias y soluciones para combatirla.
                                        </p>
                                        <small class="text-muted">Fecha de consulta: 12 de noviembre de 2026</small>
                                    </div>
                                    <a href="https://universidadeuropea.com/blog/deforestacion/" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-success rounded-pill px-3 fw-semibold flex-shrink-0">
                                        Ver enlace ↗
                                    </a>
                                </div>
                            </div>

                            <!-- Fuente 2 -->
                            <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                                <div class="card-body p-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                    <div>
                                        <p class="fw-bold mb-1" style="color: #064023;">
                                            Gobierno del Estado de México. Atlas de riesgos del municipio de Valle de Chalco Solidaridad.
                                        </p>
                                        <small class="text-muted">Fecha de consulta: 19 de noviembre de 2026</small>
                                    </div>
                                    <a href="https://valledechalco.gob.mx/wp-content/uploads/2021/Comunicacion/AtlasDeRiesgos_ValleDeChalcoSolidaridad_Ago2021_122.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-success rounded-pill px-3 fw-semibold flex-shrink-0">
                                        Ver enlace ↗
                                    </a>
                                </div>
                            </div>

                            <!-- Fuente 3 -->
                            <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                                <div class="card-body p-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                    <div>
                                        <p class="fw-bold mb-1" style="color: #064023;">
                                            Proyecto Mesoamérica. Atlas de riesgos del municipio de Valle de Chalco Solidaridad.
                                        </p>
                                        <small class="text-muted">Fecha de consulta: 19 de noviembre de 2026</small>
                                    </div>
                                    <a href="https://rmgir.proyectomesoamerica.org/PDFMunicipales/2011/vr_15122_AR_Valle_Chalco.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-success rounded-pill px-3 fw-semibold flex-shrink-0">
                                        Ver enlace ↗
                                    </a>
                                </div>
                            </div>

                            <!-- Fuente 4 -->
                            <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                                <div class="card-body p-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                    <div>
                                        <p class="fw-bold mb-1" style="color: #064023;">
                                            ANOVA. 8 plantas exteriores para jardines con altas temperaturas.
                                        </p>
                                        <small class="text-muted">Fecha de consulta: 19 de noviembre de 2026</small>
                                    </div>
                                    <a href="https://www.anova.es/es/blog/8-plantas-exteriores-para-jardines-con-altas-temperaturas" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-success rounded-pill px-3 fw-semibold flex-shrink-0">
                                        Ver enlace ↗
                                    </a>
                                </div>
                            </div>

                            <!-- Fuente 5 -->
                            <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                                <div class="card-body p-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                    <div>
                                        <p class="fw-bold mb-1" style="color: #064023;">
                                            Facebook Ok Aguascalientes. Jacaranda.
                                        </p>
                                        <small class="text-muted">Fecha de consulta: 19 de noviembre de 2026</small>
                                    </div>
                                    <a href="https://www.facebook.com/OKAGSMX/posts/sab%C3%ADas-que-el-%C3%A1rbol-de-la-jacaranda-es-una-excelente-opci%C3%B3n-para-la-ciudad-la-ja/859882966180418/" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-success rounded-pill px-3 fw-semibold flex-shrink-0">
                                        Ver enlace ↗
                                    </a>
                                </div>
                            </div>
                            <a class="btn btn-success" href="{{ route('extra') }}">Ver otras páginas</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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