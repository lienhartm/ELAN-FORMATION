<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 7:</u></h2>
<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son age:
    <br>
    <ul>
        <li>Poussin: entre 6 et 7 ans</li>
        <li>Pupille: entre 8 et 9 ans</li>
        <li>Minime: entre 10 et 11 ans</li>
        <li>Cadet: à partir de 12 ans</li>
        <li>Si la catégorie n'est pas gérée, merci de le préciser.</li>
    </ul>
</p>
<h3>Réponse:</h3>
<?php
$a = 10;
/* if-elseif-else */
if($a==6 | $a==7){$b = "Poussin";$c = true;}
elseif($a==8 | $a==9){$b = "Pupille";$c = true;}
elseif($a==10 | $a == 11){$b = "Minime";$c = true;}
elseif($a >= 12 & $a <= 16){$b = "Cadet";$c = true;}
else{$b = "Cette catégorie n'est pas gérée";$c = false;}
if($c){echo "L'enfant qui a ".$a." ans appartient à la catégorie \" ".$b." \"";}
else{echo $b."<br>";}
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