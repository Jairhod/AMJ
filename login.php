<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login du back office</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="assets/css/login-style.css">

  
</head>

<body>
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">AMJ Back Office
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Connexion</h1>
    <form method="GET">
      <div class="input-container">
        <input type="#{email}" id="#{label}" name="emailConnexion" required="required"/>
        <label for="#{label}">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" name="passConnexion" required="required"/>
        <label for="#{label}">Mot de Passe</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="submitConnexion"><span>Se connecter</span></button>
      </div>
      <input type="hidden" name="idForm" value="connexion"/>
      
      <div class="footer"><a href="#">Mot de Passe oublié ?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">S'inscrire
      <div class="close"></div>
    </h1>
    <form method="GET">
      <div class="input-container">
        <input type="#{email}" id="#{email}" name="emailInscription" required="required"/>
        <label for="#{label}">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" name="pass1Connexion" required="required"/>
        <label for="#{label}">mot de Passe</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="#{type}" id="#{label}" name="pass2Connexion" required="required"/>
        <label for="#{label}">Répétez votre mot de Passe</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="submitInscription" <span>Je m'inscris !</span></button>
      </div>
    <input type="hidden" name="idForm" value="inscription"/>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="script/bo-script.js"></script>

</body>
</html>
