productosCREATE TABLE PRODUCTOS (
    Cod_Producto VARCHAR(5) PRIMARY KEY,
    nombre_producto VARCHAR(50),
    cantidad INT,
    valor_unitario DECIMAL(10, 2),
    valor_total DECIMAL(10, 2)
);

INSERT INTO PRODUCTOS (Cod_Producto, nombre_producto, cantidad, valor_unitario, valor_total)
VALUES
    ('P-01', 'platano maduro', 2, 1500.00, 3000.00),
    ('P-02', 'panela', 3, 2500.00, 7500.00),
    ('P-03', 'papa', 5, 3000.00, 15000.00),
    ('P-04', 'naranja verde', 7, 7000.00, 49000.00),
    ('P-05', 'coco', 2, 3000.00, 6000.00),
    ('P-06', 'cafe', 3, 15000.00, 45000.00),
    ('P-07', 'banano', 1, 5000.00, 5000.00),
    ('P-08', 'piña', 2, 6000.00, 12000.00),
    ('P-09', 'fresa', 2, 3500.00, 7000.00),
    ('P-10', 'yuca', 3, 5000.00, 15000.00),
    ('P-11', 'cebolla_larga', 4, 2500.00, 10000.00),
    ('P-12', 'cebolla_cabezona', 1, 4000.00, 4000.00),
    ('P-13', 'tomate', 2, 2500.00, 5000.00);
    
    select * from productos
;
