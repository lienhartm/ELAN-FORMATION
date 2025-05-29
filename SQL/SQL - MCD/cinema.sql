--insertion des donnees des differentes table dans la database cinema
--
--  acteur
--
INSERT INTO acteur (nom, prenom, sexe, naissance) VALUES
("Truc", "bidule","Masculin","01/01/01"),
("Azer", "Tyu", "Masculin","01/01/01"),
("Piou", "Erty", "Masculin","01/01/01"),
("Aty", "Zery", "Masculin","01/01/01"),
("Ryu", "Opai", "Masculin","01/01/01"),
("Qasder", "Fresza", "Féminin","01/01/01");
--
--  realisateur
--
INSERT INTO realisateur (nom, prenom, sexe, naissance) VALUES
("Sed", "Dreza", "Féminin","01/01/01"),
("Huj", "Kil", "Masculin","01/01/01");
--
--  genre
--
INSERT INTO genre (libelle) VALUES
("Aventure"),
("Science Fiction"),
("Comedie");
--
--  film
--
INSERT INTO film (nom, date_de_sortie, duree, resumer, id_genre, id_realisateur) VALUES
("Premier", "01/01/01", "60", "Il était une fois", 1, 1),
("Se gond", "01/01/01", "180", "Il vécurent heureux", 2, 1),
("Plage", "01/01/01", "360", "Un coup de soleil", 3, 2),
("Lachute", "01/01/01", "120", "Et eurent beaucoup d'enfant", 3, 2);
--
--  role
--
INSERT INTO role (nom) VALUES
("Chauffeur"),
("Nageur"),
("Lecteur"),
("Balayeur"),
("Serrurier"),
("Gardien"),
("Balayeur"),
("Semeur"),
("Conteur");
--
--  casting
--
INSERT INTO casting (id_film, id_role, id_acteur) VALUES
(1, 2, 2),
(2, 1, 1),
(1, 3, 5),
(1, 4, 6),
(2, 5, 6),
(2, 6, 2),
(2, 4, 4),
(4, 8, 4),
(4, 9, 3);