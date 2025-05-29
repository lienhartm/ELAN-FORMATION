<?php

    class Produit {
        
        public $nom;
        public $prix;
        public $nb_article;
        public $id = 0;
        public static $index = 0;
        public $produits = [];

        public function __construct ($nom, $prix, $nb_article) {

            $this->nom = $nom;
            $this->prix = $prix;
            $this->nb_article = $nb_article;
            $this->id = self::$index++;
            $this->produits[] = ($this);

        }

        static function panier() {
            $panier = "";
            foreach($produits as $produit){
                $panier .= "Nom : ".$produit[$index]->getNom()."<br>Prix : ".$produit[$index]->getPrix()."<br>Nombre article : ".$produit[$index]->getNb_article()."<br>Sous-total : ".$this->sousTotal()." €";
            }
            echo $panier;
        }
        static function id() {
            return self::$index;
        }
        public function sousTotal() {
            return $this->prix * $this->nb_article;
        }
        public function ajoutArticle($nb) {
            $this->nb_article += abs($nb);
        }
        public function retirArticle($nb) {
            $this->nb_article -= abs($nb);
        }

        public function getNom() {
            return $this->nom;
        }
        public function setNom($nom) {
            $this->nom = $nom;
        }
        public function getPrix() {
            return $this->prix;
        }
        public function setPrix($prix) {
            $this->prix = $prix;
        }
        public function getNb_article() {
            return $this->nb_article;
        }
        public function setNb_article($nb_article) {
            $this->nb_article = $nb_article;
        }

        public function __toString() {
            return "Nom : ".$this->getNom()."<br>Prix : ".$this->getPrix()." €<br>Nombre d'article : ".$this->getNb_article()."<br>Sous-total : ".$this->sousTotal()." €";
        }
    }

?>