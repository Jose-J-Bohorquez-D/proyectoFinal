CREATE TABLE UNIDAD_DE_MEDIDA (
    codigo_unidad_de_medida VARCHAR(6) PRIMARY KEY,
    unidad_de_medida VARCHAR(50)
);
INSERT INTO UNIDAD_DE_MEDIDA (codigo_unidad_de_medida, unidad_de_medida) VALUES
    ('um_01', 'unidad'),
    ('um_02', 'libra'),
    ('um_03', 'kilo');
