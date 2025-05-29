<?php

require_once "app/dao.php";

class ActeurControlleur {

    public function listActeurs() {

        $pdo = new DAO();

        $requete = "SELECT id_acteur, nom, prenom FROM acteur ORDER BY nom ASC";

        $acteurs = $pdo->executeRequest($requete);

        require "view/list/listActeurs.php";

    }
    
    public function detailActeur() {

        $pdo = new DAO();
        
        $requete = "SELECT id_acteur, nom, prenom, naissance FROM acteur AS a";

        $acteurs = $pdo->executeRequest($requete);

        $pdo = new DAO();

        $requete1 = "SELECT c.id_acteur as id_acteur, r.nom as rnom, f.nom as fnom FROM casting AS c
                    INNER JOIN role AS r ON c.id_role = r.id_role
                    INNER JOIN film AS f ON c.id_film = f.id_film";

        $filmo = $pdo->executeRequest($requete1);

        require "view/detail/detailActeur.php";

    }

}

?>