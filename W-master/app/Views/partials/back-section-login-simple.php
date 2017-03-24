
    <section>
        <h3>Ma section login</h3>
    </section>

    <section>
        <h3>Formulaire de login</h3>
        <form action="#!" method="GET">
            <input type="text" name="identifiant" required placeholder="Email ou username">
            <input type="password" name="pamplemousse" required placeholder="Mot de passe">
            <button type="submit">Submit</button>
            <input type="hidden" name="idForm" value="login">
            <div class="retour">
                <?php echo $loginRetour; ?>
            </div>
        </form>
    </section>