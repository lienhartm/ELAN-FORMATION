<html>
<body>
    <h1>Algorithmes PHP n°1</h1>
<br><br>
<h2><u>Exercice 15:</u></h2>
<p>
    Créer une classe Personne (nom, prénom et date de naissance).
    <br>
    Instancier deux personnes et afficher leurs informations: nom, prénom et âge.
    <br><br>
    <code>
      $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
      <br>
      $p2 = nem Personne("DUCHEMIN", "Alice", "1985-01-17");
    </code>
  </p>
<h3>Réponse:</h3>
<?php

class Personne {
  // Properties
  public $nom;
  public $prenom;
  public $anniversaire;
  // Methods
  public function __construct($nom,$prenom,$anniversaire) {
  	$this->nom = $nom;
    $this->prenom = $prenom;
    $this->anniversaire = $anniversaire;
  }
  function age() {
  	$nais = date_format(date_create($this->anniversaire),"Y");
    $cuda =  date("Y");
    return $cuda-$nais;
  }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->prenom." ".$p1->nom." a ".$p1->age()." ans";
echo "<br>";
echo $p2->prenom." ".$p2->nom." a ".$p2->age()." ans";

?>
<style>
    body {
        margin-left: 100px;
    }
    h1 {
        text-align: center;
    }
</style>
<body>
</html>