<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 13:</u></h2>
    <p>
        Créer une classe Voiture possédant les propriétés suivantes: <code>marque</code>, <code>modele</code>, <code>nbPortes</code> et
        <br>
        <code>vitesseActuelle</code> ainsi que les méthodes <code>demarrer()</code>, <code>accelerer()</code>et <code>stopper()</code> en plus
        <br>
        des accesseurs (<code>get</code>) et mutateurs (<code>set</code>) traditionnels. La vitesse initial de chaque véhicule
        <br>
        instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un
        <br>
        véhicule.
        <br><br>
        <code>v1 -> "Peugeot", "408", 5</code>
        <br>
        <code>v2 -> "Citroën", "C4", 3</code>
        <br><br>
        Coder l'ensemnle des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
        <br>
        tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
        suivants
        <br><br>
        <b>Bonus</b>: ajouter une méthode <code>ralentir(vitesse)</code> dans la classe Voiture.
    </p>
    <h3>Réponse:</h3>
    <?php

    class Voiture {
        // PROPRIETES
        public $marque;
        public $modele;
        public $nbPortes;
        public $moteur = false;
        public $vitesse = 0;
        public $num = 0;            
        private static $index=0;

        // METHODES
        public function __construct($marque, $modele, $nbPortes) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
            $this->num = self::$index++;
        }
        // FONCTIONS
        function demarrer() { // DEMARRER / SINON ...
            if($this->moteur!=true)
            {$moteur=true;$this->moteur=$moteur;return "Le véhicule ".$this->marque." ".$this->modele." démarre<br>";}
            else
            {return "Le véhicule ".$this->marque." ".$this->modele." est démarré<br>";}               
        }
        function vitesseActuelle() { // AFFICHE VITESSE
            return "La vitesse du véhicule ".$this->marque." ".$this->modele." est de: ".$this->vitesse." km / h<br>";
        }
        function accelerer($plus) { // ACCELERE DE ... SI MOTEUR ALLUME SINON AFFICHE ALLUMER
            if($this->moteur!=true)
            {$this->plus = $plus;return "Le véhicule ".$this->marque." ".$this->modele." veut accélerer de: ".$this->plus." km / h<br>Pour accélerer, il faut démarrer le véhicule ".$this->marque." ".$this->modele." !<br>";$plus=0;$this->plus=$plus;}
            else
            {$this->vitesse += $plus;$this->plus = $plus;return "Le véhicule ".$this->marque." ".$this->modele." accélère de: ".$this->plus." km / h<br>";}
        }
        function ralentir($moins) { // DECELERER DE ... SI MOTEUR ALLUME SINON AFFICHE ACCELERER
            if($this->moteur!=true)
            {return "Le véhicule ".$this->marque." ".$this->modele." veut décélerer de: ".$this->moins." km / h<br>Pour décélerer, il faut de la vitesse!<br>";}
            else
            {$this->vitesse -= $moins;$this->moins = $moins;return "Le véhicule ".$this->marque." ".$this->modele." décélère de: ".$this->moins." km / h<br>";}
        }
        function stopper() { // STOPPE LE MOTEUR SINON AFFICHE DEJA STOPPER
            if($this->moteur!=false)
            {$moteur=false;$this->moteur=$moteur;return "Le véhicule ".$this->marque." ".$this->modele." est stoppé<br>";$this->moteur=$moteur;}
            else
            {return "Le véhicule ".$this->marque." ".$this->modele." est déjà stoppé<br>";}               
        }
        function statut() { // TERMINAISON AFFICHAGE STATUT MOTEUR
            if($this->moteur!=true)
            {return " à l'arrêt<br>";}
            else
            {return " est démarré<br>";}
        }
        function info() { // INFO VEHICULE
            echo    "<br>Infos véhicule ".$this->num."<br>********************<br>",
                    "Nom et modèle du véhicule: ".$this->marque." ".$this->modele."<br>",
                    "Nombre de portes: ".$this->nbPortes."<br>",
                    "Le véhicule ".$this->marque." est ".$this->statut(),
                    "Sa vitesse actuelle est de: ".$this->vitesse." km / h<br>";
        }
}
    // VALEUR AJOUTER
    $v1 = new Voiture("Peugeot", "408", "5");
    $v2 = new Voiture("Citroën", "C4", "3");

    // EXECUTION FONCTIONNELLE

echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo $v1->ralentir(10);
echo $v1->vitesseActuelle();
echo $v2->vitesseActuelle();
echo $v1->info();
echo $v2->info();

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
