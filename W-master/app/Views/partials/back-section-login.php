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
            <input type="#{text}" id="#{pseudo}" name="pseudo" required="required"/>
            <label for="#{label}">Pseudo</label>
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
        <input type="#{text}" id="#{pseudo}" name="pseudo" required="required"/>
        <label for="#{label}">Pseudo</label>
        <div class="bar"></div>
      </div>
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