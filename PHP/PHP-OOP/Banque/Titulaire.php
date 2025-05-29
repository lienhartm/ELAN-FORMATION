<?php 

class Titulaire {
    
    // propriétés de classe
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $ville;
    public $comptes;

    // a l'appel du constructeur, permettra d'instancier une classe 
    public function __construct($nom, $prenom, $dateNaissance, $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->ville = $ville;
        // comptes est une liste
        $this->comptes = [];
    }

    // function 'addCompte' qui recupere les comptes dans ce meme tableau du dit Titulaire
    public function addCompte(Compte $compte) {
        $this->comptes[] = $compte;
    }
    // age
    public function age() {
        $date1=date_create(date("d-m-Y"));
        $date2=date_create($this->dateNaissance);
        /* date_diff() retourne la difference */
        $diff= date_diff($date1,$date2);
        /* date_format() modifie le format de la date */
        //echo "Date courante: ".date_format($date1, "d/m/Y")."<br>";
        return "Née le : ".date_format($date2, "d/m/Y")."<br>".
        /* format() return le format de la date */
        $diff->format("Age : %Y ans<br>");
    }
    // comptes
    public function compte() {
        $libelles = "Comptes : <br><ul>";
        foreach($this->comptes as $compte){
            $libelles .= "<li>".$compte->getLibelle()."</li><br>";
        }
        return $libelles .= "</ul>";
    }
    
    // getter / setter / __toString
    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
      }
    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    public function getDateNaisssance() {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance;
    }
    public function getVille() {
        return $this->ville;
    }
    public function setVille($ville) {
        $this->ville = $ville;
    }
    public function __toString() {
        return "Nom : ".$this->getNom()."<br>Prénom : ".$this->getPrenom()."<br>".$this->age()."Ville : ".$this->getVille();
    }
// Functions
    // info titulaire + les comptes
    public function titulaireInfo() {
        return "Nom : ".$this->getNom()."<br>Prénom : ".$this->getPrenom()."<br>".$this->age().$this->compte();
    }

    // virement
    public function virement($crediteur, $beneficiaire, $montant) {
        $crediteur->debiter(abs($montant));
        $beneficiaire->crediter(abs($montant));
        return "</li></ol><br><u>Montant du virement de compte 1 à compte 2 :</u> <b>".$montant." Euro</b><br><ol><li>".$crediteur."</li><br><li>".$beneficiaire;
        }
}
?>