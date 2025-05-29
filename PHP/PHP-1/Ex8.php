<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 8:</u></h2>
<p>
    Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme:
    <br><br>
    Table de 8:
    <br>
    1 * 8 = 8
    <br>
    2 * 8 = 16
    <br>
    3 * 8 = 24 ...
    <br><br>
    <b>Remarque</b>: proposer deux solutions avec deux types de boucles.
</p>
<h3>Réponse:</h3>
<?php
$a = 8;
echo "Table de ".$a." avec la boucle For-Loop :<br><br>";
/* for loop */
for($b = 1;$b<11;$b++){
echo $b." * ".$a." = ".$a*$b."<br>";}
echo "<br>";
echo "Table de ".$a." avec la boucle While-Loop :<br><br>";
$b = 1;
/* while loop */
while($b<11){echo $b." * ".$a." = ".$a*$b."<br>";$b++;}
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