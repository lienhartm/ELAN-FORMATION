<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 2:</u></h2>
<p>
    Soit la phrase " Notre formation DL commence aujourd'hui ".
    <br>
    Ecrire un algorithme permettant de compter le nombre de mots contenus dans cette phrase.
</p>
<h3>Réponse:</h3>

<?php
$a = "Notre formation DL commence aujourd'hui";
/* str_word_count() : calcul le nb de mots */
echo "La phrase << ".$a." >> contient ".str_word_count($a)." mots.";
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