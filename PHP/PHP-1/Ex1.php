<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 1:</u></h2>
<p>
    Soit la phrase " Notre formation DL commence aujourd'hui ".
    <br>
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espace inclus).
</p>
<h3>Réponse:</h3>

<?php
// declaration de la concaténation d'une phrase dans une variable
$a = "Notre formation DL commence aujourd'hui";

/* strlen():
                calcul le nonbre de caractères contenu dans les parentheses */

// affichage de la variable et de la fonction dans une phrase
echo "La phrase << ".$a." >> contient ".strlen($a)." caractères.";
?>
<style>
    body {
        margin-left: 100px;
    }
    h1 {
        text-align: center;
    }
</style>
</body>
</html>