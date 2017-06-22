DROP TABLE pokemons;
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

CREATE TABLE pokemons(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	joueur_id INT NOT NULL,
	nom VARCHAR(30),
	niveau INT,
	pv INT, 
	FOREIGN KEY(joueur_id) REFERENCES joueurs(id));


INSERT INTO joueurs(identifiant,mdp,email,pseudonyme,sexe,niveau,joueurs.pokemon_count)
	VALUES ('florian','guibs199','florian.guilbert@recommerce.com','Floflow','M',1,2);

INSERT INTO pokemons (nom,niveau,pv,pokemons.joueur_id)
	VALUES ('pikachu',15,100,1);

INSERT INTO pokemons (nom,niveau,pv,pokemons.joueur_id)
	VALUES ('feurisson',23,156,1);
