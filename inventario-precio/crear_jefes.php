<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];

    $stmt = $conn->prepare("INSERT INTO Jefe (NombreJefe, TelefonoJefe) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $telefono);

    if ($stmt->execute()) {
        echo "Jefe creado con éxito";
    } else {
        echo "Error al crear jefe: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Jefe</title>
</head>
<body>
    <h1>Formulario para crear jefe</h1>
    <form method="POST">
        <label>Nombre del Jefe:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br><br>

        <button type="submit">Crear</button>
    </form>
</body>
</html>

