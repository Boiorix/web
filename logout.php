<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si no ha iniciado sesión, redirige a la página principal
    header("Location: main.php");
    exit;
}

$username = $_SESSION['username']; // Obtener el nombre del usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despedida</title>
    <link rel="stylesheet" href="styles.css">
</head>
<nav class="navbar">
        <ul>
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="menu.html">Menú</a></li>
            <li><a href="historia.html">Historia</a></li>
            <li><a href="redes.html">Redes Sociales</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
        <div class="logo">
            <img src="logo.jpg" alt="Logo de Charly's Burgers">
        </div>
    </nav>
<body>

    <h1>¡Adiós, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Gracias por usar nuestro servicio. Puedes cerrar sesión cuando quieras.</p>

    <form action="main.php" method="get">
        <button type="submit">Volver a la página principal</button>
    </form>

</body>
</html>
