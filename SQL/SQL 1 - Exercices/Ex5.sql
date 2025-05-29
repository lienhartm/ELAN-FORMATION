/* EXERCICE 5 */
/*
CREATE DATABASE IF NOT EXISTS "EXERCICE_5";
#
CREATE TABLE IF NOT EXISTS "USINE" (
    NumU INT NOT NULL,
    NomU VARCHAR 25,
    VilleU VARCHAR 25
    )
CREATE TABLE IF NOT EXISTS "PRODUIT" (
    NumP INT NOT NULL,
    NomP VARCHAR 25,
    Couleur VARCHAR 25,
    Poids FLOAT NOT NULL
    )
CREATE TABLE IF NOT EXISTS "FOURNISSEUR" (
    NumF INT NOT NULL,
    NomF VARCHAR 25,
    Statut VARCHAR 25,
    VilleF VARCHAR 25
    )
CREATE TABLE IF NOT EXISTS "LIVRAISON" (
    NumP INT NOT NULL,
    NumU INT NOT NULL,
    NumF INT NOT NULL,
    Quantité INT 
    )
INSERT INTO "USINE" (NumU, NomU, VilleU) VALUES
#   (NumU, NomU, VilleU)
INSERT INTO "PRODUIT" (NumP, NomP, Couleur, Poids) VALUES
#   (NumP, NomP, Couleur, Poids)
INSERT INTO "FOURNISSEUR" (NumF, NomF, Statut, VilleF) VALUES
#   (NumF, NomF, Statut, VilleF)
INSERT INTO "LIVRAISON" (NumP, NumU, NumF, Quantité) VALUES
#   (NumP, NumU, NumF, Quantité)
*/
-- A - Ajouter un nouveau fournisseur avec les attributs de votre choix

INSERT INTO `FOURNISSEUR` (`NumF`, `NomF`, `Statut`, `VilleF`)
VALUES
(`NumF`, `NomF`, `Statut`, `VilleF`)
(`NumF`, `NomF`, `Statut`, `VilleF`)
...

-- B - Supprimer tous les produits de couleur noire et de numéros compris entre 100 et 1999

DELETE
FROM PRODUIT
WHERE Couleur = "noire"
AND NumP
BETWEEN '100'
AND '1999'

-- C - Changer la ville du fournisseur 3 par Mulhouse

UPDATE FOURNISSEUR
SET VilleF = 'Mulhouse'
WHERE NumF = '3'
