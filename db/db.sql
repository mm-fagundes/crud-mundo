create database crud_mundo;
use crud_mundo;

-- Tabela países

create table paises(
id int not null unique auto_increment primary key,
nome varchar(90) not null,
populacao bigint not null,
continente varchar(10)
);

-- Tabela cidades

create table cidades(
id int not null unique auto_increment primary key,
nome varchar(90) not null,
populacao bigint not null,
pais int not null,
foreign key (pais) references paises(id)
);

-- Insert dos paises

INSERT INTO paises(nome, populacao, continente) VALUES
('Brasil', 215000000, 'SA'),
('Argentina', 46000000, 'SA'),
('Colômbia', 52000000, 'SA'),
('Chile', 19000000, 'SA'),
('Peru', 33000000, 'SA'),
('Estados Unidos', 334000000, 'NA'),
('Canadá', 39000000, 'NA'),
('México', 130000000, 'NA'),
('Guatemala', 19000000, 'NA'),
('Cuba', 11000000, 'NA'),
('Alemanha', 84000000, 'EU'),
('França', 67000000, 'EU'),
('Reino Unido', 67000000, 'EU'),
('Itália', 59000000, 'EU'),
('Espanha', 47000000, 'EU'),
('Japão', 125000000, 'AS'),
('China', 1412000000, 'AS'),
('Índia', 1415000000, 'AS'),
('Indonésia', 280000000, 'AS'),
('Paquistão', 240000000, 'AS'),
('África do Sul', 60000000, 'AF'),
('Nigéria', 220000000, 'AF'),
('Egito', 110000000, 'AF'),
('Quênia', 57000000, 'AF'),
('Argélia', 45000000, 'AF'),
('Austrália', 26000000, 'OC'),
('Nova Zelândia', 5000000, 'OC'),
('Papua-Nova Guiné', 9000000, 'OC'),
('Fiji', 900000, 'OC'),
('Samoa', 200000, 'OC');

-- Insert das cidades

INSERT INTO cidades(nome, populacao, pais) VALUES

-- América do Sul (SA)
('São Paulo', 12300000, 1),
('Rio de Janeiro', 6700000, 1),
('Belo Horizonte', 2500000, 1),
('Curitiba', 1900000, 1),
('Salvador', 2900000, 1),

('Buenos Aires', 3050000, 2),
('Córdoba', 1400000, 2),
('Rosário', 1200000, 2),
('Mendoza', 1150000, 2),
('La Plata', 800000, 2),

('Bogotá', 7800000, 3),
('Medellín', 2600000, 3),
('Cali', 2400000, 3),
('Barranquilla', 1300000, 3),
('Cartagena', 1000000, 3),

('Santiago', 5800000, 4),
('Valparaíso', 300000, 4),
('Concepción', 220000, 4),
('La Serena', 200000, 4),
('Antofagasta', 210000, 4),

('Lima', 9500000, 5),
('Arequipa', 1000000, 5),
('Trujillo', 800000, 5),
('Chiclayo', 600000, 5),
('Iquitos', 430000, 5),

-- América do Norte (NA)
('Nova York', 8400000, 6),
('Los Angeles', 3900000, 6),
('Chicago', 2700000, 6),
('Houston', 2300000, 6),
('Phoenix', 1700000, 6),

('Toronto', 2900000, 7),
('Montreal', 1700000, 7),
('Vancouver', 675000, 7),
('Calgary', 1230000, 7),
('Edmonton', 1100000, 7),

('Cidade do México', 9200000, 8),
('Guadalajara', 1500000, 8),
('Monterrey', 1300000, 8),
('Puebla', 1500000, 8),
('Tijuana', 1300000, 8),

('Cidade da Guatemala', 1000000, 9),
('Mixco', 500000, 9),
('Villa Nueva', 350000, 9),
('Quetzaltenango', 180000, 9),
('Escuintla', 150000, 9),

('Havana', 2100000, 10),
('Santiago de Cuba', 430000, 10),
('Camagüey', 300000, 10),
('Holguín', 270000, 10),
('Santa Clara', 240000, 10),

