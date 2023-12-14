<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <link rel="stylesheet" href="src/css/style.css">
    <title>Foro de Inteligencia Artificial</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png" type="image/png">
</head>
<body>
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
                CD ./IA
            </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Temas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                 
                  <li><a class="dropdown-item" href="redesNeuronales.html">Redes Neuronales Artificiales</a></li>
                  <li><a class="dropdown-item" href="aprendizajeNosupervisado.html">Aprendizaje No Supervisado</a></li>
                  <li><a class="dropdown-item" href="aprendizajeSupervisado.html">Aprendizaje Supervisado</a></li>
                  <li><a class="dropdown-item" href="aprendizajeReforzado.html">Aprendizaje Reforzado</a></li>
                  <li><a class="dropdown-item" href="iaDebil.html">IA Débil o Estrecha</a></li>
                  <li><a class="dropdown-item" href="iaFuerte.html">IA Fuerte o General</a></li>
				  <li><a class="dropdown-item" href="webpage.html">Prompt Chat Gpt</a></li>
				  <li><a class="dropdown-item" href="webpage2.html">Prompt IA Imagenes</a></li>
                </ul>
              </li>
              <ul class="navbar-nav ml-auto">
                <!-- Otros enlaces ... -->
                <li class="nav-item">
                    <a class="nav-link" href="noticias.html">Noticias</a>
                </li>
            </ul>
            <li class="nav-item">
                <a class="nav-link" href="perfil.php">Perfil</a> <!-- Añadido enlace a otra página -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a> <!-- Añadido enlace a otra página -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Registrarse</a> <!-- Añadido enlace a otra página -->
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="buscar.php">Buscar usuarios</a> <!-- Añadido enlace a otra página -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a> <!-- Añadido enlace a otra página -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="test.html">Test</a> <!-- Añadido enlace a otra página -->
                </li>
                <?php 
                if (isset($_GET['username'])) { 
                    $username = $_GET['username']; 
                    echo '<li class="nav-item"><span class="nav-link">Bienvenido, ' . $username . '</span></li>';
                }
                ?>
            </ul>
          </div>
        </div>
      </nav>
      
<!-- index.html -->
    <!-- Contenedor de la imagen -->
    <div class="background-image-container">
        <img src="img/fondo.jpg" alt="Imagen de fondo">
    </div>

    <!-- Sección de Bienvenida -->
<div class="main-content d-flex flex-column">

    <!-- index.html -->
<header class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 text-white">Bienvenido al Foro CD ./IA</h1>
                <p class="lead text-white">Un lugar para aprender, compartir y discutir todo acerca de la Inteligencia Artificial.</p>
            <div class="col-lg-4 text-lg-right">
                <a href="#" class="btn btn-primary">Unirse al Foro</a>
            </div>
            
    </div>
</header>


    <!-- Sección de Temas de Discusión -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Temas Populares</h2>
            <div class="row">
                <!-- Tarjeta de Tema 1 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">¿Qué es la Inteligencia Artificial?</h5>
                            <p class="card-text">Discusión sobre los conceptos básicos y fundamentales de la Inteligencia Artificial.</p>
                            <a href="#" class="btn btn-primary">Participar</a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta de Tema 2 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Herramientas para IA</h5>
                            <p class="card-text">Comparte y descubre las mejores herramientas y librerías para trabajar con Inteligencia Artificial.</p>
                            <a href="#" class="btn btn-primary">Participar</a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta de Tema 3 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Proyectos de IA para Principiantes</h5>
                            <p class="card-text">Ideas y recursos para aquellos que están dando sus primeros pasos en el mundo de la IA.</p>
                            <a href="#" class="btn btn-primary">Participar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Publicaciones Mejor Valoradas de la Semana</h2>
            <div class="row">
                <!-- Tarjeta de Tema 1 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Próximamente</h5>
                            <a href="#" class="btn btn-primary">Votar</a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta de Tema 2 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Próximamente</h5>
                            <a href="#" class="btn btn-primary">Votar</a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta de Tema 3 -->
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Próximamente</h5>
                            <a href="#" class="btn btn-primary">Votar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- Pie de Página -->
   <!-- index.html -->
<footer id="miFooter" class="bg-primary text-white py-3 mt-auto">
    <div class="container text-center">
        <p class="mb-0">© 2023 Foro de Inteligencia Artificial. Todos los derechos reservados.</p>
    </div>
</footer>


    <!-- Scripts de Bootstrap y JavaScript Personalizado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    <script src="src/js/app.js"></script>
</body>
</html>
