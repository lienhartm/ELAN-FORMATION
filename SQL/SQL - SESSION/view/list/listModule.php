<?php 

// foreach($sessions->fetchAll() as $session) {
//     if($session['titre']===$_GET['id']){

        $titre = True;

        foreach($sessions->fetchAll() as $session) {
            // if($module['titre']===$_GET['id']) {
                if ($titre){
                    echo    "<h2 style=' text-align: center'><b>~~# " . $session['titre'] . " #~~</b></h2>",
                            "<div style=' display: flex; flex-wrap: wrap; margin: 10px; '>";
                    $titre = False;
                }?>

            <a href="../controleur/traitement.php?action=detailModule&id=<?= $session['id_formation']?>">
                <figure style="border: 1px brown solid; padding: 4px; margin: 20px;">
                    <img src="../image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
                    <figcaption style="background-color: brown; color: goldenrod; font-style: italic; padding: 2px; text-align: center;">
                        <?= $session['chapitre']?>
                    </figcaption>
                </figure>
            </a><br>

<?php }//} ?>
</div>
