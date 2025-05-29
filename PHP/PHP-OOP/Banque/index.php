<?php 

    require "Titulaire.php";
    require "Compte.php";

// instance des classes

    $titulaire1 = new Titulaire("LIENHART", "Michaël", "08/08/1984", "MULHOUSE");
    $compte1 = new Compte("Livret_A", 500.50, "Euro", $titulaire1);
    $compte2 = new Compte("C_c_p", 50.50, "Euro", $titulaire1);

// info titulaire

    //echo $titulaire1;
    echo "<br>";
// info compte

    //echo $compte1;
    echo "<br>";
// info titulaire + les libelles des comptes

    //echo $titulaire1->titulaireInfo();
    echo "<br>";
// info compte + nom prenom titulaire

    //echo $compte1->compteInfo();
    echo "<br>";
    
// crediter $compte1 de 200€

    // echo $compte1->crediter(-200);
    echo "<br>";

// debiteur $compte2 de 50€

    // echo $compte2->debiter(50);
    echo "<br>";

// virement $compte1 vers compte2 de 250€

    echo $titulaire1->virement($compte1, $compte2, 600.50);
    


?>