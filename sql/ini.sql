DROP TABLE pokedexes_types;
DROP TABLE pokemons;
DROP TABLE types;
DROP TABLE pokedexs;
DROP TABLE joueurs;

CREATE TABLE joueurs(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	identifiant VARCHAR(50) NOT NULL UNIQUE,
	mdp VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE,
	pseudonyme VARCHAR(30),
	sexe CHAR(1),
	niveau SMALLINT DEFAULT 0 NOT NULL,
	pokemon_count INT UNSIGNED DEFAULT 0);

CREATE TABLE pokedexes (
	id          INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	espece      VARCHAR(30),
	description VARCHAR(30));

CREATE TABLE pokemons(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nom VARCHAR(30),
	joueur_id INT NOT NULL,
	pokedex_id INT NOT NULL,
	niveau INT,
	pv INT,
	FOREIGN KEY(joueur_id) REFERENCES joueurs(id),
	FOREIGN KEY(pokedex_id) REFERENCES pokedexes(id));

CREATE TABLE types(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	nom VARCHAR(30));


CREATE TABLE  pokedexes_types(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	pokedex_id INT NOT NULL ,
	type_id INT NOT NULL ,
	FOREIGN KEY(pokedex_id) REFERENCES pokedexes(id),
	FOREIGN KEY(type_id) REFERENCES types(id));



INSERT INTO joueurs(identifiant,mdp,email,pseudonyme,sexe,niveau,joueurs.pokemon_count)
	VALUES ('florian','guibs199','florian.guilbert@recommerce.com','Floflow','M',1,2);



INSERT INTO types (nom)
	VALUES ('eau');

INSERT INTO types (nom)
VALUES ('feu');

INSERT INTO types (nom)
VALUES ('plante');

INSERT INTO types (nom)
VALUES ('normal');

INSERT INTO types (nom)
VALUES ('vol');

INSERT INTO types (nom)
VALUES ('electrique');

INSERT INTO types (nom)
VALUES ('roche');

INSERT INTO types (nom)
VALUES ('tenebre');

INSERT INTO types (nom)
VALUES ('insecte');

INSERT INTO types (nom)
VALUES ('glace');

INSERT INTO types (nom)
VALUES ('dragon');






INSERT INTO pokedexes (espece, description)
	VALUES ('Bulbizarre','');

INSERT INTO pokedexes (espece, description)
  VALUES ('Herbizarre','');

INSERT INTO pokedexes (espece, description)
	VALUES ('Florizarre','');

INSERT INTO pokedexes (espece, description)
VALUES ('Salamèche','');

INSERT INTO pokedexes (espece, description)
VALUES ('Reptincel','');

INSERT INTO pokedexes (espece, description)
VALUES ('Dracaufeu','');

INSERT INTO pokedexes (espece, description)
VALUES ('Carapuce','');

INSERT INTO pokedexes (espece, description)
VALUES ('Carabaffe','');

INSERT INTO pokedexes (espece, description)
VALUES ('Tortank','');








INSERT INTO pokedexes_types (pokedex_id, type_id)
	VALUES (1,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (2,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (3,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (4,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (5,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (6,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (7,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (8,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (9,1);







INSERT INTO pokemons (id, joueur_id, pokedex_id, niveau, pv,nom)
VALUES (1,1,1,10,35,'uno');

INSERT INTO pokemons (id, joueur_id, pokedex_id, niveau, pv,nom)
VALUES (2,1,4,15,54,'dos');