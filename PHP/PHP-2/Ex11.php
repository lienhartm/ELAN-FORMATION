<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 11:</u></h2>
    <p>
        Ecrire une fonction personnalisée quui affiche une date en français (en toutes lettres) à partir d'une
        <br>
        chaîne de caractère représentant une date.
        <br><br>
        <b>Exemple:</b>
        <br>
        <code>formaterDateFr("2018-02-23");</code>
    </p>
    <h3>Réponse:</h3>
    <?php
$jourj = "2018-02-23";

formaterDateFr($jourj);

function formaterDateFr($jourj) {
    $date=date_create($jourj);
    $a = date_format($date,"l"); // nom du jour de la semaine
    $b = date_format($date,"d"); // n° jour
    $c = date_format($date,"m"); // n° mois
    $d = date_format($date,"Y"); // n° année
    /* echo $a." ".$b." ".$c." ".$d; // affiche nom/jour/mois/année en anglais */
    // switch() pour traduire les nom de jour de la semaine en français de l'anglais
    echo "<br>";
    switch($a) {
        case "Monday":
            echo "lundi";
            break;
        case "Tuesday":
            echo "mardi";
            break;
        case "Wednesday":
            echo "mercredi";
            break;
        case "Thursday":
            echo "jeudi";
            break;
        case "Friday":
            echo "vendredi";
            break;
        case "Saturday":
            echo "samedi";
            break;
        case "Sunday":
            echo "dimanche";
            break;
        default:
            return "Week-End";
    }
    // affiche le n° du jour
    echo " ".$b." ";
    // idem traduit le mois de l'anglais en français
    switch($c) {
        case "01":
            echo "janvier";
            break;
        case "02":
            echo "février";
            break;
        case "03":
            echo "mars";
            break;
        case "04":
            echo "avril";
            break;
        case "05":
            echo "mai";
            break;
        case "06":
            echo "juin";
            break;
        case "07":
            echo "juillet";
            break;
        case "08":
            echo "août";
            break;
        case "09":
            echo "septembre";
            break;
        case "10":
            echo "octobre";
            break;
        case "11":
            echo "novembre";
            break;
        case "12":
            echo "décembre";
            break;
        default:
            return "Moon";
    }
    // affiche l'année
    echo " ".$d;
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