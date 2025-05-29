<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 6:</u></h2>
    <p>
        Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
        <br>
        de valeurs.
        <br><br>
        <b>Exemple:</b>
        <br>
        <code>$elements = array("Monsieur", "Madame", "Mademoiselle");<br>alimenterListeDeroulante($elements);</code>
    </p>
    <h3>Réponse:</h3>
    <?php
    $elements = array("Monsieur", "Madame", "Mademoiselle");
    alimenterListeDeroulante($elements);
    function alimenterListeDeroulante($elements) {
        echo "<form><fieldset><select>";
        foreach($elements as $el) {
            // affiche les variables du formulaire
            echo "<option value='$el'>$el</option>";
        }
        // ferme le form
        echo "<select></fieldset></form>";
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
