/* EXERCICE 4 */
/*
ETUDIANT(NUMETU, NOM, PRENOM, DATENAISS, RUE, CP, VILLE)
EPREUVE(NUMEPREUVE, DATEPREUVE, LIEU)
NOTATION(NUMETU, NUMEPREUVE, NOTE)
MATIERE(NUMEPREUVE, CODEMAT, LIBELLE, COEF)
*/
-- A -  Liste de tous les étudiants

SELECT *
FROM ETUDIANT

-- B - Liste de tous les étudiants, classée par ordre alphabétique inverse

SELECT *
FROM ETUDIANT
ORDER BY NOM DESC

-- C - Libellé et coefficient (exprimé en pourcentage) de chaque matière

SELECT DISTINCT LIBELLE, COEF 
FROM MATIERE

-- D - Nom et prénom de chaque étudiant

SELECT NOM, PRENOM
FROM ETUDIANT

-- E - Nom et prénom des étudiants domiciliés à Lyon

SELECT NOM, PRENOM
FROM ETUDIANT
WHERE VILLE = 'LYON'

-- F - Liste des notes supérieures ou égales à 10

SELECT NOTE
FROM NOTATION
WHERE NOTE >= '10'

-- G - Liste des épreuves dont la date se situe entre le 1er janvier et le 30 juin 2014

SELECT *
FROM EPREUVE
WHERE DATEEPREUVE
BETWEEN '2014-01-01' AND '2014-06-30'

-- H - Nom, prénom et ville des étudiants dont la ville contient la chaîne "ll" (LL)

SELECT NOM, PRENOM, VILLE
FROM ETUDIANT
WHERE VILLE 
LIKE '%ll%'

-- I - Prénoms des étudiants de nom Dupont, Durand ou Martin

SELECT prenom
FROM etudiant
WHERE nom IN ('Dupont', 'Durand', 'Martin')

-- J - Somme des coefficients de toutes les matières

SELECT SUM(COEF) AS TOTAL_COEF
FROM MATIERE

-- K - Nombre total d'épreuves

SELECT COUNT(*) AS TOTAL_EPREUVE
FROM EPREUVE

-- L - Nombre de notes indéterminées (NULL)

SELECT COUNT(NOTE)
FROM NOTATION
WHERE NOTE = "" 

-- M - Liste des épreuves (numéro, date et lieu) incluant le libellé de la matière

SELECT EP.NUM_EPREUVE, EP.DATEEPREUVE, EP.LIEU, M.LIBELLE
FROM EPREUVE AS EP, MATIERE AS M 

-- N - Liste des notes en précisant pour chacune le nom et le prénom de l'étudiant qui l'a obtenue

SELECT ET.NOM, ET.PRENOM, N.NOTE
FROM ETUDIANT AS ET, NOTATION AS N 

-- O - Liste des notes en précisant pour chacune le nom et le prénom de l'étudiant qui l'a obtenue et le libellé de la matière concernée

SELECT ET.NOM, ET.PRENOM, N.NOTE, M.LIBELLE
FROM ETUDIANT AS ET, NOTATION AS N, MATIERE AS M 

-- P - Nom et prénom des étudiants qui ont obtenu au moins une note égale à 20

SELECT NOM, PRENOM 
FROM ETUDIANT AS ET
INNER JOIN NOTATION AS N
WHERE NOTE = '20'
GROUP BY ET.`num-etu`

-- Q - Moyennes des notes de chaque étudiant (indiquer le nom et le prénom)

SELECT ET.NOM, ET.PRENOM, AVG(N.note)
FROM ETUDIANT AS ET
INNER JOIN NOTATION AS N 
ON ET.`num-etu` = N.etu_num 
GROUP BY ET.`num-etu`

-- R - Moyennes des notes de chaque étudiant (indiquer le nom et le prénom), classées de la meilleure à la moins bonne

SELECT ET.NOM, ET.PRENOM, AVG(N.note) AS MOYENNE
FROM ETUDIANT AS ET
INNER JOIN NOTATION AS N 
ON ET.`num-etu` = N.etu_num 
GROUP BY ET.`num-etu`
ORDER BY MOYENNE DESC

-- S - Moyennes des notes pour les matières (indiquer le libellé) comportant plus d'une épreuve

SELECT M.LIBELLE, AVG(N.NOTE)
FROM EPREUVE AS EP
INNER JOIN NOTATION AS N 
ON EP.num_epreuve = N.epreuve_num
INNER JOIN MATIERE AS M
ON M.codemat = EP.mat_code
GROUP BY EP.mat_code
HAVING COUNT(EP.mat_code) > 1

-- T - Moyennes des notes obtenues aux épreuves (indiquer le numéro d'épreuve) où moins de 6 étudiants ont été notés

SELECT EP.NUM_EPREUVE, AVG(N.NOTE)
FROM EPREUVE AS EP
INNER JOIN NOTATION AS N
ON N.epreuve_num = EP.num_epreuve
INNER JOIN ETUDIANT AS ET
ON ET.`num-etu` = N.etu_num
GROUP BY N.epreuve_num
HAVING COUNT(EP.num_epreuve) < 6