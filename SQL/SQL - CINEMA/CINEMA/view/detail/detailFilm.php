<?php

ob_start();

?>

<?php 

foreach($films->fetchAll() as $film) { 
    if($film['id_film']===$_GET['id']){ ?>

        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;float:left;margin-right: 50px;">
            <img src="image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
        </figure>
        <h1><?= $film['nom'] ?></h1>
        <ul>
        <li>Date de sortie : <?= $film['date_de_sortie'] ?></li>
        <li>Durée : <?= $film['duree'] ?> mn</li>
        <li>Genre : <?= $film['libelle'] ?></li>
        <li>Réalisateur : <?= $film['rnom']." ".$film['rpnom'] ?></li>
        </ul><br>
        <p><?= $film['resumer'] ?></p>
        
        <?php 

foreach($castings->fetchAll() as $casting) {
    if($casting['id_film']===$_GET['id']){?>
    
    <p style="margin-left:50px;">L'acteur <?= $casting['anom']." ".$casting['aprenom'] ?> dans le rôle de <?= $casting['rnom'] ?></p>

<?php }}  }} 

$contenu  = ob_get_clean();

require "view/template.php";

?>

<?php 

