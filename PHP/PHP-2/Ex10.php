<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 10:</u></h2>
    <p>
        En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire
        <br>
        complet qui contient les informations suivantes: champs de texte avec nom, prénom, adresse email,
        <br>
        ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation:
        <br>
        "Développeur Logiciel", "Designer Web", "Intégrateur" ou "Chef de projet".
        <br><br>
        Le formulaire devvra également comporter un bouton permettant de le soumettre à un traitement
        <br>
        de validation (submit).
    </p>
    <h3>Réponse:</h3>
    <?php
    $nomsInput = array("Nom", "Prénom", "Email", "Ville");
    $nomsRadio = array("Monsieur", "Madame", "Mademoiselle");
    $elements = array("Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet");
    echo "<form><fieldset>";
    afficherRadio($nomsRadio);
    echo "<br>";
    echo afficherInput($nomsInput);
    echo "<br>";
    alimenterListeDeroulante($elements);
    function afficherInput($nomsInput) {
        foreach($nomsInput as $nom) {
            // affiche les variables du formulaire
            echo "<label for='$nom'>$nom</label><br><input type='text' id='$nom' name='$nom' value=''><br>";
        }
    }
    function afficherRadio($nomsRadio) {

        foreach($nomsRadio as $nomRadio) {
            echo "<input type='radio'>$nomRadio<br>";
        }
     }
     function alimenterListeDeroulante($elements) {
        echo "<select>";
        foreach($elements as $el) {
            echo "<option value='$el'>$el</option>";
        }
        echo "<select>";
    }
    echo "<br><br><input type='submit'></fieldset></form>";
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

