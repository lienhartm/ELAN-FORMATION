<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 7:</u></h2>
    <p>
        Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
        <br>
        dans le tableau associatif si la case est cochée ou non.
        <br><br>
        <b>Exemple:</b>
        <br>
        <code>genererCheckbox($elements);</code>
        <br>
        <span>//où $elements est un tableau associatif clé => valeur avec 3 entrées.</spsan>
    </p>
    <h3>Réponse:</h3>
    <?php
    $elements = array("Choix 1"=>false, "Choix 2"=>false, "Choix 3"=>false);
    genererCheckbox($elements);
    function genererCheckbox($elements) {
        echo "<form><fieldset>";
        foreach($elements as $el => $e) {
            // var_dump($e);
            // var_dump($el);
            // affiche les variables du formulaire
            echo "<input type='checkbox'>".$el."<br>";
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
