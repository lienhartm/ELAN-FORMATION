<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 3:</u></h2>
<p>
    Soit la phrase " Notre formation DL commence aujourd'hui ".
    <br>
    Ecrire un algorithme permettant de remplacer le mot " aujourd'hui " par le mot " demain ".
    <br>
    Afficher l'ancienne et la nouvelle phrase.
</p>
<h3>Réponse:</h3>

<?php
$a = "Notre formation DL commence aujourd'hui";
echo "L' ancienne phrase << ".$a." >><br>";
/* str_replace(am,pm,x) : remplace le mot 'am' par 'pm' dans 'x' */
echo "La nouvelle phrase << ".str_replace("aujourd'hui", "demain", $a)." >>";
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