
    <section>
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