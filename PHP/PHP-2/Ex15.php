<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 15:</u></h2>
    <p>
        En utilisant les ressources de la page <span>http://php.net/manual/fr/book.filter.php</span>, vérifier si une
        <br>
        adresse e-mail a le bon format.
        <br><br>
        L'adresse <b>elan@elan-formation.fr</b> est une adresse e-mail invalide
    </p>
    <h3>Réponse:</h3>
    <?php
    bonFormat("elan@elan-formation.fr");
    bonFormat("contact@elan");
    function bonFormat($adresse) {
        if(filter_var($adresse, FILTER_VALIDATE_EMAIL)===false){
        echo "L'adresse ".$adresse." est une adresse e-mail invalide<br>";
        }
        else {
            echo "L'adresse ".$adresse." est une adresse e-mail valide<br>";
        }
    }
    
    //var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
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