pedidoCREATE TABLE MEDIO_DE_PAGO (
    Cod_met_pago VARCHAR(5) PRIMARY KEY,
    metodo_de_pago VARCHAR(50)
);
INSERT INTO MEDIO_DE_PAGO (Cod_met_pago, metodo_de_pago) VALUES
    ('M.P_1', 'efectivo'),
    ('M.P_2', 'tarjeta debito'),
    ('M.P_3', 'transferencia'),
    ('M.P_4', 'tarjeta credito');
