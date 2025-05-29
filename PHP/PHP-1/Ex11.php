<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 11:</u></h2>
<p>
    Initialisez deux tableaux de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
    <br>
    tableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
    <br>
    d'afficher le nombre de marques de voitures présentes dans le tableau.
</p>
<h3>Réponse:</h3>
<?php
$a = array("Peugeot", "Renault", "BMW", "Mercedes");
echo "Il y a ".count($a)." marques de voitures dans le tableau :<br>";
echo "<ul>";
/* foreach */
foreach($a as $as){echo "<li>".$as."</li><br>";}
echo "</ul>";
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