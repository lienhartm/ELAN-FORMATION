<?php

require_once "../controleur/SujetControleur.php";

$ctrlSujet = new SujetControleur();

if(isset($_GET['action'])){

    $id = (isset($_GET['id'])) ? $_GET['id'] : '';
    
    switch($_GET['action']){
        case "listSujet" : $ctrlSujet->listSujet(); break;
        case "detailsujet" : $ctrlSujet->detailSujet($id); break;
    }
} else {
    echo 'error!';
}

?>