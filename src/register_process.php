<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Conexión a la base de datos
    $servername = "localhost";
    $db_username = "root";
    $db_password = "1235";
    $db_name = "cdia";

    $conn = new mysqli($servername, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar usuario en la base de datos
    $check_username_sql = "SELECT * FROM users WHERE username='$username'";
    $check_username_result = $conn->query($check_username_sql);

    if ($check_username_result->num_rows > 0) {
        echo "El nombre de usuario ya está en uso. Por favor, elige otro.";
        echo '<br><a href="register.php" class="btn btn-primary">Volver atrás</a>';

    } else {
        // Insertar datos en la base de datos
        $insert_sql = "INSERT INTO users (username, password, email, age) VALUES ('$username', '$password', '$email', '$age')";

        if ($conn->query($insert_sql) === TRUE) {
            header("Location: index.php?username=$username");
        } else {
            echo "Error en el registro: " . $conn->error;
        }
    }
    $conn->close();
}
?>
