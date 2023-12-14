<?php
// Verifica si el usuario ha iniciado sesión
session_start();

if (!isset($_SESSION['username'])) {
    // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: index.php");
    exit();
}

// Obtiene el nombre de usuario de la sesión
$username = $_SESSION['username'];

// Conexión a la base de datos
$servername = "localhost";
$db_username = "root";
$db_password = "1235";
$db_name = "cdia";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los datos del usuario
$sql = "SELECT email, age FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtiene los datos del usuario
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $age = $row['age'];
} else {
    // No se encontraron datos del usuario
    $email = "No disponible";
    $age = "No disponible";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Foro de Inteligencia Artificial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
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
                <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
              </li>
              <!-- Otras opciones de navegación -->
              <li class="nav-item">
                <span class="nav-link">Bienvenido, <?php echo $username; ?></span>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Contenido de la página de perfil -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4 text-center">Perfil de Usuario</h2>
                <p><strong>Nombre de usuario:</strong> <?php echo $username; ?></p>
                <p><strong>Correo Electrónico:</strong> <?php echo $email; ?></p>
                <p><strong>Edad:</strong> <?php echo $age; ?></p>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y JavaScript Personalizado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
