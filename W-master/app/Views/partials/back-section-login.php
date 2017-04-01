<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">AMJ Back Office
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Connexion</h1>
    <form method="POST">
        <div class="input-container">
            <input type="text" id="identifiant" name="identifiant" required="required"/>
            <label for="identifiant">Identifiant</label>
        <div class="bar"></div>
        </div>
        <div class="input-container">
            <input type="password" id="pamplemousse" name="pamplemousse" required="required"/>
            <label for="pamplemousse">Mot de Passe</label>
        <div class="bar"></div>
        </div>
            <div class="button-container">
                <button type="submit" name="submit"><span>Se connecter</span></button>
            </div>
            <div class="retour">
                <?php echo $loginRetour; ?>
            </div>
        <input type="hidden" name="idForm" value="login"/>

        <div class="footer"><a href="#">Mot de Passe oublié ?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
        <h1 class="title">S'inscrire
          <div class="close"></div>
        </h1>
    <form method="POST">
        <div class="input-container">
        <input type="text" id="pseudo" name="pseudo" required="required"/>
        <label for="pseudo">Pseudo</label>
        <div class="bar"></div>
      </div>
        <div class="input-container">
            <input type="email" id="email" name="email" required="required"/>
            <label for="email">Email</label>
        <div class="bar"></div>
        </div>
        <div class="input-container">
            <input type="password" id="pamplemousse1" name="pamplemousse1" required="required"/>
            <label for="pamplemousse1">Mot de Passe</label>
        <div class="bar"></div>
        </div>
        <div class="input-container">
            <input type="password" id="pamplemousse2" name="pamplemousse2" required="required"/>
            <label for="pamplemousse2">Répétez votre mot de Passe</label>
        <div class="bar"></div>
        </div>
        <div class="button-container">
            <button type="submit"><span>Je m'inscris !</span></button>
        </div>
            <input type="hidden" name="idForm" value="inscription"/>
    </form>
  </div>
</div>