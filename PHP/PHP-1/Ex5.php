<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 5:</u></h2>
<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    <br>
    Attention, la valeur générée devra être arrondie à deux décimales.
</p>
<h3>Réponse:</h3>
<?php
$a = 100;
$b = 0.1524;
echo "Montant en francs : ".$a."<br>";
echo $a." francs = ".$a*$b." €";
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