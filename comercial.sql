INSERT INTO productos(PRO_nombre, PRO_tipo, PRO_cifra, created_at, updated_at) VALUES
('PMS', 'IN', 25, now(), now()),
('Gestion cobros', 'IN', 25 , now(), now()), 
('Cerraduras', 'IN', 25, now(), now()),
('Checkin', 'IN', 200, now(), now()),
('Anual', 'DE', 10, now(), now()),
('Comision', 'CO', 20, now(), now()),
('Habitacion1','IN' ,30, now(), now()),
('Habitacion2', 'IN',21 , now(), now()),
('Habitacion3','IN' ,18, now(), now()),
('Habitacion4', 'IN',16.50, now(), now()),
('Habitacion5', 'IN',15, now(), now()),
('Habitacion6','IN' ,13.50, now(), now()),
('Habitacion7','IN' ,12, now(), now());



INSERT INTO clientes_tipos (tipo,created_at,updated_at) VALUES 
('Hotel', now(), now()),
('Motel', now(), now()),
('Apartamento', now(), now());
