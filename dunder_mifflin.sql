-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla dunder_mifflin.departamento: ~3 rows (aproximadamente)
REPLACE INTO `departamento` (`IDDepartamento`, `NombreDepartamento`, `UbicacionDepartamento`, `Presupuesto`, `IDJefe`) VALUES
	(1, 'Ventas', 'Scranton', 150000.00, 1),
	(2, 'Recepción', 'Scranton', 50000.00, 2),
	(3, 'Cristina ', 'Santiago', 1000.00, 3);

-- Volcando datos para la tabla dunder_mifflin.empleado: ~6 rows (aproximadamente)
REPLACE INTO `empleado` (`IDEmpleado`, `NombreEmpleado`, `ApellidoEmpleado`, `Telefono`, `Correo`, `IDDepartamento`) VALUES
	(1, 'Michael', 'Scott', '555-1234', 'michael.scott@dundermifflin.com', 1),
	(2, 'Jim', 'Halpert', '555-2345', 'jim.halpert@dundermifflin.com', 1),
	(3, 'Dwight', 'Schrute', '555-3456', 'dwight.schrute@dundermifflin.com', 1),
	(4, 'Pam', 'Beesly', '555-4567', 'pam.beesly@dundermifflin.com', 2),
	(5, 'Ryan', 'Howard', '555-5678', 'ryan.howard@dundermifflin.com', 1),
	(6, 'Cristina ', 'Fariño', '937270189', 'krisfarip@gmail.com', 1);

-- Volcando datos para la tabla dunder_mifflin.jefe: ~4 rows (aproximadamente)
REPLACE INTO `jefe` (`IDJefe`, `NombreJefe`, `TelefonoJefe`) VALUES
	(1, 'Jan Levinson', '555-5678'),
	(2, 'Michael Scott', '555-1234'),
	(3, 'Cristina', '937270189'),
	(4, 'Cristina ', '937270189');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
