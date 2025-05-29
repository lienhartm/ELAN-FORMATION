/* EXERCICE 3 */
/*
ARTICLES (NOART, LIBELLE, STOCK, PRIXINVENT)
FOURNISSEURS (NOFOUR, NOMFOUR, ADRFOUR, VILLEFOUR)
ACHETER (NOFOUR#, NOART#, PRIXACHAT, DELAI)
*/

-- A - Numéros et libellés des articles dont le stock est inférieur à 10 ?

SELECT NOART, LIBELLE
FROM ARTICLES
WHERE STOCK < 10;

-- B - Liste des articles dont le prix d'inventaire est compris entre 100 et 300 ?

SELECT *
FROM ARTICLES
WHERE PRIXINVENT BETWEEN '100' AND '300';

-- C - Liste des fournisseurs dont on ne connaît pas l'adresse ?

SELECT *
FROM FOURNISSEURS
WHERE ADRFOUR = "";

-- D - Liste des fournisseurs dont le nom commence par "STE" ?

SELECT *
FROM FOURNISSEURS
WHERE NOMFOUR LIKE 'STE%';

-- E - Noms et adresses des fournisseurs qui proposent des articles pour lesquels le délai d'approvisionnement est supérieur à 20 jours ?

SELECT DISTINCT NOMFOUR, ADRFOUR, VILLEFOUR
FROM FOURNISSEURS AS F
INNER JOIN ACHETER AS AC ON F.NOFOUR=AC.`nofour#`
WHERE DELAI>20;

-- F - Nombre d'articles référencés ?

SELECT COUNT(*) AS NbArticles
FROM ARTICLES

-- G - Valeur du stock ?

SELECT SUM(STOCK*PRIXINVENT) AS ValeurStock
FROM ARTICLES;


-- H - Numéros et libellés des articles triés dans l'ordre décroissant des stocks ?

SELECT NOART, LIBELLEFROM ARTICLES
ORDER BY STOCK DESC

-- I - Liste pour chaque article (numéro et libellé) du prix d'achat maximum, minimum et moyen ?

SELECT DISTINCT AR.noart, AR.LIBELLE, MIN(AC.PRIXACHAT), MAX(AC.PRIXACHAT), AVG(AC.PRIXACHAT)
FROM ARTICLES AS AR, ACHETER AS AC
WHERE AR.NOART = AC.`noart#`
GROUP BY AR.NOART, AR.LIBELLE

-- J - Délai moyen pour chaque fournisseur proposant au moins 2 articles ?

SELECT *
FROM fournisseurs AS F, ACHETER AS AC, ARTICLES AS AR
WHERE F.NOFOUR = AC.`nofour#`
AND AC.`noart#` = AR.noart
HAVING DELAI > 2