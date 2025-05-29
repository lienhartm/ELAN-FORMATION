<!doctype html>
    <html>
        <head>
            <link rel="stylesheet" src="../../style/style.css">
        <head>
        <body>
            <form name="f1" action="../../register/registerSujet.php" onsubmit="return validation()" method="POST">
                <fieldset>
                    <legend>Sujet : </legend>                        
                    <label>Auteur : </label><input type="text" name="user" value=""><br>    <!---->
                    <label>Titre : </label><input type="text" name="titre" value=""><br>
                    <br>
                    <label>Sujet : </label><br>
                    <textarea type="text" id="sujet" name="sujet" cols="100" rows="10" value=""></textarea>
                    <br><br>
                    <input type="submit" name="submit"><input type="reset">
                </fieldset>
            </form>

            <script>
                function validation() {

                    var sujet=document.f1.sujet.value;
                    var user=document.f1.user.value;
                    var titre=document.f1.titre.value;
                    
                    if(sujet == "") {
                        alert("Veuillez remplir le champ sujet");
                        return false;
                    } 
                    if(user == "") {
                        alert("Veuillez remplir le champ auteur");
                        return false;
                    }
                    if(titre == "") {
                        alert("Veuillez remplir le champ titre");
                        return false;
                    }
                    
                }
            </script>
        </body>
    </html>
