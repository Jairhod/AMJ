    <section>
        <h3>Gerer artiste</h3>
    </section>

    <section>
        <h3>Formulaire de creation d'une fiche</h3>
        <form action="" method="GET">
            <input type="text" name="nomArtiste" required placeholder="nomArtiste"><br>
            <input type="text" name="nomGenre" required placeholder="nomGenre"><br>
            <input type="text" name="artistesLies" required placeholder="artistesLies"><br>
            <input type="text" name="cheminImagePrincipale" required placeholder="cheminImagePrincipale"><br>
            <textarea type="text" name="descriptionArtiste" required placeholder="descriptionArtiste" cols="60" rows="5"></textarea><br>

            <button type="submit">Créer fiche</button>
            <input type="hidden" name="idForm" value="artisteCreate">
            <div class="retour">
                <?php echo $artisteCreateRetour; ?>
            </div>
        </form>
    </section>