<?php

    class Genre {

        public $nom;
        private $films;

        public function __construct($nom) {

            $this->nom = $nom;
            $this->films = []; // table $films

        }
        // jonction de la class 'Film' dans une table '$film'
        public function addFilm(Film $film) {
            $this->films[] = $film;
        }

        public function getNom() {
            return $this->nom;
        }
        public function setNom($nom) {
            $this->nom = $nom;
        }
        public function __toString() {
            return $this->nom;
        }
        // function 'triGenre' liste les films par le genre choisi // listfilm_by_genre
        public function listfilm_by_genre() {
            $filmo = "Les films de genre ".$this->nom." sont : <br><br>";
            foreach($this->films as $film) {
                    $filmo .= $film."<br><br>";
            }
            return $filmo;
        }
    }

?>