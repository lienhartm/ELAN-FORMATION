<!DOCTYPE html>
    <html>
        <head>
            <title>Form Module</title>
            <link rel="stylesheet" href="./../../style/style.css">
        </head>
        <body>
            <form name="f3" action="./../register/registerModule.php" onsubmit="return validation()" method="POST">
                <fieldset>
                    <legend>Formation</legend>
                    <p>
                        <label>Session :</label>
                        <br>
                        <input type="text" name="titre" value="">
                    </p>
                    <p>
                        <label>Module :</label>
                        <br>
                        <input type="text" name="chapitre" value="">
                    </p>
                    <p>
                        <label>Intitulé :</label>
                        <br>
                        <textarea name="resumer" type="text" rows="10" cols="50"></textarea>
                    </p>
                    <p>
                        <label>Date début :</label>
                        <input type="date" name="debut">
                    </p>
                    <p>
                        <label>Date fin :</label>
                        <input type="date" name="fin">
                    </p>
                    <p>
                        <label>Nombre de places :</label>
                        <input type="number" name="nb_place" min="10" max="10">
                    </p>
                    <input type="submit" name="submit">
                    <input type="reset">
                </fieldset>
            </form>
            
        <script>
function validation() {

    var titre = document.f3.titre.value;
    var chapitre = document.f3.chapitre.value;
    var resumer = document.f3.resumer.value;
    var debut = document.f3.debut.value;
    var fin = document.f3.fin.value;
    var nb_place = document.f3.nb_place.value;

    if(titre.length=="" && chapitre.length=="" && resumer.length=="" && debut=="" && fin=="" && nb_place=="") {
        alert("Veuillez remplir les champs");
        return false;
        }
        else {
        if(titre.length==""){
            alert("Session vide");
            return false;
        }
        if(chapitre.length==""){
            alert("Module vide");
            return false;
        }
        if(resumer.length==""){
            alert("Intitule vide");
            return false;
        }
        if(debut==""){
            alert("Date de début vide");
            return false;
        }
        if(fin==""){
            alert("Date de fin vide");
            return false;
        }
        if(nb_place==""){
            alert("Nombre de place vide");
            return false;
        }
    }
}
        </script>
        </body>
    </html>