<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Inicio - ECOREFORM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&display=swap" rel="stylesheet" />

    <style>
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

        /* Estilo de los enlaces del Navbar */
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

        /* Botón CTA destacado */
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

        /* Estado inicial transparente (arriba) */
        #mainNav {
            background-color: transparent;
            transition: background-color 0.3s ease, padding 0.3s ease;
        }

        /* Estado al bajar (fondo verde bosque sólido) */
        #mainNav.scrolled {
            background-color: #064023 !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
        }

        /* Para el título más grande ("TOMA EL CONTROL") */
        .titlemain {
            font-size: clamp(2.8rem, 7vw, 6rem);
            font-weight: 900;
            line-height: 1.05;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.45);
            /* Junta un poco las líneas si el texto baja de renglón */
        }

        /* Para el subtítulo ("PLANTA UN ÁRBOL") */
        .subtitlemain {
            font-size: clamp(1.8rem, 4.5vw, 3.8rem);
            font-weight: 700;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.45);
        }

        .arbol {
            position: absolute;
            bottom: -40px;
            /* Empuja el árbol 40px hacia abajo (oculta un poco la base de las raíces) */
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 780px;
            /* Reducirlo un poco (de 900px a 780px) baja la altura de la copa */
            height: auto;
            z-index: 0 !important;
            opacity: 0.45;
            pointer-events: none;
        }

        .capa-texto {
            position: relative !important;
            /* Indispensable para que funcione z-index */
            z-index: 5 !important;
            /* Siempre por encima del árbol */
        }

        html {
            scroll-behavior: smooth;
        }

        #contenido {
            scroll-margin-top: 75px;
        }
    </style>

</head>

<body>
    <header class="hero-verde d-flex justify-content-center align-items-center text-center min-vh-100 position-relative overflow-hidden">
        <img src="{{  asset('/images/tree.png') }}" alt="Árbol de fondo" class="arbol">
        <!-- Navbar transparente con los 5 apartados del wireframe centrados -->
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

    <br>
    <main id="contenido">

        <!-- Sección 1: ¿Qué es EcoReform? (Destacada y centrada) -->
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

        <!-- Sección 2 y 3: Contenido e Introducción en dos columnas equilibradas -->
        <section class="py-5" style="background-color: #f4f9f5;">
            <div class="container py-4">
                <div class="row g-4 align-items-stretch">

                    <!-- Tarjeta: ¿Qué puedo encontrar en EcoReform? -->
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3">
                                    <span class="d-inline-flex align-items-center justify-content-center rounded-3 p-3" style="background-color: #d8f3dc; color: #19692c;">
                                        <!-- Ícono opcional de Bootstrap Icons -->
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

                    <!-- Tarjeta: Introducción a la reforestación -->
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

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
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