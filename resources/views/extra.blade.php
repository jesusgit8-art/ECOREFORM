<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Página Extra</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />

    <style>
        body {
            font-family: 'Montserrat';
        }
    </style>
</head>

<body>
    <header>
        <h1>¡Goku necesita tu ayuda!</h1>
        <br>
        <h2>¡AYUDA A GOKU A REUNIR ENERGÍA PARA LA GENKIDAMA!</h2>
    </header>
    <main>
        <h3>
            Solo necesitas entrar al siguiente enlace y dar tus datos bancarios:
        </h3>

        <a href="https://www.youtube.com/watch?v=Z3J_MCbwaJ0" class="btn btn-success">¡DAR DATOS BANCARIOS AHORA! 😱</a>

        <h3>
            <strong>¡RÁPIDO, Goku te necesita!</strong>
        </h3>

        <div class="container-fluid my-4">
            <div class="row g-3 align-items-stretch" style="height: 65vh;">

                <div class="col-md-4 h-100">
                    <img src="{{ asset('/images/image.jfif') }}" class="img-fluid w-100 h-100 object-fit-cover rounded">
                </div>

                <div class="col-md-8 h-100 d-flex flex-column gap-3">

                    <img src="{{ asset('/images/download.jfif') }}" class="img-fluid w-100 object-fit-cover rounded" style="height: calc(50% - 0.5rem);">

                    <div class="w-100 d-flex justify-content-center" style="height: calc(50% - 0.5rem);">
                        <img src="{{ asset('/images/scareware.jpg') }}" class="img-fluid h-100 object-fit-cover rounded" style="aspect-ratio: 1 / 1;">
                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>