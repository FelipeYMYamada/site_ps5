CREATE DATABASE ps5_site;

CREATE TABLE user(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(150) NOT NULL,
	cpf varchar(12) DEFAULT NULL,
	email varchar(120) NOT NULL,
	phone_number varchar(14) DEFAULT NULL,
	pssw varchar(120) NOT NULL
);

CREATE TABLE games(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(150) NOT NULL,
	img_url varchar(120) DEFAULT NULL,
	price decimal(18,2) NOT NULL,
	description varchar(200) DEFAULT NULL,
	release_date date NOT NULL
);

CREATE TABLE products(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(150) NOT NULL,
	img_url varchar(120) DEFAULT NULL,
	price decimal(18,2) NOT NULL,
	description varchar(200) DEFAULT NULL
);

INSERT INTO games(name, img_url, price, description) 
VALUES ('FIFA', 'http://localhost/site_ps5/img/fifa.jpg', 200, 'jogo de futebol', '2023-01-01'),
('God of war', 'http://localhost/site_ps5/img/god.jpg', 200, 'God of War Ragnarök é um jogo eletrônico de ação-aventura', '2023-01-01'),
('Final Fantasy XVI', 'http://localhost/site_ps5/img/final.jpg', 300, 'Final Fantasy XVI é um jogo eletrônico de RPG de ação desenvolvido e publicado pela Square Enix', '2023-01-01'),
('Hogwarts Legacy', 'http://localhost/site_ps5/img/hogwarts.jpg', 300, 'Hogwarts Legacy é um jogo eletrônico de RPG de ação', '2023-01-01');

CREATE TABLE category(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(100) NOT NULL
);

INSERT INTO category (name) VALUES('Aventura'),('Ação'),('Esportes'),('RPG'),('TERROR');

CREATE TABLE games_category(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	game_id INT NOT NULL,
	category_id INT NOT NULL,
	FOREIGN KEY (game_id) REFERENCES games(id),
	FOREIGN KEY (category_id) REFERENCES category(id)
);

INSERT INTO games_category(game_id, category_id) VALUES(1,3),(2,2),(3,4),(4,1),(2,1),(3,1);

CREATE TABLE user_card (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cd_name varchar(120) NOT NULL,
    cd_number varchar(50) NOT NULL,
    cd_exp varchar(300) NOT NULL,
    cd_cvc varchar(3) NOT NULL,
    updated_date datetime NOT NULL,
    save_info tinyint(1) DEFAULT FALSE,
    user_id int NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE hist_checkout(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    game_id int DEFAULT NULL,
    price decimal(18,2) NOT NULL,
    user_card_id int NOT NULL,
    updated_date datetime NOT NULL,
	user_id int NOT NULL,
    FOREIGN KEY(game_id) REFERENCES games(id),
    FOREIGN KEY(user_card_id) REFERENCES user_card(id),
    FOREIGN KEY(user_id) REFERENCES user(id)
);