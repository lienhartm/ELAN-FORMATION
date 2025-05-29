<?php

    class Auteur {

        protected $nom;
        protected $prenom;
        public $livres;

        public function __construct ($nom, $prenom) {

            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->livres = [];

        }

        public function addLivre(Livre $livre) {
            $this->livres[] = $livre;
        }
        public function bibliographie() {
            $bibliographie = "";
            foreach($this->livres as $livre){
                $bibliographie .= $livre->getTitre()." (".$livre->getAnnee_de_parution().") : ".$livre->getNb_de_page()." pages / ".$livre->getPrix()." €<br>";
            }
            return $bibliographie;
        }

        public function getNom() {
            return $this->nom;
        }
        public function setNom($nom) {
            $this->nom = $nom;
        }
        public function getPrenom() {
            return $this->prenom;
        }
        public function setPrenom() {
            $this->prenom = $prenom;
        }
        public function __toString() {
            return "<b>Livres de ".$this->getPrenom()." ".$this->getNom()."</b>";
        }
    }


?>