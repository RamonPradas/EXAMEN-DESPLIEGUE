CREATE DATABASE vehiculos;
USE vehiculos;
CREATE TABLE IF NOT EXISTS coches(
id INT AUTO_INCREMENT PRIMARY KEY,
marca VARCHAR(255) NOT NULL,
modelo VARCHAR(255) NOT NULL
);
INSERT INTO coches (marca, modelo)
VALUES ('Ramon', 'Pradas Martorell');

INSERT INTO coches (marca, modelo)
VALUES ('Toyota', 'Celica');

INSERT INTO coches (marca, modelo)
VALUES ('Chevrolet', 'Camaro');

INSERT INTO coches (marca, modelo)
VALUES ('Suzuki', 'Santana');