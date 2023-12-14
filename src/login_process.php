<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conexión a la base de datos
    $servername = "localhost";
    $db_username = "root";
    $db_password = "1235";
    $db_name = "cdia";

    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar credenciales
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username; 
        header("Location: index.php?username=$username");
    } else {
        echo "Credenciales incorrectas";
    }


    $conn->close();
}
?>
