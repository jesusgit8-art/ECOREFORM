<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <title>Problemática - ECOREFORM</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- Google Fonts: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet" />

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f7f8f5;
            color: #1f2d24;
            margin: 0;
            padding-top: 80px; /* Espacio para el navbar fijo */
        }

        /* Navbar consistente con el inicio (verde bosque sólido en páginas interiores) */
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

        /* Cabecera estilo Wireframe (Texto a la izquierda, mancha orgánica e imagen a la derecha) */
        .hero-interior {
            position: relative;
            overflow: hidden;
            background-color: #f7f8f5;
            min-height: calc(90vh - 80px);
            display: flex;
            align-items: center;
        }

        .mancha-organica {
            position: absolute;
            top: -5%;
            right: -8%;
            width: 55%;
            height: 110%;
            background: linear-gradient(135deg, #d8f3dc 0%, #b7efc5 100%);
            border-radius: 58% 42% 38% 62% / 48% 55% 45% 52%;
            z-index: 0;
            pointer-events: none;
        }

        .titulo-interior {
            font-size: clamp(2.1rem, 4.2vw, 3.4rem);
            font-weight: 900;
            color: #064023;
            line-height: 1.15;
            text-transform: uppercase;
        }

        .imagen-destacada {
            position: relative;
            z-index: 2;
            max-height: 460px;
            width: auto;
            filter: drop-shadow(0 18px 25px rgba(6, 64, 35, 0.18));
        }

        #contenido {
            scroll-margin-top: 85px;
        }

        @media (max-width: 991.98px) {
            .mancha-organica {
                width: 120%;
                height: 45%;
                top: auto;
                bottom: -5%;
                right: -10%;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar idéntico al de la página principal -->
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

    <!-- Encabezado principal estilo Wireframe -->
    <header class="hero-interior py-5">
        <div class="mancha-organica"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row align-items-center g-5">
                
                <!-- Columna Izquierda: Título e Introducción a la Deforestación -->
                <div class="col-lg-6">
                    <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023; letter-spacing: 2px;">
                        CBTA No. 35 • Diagnóstico Ambiental
                    </span>

                    <h1 class="titulo-interior mb-4">
                        La problemática en el CBTA No. 35
                    </h1>

                    <h2 class="h4 fw-bold mb-3" style="color: #19692c;">
                        Deforestación: ¿Qué es?
                    </h2>

                    <p class="text-secondary fs-6 mb-4" style="line-height: 1.8;">
                        La deforestación es la pérdida permanente de zonas boscosas debida, principalmente, a actividades humanas como la agricultura, la ganadería o la urbanización. Este proceso implica la eliminación total o parcial de árboles y vegetación, lo que altera gravemente el equilibrio natural de los ecosistemas. Aunque la tala de árboles puede formar parte de una gestión forestal sostenible, cuando se lleva a cabo de manera descontrolada y sin planes de reforestación, se convierte en un problema ambiental de enormes proporciones.
                    </p>

                    <a href="#contenido" class="btn btn-success rounded-pill px-4 py-2 fw-bold" style="background-color: #19692c; border: none;">
                        Ver causas y efectos ↓
                    </a>
                </div>

                <!-- Columna Derecha: Imagen sobre la mancha orgánica verde -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('/images/planta.png') }}" alt="Plántula en tierra" class="img-fluid imagen-destacada">
                </div>

            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main id="contenido">

        <!-- Sección: Causas de la deforestación -->
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
                            Para entender cómo frenar la deforestación, primero es necesario conocer qué la provoca. Estas son las principales causas que están detrás de la pérdida de nuestros bosques.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Causa 1 -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5;">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #064023;">1. Agricultura intensiva y ganadería extensiva</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.7;">
                                    Uno de los principales motores de la deforestación es la expansión agrícola. En muchas regiones del mundo, se talan grandes extensiones de bosque para cultivar productos como soja, aceite de palma o para criar ganado. Esto ocurre especialmente en países tropicales, donde la presión por aumentar la producción ha llevado a la destrucción de vastos territorios forestales.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Causa 2 -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5;">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #064023;">2. Explotación maderera</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.7;">
                                    La tala indiscriminada de árboles para la obtención de madera, papel o carbón vegetal es otra de las causas de la deforestación. Cuando esta actividad no se regula ni se lleva a cabo de forma responsable, genera una pérdida irreparable de recursos naturales.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Causa 3 -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5;">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #064023;">3. Expansión urbana e infraestructuras</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.7;">
                                    El crecimiento de ciudades, carreteras, presas y otras infraestructuras también implica la eliminación de bosques. A medida que la población mundial crece, aumenta la demanda de suelo y, con ello, la presión sobre los entornos naturales.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Causa 4 -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4" style="background-color: #f4f9f5;">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #064023;">4. Incendios forestales</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.7;">
                                    Los incendios, tanto provocados como naturales, son una causa importante de deforestación. En muchos casos, se causan de forma intencionada para “limpiar” terrenos con el fin de usarlos posteriormente para actividades productivas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección: Consecuencias de la deforestación -->
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
                            La deforestación tiene un impacto profundo en múltiples niveles. Estas son algunas de sus consecuencias más preocupantes:
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #19692c;">Pérdida de biodiversidad</h3>
                                <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                    Los bosques albergan una enorme variedad de especies animales y vegetales. Cuando se destruyen estos hábitats, muchas especies desaparecen o se ven obligadas a desplazarse, lo que pone en peligro la biodiversidad mundial.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #19692c;">Cambio climático</h3>
                                <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                    Los árboles cumplen una función esencial en la absorción de dióxido de carbono. Al destruir grandes áreas forestales, se libera CO₂ a la atmósfera y se reduce la capacidad del planeta para absorber gases de efecto invernadero, acelerando así el cambio climático.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #19692c;">Erosión del suelo</h3>
                                <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                    La vegetación actúa como una barrera natural contra la erosión. Sin árboles que lo protejan, el suelo se degrada rápidamente, pierde nutrientes y se vuelve menos fértil.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold mb-3" style="color: #19692c;">Alteración del ciclo del agua</h3>
                                <p class="text-secondary small mb-0" style="line-height: 1.7;">
                                    Los bosques influyen en el equilibrio hídrico. La deforestación puede alterar las lluvias, reducir la humedad del suelo y afectar la disponibilidad de agua dulce.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección: ¿Cómo afecta al CBTA 35? (Bloque destacado en verde bosque) -->
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
                            Como estudiante del CBTA 35, con base en el Proyecto Escolar Comunitario (PEC) referente al tema de reforestación, he observado que la pérdida de la flora no solo afecta la calidad del suelo y el ecosistema local, sino que también tiene efecto en las actividades que se realizan en el plantel, sobre todo a mis compañeros de las carreras de Agropecuario, Agroindustrias, etc., ya que son ellos quienes interactúan más directamente con la flora del plantel, como por ejemplo el cerro de basura o la casi nula vegetación que hacen de estas situaciones un problema real que se tiene que atender.
                        </p>
                        <div class="p-4 rounded-4" style="background-color: rgba(255,255,255,0.1); border-left: 4px solid #b7efc5;">
                            <p class="mb-0 fs-5" style="line-height: 1.7;">
                                <strong>¿Y cómo podemos atender estos problemas?</strong> La respuesta es sencilla: con la reforestación, la implementación de campañas de concientización y la participación activa de toda la comunidad educativa, podemos revertir los efectos negativos de la deforestación y promover un entorno más saludable y sostenible para todos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección: Experiencia de los estudiantes -->
        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-9">
                        <span class="badge rounded-pill px-3 py-2 mb-2 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023;">
                            Voz estudiantil
                        </span>
                        <h2 class="h3 fw-bold text-uppercase mb-3" style="color: #064023;">
                            Experiencia de los estudiantes del plantel ante la problemática
                        </h2>
                        <p class="lead text-muted fst-italic">
                            Pregunta detonante: “¿Cómo has vivido la problemática de la falta de flora del CBTA 35?”
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3" style="background-color: #f7f8f5;">
                            <div class="card-body">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: #19692c;">Estudiante 1</h3>
                                <p class="text-secondary fst-italic mb-0">“A veces se ve muy seco el ambiente.”</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3" style="background-color: #f7f8f5;">
                            <div class="card-body">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: #19692c;">Estudiante 2</h3>
                                <p class="text-secondary fst-italic mb-0">“Lo he vivido bien, hay mucha flora en el plantel.”</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3" style="background-color: #f7f8f5;">
                            <div class="card-body">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: #19692c;">Estudiante 3</h3>
                                <p class="text-secondary fst-italic mb-0">“No hay mucho mantenimiento en las áreas verdes que se deberían de hacer y eso causa pérdida de plantas.”</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3" style="background-color: #f7f8f5;">
                            <div class="card-body">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: #19692c;">Estudiante 4</h3>
                                <p class="text-secondary fst-italic mb-0">“No siento que hay espacio libre porque hay basura en las áreas verdes y no hay suficiente flora ni fauna que podamos disfrutar como estudiantes.”</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3" style="background-color: #f7f8f5;">
                            <div class="card-body">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: #19692c;">Estudiante 5</h3>
                                <p class="text-secondary fst-italic mb-0">“Se ve muy feo y descolorido.”</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-3" style="background-color: #f7f8f5;">
                            <div class="card-body">
                                <h3 class="h6 fw-bold text-uppercase mb-2" style="color: #19692c;">Estudiante 6</h3>
                                <p class="text-secondary fst-italic mb-0">“Por el daño del suelo, el ambiente de las plantas y cómo se usa el terreno.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="py-4 text-center text-white" style="background-color: #064023;">
        <div class="container">
            <small class="opacity-75">CBTA No. 35 • Proyecto Ambiental EcoReform</small>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>