DROP TABLE pokedexes_types;
DROP TABLE pokemons;
DROP TABLE pokedexes;
DROP TABLE joueurs;
DROP TABLE types;

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

INSERT INTO pokedexes (espece, description)
VALUES ('Chenipan','');

INSERT INTO pokedexes (espece, description)
VALUES ('Chrysacier','');

INSERT INTO pokedexes (espece, description)
VALUES ('Papilusion','');

INSERT INTO pokedexes (espece, description)
VALUES ('Aspicot','');

INSERT INTO pokedexes (espece, description)
VALUES ('Coconfort','');

INSERT INTO pokedexes (espece, description)
VALUES ('Dardagan','');

INSERT INTO pokedexes (espece, description)
VALUES ('Roucoul','');

INSERT INTO pokedexes (espece, description)
VALUES ('Roucoups','');

INSERT INTO pokedexes (espece, description)
VALUES ('Roucarnage','');

INSERT INTO pokedexes (espece, description)
VALUES ('Rattata','');

INSERT INTO pokedexes (espece, description)
VALUES ('Rattatac','');

INSERT INTO pokedexes (espece, description)
VALUES ('Piafabec','');

INSERT INTO pokedexes (espece, description)
VALUES ('Rapasdepic','');

INSERT INTO pokedexes (espece, description)
VALUES ('Abo','');

INSERT INTO pokedexes (espece, description)
VALUES ('Arbok','');

INSERT INTO pokedexes (espece, description)
VALUES ('Pikachu','');

INSERT INTO pokedexes (espece, description)
VALUES ('Raichu','');

INSERT INTO pokedexes (espece, description)
VALUES ('Sabelette','');

INSERT INTO pokedexes (espece, description)
VALUES ('Sablaireau','');

INSERT INTO pokedexes (espece, description)
VALUES ('Nidoran F.','');

INSERT INTO pokedexes (espece, description)
VALUES ('Nidorina','');

INSERT INTO pokedexes (espece, description)
VALUES ('Nidoqueen','');

INSERT INTO pokedexes (espece, description)
VALUES ('Nidoran M.','');

INSERT INTO pokedexes (espece, description)
VALUES ('Nidorino','');

INSERT INTO pokedexes (espece, description)
VALUES ('NidoKing','');

INSERT INTO pokedexes (espece, description)
VALUES ('Mélofée','');

INSERT INTO pokedexes (espece, description)
VALUES ('Mélodelfe','');

INSERT INTO pokedexes (espece, description)
VALUES ('Goupix','');

INSERT INTO pokedexes (espece, description)
VALUES ('Feunard','');

INSERT INTO pokedexes (espece, description)
VALUES ('Rondoudou','');

INSERT INTO pokedexes (espece, description)
VALUES ('Grodoudou','');

INSERT INTO pokedexes (espece, description)
VALUES ('Nosferapti','');

INSERT INTO pokedexes (espece, description)
VALUES ('Nosferalto','');

INSERT INTO pokedexes (espece, description)
VALUES ('Mystherbe','');

INSERT INTO pokedexes (espece, description)
VALUES ('Ortide','');

INSERT INTO pokedexes (espece, description)
VALUES ('Rafflesia','');

INSERT INTO pokedexes (espece, description)
VALUES ('Paras','');

INSERT INTO pokedexes (espece, description)
VALUES ('Parasect','');

INSERT INTO pokedexes (espece, description)
VALUES ('Mimitoss','');

INSERT INTO pokedexes (espece, description)
VALUES ('Aéromite','');

INSERT INTO pokedexes (espece, description)
VALUES ('Taupiqueur','');

INSERT INTO pokedexes (espece, description)
VALUES ('Triopikeur','');

INSERT INTO pokedexes (espece, description)
VALUES ('Miaouss','');

INSERT INTO pokedexes (espece, description)
VALUES ('Persian','');

INSERT INTO pokedexes (espece, description)
VALUES ('Psykokwak','');

INSERT INTO pokedexes (espece, description)
VALUES ('Akwakwak','');

INSERT INTO pokedexes (espece, description)
VALUES ('Férosinge','');

INSERT INTO pokedexes (espece, description)
VALUES ('Colossinge','');

INSERT INTO pokedexes (espece, description)
VALUES ('Caninos','');

INSERT INTO pokedexes (espece, description)
VALUES ('Aracanin','');

INSERT INTO pokedexes (espece, description)
VALUES ('Ptitard','');

INSERT INTO pokedexes (espece, description)
VALUES ('Têtarte','');

INSERT INTO pokedexes (espece, description)
VALUES ('Tartard','');

INSERT INTO pokedexes (espece, description)
VALUES ('Abra','');

INSERT INTO pokedexes (espece, description)
VALUES ('Kadabra','');

INSERT INTO pokedexes (espece, description)
VALUES ('Alakazam','');

INSERT INTO pokedexes (espece, description)
VALUES ('Machoc','');

INSERT INTO pokedexes (espece, description)
VALUES ('Machoppeur','');

INSERT INTO pokedexes (espece, description)
VALUES ('Mackogneur','');

INSERT INTO pokedexes (espece, description)
VALUES ('Chétiflor','');

