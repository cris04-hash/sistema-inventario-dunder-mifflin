<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 60px;
        }
        h1 {
            margin-bottom: 30px;
        }
        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 250px;
            margin: 0 auto;
        }
        .btn-container a {
            display: inline-block;
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }
        .btn-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Panel Principal - Inventario Dunder Mifflin</h1>
    <div class="btn-container">
        <a href="crear_jefes.php">➕ Crear Jefe</a>
        <a href="crear_departamento.php">🏢 Crear Departamento</a>
        <a href="crear_empleado.php">👨‍💼 Crear Empleado</a>
    </div>
</body>
</html>