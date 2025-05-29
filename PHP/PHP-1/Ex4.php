<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 4:</u></h2>
<p>
    Ecrire un algorithme permettant de savoir si une phrase est un palindrome.
</p>
<h3>Réponse:</h3>
<?php
$a = "Engage le jeu que je le gagne";
/* similar_text(1,2,%) compare 1 et 2 et renvoie un pourcentage de correspondance palindromique */
/* strtolower() valeur en minuscule */
/* strrew() inverse le sens de la valeur */
similar_text(strtolower(str_replace(" ","",$a)),strtolower(strrev(str_replace(" ","",$a))),$percent);
/* if-else */
if( $percent!= 100 ){
$b = " n'est palindrome";}
else{
$b = " est palindrome";}
echo "La phrase << ".$a." >> ".$b;
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