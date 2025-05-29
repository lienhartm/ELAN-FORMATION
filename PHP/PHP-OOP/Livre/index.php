<?php

    require "Auteur.php";
    require "Livre.php";
    //
    $auteur1 = new Auteur ("King", "Stephen");
    $livre1 = new Livre ("Ca", 1138, 1986, 20, $auteur1);
    $livre2 = new Livre ("Simetierre", 374, 1983, 15, $auteur1);
    $livre3 = new Livre ("Le Fléau", 823, 1978, 14, $auteur1);
    $livre4 = new Livre ("Shining", 447, 1977, 16, $auteur1);

    echo $auteur1."<br><br>".$auteur1->bibliographie();

?>