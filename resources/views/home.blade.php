<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <title>Inicio - ECOREFORM</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Hojas de estilo y fuentes -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&display=swap"
        rel="stylesheet" />

    <!-- Estilos personalizados -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
        }

        .frame {
            font-family: 'Manison';
            color: white;
            text-align: center;
        }

        .hero-verde {
            background: linear-gradient(180deg, #064023 0%, #245c2a 50%, #447233 100%);
            min-height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
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

        .btn-ecologico {
            background-color: #ffffff;
            color: #19692c;
            font-weight: 800;
            border-radius: 50px;
            padding: 12px 32px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-ecologico:hover {
            background-color: #b7efc5;
            color: #0b2e13;
            transform: scale(1.05);
        }

        #mainNav {
            background-color: transparent;
            transition: background-color 0.3s ease, padding 0.3s ease;
        }

        #mainNav.scrolled {
            background-color: #064023 !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        .titlemain {
            font-size: clamp(2.8rem, 7vw, 6rem);
            font-weight: 900;
            line-height: 1.05;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.45);
        }

        .subtitlemain {
            font-size: clamp(1.8rem, 4.5vw, 3.8rem);
            font-weight: 700;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.45);
        }

        .arbol {
            position: absolute;
            bottom: -3vh;
            left: 50%;
            transform: translateX(-50%);
            height: 96vh;
            width: auto;
            max-width: none;
            z-index: 0 !important;
            opacity: 0.45;
            pointer-events: none;
        }

        @media (max-width: 576px) {
            .arbol {
                height: 75vh;
                bottom: -2vh;
            }
        }

        .capa-texto {
            position: relative !important;
            z-index: 5 !important;
        }

        .galeria-item {
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 6px 16px rgba(6, 64, 35, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #f4f9f5;
            cursor: pointer;
            /* Indica que se puede hacer clic */
        }

        .galeria-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(6, 64, 35, 0.16);
        }

        .galeria-item img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .galeria-item:hover img {
            transform: scale(1.06);
        }

        #contenido {
            scroll-margin-top: 75px;
        }
    </style>
</head>

