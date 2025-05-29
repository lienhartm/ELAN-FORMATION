<?php

require_once "app/dao.php";

class GenreControlleur {

    public function listGenres() {

        $pdo = new DAO();

        $requete = "SELECT id_genre, libelle FROM genre ORDER BY libelle ASC";

        $genres = $pdo->executeRequest($requete);

        require "view/list/listGenres.php";

    }

    public function detailGenre() {

        $pdo = new DAO();
        
        $requete = "SELECT f.id_film, f.id_genre, f.nom , g.libelle
                    FROM film AS f 
                    INNER JOIN genre AS g 
                    ON f.id_genre = g.id_genre";

        $films = $pdo->executeRequest($requete);
                       
        require "view/detail/detailGenre.php";

    }
}

?>