<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 14:</u></h2>
    <p>
        Créer une classe Voiture possédant deux propriétés (marque et modèle) ainsi qu'une classe VoitureElec
        <br>
        qui hérite (<i>extends</i>) de la classe Voiture et qui a une propriété suppplémentaire (autonomie).
        <br><br>
        Instancié une voiture " classique " et une voiture " électrique " ayant les caractéristiques suivantes:
        <br>
        <ul>
            <li><b>Peugeot 408:</b> <code>$v1 = new Voiture("Peugeot", "408");</code></li>
            <li><b>BMW i3 150:</b> <code>$ve1 = new VoitureElec("BMW", "I3", 100);</code>
        </ul>
        Votre programme de test devra afficher les informations des deux voitures de la façons suivante:
        <br><br>
        <code>echo $v1 -> getInfo()."&#60;br/&#62;";</code>
        <br>
        <code>echo $ve1 -> getInfo()."&#60;br/&#62;";</code>
    </p>
    <h3>Réponse:</h3>
    <?php

        $v1 = new Voiture("Peugeot", "408");
        $ve1 = new VoitureElec("BMW", "I3", 100);

        class Voiture {
            public $marque;
            public $modele;
            public function __construct($marque, $modele) {
                $this->marque = $marque;
                $this->modele = $modele;
            }
            public function getInfo() {
                return "<b>Voiture classique</b><br>Marque: ".$this->marque."<br>Modele: ".$this->modele."<br>";
            }
        }
        class VoitureElec extends Voiture {
            //public $marque;
            //public $modele;
            public $autonomie;
            public function __construct($marque, $modele, $autonomie) {
                $this->marque = $marque;
                $this->modele = $modele;
                $this->autonomie = $autonomie;
            }
            public function getInfo() {
                return "<b>Voiture électrique</b><br>Marque: ".$this->marque."<br>Modele: ".$this->modele."<br>Autonomie: ".$this->autonomie;
            }
        }

        echo $v1 -> getInfo()."<br>";
        echo $ve1 -> getInfo()."<br>";

    ?>
    <style>
        body {
            margin-left: 100px;
        }
        h1 {
            text-align: center;
        }
        span {
            color:olive;
        }
        form {
            background-color:cadetblue;
            width: 210px;
        }
    </style>
    </body>
</html>