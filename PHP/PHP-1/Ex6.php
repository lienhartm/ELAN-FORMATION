<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 6:</u></h2>
<p>
    Ecrire un algorithme permettant de calcler un montant de facture à régler à partir de la quantité d'articles,
    <br>
    son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20% -> 0.2).
</p>
<h3>Réponse:</h3>
<?php
$a = 9.99;
$b = 5;
$c = 0.2;
echo "Prix unitaire de l'article : ".$a." €<br>";
echo "Quantité : ".$b."<br>";
echo "Taux de TVA : ".$c."<br>";
echo "<br>";
echo "Le montant de la facture à régler est de : ".(($a*$b)*(1+$c))." €";
?>
<style>
    body {
        margin-left: 100px;
    }
    h1 {
        text-align: center;
    }
</style>
<body>
</html>