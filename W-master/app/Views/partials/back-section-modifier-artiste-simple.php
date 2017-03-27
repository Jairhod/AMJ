
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

    <form method="GET" action="">
        <input type="text" name="nomArtiste" required placeholder="Nom" value="$nomArtiste"><br>
        <input type="text" name="nomGenre" required placeholder="Genre" value="$nomGenre"><br>
        <input type="text" name="cheminImagePrincipale" required placeholder="chemin Image" value="$cheminImagePrincipale"><br>
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