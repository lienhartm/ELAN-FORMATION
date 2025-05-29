/* EXERCICE 2 */
/*
ETUDIANT (N°ETUDIANT, NOM, PRENOM)
MATIERE (CODEMAT, LIBELLEMAT, COEFFMAT)
EVALUER (N°ETUDIANT*, CODEMAT*, DATE, NOTE)
*/

-- A - Quel est le nombre total d'étudiants ?

SELECT COUNT(*)
FROM ETUDIANT

-- B - Quelles sont, parmi l'ensemble des notes, la note la plus haute et la note la plus basse ?

SELECT MIN(NOTE) AS NOTE_MIN, MAX(NOTE) AS NOTE_MAX
FROM EVALUER

-- C - Quelles sont les moyennes de chaque étudiant dans chacune des matières ?

SELECT ET.nom, ET.prenom, M.libelmat, SUM(EV.note) AS MOYENNE
FROM ETUDIANT AS ET
INNER JOIN EVALUER AS EV
ON ET.id_etu = EV.etu_id
INNER JOIN MATIERE AS M
ON EV.mat_id = M.id_mat
GROUP BY ET.nom, ET.prenom, M.libelmat

SELECT e.nom, e.prenom, m.libelmat, m.coeffmat, AVG(note) 
FROM evaluer n
INNER JOIN etudiant e ON n.etu_id=e.id_etu
INNER JOIN matiere m ON n.mat_id=m.id_mat

GROUP BY e.nom, e.prenom, m.libelmat, m.coeffmat 

-- D - Quelles sont les moyennes par matière ?

CREATE VIEW 'avg_mat' AS
SELECT m.libelmat, AVG(note)
FROM MATIERE AS M
INNER JOIN EVALUER AS EV
WHERE M.id_mat = EV.mat_id
GROUP BY M.libelmat

-- E - Quelle est la moyenne générale de chaque étudiant ?

SELECT ET.nom, ET.prenom, AVG(EV.note) AS MOYENNE
FROM ETUDIANT AS ET
INNER JOIN EVALUER AS EV
ON ET.id_etu = EV.etu_id
INNER JOIN MATIERE AS M
ON EV.mat_id = M.id_mat
GROUP BY ET.nom, ET.prenom

SELECT e.nom, e.prenom, AVG(note) AS moy_gen_etu
FROM evaluer n
INNER JOIN etudiant e
ON n.etu_id=e.id_etu
GROUP BY e.nom, e.prenom 

-- F - Quelle est la moyenne générale de la promotion ?

SELECT AVG(EV.note) AS MOYENNE
FROM ETUDIANT AS ET
INNER JOIN EVALUER AS EV
ON ET.id_etu = EV.etu_id
INNER JOIN MATIERE AS M
ON EV.mat_id = M.id_mat

CREATE VIEW 'avggen' AS
SELECT AVG(moy_gen_etu) AS moy_gen_promo
FROM view_avgetu 

-- G - Quels sont les étudiants qui ont une moyenne générale supérieure ou égale à la moyenne générale de la promotion ?

SELECT nom, prenom
FROM avggen, view_avgetu
WHERE moy_gen_promo >= moy_gen_etu
