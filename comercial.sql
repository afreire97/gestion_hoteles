INSERT INTO productos(PRO_nombre, PRO_tipo, PRO_cifra, created_at, updated_at) VALUES
('PMS', 'IN', 25, now(), now()),
('Gestion cobros', 'IN', 25 , now(), now()), 
('Cerraduras', 'IN', 25, now(), now()),
('Checkin', 'IN', 200, now(), now()),
('Anual', 'DE', 10, now(), now()),
('Comision', 'CO', 20, now(), now()),
('1','HAB' ,30, now(), now()),
('2', 'HAB',21 , now(), now()),
('3','HAB' ,18, now(), now()),
('4', 'HAB',16.50, now(), now()),
('5', 'HAB',15, now(), now()),
('6','HAB' ,13.50, now(), now()),
('7','HAB' ,12, now(), now());

INSERT INTO estados_presupuestos (EST_nombre, created_at, updated_at) VALUES
('en preparacion', NOW(), NOW()),
('en curso', NOW(), NOW()),
('aceptado', NOW(), NOW()),
('cancelado', NOW(), NOW());


INSERT INTO clientes_tipos (CLI_tipo,created_at,updated_at) VALUES 
('Hotel', now(), now()),
('Motel', now(), now()),
('Apartamento', now(), now()),
('Urbanizacion', now(), now());