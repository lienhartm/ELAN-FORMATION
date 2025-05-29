<!DOCTYPE HTML>  
    <html>
        <head>
            <title>Form Stagiaire</title>
            <link rel="stylesheet" href="./../../style/style.css">
        </head>
        <body>  
            <form name="f2" action="../../register/registerStagiaire.php" onsubmit="return validation()" method="POST">
                <fieldset>
                    <legend>Stagiaire</legend>
                    <p>
                        <label>Identifiant:</label>
                        <br>
                        <input type="text" name="id" value="">
                    </p>
                    <p>
                        <label>Mot de passe:</label>
                        <br>
                        <input type="text" name="mdp" value="">
                    </p>
                        <label>Nom:</label>
                        <br>
                        <input type="text" name="nom" value="">
                    </p>
                    <p>
                        <label>Prenom:</label>
                        <br>
                        <input type="text" name="prenom" value="">
                    </p>
                    <p>
                        <label>Naissance:</label>
                        <br>
                        <input type="date" name="naissance" value="">
                    </p>
                    <p>
                        <label>Ville:</label>
                        <br>
                        <input type="text" name="ville" value="">
                    </p>
                    <p>
                        <label>E-mail:</label>
                        <br>
                        <input type="text" name="email" value="">
                    </p>
                    <p>
                        <label>Telephone:</label>
                        <br>
                        <input type="text" name="tel" value="">
                    </p>
                    <p>
                        <label>Sexe:</label>
                        <br>
                        <label>Femme</label>
                        <input type="radio" name="sexe"  value="femme">
                        <label>Homme</label>
                        <input type="radio" name="sexe"  value="homme">
                        <br><br>
                        <input type="submit" name="submit">
                        <input type="reset">
                    </p>
                </fieldset>
            </form>
<script>
  function validation() {
    
    var id = document.f2.id.value;
    var mdp = document.f2.mdp.value;
    var nom = document.f2.nom.value;
    var prenom = document.f2.prenom.value;
    var naissance = document.f2.naissance.value;
    var ville = document.f2.ville.value;
    var email = document.f2.email.value;
    var tel = document.f2.tel.value;
    var sexe = document.f2.sexe.value;
    
    if(id.length=="" && mdp.length=="" && nom.length=="" && prenom.length=="" && naissance.length=="" && ville.length=="" && email.length=="" && tel.length=="" && sexe=="") {
      alert("Veuillez remplir les champs");
      return false;
    }
    else {
      if(id.length==""){
          alert("Identifant vide");
          return false;
      }
      if(mdp.length==""){
          alert("Mot de passe vide");
          return false;
      }
      if(nom.length==""){
          alert("Nom vide");
          return false;
      }
      if(prenom.length==""){
          alert("Prenom vide");
          return false;
      }
      if(naissance.length==""){
          alert("Naissance vide");
          return false;
      }
      if(ville.length==""){
          alert("Ville vide");
          return false;
      }
      if(email.length==""){
          alert("Email vide");
          return false;
      }
      if(tel.length==""){
          alert("Telephone vide");
          return false;
      }
      if(sexe==""){
          alert("Sexe vide");
          return false;
      }

  }
}
</script>
</body>
</html>
