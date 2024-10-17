<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'Juan Molina' && $password == '2115572') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: inicio.html"); 
        exit;
    } else {
        $error = 'Nombre de usuario o contraseña incorrectos.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>

        <!-- Mostrar un error si el usuario o contraseña son incorrectos -->
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>

        <!-- Formulario de inicio de sesión -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Nombre de Usuario:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>
