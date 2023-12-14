<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Conexión a la base de datos
$servername = "localhost";
$db_username = "root";
$db_password = "1235";
$db_name = "cdia";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Si se envió un término de búsqueda
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    // Consulta para buscar usuarios por nombre de usuario o cualquier otro campo que desees
    $sql = "SELECT * FROM users WHERE username LIKE '%$search%' OR email LIKE '%$search%' OR age LIKE '%$search%'";

    $result = $conn->query($sql);
} else {
    $result = null;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eM68eGHMqdVf5cQjjPIut6ZXJLZGR5S7riCoSS9zZnU9ss7ZfQbo4tFmf5Wt4IC6" crossorigin="anonymous"></script>
    <title>Buscar Usuarios - Foro de Inteligencia Artificial</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png" type="image/png">
</head>
<body>
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
                CD ./IA
            </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Temas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="aprendizajeSupervisado.html">Aprendizaje Supervisado</a></li>
                  <li><a class="dropdown-item" href="redesNeuronales.html">Redes Neuronales Artificiales</a></li>
                  <li><a class="dropdown-item" href="aprendizajeNosupervisado.html">Aprendizaje No Supervisado</a></li>
                  <li><a class="dropdown-item" href="aprendizajeReforzado.html">Aprendizaje Reforzado</a></li>
                  <li><a class="dropdown-item" href="iaDebil.html">IA Débil o Estrecha</a></li>
                  <li><a class="dropdown-item" href="iaFuerte.html">IA Fuerte o General</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="perfil.php">Perfil</a> <!-- Añadido enlace a otra página -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a> <!-- Añadido enlace a otra página -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Registrarse</a> <!-- Añadido enlace a otra página -->
              </li>
              <?php 
                if (isset($_SESSION['username'])) { 
                    $username = $_SESSION['username']; 
                    echo '<li class="nav-item"><span class="nav-link">Bienvenido, ' . $username . '</span></li>';
                    echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                }
              ?>
            </ul>
          </div>
        </div>
      </nav>

    <!-- Contenido de la página de búsqueda de usuarios -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4 text-center">Buscar Usuarios</h2>
                <form action="buscar.php" method="GET" class="mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario, email o edad" name="search">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
                <h3 class="mb-3">Resultados de la búsqueda:</h3>
                <?php
                if ($result && $result->num_rows > 0) {
                    echo '<ul>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<li><strong>Nombre de usuario:</strong> ' . $row['username'] . ', <strong>Email:</strong> ' . $row['email'] . ', <strong>Edad:</strong> ' . $row['age'] . '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p>No se encontraron usuarios.</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y JavaScript Personalizado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
