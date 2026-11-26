<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <title>Problemática - ECOREFORM</title>
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
            min-height: 72px;
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

        .titulo-interior {
            font-size: clamp(2rem, 3.8vw, 3.2rem);
            font-weight: 900;
            color: #064023;
            line-height: 1.15;
            text-transform: uppercase;
        }

        #contenido {
            scroll-margin-top: 72px;
        }

        .hero-problematica {
            position: relative;
            overflow: hidden;
            min-height: calc(100vh - 72px);
            display: flex;
            align-items: center;
        }

        .imagen-fondo-completa {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .mancha-problematica {
            position: absolute;
            top: 50%;
            left: -20vh;
            transform: translateY(-50%);
            width: 140vh;
            height: 148vh;
            background: linear-gradient(135deg, rgba(246, 244, 239, 0.96) 0%, rgba(234, 211, 188, 0.94) 100%);
            border-radius: 52% 48% 50% 50% / 50% 52% 48% 50%;
            z-index: 1;
            pointer-events: none;
            box-shadow: 15px 0 40px rgba(0, 0, 0, 0.15);
        }

        .contenido-izquierdo-problematica {
            position: relative;
            z-index: 2;
            padding: 3.5rem 2.5rem 3.5rem 6%;
        }

        @media (max-width: 991.98px) {
            .mancha-problematica {
                width: 120%;
                height: 100%;
                top: 0;
                left: -10%;
                transform: none;
                border-radius: 0;
            }
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
                        <a class="nav-link active border-bottom border-2 border-light" href="{{ route('problematica') }}">Problemática</a>
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

    <!-- Encabezado principal -->
    <header class="hero-problematica">
        <img src="{{ asset('/images/suelo.jpg') }}" alt="Problemática en el CBTA 35" class="imagen-fondo-completa">
        <div class="mancha-problematica"></div>

        <!-- Contenido Hero -->
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 contenido-izquierdo-problematica">
                    <div>
                        <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: #ead3bc; color: #5c3a1e; letter-spacing: 2px;">
                            CBTA No. 35 • Diagnóstico Ambiental
                        </span>

                        <h1 class="titulo-interior mb-3">
                            La problemática en el CBTA No. 35
                        </h1>

                        <h2 class="h4 fw-bold mb-3" style="color: #7f4f24;">
                            Deforestación: ¿Qué es?
                        </h2>

                        <p class="text-secondary fs-6 mb-4" style="line-height: 1.75;">
                            La deforestación es la pérdida permanente de zonas boscosas debida, principalmente, a actividades humanas como la agricultura, la ganadería o la urbanización. Este proceso implica la eliminación total o parcial de árboles y vegetación, lo que altera gravemente el equilibrio natural de los ecosistemas. Aunque la tala de árboles puede formar parte de una gestión forestal sostenible, cuando se lleva a cabo de manera descontrolada y sin planes de reforestación, se convierte en un problema ambiental de enormes proporciones.
                        </p>

                        <a href="#contenido" class="btn rounded-pill px-4 py-2 fw-bold text-white" style="background-color: #7f4f24; border: none;">
                            Ver causas y efectos ↓
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main id="contenido">
        <!-- Sección 1: Causas de la deforestación -->
        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <span class="badge rounded-pill px-3 py-2 mb-2 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023;">
                            Origen del problema
                        </span>
                        <h2 class="display-6 fw-bold text-uppercase mb-3" style="color: #064023;">
                            Causas de la deforestación
                        </h2>
                        <p class="text-muted fs-5">
                            Para entender cómo frenar la deforestación, primero es necesario conocer qué la provoca. Estas son las principales
                            causas que están detrás de la pérdida de nuestros bosques.
                        </p>
                    </div>
                </div>

                <!-- Tarjetas de causas -->
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5;">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #064023;">1. Agricultura intensiva y ganadería extensiva</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.7;">
                                    Uno de los principales motores de la deforestación es la expansión agrícola. En muchas regiones del mundo,
                                    se talan grandes extensiones de bosque para cultivar productos como soja, aceite de palma o para criar
                                    ganado. Esto ocurre especialmente en países tropicales, donde la presión por aumentar la producción ha
                                    llevado a la destrucción de vastos territorios forestales.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5;">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #064023;">2. Explotación maderera</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.7;">
                                    La tala indiscriminada de árboles para la obtención de madera, papel o carbón vegetal es otra de las
                                    causas de la deforestación. Cuando esta actividad no se regula ni se lleva a cabo de forma responsable,
                                    genera una pérdida irreparable de recursos naturales.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5;">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #064023;">3. Expansión urbana e infraestructuras</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.7;">
                                    El crecimiento de ciudades, carreteras, presas y otras infraestructuras también implica la eliminación de
                                    bosques. A medida que la población mundial crece, aumenta la demanda de suelo y, con ello, la presión
                                    sobre los entornos naturales.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5;">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #064023;">4. Incendios forestales</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.7;">
                                    Los incendios, tanto provocados como naturales, son una causa importante de deforestación. En muchos
                                    casos, se causan de forma intencionada para “limpiar” terrenos con el fin de usarlos posteriormente para
                                    actividades productivas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 2: Consecuencias de la deforestación -->
        <section class="py-5" style="background-color: #f4f9f5;">
            <div class="container py-4">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <span class="badge rounded-pill px-3 py-2 mb-2 text-uppercase fw-bold" style="background-color: #064023; color: #d8f3dc;">
                            Impacto global
                        </span>
                        <h2 class="display-6 fw-bold text-uppercase mb-3" style="color: #064023;">
                            Consecuencias de la deforestación
                        </h2>
                        <p class="text-muted fs-5">
                            La deforestación tiene un impacto profundo en múltiples niveles. Estas son algunas de sus consecuencias más
                            preocupantes:
                        </p>
                    </div>
                </div>

                <!-- Tarjetas de consecuencias -->
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #19692c;">Pérdida de biodiversidad</h3>
                                <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                    Los bosques albergan una enorme variedad de especies animales y vegetales. Cuando se destruyen estos
                                    hábitats, muchas especies desaparecen o se ven obligadas a desplazarse, lo que pone en peligro la
                                    biodiversidad mundial.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #19692c;">Cambio climático</h3>
                                <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                    Los árboles cumplen una función esencial en la absorción de dióxido de carbono. Al destruir grandes
                                    áreas forestales, se libera CO₂ a la atmósfera y se reduce la capacidad del planeta para absorber gases
                                    de efecto invernadero, acelerando así el cambio climático.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #19692c;">Erosión del suelo</h3>
                                <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                    La vegetación actúa como una barrera natural contra la erosión. Sin árboles que lo protejan, el suelo
                                    se degrada rápidamente, pierde nutrientes y se vuelve menos fértil.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #19692c;">Alteración del ciclo del agua</h3>
                                <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                    Los bosques influyen en el equilibrio hídrico. La deforestación puede alterar las lluvias, reducir
                                    la humedad del suelo y afectar la disponibilidad de agua dulce.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 3: Impacto en el plantel -->
        <section class="py-5 text-white" style="background: linear-gradient(135deg, #064023 0%, #19692c 100%);">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: rgba(255,255,255,0.15); color: #b7efc5;">
                            Proyecto Escolar Comunitario (PEC)
                        </span>
                        <h2 class="display-6 fw-bold text-uppercase mb-4" style="color: #d8f3dc;">
                            ¿Cómo afecta al CBTA 35?
                        </h2>
                        <p class="fs-5 mb-4" style="color: rgba(255,255,255,0.92); line-height: 1.8;">
                            Como estudiante del CBTA 35, con base en el Proyecto Escolar Comunitario (PEC) referente al tema de reforestación,
                            he observado que la pérdida de la flora no solo afecta la calidad del suelo y el ecosistema local, sino que también
                            tiene efecto en las actividades que se realizan en el plantel, sobre todo a mis compañeros de las carreras de
                            Agropecuario, Agroindustrias, etc., ya que son ellos quienes interactúan más directamente con la flora del plantel,
                            como por ejemplo el cerro de basura o la casi nula vegetación que hacen de estas situaciones un problema real que
                            se tiene que atender.
                        </p>
                        <div class="p-4 rounded-4" style="background-color: rgba(255,255,255,0.1); border-left: 4px solid #b7efc5;">
                            <p class="mb-0 fs-5" style="line-height: 1.7;">
                                <strong>¿Y cómo podemos atender estos problemas?</strong> La respuesta es sencilla: con la reforestación,
                                la implementación de campañas de concientización y la participación activa de toda la comunidad educativa,
                                podemos revertir los efectos negativos de la deforestación y promover un entorno más saludable y sostenible
                                para todos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 4: Testimonios de estudiantes -->
        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-9">
                        <span class="badge rounded-pill px-3 py-2 mb-2 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023;">
                            Voz Estudiantil
                        </span>
                        <h2 class="h3 fw-bold text-uppercase mb-3" style="color: #064023;">
                            Experiencia de los estudiantes ante la problemática
                        </h2>
                        <p class="text-muted fs-5 mb-0">
                            A raíz de la pregunta detonante y captura de respuesta hacia estudiantes del plantel: <em>“¿Cómo has vivido la problemática de la falta de flora del CBTA 35?”</em>
                        </p>
                    </div>
                </div>

                <!-- Tarjetas de testimonios -->
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5; border-left: 4px solid #19692c !important;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <p class="text-secondary fst-italic mb-3" style="line-height: 1.7;">
                                    “A veces se ve muy seco el ambiente.”
                                </p>
                                <h3 class="h6 fw-bold text-uppercase mb-0" style="color: #064023;">Estudiante 1</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5; border-left: 4px solid #19692c !important;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <p class="text-secondary fst-italic mb-3" style="line-height: 1.7;">
                                    “Lo he vivido bien, hay mucha flora en el plantel.”
                                </p>
                                <h3 class="h6 fw-bold text-uppercase mb-0" style="color: #064023;">Estudiante 2</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5; border-left: 4px solid #19692c !important;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <p class="text-secondary fst-italic mb-3" style="line-height: 1.7;">
                                    “No hay mucho mantenimiento en las áreas verdes que se deberían de hacer y eso causa pérdida de plantas.”
                                </p>
                                <h3 class="h6 fw-bold text-uppercase mb-0" style="color: #064023;">Estudiante 3</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5; border-left: 4px solid #19692c !important;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <p class="text-secondary fst-italic mb-3" style="line-height: 1.7;">
                                    “No siento que hay espacio libre porque hay basura en las áreas verdes y no hay suficiente flora ni fauna que podamos disfrutar como estudiantes.”
                                </p>
                                <h3 class="h6 fw-bold text-uppercase mb-0" style="color: #064023;">Estudiante 4</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5; border-left: 4px solid #19692c !important;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <p class="text-secondary fst-italic mb-3" style="line-height: 1.7;">
                                    “Se ve muy feo y descolorido.”
                                </p>
                                <h3 class="h6 fw-bold text-uppercase mb-0" style="color: #064023;">Estudiante 5</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5; border-left: 4px solid #19692c !important;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <p class="text-secondary fst-italic mb-3" style="line-height: 1.7;">
                                    “Por el daño del suelo, el ambiente de las plantas y cómo se usa el terreno.”
                                </p>
                                <h3 class="h6 fw-bold text-uppercase mb-0" style="color: #064023;">Estudiante 6</h3>
                            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>