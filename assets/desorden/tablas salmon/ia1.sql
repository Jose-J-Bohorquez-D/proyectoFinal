use test2;
-- Crear tabla cliente
CREATE TABLE cliente (
  documento VARCHAR(255) PRIMARY KEY,
  nombre VARCHAR(255),
  telefono VARCHAR(255),
  direccion VARCHAR(255)
);

-- Crear tabla venta
CREATE TABLE venta (
  venta INT PRIMARY KEY,
  documento_cliente VARCHAR(255),
  valor_total DECIMAL(10, 2),
  metodo_pago VARCHAR(255),
  FOREIGN KEY (documento_cliente) REFERENCES cliente(documento)
);

-- Crear tabla producto
CREATE TABLE producto (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(255)
);

-- Crear tabla detalle_venta
CREATE TABLE detalle_venta (
  id INT PRIMARY KEY AUTO_INCREMENT,
  venta INT,
  producto_id INT,
  cantidad INT,
  FOREIGN KEY (venta) REFERENCES venta(venta),
  FOREIGN KEY (producto_id) REFERENCES producto(id)
);

-- Crear tabla factura
CREATE TABLE factura (
  FACTURA_NUMERO INT PRIMARY KEY,
  venta INT,
  FOREIGN KEY (venta) REFERENCES venta(venta)
);
