<?php
include("conexion.php");

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $iddepartamento = $_POST["iddepartamento"];

    $stmt = $conn->prepare("INSERT INTO Empleado (NombreEmpleado, ApellidoEmpleado, Telefono, Correo, IDDepartamento) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $nombre, $apellido, $telefono, $correo, $iddepartamento);

    if ($stmt->execute()) {
        echo "Empleado creado con éxito<br><br>";
    } else {
        echo "Error al crear empleado: " . $conn->error . "<br><br>";
    }

    $stmt->close();
}

echo "Conexión exitosa a la base de datos<br>";
?>

<h1>Formulario para crear Empleado</h1>
<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label>Apellido:</label>
    <input type="text" name="apellido" required><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required><br>

    <label>Correo:</label>
    <input type="email" name="correo" required><br>

    <label>ID Departamento:</label>
    <select name="iddepartamento" required>
        <option value="">-- Selecciona un departamento --</option>
        <?php
        // Obtener departamentos desde la base de datos
        $resultado = $conn->query("SELECT IDDepartamento, NombreDepartamento FROM Departamento");
        while ($fila = $resultado->fetch_assoc()) {
            echo "<option value='" . $fila['IDDepartamento'] . "'>" . $fila['NombreDepartamento'] . "</option>";
        }
        ?>
    </select><br><br>

    <button type="submit">Crear</button>
</form>
