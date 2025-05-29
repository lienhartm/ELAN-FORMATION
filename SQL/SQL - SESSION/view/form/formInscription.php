<!DOCTYPE html>
    <html>
        <head>
            <title>Form Inscription</title>
            <link rel="stylesheet" href="./../style/style.css">
        </head>
        <body>
            <form name="f1" action="../../register/registerInscription.php" onsubmit="return validation()" method="GET">
                <fieldset>
                    <legend>Inscription</legend>
                    <label>Stagiaire :</label>
                    <select name="stagiaire" id="stagiaire">
                        <option value="">Selectionnez un stagiaire</option>

                    <?php

                        foreach($listStagiaire->fetchAll() as $stagiaire) { ?>

                            <option value="<?= $stagiaire['id_stagiaire'] ?>" name="stagiaire"><?= $stagiaire['nom']." ".$stagiaire['prenom'] ?></option>

                    <?php } ?>

                        </select>
                        <br><br>

                    <label>Formation :</label>
                    <select name="formation" id="formation">
                        <option value="">Selectionnez un module</module>

                    <?php foreach($listFormation->fetchAll() as $formation) { ?>

                        <option value="<?= $formation['id_formation'] ?>" name="formation"><?= $formation['titre']." ".$formation['chapitre'] ?></option>

                    <?php } ?>

                    </select>
                    <br><br>
                    <input type="submit" name="submit">
                    <input type="reset">
                </fieldset>
            </form>
            <script>

                function validation() {

                    var stagiaire = document.f1.stagiaire.value;
                    var formation = document.f1.formation.value;
                    console.log(stagiaire, formation);

                    if(stagiaire == "" && formation == "") {
                        
                        alert("Veuillez remplir les champs");
                        return false;
                        }
                        else {
                        if(stagiaire == ""){
                            alert("Stagiaire Manquant(e)");
                            return false;
                        }
                        if(formation == ""){
                            alert("Formation Manquante");
                            return false;
                        }

                    }
                }

            </script>
        </body>
    </html>