INSERT INTO pokedexes (espece, description)
VALUES ('Boustiflor','');

INSERT INTO pokedexes (espece, description)
VALUES ('Empiflor','');

INSERT INTO pokedexes (espece, description)
VALUES ('Tentacool','');

INSERT INTO pokedexes (espece, description)
VALUES ('Tentacruel','');

INSERT INTO pokedexes (espece, description)
VALUES ('Racaillou','');

INSERT INTO pokedexes (espece, description)
VALUES ('Gravalanch','');

INSERT INTO pokedexes (espece, description)
VALUES ('Grolem','');

INSERT INTO pokedexes (espece, description)
VALUES ('Ponyta','');

INSERT INTO pokedexes (espece, description)
VALUES ('Galopa','');

INSERT INTO pokedexes (espece, description)
VALUES ('Ramoloss','');

INSERT INTO pokedexes (espece, description)
VALUES ('Flagadoss','');

INSERT INTO pokedexes (espece, description)
VALUES ('Magnéti','');

INSERT INTO pokedexes (espece, description)
VALUES ('Magnéton','');

INSERT INTO pokedexes (espece, description)
VALUES ('Canarticho','');

INSERT INTO pokedexes (espece, description)
VALUES ('Doduo','');

INSERT INTO pokedexes (espece, description)
VALUES ('Dodrio','');

INSERT INTO pokedexes (espece, description)
VALUES ('Otaria','');

INSERT INTO pokedexes (espece, description)
VALUES ('Lamantine','');

INSERT INTO pokedexes (espece, description)
VALUES ('Tadmorv','');

INSERT INTO pokedexes (espece, description)
VALUES ('Grotadmorv','');

INSERT INTO pokedexes (espece, description)
VALUES ('Kokyias','');

INSERT INTO pokedexes (espece, description)
VALUES ('Crustabri','');

INSERT INTO pokedexes (espece, description)
VALUES ('Fantominus','');

INSERT INTO pokedexes (espece, description)
VALUES ('Spectrum','');

INSERT INTO pokedexes (espece, description)
VALUES ('Ectoplasma','');

INSERT INTO pokedexes (espece, description)
VALUES ('Onix','');

INSERT INTO pokedexes (espece, description)
VALUES ('Soporifik','');

INSERT INTO pokedexes (espece, description)
VALUES ('Hypnomade','');

INSERT INTO pokedexes (espece, description)
VALUES ('Krabby','');

INSERT INTO pokedexes (espece, description)
VALUES ('Krabboss','');

INSERT INTO pokedexes (espece, description)
VALUES ('Voltorbe','');

INSERT INTO pokedexes (espece, description)
VALUES ('Electrode','');

INSERT INTO pokedexes (espece, description)
VALUES ('Noeunoeuf','');

INSERT INTO pokedexes (espece, description)
VALUES ('Noadkoko','');

INSERT INTO pokedexes (espece, description)
VALUES ('Osselait','');

INSERT INTO pokedexes (espece, description)
VALUES ('Ossatueur','');

INSERT INTO pokedexes (espece, description)
VALUES ('Kicklee','');

INSERT INTO pokedexes (espece, description)
VALUES ('Tygnon','');

INSERT INTO pokedexes (espece, description)
VALUES ('Excelangue','');

INSERT INTO pokedexes (espece, description)
VALUES ('Smogo','');

INSERT INTO pokedexes (espece, description)
VALUES ('Smogogo','');

INSERT INTO pokedexes (espece, description)
VALUES ('Rhinocorne','');

INSERT INTO pokedexes (espece, description)
VALUES ('Rhinoféros','');

INSERT INTO pokedexes (espece, description)
VALUES ('Leveinard','');

INSERT INTO pokedexes (espece, description)
VALUES ('Saquedeneu','');

INSERT INTO pokedexes (espece, description)
VALUES ('Kangourex','');

INSERT INTO pokedexes (espece, description)
VALUES ('Hypotrempe','');

INSERT INTO pokedexes (espece, description)
VALUES ('Hypocéan','');

INSERT INTO pokedexes (espece, description)
VALUES ('Poissirène','');

INSERT INTO pokedexes (espece, description)
VALUES ('Poissoroy','');

INSERT INTO pokedexes (espece, description)
VALUES ('Stari','');

INSERT INTO pokedexes (espece, description)
VALUES ('Staross','');

INSERT INTO pokedexes (espece, description)
VALUES ('M. Mime','');

INSERT INTO pokedexes (espece, description)
VALUES ('Insécateur','');

INSERT INTO pokedexes (espece, description)
VALUES ('Lippoutou','');

INSERT INTO pokedexes (espece, description)
VALUES ('Elektek','');

INSERT INTO pokedexes (espece, description)
VALUES ('Magmar','');

INSERT INTO pokedexes (espece, description)
VALUES ('Scarabrute','');

INSERT INTO pokedexes (espece, description)
VALUES ('Tauros','');

INSERT INTO pokedexes (espece, description)
VALUES ('Magicarpe','');

INSERT INTO pokedexes (espece, description)
VALUES ('Léviator','');

