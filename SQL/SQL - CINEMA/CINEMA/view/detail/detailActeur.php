<?php

ob_start();

foreach($acteurs->fetchAll() as $acteur) { 
    if($acteur['id_acteur']===$_GET['id']){ ?>

        
        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;float: left;margin-right: 50px;">
            <img src="image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
        </figure>
        <h1><?= $acteur['nom']." ".$acteur['prenom'] ?></h1>
        <ul>
        <li>Ne le : <?= $acteur['naissance'] ?></li>
        <li>Sexe : <?= $acteur['sexe'] ?></li>
        </ul><br>

<?php 
foreach($filmo->fetchAll() as $film) {
    if($film['id_acteur']===$_GET['id']){?>
    
    <p style="margin-left:50px;">A joué le rôle de <?= $film['rnom'] ?> dans le film <?= $film['fnom'] ?></p>

<?php }}  }} 

$contenu  = ob_get_clean();

require "view/template.php";

?>
