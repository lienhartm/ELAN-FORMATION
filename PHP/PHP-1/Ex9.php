<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 9:</u></h2>
<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son âge et son sexe.
    <br><br>
    Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de
    <br>
    plus de vingt ans, alors celle-ci est imposable (sinon ce n'est pas le cas, "non imposable").
</p>
<h3>Réponse:</h3>
<?php
$a = 32;
$b = "F";
if(($b=="F" & $a > 18 & $a < 35) | ($b=="H" & $a > 20)){echo "Age: ".$a."<br>Sexe: ".$b."<br>La personne est imposable.";}
else{echo "Non imposable!";}
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