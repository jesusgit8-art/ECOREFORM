<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
    <title>Plantas y suelos - ECOREFORM</title>
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
            padding-top: 70px;
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

        .hero-botanico {
            position: relative;
            background: linear-gradient(180deg, #f6f4ef 65%, #d8f3dc 100%);
            border-bottom-left-radius: 60px;
            border-bottom-right-radius: 60px;
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .titulo-interior {
            font-size: clamp(2.1rem, 4.2vw, 3.4rem);
            font-weight: 900;
            color: #064023;
            line-height: 1.15;
            text-transform: uppercase;
        }

        .bg-crema {
            background-color: #f6f4ef !important;
        }

        .bg-crema-suave {
            background-color: #efede6 !important;
        }

        #contenido,
        #plantas-ideales {
            scroll-margin-top: 85px;
        }

        .imagen-flora {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border: 6px solid #ffffff;
        }

        @media (max-width: 576px) {
            .imagen-flora {
                height: 250px;
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
                        <a class="nav-link" href="{{ route('problematica') }}">Problemática</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active border-bottom border-2 border-light" href="{{ route('flora') }}">Plantas y suelos</a>
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
    <header class="hero-botanico">
        <div class="container">
            <div class="row align-items-center g-4">
                <!-- Introducción a los suelos -->
                <div class="col-lg-7">
                    <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: #064023; color: #b7efc5; letter-spacing: 2px;">
                        CBTA No. 35 • Flora y Edafología
                    </span>
                    <h1 class="titulo-interior mb-3">
                        Plantas y Suelos
                    </h1>
                    <h2 class="h4 fw-bold mb-3" style="color: #19692c;">
                        Suelos del CBTA No. 35
                    </h2>
                    <p class="text-secondary fs-6 mb-3" style="line-height: 1.8;">
                        Aunque no existe información específica sobre los suelos del CBTA No. 35,
                        existe información sobre Valle de Chalco Solidaridad, que es donde se encuentra
                        ubicado el plantel.
                    </p>
                    <p class="text-secondary fs-6 mb-4" style="line-height: 1.8;">
                        El territorio de Valle de Chalco se compone por rocas de origen sedimentario e
                        ígneas extrusivas pertenecientes al periodo cenozoico; las unidades litológicas
                        presentes son las siguientes: brecha volcánica básica Q(Bvb), toba básica
                        Ts(Tb), aluvial Q(al) y lacustre Q(la).
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="#contenido" class="btn btn-success rounded-pill px-4 py-2 fw-bold" style="background-color: #19692c; border: none;">
                            Explorar características ↓
                        </a>
                        <a href="#plantas-ideales" class="btn btn-outline-success rounded-pill px-4 py-2 fw-semibold">
                            Ver plantas y árboles
                        </a>
                    </div>
                </div>

                <!-- Imagen destacada -->
                <div class="col-lg-5 text-center">
                    <div class="col-lg-5 text-center">
                        <img src="{{ asset('/images/suelo2.jpg') }}" alt="Suelo" class="img-fluid rounded-4 shadow-lg" style="max-width: 900px; height: 500px; object-fit: cover; border: 6px solid #ffffff;">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main id="contenido">
        <!-- Sección 1: Composición del suelo y datos territoriales -->
        <section class="py-5 bg-crema">
            <div class="container py-4">
                <!-- Distribución de suelos -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 mb-5 bg-white">
                    <div class="card-body p-0">
                        <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023;">
                            Composición del terreno
                        </span>
                        <h2 class="h3 fw-bold mb-3" style="color: #064023;">
                            Distribución de suelos en Valle de Chalco Solidaridad
                        </h2>
                        <p class="text-secondary fs-6 mb-0" style="line-height: 1.8;">
                            El suelo predominante es el lacustre con 3,958 ha (85% del municipio) constituido por espesas capas de material arcilloso, con alto contenido de agua, muy compresibles, dentro de esta clase se localiza la zona urbana; le siguen en orden de importancia el suelo aluvial con 396 ha (9%), su localización es en el cráter del Volcán de Xico y en la cima del cerro del Márquez; el suelo toba básica se distribuye en 193 ha (5%) localizadas en las laderas de los cerros Xico, El Márquez y La Caldera; estos suelos por ser de textura arenosa al entrar en contacto con el agua pluvial, pueden provocar inestabilidad en laderas; el restante 1% (57 ha) lo compone el suelo brecha volcánica básica.
                        </p>
                    </div>
                </div>

                <!-- Apartados geográficos y ambientales -->
                <div class="row g-4">
                    <!-- Toponimia -->
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold text-uppercase mb-3" style="color: #064023;">Toponimia</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    Toma el nombre debido a que se encontraba ubicado en un valle el que era lecho del antiguo Lago de Chalco y en este lugar dio inicio el Programa Nacional de Solidaridad. Está compuesto por dos glifos de origen prehispánico y un logo contemporáneo. El glifo de Xico o Xico, xitli (ombligo) y el glifo calli (casa o casas). El logo es el utilizado por el gobierno federal en el Programa Nacional de Solidaridad. El significado es "las casas que se establecieron al lado del Cerro de Xico, fundado con la solidaridad de sus pobladores".
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Ubicación geográfica -->
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold text-uppercase mb-3" style="color: #064023;">Ubicación geográfica</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    Se ubica en la cuenca oriente del Valle de México, cuenta con una latitud mínima de 19°13'30'' y máxima de 19°20'21''; con una longitud mínima de 99°42'03'' y máxima de 98°58'34''; altitud de 2 235 metros sobre el nivel medio del mar.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Edafología -->
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold text-uppercase mb-3" style="color: #064023;">Edafología</h3>
                                <p class="text-secondary mb-3" style="line-height: 1.75;">
                                    El suelo dominante es xolonchac gleyico (zg) con 2,540 ha (55% del municipio) formado a partir de carbonatos álcali blanco o tequezquite; otro tipo de suelo presente es el gleysol mólico (gm) con 1,070 ha (23%), su localización es al sur del municipio; esta clase se distingue por ser un suelo pantanoso con alto contenido de arcilla; la composición del suelo es complementada con la presencia de regosol éutrico (Re) formado por sedimentos arenosos, se encuentra en 1,026 ha (22%) ubicada en la porción noroeste del municipio.
                                </p>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    En síntesis, el tipo de suelo existente en la mayor parte del territorio presenta una alta compresibilidad mostrando una resistencia promedio de dos toneladas por metro cuadrado; en temporadas de lluvias el material presente absorbe gran cantidad de agua, aumentando hasta el doble de su volumen original, el cual se reduce a la cuarta parte cuando se deshidrata por completo provocando agrietamiento en el terreno, dañando así las construcciones existentes.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Uso del suelo -->
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold text-uppercase mb-3" style="color: #064023;">Uso del suelo</h3>
                                <p class="text-secondary mb-3" style="line-height: 1.75;">
                                    Los suelos del Municipio formaron parte de un lago de 15 metros de profundidad en tiempos pleistocénicos, el cual se azolvó por fenómenos de deposición lacustre, eólica y aluvial de diferentes materiales, entre los que predominan las cenizas volcánicas. En sus comunidades y su entorno, logrando entre otros beneficios reducir las tasas de mortalidad y morbilidad.
                                </p>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    El objetivo general del Municipio de Valle de Chalco Solidaridad es contar con un sistema de salud estable que atienda de manera satisfactoria las necesidades prioritarias de la población a partir de la creación de mecanismos de cooperación y coordinación interinstitucional, así como de control del ejercicio de los recursos, que contribuyan a consolidar mejores resultados de bienestar. En este mismo sentido, adquieren vital importancia la vigilancia epidemiológica permanente, la prevención de situaciones de riesgo, la dignificación de la infraestructura en salud, el fortalecimiento de la calidad de la atención y el diseño de campañas de sensibilización ciudadana para el autocuidado de la salud.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Límites y extensión territorial -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <h3 class="h5 fw-bold text-uppercase mb-3" style="color: #064023;">Límites y extensión territorial</h3>
                                <p class="text-secondary mb-3" style="line-height: 1.75;">
                                    El municipio colinda al norte con los Municipios de La Paz e Ixtapaluca; al este con los Municipios de Ixtapaluca y Chalco; al sur con el Municipio de Chalco y la Ciudad de México; al oeste con la Ciudad de México.
                                </p>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    El territorio del Municipio comprende y se encuentra asentado conforme a los límites de la poligonal siguiente: Conserva la extensión y límites actualmente reconocidos y establecidos conforme a la Ley: inicia en el punto donde concluye la línea del ferrocarril México-Cuautla y la carretera federal México-Puebla, sobre la carretera se dirige hacia el sureste hasta una distancia de mil metros, donde se ubica el río La Compañía cuyo cauce sigue en dirección sureste, cruza la autopista México-Puebla y la cual continúa con rumbo suroeste hasta interceptar con la Avenida Solidaridad, la cual sigue en dirección sureste aproximadamente novecientos metros donde dobla en dirección suroeste siguiendo el límite del parque metropolitano. Al llegar al Cerro del Marqués lo bordea continuando el camino de pavimento en su vertiente sur hasta donde inicia el Cerro de Xico, continúa hacia el sur siguiendo el límite entre los ejidos de Chalco y San Martín Xico hasta encontrarse con la carretera Chalco-Tláhuac; la cual sigue en dirección oriente hasta pasar la curva de dicha carretera, a una distancia aproximada de quinientos metros, dobla en dirección sur hasta encontrarse con el río de Amecameca, continúa siguiendo su cauce hasta el límite con la Ciudad de México en la zona oeste, sigue por dicho límite en dirección norte hasta la autopista México-Puebla, sobre esta dobla hacia el noroeste hasta el volcán La Caldera, el cual bordea en su vertiente sur hacia una distancia aproximada de ochocientos metros desde donde se dirige al sureste hasta encontrarse con la línea del ferrocarril México-Cuautla, la cual continúa en dirección noroeste hasta el punto de origen en la poligonal.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Clima -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 text-white" style="background: linear-gradient(135deg, #064023 0%, #19692c 100%);">
                            <div class="card-body p-0">
                                <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase fw-bold" style="background-color: rgba(255,255,255,0.15); color: #b7efc5;">
                                    Condiciones atmosféricas
                                </span>
                                <h3 class="h4 fw-bold text-uppercase mb-3" style="color: #d8f3dc;">Clima</h3>
                                <p class="mb-3" style="color: rgba(255,255,255,0.92); line-height: 1.75;">
                                    Dentro del Municipio de Valle de Chalco Solidaridad, predomina el clima C (WO) (W) B (I”) que es templado húmedo, subhúmedo; sin embargo, en la parte norte del Municipio se encuentra también clima seco. Durante los meses de diciembre, enero, febrero y marzo, los vientos adquieren mayores velocidades y producen polvaredas en las horas más calientes del día.
                                </p>
                                <p class="mb-3" style="color: rgba(255,255,255,0.92); line-height: 1.75;">
                                    La temperatura media anual es de 15.6°C, pero en el verano, la temperatura promedio máxima alcanza los 31°C y en invierno, la mínima promedio es de 8.2°C. No obstante, pueden registrarse temperaturas más altas o bajas a lo largo del día. La temperatura más elevada se presenta en los meses de abril, mayo, junio, julio y agosto, mientras que las medias mínimas son en diciembre, enero y febrero con la presencia de algunas heladas. En ocasiones, bajas temperaturas se han registrado en el verano en algunos días de julio y agosto por la disminución de la humedad del aire; y en los meses de septiembre y octubre se pueden presentar durante el día temperaturas altas y por la noche vientos fríos.
                                </p>
                                <p class="mb-3" style="color: rgba(255,255,255,0.92); line-height: 1.75;">
                                    En los meses de mayo, junio, julio, agosto y septiembre las lluvias pueden llegar a ser muy abundantes. La precipitación promedio se establece entre 600 y 700 milímetros anuales, mientras que la evapotranspiración es muy alta, de 737 milímetros anuales, alcanzando sus valores máximos de mayo a octubre, cifra mayor a la precipitación media anual, con excepción de los meses lluviosos de agosto a octubre. Los meses secos son: enero, febrero y marzo, aunque se registran algunas lluvias extemporáneas.
                                </p>
                                <p class="mb-0" style="color: rgba(255,255,255,0.92); line-height: 1.75;">
                                    Los vientos predominantes tienen una dirección de sur a norte con velocidades de 2 a 12 m/seg. Sin embargo, durante los meses de febrero y marzo adquieren mayores velocidades y producen polvaredas en las horas más calientes del día, transportando grandes cantidades de polvo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección 2: Plantas y árboles ideales -->
        <section id="plantas-ideales" class="py-5 bg-crema-suave">
            <div class="container py-4">
                <!-- Plantas ideales -->
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <span class="badge rounded-pill px-3 py-2 mb-2 text-uppercase fw-bold" style="background-color: #d8f3dc; color: #064023;">
                            Vegetación recomendada
                        </span>
                        <h2 class="display-6 fw-bold text-uppercase mb-0" style="color: #064023;">
                            Plantas ideales para el CBTA No. 35
                        </h2>
                    </div>
                </div>

                <div class="row g-4 mb-5">
                    <!-- Lavanda -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('/images/lavanda.png') }}" alt="Lavanda" class="img-fluid rounded-4 shadow-lg imagen-flora">
                                </div>
                                <br>
                                <h3 class="h5 fw-bold text-uppercase mb-3" style="color: #19692c;">La Lavanda</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    Esta planta propia de la región mediterránea agradece el sol directo, siempre que no sea demasiado intenso, y resiste sin necesidad de demasiada agua. Su característico olor, gracias al que es muy usada en perfumería, y sus colores morados y azulados.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Cactus -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('/images/cactus.png') }}" alt="Cactus" class="img-fluid rounded-4 shadow-lg imagen-flora">
                                </div>
                                <br>
                                <h3 class="h5 fw-bold text-uppercase mb-3" style="color: #19692c;">El Cactus</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    La familia Cactaceae aguanta muy bien la sequía por tratarse de plantas desérticas. Esto no significa que no necesiten agua para vivir, pero el sustrato debe estar bien seco antes de un nuevo riego.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Verbena -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('/images/verbena.png') }}" alt="Verbena" class="img-fluid rounded-4 shadow-lg imagen-flora">
                                </div>
                                <br>
                                <h3 class="h5 fw-bold text-uppercase mb-3" style="color: #19692c;">La Verbena</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    Aguanta altas temperaturas y además otorga un aspecto más colorido y vistoso. Además de soportar bien la falta de agua, un riego a la semana es suficiente; aguantan muy bien la exposición directa al sol (de ahí que sean también muy utilizadas en las medianas de autopistas).
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Agave -->
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('/images/agave.png') }}" alt="Agave" class="img-fluid rounded-4 shadow-lg imagen-flora">
                                </div>
                                <br>
                                <h3 class="h5 fw-bold text-uppercase mb-3" style="color: #19692c;">El Agave</h3>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    Esta planta oriunda de México y Estados Unidos, también conocida como pita, maguey o mezcal, necesita suelos arcillosos y permeables, además de una alta exposición al sol a lo largo del año. Resisten bien la falta de agua.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Árboles ideales -->
                <div class="row justify-content-center text-center mb-4 pt-3">
                    <div class="col-lg-8">
                        <h3 class="h2 fw-bold text-uppercase mb-0" style="color: #064023;">
                            Árboles ideales para el CBTA No. 35
                        </h3>
                    </div>
                </div>

                <div class="row g-4 mb-5">
                    <!-- Fresno -->
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('/images/fresno.png') }}" alt="Fresno" class="img-fluid rounded-4 shadow-lg imagen-flora">
                                <br>
                                <h4 class="h5 fw-bold text-uppercase mb-3" style="color: #064023;">Fresno</h4>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    El fresno es un árbol que se adapta a cualquier ambiente y tipo de suelo. Suele distribuirse por las riberas de los ríos y zonas húmedas, pero también puede verse en las montañas. Y es que este árbol aguanta muy bien el frío invierno siendo capaz de vivir entre los 80 y 100 años.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Jacaranda -->
                    <div class="col-lg-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('/images/jacaranda.png') }}" alt="Jacaranda" class="img-fluid rounded-4 shadow-lg imagen-flora">
                                </div>
                                <br>
                                <h4 class="h5 fw-bold text-uppercase mb-3" style="color: #064023;">Jacaranda</h4>
                                <p class="text-secondary mb-0" style="line-height: 1.75;">
                                    La Jacaranda es una especie que destaca por su resistencia y por su bajo consumo de agua, lo que le permite adaptarse y crecer sin necesitar demasiados cuidados. Con un riego adecuado y constante, puede desarrollarse de manera saludable y alcanzar grandes dimensiones. También aporta beneficios al medio ambiente, ya que absorbe dióxido de carbono y produce oxígeno, ayudando a mejorar la calidad del aire. En las zonas urbanas, su presencia favorece la creación de espacios más frescos, contribuyendo a disminuir la temperatura del entorno. Por estas razones, la Jacaranda es una especie muy apropiada para la reforestación de las ciudades, pues además de brindar belleza con sus flores, ofrece ventajas ecológicas que benefician a la población.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guía de siembra -->
                <div class="card border-0 shadow-sm rounded-4 p-4 text-center" style="background-color: #d8f3dc;">
                    <div class="card-body">
                        <h3 class="h5 fw-bold mb-3" style="color: #064023;">
                            Puedes consultar una guía de siembra en:
                        </h3>
                        <a href="https://projects.sare.org/media/pdf/2/G/u/2.-Guias-de-siembra-Rev-5_13_24.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-4 py-2 fw-bold" style="background-color: #064023; border: none;">
                            Guía de siembra (PDF) ↗
                        </a>
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