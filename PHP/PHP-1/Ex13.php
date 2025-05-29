<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 13:</u></h2>
<p>
    Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau
    <br>
    (pas de coefficient). Elle devra être affichée avec deux décimales.
</p>
<h3>Réponse:</h3>
<?php
$a = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
$b = 0;
echo "Les notes obtenues par l'élève sont : ";
foreach($a as $as){echo $as." ";}
echo "<br>Sa moyenne générale est donc de : ";
foreach($a as $as){$b+=$as;}
$as = round($b / count($a),2);
echo $as;
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