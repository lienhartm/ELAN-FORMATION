<?php

require_once "app/dao.php";

class FilmControlleur {

    public function listFilms() {
    
        $pdo = new DAO();

        $requete = "SELECT id_film, nom FROM film ORDER BY nom ASC";

        $films = $pdo->executeRequest($requete);

        require "view/list/listFilms.php";

    }

    public function detailFilm() {

        $pdo = new DAO();
        
        $requete = "SELECT f.id_film, f.nom, f.date_de_sortie, f.duree, f.resumer, g.libelle, r.nom AS rnom, r.prenom AS rpnom
                    FROM film AS f
                    INNER JOIN genre AS g ON f.id_genre = g.id_genre
                    INNER JOIN realisateur AS r ON f.id_realisateur = r.id_realisateur
                    GROUP BY id_film;";

        $films = $pdo->executeRequest($requete);

        $pdo = new DAO();

        $requete1 = "SELECT f.id_film, a.nom as anom , a.prenom as aprenom, r.nom as rnom
        FROM film AS f
        INNER JOIN casting AS c ON f.id_film = c.id_film
        INNER JOIN acteur AS a ON c.id_acteur = a.id_acteur
        INNER JOIN role AS r ON c.id_role = r.id_role";

        $castings = $pdo->executeRequest($requete1);
                       
        require "view/detail/detailFilm.php";

    }

}

?>