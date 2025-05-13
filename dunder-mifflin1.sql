-- Tabla Jefe
CREATE TABLE Jefe (
  IDJefe INT AUTO_INCREMENT PRIMARY KEY,
  NombreJefe VARCHAR(100) NOT NULL,
  TelefonoJefe VARCHAR(20)
);

-- Tabla Departamento
CREATE TABLE Departamento (
  IDDepartamento INT AUTO_INCREMENT PRIMARY KEY,
  NombreDepartamento VARCHAR(100) NOT NULL,
  UbicacionDepartamento VARCHAR(100),
  Presupuesto DECIMAL(12,2),
  IDJefe INT,
  FOREIGN KEY (IDJefe) REFERENCES Jefe(IDJefe)
);

-- Tabla Empleado
CREATE TABLE Empleado (
  IDEmpleado INT AUTO_INCREMENT PRIMARY KEY,
  NombreEmpleado VARCHAR(100) NOT NULL,
  ApellidoEmpleado VARCHAR(100) NOT NULL,
  Telefono VARCHAR(20),
  Correo VARCHAR(100),
  IDDepartamento INT,
  FOREIGN KEY (IDDepartamento) REFERENCES Departamento(IDDepartamento)
);

-- Datos de ejemplo
INSERT INTO Jefe (NombreJefe, TelefonoJefe)
VALUES ('Jan Levinson', '555-5678'),
       ('Michael Scott', '555-1234');

INSERT INTO Departamento (NombreDepartamento, UbicacionDepartamento, Presupuesto, IDJefe)
VALUES ('Ventas', 'Scranton', 150000.00, 1),
       ('Recepción', 'Scranton', 50000.00, 2);

INSERT INTO Empleado (NombreEmpleado, ApellidoEmpleado, Telefono, Correo, IDDepartamento)
VALUES 
('Michael', 'Scott', '555-1234', 'michael.scott@dundermifflin.com', 1),
('Jim', 'Halpert', '555-2345', 'jim.halpert@dundermifflin.com', 1),
('Dwight', 'Schrute', '555-3456', 'dwight.schrute@dundermifflin.com', 1),
('Pam', 'Beesly', '555-4567', 'pam.beesly@dundermifflin.com', 2),
('Ryan', 'Howard', '555-5678', 'ryan.howard@dundermifflin.com', 1);
