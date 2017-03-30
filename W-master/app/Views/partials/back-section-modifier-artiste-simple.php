
<section>
    <h3>Modification d'une fiche</h3>
    <article>
<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->find($id);

if (!empty($tabLigne))
{
    // RECUPERER LES COLONNES
    $id                     = $tabLigne["id"];
    $nomArtiste             = $tabLigne["nomArtiste"];
    $nomGenre               = $tabLigne["nomGenre"];
    $cheminImagePrincipale  = $tabLigne["cheminImagePrincipale"];
    $descriptionArtiste     = $tabLigne["descriptionArtiste"];
    $artistesLies           = $tabLigne["artistesLies"];
        
    // AFFICHER LE CODE HTML

    echo
<<<CODEHTML

    <h3>id : $id</h3>
    <form method="POST" enctype="multipart/form-data" action="">
        <input style="width: 400px" type="text" name="nomArtiste" required placeholder="Nom" value="$nomArtiste"><br>
        <input style="width: 400px" type="text" name="nomGenre" required placeholder="Genre" value="$nomGenre"><br>
        <input type="file" name="cheminImagePrincipale" placeholder="Chemin image" value="$cheminImagePrincipale"><br>
        <input style="width: 400px" type="text" name="artistesLies" required placeholder="Artistes liés" value="$artistesLies"><br>
        <textarea name="descriptionArtiste" required placeholder="descriptionArtiste" cols="60" rows="10">$descriptionArtiste</textarea><br>
        <button type="submit">Modifier</button>
        <input type="hidden" name="idForm" value="artisteUpdate">
        <input type="hidden" name="id" value="$id">

        <div class="retour">
            $artisteUpdateRetour
        </div>
    </form>

CODEHTML;

}
?>
    </article>
</section>