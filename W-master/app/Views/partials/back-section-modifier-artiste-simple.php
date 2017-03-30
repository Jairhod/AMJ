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
    $srcImage               = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$cheminImagePrincipale);
        
    // AFFICHER LE CODE HTML

    echo
<<<CODEHTML
    <section>
    <h3>Photo de profil</h3>
    <img style="width: 200px" src="$srcImage" alt="$nomArtiste">
    <article>
    <h3>id : $id</h3>
    <form method="POST" enctype="multipart/form-data" action="">
        <input style="width: 400px" type="text" name="nomArtiste" required placeholder="Nom" value="$nomArtiste"><br>
        <input style="width: 400px" type="text" name="nomGenre" required placeholder="Genre" value="$nomGenre"><br>
        <input style="width: 400px" type="text" name="artistesLies" required placeholder="Artistes liés" value="$artistesLies"><br>
        <textarea name="descriptionArtiste" required placeholder="descriptionArtiste" cols="60" rows="10">$descriptionArtiste</textarea><br>
        <span>Modifier image de profil : </span>
        <input type="file" name="cheminImagePrincipale" value="$cheminImagePrincipale" placeholder="Image de profil"><br>
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