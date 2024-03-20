CREATE TABLE cliente (
    tipo_documento VARCHAR(2),
    numero_documento VARCHAR(20),
    nombre_cliente VARCHAR(50),
    apellido_cliente VARCHAR(50),
    telefono VARCHAR(15),
    direccion VARCHAR(100),
    ciudad VARCHAR(50)
);

INSERT INTO cliente (tipo_documento, numero_documento, nombre_cliente, apellido_cliente, telefono, direccion, ciudad) VALUES
    ('cc', '1019502918', 'luis', 'rodriguez', '3214657898', 'carrera 86 # 26-41', 'bogota'),
    ('ti', '6549841', 'cesar', 'leguizamo', '3152457895', 'calle 12 # 15-24', 'cali'),
    ('ce', '3548796210', 'ivan', 'leon', '3205748124', 'carrera 25 # 12-62', 'medellin'),
    ('cc', '6549651', 'joaquin', 'gomez', '3112587496', 'transv 47 # 85-46', 'pereira'),
    ('ce', '32450', 'carolina', 'bustamente', '3193282888', 'carrera 34 # 70 a 42', 'villavicencio'),
    ('ce', '2460135', 'estella', 'rodriguez', '3205624781', 'calle 57 sur # 56-95', 'cucuta'),
    ('cc', '545112', 'adelaida', 'caro', '3156258741', 'calle 65 # 89-40', 'cauca'),
    ('ce', '549651', 'pedro', 'fantini', '3125478945', 'transv 65 # 32 c 41 sur', 'caqueta'),
    ('ti', '26540685210', 'ana', 'rodriguez', '3202415898', 'calle 47 # 103 - 77', 'neiva');
