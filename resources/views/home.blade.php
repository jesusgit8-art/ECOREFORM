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

        /* Transición suave para el cambio de color */
        #mainNav {
            transition: background-color 0.3s ease, padding 0.3s ease;
        }

        /* Color que tomará al hacer scroll */
        #mainNav.scrolled {
            background-color: rgba(6, 64, 35, 0.95) !important;
            /* Verde bosque oscuro */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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
    </style>

</head>

<body>
    <header class="hero-verde d-flex justify-content-center align-items-center text-center min-vh-100 position-relative overflow-hidden">
        <img src="{{  asset('/images/tree.png') }}" alt="Árbol de fondo" class="arbol">
        <!-- Navbar transparente con los 5 apartados del wireframe centrados -->
        <nav class=" navbar navbar-expand-lg navbar-dark fixed-top bg-transparent py-4">
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

            <h1 class="frame titlemain text-uppercase mb-3">TOMA EL CONTROL</h1>

            <h2 class="frame subtitlemain text-uppercase mb-4 " style="color: #d8f3dc;"">PLANTA UN ÁRBOL</h2>

        </div>
    </header>

    <br>

    <main>

        <!-- Sección: ¿Qué es EcoReform? -->
        <section>
            <h2>¿QUÉ ES ECOREFORM?</h2>

            <p>
                EcoReform es una plataforma web que surgió a través de la necesidad
                de los estudiantes y docentes del CBTA 35 por consultar el estado
                de la flora y fauna del plantel, así como la problemática que se
                vive en el mismo dada la poca o nula información disponible.

                A través de este proyecto se busca informar, concientizar y motivar
                a la comunidad estudiantil a tomar acción en pro del medio ambiente,
                así como también informar a la comunidad en general sobre la
                problemática que se vive en el CBTA 35 y cómo pueden ayudar a
                mejorarla.
            </p>
        </section>

        <!-- Sección: Contenido de EcoReform -->
        <section>
            <h2>¿QUÉ PUEDO ENCONTRAR EN ECOREFORM?</h2>

            <p>
                En EcoReform, puedes encontrar información actualizada sobre la
                flora y fauna del CBTA 35, así como las principales problemáticas
                ambientales que se presentan en el plantel.

                Además, ofrecemos soluciones propuestas por la comunidad
                estudiantil y docente para abordar estas problemáticas.
            </p>
        </section>

        <!-- Sección: Introducción a la reforestación -->
        <section>
            <h2>INTRODUCCIÓN A LA REFORESTACIÓN</h2>

            <p>
                La reforestación es el proceso de plantar árboles en áreas donde
                anteriormente existían bosques o áreas verdes, pero que han sido
                degradadas o deforestadas.

                Este proceso es fundamental para restaurar los ecosistemas,
                mejorar la calidad del aire, conservar la biodiversidad y mitigar
                los efectos del cambio climático.

                La reforestación no solo beneficia al medio ambiente, sino que
                también tiene un impacto positivo en la salud y el bienestar
                de las comunidades locales.
            </p>
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