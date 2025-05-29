<?php

    class Livre {

        protected $titre;
        protected $nb_de_page;
        protected $annee_de_parution;
        protected $prix;
        protected $auteur;
        
        public function __construct ($titre, $nb_de_page, $annee_de_parution, $prix, Auteur $auteur) {

            $this->titre = $titre;
            $this->nb_de_page = $nb_de_page;
            $this->annee_de_parution = $annee_de_parution;
            $this->prix = $prix;
            $this->auteur = $auteur;
            $this->auteur->addLivre($this);

        }

        public function getTitre() {
            return $this->titre;
        }
        public function setTitre($titre) {
            $this->titre = $titre;
        }
        public function getNb_de_page() {
            return $this->nb_de_page;
        }
        public function setNb_de_page($nb_de_page) {
            $this->nb_de_page = $nb_de_page;
        }
        public function getAnnee_de_parution() {
            return $this->annee_de_parution;
        }
        public function setAnnee_de_parution($annee_de_parution) {
            $this->annee_de_parution = $annee_de_parution;
        }
        public function getPrix() {
            return $this->prix;
        }
        public function setPrix($prix) {
            $this->prix = $prix;
        }
        public function __toString() {
            return $this->getTitre()."(".$this->getAnnee_de_parution().") : ".$this->getNb_de_page()." pages / ".$this->getPrix()." €";
        }


    }

?>