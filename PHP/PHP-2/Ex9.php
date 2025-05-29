<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 9:</u></h2>
    <p>
        Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de
        <br>
        valeurs en paramètre ("Monsieur", "Madame", "Mademoiselle").
        <br><br>
        <b>Exemple:</b>
        <br>
        <code>afficherRadio($nomsRadio);</code>
    </p>
    <h3>Réponse:</h3>
    <?php
    $nomsRadio = array("Monsieur", "Madame", "Mademoiselle");
    afficherRadio($nomsRadio);
    function afficherRadio($nomsRadio) {
        echo "<form><fieldset>";
        foreach($nomsRadio as $nomRadio) {
            echo "<input type='radio'>$nomRadio<br>";
        }
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
