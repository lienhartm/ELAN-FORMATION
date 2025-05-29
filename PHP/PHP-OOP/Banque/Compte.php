<?php
//
class Compte {
    private $libelle;
    private $solde;
    private $devise;
    private $titulaire;
//
    public function __construct($libelle, $solde, $devise, Titulaire $titulaire) {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
// '$titulaire' recupere la classe 'Compte' a l'aide de la function 'addCompte' 
        $this->titulaire->addCompte($this);
    }
// nom / prenom titulaire
    public function nomTitulaire() {
        return "Nom : ".$this->titulaire->getNom()."<br>Prénom : ".$this->titulaire->getPrenom()."<br>";
    }
// getter / setter / __toString
    public function getLibelle() {
        return $this->libelle;
    }
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    public function getSolde() {
        return $this->solde;
    }
    public function setSolde($solde) {
        $this->solde = $solde;
    }
    public function getDevise() {
        return $this->devise;
    }
    public function setDevise($devise) {
        $this->devise = $devise;
    }
    public function __toString()
    {
        return "Libellé : ".$this->getLibelle()."<br>Solde : ".$this->getSolde()." ".$this->getDevise()."<br>";
    }
// info compte + nom prenom titulaire
    public function compteInfo() {
        return $this->nomTitulaire()."Libelle : ".$this->libelle."<br>Solde : ".$this->solde."<br>Devise : ".$this->devise;
    }
// function operation bancaire
    public function crediter($montant) {
        return $this->solde += abs($montant);
    }
    public function debiter($montant) {
        return $this->solde -= abs($montant);
    }
}

?>