<?php

require_once "../controleur/SessionControleur.php";
require_once "../controleur/StagiaireControleur.php";
require_once "../controleur/InscriptionControleur.php";

$ctrlSession = new SessionControleur();
$ctrlStagiaire = new StagiaireControleur();
$ctrlInscription = new InscriptionControleur();

if(isset($_GET['action'])){

    $id=(isset($_GET['id']))?$_GET['id']: "";

    switch($_GET['action']){

        case "listModule": $ctrlSession->listModule($id); break;
        case "listSession": $ctrlSession->listSession(); break;
        case "listStagiaire": $ctrlStagiaire->listStagiaire(); break;
        case "detailModule": $ctrlSession->detailModule($id); break;
        case "detailStagiaire": $ctrlStagiaire->detailStagiaire($id); break;
        case "listInscription": $ctrlInscription->listInscription(); break;

    }
} else {
    // $ctrlHome->homePage();
}

?>