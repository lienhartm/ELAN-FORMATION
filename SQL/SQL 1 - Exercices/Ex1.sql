/*  EXERCICE 1 */
/*
REPRESENTATION (N°REPRESENTATION, TITRE_REPRESENTATION, LIEU)
MUSICIEN (NOM, N°REPRESENTATION*)
PROGRAMMER (DATE, N°REPRESENTATION*, TARIF)
*/

-- A - Donner la liste des titres des représentations

SELECT TITRE_REPRESENTATION
FROM REPRESENTATION

-- B - Donner la liste des titres des représentations ayant lieu à l'opéra Bastille

SELECT TITRE_REPRESENTATION
FROM REPRESENTATION
WHERE LIEU = 'Bastille'

-- C - Donner la liste des noms des musiciens et des titres des représentations auxquelles ils participent

SELECT M.MUSICIEN, R.TITRE_REPRESENTATION
FROM MUSICIEN AS M, REPRESENTATION AS R
WHERE R.N°REPRESENTATION = M.N°REPRESENTATION

-- D - Donner la liste des titres des représentations, les lieux et les tarifs pour la journée du 14/09/2014

SELECT R.TITRE_REPRESENTATION, R.LIEU, P.TARIF
FROM REPRESENTATION AS R, PROGRAMMER AS P
WHERE P.DATE = '14/09/2014'