-- Europa (EU)
('Berlim', 3700000, 11),
('Munique', 1500000, 11),
('Hamburgo', 1900000, 11),
('Colônia', 1100000, 11),
('Frankfurt', 750000, 11),

('Paris', 2150000, 12),
('Marselha', 870000, 12),
('Lyon', 515000, 12),
('Toulouse', 490000, 12),
('Nice', 340000, 12),

('Londres', 9000000, 13),
('Birmingham', 1100000, 13),
('Glasgow', 600000, 13),
('Liverpool', 500000, 13),
('Manchester', 550000, 13),

('Roma', 2870000, 14),
('Milão', 1370000, 14),
('Nápoles', 960000, 14),
('Turim', 870000, 14),
('Palermo', 670000, 14),

('Madrid', 3300000, 15),
('Barcelona', 1600000, 15),
('Valência', 800000, 15),
('Sevilha', 690000, 15),
('Zaragoza', 675000, 15),

-- Ásia (AS)
('Tóquio', 14000000, 16),
('Osaka', 2800000, 16),
('Quioto', 1500000, 16),
('Hiroshima', 1200000, 16),
('Sapporo', 1900000, 16),

('Pequim', 21500000, 17),
('Xangai', 25000000, 17),
('Guangzhou', 15000000, 17),
('Shenzhen', 13000000, 17),
('Chengdu', 16000000, 17),

('Mumbai', 12400000, 18),
('Delhi', 19000000, 18),
('Bangalore', 8300000, 18),
('Hyderabad', 6800000, 18),
('Ahmedabad', 5600000, 18),

('Jacarta', 10000000, 19),
('Surabaya', 2800000, 19),
('Bandung', 2500000, 19),
('Medan', 2100000, 19),
('Bekasi', 2100000, 19),

('Karachi', 15000000, 20),
('Lahore', 11000000, 20),
('Faisalabad', 3200000, 20),
('Rawalpindi', 2300000, 20),
('Multan', 1800000, 20),

-- África (AF)
('Joanesburgo', 5500000, 21),
('Cidade do Cabo', 4600000, 21),
('Durban', 3700000, 21),
('Pretória', 2500000, 21),
('Port Elizabeth', 1300000, 21),

('Lagos', 14000000, 22),
('Abuja', 3000000, 22),
('Kano', 3500000, 22),
('Ibadan', 3000000, 22),
('Port Harcourt', 1500000, 22),

('Cairo', 10200000, 23),
('Alexandria', 5200000, 23),
('Giza', 8700000, 23),
('Shubra El-Kheima', 11000000, 23),
('Port Said', 600000, 23),

('Nairóbi', 4500000, 24),
('Mombasa', 1200000, 24),
('Kisumu', 400000, 24),
('Nakuru', 350000, 24),
('Eldoret', 250000, 24),

('Argel', 3400000, 25),
('Orã', 1200000, 25),
('Constantina', 450000, 25),
('Annaba', 350000, 25),
('Blida', 330000, 25),

-- Oceania (OC)
('Sydney', 5300000, 26),
('Melbourne', 5100000, 26),
('Brisbane', 2500000, 26),
('Perth', 2000000, 26),
('Adelaide', 1300000, 26),

('Auckland', 1650000, 27),
('Wellington', 210000, 27),
('Christchurch', 380000, 27),
('Hamilton', 160000, 27),
('Tauranga', 140000, 27),

('Port Moresby', 400000, 28),
('Lae', 100000, 28),
('Mount Hagen', 40000, 28),
('Madang', 30000, 28),
('Goroka', 20000, 28),

('Suva', 90000, 29),
('Lautoka', 70000, 29),
('Nadi', 42000, 29),
('Labasa', 28000, 29),
('Ba', 21000, 29),

('Apia', 37000, 30),
('Vaitele', 30000, 30),
('Faleasiu', 16000, 30),
('Lepa', 14000, 30),
('Leulumoega', 12000, 30);




