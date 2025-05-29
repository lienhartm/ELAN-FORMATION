<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 10:</u></h2>
<p>
    A partir d'un montant à payer et une somme versée pour régler un achat, écrire l'algorithme qui <br>
    affiche à un utilisateur un rende de monnaie en nombre de billets de 10€ et 5€, de pièces de 2€ et 1€.
</p>
<h3>Réponse:</h3>
<?php
$a = 152;
$b = 200;
$c = 0;
echo "Montant à payer : ".$a." €<br>";
echo "Montant versé : ".$b." €<br>";
$c = $b-$a;
/* do loop */
echo "Reste à payer : ".$c." €<br>";
do{echo "*";$c--;}while($c>0);
echo "<br><br>";
$c = $b-$a;
$d = 10;
$e = 5;
$f = 2;
$g = 1;
$a = $c % $d;
$b = ($c - $a) / $d;
echo $b." billets de ".$d." €<br>";
$b = $a % $e;
$c = ($a - $b) / $e;
echo $c." billets de ".$e." €<br>";
$c = $b % $f;
$d = ($b - $c) / $f;
echo $d." pièces de ".$f." €<br>";
$d = $c % $g;
$e = ($c - $d) / $g;
echo $e." pièces de ".$g." €<br>";
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