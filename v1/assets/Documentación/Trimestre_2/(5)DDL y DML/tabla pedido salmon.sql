CREATE TABLE PEDIDO (
    CLIENTE_tipo_documento VARCHAR(2),
    CLIENTE_numero_documento VARCHAR(20),
    PRODUCTO_ID VARCHAR(5),
    PRIMARY KEY (CLIENTE_tipo_documento, CLIENTE_numero_documento, PRODUCTO_ID),
    FOREIGN KEY (PRODUCTO_ID) REFERENCES PRODUCTOS (Cod_Producto)
);

INSERT INTO PEDIDO (CLIENTE_tipo_documento, CLIENTE_numero_documento, PRODUCTO_ID)
VALUES
    ('cc', '1019502918', 'P-01'),
    ('cc', '1019502918', 'P-02'),
    ('cc', '1019502918', 'P-03'),
    ('ti', '6549841', 'P-04'),
    ('ti', '6549841', 'P-05'),
    ('ce', '3548796210', 'P-06'),
    ('ce', '3548796210', 'P-03'),
    ('cc', '6549651', 'P-02'),
    ('cc', '6549651', 'P-07'),
    ('ce', '32450', 'P-08'),
    ('ce', '32450', 'P-09'),
    ('ce', '2460135', 'P-10'),
    ('ce', '2460135', 'P-03'),
    ('ce', '2460135', 'P-11'),
    ('cc', '545112', 'P-09');
    
    
    select * from pedido;
