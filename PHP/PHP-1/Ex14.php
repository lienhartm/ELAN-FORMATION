<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 14:</u></h2>
<p>
    Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>
<h3>Réponse:</h3>
<?php
/* date_create(Y-m-d) retourne une date */
$date1=date_create("2018-05-21");
$date2=date_create("1985-01-17");
/* date_diff() retourne la difference */
$diff= date_diff($date1,$date2);
/* date_format() modifie le format de la date */
echo "Date courante: ".date_format($date1, "d/m/Y")."<br>";
echo "Date de naissance: ".date_format($date2, "d/m/Y")."<br>";
/* format() return le format de la date */
echo $diff->format("Age de la personne: %Y ans %m mois %d jours");
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