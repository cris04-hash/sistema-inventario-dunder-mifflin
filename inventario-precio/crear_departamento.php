<?php
include("conexion.php");

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $ubicacion = $_POST["ubicacion"];
    $presupuesto = $_POST["presupuesto"];
    $idjefe = $_POST["idjefe"];

    $stmt = $conn->prepare("INSERT INTO Departamento (NombreDepartamento, UbicacionDepartamento, Presupuesto, IDJefe) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssdi", $nombre, $ubicacion, $presupuesto, $idjefe);

    if ($stmt->execute()) {
        echo "Departamento creado con éxito<br><br>";
    } else {
        echo "Error al crear departamento: " . $conn->error . "<br><br>";
    }

    $stmt->close();
}

echo "Conexión exitosa a la base de datos<br>";
?>

<h1>Formulario para crear Departamento</h1>
<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label>Ubicación:</label>
    <input type="text" name="ubicacion" required><br>

    <label>Presupuesto:</label>
<input type="number" name="presupuesto" min="0" step="0.01" required><br>


    <label>ID Jefe:</label>
    <select name="idjefe" required>
        <option value="">-- Selecciona un jefe --</option>
        <?php
        // Obtener jefes desde la base de datos
        $resultado = $conn->query("SELECT IDJefe, NombreJefe FROM Jefe");
        while ($fila = $resultado->fetch_assoc()) {
            echo "<option value='" . $fila['IDJefe'] . "'>" . $fila['NombreJefe'] . "</option>";
        }
        ?>
    </select><br><br>

    <button type="submit">Crear</button>
</form>

