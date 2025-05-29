<?php 

foreach($sujets->fetchAll() as $sujet) { ?>

    <p><?= $sujet['titre'] ?></p>
    <p><?= $sujet['auteur']." ".$sujet['creation'] ?></p>
    <br><br>

<?php } 

foreach($messages->fetchAll() as $message) {?>

        <p><?= $message['id_auteur']." ".$message['creation'] ?></p><br>
        <br>
        <p><?= $message['texte'] ?></p><br><br>

<?php } ?>

<div class="frm">
                <form name="f1" target="content" action="../../register/registerMessage.php?id=<?= $sujet['id_sujet'] ?>" onsubmit="return validation()" method="POST">
                    <fieldset>
                        <legend>Message : </legend>                        
                        <label>Auteur : </label><input type="text" name="user" value=""><br>    <!---->
                        <label>Titre : </label><input type="text" name="titre" value=""><br>
                        <br>
                        <label>Sujet : </label>
                        <textarea type="text" id="message" name="message" cols="100" rows="10" value=""></textarea>
                        <br>
                        <input type="submit" name="submit"><input type="reset">
                    </fieldset>
                </form>
            </div>

            <script>
                function validation() {

                    var message=document.f1.message.value;
                    var user=document.f1.user.value;
                    var titre=document.f1.titre.value;
                    
                    if(message =="") {
                        alert("Veuillez remplir le champ message");
                        return false;
                    }
                    if(user == "") {
                        alert("Veuillez remplir le champ auteur")
                    }
                    if(titre == "") {
                        alert("Veuillez remplir le champ titre");
                        return false;
                    }

                }
            </script>