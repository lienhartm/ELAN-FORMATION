CREATE IF NOT EXISTS CINEMA;

CREATE TABLE IF NOT EXISTS ACTEUR(
   id_acteur INT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   sexe VARCHAR(50) NOT NULL,
   naissance DATE NOT NULL,
   PRIMARY KEY(id_acteur)
);

CREATE TABLE IF NOT EXISTS GENRE(
   id_genre INT,
   libelle VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_genre)
);

CREATE TABLE IF NOT EXISTS REALISATEUR(
   id_realisateur INT,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   sexe VARCHAR(50) NOT NULL,
   naissance DATE NOT NULL,
   PRIMARY KEY(id_realisateur)
);

CREATE TABLE IF NOT EXISTS FILM(
   id_film INT,
   id_genre INT,
   id_realisateur INT,
   nom VARCHAR(50) NOT NULL,
   date_de_sortie DATE NOT NULL,
   duree TIME NOT NULL,
   resumer VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_film, id_genre, id_realisateur)
);

CREATE TABLE IF NOT EXISTS ROLE(
   id_role INT,
   nom VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_role)
);

CREATE TABLE IF NOT EXISTS CASTING(
   id_film INT,
   id_role INT,
   id_acteur INT,
   PRIMARY KEY(id_film, id_role, id_acteur)
);

CREATE TABLE IF NOT EXISTS Asso_1(
   id_genre INT,
   id_film INT,
   id_genre_1 INT,
   id_realisateur INT,
   PRIMARY KEY(id_genre, id_film, id_genre_1, id_realisateur),
   FOREIGN KEY(id_genre) REFERENCES GENRE(id_genre),
   FOREIGN KEY(id_film, id_genre_1, id_realisateur) REFERENCES FILM(id_film, id_genre, id_realisateur)
);

CREATE TABLE IF NOT EXISTS Asso_2(
   id_realisateur INT,
   id_film INT,
   id_genre INT,
   id_realisateur_1 INT,
   PRIMARY KEY(id_realisateur, id_film, id_genre, id_realisateur_1),
   FOREIGN KEY(id_realisateur) REFERENCES REALISATEUR(id_realisateur),
   FOREIGN KEY(id_film, id_genre, id_realisateur_1) REFERENCES FILM(id_film, id_genre, id_realisateur)
);

CREATE TABLE IF NOT EXISTS Asso_3(
   id_film INT,
   id_genre INT,
   id_realisateur INT,
   id_film_1 INT,
   id_role INT,
   id_acteur INT,
   PRIMARY KEY(id_film, id_genre, id_realisateur, id_film_1, id_role, id_acteur),
   FOREIGN KEY(id_film, id_genre, id_realisateur) REFERENCES FILM(id_film, id_genre, id_realisateur),
   FOREIGN KEY(id_film_1, id_role, id_acteur) REFERENCES CASTING(id_film, id_role, id_acteur)
);

CREATE TABLE IF NOT EXISTS Asso_4(
   id_role INT,
   id_film INT,
   id_role_1 INT,
   id_acteur INT,
   PRIMARY KEY(id_role, id_film, id_role_1, id_acteur),
   FOREIGN KEY(id_role) REFERENCES ROLE(id_role),
   FOREIGN KEY(id_film, id_role_1, id_acteur) REFERENCES CASTING(id_film, id_role, id_acteur)
);

CREATE TABLE IF NOT EXISTS Asso_5(
   id_acteur INT,
   id_film INT,
   id_role INT,
   id_acteur_1 INT,
   PRIMARY KEY(id_acteur, id_film, id_role, id_acteur_1),
   FOREIGN KEY(id_acteur) REFERENCES ACTEUR(id_acteur),
   FOREIGN KEY(id_film, id_role, id_acteur_1) REFERENCES CASTING(id_film, id_role, id_acteur)
);
