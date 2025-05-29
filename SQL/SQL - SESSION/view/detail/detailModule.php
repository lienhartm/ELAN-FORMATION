<?php foreach($sessions->fetchAll() as $session) {
        if($session['id_formation']===$_GET['id']){ ?>

        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;float: left;margin-right: 50px;">
            <img src="../image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
        </figure>
        <h1><?= $session['titre'] ?></h1>
        <h2><?= $session['chapitre'] ?></h2>
        <ul>
        <li>Nombre de place : <?= $session['nb_place'] ?></li>
        <li>Debut : <?= $session['debut'] ?></li>
        <li>Fin : <?= $session['fin'] ?></li>
        </ul>
        <p><?= $session['resumer'] ?></p><br>

<?php }} ?>
