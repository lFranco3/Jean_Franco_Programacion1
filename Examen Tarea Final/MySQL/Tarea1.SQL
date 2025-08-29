CREATE TABLE Usuarios (
	name VARCHAR(100),
  	email VARCHAR(100),
  	pedidos VARCHAR(100),
	monto int,
    fecha int
);

INSERT INTO Usuarios (name, email, pedidos, monto, fecha) 
VALUES
('Juan', 'juan.perez@email.com', '2', 540,24),
('Ana', 'ana.garcia@email.com', '5', 1200,30),
('Carlos', 'carlos.r@email.com', '3', 720,16),
('Maria', 'maria.lopez@email.com', '11', 10,5),
('Luis', 'luis.martinez@email.com', '52', 990,10);

INSERT INTO Usuarios (name)
VALUES
('Jose')

UPDATE Usuarios 
SET email = 'Jose@gmail.com'
WHERE name = 'Jose'

SELECT * FROM Usuarios ORDER BY monto DESC;