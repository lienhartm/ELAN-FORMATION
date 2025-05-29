<?php

    class Film {

        private $titre;
        private  $date_de_sortie;
        protected $duree;
        protected $resume;
        protected $genre;
        protected $realisateur;
        private $castings;

        public function __construct ($titre, $date_de_sortie, $duree, $resume, Genre $genre, Realisateur $realisateur) {

            $this->titre = $titre;
            $this->date_de_sortie = $date_de_sortie;
            $this->duree = $duree;
            $this->resume = $resume;
            $this->genre = $genre;
            $this->genre->addFilm($this);       // jonction
            $this->realisateur = $realisateur;
            $this->realisateur->addFilm($this); // jonction
            $this->castings = []; // table casting
            
        }
        public function addGenre(Genre $genre) {
            $this->genre[] = $genre;
        }
        public function addCasting(Casting $casting) {
            $this->castings[] = $casting;
            // array push
        }
        public function getTitre() {
            return $this->titre;
        }
        public function setTitre($titre) {
            $this->titre = $titre;
        }
        public function getDate_de_sortie() {
            return $this->date_de_sortie;
        }
        public function setDate_de_sortie($date_de_sortie) {
            $this->date_de_sortie = $date_de_sortie;
        }
        public function getDuree() {
            return $this->duree;
        }
        public function setDuree($duree) {
            $this->duree = $duree;
        }
        public function getResume() {
            return $this->resume;
        }
        public function setResume($resume) {
            $this->resume = $resume;
        }
        public function getGenre() {
            return $this->genre;
        }
        public function setGenre($genre) {
            $this->genre = $genre;
        }
        public function __toString() {
            return "Titre : ".$this->getTitre()."<br>Date de sortie : ".$this->getDate_de_sortie()."<br>Durée : ".$this->getDuree()." minutes<br>Résumé : ".$this->getResume()."<br>Genre : ".$this->getGenre();
        }
        // function 'Person' liste les différents acteur ayant incarné le rôle dans le film */  // acteur_et_role_by_film
        public function acteur_et_role_by_film() {
            $liste = "Dans le film ".$this->getTitre()." : <br><br>";
            foreach($this->castings as $casting) {
                $liste .= $casting->getRole()."<br>".$casting->getActeur()."<br><br>";
            }
            return $liste;
        }
    }

?>