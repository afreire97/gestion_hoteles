INSERT INTO productos(PRO_nombre) VALUES
('PMS'),
('Gestion cobros'), 
('Cerraduras'),
('Checkin'),
('Anual'),
('Comision'),
('Habitacion1'),
('Habitacion2'),
('Habitacion3'),
('Habitacion4'),
('Habitacion5'),
('Habitacion6'),
('Habitacion7');

insert into tarifas  (TAR_producto_id,tipo,TAR_cifra,created_at,updated_at) VALUES
(1, 'IN', 25, now(), now()),
(2, 'IN', 25, now(), now()),
(3, 'IN', 25, now(), now()),
(4, 'IN', 200, now(), now()),
(5, 'DE', 10, now(), now()),
(6, 'CO', 20, now(), now()),
(7, 'PVP', 30, now(), now()),
(8, 'PVP', 21, now(), now()),
(9, 'PVP', 18, now(), now()),
(10, 'PVP', 16.50, now(), now()),
(11, 'PVP', 15, now(), now()),
(12, 'PVP', 13.50, now(), now()),
(13, 'PVP', 12, now(), now());

INSERT INTO estados_presupuestos (EST_nombre, created_at, updated_at) VALUES
('en preparacion', NOW(), NOW()),
('en curso', NOW(), NOW()),
('aceptado', NOW(), NOW()),
('cancelado', NOW(), NOW());

INSERT INTO clientes_tipos (tipo,created_at,updated_at) VALUES 
('Hotel', now(), now()),
('Motel', now(), now()),
('Apartamento', now(), now());

select * from clientes_tipos;

select * from tarifas join productos on PRO_id = TAR_producto_id;