<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 12:</u></h2>
<p>
    A partir de la fonction presonnalisée et à partir d'un tableau de prénoms et de langue associée
    <br>
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    <br>
    respective (français -> "Salut", anglais -> "Hello", espagnol -> "Hola")
    <br><br>
    <b>Exemple de tableau </b>: Mickaêl -> FRA, Virgile -> ESP, Marie-Claire -> ENG 
</p>
<h3>Réponse a:</h3>
<?php
/* tableau */
$a = array("Mickaël"=>"FRA", "Virgile"=>"ESP", "Marie-Claire"=>"ENG");
$b = array("FRA"=>"Salut", "ENG"=>"Hello", "ESP"=>"Hola");
foreach($a as $as => $key){echo $b[$key]." ".$as."<br>";}
?>
<p><b>Variante</b>: trier d'abord le tableau par ordre alphabétique du prénom</p>
<h3>Réponse b:</h3>
<?php
ksort($a);
foreach($a as $as => $key){echo $b[$key]." ".$as."<br>";}
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