INSERT INTO pokedexes (espece, description)
VALUES ('Lokhlass','');

INSERT INTO pokedexes (espece, description)
VALUES ('Métamorph','');

INSERT INTO pokedexes (espece, description)
VALUES ('Evoli','');

INSERT INTO pokedexes (espece, description)
VALUES ('Aquali','');

INSERT INTO pokedexes (espece, description)
VALUES ('Voltali','');

INSERT INTO pokedexes (espece, description)
VALUES ('Pyroli','');

INSERT INTO pokedexes (espece, description)
VALUES ('Prygnon','');

INSERT INTO pokedexes (espece, description)
VALUES ('Amonita','');

INSERT INTO pokedexes (espece, description)
VALUES ('Amonistar','');

INSERT INTO pokedexes (espece, description)
VALUES ('Kabuto','');

INSERT INTO pokedexes (espece, description)
VALUES ('Kabutops','');

INSERT INTO pokedexes (espece, description)
VALUES ('Ptéra','');

INSERT INTO pokedexes (espece, description)
VALUES ('Ronflex','');

INSERT INTO pokedexes (espece, description)
VALUES ('Artikodin','');

INSERT INTO pokedexes (espece, description)
VALUES ('Electhor','');

INSERT INTO pokedexes (espece, description)
VALUES ('Sulfura','');

INSERT INTO pokedexes (espece, description)
VALUES ('Minidraco','');

INSERT INTO pokedexes (espece, description)
VALUES ('Draco','');

INSERT INTO pokedexes (espece, description)
VALUES ('Dracolosse','');

INSERT INTO pokedexes (espece, description)
VALUES ('Mewtwo','');

INSERT INTO pokedexes (espece, description)
VALUES ('Mew','');












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
VALUES ('Combat');

INSERT INTO types (nom)
VALUES ('insecte');

INSERT INTO types (nom)
VALUES ('glace');

INSERT INTO types (nom)
VALUES ('dragon');

INSERT INTO types (nom)
VALUES ('poison');

INSERT INTO types (nom)
VALUES ('psy');

INSERT INTO types (nom)
VALUES ('sol');

INSERT INTO types (nom)
VALUES ('spectre');

INSERT INTO types (nom)
VALUES ('fée');

INSERT INTO types (nom)
VALUES ('acier');










INSERT INTO pokedexes_types (pokedex_id, type_id)
	VALUES (1,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (2,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (3,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (1,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (2,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (3,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (4,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (5,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (6,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (6,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (7,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (8,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (9,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (10,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (11,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (12,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (12,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (13,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (13,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (14,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (14,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (15,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (15,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (16,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (16,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (17,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (17,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (18,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (18,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (19,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (20,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (21,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (21,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (22,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (22,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (23,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (24,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (25,6);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (26,6);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (27,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (28,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (29,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (30,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (31,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (31,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (32,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (33,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (34,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (34,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (35,16);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (36,16);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (37,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (38,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (39,16);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (39,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (40,16);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (40,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (41,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (41,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (42,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (42,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (43,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (43,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (44,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (44,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (45,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (45,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (46,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (46,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (47,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (47,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (48,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (48,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (49,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (49,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (50,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (51,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (52,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (53,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (54,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (55,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (56,8);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (57,8);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (58,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (59,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (60,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (61,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (62,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (62,8);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (63,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (64,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (65,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (66,8);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (67,8);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (68,8);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (69,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (69,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (70,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (70,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (71,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (71,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (72,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (72,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (73,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (73,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (74,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (74,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (75,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (75,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (76,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (76,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (77,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (78,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (79,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (79,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (80,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (80,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (81,6);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (81,17);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (82,6);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (82,17);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (83,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (83,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (84,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (84,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (85,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (85,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (86,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (87,1);


INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (87,10);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (88,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (89,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (90,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (91,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (81,10);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (92,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (92,15);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (93,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (93,15);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (94,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (94,15);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (95,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (95,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (96,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (97,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (98,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (99,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (100,6);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (101,6);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (102,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (102,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (103,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (103,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (104,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (105,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (106,8);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (107,8);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (108,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (109,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (110,12);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (111,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (111,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (112,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (112,14);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (113,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (114,3);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (115,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (116,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (117,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (118,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (119,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (120,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (121,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (121,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (122,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (122,16);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (123,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (123,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (124,10);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (124,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (125,6);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (126,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (127,9);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (128,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (129,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (130,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (130,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (131,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (131,10);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (132,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (133,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (134,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (135,6);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (136,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (137,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (138,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (138,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (139,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (139,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (140,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (140,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (141,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (141,1);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (142,7);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (142,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (143,4);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (144,10);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (144,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (145,6);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (145,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (146,2);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (146,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (147,11);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (148,11);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (149,11);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (149,5);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (150,13);

INSERT INTO pokedexes_types (pokedex_id, type_id)
VALUES (151,13);








INSERT INTO pokemons (id, joueur_id, pokedex_id, niveau, pv,nom)
VALUES (1,1,1,10,35,'uno');

INSERT INTO pokemons (id, joueur_id, pokedex_id, niveau, pv,nom)
VALUES (2,1,4,15,54,'dos');