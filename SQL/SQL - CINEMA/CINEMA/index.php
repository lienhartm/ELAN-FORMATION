<?php

require_once "controleur/GenreControlleur.php";
require_once "controleur/RealisateurControlleur.php";
require_once "controleur/FilmControlleur.php";
require_once "controleur/ActeurControlleur.php";
require_once "controleur/HomeControlleur.php";
//  require_once "controleur/DataControleur.php":

$ctrlGenre = new GenreControlleur();
$ctrlRealisateur = new RealisateurControlleur();
$ctrlActeur = new ActeurControlleur();
$ctrlFilm = new FilmControlleur();
$ctrlHome = new HomeControlleur();
//  $ctrlData = new DataControlleur();

if(isset($_GET['action'])){
    // if there is an id, get the id and use it.
    $id=(isset($_GET['id']))?$_GET['id']: "";
    switch($_GET['action']){
    //insert here all the request to generate new page
    // add as the functions are added to fill all cases possible
    // LISTS 
        case "listGenres": $ctrlGenre->listGenres(); break;
        case "listRealisateurs": $ctrlRealisateur->listRealisateurs(); break;
        case "listActeurs": $ctrlActeur->listActeurs(); break;
        case "listFilms": $ctrlFilm->listFilms(); break;
        case "detailFilm": $ctrlFilm->detailFilm(); break;
        case "detailActeur": $ctrlActeur->detailActeur(); break;
        case "detailGenre": $ctrlGenre->detailGenre(); break;
        case "detailRealisateur": $ctrlRealisateur->detailRealisateur(); break;
    }
} else {
    $ctrlHome->homePage();
}

?>