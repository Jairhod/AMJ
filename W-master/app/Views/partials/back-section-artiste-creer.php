    <section>

        <h3>Formulaire de creation d'une fiche</h3>
        <h4>Bienvenue : <?php echo($w_user["username"]); ?></h4>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="nomArtiste" required placeholder="nomArtiste"><br>
            <input type="text" name="nomGenre" required placeholder="nomGenre"><br>
            <input type="text" name="artistesLies" required placeholder="artistesLies"><br>
            <input type="file" name="imagePrincipale" required placeholder="imagePrincipale"><br>
            <input type="file" name="images[]" multiple="" ><br>
            <textarea type="text" name="descriptionArtiste" required placeholder="descriptionArtiste" cols="60" rows="5"></textarea><br>

            <button class="links" type="submit">Créer fiche</button>
            <input type="hidden" name="idForm" value="artisteCreate">
            <div class="retour">
                <?php echo $artisteCreateRetour; ?>
            </div>
        </form>
        
    </section>