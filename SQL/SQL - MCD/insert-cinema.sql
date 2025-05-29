--INSTRUCTION SSQL POUR L'INSTRUCTION
--
--INSERT TO "" () VALUES
--()
--
INSERT TO ACTEUR(id_acteur, nom, prenom, sexe) VALUES
--(id_acteur, nom, prenom, sexe)
--
INSERT TO GENRE(id_genre, libelle) VALUES
--(id_genre, libelle)
--
INSERT TO REALISATEUR(id_realisateur, nom, prenom , sexe) VALUES
--(id_realisateur, nom, prenom , sexe)
--
INSERT TO FILM(id_film, id_genre, id_realisateur, nom, date_de_sortie, duree, resumer) VALUES
--(id_film, id_genre, id_realisateur, nom, date_de_sortie, duree, resumer)
--
INSERT TO ROLE(id_role, nom) VALUES
--(id_role, nom)
--
INSERT TO CASTING(id_film, id_role, id_acteur) VALUES
--(id_film, id_role, id_acteur)
--