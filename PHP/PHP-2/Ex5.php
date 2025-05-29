<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 5:</u></h2>
    <p>
        Créer une fonction personnalisée permettant de créer un formullaire de champs de texte en
        <br>
        précisant le nom des champs associés.
        <br><br>
        <b>Exemple:</b>
        <br>
        <code>$nomsInput = array("Nom", "Prénom", "Ville");<br>afficherInput($nomsInput);</code>
    </p>
    <h3>Réponse:</h3>
    <?php
    $nomsInput = array("Nom", "Prénom", "Ville");
    echo afficherInput($nomsInput);
    function afficherInput($nomsInput) {
        echo "<form><fieldset>";
        foreach($nomsInput as $nom) {
            // affiche les variables du formulaire
            echo "<label for='$nom'>$nom</label><br><input type='text' id='$nom' name='$nom' value=''><br>";
        }
        // ferme le form
        echo "</fieldset></form>";
    }
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
