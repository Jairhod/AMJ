    <section>

        <h3>Formulaire de creation d'une fiche</h3>
        <h4>Bienvenue : <?php echo($w_user["username"]); ?></h4>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="nomArtiste" required placeholder="Nom du groupe"><br>
            <input type="text" name="nomGenre" required placeholder="Style musical"><br>
            <input type="text" name="artistesLies" required placeholder="Style général"><br>
            <label for="imagePrincipale">Choisir 1 image de profil</label>
            <input type="file" name="imagePrincipale" required><br>
            <label for="images[]">Choisir les autres images</label>
            <input type="file" name="images[]" multiple="" ><br>
            <textarea type="text" name="descriptionArtiste" required placeholder="Biographie" cols="40" rows="5"></textarea><br>

            <button class="links" type="submit">Créer fiche</button>
            <input type="hidden" name="idForm" value="artisteCreate">
            <div class="retour">
                <?php echo $artisteCreateRetour; ?>
            </div>
        </form>
        
    </section>