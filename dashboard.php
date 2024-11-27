<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMSS</title>
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
</head>

<body>

    <!-- BARRA DE NAVEGACIÓN -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href=".">UMSS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="./formulario.php" id="formulario">Formulario</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./dashboard.php" id="dashboard">Dashboard</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid text-white p-5" style="position: relative; background-image: url('./backend/src/bannerUMSS.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
        <div style="position: relative; z-index: 2;">
            <h1>UMSS</h1>
            <p class="lead">Un Mejor Sistema De Salud</p>
        </div>
    </div>

    <div class="container">
        <div class="row p-4">
            <!-- FORMULARIO PARA AGREGAR PRODUCTO -->
            <div class="col-12">
                <h2 class="mt-4">Información de la Página</h2>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <h2 class="mt-4">Información de la ODS</h2>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Lógica del Frontend -->
    <script src="./backend/app.js"></script>

</body>

</html>