CREATE DATABASE ps5_site;

CREATE TABLE user(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(150) NOT NULL,
	cpf varchar(12) DEFAULT NULL,
	email varchar(120) NOT NULL,
	phone_number varchar(14) DEFAULT NULL,
	pssw varchar(120) NOT NULL
);

CREATE TABLE products(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(150) NOT NULL,
	img_url varchar(120) DEFAULT NULL,
	price decimal(18,2) NOT NULL,
	description varchar(200) DEFAULT NULL
);

INSERT INTO products(name, img_url, price, description) 
VALUES ('FIFA', 'http://localhost/site_ps5/img/fifa.jpg', 200, 'jogo de futebol'),
('God of war', 'http://localhost/site_ps5/img/god.jpg', 200, 'God of War Ragnarök é um jogo eletrônico de ação-aventura'),
('Final Fantasy XVI', 'http://localhost/site_ps5/img/final.jpg', 300, 'Final Fantasy XVI é um jogo eletrônico de RPG de ação desenvolvido e publicado pela Square Enix'),
('Hogwarts Legacy', 'http://localhost/site_ps5/img/hogwarts.jpg', 300, 'Hogwarts Legacy é um jogo eletrônico de RPG de ação');