<body>
    <!-- Encabezado principal -->
    <header class="hero-verde d-flex justify-content-center align-items-center text-center min-vh-100 position-relative overflow-hidden">
        <img src="{{ asset('/images/tree.png') }}" alt="Árbol de fondo" class="arbol">

        <!-- Barra de navegación -->
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark fixed-top py-4">
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
                            <a class="nav-link fw-bold px-3 py-1 border border-light rounded-pill" href="{{ route('nosotros') }}">Sobre nosotros</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenido Hero -->
        <div class="capa-texto">
            <p class="text-uppercase fw-bold mb-2" style="letter-spacing: 4px; color: #b7efc5; font-size: 0.9rem;">
                CBTA No. 35 • EcoReform
            </p>
            <h1 class="frame titlemain text-uppercase mb-3">TOMA EL CONTROL</h1>
            <h2 class="frame subtitlemain text-uppercase mb-4" style="color: #d8f3dc;">PLANTA UN ÁRBOL</h2>
            <a href="#contenido" class="btn btn-outline-light rounded-pill px-4 py-2 mt-4 fw-semibold">
                Conoce más ↓
            </a>
        </div>
    </header>

    <!-- Contenido principal -->
    <main id="contenido">
        <!-- Sección 1: Descripción de la plataforma -->
        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-9">
                        <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023; letter-spacing: 1.5px;">
                            Sobre la plataforma
                        </span>
                        <h2 class="display-6 fw-bold text-uppercase mb-4" style="color: #064023;">
                            ¿QUÉ ES ECOREFORM?
                        </h2>
                        <p class="lead text-secondary mb-3" style="line-height: 1.8;">
                            EcoReform es una plataforma web que surgió a través de la necesidad
                            de los estudiantes y docentes del CBTA 35 por consultar el estado
                            de la flora y fauna del plantel, así como la problemática que se
                            vive en el mismo dada la poca o nula información disponible.
                        </p>
                        <p class="text-muted fs-5" style="line-height: 1.8;">
                            A través de este proyecto se busca informar, concientizar y motivar
                            a la comunidad estudiantil a tomar acción en pro del medio ambiente,
                            así como también informar a la comunidad en general sobre la
                            problemática que se vive en el CBTA 35 y cómo pueden ayudar a
                            mejorarla.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 2: Información general y reforestación -->
        <section class="py-5" style="background-color: #f4f9f5;">
            <div class="container py-4">
                <div class="row g-4 align-items-stretch">
                    <!-- Tarjeta 1: Contenido del sitio -->
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3">
                                    <span class="d-inline-flex align-items-center justify-content-center rounded-3 p-3" style="background-color: #d8f3dc; color: #19692c;">
                                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                    </span>
                                </div>
                                <h2 class="h3 fw-bold text-uppercase mb-3" style="color: #064023;">
                                    ¿QUÉ PUEDO ENCONTRAR EN ECOREFORM?
                                </h2>
                                <p class="text-secondary mb-3" style="line-height: 1.7;">
                                    En EcoReform, puedes encontrar información actualizada sobre la
                                    flora y fauna del CBTA 35, así como las principales problemáticas
                                    ambientales que se presentan en el plantel.
                                </p>
                                <p class="text-secondary mb-0" style="line-height: 1.7;">
                                    Además, ofrecemos soluciones propuestas por la comunidad
                                    estudiantil y docente para abordar estas problemáticas.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 2: Introducción a la reforestación -->
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-white" style="background: linear-gradient(145deg, #064023 0%, #19692c 100%);">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3">
                                    <span class="d-inline-flex align-items-center justify-content-center rounded-3 p-3" style="background-color: rgba(255,255,255,0.15); color: #b7efc5;">
                                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777z" />
                                        </svg>
                                    </span>
                                </div>
                                <h2 class="h3 fw-bold text-uppercase mb-3" style="color: #d8f3dc;">
                                    INTRODUCCIÓN A LA REFORESTACIÓN
                                </h2>
                                <p class="mb-3" style="color: rgba(255,255,255,0.9); line-height: 1.7;">
                                    La reforestación es el proceso de plantar árboles en áreas donde
                                    anteriormente existían bosques o áreas verdes, pero que han sido
                                    degradadas o deforestadas.
                                </p>
                                <p class="mb-3" style="color: rgba(255,255,255,0.9); line-height: 1.7;">
                                    Este proceso es fundamental para restaurar los ecosistemas,
                                    mejorar la calidad del aire, conservar la biodiversidad y mitigar
                                    los efectos del cambio climático.
                                </p>
                                <p class="mb-0" style="color: rgba(255,255,255,0.9); line-height: 1.7;">
                                    La reforestación no solo beneficia al medio ambiente, sino que
                                    también tiene un impacto positivo en la salud y el bienestar
                                    de las comunidades locales.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 3: Galería del plantel -->
        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <span class="badge rounded-pill px-3 py-2 mb-2 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023; letter-spacing: 1.5px;">
                            Nuestro Entorno
                        </span>
                        <h2 class="display-6 fw-bold text-uppercase mb-3" style="color: #064023;">
                            GALERÍA DEL PLANTEL
                        </h2>
                        <p class="text-muted fs-5">
                            Conoce las áreas verdes dentro del CBTA No. 35.
                        </p>
                    </div>
                </div>

                <!-- Cuadrícula de 16 imágenes -->
                <div class="row g-3 g-md-4">
                    @for ($i = 1; $i <= 16; $i++)
                        <!-- Miniatura -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="galeria-item" data-bs-toggle="modal" data-bs-target="#modalFoto{{ $i }}">
                                <img src="{{ asset('/images/gallery/plantel' . $i . '.jpg') }}" alt="Galería CBTA 35 - {{ $i }}" loading="lazy">
                            </div>
                        </div>

                        <!-- Visor emergente (Modal) sin JS personalizado -->
                        <div class="modal fade" id="modalFoto{{ $i }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-body p-0 position-relative text-center">
                                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 bg-dark rounded-circle p-2 opacity-75" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                        <img src="{{ asset('/images/gallery/plantel' . $i . '.jpg') }}" class="img-fluid rounded-4 shadow-lg" alt="Galería CBTA 35 - {{ $i }}" style="max-height: 85vh;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                </div>
            </div>
        </section>

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
                        <a href="#contenido" class="btn btn-sm btn-outline-light rounded-pill px-3 mt-1">
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
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous">
        </script>

        <script>
            window.addEventListener('scroll', function() {
                const navbar = document.getElementById('mainNav');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        </script>
</body>

</html>