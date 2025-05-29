<?php

    // pages annexes attelées
    require_once "Acteur.php";
    require "Film.php";
    require_once "Realisateur.php";
    require "Role.php";
    require_once "Person.php";
    require "Casting.php";
    require "Genre.php";

        //$acteur0 = new Acteur ($nom, $prenom, $sexe, $date_de_naissance);

        $acteur1 = new Acteur("truc", "bidule","Masculin", "19/08/84");
        $acteur2 = new Acteur ("Azer", "Tyu", "Masculin", "01/10/11");
        $acteur3 = new Acteur ("Piou", "Erty", "Masculin", "10/01/01");
        $acteur4 = new Acteur ("Aty", "Zery", "Masculin", "11/11/10");
        $acteur5 = new Acteur ("Ryu", "Opai", "Masculin", "10/10/11");
        $acteur6 = new Acteur ("Qasder", "Fresza", "Féminin", "02/22/02");

        $realisateur1 = new Realisateur ("Sed", "Dreza", "Féminin", "02/02/02");
        $realisateur2 = new Realisateur ("Huj", "Kil", "Masculin", "20/21/11");
    
        // $genre0 = new Genre ($nom);

        $genre1 = new Genre ("Aventure");
        $genre2 = new Genre ("Science Fiction");
        $genre3 = new Genre ("Comedie");

        //$film0 = new Film ($titre, $date_de_sortie, $duree, $resume, $genre);
      
        $film1 = new Film ("Premier", "01/01/01", "60", "Il était une fois", $genre1, $realisateur1);
        $film2 = new Film ("Se gond", "01/11/10", "180", "Il vécurent heureux", $genre2, $realisateur1);
        $film3 = new Film ("Plage", "10/01/01", "360", "Un coup de soleil", $genre3, $realisateur2);
        $film4 = new Film ("Lachute", "01/01/01", "120", "Et eurent beaucoup d'enfant", $genre3, $realisateur2);
    
        //$role0 = new Role ($nom, $film, $acteur);

        $role1 = new Role ("Chauffeur");
        $role2 = new Role ("Nageur");
        $role3 = new Role ("Lecteur");
        $role4 = new Role ("Balayeur");
        $role5 = new Role ("Serrurier");
        $role6 = new Role ("Gardien");
        $role7 = new Role ("Balayeur");
        $role8 = new Role ("Semeur");
        $role9 = new Role ("Conteur");

    // $casting = new Casting ($film, $role, $acteur);

    $casting1 = new Casting ($film1, $role2, $acteur2);
    $casting2 = new Casting ($film2, $role1, $acteur1);
    $casting3 = new Casting ($film1, $role3, $acteur5);
    $casting4 = new Casting ($film1, $role4, $acteur6);
    $casting5 = new Casting ($film2, $role5, $acteur6);
    $casting6 = new Casting ($film2, $role6, $acteur2);
    $casting7 = new Casting ($film2, $role4, $acteur4);
    $casting8 = new Casting ($film4, $role8, $acteur4);
    $casting9 = new Casting ($film4, $role9, $acteur3);


    /************************************* */
   /* pour essayer les exemple ci-dessous */
  /*      enlever les commentaires       */
 /************************************* */

/*
    liste des acteur jouant le role de */

    // echo $role4->listActeur_by_role();

/*
    lister nom de role incarné par l'acteur dans le film */
    
    // echo $film1->acteur_et_role_by_film();

/*
    les film de genre sont */

    // echo $genre3->listfilm_by_genre();

/*
    filmographie pour les acteurs */

    // echo $acteur6->filmographie();

/*
    filmographie pour les realisateur */
    
    // echo $realisateur2->filmographie();

?>